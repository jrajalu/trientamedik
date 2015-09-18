<?php
/**
 * @package trientamedik
 * @since 1.0
 */

add_action( 'admin_enqueue_scripts', 'chrome_fix' );
function chrome_fix() {
  if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false )
    wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}