<?php
$category = get_sub_field( 'category' );
$category_name = get_cat_name( $category[0] );
?>
<div class="team-members">
	<div class="container">
		<div class="row">
			<div class="col-12 py-4">
				<h3 class="h5 text-dark"><?php echo $category_name; ?></h3>

				<div class="team-members-grid">
					<?php
					$args = array(
						'post_type' => 'staff',
						'cat' => $category,
						'order' => 'ASC',
					);
					$the_query = new WP_Query( $args );

					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
						<div>
<!--							<a href="--><?php //the_permalink(); ?><!--" aria-label="--><?php //echo get_the_title(); ?><!--">-->
								<div class="mb-4">
									<?php the_post_thumbnail(); ?>
								</div>

								<p class="lead mb-2 text-brand-blue text-uppercase font-weight-bold"><?php echo get_the_title(); ?></p>

								<p class="text-dark"><?php echo get_field('title', $id ); ?></p>
<!--							</a>-->
						</div>
					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div><!-- .team-members-grid -->
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .team-members -->
