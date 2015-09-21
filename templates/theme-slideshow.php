<?php
/**
 * @package trientamedik
 * @since 1.0
 */
?> 
<div class="uk-slidenav-position" data-uk-slideshow="{animation:'swipe', autoplay:true, autoplayInterval:6000}">
  <ul class="uk-slideshow">
    <?php
      $args = array(
        'post_type'       => 'slide',
        'posts_per_page'   => 10,
        'order'           => 'ASC'
      );

      $loop = new WP_Query( $args );

      if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
    ?>
    <li>
      <a href="<?php echo get_post_meta(get_the_ID(),'_trientamedik_slide_link',true); ?>">
        <img src="<?php echo get_post_meta(get_the_ID(),'_trientamedik_slide_image',true); ?>" alt="<?php the_title(); ?>" style="width: 100%;">
      </a>
    </li>            
    <?php endwhile; else: ?>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/images/sample-slide-1.jpg" alt="Slide-1" style="width: 100%;">
    </li>
    <?php endif; ?>
  </ul>
  <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
  <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
</div>