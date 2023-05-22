<?php
session_start();
            
if($_SESSION['acceso']==1){
  include "../php/conectar.php";

    $sql2 = 'SELECT * FROM valores';
    $resultado2 = mysqli_query($conectar, $sql2);
    $fila=mysqli_fetch_assoc($resultado2);

   
    $cat1=$fila['cat1'];
    $cat2=$fila['cat2'];
    $cat3=$fila['cat3'];
    $cat4=$fila['cat4'];
    $cat5=$fila['cat5'];
    $cat6=$fila['cat6'];

    $cuota=0;
    $deporte=0;
    $fecha=date('Y-m-d');
    $total=0;

  $sql = 'SELECT * FROM socios';
  $resultado = mysqli_query($conectar, $sql);

    
  $contador=0;
      while($filas=mysqli_fetch_assoc($resultado)){
          $numero=$filas['numero'];
          $nombre=$filas['nombre'];
            $tenis= $filas['tenis'];
            $voley=$filas['voley'];
            $intermitente=$filas['intermitente'];
            $gimnacio=$filas['gimnacio'];
            $basquet=$filas['basquet'];
            $natacion=$filas['natacion'];
            $padel=$filas['padel'];
            $patin=$filas['patin'];
            $escuela=$filas['escuela'];
          $movimiento=0;
          $mov=0;
          $dep=0;
  
  
  
          $saldo=$filas['cuenta'];
          $categoria=$filas['categoria'];
          if($categoria == 1){
              $saldo=$saldo+$cat1;
              $cuota=$cuota+$cat1;
              $mov=$mov+$cat1;
          }
  
          if($categoria == 2){
              $saldo=$saldo+$cat2;
              $cuota=$cuota+$cat2;
              $mov=$mov+$cat2;
          }
  
          if($categoria == 3){
              $saldo=$saldo+$cat3;
              $cuota=$cuota+$cat3;
              $mov=$mov+$cat3;
          }
  
          if($categoria == 4){
              $saldo=$saldo+$cat4;
              $cuota=$cuota+$cat4;
              $mov=$mov+$cat4;
          }
          if($categoria == 5){
              $saldo=$saldo+$cat5;
              $cuota=$cuota+$cat5;
              $mov=$mov+$cat5;
          }
          if($categoria == 6){
              $saldo=$saldo+$cat6;
              $cuota=$cuota+$cat6; 
              $mov=$mov+$cat6;
          }
        $deporte=$deporte+$filas['tenis']+$filas['voley']+$filas['intermitente']+$filas['gimnacio']+$filas['basquet']+$filas['natacion']+$filas['padel']+$filas['patin']+$filas['escuela'];
        $dep=$filas['tenis']+$filas['voley']+$filas['intermitente']+$filas['gimnacio']+$filas['basquet']+$filas['natacion']+$filas['padel']+$filas['patin']+$filas['escuela'];

        
        
    $contador=$contador+1;
    $total=$cuota+$deporte;
    $movimiento=$mov+$dep;

    $sql5 = "INSERT INTO asistencia (numero, tenis, voley, intermitente, gimnacio, basquet, natacion, padel, patin, escuela ) VALUES ('$numero', '$tenis', '$voley', '$intermitente', '$gimnacio', '$basquet', '$natacion', '$padel', '$patin', '$escuela') ON DUPLICATE KEY UPDATE tenis = '$tenis', voley='$voley', intermitente='$intermitente', gimnacio='$gimnacio', basquet='$basquet', natacion='$natacion', padel='$padel', patin='$patin', escuela='$escuela'";
    $ejecutar5 = mysqli_query($conectar, $sql5);
    
    $sql="UPDATE socios SET tenis=0,voley=0,intermitente=0,gimnacio=0,basquet=0,natacion=0,padel=0,patin=0,escuela=0, cuenta='".$saldo."' where numero='".$numero."'";
    $cuotagenerada = mysqli_query($conectar, $sql);
    $sql4 = "INSERT INTO movimientos (fecha, numero, nombre, monto, accion) VALUES ('$fecha','$numero','$nombre','$movimiento','Cuota')";
    $ejecutar4=mysqli_query($conectar, $sql4);

    


    }
    $resultado = mysqli_query($conectar, $sql);
    
    if($resultado){
        $sql3 = "INSERT INTO facturacion (fecha, cuota, deportes, total) VALUES ('$fecha','$cuota','$deporte','$total')";
        $ejecutar=mysqli_query($conectar, $sql3);
        
        echo '<script language="javascript"> alert ("Se Generaron '.$contador.' Cuotas"); window.location.href="listasocios.php" </script>';
    }else{
        echo '<script language="javascript"> alert ("Cambios NO Realizados"); window.location.href="listasocios.php" </script>';
    }
}else{
    header("location: ingreso.php");
  }

?>
    
