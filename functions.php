<?php 

function connection($bd_config){

	try {
		$connection =	new PDO('mysql:host=localhost;dbname='.$bd_config['database'], $bd_config['user'], $bd_config['password']);
		return $connection;
	} catch (PDOException $e) {
		return false;
	}


}	

function cleanData ($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function actualPage(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function getPost($postByPage, $connection){
	$start = (actualPage() > 1) ? actualPage() * $postByPage - $postByPage : 0;
	$sentence = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $start, $postByPage");
	$sentence->execute();
	return $sentence->fetchAll();
}

function numberPages($postByPage, $connection){
	$totalPost = $connection->prepare('SELECT FOUND_ROWS() as total');
	$totalPost->execute(); 
	$totalPost = $totalPost->fetch()['total'];

	$numberPages = ceil($totalPost / $postByPage);

	return $numberPages;
}

function idArticle($id){
	return (int)cleanData ($id);
}

function getPostById($connection, $id){
	$result = $connection->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
	$result = $result->fetchAll();
	return ($result) ? $result : false;
}

function dateArticle($date){
	$timestamp = strtotime($date);
	$months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$day = date('d', $timestamp); 
	$month = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$date = "$day de " . $months[$month] . " del $year";
	return $date;
}

function checkSession(){
	if (!isset($_SESSION['admin'])) {
		header('Location: ' . RUTA);
	}

}
?>