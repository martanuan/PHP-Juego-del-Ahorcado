<?php
if($juego->getPalabraEnCurso() === $juego->getPalabraSecreta()) {
    echo "<p>Enhorabuena!!! <strong>" . strtoupper($juego->getPalabraSecreta()) . "</strong> era la palabra oculta.<p/>";
} else {
    echo "<p>El juego ha terminado. La palabra era: <strong>" . strtoupper($juego->getPalabraSecreta()) . "</strong></p>";
}
?>