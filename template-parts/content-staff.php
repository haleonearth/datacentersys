<?php
/**
 * Template part for displaying page content in page.php
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
					<?php the_title( '<h1 class="entry-title font-weight-bold">', '</h1>' ); ?>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php datacentersys_post_thumbnail(); ?>
			</div>
		</div>
	</div>

	<div class="entry-content pt-3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="h3"><?php echo get_the_title(); ?></h2>
					<p class="lead">
						<?php echo get_field( 'title'); ?>
					</p>
				</div>
			</div>
		</div><!-- .container -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'datacentersys' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .col-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'datacentersys' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
