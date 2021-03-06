<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo(title); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/maestros-favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/maestros-favicon.ico" type="image/x-icon">
    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”robots” content=”index, follow”>
    <meta name="author" content="Brumker">
    <meta name="description" content="<?php bloginfo(description); ?>">
    <?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - AdWords, 813345416 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-813345416"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

	  gtag('config', 'AW-813345416');
    </script>
    <script>
      function gtag_report_conversion(url) {
        var callback = function () {
          if (typeof(url) != 'undefined') {
            window.location = url;
          }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-813345416/3i5jCMi8wYEBEIjV6oMD',
            'event_callback': callback
        });
        return false;
      }
    </script>
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
    <header>
      <div class="container fixed-top pt-5">
        <div class="row">
          <div class="col-lg-10 col-md-9 col-sm-8 col-4">
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
                    <a data-scroll class="nav-link text-white" href="<?php echo get_page_link(4); ?>">Servicios</a>
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
          <div class="align-items-end ">
            <a class="pr-3" href="<?php echo get_page_link(5); ?>"><img src="<?php bloginfo('template_url'); ?>/img/cart.png"></a>
            <a class="pl-3" href="<?php echo get_page_link(7); ?>"><img src="<?php bloginfo('template_url'); ?>/img/User.png"></a>
          </div>
        </div>
      </div>
    </header>
