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
	<script type="text/javascript" src="js/creaRemate.js"></script>
	<!--Fin Archivos externos-->
	<meta charset="utf-8">
	<title>Proyecto Remates</title>
</head>
<body>

	<div id="divFondo" class="divFondo col-12"></div>

	<div class="container">
		<div id="cabecera" class="row">
			<div class="col-4">
			</div>
			<div class="col-4">
				<h1>Mantenedor de remates</h1>
			</div>
			<div class="col-4"></div>
		</div>

			<hr>
		
		<form action="http://localhost/Remates/BD/ModificaRemate.php" method="POST" enctype="multipart/form-data">
			<div id="cuerpo" class="row">
				<input type="hidden" id="idRemate" name="idRemate">
				<div id="cabeceraForm" class="col-12">
					<div class="col-4"></div>
					<div class="col-4">
						<h3>Nuevo Remate</h3>
					</div>
					<div class="col-4"></div>
				</div>

				<?php 

				include('../BD/Conexion.php');

				$rem 	=	$_GET['Remate'];

				$query = "SELECT	*
				FROM	REMATE.REM_DET_REMATE
				WHERE 	ID_DETREMATE	=	$rem;";

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
				$idRemate 	=	$row['ID_DETREMATE'];
				$glsRemate 	=	$row['GLS_DETREMATE'];
				$dirRemate 	=	$row['DIR_DETREMATE'];
				$fecRemate 	= 	$row['FEC_DETREMATE'];
				$desRemate 	=	$row['DES_DETREMATE'];
				$flgRemate 	=	$row['FLG_CONTIENE'];

				echo"<div class='col-6'>";
				//glsRemate

					echo "<div class='container'>";
					
						echo "<div class='row'>";				
					echo"<div class='col-6 apartado'>";
						echo "<div class='col-9 glosa'>";
							echo "<p>T&iacutetulo Remate :</p>";	
						echo "</div>";
						echo "<div class='col-12'>";
							echo "<input type='text' value ='".$glsRemate."' class='form-control' name ='glsRemate' id='txtGlosaRemate'>";
						echo "</div>";				
					echo "</div>";
				//Fin glsRemate

				//Imagen de Remate
					echo"<div id='divImagenRemate' class='col-6 apartado'>";
						echo "<div class='col-9 glosa'>";
							echo "<p>Imagen remate :</p>";	
						echo "</div>";
						echo "<div class='col-12'>";
							echo "<input type='file'  name ='imgRemate' id='txtGlosaRemate'>";
						echo "</div>";				
					echo "</div>";
				//Fin Imagen de Remate	

					echo "</div>";
					echo "</div>";

				//Direccion		
					echo "<div class='col-12 apartado'>";
						echo "<div class='col-4 glosa'>";
							echo "<p>Direcci&oacuten :</p>";	
						echo "</div>";
						echo "<div class='col-12'>";
							echo "<input type='text' value='".$dirRemate."' class='form-control' name='direccionRemate' id='txtDireccionRemate'>";
						echo "</div>";				
					echo "</div>";
				//Fin Direccion	


					echo "<div class='container'>";
					
						echo "<div class='row'>";
					//Fecha		
							echo "<div class='col-6 apartado'>";
								echo "<div class='col-9 glos'>";
									echo "<p>Fecha Remate:</p>	";
								echo "</div>";		
								echo "<div class=''>";
									echo "<input type='datetime-local' value='".$fecRemate."'  class='form-control' name='fecRemate' id='txtFechaRemate'>";
								echo "</div>";
							echo "</div>";	
					//Fin Fecha
							
					//Archivos			
							echo "<div id='apartadoArchivo' class='col-6 apartado'>";
								echo "<div class='col-9 glosa'>";
									echo "<p style='text-align: left;'>Archivos:</p>";	
								echo "</div>";	
								echo "<div class=''>";
									echo "<input type='button' id='btnVerArchivos' value='Ver Archivos' class='btn btn-primary' name=''>";
								echo "</div>";
							echo "</div>";
					//Fin Archivos					

						echo "</div>";

					echo "</div>";

				echo "</div>";
				echo "<div class='col-6'>";
					
					echo "<div class='col-12 apartado'>";
						echo "<div class='col-4'>";
							echo "<p>Descripción	   :</p>";		
						echo "</div>";
						echo "<div class='col-12'></div>";
						echo "<textarea name='descRemate' class='form-control' id='idTextoDescripcion'>".$desRemate."</textarea>";
					echo "</div>";

				echo "</div>";
				
				}

				//Liberas el resultado
				mysqli_free_result($rs);


				//Cerras coneccion
				mysqli_close($conn);
				?>
<!--
				<div class="col-6">
					<div class="col-12 apartado">
					<div class="col-4 glosa">
						<p>Glosa de remate :</p>	
					</div>
					<div class="col-12">
						<input type="text" class="form-control" name ="glsRemate" id="txtGlosaRemate">
					</div>				
					</div>

					<div class="col-12 apartado">
					<div class="col-4 glosa">
						<p>Dirección :</p>	
					</div>
					<div class="col-12">
						<input type="text" class="form-control" name="direccionRemate" id="txtDireccionRemate">
					</div>				
					</div>
					<div class="container">

						<div class="row">
							
							<div class="col-6 apartado">
							<div class="col-9 glosa">
								<p>Fecha Remate:</p>	
							</div>		
							<div class="">
								
								<input type="datetime-local" class="form-control" name="fecRemate" id="txtFechaRemate">

							</div>
						</div>	
						<div id="apartadoArchivo" class="col-6 apartado">
							<div class="col-9 glosa">
								<p style="text-align: left;">Archivos:</p>	
							</div>	
							<div class="">
								<input type="button" id="btnVerArchivos" value="Ver Archivos" class="btn btn-primary" name="">
							</div>
							

						</div>


						</div>
						
	

					</div>






				</div>
				<div class="col-6">
					
					<div class="col-12 apartado">
						<div class="col-4">
							<p>Descripción	   :</p>		
						</div>
						<div class="col-12"></div>
						<textarea name="descRemate" class="form-control" id="idTextoDescripcion"></textarea>
					</div>

				</div>
			-->

			</div>	
			<br>
			<div id="btnEnviar"class="col-12" style="text-align: center;">
				<input type="submit" name="sbmtGuardar" id="btnGuardar" value="Guardar" class="btn btn-primary">	
				<input type="button" id="btnCancelar" value="Cancelar" class="btn btn-primary">	
			</div>			
		</form>		
		<hr>	
		<div id="pie" class="row col-12">
		</div>
	</div>

</body>
</html>