<div class="community-outreach-organizations pb-4 mb-4">
	<div class="container">
		<div class="row">
			<div class="community-outreach-grid">
				<?php
				$args = array( 'post_type' => 'community_outreach' );
				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
						// Display post content
				?>

					<div class="d-flex">
						<a class="d-flex justify-content-center align-items-center border rounded p-4" href="<?php the_permalink(); ?>">
							<?php
							$organization_info = get_field( 'organization_info' );
							$image = $organization_info['image'];
							?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>"/>
						</a>
					</div>

				<?php
					endwhile;
				endif;

				wp_reset_postdata();
				?>
			</div><!-- community-outreach-grid -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .community-outreach-organizations -->
