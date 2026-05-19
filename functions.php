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

// Lightweight social metadata for cleaner link previews.
function hommie_social_meta() {
    $description = 'Hommie Community membantu kreator muda Indonesia membangun karya digital yang bukan hanya menjadi portofolio, tapi tumbuh sebagai legacy.';
    $image = get_template_directory_uri() . '/favicon.png';
    ?>
    <meta property="og:title" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:image" content="<?php echo esc_url($image); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="<?php echo esc_attr($description); ?>">
    <?php
}
add_action( 'wp_head', 'hommie_social_meta', 5 );
