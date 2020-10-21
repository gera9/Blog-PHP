<?php 

require 'admin/config.php';
require 'functions.php';

$connection = connection($bd_config);
$idArticle = idArticle($_GET['id']);

if (!$connection) {
	header('Location: error.php');
}

if (empty($idArticle)) {
	header('Location: index.php');
}

$post = getPostById($connection, $idArticle);

if (!$post) {
	header('Location: index.php');
}

$post = $post[0];

require 'views/single.view.php';

 ?>