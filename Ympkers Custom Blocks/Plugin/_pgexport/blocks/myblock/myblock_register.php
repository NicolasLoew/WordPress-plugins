<?php

        PG_Blocks::register_block_type( array(
            'name' => 'ympkers-custom-blocks/myblock',
            'title' => __( 'My Block Title', 'ympkers_custom_blocks' ),
            'description' => __( 'My Block Description', 'ympkers_custom_blocks' ),
            'icon' => 'id',
            'enqueue_style' => ympkers_custom_blocks_plugin_base_url() . '/bootstrap_theme/bootstrap.css',
            'supports' => array('color' => array('background' => false,'text' => false,'gradients' => false,'link' => false,),'typography' => array('fontSize' => false,),'anchor' => false,'align' => false,),
            'base_url' => ympkers_custom_blocks_plugin_base_url(),
            'base_path' => ympkers_custom_blocks_plugin_base_path(),
            'js_file' => 'blocks/myblock/myblock.js',
            'attributes' => array(

            ),
            'example' => array(

            ),
            'dynamic' => false
        ) );
