<?php
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  // styles and scripts
  function MaestrosTheme_script_enqueue(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'maestros', get_template_directory_uri() . '/css/maestros.css' , array(), '1.0.0', 'all');
    wp_enqueue_style( 'shop', get_template_directory_uri() . '/css/shop.css' , array(), '1.0.0', 'all');
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' , array(), '4.0.0', 'all');
    wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css?family=Oswald:600');
    wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.min.js' , array(), '12.1.5', true);
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' , array(), '3.2.1', true);
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' , array(), '1.0.0', true);
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' , array(), '4.0.0', true);
  }
  add_action('wp_enqueue_scripts', 'MaestrosTheme_script_enqueue');
  // woocommerce compatibility
  add_action('after_setup_theme', 'woocommerce_support');
  function woocommerce_support() {
    add_theme_support( 'woocommerce' );
  }
  // texto añadir al carrito
  add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
  function woo_archive_custom_cart_button_text() {
    return __( 'Añadir al carrito', 'woocommerce' );
  }
  // remover breadcumbs
  add_action( 'init', 'MaestrosTheme_remove_wc_breadcrumbs' );
  function MaestrosTheme_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
  }
?>
