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

      <div class="container fixed-top pt-5">
        <nav class="navbar navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item d-flex justify-content-center">
                <a data-scroll class="nav-link text-white" href="#home">Home</a>
              </li>
              <li class="nav-item d-flex justify-content-center">
                <a data-scroll class="nav-link text-white" href="#horoscopo">Horoscopo</a>
              </li>
              <li class="nav-item d-flex justify-content-center">
                <a data-scroll class="nav-link text-white" href="#nosotros">Nosotros</a>
              </li>
              <li class="nav-item d-flex justify-content-center">
                <a data-scroll class="nav-link text-white" href="#servicios">Servicios</a>
              </li>
              <li class="nav-item d-flex justify-content-center">
                <a data-scroll class="nav-link text-white" href="#espiritual">Guía espiritual</a>
              </li>
              <li class="nav-item d-flex justify-content-center">
                <a data-scroll class="nav-link text-white" href="#contacto">Contacto</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
