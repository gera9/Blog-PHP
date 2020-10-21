<?php require 'header.php';  ?>

	<div class="container">
		<div class="post">
			<article>
				<h2 class="title"><?php echo $post['titulo']; ?></h2>
				<p class="date"><?php echo dateArticle($post['fecha']); ?></p>
				<div class="thumb">
					<img src="<?php echo RUTA; ?>/images/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo']; ?>"> 
				</div>
				<p class="extracto"><?php echo nl2br($post['texto']); ?></p>
			</article>
		</div>
	</div>

<?php include 'footer.php';  ?>	