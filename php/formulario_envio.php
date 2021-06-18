<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$whatsapp = $_POST['whatsapp'];
$servicio = $_POST['servicio'];

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$servicio = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$servicio .= "Su e-mail es: " . $correo . " \r\n";
$servicio .= "Su whatsapp es: " . $whatsapp . " \r\n";
$servicio .= "Desea el servicio de: " . $_POST['servicio'] . " \r\n";
$servicio .= "Enviado el: " . date('d/m/Y', time());

$para = 'contacto@cctransportes.com';
$asunto = 'Mensaje de Cotizacion';

mail($para, $asunto, utf8_decode($servicio), $header);
echo '<script> alert("Gracias por tu contacto! en breves nos estaremos comunicando... "); window.location.href="https://cctransportes.com/" </script>';
?>
