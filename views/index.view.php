<?php require 'header.php';  ?>

	<div class="container">
		<?php foreach ($posts as $post): ?>
			
			<div class="post">
				<article>
					<h2 class="title"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
					<p class="date"><?php echo dateArticle($post['fecha']); ?></p>
					<div class="thumb">
						<a href="single.php?id=<?php echo $post['id']; ?>">
							<img src="<?php echo RUTA; ?>/images/<?php echo $post['thumb']; ?>" alt=""> 
						</a>
					</div>
					<p class="extracto"><?php echo $post['extracto']; ?></p>
					<a href="single.php?id=<?php echo $post['id']; ?>" class="continue">Continuar leyendo...</a>
				</article>
		</div>

		<?php endforeach ?>

		<?php require 'pagination.php'; ?>

	</div>

<?php include 'footer.php';  ?>	