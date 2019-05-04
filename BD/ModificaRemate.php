<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('Conexion.php');
/*variables*/
$idRemate 		=	$_GET['idRemate'];
$glsRemate		=	$_GET['glsRemate'];
$direccionRemate=	$_GET['direccionRemate'];
$fecRemate 		=	$_GET['fecRemate'];
$descRemate		=	$_GET['descRemate'];
/*fin variables*/
/*query*/
$rs	=	mysqli_query($conn, "SELECT 	REMATE.AGREGA_DET_REMATE($idRemate ,'$glsRemate','$direccionRemate','$fecRemate','$descRemate');");
/*fin query*/
mysqli_close($conn);
header('Location: http://localhost/Remates/panel_administrador/home.php');





