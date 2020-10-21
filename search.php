<?php 

	require 'admin/config.php';
	require 'functions.php';

	$connection = connection($bd_config);
	if (!$connection) {
		header('Location: error.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])) {
		$search = cleanData($_GET['search']);

		$statement = $connection->prepare(
			'SELECT * FROM articulos WHERE titulo LIKE :search or texto LIKE :search'
		);

		$statement->execute(array(':search' => "%$search%"));
		$results = $statement->fetchAll();

		if (empty($results)) {
			$title = 'No se encontraron artículos de: ' . $search;
		} else {
			$title = 'Resultados de la búsqueda: ' . $search;
		}
	} else {
		header('Location: ' . RUTA . '/index.php');
	}

	require 'views/search.view.php';
 ?>