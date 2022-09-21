<?php
/*
Plugin Name: Local Fonts GDPR Helper
Description: This Plugin enables you to host Fontawesome v6.0.0 locally to better comply with GDPR standards. No legal advice.
The code is documented and can be easily adapted to allow you to self-host any stylesor fonts you want.

AUTHOR:
Name: Nicolas Löw, Web Developer from Germany
Website: www.nicolas-loew.de
GitHub Repo: https://github.com/NicolasLoew/WordPress-plugins/tree/main

LICENSE: The plugin code can be forked and adapted as you like. 
The resources from Fontawesome are subject to the Fontawesome free license: https://fontawesome.com/license/free

/* Start Adding Functions Below this Line */
 
 /* Register and add local Fontawesome Stylesheet v5.0.0 Web

Useful resources for writing similar plugins yourself: 
 https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 https://developer.wordpress.org/reference/functions/wp_register_style/#description

 To self-host any other fonts or styles just adjust the path to your stylesheet(s) accordingly.
 Please report any issues via Github. If you have questions, feel free to open an issue and I will do my best to help.
 */
function add_fonts() {
	wp_register_style('all', plugin_dir_url( __FILE__ ) . 'css/all.css');
	wp_enqueue_style('all');

}
add_action('wp_enqueue_scripts', 'add_fonts',1);


/* Stop Adding Functions Below this Line */
?>
