<?php

include("ahorcadoClass.php");
session_start();

include("formAndSession.php");

// Verificar si se ha adivinado la palabra o se han agotado los intentos
$juegoTerminado = $juego->juegoTerminado();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Juego del Ahorcado</title>
</head>
<body>

<?php
if($juego->getIntentos() !==$juego->getMaxIntentos() ||
$juego->getPalabraEnCurso() == $juego->getPalabraSecreta()){ ?>
    <h1><?php echo $_SESSION["nombreJugador"] ?> vas a jugar al Ahorcado</h1>
<?php } ?>
<?php
if ($juegoTerminado) {
    include("endgame.php");
?>
    <form method="post" action="">
        <button type="button" name="reiniciar" onclick='window.location.href="index.php"'>Reiniciar Juego</button>
    </form>
<?php 
} else {
?>
    <p>Palabra a adivinar: <?php echo $juego->getPalabraEnCurso(); ?></p>
    <p>Intentos fallidos: <?php echo $juego->getIntentos(); ?>/7</p>

    <form method="post" action="">
        <label for="letra">Introduce una letra:</label>
        <input type="text" id="letra" name="letra" maxlength="1" pattern="[a-zA-ZñÑ]" autofocus><!--  required -->
        <button type="submit">Adivinar</button>
        <button type="button" name="reiniciar" onclick='window.location.href="index.php"'>Reiniciar Juego</button>
    </form>
<?php 
}
?>
<br/>
<?php
include("muestraEstadoJuego.php");
?>

</body>
</html>