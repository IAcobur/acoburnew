<section class="wrapper bg-light">
  <div class="container py-12 py-md-12">
    <div class="row text-center">
      <div class="col-xl-10 mx-auto">
        <h2 class="fs-15 text-uppercase text-primary mb-3">Envía tu Curriculum</h2>
        <h3 class="display-4 mb-10 px-xxl-15">Únete a nuestro equipo</h3>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form action="#" method="post" enctype="multipart/form-data" class="shadow p-4 rounded bg-white border border-light">
          <div class="mb-3">
            <label for="name" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Teléfono (opcional)</label>
            <input type="tel" class="form-control" id="phone" name="phone">
          </div>
          <div class="mb-3">
            <label for="cv" class="form-label">Subir Curriculum (PDF)</label>
            <div class="input-group">
              <input type="file" class="form-control" id="cv" name="cv" accept=".pdf" required>
              <button type="button" class="btn btn-outline-secondary" id="removeFileButton" title="Eliminar Archivo">
                &times;
              </button>
            </div>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary rounded-pill">Enviar</button>
          </div>
          <p class="text-center text-secondary mt-3 mb-0" style="font-size: 0.875rem;">
            Al enviar tu CV, aceptas que procesemos tu información de acuerdo con nuestra política de privacidad.
          </p>
        </form>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->