<?php
/*
Plugin Name: Local Fonts GDPR Helper
Description: This Plugin enables you to host Fontawesome v6.0.0 locally to better comply with GDPR standards. No legal advice.
This code has been thorougly commented and can be adapted easily to include any other fonts or styles you want.

ABOUT
Author: Nicolas Löw, Web Developer from Germany. 
Website: nicolas-loew.de
GitHub Repo: https://github.com/NicolasLoew/WordPress-plugins/tree/main
License: The Fontawesome free fonts are subject to the following license: https://fontawesome.com/license/free 
Start Adding Functions Below this Line 

This plugin registers and adds local fonts and styles.
You can adapt this code to add any stylesheets/fonts you want. 
Just adapt the path to your own stylesheet accordingly.

Useful resources: 
 https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 https://developer.wordpress.org/reference/functions/wp_register_style/#description
 */
function add_fonts() {
	wp_register_style('all', plugin_dir_url( __FILE__ ) . 'css/all.css');
	wp_enqueue_style('all');

}
add_action('wp_enqueue_scripts', 'add_fonts',1);


/* Stop Adding Functions Below this Line */
?>
