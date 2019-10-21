<?php

$form_name = $_POST["form_name"];
$form_tel = $_POST["form_tel"];
$form_msj = $_POST["form_msj"];

$para      = 'consultas@limacentraldent.com';
$titulo    = 'Correo de  Web';
$mensaje   = 'Nombre : '.$form_name  ."\n".             
             'Telefono : '.$form_tel."\n". 
             'Mensaje : '.$form_msj."\n" ;
$cabeceras = 'From: webmaster@limacentraldent.com' . "\r\n" .
    'Reply-To: webmaster@limacentraldent.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
header("Location:gracias.html");


?>