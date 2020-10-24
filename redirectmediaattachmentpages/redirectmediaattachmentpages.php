<?php
/*
Plugin Name: Redirect Attachment Pages
Code found on: https://www.wpexplorer.com/disable-image-page/ on 24/10/2020
Description: This plugin "redirects" the attachment pages that are automatically created each time you upload a media file.
This is great if you don't need these but use e.g. a freemium plugin that charges by page count.
I created this plugin because there exist other plugins that promise to do the same but I wanted to have control about any changes to the plugin
so I turned the code into a WP plugin.
Author: Ympker
Version: 1.0
*/

function myprefix_redirect_attachment_page() {
	if ( is_attachment() ) {
		global $post;
		if ( $post && $post->post_parent ) {
			wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
			exit;
		} else {
			wp_redirect( esc_url( home_url( '/' ) ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'myprefix_redirect_attachment_page' );


