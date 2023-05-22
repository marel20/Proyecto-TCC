<?php
    //conectar al servidor

      $conectar=@mysqli_connect('localhost','root','','tenis');
    // Antes estaba asi esto  --->$conectar=@mysqli_connect('localhost','u497924916_mgsolutionscac','MGclubcorrea1','u497924916_cac');

    //verificamos si conecta
    if(!$conectar){
        echo"No se conecto";
    }

    

?>