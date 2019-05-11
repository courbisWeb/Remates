<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Remates Valderas &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--Bootstrap-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!--Fin Bootstrap-->
    <link rel="stylesheet" href="style/index/bootstrap.min.css">
<!--Font Awesome-->      
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!--Fin Font Awesome--> 
  <!--Archivos externos-->
  <link rel="stylesheet" type="text/css" href="style/homePrincipal.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <!--Fin Archivos externos-->     
  </head>
  <body>
    <div class="row">
<!--Cabecera con logos en los extremos-->
      <div id="logo" class="encabezado col-xs-12 col-sm-12 col-md-12 col-lg-12">      
        <header class="" style="background-color: white;opacity: 0.5;">        
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
<!--Fin Cabecera con logos en los extremos-->       
<!--Cabecera Mobile-->   
      <div id="logoPhone" class="ocultar col-xs-12 col-sm-12 col-md-12 col-lg-12">      
        <header class="" style="background-color: white;opacity: 0.5;">      
              <center>
                <a href="#">
                  <img src="assets/remate.jpg" alt="Image" class="img-md-fluid">
                </a>  
              </center>        
        </header>
      </div>  
<!--Fin Cabecera Mobile-->
<!--recibeInfoBTN-->
  </div>  
  <div id="recibeInfoBTN" class="row">
    <center>
      <br>
      <h2>¿Quieres recibir información?</h2>        
    </center> 
  </div>
<!--Fin recibeInfoBTN-->  
  <div class="row">
<!--Contacto grande-->  
        <div id="enviaContacto" style="font-size: bold;" class="RecibeInfo">
          <form action="envia.php" method="post">
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
                  <input type="text" class="form-control" name="nombre">          
                </div>
                <div style="margin-top: 10%;"class="col-12">
                  <p>Correo:</p>
                </div>
                <div  class="col-12">
                  <input type="text" class="form-control" name="email">          
                </div>  
                <div style="margin-top: 10%;"class="col-12">
                  <p>Comentario:</p>
                </div>
                <div  class="col-12">
                  <textarea class="form-control" name="consulta" ></textarea>         
                </div>           
              </div>
            </div>  
            <br>
            <br>
            <input type="submit" class="btn btn-dark btn-lg btn-block" name="" value="Enviar Contacto">
          </form>      
        </div>
<!--Fin Contacto grande-->  

<!--*************************************Contenido principal******************************************************-->
              <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3"></div>
              <div class="colorPaper col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="row">
                    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3"></div>
                    <div style="text-align: center;"class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <h1 style="margin-top: 20px; font-size: bold;">Listado de Remates</h1>
                      <hr>
                      <br>
                    </div>
                    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3"></div>
                  </div>
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
                        if ($flgRemate>0) 
                        {
                          echo "<div style='margin-bottom:50px; margin-top:50px;'; class='container'>";
                                /*Inicio Div Contiene Remate*/
                                echo "<div id='contieneRemate".$idRemate."' class='contieneContenido row'>";                          
                                  echo "<div class='divIzquierdo col-xs-12 col-sm-12 col-md-4 col-lg-4'>";
                                    echo "<div class='row'>";
                                      if ($imgRemate!=""&&$imgRemate!=null) {
                                        echo "<div class='contieneImagen col-md-12 col-lg-12 mb-12 mb-lg-0 '>";
                                          echo  "<img class='imgRemate img-responsive' src='BD/archivos/imgRemate/".$imgRemate."'>";
                                        echo "</div>";
                                      }
                                      else
                                      {
                                        echo "<div class='col-3'></div>";
                                        echo "<div class='col-3'>";
                                          echo  "<i class='fas fa-gavel fa-7x'></i>";
                                        echo "</div>";
                                        echo "<div class='col-3'></div>"; 
                                      }   
                                    echo "</div>";
                                    echo "<br>"; 
                                    echo "<div class='row'>";
                                      echo "<div style='text-align:center;' class='col-md-12 col-lg-12 mb-12 mb-lg-0 '>";     
                                        echo  "<h3>".$glsRemate."</h3>";
                                        echo "<p>".$fecRemate."</p>";
                                        echo "<p>".$dirRemate."</p>";
                                      echo "</div>";  
                                    echo "</div>";                                   
                                  echo "</div>";    
                                  echo "<div  class='col-md-12 col-lg-8 mb-8 mb-lg-0 '>";
                                    echo "<div class='contieneDescripcion col-md-12 col-lg-12 mb-12 mb-lg-0 '>";
                                      echo "<p>".$desRemate."</p>";
                                    echo "</div>";
                                  echo "</div>";
                                echo "</div>"; 
                                echo "<div class='row'>";
                                  echo "<div class='col-md-12 col-lg-12 mb-12 mb-lg-12 '>";
                                    echo "<input style='margin-top:20px;' type='button' value='Ver archivos' id='btnRemate".$idRemate."' class='btn btn-dark btn-lg btn-block'>"; 
                                  echo "</div>"; 
                                echo "</div>";  
                              /*Fin Div Contiene Remate*/
                          echo "</div>";
                          echo "<hr>";                             
                          
                        }
                      }
                      //Liberas el resultado
                      mysqli_free_result($rs);

                      //Cerras coneccion
                      mysqli_close($conn);
                    ?>
<!--FIN PHP-->
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
              <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3"></div>    
            <hr>    
    <!--*************************************Fin Contenido principal******************************************************-->
  </div>

<!--Contacto Mobile-->
<div class="row">
  <div id="enviaContactoPhone" class="col-12 RecibeInfoPhone">
    <form action="envia.php" method="post">
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
            <input type="text" class="form-control" name="nombre">          
          </div>
          <div style="margin-top: 10%;"class="col-12">
            <p>Correo:</p>
          </div>
          <div  class="col-12">
            <input type="text" class="form-control" name="email">          
          </div>  
          <div style="margin-top: 10%;"class="col-12">
            <p>Comentario:</p>
          </div>
          <div  class="col-12">
            <textarea class="form-control" name="consulta"></textarea>         
          </div>           
        </div>
      </div>  
      <br>
      <br>
      <input type="submit" class="btn btn-dark btn-lg btn-block" name="" value="Enviar Contacto">
    </form> 
  </div>
</div>
<!--Fin Contacto Mobile-->

       

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
      <!--jquery-->
  <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous">    
  </script>
  <!--fin jquery-->
  <!--Bootstrap-->
  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--Fin Bootstrap-->
  <script type="text/javascript" src="js/home.js"></script>
  </body>
</html>