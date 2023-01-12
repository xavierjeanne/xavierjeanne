<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a timeline block.
        acf_register_block_type(array(
            'name'              => 'timeline',
            'title'             => __('Timeline'),
            'description'       => __('Timeline block.'),
            'render_template'   => 'gutenberg-blocks/timeline/timeline.php',
            'category'          => 'formatting',
            'icon'              => 'clock',
            'keywords'          => array( 'timeline', 'time' ),
        ));

        // register a collapse block.
        acf_register_block_type(array(
            'name'              => 'collapse',
            'title'             => __('block Développer'),
            'description'       => __('Développer block. collapse block'),
            'render_template'   => 'gutenberg-blocks/collapse/collapse.php',
            'category'          => 'formatting',
            'icon'              => 'arrow-down-alt2',
            'keywords'          => array( 'developpe', 'collapse' ),
        ));
    }
}

function wpb_adding_scripts() {
    wp_register_script('timeline_js', get_template_directory_uri() . '/gutenberg-blocks/timeline/script.js', array('jquery'),'1.1', true);
    wp_enqueue_script('timeline_js');
    wp_enqueue_style( 'timeline_css',  get_template_directory_uri() . '/gutenberg-blocks/timeline/style.css');

    wp_register_script('collapse_js', get_template_directory_uri() . '/gutenberg-blocks/collapse/script.js', array('jquery'),'1.1', true);
    wp_enqueue_script('collapse_js');
    wp_enqueue_style( 'collapse_css',  get_template_directory_uri() . '/gutenberg-blocks/collapse/style.css');


}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts', 999 );