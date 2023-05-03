<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Data_Center_Systems
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title h3 mb-0">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title h3 mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
	//						datacentersys_posted_on();
	//						datacentersys_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- .entry-header -->

	<?php datacentersys_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="container mx-auto no-gutters">
			<div class="row">
				<div class="col-12 col-lg-8">
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

					<div class="row">
						<?php get_template_part( 'template-utils/util', 'testimonial' ); ?>
					</div>

					<div class="row">
						<?php get_template_part( 'template-utils/util', 'additional-content' ); ?>
					</div>

					<div class="row">
						<?php get_template_part( 'template-utils/util', 'additional-resources' ); ?>
					</div>
				</div><!-- .col-lg-8 -->

				<div class="col-12 col-lg-4">
					<?php get_template_part( 'template-utils/util', 'sidebar-slider' ); ?>
				</div><!-- .col-lg-8 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // datacentersys_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
