<!DOCTYPE html>
<html>
<head>
	<!--jquery-->
	<script
	src="https://code.jquery.com/jquery-3.4.0.min.js"
	integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
	crossorigin="anonymous">		
	</script>
	<!--fin jquery-->
	<!--jquery ui-->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
			integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
			crossorigin="anonymous">
	</script>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css">
	<!--jquery ui-->
	<!--Inicio Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!--Fin Bootstrap-->
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!--Fin Awesome-->
	<!--Archivos externos-->
	<link rel="stylesheet" type="text/css" href="../style/home.css">
	<link rel="stylesheet" type="text/css" href="style/creaRemate.css">
	<link rel="stylesheet" type="text/css" href="style/archivoRemate.css">
	<script type="text/javascript" src="js/creaRemate.js"></script>
	<script type="text/javascript" src="js/archivoRemate.js"></script>
	<!--Fin Archivos externos-->
	<meta charset="utf-8">
	<title>Proyecto Remates(Archivos)</title>
</head>
<style type="text/css">
	
	p
	{

		font-size: small;

	}

</style>
<body>

	<div id="divFondo" class="divFondo col-12"></div>

	<div class="container">
		<div id="cabecera" class="row">
			<div style="text-align: center;"class="col-12">
				<h1>Archivos del remate</h1>
				<hr>
			</div>
<div style="margin-top: 30px;" class="container">
	
	<div class="row">
		
		<div class="col-12">
							
			<?php 

				include('BD/Conexion.php');

				$idRemate	=	$_GET['idRemate'];

				$query = "	SELECT 	ID_ARCHIVOREMATE,
									NOM_ARCHIVOREMATE,
							        DES_ARCHIVOREMATE,
							        URL_ARCHIVOREMATE,
							        TIP_ARCHIVOREMATE,
							        SIZ_ARCHIVOREMATE
							FROM	REMATE.REM_ARCHIVO_REMATE
							WHERE	ID_DETREMATE	=   $idRemate; ";

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
				while ($row	=	mysqli_fetch_array($rs, MYSQLI_ASSOC)) {
				$idArchivoRemate 	=	$row['ID_ARCHIVOREMATE'];
				$nomArchivoRemate 	=	$row['NOM_ARCHIVOREMATE'];
				$desArchivoRemate 	=	$row['DES_ARCHIVOREMATE'];
				$urlArchivoRemate 	= 	$row['URL_ARCHIVOREMATE'];
				$tipArchivoRemate 	=	$row['TIP_ARCHIVOREMATE'];
				$sizArchivoRemate 	=	$row['SIZ_ARCHIVOREMATE'];

				if ($tipArchivoRemate=="image/png") {
					echo "<div style='float:left;' class='col-3'>";
					echo "<div class='col-12'>";
					echo "<a href='BD/archivos/".$urlArchivoRemate."'><i class='fas fa-image fa-5x'></i></a>";
					echo "</div>";
					echo "<div class='col-12'>";
					echo "<p>".$nomArchivoRemate."</p>";
					echo "</div>";
					echo "</div>";
					
				}
				elseif ($tipArchivoRemate=="application/pdf") {
					echo "<div style='float:left;' class='col-3'>";
					echo "<div class='col-12'>";
					echo "<a href='BD/archivos/".$urlArchivoRemate."'><i class='fas fa-file-pdf fa-5x'></i></a>";
					echo "</div>";
					echo "<div class='col-12'>";
					echo "<p>".$nomArchivoRemate."</p>";
					echo "</div>";
					echo "</div>";
				}
				elseif ($tipArchivoRemate=="application/msword") {
					echo "<div style='float:left;' class='col-3'>";
					echo "<div class='col-12'>";
					echo "<a href='BD/archivos/".$urlArchivoRemate."'><i class='fas fa-file-word fa-5x'></i></a>";
					echo "</div>";
					echo "<div class='col-12'>";
					echo "<p>".$nomArchivoRemate."</p>";
					echo "</div>";
					echo "</div>";
				}
				elseif ($tipArchivoRemate=="application/vnd.openxmlformats-officedocument.pres") {
					echo "<div style='float:left;' class='col-3'>";
					echo "<div class='col-12'>";
					echo "<a href='BD/archivos/".$urlArchivoRemate."'><i class='fas fa-file-powerpoint fa-5x'></i></a>";
					echo "</div>";
					echo "<div class='col-12'>";
					echo "<p>".$nomArchivoRemate."</p>";
					echo "</div>";
					echo "</div>";
				}
				elseif ($tipArchivoRemate=="application/vnd.openxmlformats-officedocument.spre") {
					echo "<div style='float:left;' class='col-3'>";
					echo "<div class='col-12'>";
					echo "<a href='BD/archivos/".$urlArchivoRemate."'><i class='fas fa-file-excel fa-5x'></i></a>";
					echo "</div>";
					echo "<div class='col-12'>";
					echo "<p>".$nomArchivoRemate."</p>";
					echo "</div>";
					echo "</div>";
				}
				elseif ($tipArchivoRemate=="image/jpeg") {
					echo "<div style='float:left;' class='col-3'>";
					echo "<div class='col-12'>";
					echo "<a href='BD/archivos/".$urlArchivoRemate."'><i class='fas fa-image fa-5x'></i></a>";
					echo "</div>";
					echo "<div class='col-12'>";
					echo "<p>".$nomArchivoRemate."</p>";
					echo "</div>";
					echo "</div>";
					
				}
				//
				}

				//Liberas el resultado
				mysqli_free_result($rs);


				//Cerras coneccion
				mysqli_close($conn);
			?>	

		</div>

	</div>

</div>			

	
		<hr>	
		<div id="pie" class="row col-12">
		</div>
	</div>

</body>
</html>







