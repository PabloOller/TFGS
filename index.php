<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dual Speed | Official Website</title>
</head>

<body>
    <h1><span class="fl">D</span>UAL <span class="fl">S</span>PEED</h1>

    <div id="login">
        <?php
        if (!empty($_SESSION["id"])) {
            echo '<p>Bienvenido ' . $_SESSION['nombre'] . '</p>';
            echo '<a href="infoPerfil.php">Perfil</a>';
            echo '<a href="logout.php">Cerrar sesión</a>';
        } else {
            echo '<a href="login.php">Iniciar sesión</a>';
        }
        ?>

    </div>
    <div id="header">
        <a href="music.php"><button> MUSIC </button></a>
        <a href="tour.php"><button> TOUR </button></a>
        <a href="bio.html"><button> BIO </button></a>
        <a href="shop.php"><button> SHOP</button></a>
    </div>
    <div id="newsletter">
        <h2>Suscríbete a la newsletter!</h2>
        <form action="">
            <input type="text" placeholder="someone@example.com">
            <input type="submit" value="Enviar">
        </form>

    </div>
    <footer>
        <div id="booking"><a href="booking.php"></a></div>
        <div id="links">
            <a href="https://instagram.com/alphaskymusik?igshid=YmMyMTA2M2Y=">instagram</a>
            <a href="https://open.spotify.com/artist/3cGqi0QsTRxxsuKsATY6sN?si=yel-5cAXREqJMZkkI8JrpA">spotify</a>
            <a href="https://youtube.com/@alphasky9470">youtube</a>
            <a href="">soundcloud</a>
        </div>
        <div id="copyright">
            <a href="">Política de privacidad</a>
        </div>
    </footer>
</body>

</html>