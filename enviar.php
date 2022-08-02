<?php
$name = $_POST['name'];
$country = $_POST ['country']
$company = $_POST ['company']
$email = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "País y empesa: " . $phone . $company " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'vzucchellapaz@gmail.com';
$asunto = 'Mensaje de Stardust Media formulario';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:contact.html");
?>