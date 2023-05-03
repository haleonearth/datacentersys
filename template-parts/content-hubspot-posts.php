<div class="news-item">
	<div class="img-container">
		<img class="mr-3" src="<?php echo $post_image; ?>" alt="">
	</div>

	<div class="d-flex flex-column justify-content-center">
		<h2 class="h5 text-capitalize">
			<a class="text-dark" href="<?php echo $post_link; ?>">
				<?php echo $post_title; ?>
			</a>
		</h2>

		<p><?php echo $date; ?></p>

		<a class="btn btn-brand-red btn-sm" href="<?php echo $post_link; ?>">Read More</a>
	</div>
</div>
