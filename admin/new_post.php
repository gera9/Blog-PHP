<?php 
	session_start();
	require 'config.php';
	require '../functions.php';

	checkSession();

	$connection = connection($bd_config);

	if (!$connection) {
		header('Location: ../error;');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$title = cleanData($_POST['title']);
		$extracto = cleanData($_POST['extracto']);
		$text = $_POST['text'];
		$thumb = $_FILES['thumb']['tmp_name'];

		$fileUploaded = '../' . $blog_config['folder_images'] . $_FILES['thumb']['name'];

		move_uploaded_file($thumb, $fileUploaded);

		$statement = $connection->prepare(
		'INSERT INTO articulos (id, titulo, extracto, texto, thumb)
		 VALUES (null, :titulo, :extracto, :texto, :thumb)'
		);

		$statement->execute(array(
		':titulo' => $title,
		':extracto' => $extracto,
		':texto' => $text,
		':thumb' => $_FILES['thumb']['name']
		)); 

		header('Location: ' . RUTA . '/admin');
	}

	require '../views/new_post.view.php';
 ?>