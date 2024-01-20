<?php

session_start();

class Ahorcado{

    private $palabraSecreta;
    private $intentos;
    private $letrasAdivinadas = [];
    private $palabrasDisponibles = [];

    public function __construct($palabrasDisponibles){
        $this->palabrasDisponibles = $palabrasDisponibles;
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
            if ($this->letrasAdivinadas[$letras]){
                $palabraAdivinada .= $letra;
            }else {
                $palabraAdivinada .= '_ ';
            }
        }
        return $palabraAdivinada;

































?>