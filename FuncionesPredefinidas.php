<?php
    /*
        1. Cadenas (Strings):

        strlen(): Devuelve la longitud de una cadena.
    */

    $cadena = "Hola, mundo!";
    $longitud = strlen($cadena);
    echo "La longitud de la cadena es $longitud"."</br>"."</br>"; // Salida: La longitud de la cadena es 12
// -------------------------------------------------------------------

    /*
        strpos(): Encuentra la posición de la primera aparición de una subcadena en una cadena
    */
    $frase = "Hola, mundo!";
    $posicion = strpos($frase, "mundo");
    echo "La palabra 'mundo' comienza en la posición $posicion"."</br>"."</br>"; // Salida: La palabra 'mundo' comienza en la posición 6
// -------------------------------------------------------------------

    /*
        str_replace(): Reemplaza todas las apariciones de una subcadena por otra en una cadena
    */

    $texto = "Los gatos son animales. Los gatos son adorables."."</br>"."</br>";
    $nuevoTexto = str_replace("gatos", "perros", $texto);
    echo $nuevoTexto; // Salida: Los perros son animales. Los perros son adorables.
// -------------------------------------------------------------------


/*
    2. Números (Numbers):

    abs(): Devuelve el valor absoluto de un número.
*/

    $numero = -5;
    $valorAbsoluto = abs($numero);
    echo "El valor absoluto de $numero es $valorAbsoluto"."</br>"."</br>"; // Salida: El valor absoluto de -5 es 5

// -------------------------------------------------------------------

/*
    round(): Redondea un número al entero más cercano.
 */

    $decimal = 7.3;
    $redondeado = round($decimal);
    echo "El número redondeado es $redondeado"."</br>"."</br>"; // Salida: El número redondeado es 7

// -------------------------------------------------------------------

/*
    rand(): Genera un número entero aleatorio
*/

    $aleatorio = rand(1, 100);
    echo "Número aleatorio entre 1 y 100: $aleatorio"."</br>"."</br>";

// -------------------------------------------------------------------


/*
    3. Fechas y Tiempo (Dates and Time):

    date(): Formatea una marca de tiempo o fecha.
*/

    $fecha = date("Y-m-d H:i:s");
    echo "La fecha actual es: $fecha"."</br>";
// -------------------------------------------------------------------


/*
    strtotime(): Convierte una fecha en una marca de tiempo.
*/

    $fecha = "2023-11-05";
    $marcaTiempo = strtotime($fecha);
    echo "Marca de tiempo de la fecha: $marcaTiempo"."</br>"."</br>";
// -------------------------------------------------------------------


/*
    time(): Devuelve la marca de tiempo actual.
*/

    $marcaTiempoActual = time();
    echo "Marca de tiempo actual: $marcaTiempoActual"."</br>"."</br>";
?>