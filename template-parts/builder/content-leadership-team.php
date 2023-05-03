<div class="leadership-team">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-4">An Experienced Leadership Team</h2>

				<div class="leadership-team-grid">
					<?php
					$args = array(
						'post_type' => 'staff',
						'cat' => 5,
						'order' => 'ASC',
					);
					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) :
						while( $the_query->have_posts() ) :
							$the_query->the_post();
							$id = get_the_ID();
					?>
						<div>
							<a href="<?php the_permalink(); ?>" aria-label="<?php echo get_the_title(); ?>">
								<div class="mb-4">
									<?php the_post_thumbnail(); ?>
								</div>

								<p class="lead mb-2 text-brand-blue text-uppercase font-weight-bold"><?php echo get_the_title(); ?></p>

								<p class="text-dark"><?php echo get_field('title', $id ); ?></p>
							</a>
						</div>
					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .leadership-team -->
