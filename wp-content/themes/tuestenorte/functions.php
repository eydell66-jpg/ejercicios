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
/* Regristrar el tipo de contenido cafés */
<?php 
function tueste_norte_registrar_cafes() {

    register_post_type('cafe', array(
        'labels' => array(
            'name' => 'Cafés',
            'singular_name' => 'Café',
            'add_new' => 'Añadir café',
            'add_new_item' => 'Añadir nuevo café',
            'edit_item' => 'Editar café',
            'new_item' => 'Nuevo café',
            'view_item' => 'ver café',
            'search_item' => 'Buscar cafés',
            'not_found' => 'No se encontraron cafés',
            'menu_name' => 'Cafés'
        ),

        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-coffee',
        'supports' => array('title', 'thumbail'),
        'show_in_rest' => true
    ));
}
add_action('init', 'tueste_norte_registrar_cafes');








}