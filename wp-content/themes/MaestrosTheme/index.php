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
              <a href="#llamar"><img src="<?php bloginfo('template_url'); ?>/img/arrow.png"></a>
        </div>
</section>

<section class="bg-gray" id="llamar">
        <div class="container">
                <div class="row pt-3 pb-3">
                        <div class="col-sm-12 col-md-6 text-center pt-3">
                                <h4 class="text-white">VEA SU HORÓSCOPO PODEROSO SEMANAL GRATIS</h4>
                                <p class="text-white">Tenemos un nuevo horóscopo Poderoso cada semana<br> preparado para usted por los Mejores Maestros Consagrados</p>
                        </div>
                        <div class="col-sm-12 col-md-6 text-center pt-3">
                                <div class="row justify-content-center">
                                        <div class="col-5">
                                                <div class="skype-chat">
                                                        <span class="skype-button rounded" data-contact-id="Alejandro Serna" data-color="#00A941">
                                                                <button type="button" class="btn btn-success btn-lg btn-block"><img src="<?php bloginfo('template_url'); ?>/img/phone-call.png"></button>
                                                        </span>
                                                        <span class="skype-chat" data-color-message="#00A941"></span>
                                                </div>
                                        </div>
                                </div>
                                <p class="text-white">La llamada no tiene ningún costo.</p>
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
                        <div class="rounded bg-gray-dark p-4">
                                <p class="text-white">La Astrología es una ciencia que estudia la influencia del sistema solar y los movimientos de los astros sobre lo que ocurre en la Tierra, la posición de cada uno de estos en el momento y tiempo exacto del nacimiento de una persona, país, empresa o cualquier entidad y que tiene gran influencia sobre su personalidad, prosperidad, salud, amor, profesión y evolución de su destino. Para realizar este estudio se utiliza el sistema geocéntrico, es el momento en que los demás planetas giran alrededor de la Tierra.</p>
                        </div>
                </div>
        </div>
</section>
<!-- Signos Zodiak -->
<section class="bg-signos container-fluid pb-3">
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
                        <div class="col-5 rounded bg-gray-dark p-4">
                                <p class="text-white">Maestros Consagrados, Entregamos nuestras vidas al servicio del prójimo, somos descendientes de tribus antiguas, especializados en diferentes ciencias, de esta manera podemos ofrecer asesoría directa en campos como: la eclíptica, la astrología, la medicina natural, la Botánica, el espiritismo, La auto sanación, la parapsicología, la metafísica, las cartas sagradas y practicas avanzadas de magia y hechicería, pretendemos asesorar de una manera integral y completa a todas aquellas personas que se encuentran experimentando algún tipo de sufrimiento en su cuerpo físico o a nivel espiritual, con prácticas heredadas de nuestros antepasados, adoptamos el celibato como principio a nuestros ancestros, consagrándonos como maestros dadores de los resultados más efectivos y ofrecemos nuestra espiritualidad consagrada para darle solución a todo.</p>
                        </div>
                </div>
        </div>
</section>
<!-- Nosotros2-->
<section id="nosotros2" class="container-fluid">
        <div class="container">
                <div class="row">
                        <div class="col-lg-6 offset-lg-6 rounded bg-gray-dark p-4 my_margin">
                                <p class="text-white">Nuestras terapias avanzadas están enfocadas a tratar los aspectos más críticos que pueden llegar a afectar a una persona solitaria, así como también a una pareja, una familia o incluso una comunidad. Durante el tiempo que se lleve este proceso es necesario el total compromiso de la persona interesada y el cumplimiento de cada uno de los métodos implementados, ya que con un verdadero compromiso se podra obtner los resultados esperados podrás conseguir lo que desees y el objetivo que tanto anhelas de la mano de los verdaderos Maestros Consagrados.</p>
                        </div>
                </div>
        </div>
</section>
<section class="bg-gray-dark container-fluid" id="servicios">
        <div class="container">
                <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                                <h1 class="text-white pt-5 pb-5">SERVICIOS</h1>
                        </div>



                        <div class="card-deck">
                                <div class="card bg-gray-light">
                                        <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/serviciouno.jpg" alt="Ritual amor">
                                        <div class="card-body">
                                                <h5 class="card-title">RITUALES PARA EL AMOR</h5>

                                        </div>

                                </div>
                                <div class="card bg-gray-light">
                                        <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/serviciosdos.jpg" alt="Hechizos prosperidad">
                                        <div class="card-body">
                                                <h5 class="card-title">HECHIZOS PARA LA PROSPERIDAD</h5>

                                        </div>

                                </div>
                                <div class="card bg-gray-light">
                                        <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/serviciostres.jpg" alt="Bendiciones salud">
                                        <div class="card-body">
                                                <h5 class="card-title">BENDICIONES PARA LA SALUD</h5>

                                        </div>

                                </div>
                                <div class="card bg-gray-light">
                                        <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/img/servicioscuatro.jpg" alt="Magia negra">
                                        <div class="card-body">
                                                <h5 class="card-title">HECHIZOS DE MAGIA NEGRA</h5>

                                        </div>

                                </div>
                        </div>



                        <div class="col-12 pt-5 pb-2">
                                <img class="mx-auto d-block" width="60px" height="60px" src="<?php bloginfo('template_url'); ?>/img/mas-01.png">
                        </div>
                        <div class="col-12">
                                <p class="text-warning text-center">MIRA NUESTROS SERVICIOS Y PRODUCTOS</p>
                        </div>
                        <div class="col-12 text-center pb-4">
                                <p class="text-white">Cada uno de nuestros servicios<br> tiene un valor de 10$</p>
                        </div>
                </div>
        </div>
</section>
<section id="espiritual" class="container-fluid">
        <div class="container">
                <div class="row">
                        <div class="col-12 pt-5 ">
                                <h1 class="text-center text-white">GUÍA ESPIRITUAL</h1><br>
                        </div>
                        <div class="col-8 rounded bg-gray-dark p-4 mb-4">
                                <p class="text-white">Son tratamientos intensivos involucran a los participantes en una profunda exploración personal de su propia naturaleza espiritual, y logra crear una conciencia firme de cada situación, a tal punto que llegamos a encontrar la raíz del problema, eliminamos toda la afectación y sufrimiento del ámbito personal. Nuestro objetivo es establecer un equilibrio en su vida, fortalecer el poder creativo que lleva dentro de usted, fundamentar el balance natural del cuerpo y el espíritu, esto se verá reflejado en su entorno, usted mismo verá los cambios de inmediato, todo a su alrededor cambiara y se acomodara a su favor</p>
                        </div>
                        <div class="col-lg-5 offset-lg-7 rounded bg-gray-dark p-4 mb-5">
                                <p class="text-white">Los tratamientos se organizan y se programan para cada persona en particular, dependiendo de factores como la edad, el peso, la enfermedad que padezca y el tiempo de incubación de dicho mal o dolencia espiritual, corporal o para el objetivo que desea alcanzar, nuestros productos son 100% de origen natural y sus compuestos son extractos de tallos, flores, raíces y frutos traídos directamente de lugares consagrados</p>
                        </div>
                </div>
        </div>

</section>
<!--Frase motivacional  -->
<section class="bg-gray-dark container-fluid">
        <div class="container">
                <div class="row">
                        <div class="col-12 pt-5 pb-5">
                                <h4 class="text-white text-center">Con una llamada tu vida cambiara completamente, los maestros consagrados<br> hemos ayudado a miles de personas en todo el mundo.</h4><br> <p class="text-warning text-center">POR AMOR A SU SANACIÓN LLÁMANOS Y LE DAREMOS SOLUCIÓN A SU PROBLEMA </p>
                        </div>
                </div>
        </div>
</section>
<!--Contacto-->
<section class="bg-gray-light container-fluid pb-5" id="contacto">
        <div class="container">
                <div class="row">
                        <div class="col-12 pt-5">
                                <h2 class="text-warning text-center">Escribenos o Llámanos</h2>
                        </div>
                        <div class="col-12 pb-3">
                                <h4 class="text-center">QUEREMOS RESOLVER SUS PROBLEMAS</h4>
                        </div>
                        <!--Formulario Contacto -->
                        <div class="col-6">
                                <form>
                                        <div class="form-group">
                                                <input type="text" class="form-control text-white" id="inputName" placeholder="Nombre">
                                        </div>
                                        <div class="form-row">
                                                <div class="form-group col-md-6">
                                                        <input type="Phone" class="form-control text-white" id="inputPhone" placeholder="Teléfono">
                                                </div>

                                                <div class="form-group col-md-6">
                                                        <input type="City" class="form-control text-white" id="inputCity" placeholder="Ciudad">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <input type="email" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control text-white" id="exampleTextarea" rows="3" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-success rounded">ENVIAR</button>
                                        </div>
                                </form>
                        </div>
                        <!-- Chat Skype? -->
                        <div class="col-6">
                                <div class="bg-gray-dark rounded pt-3 pl-3 pb-3">
                                        <div class="chat-box">
                                                <p class="pt-2 pl-3 pb-2 font-weight-bold">Hola<br>¿Cómo estás?</p>
                                        </div>
                                        <div class="chat-box">
                                                <p class="pt-2 pl-3 pb-2 font-weight-bold">llámanos estamos para ayudarte en lo que necesites.</p>
                                        </div>
                                        <div class="chat-box">
                                                <p class="pt-2 pl-3 pb-2 font-weight-bold">Si no atendemos a su llamada, insista varias veces.</p>
                                        </div>
                                </div>
                                <div class="row justify-content-center pt-2">
                                        <div class="col-5">
                                                <div class="skype-chat">
                                                        <span class="skype-button rounded" data-contact-id="Alejandro Serna" data-color="#00A941">
                                                                <button type="button" class="btn btn-success btn-block rounded"><img src="<?php bloginfo('template_url'); ?>/img/phone-call.png"></button>
                                                        </span>
                                                        <span class="skype-chat" data-color-message="#00A941"></span>
                                                </div>
                                        </div>
                                </div>

                        </div>

                </div>

        </div>

</section>
<?php get_footer(); ?>
