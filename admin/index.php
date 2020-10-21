<?php session_start();

require 'config.php';
require '../functions.php';

$connection = connection($bd_config);

checkSession();

if (!$connection) {
	header('Location: ../error.php');
}

$posts = getPost($blog_config['post_by_page'], $connection);

require '../views/admin_index.view.php';

 ?>