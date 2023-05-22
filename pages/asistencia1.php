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
    <title>Asistencias</title>
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

            $sql2 = 'SELECT * FROM valores';
            $resultado2 = mysqli_query($conectar, $sql2);
            $fila=mysqli_fetch_assoc($resultado2);

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

                $monto=0;
                $asis=0;
                $fecha = date('Y-m-d'); // formato de fecha de MySQL

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
              $t=$_POST['tenis'];
              $v=$_POST['voley'];
              $in=$_POST['int'];
              $g=$_POST['gimnacio'];
              $b=$_POST['basquet'];
              $n=$_POST['natacion'];
              $pd=$_POST['padel'];
              $pt=$_POST['patin'];
              $ed=$_POST['escuela'];

              if (isset($_POST["conese"])){
                if(isset($_POST["tenis10"]) && $t==0 ){                
                  $t=1;
                  $monto=0;
                  $asis='tenis';
              }
              if(isset($_POST["tenis12"]) && $t==0){                  
                $t=1;
                $monto=0;
                  $asis='tenis';
              }
              if(isset($_POST["tenisadulto"]) && $t==0){                   
                $t=1;
                $monto=0;
                  $asis='tenis';
              }
              if(isset($_POST["tenisadulto3"]) && $t==0){                    
                $t=1;
                $monto=0;
                  $asis='tenis';
              }

              if(isset($_POST["voleymayores"]) && $v==0){                   
                $v=1;
                $monto=0;
                  $asis='voley';
              }
              if(isset($_POST["voleymayoresgim"]) && $v==0){                    
                $v=1;
                $monto=0;
                  $asis='voley';
              }
              if(isset($_POST["voleyescuela"]) && $v==0){
                $v=1;
                $monto=0;
                  $asis='voley';
              }

              if(isset($_POST["gim3"]) && $g==0){
                $g=1;
                $monto=0;
                  $asis='gimnasio';
              }
              if(isset($_POST["gim5"]) && $g==0){                    
                $g=1;
                $monto=0;
                  $asis='gimnasio';
              }
              if(isset($_POST["gimint"]) && $g==0){                    
                $g=1;
                $monto=0;
                  $asis='gimnasio';
              }

              if(isset($_POST["intermitente"]) && $in==0 ){                    
                $in=1;
                $monto=0;
                  $asis='intermitente';
              }

              if(isset($_POST["basquetinf"]) && $b==0){                    
                $b=1;
                $monto=0;
                  $asis='basquet';
              }
              if(isset($_POST["basquetinfgim"]) && $b==0){                    
                $b=1;
                $monto=0;
                  $asis='basquet';
              }                

              if(isset($_POST["nat2"]) && $n==0){
                $n=1;
                $monto=0;
                  $asis='natacion';
              }
              if(isset($_POST["nat3"]) && $n==0){                    
                $n=1;
                $monto=0;
                  $asis='natacion';
              }
              if(isset($_POST["natesc"]) && $n==0){                    
                $n=1;
                $monto=0;
                  $asis='natacion';
              }
              if(isset($_POST["nataqua"]) && $n==0){                    
                $n=1;
                $monto=0;
                  $asis='natacion';
              }
              if(isset($_POST["natbebe"]) && $n==0){                    
                $n=1;
                $monto=0;
                  $asis='natacion';
              }
              if(isset($_POST["natamsafeaqua"]) && $n==0){                    
                $n=1;
                $monto=0;
                  $asis='natacion';
              }
              if(isset($_POST["natamsafe2"]) && $n==0){                    
                $n=1;
                $monto=0;
                  $asis='natacion';
              }
              if(isset($_POST["natamsafe3"]) && $n==0){                    
                $n=1;
                $monto=0;
                  $asis='natacion';
              }
              if(isset($_POST["natfed"]) && $n==0){                    
                $n=1;
                $monto=0;
                  $asis='natacion';
              }
              if(isset($_POST["natcom"]) && $n==0){                    
                $n=1;
                $monto=0;
                  $asis='natacion';
              }

              if(isset($_POST["artistico"]) && $pt==0){                     
                  $pt=1;
                  $monto=0;
                  $asis='patin';
              }
              if(isset($_POST["patincompetencia"]) && $pt==0){                    
                $pt=1;
                $monto=0;
                  $asis='patin';
              }

              if(isset($_POST["padel1"]) && $pd==0){                    
                $pd=1;
                $monto=0;
                  $asis='padel';
              }
              if(isset($_POST["padel2"]) && $pd==0){                    
                $pd=1;$monto=0;
                $asis='padel';
              }
              if(isset($_POST["padel3"]) && $pd==0){                    
                $pd=1;
                $monto=0;
                  $asis='padel';
              }
              if(isset($_POST["escdep"]) && $ed==0){                    
                $ed=1;
                $monto=0;
                  $asis='escuela deportiva';
              }

              }else{
                  if(isset($_POST["mediomes"]) || isset($_POST["hermano"]) ){

                          if(isset($_POST["tenis10"]) && $t==0 ){
                            $cuenta=$cuenta+($tenis10/2);
                            $t=($tenis10/2);
                            $monto=$t;
                            $asis='tenis';
                        }
                        if(isset($_POST["tenis12"]) && $t==0){
                          $cuenta=$cuenta+($tenis12/2);
                          $t=($tenis12/2);
                          $monto=$t;
                            $asis='tenis';
                        }
                        if(isset($_POST["tenisadulto"]) && $t==0){
                          $cuenta=$cuenta+($tenisA/2);
                          $t=($tenisA/2);
                          $monto=$t;
                            $asis='tenis';
                        }
                        if(isset($_POST["tenisadulto3"]) && $t==0){
                          $cuenta=$cuenta+($tenisA3/2);
                          $t=($tenisA3/2);
                          $monto=$t;
                            $asis='tenis';
                        }

                        if(isset($_POST["voleymayores"]) && $v==0){
                          $cuenta=$cuenta+($voleymayores/2);
                          $v=($voleymayores/2);
                          $monto=$v;
                            $asis='voley';
                        }
                        if(isset($_POST["voleymayoresgim"]) && $v==0){
                          $cuenta=$cuenta+($voleymayoresgim/2);
                          $v=($voleymayoresgim/2);
                          $monto=$v;
                            $asis='voley';
                        }
                        if(isset($_POST["voleyescuela"]) && $v==0){
                          $cuenta=$cuenta+($voleyescuela/2);
                          $v=($voleyescuela/2);
                          $monto=$v;
                            $asis='voley';
                        }

                        if(isset($_POST["gim3"]) && $g==0){
                          $cuenta=$cuenta+($gim3/2);
                          $g=($gim3/2);
                          $monto=$g;
                            $asis='gimnasio';
                        }
                        if(isset($_POST["gim5"]) && $g==0){
                          $cuenta=$cuenta+($gim5/2);
                          $g=($gim5/2);
                          $monto=$g;
                            $asis='gimnasio';
                        }
                        if(isset($_POST["gimint"]) && $g==0){
                          $cuenta=$cuenta+($gimint/2);
                          $g=($gimint/2);
                          $monto=$g;
                            $asis='gimnasio';
                        }

                        if(isset($_POST["intermitente"]) && $in==0 ){
                          $cuenta=$cuenta+($intermitente/2);
                          $in=($intermitente/2);
                          $monto=$in;
                            $asis='intermitente';
                        }

                        if(isset($_POST["basquetinf"]) && $b==0){
                          $cuenta=$cuenta+($basquetinf/2);
                          $b=($basquetinf/2);
                          $monto=$b;
                            $asis='basquet';
                        }
                        if(isset($_POST["basquetinfgim"]) && $b==0){
                          $cuenta=$cuenta+($basquetinfgim/2);
                          $b=($basquetinfgim/2);
                          $monto=$b;
                            $asis='basquet';
                        }

                        

                        if(isset($_POST["nat2"]) && $n==0){
                          $cuenta=$cuenta+($nat2/2);
                          $n=($nat2/2);
                          $monto=$n;
                            $asis='natacion';
                        }
                        if(isset($_POST["nat3"]) && $n==0){
                          $cuenta=$cuenta+($nat3/2);
                          $n=($nat3/2);
                          $monto=$n;
                            $asis='natacion';
                        }
                        if(isset($_POST["natesc"]) && $n==0){
                          $cuenta=$cuenta+($natesc/2);
                          $n=($natesc/2);
                          $monto=$n;
                            $asis='natacion';
                        }
                        if(isset($_POST["nataqua"]) && $n==0){
                          $cuenta=$cuenta+($nataqua/2);
                          $n=($nataqua/2);
                          $monto=$n;
                            $asis='natacion';
                        }
                        if(isset($_POST["natbebe"]) && $n==0){
                          $cuenta=$cuenta+($natbebe/2);
                          $n=($natbebe/2);
                          $monto=$n;
                            $asis='natacion';
                        }
                        if(isset($_POST["natamsafeaqua"]) && $n==0){
                          $cuenta=$cuenta+($natamsafeaqua/2);
                          $n=($natamsafeaqua/2);
                          $monto=$n;
                            $asis='natacion';
                        }
                        if(isset($_POST["natamsafe2"]) && $n==0){
                          $cuenta=$cuenta+($natamsafe2/2);
                          $n=($natamsafe2/2);
                          $monto=$n;
                            $asis='natacion';
                        }
                        if(isset($_POST["natamsafe3"]) && $n==0){
                          $cuenta=$cuenta+($natamsafe3/2);
                          $n=($natamsafe3/2);
                          $monto=$n;
                            $asis='natacion';
                        }
                        if(isset($_POST["natfed"]) && $n==0){
                          $cuenta=$cuenta+($natfed/2);
                          $n=($natfed/2);
                          $monto=$n;
                            $asis='natacion';
                        }
                        if(isset($_POST["natcom"]) && $n==0){
                          $cuenta=$cuenta+($natcom/2);
                          $n=($natcom/2);
                          $monto=$n;
                            $asis='natacion';
                        }

                        if(isset($_POST["artistico"]) && $pt==0){
                            $cuenta=$cuenta+($artistico/2);
                            $pt=($artistico/2);
                            $monto=$pt;
                            $asis='patin';
                        }
                        if(isset($_POST["patincompetencia"]) && $pt==0){
                          $cuenta=$cuenta+($patincompetencia/2);
                          $pt=($patincompetencia/2);
                          $monto=$pt;
                            $asis='patin';
                        }

                        if(isset($_POST["padel1"]) && $pd==0){
                          $cuenta=$cuenta+($padel1/2);
                          $pd=($padel1/2);
                          $monto=$pd;
                            $asis='padel';
                        }
                        if(isset($_POST["padel2"]) && $pd==0){
                          $cuenta=$cuenta+($padel2/2);
                          $pd=($padel2/2);
                          $monto=$pd;
                            $asis='padel';
                        }
                        if(isset($_POST["padel3"]) && $pd==0){
                          $cuenta=$cuenta+($padel3/2);
                          $pd=($padel3/2);
                          $monto=$pd;
                            $asis='padel';
                        }
                        if(isset($_POST["escdep"]) && $ed==0){  
                          $cuenta=$cuenta+($escdep/2);                  
                          $ed=($escdep/2);
                          $monto=$ed;
                            $asis='escuela deportiva';
                        }

                  }else{


                      if(isset($_POST["tenis10"]) && $t==0){
                          $cuenta=$cuenta+$tenis10;
                          $t=$tenis10;
                          $monto=$t;
                            $asis='tenis';
                      }
                      if(isset($_POST["tenis12"]) && $t==0){
                        $cuenta=$cuenta+$tenis12;
                        $t=$tenis12;
                        $monto=$t;
                            $asis='tenis';
                      }
                      if(isset($_POST["tenisadulto"]) && $t==0){
                        $cuenta=$cuenta+$tenisA;
                        $t=$tenisA;
                        $monto=$t;
                            $asis='tenis';
                      }
                      if(isset($_POST["tenisadulto3"]) && $t==0){
                        $cuenta=$cuenta+$tenisA3;
                        $t=$tenisA3;
                        $monto=$t;
                            $asis='tenis';
                      }

                      if(isset($_POST["voleymayores"]) && $v==0){
                        $cuenta=$cuenta+$voleymayores;
                        $v=$voleymayores;
                        $monto=$v;
                            $asis='voley';
                      }
                      if(isset($_POST["voleymayoresgim"]) && $v==0){
                        $cuenta=$cuenta+$voleymayoresgim;
                        $v=$voleymayoresgim;
                        $monto=$v;
                            $asis='voley';
                      }
                      if(isset($_POST["voleyescuela"]) && $v==0){
                        $cuenta=$cuenta+$voleyescuela;
                        $v=$voleyescuela;
                        $monto=$v;
                            $asis='voley';
                      }

                      if(isset($_POST["gim3"]) && $g==0){
                        $cuenta=$cuenta+$gim3;
                        $g=$gim3;
                        $monto=$g;
                            $asis='gimnasio';
                      }
                      if(isset($_POST["gim5"]) && $g==0){
                        $cuenta=$cuenta+$gim5;
                        $g=$gim5;
                        $monto=$g;
                            $asis='gimnasio';
                      }
                      if(isset($_POST["gimint"]) && $g==0){
                        $cuenta=$cuenta+$gimint;
                        $g=$gimint;
                        $monto=$g;
                            $asis='gimnasio';
                      }

                      if(isset($_POST["intermitente"]) && $in==0 ){
                        $cuenta=$cuenta+$intermitente;
                        $in=$intermitente;
                        $monto=$in;
                            $asis='intermitente';
                      }

                      if(isset($_POST["basquetinf"]) && $b==0){
                        $cuenta=$cuenta+$basquetinf;
                        $b=$basquetinf;
                        $monto=$b;
                            $asis='basquet';
                      }
                      if(isset($_POST["basquetinfgim"]) && $b==0){
                        $cuenta=$cuenta+$basquetinfgim;
                        $b=$basquetinfgim;
                        $monto=$b;
                            $asis='basquet';
                      }

                      

                      if(isset($_POST["nat2"]) && $n==0){
                        $cuenta=$cuenta+$nat2;
                        $n=$nat2;
                        $monto=$n;
                            $asis='natacion';
                      }
                      if(isset($_POST["nat3"]) && $n==0){
                        $cuenta=$cuenta+$nat3;
                        $n=$nat3;
                        $monto=$n;
                            $asis='natacion';
                      }
                      if(isset($_POST["natesc"]) && $n==0){
                        $cuenta=$cuenta+$natesc;
                        $n=$natesc;
                        $monto=$n;
                            $asis='natacion';
                      }
                      if(isset($_POST["nataqua"]) && $n==0){
                        $cuenta=$cuenta+$nataqua;
                        $n=$nataqua;
                        $monto=$n;
                            $asis='natacion';
                      }
                      if(isset($_POST["natbebe"]) && $n==0){
                        $cuenta=$cuenta+$natbebe;
                        $n=$natbebe;
                        $monto=$n;
                            $asis='natacion';
                      }
                      if(isset($_POST["natamsafeaqua"]) && $n==0){
                        $cuenta=$cuenta+$natamsafeaqua;
                        $n=$natamsafeaqua;
                        $monto=$n;
                            $asis='natacion';
                      }
                      if(isset($_POST["natamsafe2"]) && $n==0){
                        $cuenta=$cuenta+$natamsafe2;
                        $n=$natamsafe2;
                        $monto=$n;
                            $asis='natacion';
                      }
                      if(isset($_POST["natamsafe3"]) && $n==0){
                        $cuenta=$cuenta+$natamsafe3;
                        $n=$natamsafe3;
                        $monto=$n;
                            $asis='natacion';
                      }
                      if(isset($_POST["natfed"]) && $n==0){
                        $cuenta=$cuenta+$natfed;
                        $n=$natfed;
                        $monto=$n;
                            $asis='natacion';
                      }
                      if(isset($_POST["natcom"]) && $n==0){
                        $cuenta=$cuenta+$natcom;
                        $n=$natcom;
                        $monto=$n;
                            $asis='natacion';
                      }

                      if(isset($_POST["artistico"]) && $pt==0){
                          $cuenta=$cuenta+$artistico;
                          $pt=$artistico;
                          $monto=$pt;
                            $asis='patin';
                      }
                      if(isset($_POST["patincompetencia"]) && $pt==0){
                        $cuenta=$cuenta+$patincompetencia;
                        $pt=$patincompetencia;
                        $monto=$pt;
                            $asis='patin';
                      }

                      if(isset($_POST["padel1"]) && $pd==0){
                        $cuenta=$cuenta+$padel1;
                        $pd=$padel1;
                        $monto=$pd;
                            $asis='padel';
                      }
                      if(isset($_POST["padel2"]) && $pd==0){
                        $cuenta=$cuenta+$padel2;
                        $pd=$padel2;
                        $monto=$pd;
                            $asis='padel';
                      }
                      if(isset($_POST["padel3"]) && $pd==0){
                        $cuenta=$cuenta+$padel3;
                        $pd=$padel3;
                        $monto=$pd;
                            $asis='padel';
                      }
                      if(isset($_POST["escdep"]) && $ed==0){  
                        $cuenta=$cuenta+$escdep;                  
                        $ed=$escdep;
                        $monto=$ed;
                            $asis='escuela deportiva';
                      }

                    }
                }


              $sql="UPDATE socios SET nombre='".$nombre."', domicilio='".$domicilio."', localidad='".$localidad."', sexo='".$sexo."', sangre='".$sangre."', dni='".$dni."', nacimiento='".$nacimiento."', ingreso='".$ingreso."', estado='".$estado."', telefono='".$telefono."', cobrador='".$cobrador."', cuenta='".$cuenta."', tenis='".$t."', voley='".$v."', intermitente='".$in."', gimnacio='".$g."', basquet='".$b."' , natacion='".$n."', padel='".$pd."', patin='".$pt."', escuela='".$ed."' where numero='".$numero."'";
              $resultado = mysqli_query($conectar, $sql);

              if($resultado){
                $sql2 = "INSERT INTO movimientos (fecha, numero, nombre, monto, accion) VALUES ('$fecha','$numero','$nombre','$monto','Asistencia ".$asis."')";
                  $ejecutar=mysqli_query($conectar, $sql2);
                  echo '<script language="javascript"> alert ("Cambios Realizados Correctamente"); window.location.href="profe1.php" </script>';
              }else{
                  echo '<script language="javascript"> alert ("Cambios NO Realizados"); window.location.href="profe1.php" </script>';
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
              $t=$fila['tenis'];
              $v=$fila['voley'];
              $in=$fila['intermitente'];
              $g=$fila['gimnacio'];
              $b=$fila['basquet'];
              $n=$fila['natacion'];
              $pd=$fila['padel'];
              $pt=$fila['patin'];
              $ed=$fila['escuela'];

            }

        ?>
      <div class="form" >
        <form action="<?=$_SERVER['PHP_SELF']?>" method='post'>
        <div class="searchPartner">
            <h1 class="text-black"><?php echo $nombre;?></h1>
        </div>
        <div class="checks-asistencia">
          <h4 class="text-black">Tenis:</h4>
            <div class="form-check">
              <input class="form-check-input" name="tenis10" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">SUB 10</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="tenis12" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">SUB 12</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="tenisadulto" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Adultos</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="tenisadulto3" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Adultos 3 veces x semana</label>
            </div><br>

            <h4 class="text-black">Voley:</h4>
            <div class="form-check">
              <input class="form-check-input" name="voleymayores" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Mayores</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="voleymayoresgim" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Mayores + Gimnasio</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="voleyescuela" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Escuela</label>
            </div><br>

            <h4 class="text-black">Intermitente:</h4>
            <div class="form-check">
              <input class="form-check-input" name="intermitente" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Intermitente</label>
            </div><br>

            <h4 class="text-black">Gimnasio:</h4>
            <div class="form-check">
              <input class="form-check-input" name="gim3" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">3 veces x semana</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="gim5" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">5 veces x semana</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="gimint" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Gimnasio + Intermitente</label>
            </div><br>
            <h4 class="text-black">Basquet:</h4>
            <div class="form-check">
              <input class="form-check-input" name="basquetinf" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Inferiores</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="basquetinfgim" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Inferiores + Gimnasio</label>
            </div><br>

            <h4 class="text-black">Natacion:</h4>
            <div class="form-check">
              <input class="form-check-input" name="nat2" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Adultos 2 veces x semana</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="nat3" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Adultos 3 veces x semana</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="natcom" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Competitiva</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="natesc" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Escuela</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="nataqua" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Aquagym</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="natbebe" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Bebes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="natamsafeaqua" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">AMSAFE Aquagym</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="natamsafe2" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">AMSAFE 2 veces x semana</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="natamsafe3" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">AMSAFE 3 veces x semana</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="natfed" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Federados</label>
            </div><br>
            <h4 class="text-black">Padel:</h4>
            <div class="form-check">
              <input class="form-check-input" name="padel1" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">1 jugador x turno</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="padel2" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">2 jugadores x turno</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="padel3" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">3 jugadores x turno</label>
            </div><br>
        

              <!-- Checked checkbox -->
            <h4 class="text-black">Patin:</h4>
            <div class="form-check">
              <input class="form-check-input" name="artistico" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Artistico</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="patincompetencia" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Competencia</label>
            </div><br>

            <h4 class="text-black">Escuela Deportiva:</h4>
            <div class="form-check">
              <input class="form-check-input" name="escdep" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Escuela Deportiva</label>
            </div><br>

            <div class="form-check">
              <input class="form-check-input" name="mediomes" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked"><h4 class="text-black">Medio Mes</h4></label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="hermano" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked"><h4 class="text-black">Hermano</h4></label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="conese" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked"><h4 class="text-black">Conese / Bonificado / Primer Grado</h4></label>
            </div><br>


            <input class="ingreso2" type="submit" name="enviar" value="ACTUALIZAR"><br>
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
            <input type="hidden" name="tenis" value="<?php echo $t;?>">
            <input type="hidden" name="voley" value="<?php echo $v;?>">
            <input type="hidden" name="int" value="<?php echo $in;?>">
            <input type="hidden" name="gimnacion" value="<?php echo $g;?>">
            <input type="hidden" name="basquet" value="<?php echo $b;?>">
            <input type="hidden" name="natacion" value="<?php echo $n;?>">
            <input type="hidden" name="padel" value="<?php echo $pd;?>">
            <input type="hidden" name="patin" value="<?php echo $pt;?>">
            <input type="hidden" name="escuela" value="<?php echo $ed;?>">
            

   
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