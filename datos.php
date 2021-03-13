<?php
if(isset($_POST['enviar'])){

if(!empty($_POST['nombre'])&& !empty($_POST['asunto'])!empty($_POST['email'])!empty($_POST['mensaje'])){

	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	$header.="From: noreply@example.com" . "\r\n";
	$header.="Reply-To: noreply@example.com" . "\r\n";
	$header.="X-Mailer: PHP/" . phpversion();
	$mail = mail($email,$asunto,$mensaje,$header);
	if($mail){echo "<h4>Enviado</h4>";}
}


}