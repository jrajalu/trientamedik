<?php
/**
 * @package unityrepair
 * @since 1.0
 * 
 * Template Name: Page Single Column
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-12-12">
    <div id="content" class="site-content pad-left pad-right" role="main">
      <?php while( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>