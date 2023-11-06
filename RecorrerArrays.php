<?php
    /*
        Usando for:
        El bucle for se utiliza cuando necesitas controlar el índice del array.
    */

    $frutas = array("manzana", "naranja", "plátano");

    for ($i = 0; $i < count($frutas); $i++) {
        echo $frutas[$i] . "<br>";
    }

    /*
        Usando foreach:
        El bucle foreach es útil para recorrer un array sin preocuparte por los índices.
    */

    $frutas = array("manzana", "naranja", "plátano");

    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }

    /*
        Usando while:
        Puedes recorrer un array usando un bucle while junto con la función current() para acceder a los elementos y next() para avanzar al siguiente.
    */

    $frutas = array("manzana", "naranja", "plátano");

    reset($frutas); // Coloca el puntero en el primer elemento

    while ($fruta = current($frutas)) {
        echo $fruta . "<br>";
        next($frutas); // Avanza al siguiente elemento
    }


    /*
        El bucle foreach es la forma más común y sencilla de recorrer un array en PHP, ya que no necesitas preocuparte por los índices y es más legible. Sin embargo, puedes elegir el método que mejor se adapte a tus necesidades y preferencias.
    */
?>