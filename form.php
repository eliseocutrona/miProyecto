<?php

//  conecto mi form /name / con el server a traves de los name
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];



// vamos a mostrar un texto plano
$header .= "Content-Type: text/plain";

// Como me va llegar el cuerpo del mail a mi , osea lo que la gente escribio en el form -\r\n es para hacer 


$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es " . $mail . " \r\n";
$mensaje .= "Su telefono es " . $telefono . " \r\n";
$mensaje .= "El asunto es " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$destinatario = 'eliseocutrona@gmail.com';
// El mail a donde van a llegar los mensajes 
$asunto = 'Mensaje de mi sitio web';
// El asunto de los mails que me llegan 

// la funcion mail envia un correo electronico y el orden es:
// A quien se lo envia? - el Titulo del correo - El mensaje - Header para añadir
mail($destinatario, $asunto, utf8_decode($mensaje), $header);

// Redireccion al haber enviado el form
header('Location:exito.html');
