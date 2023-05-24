<?php
$conexion = include 'conexion.php';
session_start();

IngresarUser($_POST['username'], $_POST['pass']);

function IngresarUser($nombre, $pass)
{
    include 'conexion.php';
    $sentencia = "SELECT * FROM `user` WHERE EMAIL LIKE '" . $nombre . "'  OR NICKNAME LIKE '" . $nombre . "'";
    //conultar sentencia fetch row
    $cont = mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
    $filas = mysqli_fetch_assoc($cont);
    if (!is_null($filas)) {

        if (($filas['NICKNAME'] == $nombre || $filas['EMAIL'] == $nombre) && $filas['PASSWORD'] == $pass && $filas['DESHABILITADO']==0) {
            $_SESSION['user'] = $filas['NICKNAME'];
            $_SESSION['id'] = $filas['ID_USER'];
            $_SESSION['nombre'] = $filas['FIRST_NAME'];
?>
            <script type="text/javascript">
                alert("Sesión iniciada correctamente");
                window.location.href = 'index.php';
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Usuario o contraseña incorrectos");
                window.location.href = 'login.php';
            </script>
<?php
        }
    }
}

?>