<?php
    /*
        Un array asociativo en PHP es un tipo de array que utiliza claves personalizadas en lugar de índices numéricos para acceder a sus elementos.
        Cada elemento de un array asociativo está formado por una clave y un valor, 
        donde la clave es una cadena que identifica el elemento y el valor es la información que deseas almacenar. 
        Los arrays asociativos son útiles cuando necesitas relacionar datos específicos con claves significativas.
    
        Aquí tienes un ejemplo de cómo crear y trabajar con un array asociativo en PHP:
    */

    // Crear un array asociativo
    $persona = array(
        "nombre" => "Juan",
        "edad" => 30,
        "ciudad" => "Madrid"
    );

// Acceder a elementos del array por clave
    echo "Nombre: " . $persona["nombre"] . "<br>"; // Salida: Nombre: Juan
    echo "Edad: " . $persona["edad"] . "<br>"; // Salida: Edad: 30
    echo "Ciudad: " . $persona["ciudad"] . "<br>"; // Salida: Ciudad: Madrid

// Modificar un valor
    $persona["edad"] = 31;

// Añadir un nuevo elemento
    $persona["profesion"] = "Programador";

// Eliminar un elemento
    unset($persona["ciudad"]);

// Recorrer el array asociativo
    foreach ($persona as $clave => $valor) {
        echo "$clave: $valor <br>";
    }
?>