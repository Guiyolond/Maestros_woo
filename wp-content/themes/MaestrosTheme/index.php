<?php get_header(); ?>
        <!--Elementos Home -->
        <section id="home" class="container-fluid pb-5 pt-5">
            <div class="d-flex justify-content-center pt-5">
                <img src="<?php bloginfo('template_url'); ?>/img/simbolo.png">
            </div>
            <div class="d-flex justify-content-center pt-4">
                <p class="text-warning text-center">BIENVENIDO<br> A LO QUE NO PUEDES COMPRENDER</p>
            </div>
            <div class="d-flex justify-content-center pt-4 pb-5">
                <img src="<?php bloginfo('template_url'); ?>/img/arrow.png">
            </div>
        </section>

        <section class="bg-gray">
            <div class="container">
                <div class="row pt-3 pb-3">
                    <div class="col text-center pt-3">
                        <h4 class="text-white">VEA SU HORÓSCOPO PODEROSO SEMANAL GRATIS</h4>
                        <p class="text-white">Tenemos un nuevo horóscopo Poderoso cada semana<br> preparado para usted por los Mejores Maestros Consagrados</p>
                    </div>
                    <div class="col text-center pt-3">
                        <!-- Implementación Skype-->
                        <img src="" height="50px" width="75px" alt="Boton llamadas Skype" class="rounded bg-success" >
                        <p class="text-white">La llamada no tiene ningún costo, su operador<br> telefónico puede aplicar los cargos estipulados</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- horoscopo -->
        <section id="horoscopo" class="container-fluid">
          <div class="container">
            <div class="row pt-5 pb-3">
                    <div class="col-12">
                        <h1 class="text-center text-white pb-5">HORÓSCOPO</h1><br>
                    </div>
                <div class="rounded bg-dark p-4">
                        <p class="text-white">La Astrología es una ciencia que estudia la influencia del sistema solar y los movimientos de los astros sobre lo que ocurre en la Tierra, la posición de cada uno de estos en el momento y tiempo exacto del nacimiento de una persona, país, empresa o cualquier entidad y que tiene gran influencia sobre su personalidad, prosperidad, salud, amor, profesión y evolución de su destino. Para realizar este estudio se utiliza el sistema geocéntrico, es el momento en que los demás planetas giran alrededor de la Tierra.</p>
                </div>
            </div>
          </div>
        </section>
        <!-- Signos Zodiak -->
        <section class="signos container-fluid">
                <div class="container">
                        <div class="row">
                                <div class="col-12 d-flex justify-content-center pt-4 pb-3">
                                        <p class="text-warning text-center pb-4">PREPÁRATE A DESCUBRIR LO QUE<br>EL DESTINO TIENE PARA TI</p>
                                </div>
                        </div>
                        <div class="row">
                                <?php if( have_posts() ) : ?>
                                        <?php while( have_posts() ) : the_post() ?>
                                                <a href='<?php the_permalink() ?>'>
                                                        <div class="col-lg-2">
                                                                <?php
                                                                if (has_post_thumbnail()){
                                                                        the_post_thumbnail();
                                                                }
                                                                ?>
                                                                <div class="d-flex align-items-center">
                                                                        <h5 class="text-white text-center"><?php the_title() ?></h5>
                                                                </div>

                                                        </div>
                                                </a>
                                        <?php endwhile ?>
                                <?php else : ?>
                                        <p>Oh No, there are no posts!</p>
                                <?php endif ?>


                        </div>

                </div>
        </section>
<?php get_footer(); ?>
