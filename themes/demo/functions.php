<?php

// ENQUEUE CSS AND JS

function theme_scripts(){
    wp_enqueue_script( 'theme-script', get_theme_file_uri('/build/index.js'), null,'1.0', true );
    wp_enqueue_style('theme-style',get_theme_file_uri('/build/style-index.css'));
    
}
add_action('wp_enqueue_scripts','theme_scripts');

// REGISTER BLOCK

function my_theme_blocks(){
    register_block_type_from_metadata(dirname(__FILE__) . '/build/template-block');
}

add_action('init','my_theme_blocks');