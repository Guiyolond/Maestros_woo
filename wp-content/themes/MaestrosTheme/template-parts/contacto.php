<?php
  $nombre = $_POST['nombre'];
  $tel = $_POST['tel'];
  $ciudad = $_POST['ciudad'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  $from = 'From: www.maestrosconsagrados.com';
  $to = 'maestrosconsagrados@outlook.com';
  $subject = 'Hola';

  $body = "From: $nombre\n E-Mail: $email\n Tel: $tel\n ciudad: $ciudad\n Mensaje:\n $mensaje";

  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
      echo '
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta name="author" content="Brumker">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="../css/maestros.css" >
          <link rel="stylesheet" href="../css/shop.css" >
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
          <link rel="shortcut icon" href="../img/maestros-favicon.ico" type="image/x-icon">
          <link rel="icon" href="../img/maestros-favicon.ico" type="image/x-icon">
          <title>Contacto</title>
        </head>
        <body>
        <header>
          <div class="container-fluid bg-signos">
            <div class="container pt-4 ">
              <div class="row">
                <div class="col-lg-10 col-md-9 col-sm-8 col-4">
                  <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="http://www.maestrosconsagrados.com">
                      <img src="../img/back_arrow.png">
                    </a>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </header>
          <article id="home">
            <div class="row mt-5 pl-5 pr-5 pt-5 d-flex justify-content-center">
              <div class="col-lg-12 col-md-6 col-xs-12 mt-5">
                  <h1 class="text-center">Tu mensaje ha sido enviado exitosamente.</h1>
                  <h2 class="text-center">Te responderemos lo más pronto posible.</h2>
              </div>
            </div>
          </article>
          <footer>
            <div class="container-fluid bg-gray-dark">
              <div class="container">
                <div class="row justify-content-center">
                  <!--Fake Counter-->
                  <div class="col-12 pt-5">
                    <section title="contadores de visitas">
                      <img class="d-block mx-auto" src="https://counter2.freecounter.ovh/private/contadorvisitasgratis.php?c=dnu1t6mzu12w1qz6kh2brarz8fg7ar8l" border="0" title="contadores de visitas" alt="contadores de visitas">
                    </section>
                    <p class="text-yellow text-center">PERSONAS HAN SIDO ATENDIDAS POR LOS MAESTROS</p>
                  </div>
                  <div class="col-12">
                    <h6 class="text-white text-center">Pague por el medio de su preferencia, envios o su casa de envios.</h6>
                  </div>
                  <!--Medios de pago -->
                  <div class="row p-4">
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagouno.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagodos.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagotres.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagocuatro.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagocinco.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagoseis.png">
                    </div>
                  </div>
                  <div class="col-12 pt-3 pb-2">
                    <p class="text-white text-center">Al hacer uso de nuestros servicios acepta nuestras <a href="<?php echo get_page_link(104); ?>" target="_blank">políticas y condiciones</a></p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <script src="../js/smooth-scroll.min.js"></script>
          <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
          </body>
          </html>';
     } else {
      echo '
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta name="author" content="Brumker">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="../css/maestros.css" >
          <link rel="stylesheet" href="../css/shop.css" >
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
          <link rel="shortcut icon" href="../img/maestros-favicon.ico" type="image/x-icon">
          <link rel="icon" href="../img/maestros-favicon.ico" type="image/x-icon">
          <title>Contacto</title>
        </head>
        <body>
        <header>
          <div class="container-fluid bg-signos">
            <div class="container pt-4 ">
              <div class="row">
                <div class="col-lg-10 col-md-9 col-sm-8 col-4">
                  <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="http://www.maestrosconsagrados.com">
                      <img src="../img/back_arrow.png">
                    </a>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </header>
          <article id="home">
            <div class="row mt-5 pl-5 pr-5 pt-5 d-flex justify-content-center">
              <div class="col-lg-12 col-md-6 col-xs-12 mt-5">
                  <h1 class="text-center">:( algo salió mal.</h1>
                  <h2 class="text-center">por favor regresa e intenta nuevamente.</h2>
              </div>
            </div>
          </article>
          <footer>
            <div class="container-fluid bg-gray-dark">
              <div class="container">
                <div class="row justify-content-center">
                  <!--Fake Counter-->
                  <div class="col-12 pt-5">
                    <section title="contadores de visitas">
                      <img class="d-block mx-auto" src="https://counter2.freecounter.ovh/private/contadorvisitasgratis.php?c=dnu1t6mzu12w1qz6kh2brarz8fg7ar8l" border="0" title="contadores de visitas" alt="contadores de visitas">
                    </section>
                    <p class="text-yellow text-center">PERSONAS HAN SIDO ATENDIDAS POR LOS MAESTROS</p>
                  </div>
                  <div class="col-12">
                    <h6 class="text-white text-center">Pague por el medio de su preferencia, envios o su casa de envios.</h6>
                  </div>
                  <!--Medios de pago -->
                  <div class="row p-4">
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagouno.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagodos.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagotres.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagocuatro.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagocinco.png">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-2">
                      <img class="img-fluid mx-auto d-block" src="../img/mediodepagoseis.png">
                    </div>
                  </div>
                  <div class="col-12 pt-3 pb-2">
                    <p class="text-white text-center">Al hacer uso de nuestros servicios acepta nuestras <a href="<?php echo get_page_link(104); ?>" target="_blank">políticas y condiciones</a></p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <script src="../js/smooth-scroll.min.js"></script>
          <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
          </body>
          </html>';
     }
  }
?>
