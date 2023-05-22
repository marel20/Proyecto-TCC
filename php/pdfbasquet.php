<?php
session_start();
            
if($_SESSION['acceso']==1){

    // Incluir la librería TCPDF
    require_once('../library/tcpdf/tcpdf.php');

    include "conectar.php";

    // Obtener los datos de la tabla socios
$sql = "SELECT numero, nombre, dni, basquet  FROM socios";
$resultado = mysqli_query($conectar, $sql);
$fecha_actual = date('d/m/Y');

// Crear un objeto de TCPDF
$pdf = new TCPDF();

// Establecer el nombre de la hoja de cálculo
$pdf->SetTitle('BASQUET');

// Agregar una página
$pdf->AddPage();

// Agregar los encabezados de columna
$pdf->SetFont('helvetica', 'B', 16);
$pdf->Cell(35, 8, 'BASQUET', 1);
$pdf->Cell(27, 8, 'NUMERO', 1);
$pdf->Cell(50, 8, 'NOMBRE', 1);
$pdf->Cell(25, 8, 'DNI', 1);
$pdf->Ln();

// Agregar los datos de la tabla al PDF
$pdf->SetFont('helvetica', '', 12);
while ($fila = mysqli_fetch_array($resultado)) {
    if($fila['basquet']>0){
        $pdf->Cell(35, 8, "", 1);
        $pdf->Cell(27, 6, $fila['numero'], 1);
        $pdf->Cell(50, 6, $fila['nombre'], 1);
        $pdf->Cell(25, 6, $fila['dni'], 1);
        
        $pdf->Ln();
    }
}

 // Descargar el archivo
 $pdf->Output('BASUET.pdf', 'D');


if(!$resultado){
    echo '<script language="javascript"> alert ("Ocurrio un error inesperado, intente de nuevo mas tarde"); window.location.href="../pages/listasocios.php" </script>';
}else{
    echo '<script language="javascript"> alert ("Archivo Generado Correctamente"); window.location.href="../pages/lista socios.php" </script>';
   
}
}else{
    header("location: ingreso.php");
    }
    
    ?>