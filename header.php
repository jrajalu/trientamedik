<?php
/**
 * @package unityrepair
 * @since 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<?php get_template_part( 'inc/theme', 'css' ); ?>
</head>
<body <?php body_class(); ?>>
<div id="fakeLoader"></div>
<div class="page-wrap">
  <div class="header-wrap">
    <header class="wrap column">
      <div class="col-4-12">
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
      </div>
      <div class="col-8-12">
        <?php 
          wp_nav_menu(array(
            'menu' => 'Main Navigation', 
            'container_id' => 'cssmenu', 
            'walker' => new CSS_Menu_Maker_Walker()
          )); 
        ?>
      </div>
    </header>
  </div>
