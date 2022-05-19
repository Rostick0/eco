<?

function sendMail($recipient, $subject) {
    $_SESSION['email_token'] = random_int(000000, 999999);
    $_SESSION['email'] = $recipient;

    $to = $recipient;
    $from = "zajcevav30@gmail.com";
    $message = "Ваш код для авторизации: {$_SESSION['email_token']}";
    $headers = "From: $from" . "\r\n" . 
    "Reply-To: $from" . "\r\n" . 
    "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);
}

?>