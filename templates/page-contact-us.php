<?php
/**
 * @package trientamedik
 * @since 1.0
 * 
 * Template Name: Page with Maps
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-6-12">
    <div id="content" class="site-content pad-right" role="main">
      <?php while( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="col-6-12 pad-top pad-left">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7966.722070425697!2d101.679406!3d3.260203!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc473757755e3f%3A0x53ae936aca73d918!2s46119%2C+Jalan+Binjai%2C+Kampung+Sungai+Tua%2C+68100+Batu+Caves%2C+Selangor%2C+Malaysia!5e0!3m2!1sen!2smy!4v1442931188093" width="460" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>
<?php get_footer(); ?>