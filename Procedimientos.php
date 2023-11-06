<?php
    /*
        Procedimientos:

        Un procedimiento en PHP es similar a una función, pero no devuelve un valor. 
        Se utiliza principalmente cuando deseas realizar una serie de acciones sin necesidad de que la función devuelva un resultado. 
        Aquí hay un ejemplo de un procedimiento que muestra un mensaje:
    */

    function mostrarMensaje($mensaje) {
        echo $mensaje;
    }
    
    $miMensaje = "Hola, mundo!";
    mostrarMensaje($miMensaje);
    
?>  