<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Data_Center_Systems
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	 <script>
        (function () {
          var zi = document.createElement('script');
          zi.type = 'text/javascript';
          zi.async = true;
          zi.referrerPolicy = 'unsafe-url';
          zi.src = 'https://ws.zoominfo.com/pixel/beVFUb4zZsPGCndFTnvj';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(zi, s);
        })();
      </script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-DT3WCT8WK8"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-DT3WCT8WK8');
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php esc_html_e('Skip to content', 'datacentersys'); ?>
	</a>

	<header id="masthead" class="site-header">
		
		<div class="header-top-bar py-3 bg-black text-light">
			<div class="container-80">
				<div class="row">
					<div class="top-social-icons d-flex">
						<a class="social-link" href="https://twitter.com/DataCtrSystems" aria-label="Follow us on Twitter" target="_blank">
							<img class="social-image" src="/wp-content/uploads/2021/03/icon-twitter.png" alt="">
						</a><!-- .social-link -->

						<a class="social-link ml-3" href="https://www.linkedin.com/company/data-center-systems/" aria-label="Follow us on LinkedIn" target="_blank">
							<img class="social-image" src="/wp-content/uploads/2021/03/icon-linkedin.png" alt="">
						</a><!-- .social-link -->
					</div><!-- .top-social-icons -->
					<div class="top-nav ml-auto d-flex justify-content-center align-items-center">
						<a class="top-nav-link text-light lead mb-0" href="https://blog.datacentersys.com">News</a>
						<span class="mx-3">|</span>
						<a class="top-nav-link text-light lead mb-0" href="https://blog.datacentersys.com/events">Events</a>
						<span class="ml-3">|</span> 
						<a class="top-nav-link text-light lead mb-0 ml-3" href="/contact-us">Contact Us</a>
					</div><!-- .top-nav -->
				</div><!-- .row -->
			</div><!-- .container-fluid -->
		</div><!-- .header-top-bar -->

		<nav id="site-navigation" class="navbar site-nav navbar-expand-md navbar-light main-navigation"
			 role="navigation">
			<div class="container flex-column">
				<div class="row w-100">
					<div class="site-branding mx-auto">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()): ?>
							<h1 class="site-title">
								<a class="font-weight-bold text-dark" href="<?php echo esc_url(home_url('/')); ?>"
								   rel="home">
									<?php bloginfo('name'); ?>
								</a>
							</h1>

						<?php else: ?>
							<p class="site-title mb-0">
								<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
									<?php bloginfo('name'); ?>
								</a>
							</p>
						<?php endif;
						$datacentersys_description = get_bloginfo('description', 'display');
						if ($datacentersys_description || is_customize_preview()): ?>
							<p class="site-description sr-only">
								<?php echo $datacentersys_description;
								/* WPCS: xss ok. */
								?>
							</p>
						<?php endif;
						?>
					</div><!-- .site-branding -->
				</div>
				<div class="row w-100">
					<!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler navbar-toggler-right ml-auto" type="button" data-toggle="collapse"
							data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon" aria-hidden="true"></span>
					</button>

					<?php wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'depth' => 3,
						'container' => 'div',
						'container_id' => 'navbarSupportedContent',
						'container_class' => 'collapse navbar-collapse',
						'menu_id' => 'primary-menu',
						'menu_class' => 'nav navbar-nav mx-auto',
						'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
						'walker' => new WP_Bootstrap_Navwalker()
					)); ?>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container-fluid no-gutters px-0">
			<div class="row">
