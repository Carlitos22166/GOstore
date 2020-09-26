<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Muchas gracias por tu preferencia " . $nombre . ",\r\n";
$mensaje .= "Su compra está en proceso " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'email';
$asunto = 'Compra GO Store';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>