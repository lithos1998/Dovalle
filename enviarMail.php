<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$rubro = $_POST["rubro"];
$metros = $_POST["m2"];
$direccion = $_POST["direccion"];
$tramite = $_POST["tramite"];



$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "su e-mail es: " . $email . " \r\n";
$mensaje .= "su telefono es " . $telefono . " \r\n";
$mensaje .= "el rubro : " . $rubro . " \r\n";
$mensaje .= "los metros cuadrados : " . $metros . " \r\n";
$mensaje .= "la direccion es " . $direccion . " \r\n";
$mensaje .= "y el tipo de tramite " . $tramite . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'estudiodovalle@gmail.com';
$asunto = 'Cotizacion de trabajo sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.php?form=ok");
?>