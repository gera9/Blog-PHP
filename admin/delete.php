<?php 
	session_start();
	require 'config.php';
	require '../functions.php';

	checkSession();

	$connection = connection($bd_config);

	if (!$connection) {
		header('Location: ../error;');
	}

	$id = cleanData($_GET['id']);

	if (!$id) {
		header('Location: ' . RUTA . '/admin');
	}

	$statement = $connection->prepare('DELETE FROM articulos WHERE id = :id');
	$statement->execute(array('id' => $id));

	header('Location: ' . RUTA . '/admin');
?>