<?php

$conexion = include 'conexion.php';

// Obtener el nombre de usuario enviado por AJAX


$usuario = $_POST['nickname'];


// Crear la consulta
include 'conexion.php';
$sql = "SELECT * FROM user WHERE NICKNAME LIKE '$usuario'";
$result = mysqli_query($conexion, $sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // El usuario está registrado
    echo "El nombre " . $usuario . " ya está registrado";
} else {
    echo "";
}
