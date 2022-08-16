<?php
$name = $_POST[name]
$testimonio = $_POST[testimonio]
$mensaje = "Este testimonio fue enviado por" . $name . ".\r\n";
$mensaje = "El testimonio dice:" . $testimonio . "\r\n";
$destinatario = "bimbo95car@hotmail.com";
$asunto = "Nuevo testimonio de comensal"
mail($destinatario, $asunto, utf8_decode($testimonio), $header);
header("Location:index.html");
?>