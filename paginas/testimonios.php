<?php
$name = $_post[name]
$testimonio = $_POST[Testimonio]
$mensaje = "Este testimonio fue enviado por" . $name . ".\r\n";
$mensaje = "El testimonio dice:" . $testimonio . "\r\n";
$destinatario = "bimbo95car@hotmail.com";
$asunto = "Nuevo testimonio de comensal"
mail($destinatario, $asunto, utf8_decode($testimonio), $header);
header("Location:index.html");
?>