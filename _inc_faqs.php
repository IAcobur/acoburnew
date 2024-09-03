

<!-- ---------------------------------------------------------------------------------------------------------------------------- -->




<style>
    .accordion-button {
      background-color: transparent; 
      border: none; 
      box-shadow: none; 
      padding: 0.75rem 1.25rem;
      color: #000;
      text-align: left; 
    }

    .accordion-button:not(.collapsed) {
      color: #49bdc5;
    }

    .accordion-button i {
      margin-right: 10px; 
      transition: transform 0.3s ease; 
    }
  </style>

<body>
  <section class="wrapper bg-light">
    <div class="container py-8 mb-1">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <!-- Título principal -->
          <h1 class="display-3 text-uppercase text-primary mb-4 text-center">Preguntas Frecuentes</h1>
        </div>
        <div class="col-lg-12">
          <!-- Acordeón de preguntas -->
          <div id="accordionExample" class="accordion">
            <!-- Pregunta 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed fs-19" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <i class="fas fa-plus"></i> ¿Cómo identifica Acobur oportunidades de licitación para mi empresa?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse fs-17" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="display: flex; justify-content: flex-end;">
                  <div style="width: 95%;">
                    <p>Contamos con una base de datos con más de 10 años de información en contratación pública sanitaria, junto con herramientas de análisis avanzado, para identificar oportunidades de licitación que se alineen con el portfolio y objetivos de tu empresa.</p>               
                  </div>
                </div>
              </div>
            </div>
            <!-- Pregunta 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fs-19" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fas fa-plus"></i> ¿Qué estrategias de licitación emplea Acobur para aumentar sus posibilidades de adjudicación de contratos?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse fs-17" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="display: flex; justify-content: flex-end;">
                  <div style="width: 95%;">
                    <p>Una licitación pública es el proceso mediante el cual el sector público invita a empresas y proveedores a presentar ofertas para realizar un contrato de bienes, servicios u obras. El objetivo es garantizar la competencia y la obtención de las mejores condiciones para el ente público.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pregunta 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fs-19" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="fas fa-plus"></i> ¿Qué iformación sobre el mercado público sanitario proporciona Acobur?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse fs-17" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="display: flex; justify-content: flex-end;">
                <div style="width: 95%;">
                    <p>El Servicio Nacional de Salud (SNS) se administra a través de una estructura descentralizada con varios niveles de gestión. A nivel nacional, el Ministerio de Salud define políticas y directrices, mientras que a nivel regional, las consejerías de salud gestionan la prestación de servicios y recursos.</p>
                  </div>
                </div>
              </div>
            </div> 
            <!-- Pregunta 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed fs-19" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <i class="fas fa-plus "></i> ¿Cómo garantiza Acobur el cumplimiento de las regulaciones en licitaciones?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse fs-17" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="display: flex; justify-content: flex-end;">
                  <div style="width: 95%;">
                    <p>La contratación se realiza por entidades públicas, como ministerios, organismos autónomos y administraciones locales, que actúan como compradores en los procesos de licitación. Estas entidades tienen la responsabilidad de gestionar y adjudicar contratos siguiendo la normativa establecida.
                    </p>
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <!-- /.accordion -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  <script>
    // JavaScript para cambiar el icono de más/menos
    document.querySelectorAll('.accordion-button').forEach(button => {
      button.addEventListener('click', function() {
        // Primero, restaurar todos los íconos a '+'
        document.querySelectorAll('.accordion-button i').forEach(icon => {
          icon.classList.remove('fa-minus');
          icon.classList.add('fa-plus');
        });
        
        // Luego, cambiar el ícono del botón activo a '-'
        if (!this.classList.contains('collapsed')) {
          const icon = this.querySelector('i');
          icon.classList.remove('fa-plus');
          icon.classList.add('fa-minus');
        }
      });
    });
  </script>