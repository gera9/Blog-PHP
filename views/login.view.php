<?php require 'header.php'; ?>

<div class="container">
		<div class="post">
			<article>
				<h2 class="title">Iniciar sesión</h2>
				<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<input type="text" name="user" placeholder="Usuario">
					<input type="password" name="password" placeholder="Contraseña">
					<input type="submit" value="Iniciar sesión">
				</form>
				
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>