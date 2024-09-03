<header class="wrapper bg-info">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
    <div class="container d-flex flex-nowrap align-items-center justify-content-start">
      <div class="navbar-brand">
        <a href="./index.php">
          <img src="./assets/img/logo.png" srcset="./assets/img/logo.png" alt="" />
        </a>
      </div>
      <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
        <div class="offcanvas-header d-lg-none">
          <h3 class="text-white fs-30 mb-0">Acobur</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column h-100">
          <?php include "_inc_menu.php" ?>
          <div class="offcanvas-footer d-lg-none">
            <div>
              <a href="mailto:acobur@acobur.es" class="link-inverse">acobur@acobur.es</a>
              <br /> +34 91 448 39 07 <br />
              <nav class="nav social social-white mt-4">
                <a href="#"><i class="uil uil-linkedin"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center ms-auto">
        <ul class="navbar-nav flex-row align-items-center">
          <li class="nav-item dropdown language-select text-uppercase me-3">
            <a class="nav-link dropdown-item dropdown-toggle fs-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Es <i class="fas fa-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
              <li class="nav-item"><a class="dropdown-item" href="#">Pt</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fs-14" href="https://www.acobur.es/login/"><span class="hover-3 more">LOGIN</span></a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a href="contacto.php" class="btn btn-sm btn-primary rounded-pill fs-12">CONTACTO</a>
          </li>
          <li class="nav-item d-lg-none">
            <button class="hamburger offcanvas-nav-btn"><span></span></button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
