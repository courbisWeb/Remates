<?php
$remitente = $_POST['email'];
$destinatario = 'courbisweb@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Consulta'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST["consulta"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers = 'From: '.$destinatario."\r\n".
    'Reply-To:'.$destinatario."\r\n".
    'X-Mailer: PHP/'.phpversion();

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirma.html'; //se debe crear un html que confirma el envío
}
?>
