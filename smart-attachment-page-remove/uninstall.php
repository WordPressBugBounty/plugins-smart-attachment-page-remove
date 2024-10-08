<?php

// If this file is called directly, abort
if ( ! defined( 'WPINC' ) ) {
  die;
}


// If this is somehow accessed withou plugin uninstall is requested, abort
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) || ! WP_UNINSTALL_PLUGIN ||	dirname( WP_UNINSTALL_PLUGIN ) != dirname( plugin_basename( __FILE__ ) ) ) {
  die;
}


/**
 * Loader
 */
require_once( plugin_dir_path( __FILE__ ) . '/loader.php' );


/**
 * Uninstall
 */
pp_smart_attachment_page_remove()->uninstall();


?>