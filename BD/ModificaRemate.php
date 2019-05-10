<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	include('Conexion.php');

	if (isset($_POST['sbmtGuardar'])) {

		/*variables*/
		$idRemate 		=	$_POST['idRemate'];
		$glsRemate		=	$_POST['glsRemate'];
		$direccionRemate=	$_POST['direccionRemate'];
		$fecRemate 		=	$_POST['fecRemate'];
		$descRemate		=	$_POST['descRemate'];
		/*fin variables*/

		if (is_uploaded_file($_FILES['imgRemate']['tmp_name'])) {
			$ruta	=	"archivos/imgRemate/";
			$nombreFinal	=	trim($_FILES['imgRemate']['name']);//Se eliminan los espacios en blanco
			$nombreFinal	=	preg_replace("/\r/", "", $nombreFinal);//sustituye una expresion regular
			$upload =	$ruta.$nombreFinal;

			if (move_uploaded_file($_FILES['imgRemate']['tmp_name'], $upload)) {//Movemos el archivo a su ubicacion
				echo "<br>";
				echo "***********************";
				echo "<br>";
				echo "idRemate 			= ".$idRemate;
				echo "<br>";
				echo "glsRemate			= ".$glsRemate;
				echo "<br>";
				echo "direccionRemate	= ".$direccionRemate;
				echo "<br>";
				echo "fecRemate			= ".$fecRemate;
				echo "<br>";
				echo "descRemate		= ".$descRemate;
				echo "<br>";
				echo "nombreFinal 		= ".$nombreFinal;
				echo "<br>";
				echo "***********************";
				echo "<br>";

				/*query*/
				$rs	=	mysqli_query($conn, "SELECT 	REMATE.AGREGA_DET_REMATE($idRemate ,'$glsRemate','$direccionRemate','$fecRemate','$descRemate','$nombreFinal');")or die(mysql_error());
				/*fin query*/
				mysqli_close($conn);
				header('Location: http://localhost/Remates/panel_administrador/home.php');
			}
		}
		else
		{

				echo "<br>";
				echo "***********************";
				echo "<br>";
				echo "idRemate 			= ".$idRemate;
				echo "<br>";
				echo "glsRemate			= ".$glsRemate;
				echo "<br>";
				echo "direccionRemate	= ".$direccionRemate;
				echo "<br>";
				echo "fecRemate			= ".$fecRemate;
				echo "<br>";
				echo "descRemate		= ".$descRemate;
				echo "<br>";
				echo "***********************";
				echo "<br>";

				$rs	=	mysqli_query($conn, "SELECT 	REMATE.AGREGA_DET_REMATE($idRemate ,'$glsRemate','$direccionRemate','$fecRemate','$descRemate','');")or die(mysql_error());
				/*fin query*/
				mysqli_close($conn);
				header('Location: http://localhost/Remates/panel_administrador/home.php');
		}
	}
?>



