<div class="col-12 col-lg-9">
	<div class="container-fluid">
		<div class="row">
			<div class="white-papers-list">

			<?php
			$args = array(
				'post_type' => 'resources',
				'category_name' => 'white-paper'
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					$category = get_the_category();
					$file_link = get_field( 'file' );
			?>
					<div class="card">
						<div class="card-body d-flex flex-column">
							<span class="h5 text-brand-blue"><?php echo $category[0]->name; ?></span>

							<h2 class="h5 text-dark mt-2"><?php the_title(); ?></h2>

							<div class="text-secondary">
								<?php the_content(); ?>
							</div>

							<?php if ( $file_link ): ?>
								<div class="download mt-auto">
									<a class="text-uppercase btn btn-sm btn-block btn-brand-blue" href="<?php echo $file_link['url']; ?>" target="_blank">
										<i class="fas fa-file-pdf mr-2"></i>
										Download
									</a>
								</div>
							<?php endif; ?>
						</div><!-- .card-body -->
					</div><!-- .card -->
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>

			</div><!-- .white-papers-list -->
		</div><!-- .row -->
	</div><!-- .container-fluid -->
</div><!-- .col-12 .col-lg-9 -->
