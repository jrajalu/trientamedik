<?php
/**
 * @package trientamedik
 * @since 1.0
 */
?>
<div class="wrap product-widget">
<div data-uk-slideset="{default: 4,autoplay: true, pauseOnHover: true, autoplayInterval: 9000}">
    <div class="uk-slidenav-position">
        <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-4">
          <?php
            $args = array(
              'post_type'       => 'product',
              'posts_per_page'   => -1,
              'order'           => 'ASC'
            );
            $loop = new WP_Query( $args );
            
            if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post(); ?>
            <li>
              <img src="<?php echo get_post_meta(get_the_ID(),'_trientamedik_product_image',true); ?>">
              <?php the_title( sprintf( '<h4 class="product-name"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
            </li>
          <?php endwhile; else: ?>
          <li>
            <img src="<?php echo get_template_directory_uri() . '/images/product-1.jpg'; ?>">
            <h4 class="product-name">Product Name 1</h4>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri() . '/images/product-2.jpg'; ?>">
            <h4 class="product-name">Product Name 2</h4>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri() . '/images/product-3.jpg'; ?>">
            <h4 class="product-name">Product Name 3</h4>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri() . '/images/product-4.jpg'; ?>">
            <h4 class="product-name">Product Name 4</h4>
          </li>
                    <li>
            <img src="<?php echo get_template_directory_uri() . '/images/product-1.jpg'; ?>">
            <h4 class="product-name">Product Name 1</h4>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri() . '/images/product-2.jpg'; ?>">
            <h4 class="product-name">Product Name 2</h4>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri() . '/images/product-3.jpg'; ?>">
            <h4 class="product-name">Product Name 3</h4>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri() . '/images/product-4.jpg'; ?>">
            <h4 class="product-name">Product Name 4</h4>
          </li>
          <?php endif; ?>
        </ul>
        <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
        <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
    </div>
</div>
  
  
</div>
