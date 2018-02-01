<div class="row pt-5">
    <div class="col-12">
      <div class="bg-1 pt-5 pb-2">
        <h2 class="text-white pt-5 pl-5 pb-3">Contacto</h2>
        <div class="col-sm-12 col-md-8">
          <p class="text-white text-left mt-1 pl-5 pr-5">Escríbenos y mándanos
            tus inquietudes, sugerencias o aportes.</p>
        </div>
      </div>
    </div>
</div>
<form class="mt-5 p-5" method="post" action="<?php bloginfo('template_url'); ?>/template-parts/contacto.php">
  <div class="form">
      <div class="row d-flex justify-content-center">
          <div class="col-sm-12 col-md-4 mb-3" for="validationDefault01">
            <input name="nombre" type="text" class="form-control text-center" style="border: 2px solid #82BA2B; border-radius: 1.2rem;" id="validationDefault01" placeholder="Nombre" required>
          </div>
          <div class="col-sm-12 col-md-4 mb-3" for="validationDefault02">
            <input name="apellido" type="text" class="form-control text-center" style="border: 2px solid #82BA2B; border-radius: 1.2rem;" id="validationDefault02" placeholder="Apellido" required>
          </div>
      </div>
      <div class="row d-flex justify-content-center">
          <div class="col-sm-12 col-md-4 mb-3" for="validationDefault03">
            <input name="email" type="email" class="form-control text-center" style="border: 2px solid #82BA2B; border-radius: 1.2rem;" id="validationDefault03" placeholder="Email" required>
          </div>
          <div class="col-sm-12 col-md-4 mb-3" for="validationDefault04">
            <input name="tel" type="tel" class="form-control text-center" style="border: 2px solid #82BA2B; border-radius: 1.2rem;" id="validationDefault04" placeholder="Teléfono">
          </div>
      </div>
      <textarea name="mensaje" class="form-control" style="border: 2px solid #82BA2B; border-radius: 1.2rem;" length="400" required></textarea>
  </div>
  <div class="row d-flex justify-content-md-center mt-3">
      <div class="form-check">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" required><h6>Acepto términos y condiciones</h6>
          </label>
      </div>
  </div>
  <div class="row justify-content-sm-center mt-3">
    <div class="col-sm-3">
      <input class="my-btn btn btn-lg btn-block text-white" type="Submit" value="Enviar" name="submit">
    </div>
  </div>
</form>
