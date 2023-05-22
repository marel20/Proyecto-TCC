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
    <title>Pagos</title>
  </head>
  <body style="background-color: rgb(207, 207, 207)">
    <div id="inicio" class="container-fluid">
      <header>
        <!--Start Navbar-->
        <nav>
          <div class="navbar">
          <a class="ingreso backButton" href="pago.php"
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
            <a class="ingreso backButton" href="pago.php"
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
         $fecha1 = date('Y-m-d');
        $fecha = date('Y-m'); // formato de fecha de MySQL
        $mes_anio = date("Y-m", strtotime($fecha));
        $sql4 = 'SELECT * FROM ingresos';
        $ejecutar4 = mysqli_query($conectar, $sql4);

        $dep=0;

        while($filas=mysqli_fetch_assoc($ejecutar4)){
          $mes=$filas['mes'];
          
            if($mes==$mes_anio){
              $cuo=$filas['cuota'];
              $depor=$filas['deporte'];
              $tot=$filas['total'];

            }else{
              $cuo=0;
              $depor=0;
              $tot=0;

            }
        }
           
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
                $cuenta=$_POST['cuenta'];
                $pago=$_POST["pago"];
                $tenis= floatval($_POST["tenis"]);
                $voley=floatval($_POST["voley"]);
                $intermitente=floatval($_POST["intermitente"]);
                $gimnacio=floatval($_POST["gimnacio"]);
                $basquet=floatval($_POST["basquet"]);
                $natacion=floatval($_POST["natacion"]);
                $padel=floatval($_POST["padel"]);
                $patin=floatval($_POST["patin"]);
                $escuela=floatval($_POST["escuela"]);
                

                

                $dep=$tenis+$voley+$intermitente+$gimnacio+$basquet+$natacion+$padel+$patin+$escuela;


                if(isset($_POST["pago"])){
                    
                    $cuenta=$cuenta-$pago;
                    $monto=$pago;

                    if($dep==0){
                      $cuota=$pago;
                    }
                    else{
                      $cuota=$pago-$dep;
                    }
                    $cuo2=$cuo+$cuota;
                    $depor2=$depor+$dep;
                    $tot2=$tot+$pago;
                    

                }




                

            

                $sql="UPDATE socios SET nombre='".$nombre."', domicilio='".$domicilio."', localidad='".$localidad."', sexo='".$sexo."', sangre='".$sangre."', dni='".$dni."', nacimiento='".$nacimiento."', ingreso='".$ingreso."', estado='".$estado."', telefono='".$telefono."', cobrador='".$cobrador."', cuenta='".$cuenta."' where numero='".$numero."'";
                $resultado = mysqli_query($conectar, $sql);

                

                if($resultado){
                  $sql2 = "INSERT INTO movimientos (fecha, numero, nombre, monto, accion) VALUES ('$fecha1','$numero','$nombre','$monto','Pago')";
                  $ejecutar2=mysqli_query($conectar, $sql2);

                  $sql3 = "INSERT INTO ingresos (mes, cuota, deporte, total) VALUES ('$mes_anio', '$cuo2', '$depor2', '$tot2') ON DUPLICATE KEY UPDATE total = '$tot2', cuota='$cuo2', deporte='$depor2'";
                  $ejecutar3 = mysqli_query($conectar, $sql3);
                    echo '<script language="javascript"> alert ("El PAGO se registro Correctamente!"); window.location.href="pago.php" </script>';
                    
                }else{
                    echo '<script language="javascript"> alert ("Pago NO Registrado!!!"); window.location.href="pago.php" </script>';
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
                $cuenta=$fila['cuenta'];

                $sql5 = 'SELECT * FROM asistencia where numero="'.$numero.'"';
                $resultado5 = mysqli_query($conectar, $sql5);
                $filas=mysqli_fetch_assoc($resultado5);
                $tenis= $filas['tenis'];
                $voley=$filas['voley'];
                $intermitente=$filas['intermitente'];
                $gimnacio=$filas['gimnacio'];
                $basquet=$filas['basquet'];
                $natacion=$filas['natacion'];
                $padel=$filas['padel'];
                $patin=$filas['patin'];
                $escuela=$filas['escuela'];
         

            }

        ?>
      <div class="form">
        <form action="<?=$_SERVER['PHP_SELF']?>" method='post'>
        <div class="searchPartner">
            <h1 class="text-black"><?php echo $nombre;?></h1>
        </div>
        <div class="searchPartner">
             <label><H3 class="text-black">PAGO:</H3></label>
             <input type="number" step="0.01" name="pago" value="Monto Pago"><br>
        </div>
        <div class="checks">

            <input class="ingreso2" type="submit" name="enviar" value="PAGO"><br>
            <input type="hidden" name="nombre" value="<?php echo $nombre;?>"><br>            
            <input type="hidden" name="domicilio" value="<?php echo $domicilio;?>"><br>            
            <input type="hidden" name="localidad" value="<?php echo $localidad;?>"><br>           
            <input type="hidden" name="sexo" value="<?php echo $sexo;?>"><br>            
            <input type="hidden" name="sangre" value="<?php echo $sangre;?>"><br>           
            <input type="hidden" name="dni" value="<?php echo $dni;?>"><br>           
            <input type="hidden" name="nacimiento" value="<?php echo $nacimiento;?>"><br>           
            <input type="hidden" name="ingreso" value="<?php echo $ingreso;?>"><br>            
            <input type="hidden" name="estado" value="<?php echo $estado;?>"><br>           
            <input type="hidden" name="telefono" value="<?php echo $telefono;?>"><br>          
            <input type="hidden" name="cobrador" value="<?php echo $cobrador;?>"><br>
            <input type="hidden" name="numero" value="<?php echo $numero;?>">
            <input type="hidden" name="cuenta" value="<?php echo $cuenta;?>">
            <input type="hidden" name="tenis" value="<?php echo $tenis;?>">
            <input type="hidden" name="voley" value="<?php echo $voley;?>">
            <input type="hidden" name="intermitente" value="<?php echo $intermitente;?>">
            <input type="hidden" name="gimnacio" value="<?php echo $gimnacio;?>">
            <input type="hidden" name="basquet" value="<?php echo $basquet;?>">
            <input type="hidden" name="natacion" value="<?php echo $natacion;?>">
            <input type="hidden" name="padel" value="<?php echo $padel;?>">
            <input type="hidden" name="patin" value="<?php echo $patin;?>">
            <input type="hidden" name="escuela" value="<?php echo $escuela;?>">
            
            


   
          </div>
  
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