<?php
/**
 * @package unityrepair
 * @since 1.0
 * 
 * Template Name: Page with Thumbnail (Right)
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div id="primary" class="content-area col-8-12">
    <div id="content" class="site-content pad-right" role="main">
      <?php while( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="col-4-12 pad-left">
    <?php the_post_thumbnail( 'full' ); ?>
  </div>
</div>
<?php get_footer(); ?>