<?php
    /*
        Funciones:

        Una función en PHP se define utilizando la palabra clave function. 
        Puedes especificar los parámetros que acepta la función dentro de los paréntesis. 
        Las funciones pueden devolver un valor utilizando la palabra clave return. 
        Aquí tienes un ejemplo de cómo definir y usar una función que suma dos números:
    */

    function suma($num1, $num2) {
        $resultado = $num1 + $num2;
        return $resultado;
    }
    
    $valor1 = 5;
    $valor2 = 3;
    $suma = suma($valor1, $valor2);
    
    echo "La suma de $valor1 y $valor2 es $suma.";
?>