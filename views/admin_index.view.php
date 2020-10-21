<?php require '../views/header.php';  ?>

	<div class="container">
	<h2>Panel de control</h2>
	<a href="new_post.php" class="btn">Nuevo post</a>
	<a href="close.php" class="btn">Cerrar sesión</a>
		<?php foreach ($posts as $post): ?>
			<div class="post">
				<article>
					<h2 class="title"><?php echo $post['id'] . '.- ' . $post['titulo']; ?></h2>
					<a href="edit.php?id=<?php echo $post['id']; ?>">Editar</a>
					<a href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
					<a href="delete.php?id=<?php echo $post['id']; ?>">Borrar</a>
				</article>
		</div>
		<?php endforeach ?>
		<?php require '../pagination.php'; ?>
	</div>
<?php include '../views/footer.php';  ?>	