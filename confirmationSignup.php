<?php
$conexion = include 'conexion.php';

NuevoUser($_POST['name'], $_POST['secondName'], $_POST['lastName'], $_POST['email'], $_POST['nickname'], $_POST['createPass']);

function NuevoUser($name, $apellido, $apellido2, $email, $nickname, $createPass)
{

    include 'conexion.php';
    echo $sentencia = "INSERT INTO `user`(`FIRST_NAME`, `SECOND_NAME`, `LAST_NAME`, `EMAIL`, `NICKNAME`, `PASSWORD`, `DESHABILITADO`) VALUES ('" . $name . "','" . $apellido . "','" . $apellido2 . "','" . $email . "','" . $nickname . "','" . $createPass . "','FALSE')";
    if (mysqli_query($conexion, $sentencia)) {

?>
        <script type="text/javascript">
            alert("Usuario creado correctamente");
            window.location.href = 'login.php';
        </script>

<?php
    }
}

?>