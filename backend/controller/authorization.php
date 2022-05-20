<?

function startCreatePerson($data) {
    $data = json_decode(file_get_contents('php://input'), true);

    $login = $data['login'];
    $password = $data['password'];
    $email = $data['email'];

    $message = null;

    if (Authorization::checkPersonData($login, 'login')) {
        $message = [
            'message' => 'Такой логин уже существует'
        ];
    }

    if (Authorization::checkPersonData($email, 'email')) {
        $message = [
            'message' => 'Такая почта уже зарегистрирована'
        ];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = [
            'message' => 'Недопустимый email'
        ];
    }

    if ($message) {
        echo json_encode($message);
        return;
    } else {
        $message = [
            'login' => $login,
            'password' => $password,
            'email' => $email,
            'status' => 'true',
            'message' => 'Подтвердите почту'
        ];

        sendMail($email ,'Регистрация');

        echo json_encode($message);
        //echo json_encode($message);
        return;
    }
}

function endCreatePerson($data) {
    $data = json_decode(file_get_contents('php://input'), true);

    $email = $data['email'];
    $email_token = $data['email_token'];

    $message = [];

    if ($email != $_SESSION['email']) {
        $message = [
            'status' => 'false',
            'message' => 'Не совпадает почта'
        ];
    }

    if ($email_token != $_SESSION['email_token']) {
        $message = [
            'status' => 'true',
            'message' => 'Не совпадает код из почты'
        ];
    }

    if (Authorization::checkPersonData($email, 'email')) {
        $message = [
            'message' => 'Не совпадает код из почты'
        ];
    }

    if (!$_SESSION['email'] && !$_SESSION['email_token']) {
        http_response_code(403);

        $message = [
            'message' => 'Нет доступа'
        ];
    }

    if ($message) {
        echo json_encode($message);
        return;
    } else {
        $message = [
            'message' => 'Ваш аккаунт успешно зарегестрирован'
        ];

        Authorization::createPerson($data);
        $_SESSION['person'] = Authorization::getPerson($email);

        echo json_encode($message);
        return;
    }
}

function logPerson($data) {
    $data = json_decode(file_get_contents('php://input'), true);
    $_SESSION['authorization_attempt'] += 1;

    $email = protectionData($data['email']);
    $session = protectionData($data['sessuin']);
    $password = protectionData($data['password']);

    $person = Authorization::getPerson($email);
    $hash_password = $person['password'];

    $message = [];

    if ($person['email'] == $email && $person['session_token'] == $session) {
        $_SESSION['person'] = Authorization::getPerson($email);
        echo json_encode([
            'email' => "{$_SESSION['person']['email']}",
            'session_token' => "{$_SESSION['person']['session_token']}",
            'status' => 'true'
        ]);
        return;
    }

    if (!password_verify($password, $hash_password)) {
        $message = [
            'message' => 'Неправильная почта или пароль'
        ];
    }

    if ($_SESSION['authorization_attempt'] == 5) {
        $_SESSION['authorization_time_block'] = date('Y-m-d H:i:s', time()+60*10);
        $message = [
            'message' => 'Превышено количество попыток, попробуйте через 10 минут'
        ];
    }

    if ($_SESSION['authorization_attempt'] >= 6) {
        if ($_SESSION['authorization_time_block'] < date('Y-m-d H:i:s')) {
            $_SESSION['authorization_attempt'] = 0;
            $message = [];
        }
    }

    if ($message) {
        echo json_encode($message);
        return;
    } else {
        $_SESSION['person'] = Authorization::getPerson($email);
        echo json_encode([
            'email' => "{$_SESSION['person']['email']}",
            'session_token' => "{$_SESSION['person']['session_token']}",
            'status' => 'true'
        ]);
        return;
    }
}

?>