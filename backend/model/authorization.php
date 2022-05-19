<?

class Authorization {
    public static function createPerson($data) {
        global $db_connect;
        $login = protectionData($data['login']);
        $email = protectionData($data['email']);
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $session_token = md5(random_int(100000, 999999));

        mysqli_query($db_connect, "INSERT INTO `person` (`person_id`, `login`, `email`, `password`, `img`, `session_token`) VALUES (NULL, '$login', '$email', '$password', NULL, '$session_token')");
    }

    public static function getPassword($email) {
        global $db_connect;
        $email = protectionData($email);
    
        $query = mysqli_query($db_connect, "SELECT * FROM person WHERE `email` = '$email'");
        $query = mysqli_fetch_assoc($query);
        $query = $query["password"];
        return $query;
    }

    public static function checkPersonData($data, $type_data) {
        global $db_connect;
    
        $query = mysqli_query($db_connect, "SELECT * FROM `person` WHERE `$type_data` = '$data'");
        $query = mysqli_fetch_assoc($query);
        $query = $query["COUNT"];
    
        return $query;
    }

    public static function getPerson($email) {
        global $db_connect;

        $email = protectionData($email);

        $query = mysqli_query($db_connect, "SELECT * FROM `person` WHERE `email` = '$email'");
        $query = mysqli_fetch_assoc($query);

        return $query;
    }
}

?>