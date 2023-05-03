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
					?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- .entry-header -->

	<div class="container pt-4">
		<div class="row">
			<?php datacentersys_post_thumbnail(); ?>
		</div>
	</div>

	<div class="entry-content pt-2">
		<div class="container mx-auto px-0 no-gutters py-4">
			<div class="row">
				<div class="col-12">
					<h3 class="h4">Community Outreach</h3>
					<?php the_title('<h2 class="text-dark h3">', '</h2>'); ?>
				</div><!-- .col-12 -->
				<div class="col-12">
					<div class="row">
						<div class="col-12 col-lg-9 pr-4">
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
						</div><!-- .col-12 .col-lg-9 -->

						<div class="col-12 col-lg-3 border-left pl-4">
							<?php
							$org_info = get_field( 'organization_info');
							$image = $org_info['image'];
							$description = $org_info['description'];
							$link = $org_info['link']
							?>
							<img class="d-block mb-4" style="max-width: 80%;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

							<div class="py-2">
								<?php echo $description; ?>
							</div>

							<a class="btn btn-secondary btn-sm btn-block text-uppercase mt-2" href="<?php echo $link['url']; ?>" target="_blank">Learn More</a>
						</div><!-- .col-12 .col-lg-3 -->
					</div><!-- .row -->
				</div><!-- .col-12 -->
			</div><!-- .container -->
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php // datacentersys_entry_footer(); ?>
		</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
