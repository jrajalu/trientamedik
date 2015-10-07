<?php
// create custom plugin settings menu
add_action('admin_menu', 'trientamedik_plugin_create_menu');

function trientamedik_plugin_create_menu() {

  //create new top-level menu
  add_theme_page('Trienta Medik Additional Contents', 'Contents', 'administrator', __FILE__, 'trientamedik_plugin_settings_page' , 'dashicons-admin-settings' );

  //call register settings function
  add_action( 'admin_init', 'register_trientamedik_plugin_settings' );
}


function register_trientamedik_plugin_settings() {
  //register our settings
  register_setting( 'trientamedik-plugin-settings-group', 'trientamedik_products_overview' );
}

function trientamedik_plugin_settings_page() {
?>
<div class="wrap">
<h2>Trienta Medik Additional Contents</h2>

<form method="post" action="options.php">
  <?php settings_fields( 'trientamedik-plugin-settings-group' ); ?>
  <?php do_settings_sections( 'trientamedik-plugin-settings-group' ); ?>
  <table class="form-table">
    <tr valign="top">
    <th scope="row">Products Overview</th>
    <td>
      <?php
      $products_overview_text = array(
          'teeny'         => false,
          'media_buttons' => false,
          'textarea_rows' => 10,
          'tabindex'      => 1,
      );
      
      wp_editor( htmlspecialchars_decode( get_option('trientamedik_products_overview')), 'trientamedik_products_overview', $products_overview_text );
      ?>
      
    </td>
    </tr>
  </table>

  <?php submit_button(); ?>

</form>
</div>
<?php } ?>