<?php
session_start();
            
if($_SESSION['acceso']==1){
  include "../php/conectar.php";

   

   
  $sql = 'SELECT * FROM socios';
  $resultado = mysqli_query($conectar, $sql);

    
  $contador=0;
      while($filas=mysqli_fetch_assoc($resultado)){     
        $numero=$filas['numero']; 
       $tenis= $filas['tenis'];
       $voley=$filas['voley'];
       $intermitente=$filas['intermitente'];
       $gimnacio=$filas['gimnacio'];
       $basquet=$filas['basquet'];
       $natacion=$filas['natacion'];
       $padel=$filas['padel'];
       $patin=$filas['patin'];
       $escuela=$filas['escuela'];

       $sql4 = "INSERT INTO asistencia (tenis, voley, intermitente, gimnacio, basquet, natacion, padel, patin, escuela, numero) VALUES ('$tenis','$voley','$intermitente','$gimnacio','$basquet','$natacion','$padel','$patin','$escuela','$numero')";
       $ejecutar4=mysqli_query($conectar, $sql4);
   
        
    $sql="UPDATE socios SET tenis=0,voley=0,intermitente=0,gimnacio=0,basquet=0,natacion=0,padel=0,patin=0,escuela=0 where numero='".$numero."'";
    $limpiar = mysqli_query($conectar, $sql);
    


    }
    $resultado = mysqli_query($conectar, $sql);
    if($resultado){
        
        echo '<script language="javascript"> alert ("Se Limpiaron Todas Las Asistencias del mes"); window.location.href="../pages/listasocios.php" </script>';
    }else{
        echo '<script language="javascript"> alert ("NO Se Limpiaron Todas Las Asistencias del mes"); window.location.href="../pages/listasocios.php" </script>';
    }
}else{
    header("location: ingreso.php");
  }

?>
    
