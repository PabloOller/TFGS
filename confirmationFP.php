<?php

$paraCorreo = $_POST['email'];
$tituloCorreo  = "Correo Prueba";
$mensaje = "Correo enviado con exito";
$miCorreo = "From: pabloollerperez@gmail.com";

if (mail($paraCorreo, $tituloCorreo, $mensaje, $miCorreo)) {
    echo "Correo enviado";
} else {
    echo "Error";
}
?>