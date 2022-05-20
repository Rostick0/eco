<?php
function getPosts($limit = null, $offset = null, $desc = false, $where_param = null) {
    if ($limit) {
        $limit = "LIMIT '$limit'";
    } else {
        $limit = 'LIMIT 10';
    }

    if ($offset) {
        $offset = "`post_id` > $offset";
    } else {
        $offset = "";
    }

    if ($desc) {
       $desc = "ORDER BY `$desc` DESC";
    } else {
		$desc = '';
	}

	if ($where_param) {
		$where_param = 'WHERE ' . $where_param;
	}
    
    $posts = Post::getPosts($limit, $offset, $desc, $where_param);

	if (!$posts) {
		http_response_code(404);
        
        $message = [
            'message' => 'Посты не найдены'
        ];
        echo json_encode($message);
        return;
	}

	echo json_encode($posts);
}

function getPost($post_id) {

	$post = Post::getPost($post_id);

	if (!$post) {
		http_response_code(404);

        $message = [
            'message' => 'Пост не найден'
        ];
        echo json_encode($message);
        return;
	}
	echo json_encode($post);
}

function addPost($data, $person_id, $img) {
    $data = json_decode($data['text'], true);

	$title = protectionData($data['title']);
	$text = protectionData($data['text']);

	if ($img) {
		$path_img = 'upload/';
		$img_name = random_int(10000, 99999) . time() . '.png';
		if ($img['type'] == 'image/png' || $img['type'] == 'image/jpeg') {
			move_uploaded_file($img['tmp_name'], $path_img . $img_name);
		} else {
			$message = [
				'message' => 'Не разрешенный тип файлов'
			];
			echo json_encode($message);
			return;
		}
	} else {
		$img_name = NULL;
	}

	$post = Post::createPost($title, $text, $person_id, $img_name);

	if ($post) {
		http_response_code(201);

		$message = [
			'message' => 'Пост создан'
		];
		echo json_encode($message);
		return;
	} else {
		http_response_code(403);

		$message = [
			'message' => 'Пост не создан'
		];

		echo json_encode($message);
		return;
	}
}

function deletePost($post_id, $person_id) {
	$img_name = Post::getPost($post_id)['img'];
	$delete = Post::deletePost($post_id, $person_id);

	if ($delete) {
		unlink("upload/$img_name");

		$message = [
			'message' => 'Пост удалён'
		];
		echo json_encode($message);
		return;
	} else {
		http_response_code(403);

		$message = [
			'message' => 'Пост не удалён'
		];
		echo json_encode($message);
		return;
	}
}

// function editPost($connection, $id, $data) {
// 	$title = $data['title'];
// 	$text = $data['text'];
// 	mysqli_query($connection,"UPDATE `post` SET `title` = '$title', `text` = '$text' WHERE `post`.`post_id` = $id");
// }
