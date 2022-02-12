<?php
/*
Plugin Name: Site Plugin for example.com
Description: Site specific code changes for example.com
*/
/* Start Adding Functions Below this Line */
  /* Prohibit direct access to plugin file */
if ( ! defined( 'ABSPATH' ) ) exit;


 /* Add local Fontawesome Stylesheet v6.0.0 Web */
function add_fontawesomelocal() {
	wp_register_style('local-fontawesome', plugin_dir_url( __FILE__ ) . 'fa-local-600/css/all.css');
	wp_enqueue_style('local-fontawesome');

}
add_action('wp_enqueue_scripts', 'add_fontawesomelocal',1);





/* Stop Adding Functions Below this Line */
?>