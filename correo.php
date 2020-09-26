<?php
$destinatario = 'email';
$nombre = $_POST['nombre'];
$asunto = "Compra GO Store";
$apellidos = $_POST['apellidos'];


$header = $nombre . " " . $apellidos . " Muchas gracias por tu preferencia" ;
$mensajeCompleto =  "\n\nAtentamente: " . " GO STORE "\n";

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script> setTimeout(\"location.href='index.php'\", 1000)</script>";
?>