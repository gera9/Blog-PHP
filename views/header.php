<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/styles.css">
	<title>Blog</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="logo left">
				<p><a href="<?php echo RUTA;?>">Mi primer blog</a></p>
			</div>
			<div class="right">
				<form name="search" class="search" action="<?php echo RUTA; ?>/search.php" method="get">
					<button type="submit" class="icon fas fa-search"></button>
					<input type="text" name="search" placeholder="Buscar...">
				</form>

				<nav class="menu">
					<ul>
						<li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#">Contacto <i class="fas fa-envelope"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>