<?php
session_start();
            
if($_SESSION['acceso']==1){

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
    <title>Administracion</title>
  </head>
  <body style="background-color: rgb(207, 207, 207)">
    <div id="inicio" class="container-fluid">
      <header>
        <!--Start Navbar-->
        <nav>
          <div class="navbar">
          <a href="../index.php"
              ><img class="logo" src="../assets/logo/logo.png" alt="logo_TCC"
            /></a>
            <ul>
              <li><a href="nuevosocio.php">Cargar Socios</a></li>
              <li><a href="listasocios.php">Listado de Socios</a></li>
              <li><a href="profe1.php">Asistencias</a></li>
              <li><a href="baja.php">Editar / Eliminar</a></li>
              <li><a href="pago.php">Pago</a></li>
              <li><a href="valores.php">Valores</a></li>
              <li><a href="movimientos.php">Movimientos</a></li>
              <li><a href="balance.php">Balance</a></li>
            </ul>
            <a class="ingreso" href="../index.php">Salir</a>
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
            <a class="ingreso backButton" href="administracion.php"
              ><i class="fas fa-arrow-left"></i><p>Atras</p></a>
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
                <a class="nav-link active" href="nuevosocio.php">Cargar Socios</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="listasocios.php">Listado de Socios</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="profe1.php">Asistencias</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="baja.php">Editar / Eliminar</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="pago.php">Pago</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="valores.php">Valores</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="movimientos.php">Movimientos</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="balance.php">Balance</a>
              </li>
            </ul>

            <a class="ingreso" href="../index.php">Salir</a>
          </div>
        </div>
        <!--End Sidenav-->
      </header>
      <br /><br /><br />

      <div class="text-admin">
        <div class="col-lg-12 col-md-12 mb-4 col-12 text-center">
          <img src="../assets/logo/logo.png" alt="" />
        </div>
        <!-- <div class="text-center">
          <h2>Bienvenidos al sistema de gestión del T.C.C.</h2>
        </div> -->
        <div class="headline">
          <div class="text-center">
            <h2 id="text-typed"
              >Bienvenidos al sistema de gestión del T.C.C.</h2
            >
          </div>
        </div>
      </div>


      <!--Start Footer-->
      <footer
        class="footer text-center text-white"
        style="position: fixed; width: 100%; bottom: 0; left: 0"
      >
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
<?php
}else{
  header("location: ingreso.php");
}

?>
