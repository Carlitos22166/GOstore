<?php
$destinatario = 'carlosgbj11@gmail.com';
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$apellidos = $_POST['apellidos'];


$header = $nombre . " " . $apellidos . "Gracias por tu preferencia";
$mensajeCompleto = $mensaje . "\n\nAtentamente: " . $email . "\n" . $telefono;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script> setTimeout(\"location.href='index.php'\", 1000)</script>";
?>
