<?php

if ( file_exists( get_template_directory() . '/lib/cmb2/init.php' ) ) {
  require_once get_template_directory() . '/lib/cmb2/init.php';
} elseif ( file_exists( get_template_directory() . '/lib/CMB2/init.php' ) ) {
  require_once get_template_directory() . '/lib/CMB2/init.php';
}

// SLIDE

add_action( 'cmb2_init', 'trientamedik_register_slide_metabox' );

  function trientamedik_register_slide_metabox() {

    $prefix = '_trientamedik_';

    $cmb_slide = new_cmb2_box( array(
      'id'            => $prefix . 'slide',
      'title'         => __( 'Slide Details', 'trientamedik' ),
      'object_types'  => array( 'slide' ), // Post type
    ) );

    $cmb_slide->add_field( array(
      'name' => __( 'Image', 'trientamedik' ),
      'desc' => __( 'Upload an image or enter a URL.', 'trientamedik' ),
      'id'   => $prefix . 'slide_image',
      'type' => 'file',
    ) );

    $cmb_slide->add_field( array(
      'name'    => __( 'Link', 'trientamedik' ),
      'desc'    => __( 'Link for images', 'trientamedik' ),
      'id'      => $prefix . 'slide_link',
      'type'    => 'text',
    ) );
    
  }
  
// PROJECTS
  
add_action( 'cmb2_init', 'trientamedik_register_product_metabox' );

  function trientamedik_register_product_metabox() {

    $prefix = '_trientamedik_';

    $cmb_product = new_cmb2_box( array(
      'id'            => $prefix . 'product',
      'title'         => __( 'Slide Details', 'trientamedik' ),
      'object_types'  => array( 'product' ),
    ) );

    $cmb_product->add_field( array(
      'name' => __( 'Main Image', 'trientamedik' ),
      'desc' => __( 'Upload an image or enter a URL.', 'trientamedik' ),
      'id'   => $prefix . 'product_image',
      'type' => 'file',
    ) );
    
    $cmb_product->add_field( array(
      'name' => 'Project Image',
      'desc' => '',
      'id'   => $prefix . 'product_image_list',
      'type' => 'file_list',
    ) );
    
  }
  