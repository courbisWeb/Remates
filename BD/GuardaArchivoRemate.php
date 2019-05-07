<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('Conexion.php');

if (isset($_POST['sbmtArchivo'])) {
	if (is_uploaded_file($_FILES['archivoCarga']['tmp_name'])) {
		
		//Variables

		$ruta	=	"archivos/";
		$nombreFinal	=	trim($_FILES['archivoCarga']['name']);//Se eliminan los espacios en blanco
		$nombreFinal	=	preg_replace("/\r/", "", $nombreFinal);//sustituye una expresion regular
		$upload =	$ruta.$nombreFinal;

		if (move_uploaded_file($_FILES['archivoCarga']['tmp_name'], $upload)) {//Movemos el archivo a su ubicacion
			$nombre 	=	$_POST['glsArchivoRemate'];
			$descripcion=	$_POST['descArchivoRemate'];
			$idRemate	=	$_POST['idRemate'];
			echo "idRemate = ".$idRemate;
			echo "<br>";
			echo "Nombre = ".$nombre;
			echo "<br>";
			echo "Descripcion = ".$descripcion;
			echo "<br>";
			echo "$nombreFinal = ".$nombreFinal;
			echo "<br>";
			echo "Tamano = ".$_FILES['archivoCarga']['size'];
			echo "<br>";
			echo "tipo = ".$_FILES['archivoCarga']['type'];

			$query="SELECT 	REMATE.SUBE_ARCHIVO_REMATE($idRemate,'$nombre','$descripcion','$nombreFinal','".$_FILES['archivoCarga']['type']."','".$_FILES['archivoCarga']['size'].");";

			mysqli_query($conn,"SELECT 	REMATE.SUBE_ARCHIVO_REMATE($idRemate,'$nombre','$descripcion','$nombreFinal','".$_FILES['archivoCarga']['type']."',".$_FILES['archivoCarga']['size'].");") or die(mysql_error());


			mysqli_close($conn);
			header('Location: http://localhost/Remates/panel_administrador/archivoRemate.php?Remate='.$idRemate);

		}

	}
}






