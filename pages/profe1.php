<?php
session_start();
            
if($_SESSION['acceso']==1){
  include "../php/conectar.php";
  $sql = 'SELECT * FROM socios';
  $resultado = mysqli_query($conectar, $sql);
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
    <title>Asistencias</title>
    <script type="text/javascript">
      function confirmar(){
        return confirm('¿Esta Seguro que desea eliminar este Socio?');

      }
    </script>
  </head>
  <body style="background-color: rgb(207, 207, 207)">
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

      
      <div class="form">
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <div class="searchPartner">
          <div>
            <label>Numero:</label>
            <input type="number" name="numero">
          </div>
          <div>
            <label>Nombre:</label>
            <input type="text" name="nombre">
          </div>
          <div>
            <input type="submit" class="ingreso2" name="enviar" value="BUSCAR">
          </div>
          <div>
            <input href="profe1.php" type="submit" class="ingreso2" value="MOSTRAR TODOS">
          </div>
        </div>
      </form>
        <div class="tabla text-center">
            <table class="table">
                <thead class="table-items">
                    <th>NUMERO DE SOCIO</th>
                    <th>NOMBRE Y APELLIDO</th>
                    <th>DNI</th>
                    <th>TELEFONO</th>
                    <th>ACCIONES</th>
                </thead>
            
                <tbody>
              <?php
                if(isset($_POST['enviar'])){
                  $num=$_POST['numero'];
                  $nom=$_POST['nombre'];
                  if(empty($_POST['numero']) && empty($_POST['nombre'])){
                    echo '<script language="javascript"> alert ("Debe ingersar el nombre o numero de socio para poder buscarlo!!!"); window.location.href="profe1.php" </script>';
                  }else{
                    if(empty($_POST['nombre'])){
                      $sql="SELECT * FROM socios where numero=".$num;
                    }
                    if(empty($_POST['numero'])){
                      $sql="SELECT * FROM socios where nombre like '%".$nom."%'";
                    }
                    if(!empty($_POST['numero']) && !empty($_POST['nombre'])){
                      $sql="SELECT * FROM socios where numero=".$num;
                    }
                  }
                  $resultado = mysqli_query($conectar, $sql);
                  while($filas=mysqli_fetch_assoc($resultado)){
              ?>
                  <tr>
                    <td data-label="Número"><?php echo $filas['numero'] ?></td>
                    <td data-label="Nombre"><?php echo $filas['nombre'] ?></td>
                    <td data-label="DNI"><?php echo $filas['dni'] ?></td>
                    <td data-label="Teléfono"><?php echo $filas['telefono'] ?></td>
                    <td data-label="ACCIONES"><?php echo '<a class="ingreso2" href="asistencia1.php?numero='.$filas["numero"].'">ASISTENCIA</a>';?> 
                  </tr>
              <?php
                }

              }else{
                  while($filas=mysqli_fetch_assoc($resultado)){
              ?>
              <tr>
                    <td data-label="Número"><?php echo $filas['numero'] ?></td>
                    <td data-label="Nombre"><?php echo $filas['nombre'] ?></td>
                    <td data-label="DNI"><?php echo $filas['dni'] ?></td>
                    <td data-label="Teléfono"><?php echo $filas['telefono'] ?></td>
                    <td data-label="ACCIONES"><?php echo '<a class="ingreso2" href="asistencia1.php?numero='.$filas["numero"].'">ASISTENCIA</a>';?> 
                  </tr>
            <?php
                }
              }
            ?>
                  
                </tbody>

            <!--incluir lista desde archivo php-->
          
            </table>
        </div>
      </div>
      <!--Start Footer-->
      <footer
        class="footer text-center text-white"
      >
        <!-- Copyright -->
        <div
          class="footer text-center p-3"
          style="position: fixed; width: 100%; bottom: 0; left: 0;"
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
