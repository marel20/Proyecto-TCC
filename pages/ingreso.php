<?php
session_start();
            
$_SESSION['acceso']=0;

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0"
    />
    <link rel="icon" href="../assets/logo/logo.png" type="logo" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <title>Tenis Club Correa - Ingreso</title>
  </head>
  <body style="background-color: rgb(207, 207, 207)">
    <div id="inicio" class="container-fluid">
      <header>
        <!--Start Navbar-->
        <nav>
          <div class="navbar">
            <a href="#inicio"
              ><img class="logo" src="../assets/logo/logo.png" alt="logo_TCC"
            /></a>

            <ul>
              <li><a href="../index.php#inicio">Inicio</a></li>
              <li><a href="../index.php#institucion">Institución</a></li>
              <li><a href="../index.php#historia">Historia</a></li>
              <li><a href="../index.php#disciplinas">Disciplinas</a></li>
              <li><a href="../index.php#contacto">Contacto</a></li>
            </ul>

            <a class="ingreso" href="#!">Ingresar</a>
          </div>
        </nav>

        <!--End Navbar-->

        <!--Start Sidenav-->
        <div
          id="sidenav"
          class="sidenav navbar navbar-light text-center"
          data-mdb-right="true"
        >
          <div class="imgSidenav">
            <img src="../assets/logo/logo.png" alt="logo_TCC" loading="lazy" />
            <button
              id="btnHamburguer"
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#collapseWidthExample"
              aria-expanded="false"
              aria-controls="collapseWidthExample"
            >
              <i class="fas fa-bars"></i>
            </button>
          </div>
          <div
            class="side-nav collapse collapse-horizontal"
            id="collapseWidthExample"
          >
            <button
              id="btnHamburguer"
              class="btnVisible navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#collapseWidthExample"
              aria-expanded="false"
              aria-controls="collapseWidthExample"
            >
              <i class="fas fa-bars"></i>
            </button>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 sidenav-menu">
              <li class="nav-li nav-item">
                <a class="nav-link active" href="../index.php#inicio"
                  >Inicio</a
                >
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="../index.php#institucion"
                  >Institución</a
                >
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="../index.php#historia"
                  >Historia</a
                >
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="../index.php#disciplinas"
                  >Disciplinas</a
                >
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="../index.php#contacto"
                  >Contacto</a
                >
              </li>
            </ul>

            <a class="ingreso" href="#!">Ingresar</a>
          </div>
        </div>
        <!--End Sidenav-->
      </header>

      <div class="form col-lg-6 col-md-12 mb-4 col-12 text-center">
        <form method="POST" action="../php/ingreso.php">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input
              type="text"
              id="form2Example1"
              name="user"
              class="form-control"
            />
            <label class="form-label" for="form2Example1">Usuario</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input
              type="password"
              id="form2Example2"
              name="pass"
              class="form-control"
            />
            <label class="form-label" for="form2Example2">Contraseña</label>
          </div>

          <!-- Submit button -->
          <!-- <button type="submit" class="btn btn-primary btn-block mb-4">
          Iniciar Sesión
        </button> -->

          <button class="ingreso2" type="submit">Iniciar Sesión</button>
        </form>
      </div>

      <div id="whatsapp" class="visible">
        <a href="https://wa.me/5493471567877" class="btn-wsp" target="_blank">
          <i class="icon-whatsapp"></i>
          <img src="../assets/icons/whatsapp.png" alt="logowsp" />
        </a>
      </div>
      <div id="wsp" class="oculto">
        <a href="https://wa.me/5493471567877" class="btn-wsp" target="_blank">
          <i class="icon-whatsapp"></i>
          <img src="../assets/icons/whattsapp.png" alt="logowsp" />
        </a>
      </div>

      <!--Start Footer-->
      <footer
        class="footer text-center text-white"
        style="position: fixed; bottom: 0; left: 0; width: 100%"
      >
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="https://www.facebook.com/tenisclubcorrea"
              target="_blank"
              role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="https://twitter.com/teniscorrea"
              target="_blank"
              role="button"
              ><i class="fab fa-twitter"></i
            ></a>

            <!-- Instagram -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="https://www.instagram.com/tenisclubcorrea/"
              target="_blank"
              role="button"
              ><i class="fab fa-instagram"></i
            ></a>

            <!-- Email -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              href="mailto:tenisclubcorrea@hotmail.com"
              target="_blank"
              role="button"
              ><i class="fas fa-envelope"></i
            ></a>

            <!-- Phone -->
            <a
              id="btnLlamar"
              class="btn btn-outline-light btn-floating m-1"
              href="tel:03471492315"
              role="button"
              ><i class="fas fa-phone"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
          class="text-center p-3"
          style="background-color: rgba(0, 0, 0, 0.2)"
        >
          © 2022 Copyright:
          <a
            class="text-white"
            target="_blank"
            href="http://www.mgsolutions.com.ar"
            >MG Solutions</a
          >
        </div>
        <!-- Copyright -->
      </footer>
      <!--End Footer-->
    </div>

    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
