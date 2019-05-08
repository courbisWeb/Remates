<?php

$dbhost		=	'127.0.0.1';
$dbuser		=	'carlos';
$dbpass		=	'IuijH3CavZSZZ7PJ';
$database	=	'REMATE';
$conn		=	mysqli_connect($dbhost, $dbuser, $dbpass, $database);
if (! $conn) 
	{
		die('No se puede conectar a la base de datos: '.mysql_error());
	}	
  ?>