<?php
/**
 * @package unityrepair
 * @since 1.0
 * 
 * Template Name: Page with Thumbnail (Left)
 */
get_header(); ?>
<div class="wrap column pad-top pad-bottom">
  <div class="col-4-12 pad-right">
    <?php the_post_thumbnail( 'full' ); ?>
  </div>
  <div id="primary" class="content-area col-8-12">
    <div id="content" class="site-content pad-left" role="main">
      <?php while( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>