<?php

$testimonial = get_field( 'testimonial' );

if ( $testimonial ) :
?>

<div class="testimonial d-flex flex-column flex-lg-row align-items-start">
	<img src="<?php echo esc_url( get_template_directory_uri() . '/img/just-one-t-quotes.png' ); ?>" alt="">

	<div class="pl-4">
		<div class="testimonial-quote mb-4 mb-lg-0">
		<?php echo esc_html( $testimonial['quote'] ); ?>
		</div>

		<div class="testimonial-reviewer text-right">
			<?php echo ( $testimonial['reviewer'] ); ?>
		</div>
	</div>
</div>

<?php
endif;
