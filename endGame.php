<?php
if($juego->getPalabraEnCurso() === $juego->getPalabraSecreta()) {
    echo "Enhorabuena!!! <strong>" . strtoupper($juego->getPalabraSecreta()) . "</strong> era la palabra oculta.<br/>";
} else {
    echo "<p>El juego ha terminado. La palabra era: <strong>" . strtoupper($juego->getPalabraSecreta()) . "</strong></p>";
}
?>