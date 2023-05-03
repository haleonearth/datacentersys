<?php

/**
 * Template Name: Service Static
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>

<div id="primary" class="content-area col-12">
  <main id="main" class="site-main">
    <div class="container-fluid px-0 no-gutters">

      <div class="row">
        <div class="col-12">
          <?php
          while (have_posts()) :
            the_post();

            get_template_part('template-parts/content', get_post_type());

            //							the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;

          endwhile; // End of the loop.
          ?>
        </div>
      </div><!-- .row -->
      <div class="container pt-5 pb-5">
        <div class="row">
          <div class="col-12 col-md-4 d-flex justify-content-center">
            <a href="https://datacentersystems.com/services/consultation/" class="hvr-grow">
              <p class="lead sr-only">Consultation and Education</p>
              <img src="/wp-content/uploads/2021/03/DCS_Icon_1-Consultation.png" alt="DCS_Icon_1-Consultation">
            </a>
          </div> <!-- /.col -->
          <div class="col-12 col-md-4 d-flex justify-content-center">
          <a href="https://datacentersystems.com/services/engineering-and-innovation/" class="hvr-grow">
              <p class="lead sr-only">Engineering and Innovation</p>
              <img src="/wp-content/uploads/2021/03/DCS_Icon_3-Engineering.png" alt="DCS_Icon_3-Engineering">
            </a>
          </div> <!-- /.col -->
          <div class="col-12 col-md-4 d-flex justify-content-center">
          <a href="https://datacentersystems.com/services/infrastructure-design/" class="hvr-grow">
              <p class="lead sr-only">Infrastructure Design</p>
              <img src="/wp-content/uploads/2021/03/DCS_Icon_2-Infrastructure.png" alt="DCS_Icon_2-Infrastructure">
            </a>
          </div> <!-- /.col -->
        </div> <!-- /.row -->

        <div class="row">
          <div class="col-12 col-md-4 d-flex justify-content-center">
          <a href="https://datacentersystems.com/services/fiber-cable-manufacturing/" class="hvr-grow">
              <p class="lead sr-only">Fiber Cable Manufacturing</p>
              <img src="/wp-content/uploads/2021/03/DCS_Icon_4-Fiber.png" alt="DCS_Icon_4-Fiber">
            </a>
          </div> <!-- /.col -->
          <div class="col-12 col-md-4 d-flex justify-content-center">
          <a href="https://datacentersystems.com/services/professional-services/" class="hvr-grow">
              <p class="lead sr-only">Professional Services</p>
              <img src="/wp-content/uploads/2021/03/DCS_Icon_5-Services.png" alt="DCS_Icon_5-Services">
          </div> <!-- /.col -->
          <div class="col-12 col-md-4 d-flex justify-content-center">
          <a href="https://datacentersystems.com/services/on-site-managed-services/" class="hvr-grow">
              <p class="lead sr-only">On-Site Managed Services</p>
              <img src="/wp-content/uploads/2021/07/icon.jpg" alt="icon for on-site managed services">
            </a>
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->

      <div class="row">

        <?php get_template_part('template-utils/util', 'testimonials-slider'); ?>
      </div>
    </div><!-- .container -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
