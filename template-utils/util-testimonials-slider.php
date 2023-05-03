<?php
wp_enqueue_script(
	'datacentersys-testimonials-slider',
	get_template_directory_uri() . '/js/testimonials-slider.js',
	array( 'jquery', 'datacentersys-slick' ),
	'20151215',
	true
);
?>

<div class="testimonials-slider-container col-12 no-gutters text-light">
	<div class="container">
		<div class="row">
			<div class="testimonials-slider col-12 mb-0">
				<?php
				$args = array( 'post_type' => 'testimonials' );
				$query = new WP_Query( $args );

				if ( $query->have_posts() ):
					while ( $query->have_posts() ) : $query->the_post();
				?>
					<div class="testimonials-slide">
						<div class="d-flex flex-column flex-lg-row testimonial-quote">
							<img class="mr-4" src="<?php echo esc_url( get_template_directory_uri() . '/img/just-one-t-quotes.png' ); ?>" alt="">

							<?php the_content(); ?>
						</div>

						<div class="testimonial-reviewer text-right">
							<p class="h5 text-brand-blue"><?php the_title(); ?></p>
						</div>
					</div><!-- .testimonials-slide -->
				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</div><!-- .testimonials-slider -->
