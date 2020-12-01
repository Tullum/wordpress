<?php

/*add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_styles( 'child-style', get_stylesheet_uri(),
        array ( 'parenthandle' ),
        wp_get_theme()->get('Version') 
    ); 
}*/

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles(){
    $parenthandle ='parent-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array($parenthandle ),
        $theme->get('Version')
    );
}