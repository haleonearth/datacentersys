<?php
/**
 * Template Name: Services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Data_Center_Systems
 */

get_header();
?>

	<div id="primary" class="content-area col-12">
		<main id="main" class="site-main">

			<?php
				get_template_part( 'template-parts/content-template', 'services' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
