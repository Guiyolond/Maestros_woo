<?php
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  function MaestrosTheme_script_enqueue(){
    wp_enqueue_style( 'maestros', get_template_directory_uri() . '/css/maestros.css' , array(), '1.0.0', 'all');
    wp_enqueue_style( 'shop', get_template_directory_uri() . '/css/shop.css' , array(), '1.0.0', 'all');
    wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.min.js' , array(), '12.1.5', true);
  }
  add_action('wp_enqueue_scripts', 'MaestrosTheme_script_enqueue');
  function woo_setup() {
    add_theme_support( 'woocommerce' );
  }
?>
