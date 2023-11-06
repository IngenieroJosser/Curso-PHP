<?php
    /*
        Un array multidimensional en PHP es un tipo de array que puede contener otros arrays o valores en sus elementos. 
        Esto te permite organizar y trabajar con datos de una manera más estructurada y jerárquica. 
        Los arrays multidimensionales pueden tener múltiples niveles de profundidad y se utilizan comúnmente para representar tablas, 
        matrices, registros de bases de datos y estructuras de datos más complejas.

        Aquí tienes ejemplos de cómo crear y trabajar con arrays multidimensionales en PHP:

        
        
                    Array Bidimensional:
    */

    // Crear un array bidimensional (matriz)
    $matriz = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    // Acceder a elementos de la matriz
    echo $matriz[0][1]; // Accede al elemento en la primera fila y la segunda columna (valor: 2)



    //    Array Asociativo con Subarrays:

        // Crear un array asociativo con subarrays
    $empleados = array(
        "empleado1" => array("nombre" => "Josser", "edad" => 18),
        "empleado2" => array("nombre" => "María", "edad" => 25),
        "empleado3" => array("nombre" => "Carlos", "edad" => 35)
    );

    // Acceder a elementos de los subarrays
    echo $empleados["empleado1"]["nombre"]; // Accede al nombre del "empleado1" (valor: Juan)


    //             Arrays Multidimensionales Mixtos:

    // Crear un array multidimensional mixto
    $datos = array(
        "nombre" => "Josser",
        "edades" => array(18, 25, 35),
        "direcciones" => array(
            "casa" => "Calle A, Ciudad X",
            "trabajo" => "Calle B, Ciudad Y"
        )
    );

    // Acceder a elementos de los subarrays
    echo $datos["edades"][0]; // Accede a la segunda edad (valor: 25)
    echo $datos["direcciones"]["casa"]; // Accede a la dirección de casa (valor: Calle A, Ciudad X)

?>