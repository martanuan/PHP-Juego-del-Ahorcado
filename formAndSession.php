<?php
$nombreJugador = '';
if (isset($_POST['nombreJugador']))
    $_SESSION['nombreJugador'] = $_POST['nombreJugador'];

// Inicializar el juego con la lista de palabras disponibles
if (!isset($_SESSION['ahorcado']) || isset($_POST['reiniciar'])) {
	// $SESSION->te guarda tu partida aunque actualices
    $_SESSION['ahorcado'] = new Ahorcado($palabrasDisponibles); 
    // Cuando invocamos a new, estamos creando una instancia(obejto) de la clase especificada. 
    // Crea el juego con toda su funcionalidad(class Ahorcado)
}

// Recuperamos de la sesión comenzada
$juego = $_SESSION['ahorcado'];

// Procesar el formulario si se envía
// $_POST recupera el name que se tiene el form del html
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['letra'])) {
    $juego->intento($_POST['letra']);
}

?>