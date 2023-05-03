<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Data_Center_Systems
 */

$header_image = get_field( 'header_image' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<div class="row">
				<div class="entry-header-background col-12">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title h3 mb-0">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title h3 mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="container mx-auto">
			<div class="row">
				<div class="col-12">
					<?php
					the_content();
					?>
				</div>

				<div class="services-grid mx-auto">
					<?php
					$args = array( 'post_type' => 'services' );
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
					?>

						<div>
							<a href="<?php echo the_permalink(); ?>">
								<?php
								$icon = get_field( 'icon' );
								?>

								<p class="lead sr-only"><?php the_title(); ?></p>
								<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>"/>
							</a>
						</div>

					<?php
						endwhile;
					endif;

					wp_reset_postdata();
					?>

				</div>
			</div><!-- .row -->
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php // datacentersys_entry_footer(); ?>
		</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
