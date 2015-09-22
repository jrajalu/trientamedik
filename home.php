<?php get_header(); ?>

<?php get_template_part( 'templates/theme', 'slideshow' ); ?>

<div class="wrap column">
  <?php if (dynamic_sidebar( 'sidebar-2' )) : else : endif; ?>
  <?php if (dynamic_sidebar( 'sidebar-3' )) : else : endif; ?>
</div>

<?php get_template_part( 'templates/theme', 'products' ); ?>

<?php get_footer(); ?>