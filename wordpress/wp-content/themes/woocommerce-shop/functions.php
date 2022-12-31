<?php

/* Adding CSS & JS */
function woocommerce_custom_theme(){
    wp_register_style('bootstrap_cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', false, '1.0.0');
    wp_register_style('index_css', get_template_directory_uri(). 'css/index.css', false, '1.0.0');

    wp_enqueue_style('bootstrap_cdn');
    wp_enqueue_style('index_cdn');
}
add_action('wp_enqueue_scripts', 'woocommerce_custom_theme');

// Creating Custom Menu
function my_custom_menu () {
    register_nav_menu('my-custom-menu',__('MyCustomTheme Custom Menu', 'mycustomtheme'));
}
add_action('init', 'my_custom_menu'); 

// Thumbnail Support
add_theme_support('post-thumbnails');

if (class_exists('WooCommerce')) {
    // Write snippets withing this blog
}

// WooCommerce Support
function customtheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support');

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );