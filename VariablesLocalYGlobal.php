<?php
    // Variables Locales Y Globales

    //Locales: Las que se definen dentro de una funcion y se utilizan si o si dentro de la función


    // Globales: Las que pueden utilizarse fuera de la función


    // EJEMPLO CON VARIABLE GLOBAL
    $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

    echo $frase;

    function holaMundo () {
        // Se le pone antes de la variable global para que php que necesito una variable global
        global $frase;
    }

    holaMundo();
?>