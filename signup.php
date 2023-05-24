<?php
include 'conexion.php';

$consulta = ConsultarUsuarios();

function ConsultarUsuarios()
{
    include 'conexion.php';
    $sentencia = "SELECT * FROM user";
    $resultado = mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
    $filas = array();

    while ($fila = mysqli_fetch_assoc($resultado)) {
        $filas[] = $fila;
    }

    return $filas;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <script src="./js/funciones.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#nickname').keyup(function() {
                var nickname = $(this).val();
                $.ajax({
                    url: 'verificar_usuario.php',
                    type: 'POST',
                    data: {nickname},
                    success: function(response) {
                        $('#requisitosUser').text(response);
                        $('#requisitosUser').css("display","block");
                        $('#requisitosUser').css("color","red");
                    }
                });
            });
            $('#email').keyup(function() {
                var email = $(this).val();
                $.ajax({
                    url: 'verificar_correo.php',
                    type: 'POST',
                    data: {email},
                    success: function(response) {
                        $('#requisitosEmail').text(response);
                        $('#requisitosEmail').css("display","block");
                        $('#requisitosEmail').css("color","red");
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div class="formulario">
        <form action="confirmationSignup.php" method="POST">
            <div>
                <label for="name" name="labelName" id="labelName">Nombre:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="secondName" name="labelSecondName" id="labelSecondName">Primer apellido:</label>
                <input type="text" name="secondName" id="secondName" required>
            </div>
            <div>
                <label for="lastName" name="labelLastName" id="labelLastName">Segundo apellido:</label>
                <input type="text" name="lastName" id="lastName" required>
            </div>
            <div>
                <label for="email" name="labelMail" id="labelMail">Correo electrónico:</label>
                <input type="text" name="email" id="email" required>  
                <small id="requisitosEmail" style="display: none;">
                    <p>Este correo ya está en uso</p>
                </small>
            </div>
            <div>
                <label for="nickname" name="labelUserName" id="labelUserName">Nombre de usuario:</label>
                <input type="text" name="nickname"  id="nickname" required>
                <small id="requisitosUser" style="display: none;">
                    <p>Este nombre de usuario está en uso</p>
                </small>
            </div>
            <div>
                <label for="createPass" name="labelPass" id="labelPass">Contraseña:</label>
                <input type="password" name="createPass" onkeyup="patronPass(), habilitarSubmit()" id="createPass" required>
                <small id="requisitos" style="display: none;">
                    <ul>
                        <li>Debe tener al menos 8 caracteres.</li>
                        <li>Debe contener al menos 1 letra mayúscula.</li>
                        <li>Debe contener al menos 1 letra minúscula.</li>
                        <li>Debe contener al menos 1 número.</li>
                        <li>Debe contener al menos 1 carácter especial.</li>
                    </ul>
                </small>
            </div>
            <div>
                <label for="createPass" name="labelPass2" id="labelPass2">Repetir contraseña:</label>
                <input type="password" name="repeatPass" onkeyup="passIguales(), habilitarSubmit()" id="repeatPass" required>
                <small id="requisitos2" style="display: none;">
                    <p>Las contraseñas deben ser iguales</p>
                </small>
            </div>
            <input type="submit" id="botonEnviar" disabled value="Crear">
        </form>
        <a href="login.php">¿Ya tienes cuenta?</a>
    </div>
</body>

</html>