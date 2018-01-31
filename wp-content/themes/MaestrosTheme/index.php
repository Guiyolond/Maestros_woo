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
<section class="signos container-fluid pb-3">
        <div class="container">
                <div class="row">
                        <div class="col-12 d-flex justify-content-center pt-5 pb-3">
                                <p class="text-warning text-center pb-4">PREPÁRATE A DESCUBRIR LO QUE<br>EL DESTINO TIENE PARA TI</p>
                        </div>
                </div>
                <div class="row">
                        <!-- loop con excerpt -->
                        <?php $CurrentPage = get_query_var('paged');
                        $args = array ('posts_per_page' => '12',
                        'paged' => $CurrentPage);
                        $filter_posts = new WP_Query($args);
                        if($filter_posts->have_posts() ) : ?>
                        <?php while( $filter_posts->have_posts() ) : $filter_posts->the_post() ?>
                                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                                        <a class="text-white" href='<?php the_permalink() ?>'>
                                                <div class="d-flex align-items-center">
                                                        <?php
                                                        if (has_post_thumbnail()){
                                                                the_post_thumbnail();
                                                        }
                                                        ?>
                                                </div>

                                                <h5 class="card-title text-white"><?php the_title() ?></h5>
                                        </a>
                                </div>
                        <?php endwhile ?>
                </div>
                <!-- paginacion -->
                <div class="col-12 pb-5">
                        <?php echo paginate_links(array('total' => $filter_posts->max_num_pages )); ?>
                </div>
        <?php else : ?>
                <div class="row">
                        <div class="col-lg-9 col-md-6 col-xs-12">
                                <h1 class="text-center">Oops no tenemos publicaciones aún.</h1>
                        </div>
                </div>
        <?php endif; wp_reset_postdata(); //reset del loop ?>
</div>
</section>

<!-- Nosotros-->
<section id="nosotros" class="container-fluid pb-5">
        <div class="container">
                <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                                <h1 class="text-white pt-5 pb-5">NOSOTROS</h1><br>
                        </div>
                        <div class="col-5 rounded bg-dark p-4">
                                <p class="text-white">Maestros Consagrados, Entregamos nuestras vidas al servicio del prójimo, somos descendientes de tribus antiguas, especializados en diferentes ciencias, de esta manera podemos ofrecer asesoría directa en campos como: la eclíptica, la astrología, la medicina natural, la Botánica, el espiritismo, La auto sanación, la parapsicología, la metafísica, las cartas sagradas y practicas avanzadas de magia y hechicería, pretendemos asesorar de una manera integral y completa a todas aquellas personas que se encuentran experimentando algún tipo de sufrimiento en su cuerpo físico o a nivel espiritual, con prácticas heredadas de nuestros antepasados, adoptamos el celibato como principio a nuestros ancestros, consagrándonos como maestros dadores de los resultados más efectivos y ofrecemos nuestra espiritualidad consagrada para darle solución a todo.</p>
                        </div>
                </div>
        </div>
</section>
<!-- Nosotros2-->
<section id="nosotros2" class="container-fluid">
        <div class="container">
                <div class="row">
                        <div class="col-lg-6 offset-lg-6 rounded bg-dark p-4 my_margin">
                                <p class="text-white">Nuestras terapias avanzadas están enfocadas a tratar los aspectos más críticos que pueden llegar a afectar a una persona solitaria, así como también a una pareja, una familia o incluso una comunidad. Durante el tiempo que se lleve este proceso es necesario el total compromiso de la persona interesada y el cumplimiento de cada uno de los métodos implementados, ya que con un verdadero compromiso se podra obtner los resultados esperados podrás conseguir lo que desees y el objetivo que tanto anhelas de la mano de los verdaderos Maestros Consagrados.</p>
                        </div>
                </div>
        </div>
</section>
<section class="signos container-fluid">
        <div class="container">
                <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                                <h1 class="text-white pt-5 pb-5">SERVICIOS</h1>
                        </div>
                        <div class="col-12 pb-2">
                                <img class="mx-auto d-block" width="45px" height="45px" src="<?php bloginfo('template_url'); ?>/img/mas-01.png">
                        </div>
                        <div class="col-12">
                                <p class="text-warning text-center">MIRA NUESTROS SERVICIOS Y PRODUCTOS</p>
                        </div>
                        <div class="col-12 text-center">
                                <p class="text-white">Cada uno de nuestros servicios<br> tiene un valor de 10$</p>
                        </div>
                </div>
        </div>
</section>
<?php get_footer(); ?>
