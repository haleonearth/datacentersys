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

	<?php datacentersys_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="container">
			<?php
			the_content();
			?>

			<div class="row no-gutters mt-4">
				<?php get_template_part( 'template-utils/util', 'sidebar-resources' ); ?>
				<div class="col-12 col-lg-9 pl-0 pl-lg-4">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="resources-list">
									<?php
									$args = array(
										'post_type' => 'resources',
										'order' => 'ASC',
										'tag__not_in' => array( 4 ),
									);
									$the_query = new WP_Query( $args );

									if ( $the_query->have_posts() ) :
										while ( $the_query->have_posts() ) :
											$the_query->the_post();
											$thumbnail_image = get_field( 'thumbnail_image' );
											$title = get_the_title();
									?>
										<div class="card">
											<a href="<?php the_permalink(); ?>">
												<img src="<?php echo $thumbnail_image['url']; ?>" class="card-img-top" alt="<?php echo $thumbnail_image['alt']; ?>">
												<div class="card-body">
													<h5 class="card-title text-dark mb-0"><?php echo $title; ?></h5>
												</div>
											</a>
										</div><!-- .card -->
									<?php
										endwhile;
									endif;
									wp_reset_postdata();
									?>
								</div><!-- .resources-list -->
							</div><!-- .col-12 -->
						</div><!-- .row -->
					</div><!-- .container -->
				</div><!-- .col-12 .col-lg-9 -->
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
