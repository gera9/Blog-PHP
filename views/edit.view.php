<?php require 'header.php'; ?>

<div class="container">	
	<div class="post">
				<article>
					<h2 class="title">Editar artículo</h2>
					<form class="form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						
						<input type="hidden" value="<?php echo $post['id']; ?>" name="id">
						<input type="text" name="title" value="<?php echo $post['titulo']; ?>">
						<input type="text" name="extracto" value="<?php echo $post['extracto']; ?>">
						<textarea name="text"><?php echo $post['texto']; ?></textarea>
						<input type="file" name="thumb">
						<input type="hidden" name="thumb-saved" value="<?php echo $post['thumb']; ?>">

						<input type="submit" value="Guardar">
					</form>
				</article>
		</div>
</div>
<?php require 'footer.php'; ?>