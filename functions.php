<?php
/**
 * Hommie Community functions and definitions
 */

function hommie_enqueue_scripts() {
    // Enqueue style.css
    wp_enqueue_style( 'hommie-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
    
    // Enqueue FontAwesome
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );
    
    // Enqueue Lucide Icons script
    wp_enqueue_script( 'lucide', 'https://unpkg.com/lucide@latest', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'hommie_enqueue_scripts' );

// Add Theme Support
function hommie_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    // Register Navigation Menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'hommie' ),
    ) );
}
add_action( 'after_setup_theme', 'hommie_theme_setup' );
