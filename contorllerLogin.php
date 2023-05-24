<?php
$conexion = include 'conexion.php';
session_start();

IngresarUser($_POST['user'], $_POST['pass']);

function IngresarUser($username, $pass)
{
    include 'conexion.php';
    $sentencia = "SELECT * FROM usuarios WHERE Correo LIKE '" . $username . "'  OR Nombre LIKE '" . $username . "' AND Password LIKE '".$pass."'";
   
    $cont = mysqli_query($conexion, $sentencia) or die(mysqli_connect_errno());
    $res = mysqli_fetch_assoc($cont);
    if (!is_null($res)) {

        if (($res['Nombre'] == $username || $res['Correo'] == $username) && $res['Password'] == $pass) {
            $_SESSION['Nombre'] = $res['Nombre'];
            $_SESSION['Id'] = $res['id'];
            $_SESSION['Correo'] = $res['Correo'];
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
                window.location.href = 'log-in.php';
            </script>
<?php
        }
    }
}

?>