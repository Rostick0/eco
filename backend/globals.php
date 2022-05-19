<?

function protectionData($data) {
    $data = htmlspecialchars($data);
    $data = addslashes($data);

    return $data;
}

?>