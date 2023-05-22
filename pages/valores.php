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
    <title>Valores</title>
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

        <?php
            if(isset($_POST['enviar'])){
                
                $cat1=$_POST['cat1'];
                $cat2=$_POST['cat2'];
                $cat3=$_POST['cat3'];
                $cat4=$_POST['cat4'];
                $cat5=$_POST['cat5'];
                $cat6=$_POST['cat6'];
                $tenis10=$_POST['tenis10'];
                $tenis12=$_POST['tenis12'];
                $tenisA=$_POST['tenisA'];
                $tenisA3=$_POST['tenisA3'];
                $artistico=$_POST['artistico'];
                $patincompetencia=$_POST['patincompetencia'];
                $voleymayores=$_POST['voleymayores'];
                $voleymayoresgim=$_POST['voleymayoresgim'];
                $voleyescuela=$_POST['voleyescuela'];
                $intermitente=$_POST['intermitente'];
                $gim3=$_POST['gim3'];
                $gim5=$_POST['gim5'];
                $gimint=$_POST['gimint'];
                $basquetinf=$_POST['basquetinf'];
                $basquetinfgim=$_POST['basquetinfgim'];
                $nat2=$_POST['nat2'];
                $nat3=$_POST['nat3'];
                $natcom=$_POST['natcom'];
                $natesc=$_POST['natesc'];
                $nataqua=$_POST['nataqua'];
                $natbebe=$_POST['natbebe'];
                $natamsafeaqua=$_POST['natamsafeaqua'];
                $natamsafe2=$_POST['natamsafe2'];
                $natamsafe3=$_POST['natamsafe3'];
                $natfed=$_POST['natfed'];
                $padel1=$_POST['padel1'];
                $padel2=$_POST['padel2'];
                $padel3=$_POST['padel3'];
                $escdep=$_POST['escdep'];
                

                $sql="UPDATE valores SET cat1='".$cat1."', cat2='".$cat2."', cat3='".$cat3."', cat4='".$cat4."', cat5='".$cat5."', cat6='".$cat6."', tenis10='".$tenis10."', tenis12='".$tenis12."', tenisA='".$tenisA."', tenisA3='".$tenisA3."', artistico='".$artistico."', patincompetencia='".$patincompetencia."', voleymayores='".$voleymayores."', voleymayoresgim='".$voleymayoresgim."', voleyescuela='".$voleyescuela."', intermitente='".$intermitente."', gim3='".$gim3."', gim5='".$gim5."', gimint='".$gimint."', basquetinf='".$basquetinf."', basquetinfgim='".$basquetinfgim."', nat2='".$nat2."', nat3='".$nat3."', natcom='".$natcom."', natesc='".$natesc."', nataqua='".$nataqua."', natbebe='".$natbebe."', natamsafeaqua='".$natamsafeaqua."', natamsafe2='".$natamsafe2."', natamsafe3='".$natamsafe3."', natfed='".$natfed."', padel1='".$padel1."', padel2='".$padel2."', padel3='".$padel3."', escdep='".$escdep."'";
                $resultado = mysqli_query($conectar, $sql);

                if($resultado){
                    echo '<script language="javascript"> alert ("Cambios Realizados Correctamente"); window.location.href="valores.php" </script>';
                }else{
                    echo '<script language="javascript"> alert ("Cambios NO Realizados"); window.location.href="valores.php" </script>';
                }

            }else{
                
                $sql = 'SELECT * FROM valores';
                $resultado = mysqli_query($conectar, $sql);
                $fila=mysqli_fetch_assoc($resultado);

                    $cat1=$fila['cat1'];
                    $cat2=$fila['cat2'];
                    $cat3=$fila['cat3'];
                    $cat4=$fila['cat4'];
                    $cat5=$fila['cat5'];
                    $cat6=$fila['cat6'];
                    $tenis10=$fila['tenis10'];
                    $tenis12=$fila['tenis12'];
                    $tenisA=$fila['tenisA'];
                    $tenisA3=$fila['tenisA3'];
                    $artistico=$fila['artistico'];
                    $patincompetencia=$fila['patincompetencia'];
                    $voleymayores=$fila['voleymayores'];
                    $voleymayoresgim=$fila['voleymayoresgim'];
                    $voleyescuela=$fila['voleyescuela'];
                    $intermitente=$fila['intermitente'];
                    $gim3=$fila['gim3'];
                    $gim5=$fila['gim5'];
                    $gimint=$fila['gimint'];
                    $basquetinf=$fila['basquetinf'];
                    $basquetinfgim=$fila['basquetinfgim'];
                    $nat2=$fila['nat2'];
                    $nat3=$fila['nat3'];
                    $natcom=$fila['natcom'];
                    $natesc=$fila['natesc'];
                    $nataqua=$fila['nataqua'];
                    $natbebe=$fila['natbebe'];
                    $natamsafeaqua=$fila['natamsafeaqua'];
                    $natamsafe2=$fila['natamsafe2'];
                    $natamsafe3=$fila['natamsafe3'];
                    $natfed=$fila['natfed'];
                    $padel1=$fila['padel1'];
                    $padel2=$fila['padel2'];
                    $padel3=$fila['padel3'];
                    $escdep=$fila['escdep'];

            }

        ?>
        <div class="form form-edit">
          <form action="<?=$_SERVER['PHP_SELF']?>" method='post'>
            <h3 class="text-center text-black">CATEGORIAS</H3>
            <div class="items-form text-center">
              <div>
                <label class="text-black">Categoria 1:</label>
                <input type="text" name="cat1" value="<?php echo $cat1;?>"><br>
                <label class="text-black">Categoria 2:</label>
                <input type="text" name="cat2" value="<?php echo $cat2;?>"><br>
                <label class="text-black">Categoria 3:</label>
                <input type="text" name="cat3" value="<?php echo $cat3;?>"><br>
                
              </div>
              <div>
                <label class="text-black">Categoria 4:</label>
                <input type="text" name="cat4" value="<?php echo $cat4;?>"><br>
                <label class="text-black">Categoria 5:</label>
                <input type="text" name="cat5" value="<?php echo $cat5;?>"><br>
                <label class="text-black">Categoria 6:</label>
                <input type="text" name="cat6" value="<?php echo $cat6;?>"><br>
              </div>
            </div>
            <h3 class="text-center text-black">DEPORTES</H3> <br><br><br>
            
            <div><h5 class="text-center text-black">TENIS</H5>
              <div class="items-form text-center" style="margin-top: -1% !important;">
                <div>
                  <label>SUB 10:</label>
                  <input type="text" name="tenis10" value="<?php echo $tenis10;?>"><br>
                  <label>SUB 12:</label>
                  <input type="text" name="tenis12" value="<?php echo $tenis12;?>"><br>
                  <label>ADULTOS:</label>
                  <input type="text" name="tenisA" value="<?php echo $tenisA;?>"><br>
                  <label>ADULTOS 3 VECES X SEMANA:</label>
                  <input type="text" name="tenisA3" value="<?php echo $tenisA3;?>"><br>                
                  </div>
              </div>
            </div> <br>

            <div><h5 class="text-center text-black">VOLEY</H5>
              <div class="items-form text-center" style="margin-top: -1% !important;">
                <div>
                    <label>MAYORES:</label>
                    <input type="text" name="voleymayores" value="<?php echo $voleymayores;?>"><br>
                    <label>MAYORES + GIMNASIO:</label>
                    <input type="text" name="voleymayoresgim" value="<?php echo $voleymayoresgim;?>"><br>
                    <label>ESCUELA:</label>
                    <input type="text" name="voleyescuela" value="<?php echo $voleyescuela;?>"><br>                
                  </div>
              </div>
            </div> <br>

            <div><h5 class="text-center text-black">INTERMITENTE</H5>
              <div class="items-form text-center" style="margin-top: -1% !important;">
                <div>
                  <label>INTERMITENTE:</label>
                  <input type="text" name="intermitente" value="<?php echo $intermitente;?>"><br> 
                </div>              
            </div> <br>
            
            <div><h5 class="text-center text-black">GIMNASIO</H5>
              <div class="items-form text-center" style="margin-top: -1% !important;">
                <div>
                  <label>3 VECES X SEMANA:</label>
                  <input type="text" name="gim3" value="<?php echo $gim3;?>"><br>
                  <label>5 VECES X SEMANA:</label>
                  <input type="text" name="gim5" value="<?php echo $gim5;?>"><br>
                  <label>GIMNASIO + INTERMITENTE:</label>
                  <input type="text" name="gimint" value="<?php echo $gimint;?>"><br>                
                </div>
              </div>
            </div> <br>

            <div><h5 class="text-center text-black">BASQUET</H5>
              <div class="items-form text-center" style="margin-top: -1% !important;">
                <div>
                    <label>INFERIORES:</label>
                    <input type="text" name="basquetinf" value="<?php echo $basquetinf;?>"><br>
                    <label>INFERIORES + GIMASIO:</label>
                    <input type="text" name="basquetinfgim" value="<?php echo $basquetinfgim;?>"><br>              
                </div>
              </div>
            </div> <br>

            <div><h5 class="text-center text-black">NATACION</H5>
              <div class="items-form text-center" style="margin-top: -1% !important;">
                <div>
                  <label>ADULTOS 2 VECES X SEMANA:</label>
                  <input type="text" name="nat2" value="<?php echo $nat2;?>"><br>
                  <label>ADULTOS 3 VECES X SEMANA:</label>
                  <input type="text" name="nat3" value="<?php echo $nat3;?>"><br>
                  <label>COMPETITIVA:</label>
                  <input type="text" name="natcom" value="<?php echo $natcom;?>"><br>
                  <label>ESCUELA:</label>
                  <input type="text" name="natesc" value="<?php echo $natesc;?>"><br>
                  <label>AQUAGYM:</label>
                  <input type="text" name="nataqua" value="<?php echo $nataqua;?>"><br>
                  <label>BEBES:</label>
                  <input type="text" name="natbebe" value="<?php echo $natbebe;?>"><br>
                  <label>AMSAFE AQUAGYM:</label>
                  <input type="text" name="natamsafeaqua" value="<?php echo $natamsafeaqua;?>"><br>
                  <label>AMSAFE 2 VECES X SEMANA:</label>
                  <input type="text" name="natamsafe2" value="<?php echo $natamsafe2;?>"><br>
                  <label>AMSAFE 3 VECES X SEMANA:</label>
                  <input type="text" name="natamsafe3" value="<?php echo $natamsafe3;?>"><br>
                  <label>FEDERADOS:</label>
                  <input type="text" name="natfed" value="<?php echo $natfed;?>"><br>                
                </div>
              </div>
            </div> <br>

            <div><h5 class="text-center text-black">PADEL</H5>
              <div class="items-form text-center" style="margin-top: -1% !important;">
                <div>
                  <label>1 JUGADOR X TURNO:</label>
                  <input type="text" name="padel1" value="<?php echo $padel1;?>"><br>
                  <label>2 JUGADORES POR TURNO:</label>
                  <input type="text" name="padel2" value="<?php echo $padel2;?>"><br> 
                  <label>3 JUGADORES X TURNO:</label>
                  <input type="text" name="padel3" value="<?php echo $padel3;?>"><br>               
                </div>
              </div>
            </div> <br>

            <div><h5 class="text-center text-black">PATIN</H5>
              <div class="items-form text-center" style="margin-top: -1% !important;">
                <div>
                  <label>ARTISTICO:</label>
                  <input type="text" name="artistico" value="<?php echo $artistico;?>"><br>
                  <label>COMPETENCIA:</label>
                  <input type="text" name="patincompetencia" value="<?php echo $patincompetencia;?>"><br>              
                </div>
              </div>
            </div> <br>

            <div><h5 class="text-center text-black">ESCUELA DEPORTIVA</H5>
              <div class="items-form text-center" style="margin-top: -1% !important;">
                <div>
                  <label>ESCUELA DEPORTIVA:</label>
                  <input type="text" name="escdep" value="<?php echo $escdep;?>"><br>        
                </div>
              </div>
            </div>

            <div class="text-center">
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