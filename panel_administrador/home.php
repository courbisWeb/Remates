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
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
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
	<script type="text/javascript" src="js/home.js"></script>
	<script type="text/javascript" src="js/creaRemate.js"></script>
	<!--Fin Archivos externos-->
	<meta charset="utf-8">
	<title>Proyecto Remates (Admin)</title>
</head>
<body>

<div id="divFondo" class="divFondo col-12"></div>

<div class="container">
	<div id="cabecera" class="row">
		<div class="col-4">
			<div class="btnOculto"></div>
		</div>
		<div class="col-4">
			<h1>Panel administrador</h1>
		</div>
		<div class="col-4"></div>
		
	</div>

	<hr>

	<div id="cuerpo" class="row col-12">

	
		<div id="contieneRemate1" class="agregaRemate contieneRemate col-2">	
			<i class="fas fa-plus fa-5x"></i>
			<hr>
			<p>remate 1</p>
		</div>	

		<div id="contieneRemate2" class="agregaRemate contieneRemate col-2">
			
			<i class="fas fa-plus fa-5x"></i>
			<hr>
			<p>remate 2</p>
		</div>	

		
		<div id="contieneRemate3" class="agregaRemate contieneRemate col-2">
			
			<i class="fas fa-plus fa-5x"></i>
			<hr>
			<p>remate 3</p>
		</div>	

		
		<div id="contieneRemate4" class="agregaRemate contieneRemate col-2">
			
			<i class="fas fa-plus fa-5x"></i>
			<hr>
			<p>remate 4</p>
		</div>	

		
		<div id="contieneRemate5" class="agregaRemate contieneRemate col-2">
			
			<i class="fas fa-plus fa-5x"></i>
			<hr>
			<p>remate 5</p>
		</div>	

		<div id="eliminarRemate1" class="eliminar col-2">	
			<i class="fas fa-trash-alt fa-2x"></i>
		</div>	

		<div id="eliminarRemate2" class="eliminar col-2">
			<i class="fas fa-trash-alt fa-2x"></i>
		</div>	

		
		<div id="eliminarRemate3" class="eliminar col-2">		
			<i class="fas fa-trash-alt fa-2x"></i>
		</div>	

		
		<div id="eliminarRemate4" class="eliminar col-2">
			<i class="fas fa-trash-alt fa-2x"></i>
		</div>	

		
		<div id="eliminarRemate5" class="eliminar col-2">
			<i class="fas fa-trash-alt fa-2x"></i>
		</div>

	</div>

	<hr>

	<div id="pie" class="row col-12">
		<h4>Footer</h4>
	</div>
</div>

<?php 

include('../BD/Conexion.php');

$query = "SELECT	*
FROM	REMATE.REM_DET_REMATE;";

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

if ($flgRemate>0) {
	echo "idRemate = ".$idRemate." contiene DATOS!!";
	echo "<br>";
}

}

//Liberas el resultado
mysqli_free_result($rs);


//Cerras coneccion
mysqli_close($conn);
?>

</body>
</html>