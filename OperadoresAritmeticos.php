<?php
    // OPERADORES ARIMETICOS


    //   suma y resta
    $num1 = 10;
    $num2 = 5;

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;

    echo "La suma de $num1 y $num2 es $suma.<br>";
    echo "La resta de $num1 y $num2 es $resta.";



    //   multiplicación y división

    $num1 = 8;
    $num2 = 4;

    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo "El producto de $num1 y $num2 es $multiplicacion.<br>";
    echo "La división de $num1 entre $num2 es $division." . "<br>" . "<br>";


    //   Calculadora de Interés Simple
    
    $principal = 1000;
    $tasa_interes = 0.05;
    $periodo_anos = 3;

    $interes_simple = $principal * $tasa_interes * $periodo_anos;

    echo "El interés simple es $interes_simple." . "<br>" . "<br>";


    //   Conversión de Grados Celsius a Fahrenheit

    $grados_celsius = 25;

    $grados_fahrenheit = ($grados_celsius * 9/5) + 32;

    echo "$grados_celsius grados Celsius son equivalentes a $grados_fahrenheit grados Fahrenheit." . "<br>" . "<br>";


    //   Área de un Triángulo

    $base = 6;
    $altura = 4;

    $area = ($base * $altura) / 2;

    echo "El área del triángulo es $area unidades cuadradas." . "<br>" . "<br>";



    //   Conversión de Moneda:

    $cantidad_original = 100; // Cantidad en moneda original
    $tasa_cambio = 1.2;      // Tasa de cambio a la nueva moneda

    $cantidad_convertida = $cantidad_original * $tasa_cambio;

    echo "$cantidad_original monedas originales son equivalentes a $cantidad_convertida nuevas monedas." . "<br>" . "<br>";



    //   Edad Promedio

    $edad1 = 25;
    $edad2 = 30;
    $edad3 = 35;

    $promedio = ($edad1 + $edad2 + $edad3) / 3;

    echo "El promedio de edades es $promedio años." . "<br>" . "<br>";




    //   Calcular Descuento

    $precio_original = 100;
    $porcentaje_descuento = 20;

    $descuento = $precio_original * ($porcentaje_descuento / 100);
    $precio_final = $precio_original - $descuento;

    echo "El precio final después de un $porcentaje_descuento% de descuento es $precio_final." . "<br>" . "<br>";



    // Calculadora de IMC (Índice de Masa Corporal)


    $peso_kg = 70;
    $altura_metros = 1.75;

    $imc = $peso_kg / ($altura_metros * $altura_metros);

    echo "Tu IMC es $imc.<br>" . "<br>";

    if ($imc < 18.5) {
        echo "Tienes bajo peso.";
    } elseif ($imc < 24.9) {
        echo "Tienes un peso normal.";
    } elseif ($imc < 29.9) {
        echo "Tienes sobrepeso.";
    } else {
        echo "Tienes obesidad.";
    }




    // Número Par o Impar


    $numero = 7;

    if ($numero % 2 == 0) {
        echo "$numero es un número par." . "<br>" . "<br>";
    } else {
        echo "$numero es un número impar." . "<br>" . "<br>";
    }
?>