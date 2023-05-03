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

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'datacentersys' ),
				'after'  => '</div>',
			) );
			?>
		</div>

		<div class="container-fluid px-0">
			<?php
			if ( have_rows( 'page_content' ) ) :
				while ( have_rows( 'page_content' ) ) :
					the_row();

					if ( get_row_layout() == 'red_blocks' )
						get_template_part( 'template-parts/builder/content', 'red-blocks' );

					if ( get_row_layout() == 'leadership_team' )
						get_template_part( 'template-parts/builder/content', 'leadership-team' );

					if ( get_row_layout() == 'content_with_two_columns' )
						get_template_part( 'template-parts/builder/content', 'two-cols' );

					if ( get_row_layout() == 'testimonials_slider' )
						get_template_part('template-utils/util', 'testimonials-slider');

					if ( get_row_layout() == 'team_members' )
						get_template_part('template-parts/builder/content', 'team-members');

					if ( get_row_layout() == 'content' )
						get_template_part( 'template-parts/builder/content', 'regular' );

					if ( get_row_layout() == 'community_outreach_organizations' )
						get_template_part( 'template-parts/builder/content', 'community-outreach' );

					if ( get_row_layout() == 'content_with_grid_cards' )
						get_template_part( 'template-parts/builder/content', 'grid-cards' );

					if ( get_row_layout() == 'block_of_pdfs' )
						get_template_part( 'template-parts/builder/content', 'block-of-pdfs' );

				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
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
