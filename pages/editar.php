<?php
session_start();
            
if($_SESSION['acceso']==1){
  include "../php/conectar.php";
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
    <title>Editar Socio</title>
  </head>
  <body style="background-color: rgb(207, 207, 207)">
    <div id="inicio" class="container-fluid">
      <header>
        <!--Start Navbar-->
        <nav>
          <div class="navbar">
          <a class="ingreso backButton" href="baja.php"
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
            <a class="ingreso backButton" href="baja.php"
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

        <?php
            if(isset($_POST['enviar'])){
                $numero=$_POST['numero'];
                $nombre=$_POST['nombre'];
                $domicilio=$_POST['domicilio'];
                $localidad=$_POST['localidad'];
                $sexo=$_POST['sexo'];
                $sangre=$_POST['sangre'];
                $dni=$_POST['dni'];
                $nacimiento=$_POST['nacimiento'];
                $ingreso=$_POST['ingreso'];
                $estado=$_POST['estado'];
                $telefono=$_POST['telefono'];
                $cobrador=$_POST['cobrador'];
                $categoria=$_POST['categoria'];

                $sql="UPDATE socios SET nombre='".$nombre."', domicilio='".$domicilio."', localidad='".$localidad."', sexo='".$sexo."', sangre='".$sangre."', dni='".$dni."', nacimiento='".$nacimiento."', ingreso='".$ingreso."', estado='".$estado."', telefono='".$telefono."', cobrador='".$cobrador."', categoria='".$categoria."' where numero='".$numero."'";
                $resultado = mysqli_query($conectar, $sql);

                if($resultado){
                    echo '<script language="javascript"> alert ("Cambios Realizados Correctamente"); window.location.href="baja.php" </script>';
                }else{
                    echo '<script language="javascript"> alert ("Cambios NO Realizados"); window.location.href="baja.php" </script>';
                }

            }else{
                $numero=$_GET['numero'];
                $sql = 'SELECT * FROM socios where numero="'.$numero.'"';
                $resultado = mysqli_query($conectar, $sql);
                $fila=mysqli_fetch_assoc($resultado);
                $nombre=$fila['nombre'];
                $domicilio=$fila['domicilio'];
                $localidad=$fila['localidad'];
                $sexo=$fila['sexo'];
                $sangre=$fila['sangre'];
                $dni=$fila['dni'];
                $nacimiento=$fila['nacimiento'];
                $ingreso=$fila['ingreso'];
                $estado=$fila['estado'];
                $telefono=$fila['telefono'];
                $cobrador=$fila['cobrador'];
                $categoria=$fila['categoria'];

            }

        ?>
        <div class="form form-edit">
          <form action="<?=$_SERVER['PHP_SELF']?>" method='post'>
            <div class="items-form text-center">
              <div>
                <label class="text-black">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $nombre;?>"><br>
                <label class="text-black">Domicilio:</label>
                <input type="text" name="domicilio" value="<?php echo $domicilio;?>"><br>
                <label class="text-black">Localidad:</label>
                <input type="text" name="localidad" value="<?php echo $localidad;?>"><br>
                <label class="text-black">Sexo:</label>
                <input type="text" name="sexo" value="<?php echo $sexo;?>"><br>
                <label class="text-black">Sangre:</label>
                <input type="text" name="sangre" value="<?php echo $sangre;?>"><br>
                <label class="text-black">Dni:</label>
                <input type="text" name="dni" value="<?php echo $dni;?>"><br>
              </div>
              <div>
                <label class="text-black">Nacimiento:</label>
                <input type="text" name="nacimiento" value="<?php echo $nacimiento;?>"><br>
                <label class="text-black">Ingreso:</label>
                <input type="text" name="ingreso" value="<?php echo $ingreso;?>"><br>
                <label class="text-black">Estado:</label>
                <input type="text" name="estado" value="<?php echo $estado;?>"><br>
                <label class="text-black">Telefono:</label>
                <input type="text" name="telefono" value="<?php echo $telefono;?>"><br>
                <label class="text-black">Cobrador:</label>
                <input type="text" name="cobrador" value="<?php echo $cobrador;?>"><br>
                <label class="text-black">Categoria:</label>
                <input type="text" name="categoria" value="<?php echo $categoria;?>"><br>
              </div>
            </div>
            <div class="text-center">
              <input type="hidden" name="numero" value="<?php echo $numero;?>">

              <input class="ingreso2" type="submit" name="enviar" value="ACTUALIZAR"><br>
            </div>
          </form>
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