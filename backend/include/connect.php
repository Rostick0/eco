<?

$db_config = [
    'hostname' => '127.0.0.1',
    'username' => 'root',
    'password' => 'root',
    'database' => 'eco_db'
];

$db_connect = mysqli_connect($db_config['hostname'], $db_config['username'], $db_config['password'], $db_config['database']);

if (!$db_connect) {
    http_response_code(521);

    $message = [
        'error' => 'Нет подключение к базе данных'
    ];

    echo json_encode($message);
}

?>