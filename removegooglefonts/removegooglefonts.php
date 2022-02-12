<?php
/*
Plugin Name: Remove Google Fonts
Description: This plugin intends to remove Google fonts where possible.
*/
/* Start Adding Functions Below this Line */
  /* Prohibit direct access to plugin file */
if ( ! defined( 'ABSPATH' ) ) exit;

/* Remove Google Fonts if any */
function removeGoogleFonts(){
    global $wp_styles;
        $regex = '/fonts\.googleapis\.com\/css\?family/i';
        foreach($wp_styles->registered as $registered) {

            if( preg_match($regex, $registered->src) ) {
                wp_dequeue_style($registered->handle);
            }
        }
    }
add_action('wp_enqueue_scripts', 'removeGoogleFonts', 999);

/* Stop Adding Functions Below this Line */
?>