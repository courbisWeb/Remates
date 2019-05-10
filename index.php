<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Remates Valderas &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="style/index/bootstrap.min.css">
    <link rel="stylesheet" href="style/index/magnific-popup.css">
    <link rel="stylesheet" href="style/index/jquery-ui.css">
    <link rel="stylesheet" href="style/index/owl.carousel.min.css">
    <link rel="stylesheet" href="style/index/owl.theme.default.min.css">

    <link rel="stylesheet" href="style/index/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="style/index/aos.css">

    <link rel="stylesheet" href="style/index/style.css">
    <link href="styles.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="style/homePrincipal.css">
<!--Font Awesome-->      
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!--Fin Font Awesome-->      
  </head>
  <body>
  
    <div style="position: fixed;" class="col-12 site-wrap">
      
      <header class="col-12 site-navbar py-1" style="background-color: white;opacity: 0.5; margin-bottom: 0px;"role="banner">
          <div class="row col-12 align-items-center">
            
            <div class="col-6 col-xl-2">
              <a href="#">
                <img src="assets/remate.jpg" alt="Image" class="img-md-fluid">
              </a>  
            </div>
            <div class="col-10 col-md-10 d-none d-xl-block">
              <a style="float: right;" href="#">
                <img src="assets/remate.jpg" alt="Image" class="img-md-fluid">
              </a>  
            </div>
          </div>        
      </header>
    </div>
  
    <div style="font-size: bold;" class="RecibeInfo">
      <form>
        <center>
          <br>
          <h4>¿Quieres recibir información?</h4>        
        </center>  
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p>Nombre:</p>
            </div>          
            <div class="col-12">
              <input type="text" class="form-control" name="">          
            </div>
            <div style="margin-top: 10%;"class="col-12">
              <p>Correo:</p>
            </div>
            <div  class="col-12">
              <input type="text" class="form-control" name="">          
            </div>            
          </div>
        </div>  
        <br>
        <br>
        <input type="submit" class="btn btn-dark btn-lg btn-block" name="" value="Enviar Contacto">
      </form>      
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-1 col-lg-2 mb-2 mb-lg-0"></div>
          <div class="col-md-10 col-lg-8 mb-8 mb-lg-0">
            <div class="colorPaper container overlap-section">
              <div class="row">
                <div class="col-3"></div>
                <div style="text-align: center;"class="col-6">
                  <h1 style="margin-top: 20px; font-size: bold;">Listado de Remates</h1>
                  <hr>
                  <br>
                </div>
                <div class="col-3"></div>
              </div>
              <div class="row">
<!--INICIO PHP-->          
                <?php 
                  include('BD/Conexion.php');
                  $query = "SELECT  *
                            FROM  REMATE.REM_DET_REMATE;";

                  // Ejecuta la consulta
                  $rs = mysqli_query($conn,$query);

                  // Check resultado
                  // Si hubo un error mostras cual es
                  if (!$rs) {
                    $message = 'Invalid query: ' . mysql_error() . " ";
                    $message .= 'Whole query: ' . $query;
                    die($message);
                  }
                  // Use result
                  //Aca recorres todas las filas y te va devolviendo el resultado
                  while ($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) {
                    $idRemate   = $row['ID_DETREMATE'];
                    $glsRemate  = $row['GLS_DETREMATE'];
                    $dirRemate  = $row['DIR_DETREMATE'];
                    $fecRemate  =   $row['FEC_DETREMATE'];
                    $desRemate  = $row['DES_DETREMATE'];
                    $flgRemate  = $row['FLG_CONTIENE'];
                    $imgRemate  = $row['RUTA_IMGDETREMATE'];
                    if ($flgRemate>0) {
                      /*Inicio Div Separador*/
                      echo "<div class='col-1'></div>";
                      /*Fin Div Separador*/
                      /*Inicio Div Contiene Remate*/
                      echo "<div id='contieneRemate".$idRemate."' class='contieneContenido col-md-12 col-lg-10 mb-10 mb-lg-0 '>";
                      echo "<div class='row'>";
                      if ($imgRemate!=""&&$imgRemate!=null) {
                        echo "<div class='divIzquierdo col-md-12 col-lg-4 col-sm-12 '>";
                        echo "<div class='contieneImagen col-md-12 col-lg-12 mb-12 mb-lg-0 '>";
                        echo  "<img class='imgRemate img-responsive' src='BD/archivos/imgRemate/".$imgRemate."'>";
                        echo  "<br>";
                        echo  "<br>";
                        echo  "<h3>".$glsRemate."</h3>";
                        echo "<p>".$fecRemate."</p>";
                        echo "<p>".$dirRemate."</p>";
                        echo "</div>";  
                        echo "</div>";    
                        echo "<div  class='col-md-12 col-lg-8 mb-8 mb-lg-0 '>";
                        echo "<div class='contieneDescripcion col-md-12 col-lg-12 mb-12 mb-lg-0 '>";
                        echo "<p>".$desRemate."</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<input type='button' value='Ver archivos' class='btn btn-dark btn-lg btn-block'>";
                        echo "<div class='col-8'>";                  
                        
                        echo "</div>";
                        echo "<div class='col-1'></div>";
                        echo "</div>";
                        echo "<br>"; 
                        echo "<hr>";                  
                        echo "<br>"; 
                        echo "</div>";  
                        /*Fin Div Contiene Remate*/
                        /*Inicio Div Separador*/
                        echo "<div class='col-1'></div>";                  
                        /*Fin Div Separador*/                        
                      }
                      else
                      {
                        echo "<div class='divIzquierdo col-md-12 col-lg-4 mb-4 mb-lg-0 '>";
                        echo "<div class='contieneImagen col-md-12 col-lg-12 mb-12 mb-lg-0 '>";
                        echo  "<i class='fas fa-gavel fa-7x'></i>";
                        echo  "<br>";
                        echo  "<br>";
                        echo  "<h3>".$glsRemate."</h3>";
                        echo "<p>".$fecRemate."</p>";
                        echo "<p>".$dirRemate."</p>";
                        echo "</div>";  
                        echo "</div>";    
                        echo "<div  class='col-md-12 col-lg-8 mb-8 mb-lg-0 '>";
                        echo "<div class='contieneDescripcion col-md-12 col-lg-12 mb-12 mb-lg-0 '>";
                        echo "<p>".$desRemate."</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<input type='button' value='Ver archivos' class='btn btn-dark btn-lg btn-block'>";     
                        echo "<div class='col-8'>";
                  
                        
                        echo "</div>";
                        echo "<div class='col-1'></div>";
                        echo "</div>";
                        echo "<br>"; 
                        echo "<hr>";                  
                        echo "<br>"; 
                        echo "</div>";  
                        /*Fin Div Contiene Remate*/
                        /*Inicio Div Separador*/
                        echo "<div class='col-1'></div>";                  
                        /*Fin Div Separador*/ 
                      }
                    }
                  }
                  //Liberas el resultado
                  mysqli_free_result($rs);

                  //Cerras coneccion
                  mysqli_close($conn);
                ?>
                <!--FIN PHP-->
              </div>
              <br>
                <!--INICIO REDES SOCIALES-->
                <div class="row pt-15 mt-15 text-center">
                <div class="col-md-12">
                  <div class="mb-5">
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                  </div>
                </div>         
              </div>
              <!--FIN REDES SOCIALES-->
            </div>
          </div>
          <div class="col-2"></div>    
        </div>
        <hr>
        <center>
          <!--INICIO CONTACTO-->
          <!--
          <div class="container">
            <div class="row">
              <div class="col-12">
                <form action="envia.php" method="post"class="form-consulta" >
                  <h1>Contacto</h1>
                  <label>Nombre y apellido: <span>*</span>
                  <input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
                  </label>
                  <label>Email: <span>*</span>
                    <div class="col-12">
                      <input type="email" name="email" placeholder="Email" class="campo-form "    required>
                    </div>               
                  </label>
                  <br>
                  <label>Consulta:
                    <textarea name="consulta" class="campo-form"></textarea>
                  </label>
                  <br>
                  <input type="submit" value="Enviar" class="btn-form">
                </form>              
              </div>
            </div>
          </div>
          -->
          <!--FIN CONTACTO-->
        </center>
      </div>
    </div>     

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>