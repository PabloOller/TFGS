<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dual Speed | Iniciar sesión</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="./js/funciones.js"></script>
</head>

<body>
    <video autoplay loop muted>
        <source src="./vids/video.mp4" type="video/mp4">
    </video>
    <div id="container">
        <div id="bloque1">
            <form action="confirmationLogin.php" method="POST">
                <label for="username" id="labelUser" name="labelUser">Username o correo</label>
                <input type="text" placeholder="Usuario" id="username" required onkeyup="ComprobarCampoVacio()" name="username">
                <label for="pass" id="labelPassword" name="labelPassword">Contraseña: </label>
                <input type="password" placeholder="Contraseña" id="pass" required name="pass">
                <input type="submit" id="botonIngresar" name="botonIngresar" value="Iniciar sesión">
            </form>
        </div>
        <div id="bloque2">
            <h1>Bienvenido</h1>
            <hr>
            <a href="signup.php">¿No eres usuario?</a>
            <a href="forgotpassword.php">¿Has olvidado la contraseña?</a>
            <hr>
            <a href="index.php">Volver</a>
        </div>

    </div>
</body>

</html>