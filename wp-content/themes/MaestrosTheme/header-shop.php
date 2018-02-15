<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo(title); ?></title>
    <?php wp_head(); ?>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/maestros-favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/maestros-favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body <?php body_class(); ?>>

      <div class="container pt-5">
        <nav class="navbar navbar-light">
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/img/back_arrow.png">
          </a>
        </nav>

      </div>
