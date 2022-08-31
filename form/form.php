<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['textarea'];

//Como va a llegar el cuerpo
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "Su email es " . $email . ",\r\n";
$mensaje = "Mensaje: " . $_POST['mensaje'] . ",\r\n";
$mensaje = "Enviado el: " . date('d/m/Y', time ());

//Destinatario
$destino = 'gagliardigonzalo@gmail.com';
$asunto = 'Mensaje en porfolio';


// Funcion mail
mail($para , $asunto, utf8_decode($mensaje), $header);

//Redireccion al haber enviado el form
header('index.html');

?>
