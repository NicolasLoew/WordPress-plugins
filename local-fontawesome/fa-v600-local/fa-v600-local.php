<?php
/*
Plugin Name: Local Fonts GDPR
Description: This Plugin enables you to host Fontawesome v6.0.0 locally to better comply with GDPR standards. No legal advice.
*/
/* Start Adding Functions Below this Line */
 
 /* Register and add local Fontawesome Stylesheet v6.0.0 Web
 For reference, read: https://developer.wordpress.org/reference/functions/wp_enqueue_script/ and https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 and https://developer.wordpress.org/reference/functions/wp_register_style/#description
 */
function add_fonts() {
	wp_register_style('all', plugin_dir_url( __FILE__ ) . 'css/all.css');
	wp_enqueue_style('all');

}
add_action('wp_enqueue_scripts', 'add_fonts',1);


/* Stop Adding Functions Below this Line */
?>
