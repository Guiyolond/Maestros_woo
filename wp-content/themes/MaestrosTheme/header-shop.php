<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo(title); ?></title>
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/maestros-favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/maestros-favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”robots” content=”index, follow”>
    <meta name="author" content="Brumker">
    <meta name="description" content="<?php bloginfo(description); ?>">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114667490-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-114667490-1');
    </script>
  </head>
  <body <?php body_class(); ?>>
    <div class="container-fluid bg-signos">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-10 col-md-9 col-sm-8 col-4">
            <nav class="navbar navbar-light">
              <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_url'); ?>/img/back_arrow.png">
              </a>
            </nav>
          </div>
          <div class="align-items-end pt-2">
            <a class="pl-2" alt="Agregar al carrito" href="<?php echo get_page_link(5); ?>"><img src="<?php bloginfo('template_url'); ?>/img/cart.png"></a>
            <a class="pr-2" alt="Mi cuenta" href="<?php echo get_page_link(7); ?>"><img src="<?php bloginfo('template_url'); ?>/img/User.png"></a>
          </div>
        </div>
      </div>
    </div>
