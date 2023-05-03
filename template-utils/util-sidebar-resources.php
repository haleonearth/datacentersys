<div class="col-12 col-lg-3 resources-sidebar">
	<ul class="list-unstyled resources-sidebar-list">
		<li>
			<h2 class="h5 resources-sidebar-heading">
				Products
			</h2>

			<ul class="list-unstyled">
				<?php
				$current_page_title = get_the_title();
				$args = array(
					'post_type' => 'resources',
					'order' => 'ASC',
					'tag__not_in' => array( 4 ),
				);
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post();
						$title = get_the_title();
						$current = strcmp($current_page_title, $title) == 0;
						$page_slug = get_post_field( 'post_name' );
						?>
						<li class="resources-sidebar-item d-block <?php echo $page_slug; ?>">
							<a class="text-dark d-block resources-sidebar-link <?php if ( $current ) : ?>active<?php endif; ?>" href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</li>
					<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</ul>
		</li>
		<li>
			<a class="h5 text-dark <?php if ( is_single( 'diagrams' ) ) : ?> text-brand-red <?php endif; ?>" href="/diagrams/">Diagrams</a>
		</li>
		<li>
			<a class="h5 text-dark <?php if ( is_single( 'white-papers' ) ) : ?> text-brand-red <?php endif; ?>" href="/white-papers/">White Papers</a>
		</li>
	</ul>
</div><!-- .col-12 .col-lg-3 -->
