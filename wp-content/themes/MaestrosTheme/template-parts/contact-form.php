<div class="col-md-12 col-lg-6">
  <form method="post" action="<?php bloginfo('template_url'); ?>/template-parts/contacto.php" for="validationDefault01">
    <div class="form-group">
      <input name="nombre" type="text" class="form-control text-white" id="validationDefault01" placeholder="Nombre" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <input name="tel" type="Phone" class="form-control text-white" id="validationDefault01" placeholder="Teléfono">
      </div>
      <div class="form-group col-md-6">
        <input name="ciudad" type="City" class="form-control text-white" id="validationDefault01" placeholder="Ciudad">
      </div>
    </div>
    <div class="form-group">
      <input name="email" type="email" class="form-control text-white" id="validationDefault01" aria-describedby="emailHelp" placeholder="Email" required>
    </div>
    <div class="form-group">
      <textarea name="mensaje" class="form-control text-white" rows="3" placeholder="Mensaje" length="400" required></textarea>
    </div>
    <div class="d-flex justify-content-center mb-3">
      <button name="submit" type="submit" value="submit" class="btn btn-lg btn-success rounded">ENVIAR</button>
    </div>
  </form>
</div>
