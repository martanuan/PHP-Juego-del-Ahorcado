<?php

/* 1. Creamos una class Ahorcado con los atributos(privados) que necesitaremos para el juego. Esta clase definirá el juego:
    -Palabra a adivinar
    -Nº de intentos fallidos que llevamos
    -Letras adivinadas: creamos un Array de las letras que hemos introducido y que pertenecian a la palabras.
    -Palabras disponibles: creamos otro Array con las palabras disponibles que nos dará el juego para jugar.

2. Creamos el constructor del juego. Cuando creamos una instancia del juego con "new" iniciamos un nuevo juego.
    El consstrcutor recibe un array con las palabras disponible del juego, inicia dicho array e invoca a iniciarJuego()

3. Establece una función para iniciar el juego:
    -palabraAleatoria: variable auxiliar que contendrá la palabra secreta con la que jugaremos, seleccionada al azar por array_rand, del array de palabras disponibles para el juego.
    -intentos: lo establecemos en 0
    -letrasAdivinadas: almacenamos en un arraya de booleanos el estado de adivinación de la palabra. Se inicia en false porque comenzamos con la palabra en blanco.

4. Creamos una función para retornar la palabra a adivinar. Al ser variable privada no la podemos consultar directamente.

5. Creamos una función que nos retorne el estado de adivinación de la palabra. Letras acertadas visible, no acertadas aparecerá un _
    Convertimos a arrya la palabra secretra y recorremos cada uno de sus caracteres, se verifica el array de booleanos, true->muestra letra, false->muestra _
    str_split -> convierte string a array









*/


?>