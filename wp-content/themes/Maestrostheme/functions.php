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
  // remover breadcumbs
  add_action( 'init', 'MaestrosTheme_remove_wc_breadcrumbs' );
  function MaestrosTheme_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
  }
  // remover contador de resultados
  add_action( 'init', 'MaestrosTheme_woocommerce_result_count' );
  function MaestrosTheme_woocommerce_result_count() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
  }
  // remover organizador de catalogo
  add_action( 'init', 'MaestrosTheme_woocommerce_catalog_ordering' );
  function MaestrosTheme_woocommerce_catalog_ordering() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
  }
  // cambio titulo tienda
  add_filter( 'woocommerce_page_title', 'woo_shop_page_title');
  function woo_shop_page_title( $page_title ) {
    if( 'Shop' == $page_title) {
      return "Nuestros servicios";
     }
  }

  // orden del catalogo
  function woocommerce_catalog_ordering() {
    if ( ! wc_get_loop_prop( 'is_paginated' ) || ! woocommerce_products_will_display() ) {
      return;
    }
    $orderby                 = isset( $_GET['orderby'] ) ? wc_clean( wp_unslash( $_GET['orderby'] ) ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) ); // WPCS: sanitization ok, input var ok, CSRF ok.
    $show_default_orderby    = 'menu_order' === apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
    $catalog_orderby_options = apply_filters( 'woocommerce_catalog_orderby', array(
      'menu_order' => __( 'ordenar', 'woocommerce' ),
      'popularity' => __( 'Ordenar por popularidad', 'woocommerce' ),
      'rating'     => __( 'Ordenar por puntuación', 'woocommerce' ),
      'date'       => __( 'Ordenar por fecha', 'woocommerce' ),
      'price'      => __( 'Ordenar por precio: menor a mayor', 'woocommerce' ),
      'price-desc' => __( 'Ordenar por precio: mayor a menor', 'woocommerce' ),
    ) );

    if ( wc_get_loop_prop( 'is_search' ) ) {
      $catalog_orderby_options = array_merge( array( 'relevance' => __( 'Relevance', 'woocommerce' ) ), $catalog_orderby_options );
      unset( $catalog_orderby_options['menu_order'] );
      if ( 'menu_order' === $orderby ) {
        $orderby = 'relevance';
      }
    }

    if ( ! $show_default_orderby ) {
      unset( $catalog_orderby_options['menu_order'] );
    }

    if ( 'no' === get_option( 'woocommerce_enable_review_rating' ) ) {
      unset( $catalog_orderby_options['rating'] );
    }

    wc_get_template( 'loop/orderby.php', array(
      'catalog_orderby_options' => $catalog_orderby_options,
      'orderby'                 => $orderby,
      'show_default_orderby'    => $show_default_orderby,
    ) );
  }

  // remover input de website en caja de comentarios
  function disable_comment_uri($fields)
  {
    if(isset($fields['url']))
    unset($fields['url']);
    return $fields;
  }
  add_filter('comment_form_default_fields', 'disable_comment_uri');

  // titulos de tabs de productos
  add_filter( 'woocommerce_product_tabs', 'oaf_wc_change_product_tabs_titles', 20);
  function oaf_wc_change_product_tabs_titles($tabs) {
    $tabs['description']['title'] = 'Descripción del servicio';
    $tabs['reviews']['title'] = 'Valoraciones';
    return $tabs;
  }

  // Cambiar textos "Add to cart" en category pages
  add_filter( 'woocommerce_product_add_to_cart_text', 'MaestrosTheme_wc_change_add_to_cart_text' );
  // cambiar textos "Add to cart" en single product pages
  add_filter( 'woocommerce_product_single_add_to_cart_text', 'MaestrosTheme_wc_change_add_to_cart_text' );
  function MaestrosTheme_wc_change_add_to_cart_text() {
    return __('Añadir al carrito', 'woocommerce');
  }


?>
