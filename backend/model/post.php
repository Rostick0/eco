<?

class Post {
    static public function getPosts($limit, $offset, $desc) {
        global $db_connect;

        $query = mysqli_query($db_connect, "SELECT * FROM `post` WHERE $offset $desc $limit");
        $post_list = [];
        while ($post = mysqli_fetch_assoc($query)) {
            $post_list[] = $post;
        }

        return $post_list;
    }

    static public function getPost($post_id) {
        global $db_connect;

        $post = mysqli_query($db_connect, "SELECT * FROM `post` WHERE `post_id` = '$post_id';");
        $post = mysqli_fetch_assoc($post);
        return $post;
    }

    static public function createPost($title, $text, $person_id, $img_name) {
        global $db_connect;

        return mysqli_query($db_connect, "INSERT INTO `post` (`post_id`, `title`, `text`, `date`, `author_id`, `img`) VALUES (NULL, '$title', '$text', CURRENT_TIMESTAMP, '$person_id', '$img_name')");
    }

    static public function deletePost($post_id, $person_id) {
        global $db_connect;

        return mysqli_query($db_connect, "DELETE FROM `post` WHERE `post_id` = '$post_id' AND `author_id` = '$person_id'");
    }
}

?>