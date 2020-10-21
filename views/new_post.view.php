<?php require 'header.php'; ?>

<div class="container">	
	<div class="post">
				<article>
					<h2 class="title">Nuevo artículo</h2>
					<form class="form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						<input type="text" name="title" placeholder="Título del artículo">
						<input type="text" name="extracto" placeholder="Extracto del artículo">
						<textarea name="text" placeholder="Escribe aquí tu artículo..."></textarea>
						<input type="file" name="thumb">

						<input type="submit" value="Crear artículo">
					</form>
				</article>
		</div>
</div>
<?php require 'footer.php'; ?>