<?php
  add_theme_support( 'post-thumbnails' );
  function woo_setup() {
    add_theme_support( 'woocommerce' );
  }
  add_action( 'after_setup_theme', 'woo_setup' );

  remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
  remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

  function my_before_main_content() {
      echo '<!-- Starting content wrapper for your theme -->';
      echo '<div class="card bg-gray-light"><div class="col-3">';
  }
  add_action( 'woocommerce_before_main_content', 'my_before_main_content' );

  function my_after_main_content() {
      echo '</div></div>';
      echo '<!-- Ending content wrapper for your theme -->';
  }
  add_action( 'woocommerce_after_main_content', 'my_after_main_content' );
?>
