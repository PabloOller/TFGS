<?php

$conexion = include 'conexion.php';

// Obtener el correo enviado por AJAX

$email = $_POST['email'];

// Crear la consulta

include 'conexion.php';
$sql = "SELECT * FROM user WHERE EMAIL LIKE '$email'";
$result = mysqli_query($conexion, $sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // El usuario está registrado
    echo "El correo " . $email . " ya está registrado";
}
else{
    echo "";
}