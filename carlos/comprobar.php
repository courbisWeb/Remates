<?php
    session_start();
    include 'conexion.php';
    if(isset($_POST['contrasena'])) { // comprobamos que se hayan enviado los datos del formulario
        // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
        if(empty($_POST['usuario']) || empty($_POST['contrasena'])) {
            echo "<font color=\"white\">El usuario o la contraseña no han sido ingresados.</font>";
        }else {
            // "limpiamos" los campos del formulario de posibles códigos maliciosos
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $contrasena = ($contrasena);
            //echo $usuario." ".$contrasena;
            // comprobamos que los datos ingresados en el formulario coincidan con los de la BD
            $sql = "SELECT id,usuario,contrasena,email FROM remates.usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."'";
            $rSql = mysqli_query($connect,$sql);
            if($row = mysqli_fetch_array($rSql)){
                $_SESSION['id'] = $row['id']; 
                $_SESSION['usuario'] = $row["usuario"];
                $_SESSION['contrasena'] = $row["contrasena"];
                $_SESSION['email'] = $row["email"];
               // header("Location: http://distrito9.creall.cl/mantenedor/club");
                echo '<script type="text/javascript"> window.location = "http://rematesvalderas.cl"</script>';
            }else {
                
?>
               
               <div class="alert alert-warning" style="color:white;">Usuario o contrasena erroneo, Intentelo Nuevamente</div> 
<?php
            }
        }
    }else {
        echo '<script type="text/javascript"> window.location = "http://facebook.cl"</script>';
    }
?> 