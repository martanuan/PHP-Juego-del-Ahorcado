<?php
class Ahorcado{

    private $palabraSecreta = '';
    private $intentos = 0;
    private $maxIntentos = 0;
    private $letrasAdivinadas = [];
    private $palabrasDisponibles = [];

    public function __construct(){
        $this->palabraSecreta = '';
        $this->intentos = 0;
        $this->maxIntentos = 7;
        $this->letrasAdivinadas = [];
        $this->palabrasDisponibles = ["programacion", "php", "javascript", "factoria", "desarrollo", "fullstack", "logica", "programadoras", "coders", "trabajar"];
        $this->iniciarJuego();
    }

    private function iniciarJuego(){
        $palabraAleatoria = $this->palabrasDisponibles[array_rand($this->palabrasDisponibles)];
        $this->palabraSecreta = strtolower($palabraAleatoria);
        $this->intentos = 0;
        $this->letrasAdivinadas = array_fill_keys(str_split($this->palabraSecreta), false);
    }

    public function getPalabraSecreta(){
        return $this->palabraSecreta;
    }

    public function getPalabraEnCurso(){
        $palabraAdivinada = '';
        foreach (str_split($this->palabraSecreta) as $letra){
            if ($this->letrasAdivinadas[$letra]){
                $palabraAdivinada .= $letra;
            }else {
                $palabraAdivinada .= '_ ';
            }
        }
        return $palabraAdivinada;
    }

    public function getIntentos(){
        return $this->intentos;
    }

    public function getMaxIntentos(){
        return $this->maxIntentos;
    }

    public function intento($letra) {
        $letra = strtolower($letra);

        //Verificamos si la letra ya fue intentada
        if (array_key_exists($letra, $this->letrasAdivinadas) && !$this->letrasAdivinadas[$letra]){
            $this->letrasAdivinadas[$letra] = true;
        }
        //Verificamos si la letra está en la palabra
        if(strpos($this->palabraSecreta, $letra) === false){
            if($this->intentos < $this->maxIntentos);
            $this->intentos++;
        }
    }

    public function juegoTerminado(){
        return ($this->intentos >= $this->maxIntentos) || ($this->getPalabraEnCurso() === $this->palabraSecreta);
    }

}

































?>