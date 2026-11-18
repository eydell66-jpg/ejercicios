<?php

/**
 * añadimos la hoja de estilos del tema */

function tueste_norte_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails');
    register_nav_menus( array(
        'Menu Principal' => 'Menú Principal' 
    ));
    
}
add_action( 'after_setup_theme', 'tueste_norte_setup' );

function tueste_norte_scripts() {
    wp_enqueue_style(
        'tueste_norte-style', get_stylesheet_uri(),
        array(), '1.0'
    );
}

add_action('wp_enqueue_scripts', 'tueste_norte_scripts');

?>