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
    <title>Cargar Socio</title>
  </head>
  <body class=" text-center" style="background-color: rgb(207, 207, 207)">
    <div id="inicio" class="container-fluid">
      <header>
        <!--Start Navbar-->
        <nav>
          <div class="navbar">
          <a class="ingreso backButton" href="administracion.php"
              ><i class="fas fa-arrow-left"></i><p>Atras</p></a>
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



      <div class="form col-lg-6 col-md-6 mb-4 col-12 text-dark">  
        <section class="get-in-touch">
          <form method="POST" action='../php/nuevosocio.php'  class="contact-form row">
            <div class="row g-1">
              <div class="col">
                <div class="form-outline">
                
                  <input id="name" name="numero" class=" form-control" type="text" required>
                  
                  <label class="form-label" for="name">Numero Socio</label>
                </div>
              </div>
         
            
              <div class="col">
                <div class="form-outline">
                   <input id="name" name="nombre" class="form-control" type="text" required>
                   <label class="form-label" for="name">Apellido y Nombre</label>
                </div>
              </div>
            </div>
          
            <div class="row g-1">
              <div class="col">
                <div class="form-outline">
                  <input id="email" name="domicilio" class="form-control" type="text" required>
                  <label class="form-label" for="email">Domicilio</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input id="company" name="localidad" class="form-control" type="text" required>
                  <label class="form-label" for="company">Localidad</label>
                </div>
              </div>
            </div>

             <div class="row g-1">
              <div class="col">
                <div class="form-outline">
                  <input id="message" name="sexo" class="form-control" type="text" required>
                  <label class="form-label" for="message">Sexo</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input id="name" name="sangre" class="form-control" type="text" required>
                  <label class="form-label" for="name">Grupo Sanguineo</label>
                </div>
              </div>
            </div>
            <div class="row g-1">
              <div class="col">
                <div class="form-outline">
                  <input id="name" name="dni" class="form-control" type="text" required>
                  <label class="form-label" for="name">DNI</label>
                </div>
             </div>
              <div class="col">
                <div class="form-outline"> 
                  <input id="name" name="nacimiento" class="form-control" type="text" required>
                  <label class="form-label" for="name">Fecha De Nacimiento</label>
                </div>
              </div>
            </div>

            <div class="row g-1">
              <div class="col">
                <div class="form-outline">
                  <input id="name" name="ingreso" class="form-control" type="text" required>
                  <label class="form-label" for="name">Fecha de Ingreso</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">                
                  <input id="name" name="estado" class="form-control" type="text" required>                
                  <label class="form-label" for="name">Estado Civil</label>
                </div>
              </div>
            </div>


            <div class="row g-1">
              <div class="col">
                <div class="form-outline">                
                  <input id="name" name="telefono" class="form-control" type="text" required>                
                  <label class="form-label" for="name">Telefono</label>
                </div>
              </div>
            
              <div class="col">
                <div class="form-outline">                
                  <input id="name" name="cobrador" class="form-control" type="text" required>                
                  <label class="form-label" for="name">Cobrador</label>
                </div>
             </div>
            </div>
            <div class="row g-1">
              <div class="col">
                <div class="form-outline">                
                  <input id="name" name="categoria" class="form-control" type="text" required>                
                  <label class="form-label" for="name">Categoria</label>
                </div>
              </div>
            
              <div class="col">
                <div class="form-outline">                
                  <input id="name" name="saldo" class="form-control" type="text" required>                
                  <label class="form-label" for="name">Saldo</label>
                </div>
             </div>
            </div></br></br></br>
             <div class="form-field col-lg-12">
                <button id="contact-submit" name="submit" class="ingreso2 btn-block mb-4" type="submit" data-submit="...Enviar">ENVIAR</button>
             </div>
          </form>
       </section>
      </div>
  


        <!--Start Footer-->
            <footer
            class="footer text-center text-white"
            style="position: fixed; width: 100%; bottom: 0; left: 0;"
            
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