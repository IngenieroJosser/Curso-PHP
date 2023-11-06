<?php
    // $contador = 1;

    // while ($contador <= 5) {
    //     echo "Contador: " . $contador . "<br>";
    //     $contador++;
    // }

    // $numero = 20;

    // while ($numero <= 100) {
    //     echo "<h1> $numero </h1>";
    //     $numero++;
    // }

    // EJEMPLO POR PARAMETRO GET

    if (isset($_GET['numero'])) {
        // Cambiar tipo de datos
        $numero = (int)$_GET['numero'];
    } else {
        $numero = 20;
    }

    echo "<h1>Tabla de multiplicar del numero $numero</h1>";

    $contador = 0;

    while($contador <= 10) {
        echo "$numero x $contador = ". ($numero * $contador). "<br/>";
        $contador++;
    }
?>