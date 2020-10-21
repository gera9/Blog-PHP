<?php $numberPages = numberPages($blog_config['post_by_page'], $connection); ?>
<section class="pagination">
	<ul>
		<?php if (actualPage() === 1): ?>
			<li class="disabled">&laquo;</li>
		<?php else: ?>
			<li><a href="index.php?p=<?php echo actualPage() -1 ?>">&laquo;</a></li>
		<?php endif; ?>

		<?php for($i = 1; $i <= $numberPages; $i++): ?>
			<?php if (actualPage() === $i): ?>
				<li class="active">
					<?php echo $i; ?>
				</li>
			<?php else: ?>
				<li><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php endif; ?>
		
		<?php endfor; ?>

		<?php if(actualPage() == $numberPages): ?>
			<li class="disabled">&raquo;</li>
		<?php else: ?>
			<li><a href="index.php?p=<?php echo actualPage() + 1; ?>">&raquo;</a></li>
		<?php endif; ?>
	</ul>
</section>