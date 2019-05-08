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
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-1" style="background-color: white; opacity: 0.7;"role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <a href="#">
              <img src="assets/remate.jpg" alt="Image" class="img-md-fluid">
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
          <!--  <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active">
                 <!-- <a href="index.html">Inicio</a>
                </li>
                <li class="has-children">
                  <a href="destination.html">Destinations</a>
                  <ul class="dropdown">
                    <li><a href="#">Japan</a></li>
                    <li><a href="#">Europe</a></li>
                    <li><a href="#">China</a></li>
                    <li><a href="#">France</a></li>
                  </ul>
                </li>
                
                <li><a href="discount.html">Discount</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="blog.html">Blog</a></li>
                
                <li><a href="contact.html">Contact</a></li>-->
                <!-- <li><a href="booking.html">Book Online</a></li> 
              </ul>
            </nav> -->
          </div>

          <div class="col-6 col-xl-2 text-left" style="float: right;margin-left: 60%;">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3 text-black"><span class="icon-tripadvisor"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                </li>
                
              </ul>
            </div>
          </div>

        </div>
      </div>
      
    </header>


      <div class="site-blocks-cover colorDivCabecera" style="font-size: bold;  background-color: white;
  opacity: 0.7;
-webkit-box-shadow: -4px 42px 38px -10px rgba(0,0,0,0.75);
-moz-box-shadow: -4px 42px 38px -10px rgba(0,0,0,0.75);
box-shadow: -4px 42px 38px -10px rgba(0,0,0,0.75); height: 300px;" data-aos="fade" data-stellar-background-ratio="0.5">
      </div>  

<div class="container">
  <div class="row">
    <div class="col-2"></div>
      <div class="site-blocks-cover col-8" style="font-size: bold; margin-top: -500px;" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
              <h1 style="font-size: bold; color: black;" class="">Remates Valderas</h1>
           <!-- <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              
              <p class="mb-5">Para recibir mas informacion de nuestros proximos retames, ingresa tu correo electronico</p>
              <input type="text" class="form-control border-secondary text-black" placeholder="Ingresa tu correo" aria-label="Enter Email" aria-describedby="button-addon2"> 
              <br>
              <p><a href="#" class="btn btn-primary py-3 px-5 text-white">Recibir informaci&oacuten</a></p>

            </div>-->
          </div>
        </div>
      </div> 
      <div class="col-2"></div>
      </div>
</div>
    </div>


    <div class="site-section">

      
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

          
            <?php 

            include('BD/Conexion.php');

            $query = "SELECT  *
            FROM  REMATE.REM_DET_REMATE;";

            // Ejecutas las consulta
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
              /*echo "idRemate = ".$idRemate." contiene DATOS!!";
              echo "<br>";*/
                echo "<div class='col-2'></div>";
                echo "<div id='contieneRemate".$idRemate."' class='contieneContenido col-md-8 col-lg-8 mb-8 mb-lg-0 '>";
                echo "<div class='row'>";
                if ($imgRemate!=""&&$imgRemate!=null) {
                  echo "<div class='divIzquierdo col-md-12 col-lg-4 mb-4 mb-lg-0 '>";
                  echo "<div class='contieneImagen col-md-12 col-lg-12 mb-12 mb-lg-0 '>";
                  echo  "<img class='imgRemate' src='BD/archivos/imgRemate/".$imgRemate."'>";
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
                  echo "<div class='contieneArchivos col-md-12 col-lg-12 mb-12 mb-lg-0 '>";
                  echo "</div>";   

                  echo "</div>";
                  echo "<div class='col-2'></div>";
                  echo "<div class='col-8'>";
                  
                   echo "<input type='button' value='Ver archivos' class='btn btn-dark btn-lg btn-block'>";
                  echo "</div>";
                   echo "<div class='col-2'></div>";
                  echo "</div>";
                  echo "<br>";
                  echo "<br>";                  
                  echo "<hr>";                  
                  echo "</div>";                  
                  echo "<div class='col-2'></div>";

                  
                }
             

            }

            }

            //Liberas el resultado
            mysqli_free_result($rs);


            //Cerras coneccion
            mysqli_close($conn);
            ?>
        </div>
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
      </div>
    
    </div>
    <hr>
    <center>
      <div class="container">
        <div class="row">
                <div class="col-12">
  <form action="envia.php" method="post" class="form-consulta" >
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

               </center>
               </div>
        </div>
      </div>

               <br>

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