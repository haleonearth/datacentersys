<?php
/**
 * The template for the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Data_Center_Systems
 */


function awwp_hbfeed_get_posts( $url ) {

	$rss = new DOMDocument();
	$rss->load( $url );
	$feed = array();

	foreach( $rss->getElementsByTagName( 'item' ) as $node ) {

		$item = array(
			'title' => $node->getElementsByTagName( 'title' )->item(0)->nodeValue,
			'description' => $node->getElementsByTagName( 'description' )->item(0)->nodeValue,
			'link' => $node->getElementsByTagName( 'link' )->item(0)->nodeValue,
			'date' => $node->getElementsByTagName( 'pubDate' )->item(0)->nodeValue,
		);

		array_push( $feed, $item );

	}

	return $feed;

}


function awwp_hbfeed_display_feed( $feed, $limit, $template ) {
				
	$x = 0;

	for( $x; $x < $limit; $x++ ) {

		$post_title = str_replace( ' & ', ' &amp; ', $feed[$x]['title'] );
		$post_link = $feed[$x]['link'];
		$date = date( 'l F d, Y' , strtotime( $feed[$x]['date'] ) );

		$post_date_arr = explode( ' ', $date );

		$post_date_month = $post_date_arr[1];
		$post_date_day = str_replace( ',', '', $post_date_arr[2] );
		$post_date_year = $post_date_arr[3];

		// Extract image
		$dom = new domDocument;
		$dom->loadHTML($feed[$x]['description']);
		$img = $dom->getElementsByTagName('img');
		$post_image = count($img) ? $img[0]->attributes->getNamedItem('src')->value . PHP_EOL : null;

		include( $template );

	}

}

$posts = awwp_hbfeed_get_posts( 'https://blog.datacentersys.com/rss.xml' );

get_header(); ?>

<div id="primary" class="content-area col-12 no-gutters">
  <main id="main" class="site-main">
    <div class="section-hero">
      <div class="container-fluid">
        <div class="row">
          <div class="hero-content text-light p-4 h3 col-12 col-lg-6">
            <p>Connectivity failures can have a devastating impact on your company's operations, including operational
              downtime, application latency, higher operational expenses and customer dissatisfaction.</p>

            <a class="btn btn-black text-light btn-lg" href="/connectivity-solutions/">Learn About <strong>DCS' Solutions</strong></a>
          </div>
        </div><!-- .row -->
      </div><!-- .container-fluid -->
    </div><!-- .section-hero -->


    <div class="section-services py-4">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex flex-column flex-md-row justify-content-md-center align-items-center">
            <a href="/services/consultation/" class="d-block hvr-grow"><img src="/wp-content/uploads/2021/03/DCS_Icon_1-Consultation.png" alt="consultation icon"></a>
            <a href="/services/infrastructure-design/" class="d-block hvr-grow"><img src="/wp-content/uploads/2021/03/DCS_Icon_2-Infrastructure.png" alt="infrastructure icon"></a>
            <a href="/services/engineering-and-innovation/" class="d-block hvr-grow"><img src="/wp-content/uploads/2021/03/DCS_Icon_3-Engineering.png" alt=""></a>
            <a href="/services/fiber-cable-manufacturing/" class="d-block hvr-grow"><img src="/wp-content/uploads/2021/03/DCS_Icon_4-Fiber.png" alt="fiber icon"></a>
            <a href="/services/professional-services/" class="d-block hvr-grow"><img src="/wp-content/uploads/2021/03/DCS_Icon_5-Services.png" alt="services icon"></a>
            <a href="/services/services/on-site-managed-services/" class="d-block hvr-grow"><img src="/wp-content/uploads/2021/07/icon.jpg" alt="on-site management icon"></a>
          </div><!-- .col-12 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .section-services -->

    <div class="section-info py-4 bg-light">
      <div class="container">
        <div class="row">
			<div class="col-12">
			  <h2 class="h1 text-center w-100 mx-auto text-uppercase">Some of the largest data centers in the world trust
				us<br class="d-none d-lg-inline-block"> for their connectivity. <span class="font-weight-bold">SO YOU CAN TOO!</span></h2>

			  <p class="lead">At DCS, we take a consultative approach to designing, manufacturing and installing fiber
				connectivity solutions. When you choose DCS to provide your data center's infrastructure, we're not just
				installing cabling. We're partnering with your business to understand your unique needs—both now and down
				the road—and tailoring our connectivity solutions to specifically meet those needs. By creating the
				foundation for future technology and scalability, DCS protects your investment for years to come. We also
				design and manufacture everything domestically to keep dollars and jobs in the U.S.</p>

			  <p class="lead">Partnering with well-respected switch manufacturers like Brocade and Cisco, DCS is able to
				deliver complete end-to-end solutions to our clients and control every aspect of our quality. DCS's connectivity solutions also enhance switch manufacturers' offerings, allowing them to enhance the
				performance of their own products and ensure their clients have the best possible experience.</p>
			</div>
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .section-info -->

    <div class="container categories py-5">
      <div class="row mb-4">

        <!-- 01 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <a href="/fiber-assemblies/">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Fiber Assemblies</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/04/01-fiber-asssemblies-537x312-color.jpg" alt="">
            </div><!-- .service-image-block -->
          </a>
        </div> <!-- /.col -->

        <!-- 02 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <a href="/solutions/multi-bay-central-patching-location/">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Multi-Bay (CPL) Solutions</p>
              </div><!-- .block-content -->
              <img src="/wp-content/uploads/2021/04/02-Multi-Bay-CPL-Image-537x312-color.jpg" alt="">
            </div><!-- .service-image-block -->
          </a>
        </div> <!-- /.col -->

        <!-- 03 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <a href="/solutions/switch-mimic-solutions/">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Switch Mimic Solutions</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/04/03-switch-mimic2-537x312-color.jpg" alt="">
            </div><!-- .service-image-block -->
          </a>
        </div> <!-- /.col -->
      </div> <!-- /.row -->

      <!-- 04 -->
      <div class="row mb-4">
        <div class="col-12">
          <a href="/connectivity-solutions/">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Structured Cabling Solutions</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/04/hero3-1140x203-color.jpg" class="d-none d-md-block" alt="">
              <img src="/wp-content/uploads/2021/03/hero2.jpg" class="d-md-none" alt="">
            </div><!-- .service-image-block -->
          </a>
        </div> <!-- /.col -->
      </div> <!-- /.row -->

      <!-- 05 -->
      <div class="row">
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <a href="/solutions/mainframe-solutions/">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Mainframe Solutions</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/04/04-mainframe2-537x312-color.jpg" alt="">
            </div><!-- .service-image-block -->
          </a>
        </div> <!-- /.col -->

        <!-- 06 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <a href="/solutions/zone-solutions/">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Zone Patching Solutions</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/04/05-zone2-537x312-color.jpg" alt="">
            </div><!-- .service-image-block -->
          </a>
        </div> <!-- /.col -->

        <!-- 07 -->
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
          <a href="/services/professional-services/">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Professional Services</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/04/06-pro-services-537x312-color.jpg" alt="">
            </div><!-- .service-image-block -->
          </a>
        </div> <!-- /.col -->
      </div> <!-- /.row -->

    </div> <!-- /.container -->

    <div class="section-services-image-blocks py-4 d-none">
      <div class="container">
        <div class="service-image-blocks-grid">
          <a href="#">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Multi-Bay Management</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/03/box01-mbmgmt.png" alt="">
            </div><!-- .service-image-block -->
          </a>

          <a href="#">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Mainframe Solutions</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/03/box02-mainframe.png" alt="">
            </div><!-- .service-image-block -->
          </a>

          <a href="#">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Cable Management</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/03/box03-cablemgmt.png" alt="">
            </div><!-- .service-image-block -->
          </a>

          <a href="#">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Professional Services</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/03/box04-proserv.png" alt="">
            </div><!-- .service-image-block -->
          </a>

          <a href="#">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Lorem Ipsum</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/03/box01-mbmgmt.png" alt="">
            </div><!-- .service-image-block -->
          </a>

          <a href="#">
            <div class="service-image-block position-relative">
              <div class="block-content">
                <p class="mb-0 h4 text-light">Lorem Ipsum</p>
              </div><!-- .block-content -->

              <img src="/wp-content/uploads/2021/03/box01-mbmgmt.png" alt="">
            </div><!-- .service-image-block -->
          </a>
        </div><!-- .service-image-blocks-grid -->
      </div><!-- .container -->
    </div><!-- .section-services-image-blocks -->

    <div class="section-news py-4 bg-brand-blue-light">
      <div class="container">
        <h2 class="text-uppercase mb-4 w-100 text-center">Latest News</h2>

        <div class="news news-grid">
			 <?php  awwp_hbfeed_display_feed( $posts, 4, 'template-parts/content-hubspot-posts.php' );  ?>
        </div><!-- .news .news-grid -->
      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
