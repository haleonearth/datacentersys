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
				<div class="entry-header-background col-12 <?php if ( ! $header_image ) : ?>bg-gray-dark<?php endif; ?>" style="background-image: url( <?php echo $header_image['url']; ?> );">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title h3 text-light mb-0">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title h3 text-light mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- .entry-header -->

	<?php datacentersys_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="container mx-auto">
			<div class="row">
				<div class="col-12">
					<div>
						<?php
						the_content( sprintf(
							wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'datacentersys' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );
						?>
					</div>
				</div><!-- .col-12 -->

				<div class="col-12">
					<div class="container">
						<div class="row">
							<?php get_template_part( 'template-utils/util', 'sidebar-resources' ); ?>
							<?php if ( is_single( 'white-papers' ) ) : ?>
								<?php get_template_part( 'template-utils/util', 'white-papers' ); ?>
							<?php else: ?>
								<?php get_template_part( 'template-utils/util', 'content-blocks' ); ?>
							<?php endif; ?>
						</div><!-- .row -->
					</div><!-- .container -->
				</div><!-- .col-12 -->
			</div><!-- .container -->
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php // datacentersys_entry_footer(); ?>
		</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
