<?php

//llamando a las variables
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$destinatario = "berni.baeza@gmail.com";
$asunto = "Contacto desde nuestra web";

$ficha = "De : $nombre \n";
$ficha .= "Correo : $correo \n";
$ficha .= "Telefono : $telefono \n";
$ficha .= "Mensaje : $mensaje";

//Enviando el mensaje
mail($destinatario, $asunto, $ficha);
header('Location:contacto.html');

?>