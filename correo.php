<?php
$destinatario = 'carlos-ur25@hotmail.com';
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$apellidos = $_POST['apellidos'];


$header = $nombre . " " . $apellidos . "Gracias por tu preferencia";
$mensajeCompleto = "\n\nAtentamente: " . $email . "\n" ;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script> setTimeout(\"location.href='index.html'\", 1000)</script>";
?>
