<?php 

session_start();

require 'config.php';
require '../functions.php';

checkSession();

$connection = connection($bd_config);

if (!$connection) {
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title = cleanData($_POST['title']);
	$extracto = cleanData($_POST['extracto']);
	$text = $_POST['text'];
	$id = cleanData($_POST['id']);
	$thumb_saved = $_POST['thumb-saved'];
	$thumb = $_FILES['thumb'];

	if (empty($thumb['name'])) {
			$thumb = $thumb_saved;
		} else {

			$file_uploaded = '../' . $blog_config['folder_images'] . $_FILES['thumb']['name'];
			move_uploaded_file($_FILES['thumb']['tmp_name'], $file_uploaded);

			$thumb = $_FILES['thumb']['name'];
		}

		$statement = $connection->prepare(
			'UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, 
				thumb = :thumb WHERE id = :id'
		);

		$statement->execute(array(
		':titulo' => $title,
		':extracto' => $extracto,
		':texto' => $text,
		':thumb' => $thumb,
		':id' => $id
		));				

		header('Location: ' . RUTA . '/admin');

} else {
	$id_article = idArticle($_GET['id']);

	if (empty($id_article)) {
		header('Location: ' . RUTA . '/admin');
	}

	$post = getPostById($connection, $id_article);

	if (!$post) {
		header('Location: ' . RUTA . '/admin');	
	}

	$post = $post[0];

	}


	require '../views/edit.view.php';
 ?>