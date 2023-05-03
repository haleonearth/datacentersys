<?php
/**
 * This slider is used whenever Sidebar Sliders are used.
 */

$sidebar_slider = get_field( 'sidebar_slider' );

if ( $sidebar_slider ) :
	$images = $sidebar_slider['images'];
?>
	<div class="sidebar-slider-container pl-4">
		<h2 class="sidebar-slider-title"><?php echo esc_html( $sidebar_slider['title'] ); ?></h2>

		<div class="sidebar-slider">
			<?php
			if ( $images ) :
				foreach( $images as $key => $item ) {
					$image = $item['image'];
					$image_title = $item['image_title'];
			?>

					<?php if ( $key % 2 == 0) : ?>
					<div class="sidebar-slide text-center">
					<?php endif; ?>

					<img class="sidebar-slide-image d-block mx-auto" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
					<p class="text-brand-red mt-4 text-uppercase"><?echo esc_html( $image_title ); ?></p>

					<?php if ( $key % 2 == 0) : ?>
						<hr class="border-black">
					<?php endif; ?>

					<?php if ( ( $key % 2 == 1 ) || $key + 1 == count( $images ) ) : ?>
					</div><!-- .sidebar-slide -->
					<?php endif; ?>
			<?php
				}
			endif;
			?>
		</div><!-- .sidebar-slider -->
	</div><!-- sidebar-slider-container -->

<?php
endif;
?>
