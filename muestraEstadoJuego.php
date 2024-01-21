<?php 
if($juego->getPalabraEnCurso() === $juego->getPalabraSecreta()) {
    echo "<img src='img/winner.png' style='height:200px;' />";
} 
else if($juego->getIntentos() === 7){
    echo "<img src='img/perdedor.jpg' style='height:200px;' />";
}
else if($juego->getIntentos() >0) {
    echo "<img src='img/ahorcado_" . $juego->getIntentos() . ".png' style='height:200px;' />";
}
?>