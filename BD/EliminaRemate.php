<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('Conexion.php');
/*variables*/
$idRemate 		=	$_GET['idRemate'];
/*fin variables*/
/*query*/
$rs	=	mysqli_query($conn, "SELECT	REMATE.BORRA_DET_REMATE($idRemate);");
/*fin query*/
mysqli_close($conn);
header('Location: http://localhost/proyectoRemate/Remates/panel_administrador/home.php');





