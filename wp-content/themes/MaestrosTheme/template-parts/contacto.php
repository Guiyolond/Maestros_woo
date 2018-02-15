<?php
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $mensaje = $_POST['mensaje'];
  $from = 'From: www.maestrosconsagrados.com';
  $to = 'maestrosconsagrados@outlook.com';
  $subject = 'Hola';

  $body = "From: $nombre\n $apellido\n E-Mail: $email\n Tel: $tel\n Mensaje:\n $mensaje";

  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
      echo '
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta name="author" content="Brumker">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="../css/jac.css" >
          <link rel="stylesheet" href="../css/style.css" >
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
          <link rel="shortcut icon" href="../img/jac-icon.ico" type="image/x-icon">
          <link rel="icon" href="../img/jac-icon.ico" type="image/x-icon">
          <title>Contacto</title>
        </head>
        <body>
          <header>
            <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: rgba(255, 255, 255, 0.85);">
              <a data-scroll class="navbar-brand" href="http://www.jacmanriquecentral.org">
                <img src="../img/logo-manrique.png" class="img-fluid float-left" alt="Responsive image">
              </a>
            </nav>
          </header>
          <article id="home">
            <div class="row mt-5 pl-5 pr-5 pt-5 d-flex justify-content-center">
              <div class="col-lg-12 col-md-6 col-xs-12 mt-5">
                  <h1 class="text-center">Tu mensaje ha sido enviado exitosamente.</h1>
                  <h2 class="text-center">Te responderemos lo más pronto posible.</h2>
              </div>
            </div>
          </article>
          <footer class="pl-5 pr-5 mt-5">
            <div class="float-right mt-0 pt-0 d-none d-sm-block">
              <a href="#home"><img  class="img-fluid" src="../img/arriba-icon-blanco.png" alt="arriba"></a>
              <p class="text-center"><small>Arriba</small></p>
            </div>
            <div class="d-flex justify-content-center pt-4 pb-3 mt-4">
              <a target="_blank" href="https://www.facebook.com/JUNTA-DE-ACCION-COMUNAL-MANRIQUE-CENTRAL-1-230459925838/"><img class="pt-5 pl-5 pr-5" src="../img/facebook-blanco.png" alt="facebook"></a>
              <a target="_blank" href="https://www.youtube.com/channel/UCeiTXUTCS6jpTKvTXmjDEYQ"><img class="pt-5 pl-5 pr-5" src="../img/youtube-blanco.png" alt="youtube"></a>
            </div>
            <div class="row d-flex justify-content-center mt-sm-0 mt-md-3 pt-sm-3 pt-md-5">
              <div class="col-xs-12 col-sm-6 col-md-12">
                <p class="text-center"><i class="material-icons">email</i> info@jacmanriquecentral.org</p>
                <p class="text-center"><i class="material-icons">phone</i> +57(4) 314 646 75 63 Presidencia</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <p class="text-center"><b>&copy;</b> Jac Manrique Central N°1 | Desarrollado por: <a target="_blank" href="http://www.brumker.com/"><img src="../img/brumker-logo-blanco.png" alt="Brumker studios"></a></p>
              </div>
            </div>
          </footer>
          <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Lato:700|Source+Sans+Pro" rel="stylesheet">
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
          <link rel="stylesheet" href="../css/jac.css" >
          <link rel="stylesheet" href="../css/style.css" >
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
          <link rel="shortcut icon" href="../img/jac-icon.ico" type="image/x-icon">
          <link rel="icon" href="../img/jac-icon.ico" type="image/x-icon">
          <title>Contacto</title>
        </head>
        <body>
          <header>
            <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: rgba(255, 255, 255, 0.85);">
              <a data-scroll class="navbar-brand" href="http://www.jacmanriquecentral.org">
                <img src="../img/logo-manrique.png" class="img-fluid float-left" alt="Responsive image">
              </a>
            </nav>
          </header>
          <article id="home">
            <div class="row mt-5 pl-5 pr-5 pt-5 d-flex justify-content-center">
              <div class="col-lg-12 col-md-6 col-xs-12 mt-5">
                  <h1 class="text-center">:( algo salió mal.</h1>
                  <h2 class="text-center">Por favor intenta de nuevo.</h2>
              </div>
            </div>
          </article>
           <footer class="pl-5 pr-5 mt-5">
             <div class="float-right mt-0 pt-0 d-none d-sm-block">
               <a href="#home"><img  class="img-fluid" src="../img/arriba-icon-blanco.png" alt="arriba"></a>
               <p class="text-center"><small>Arriba</small></p>
             </div>
             <div class="d-flex justify-content-center pt-4 pb-3 mt-4">
               <a target="_blank" href="https://www.facebook.com/JUNTA-DE-ACCION-COMUNAL-MANRIQUE-CENTRAL-1-230459925838/"><img class="pt-5 pl-5 pr-5" src="../img/facebook-blanco.png" alt="facebook"></a>
               <a target="_blank" href="https://www.youtube.com/channel/UCeiTXUTCS6jpTKvTXmjDEYQ"><img class="pt-5 pl-5 pr-5" src="../img/youtube-blanco.png" alt="youtube"></a>
             </div>
             <div class="row d-flex justify-content-center mt-sm-0 mt-md-3 pt-sm-3 pt-md-5">
               <div class="col-xs-12 col-sm-6 col-md-12">
                 <p class="text-center"><i class="material-icons">email</i> info@jacmanriquecentral.org</p>
                 <p class="text-center"><i class="material-icons">phone</i> +57(4) 314 646 75 63 Presidencia</p>
               </div>
             </div>
             <div class="row">
               <div class="col-12">
                 <p class="text-center"><b>&copy;</b> Jac Manrique Central N°1 | Desarrollado por: <a target="_blank" href="http://www.brumker.com/"><img src="../img/brumker-logo-blanco.png" alt="Brumker studios"></a></p>
               </div>
             </div>
           </footer>
           <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
           <link href="https://fonts.googleapis.com/css?family=Lato:700|Source+Sans+Pro" rel="stylesheet">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
           </body>
         </html>';
     }
  }
?>
