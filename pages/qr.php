<?php
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
    <title>INGRESO QR</title>
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
            

                <h1 class="text-white">INGRESE SU NUMERO DE DOCUMENTO</H1>

            
          </div>
        </nav>

        <!--End Navbar-->

        <!--Start Sidenav-->
        
        <!--End Sidenav-->
      </header>
      <br /><br /><br />
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      
        <div class="searchPartner">
          <div>
            <label>DNI:</label>
            <input type="number" name="dni">
          </div>
          <div>
            <input type="submit" class="ingreso2" name="enviar" value="BUSCAR">
          </div>
        </div>
      </form>

    <form method="POST" class="contact-form row">
        <!--incluir lista desde archivo php-->
        <tbody>
            <?php
            
              if(isset($_POST['enviar'])){
                $dni=$_POST['dni'];
               
                
                if(empty($_POST['dni'])){
                  echo '<script language="javascript"> alert ("Debe ingersar el DNI de un socio para poder buscarlo!!!"); window.location.href="qr.php" </script>';
                }else{
                    $sql="SELECT * FROM socios where dni=".$dni;
                    $resultado = mysqli_query($conectar, $sql);
                    $filas=mysqli_fetch_assoc($resultado);
                    $dni=$_POST['dni'];
                    
                    $saldo=$filas['cuenta'];
                    
                    if($saldo<=0){
                        ?>
                        <div class="searchPartner">
                            <h2 class="text-green">PUEDE INGRESAR</H2>
                        </div>
                        <?php
                    }else{
                        ?>
                        <div class="searchPartner">
                            <h2 class="text-red">NO PUEDE INGRESAR</H2>
                        </div>
                        <?php
                    }
                  }
                  
                }
                $resultado = mysqli_query($conectar, $sql);
                
            
                  ?>
                  
            </tbody>
    </form>
    <!--
    <?php
      require_once "../dompdf/autoload.inc.php";
      use Dompdf\Dompdf;
      $dompdf = new Dompdf();
      $options = $dompdf ->fetOptions();
      $options = set(array("isRemoteEnabled" => true));
      $dompdf->setOptions($options);

      $dompdf->localhtml("hola mierda");
      //$dompdf->setPaper("letter");
      $dompdf->setPaper('A4', 'landscape');

      $dompdf->render();
      $dompdf->stream("Archivo.pdf", array("Attachment" =>true));
     

    ?>
     -->
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
