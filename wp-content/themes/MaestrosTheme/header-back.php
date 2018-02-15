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
        <div class="col-2 float-right ">
              <a class="pr-3" href="<?php echo get_page_link(57); ?>"><img src="<?php bloginfo('template_url'); ?>/img/Cart.png"></a>
              <a class="pl-3" href="<?php echo get_page_link(59); ?>"><img src="<?php bloginfo('template_url'); ?>/img/User.png"></a>
        </div>

      </div>
