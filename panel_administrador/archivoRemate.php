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
	<!--Fin Archivos externos-->
	<meta charset="utf-8">
	<title>Proyecto Remates(Archivos)</title>
</head>
<body>

	<div id="divFondo" class="divFondo col-12"></div>

	<div class="container">
		<div id="cabecera" class="row">
			<div class="col-4">
			</div>
			<div class="col-4">
				<h1>Archivos del remate</h1>
			</div>
			<div class="col-4"></div>
		</div>

			<hr>
		
		<form action="http://localhost/proyectoRemate/Remates/BD/ModificaRemate.php">
			<div id="cuerpo" class="row">
				<input type="hidden" id="idRemate" name="idRemate">
				<div id="cabeceraForm" class="col-12">
					<div class="col-4"></div>
					<div class="col-4">
						<h3>Datos del archivo</h3>
					</div>
					<div class="col-4"></div>
				</div>
				<div class="col-6">
					<div class="col-12 apartado">
					<div class="col-4 glosa">
						<p>Nombre:</p>	
					</div>
					<div class="col-12">
						<input type="text" class="form-control" name ="glsRemate" id="txtGlosaRemate">
					</div>				
					</div>

					<div class="col-12 apartado">
					<div class="col-4 glosa">
						<p>Archivo:</p>	
					</div>
					<div class="col-12">
												    <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
					</div>				
					</div>
				</div>
				<div id="divContieneArchivos" class="col-6">
					
					<div class="col-12 apartado">
						<div class="col-4">
							<p>Archivos Adjuntos:</p>		
						</div>
						<div class="col-12"></div>
					</div>

				</div>

			</div>	
			<br>
			<div id="btnEnviar"class="col-12" style="text-align: center;">
				<input type="submit" id="btnAgregar" value="Agregar" class="btn btn-primary">	
				<input type="button" id="btnVolver" value="Volver" class="btn btn-primary">	
			</div>			
		</form>		
		<hr>	
		<div id="pie" class="row col-12">
			<h4>Footer</h4>
		</div>
	</div>

</body>
</html>