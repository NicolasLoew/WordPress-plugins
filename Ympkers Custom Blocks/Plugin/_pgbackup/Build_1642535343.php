<?php
/**
 * Plugin Name:       Ympkers Custom Blocks
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Describe what the plugin does.
 * Version:           1.0.0
 * Requires at least: 5.5
 * Requires PHP:      5.3
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       ympkers_custom_blocks
 * Domain Path:       /languages
*/

 

if ( ! function_exists( 'ympkers_custom_blocks_plugin_base_url' ) ) :
 
function ympkers_custom_blocks_plugin_base_url() {
    global $ympkers_custom_blocks_plugin_base_url_value;
    if(empty($ympkers_custom_blocks_plugin_base_url_value)) {
        $ympkers_custom_blocks_plugin_base_url_value = plugin_dir_url( __FILE__ );
    }
    return $ympkers_custom_blocks_plugin_base_url_value;
}

endif;

if ( ! function_exists( 'ympkers_custom_blocks_plugin_base_path' ) ) :
 
function ympkers_custom_blocks_plugin_base_path() {
    global $ympkers_custom_blocks_plugin_base_path_value;
    if(empty($ympkers_custom_blocks_plugin_base_path_value)) {
        $ympkers_custom_blocks_plugin_base_path_value = plugin_dir_path(  __FILE__ );
    }
    return $ympkers_custom_blocks_plugin_base_path_value;
}

endif;
 
if ( ! function_exists( 'ympkers_custom_blocks_setup' ) ) :

function ympkers_custom_blocks_setup() {

    ympkers_custom_blocks_plugin_base_url();
    /*
     * Make the plugin available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_plugin_textdomain( 'ympkers_custom_blocks', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    /*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
    /*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
}
endif; // ympkers_custom_blocks_setup

add_action( 'after_setup_theme', 'ympkers_custom_blocks_setup' );


if ( ! function_exists( 'ympkers_custom_blocks_init' ) ) :

function ympkers_custom_blocks_init() {

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // ympkers_custom_blocks_setup

add_action( 'init', 'ympkers_custom_blocks_init' );


if ( ! function_exists( 'ympkers_custom_blocks_custom_image_sizes_names' ) ) :

function ympkers_custom_blocks_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'ympkers_custom_blocks_custom_image_sizes_names' );
endif;// ympkers_custom_blocks_custom_image_sizes_names


if ( ! function_exists( 'ympkers_custom_blocks_widgets_init' ) ) :

function ympkers_custom_blocks_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'ympkers_custom_blocks_widgets_init' );
endif;// ympkers_custom_blocks_widgets_init



if ( ! function_exists( 'ympkers_custom_blocks_customize_register' ) ) :

function ympkers_custom_blocks_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'ympkers_custom_blocks_customize_register' );
endif;// ympkers_custom_blocks_customize_register


if ( ! function_exists( 'ympkers_custom_blocks_enqueue_scripts' ) ) :
    function ympkers_custom_blocks_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'ympkers_custom_blocks_enqueue_scripts' );
endif;

if ( ! function_exists( 'ympkers_custom_blocks_pgwp_sanitize_placeholder' ) ) :
    function ympkers_custom_blocks_pgwp_sanitize_placeholder($input) { return $input; }
endif;

    /*
     * Resource files included by Pinegrow.
     */
    /* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */

/* Creating Editor Blocks with Pinegrow */

function ympkers_custom_blocks_blocks_init() {
    // Register blocks. Don't edit anything between the following comments.
    /* Pinegrow generated Register Pinegrow Blocks Begin */
    require_once 'blocks/myblock/myblock_register.php';

    /* Pinegrow generated Register Pinegrow Blocks End */
}
add_action('init', 'ympkers_custom_blocks_blocks_init');

/* End of creating Editor Blocks with Pinegrow */

?>