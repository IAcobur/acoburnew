<header class="wrapper bg-soft-primary">
  <nav class="navbar navbar-expand-lg left-nav transparent navbar-white">
    <div class="container flex-lg-row flex-nowrap align-items-center">
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
        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
          <?php include "_inc_menu.php" ?>
          <!-- /.navbar-nav -->
          <div class="offcanvas-footer d-lg-none">
            <div>
              <a href="mailto:acobur@acobur.es" class="link-inverse">acobur@acobur.es</a>
              <br /> +34 91 448 39 07 <br />
              <nav class="nav social social-white mt-4">
                <a href="#"><i class="uil uil-linkedin"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
              <!-- /.social -->
            </div>
          </div>
          <!-- /.offcanvas-footer -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.navbar-collapse -->
      <div class="navbar-other w-100 d-flex ms-auto">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <li class="nav-item dropdown language-select text-uppercase">
            <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Es</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
              <li class="nav-item"><a class="dropdown-item" href="#">Pt</a></li>
              <!--<li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>-->
            </ul>
          </li>
          <li class="nav-item d-none d-md-block">
            <a href="https://www.acobur.es/login/" class="nav-link text-primary me-2">LOGIN</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a href="contacto.php" class="nav-link  me-2">CONTACTO</a>
          </li>
          <!-- <li class="nav-item d-none d-md-block">
            <a href="contacto.php" >CONTACTO</a>
          </li> -->
          <li class="nav-item d-lg-none">
            <button class="hamburger offcanvas-nav-btn"><span></span></button>
          </li>
        </ul>
        <!-- /.navbar-nav -->
      </div>
      <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->
</header>
