<?php
/*
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
header('Location:exito.html');

*/





// Declaración de variables del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

$mensaje = $_POST['mensaje'];

// Datos del email
$para = 'gagliardigonzalo@gmail.com';
$titulo = 'S&S Solicitud de presupuesto';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\nE-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {

    if (mail($para, $titulo, $msjCorreo, $header)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactar con nosotros.');
    </script>";
    } else {
        echo 'Falló el envio';
    }
}
?>