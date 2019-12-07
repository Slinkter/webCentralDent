<?php

$form_name = $_POST["form_name"];
$form_tel = $_POST["form_tel"];
$form_msj = $_POST["form_msj"];

$secret = $_POST["secret"];
$response = $_POST["response"];

$para      = 'consultas@limacentraldent.com';
$titulo    = 'Correo de  Web';
$mensaje   = 'Nombre : '.$form_name  ."\n".             
             'Telefono : '.$form_tel."\n". 
             'Mensaje : '.$form_msj."\n" ;
$cabeceras = 'From: webmaster@limacentraldent.com' . "\r\n" .
    'Reply-To: webmaster@limacentraldent.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response;
$verify = file_get_contents($url);

echo $verify;
header("Location:gracias.html");


?>