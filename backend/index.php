<?
session_start();

require_once 'include/connect.php';
require_once 'globals.php';
require_once 'controller/mail.php';
require_once 'model/authorization.php';
require_once 'controller/authorization.php';
require_once 'model/post.php';
require_once 'controller/post.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *, Authorization');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credentials: true');
header('Content-Type: application/json; charset=utf-8');

$server_method = $_SERVER['REQUEST_METHOD'];

$q = addslashes($_GET['q']);
$param = explode('/', $q);
$id = (integer) $param[1];

$limit = (int) $_GET['limit'];
$offset = (int) $_GET['offset'];

switch ($server_method) {
    case 'GET':
        switch ($param[0]) {
            case 'post':
                if (!empty($id)) {
                    getPost($id);
                } else {
                    getPosts($limit = null, $offset = null, $desc = false);
                }
                break;
        }
        break;

    case 'POST':

        switch ($param[0]) {
            case 'registration':
                startCreatePerson($_POST);
                break;
            case 'registration_email':
                endCreatePerson($_POST);
                break;
            case 'login':
                logPerson($_POST);
                break;
            case 'post':
                addPost($_POST, $_SESSION['person']['person_id'], $_FILES['img']);
                break;
        }
        break;
    case 'DELETE':
        switch ($param[0]) {
            case 'post':
                deletePost($id, $_SESSION['person']['person_id']);
                break;
        }
    break;
}

?>