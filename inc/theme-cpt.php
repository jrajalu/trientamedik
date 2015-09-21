<?php
/**
 * @package unityrepair
 * @since 1.0
 */

 // SLIDE

add_action( 'init', 'register_cpt_slide' );

function register_cpt_slide() {

  $labels = array( 
    'name' => _x( 'Slides', 'slide' ),
    'singular_name' => _x( 'Slide', 'slide' ),
    'add_new' => _x( 'Add New', 'slide' ),
    'add_new_item' => _x( 'Add New Slide', 'slide' ),
    'edit_item' => _x( 'Edit Slide', 'slide' ),
    'new_item' => _x( 'New Slide', 'slide' ),
    'view_item' => _x( 'View Slide', 'slide' ),
    'search_items' => _x( 'Search Slides', 'slide' ),
    'not_found' => _x( 'No slides found', 'slide' ),
    'not_found_in_trash' => _x( 'No slides found in Trash', 'slide' ),
    'parent_item_colon' => _x( 'Parent Slide:', 'slide' ),
    'menu_name' => _x( 'Slides', 'slide' ),
  );

  $args = array( 
    'labels' => $labels,
    'hierarchical' => false,

    'supports' => array( 'title' ),

    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-images-alt2',

    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
  );

  register_post_type( 'slide', $args );
}

// PRODUCTS

add_action( 'init', 'register_cpt_product' );

  function register_cpt_product() {

    $labels = array( 
      'name' => _x( 'Products', 'product' ),
      'singular_name' => _x( 'Product', 'product' ),
      'add_new' => _x( 'Add New', 'product' ),
      'add_new_item' => _x( 'Add New Product', 'product' ),
      'edit_item' => _x( 'Edit Product', 'product' ),
      'new_item' => _x( 'New Product', 'product' ),
      'view_item' => _x( 'View Product', 'product' ),
      'search_items' => _x( 'Search Products', 'product' ),
      'not_found' => _x( 'No products found', 'product' ),
      'not_found_in_trash' => _x( 'No products found in Trash', 'product' ),
      'parent_item_colon' => _x( 'Parent Product:', 'product' ),
      'menu_name' => _x( 'Products', 'product' ),
    );

    $args = array( 
      'labels' => $labels,
      'hierarchical' => true,

      'supports' => array( 'title', 'editor', 'thumbnail' ),

      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-list-view',
      'show_in_nav_menus' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'has_archive' => true,
      'query_var' => true,
      'can_export' => true,
      'rewrite' => true,
      'capability_type' => 'post'
    );

    register_post_type( 'product', $args );
  }

