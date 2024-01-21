<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del Ahorcado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenid@ al Juego del Ahorcado</h1>
    <img class="portada" src="img/portada.jpg" alt="portadaJuego">

    <div class="welcome">
        <form method= "POST" action="game.php">
            Introduce tu nombre:
            <input type="hidden" name="reiniciar" />
            <input class="nombreJugador" type="text" name="nombreJugador" autocomplete="off" />
            <input class="btnJuego" type="submit" value="Vamos a jugar" />
        </form>
    </div>
</body>
</html>