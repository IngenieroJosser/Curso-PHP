<?php
    function sum($num1, $num2) {
        echo '<h1>La suma de dos números </h1>' . "<br/>" . "<br/>";

        $result = $num1 + $num2;
        echo '<h1>La suma de estos números es: ' . $result . '</h1>' . "<br/>" . "<br/>";
    }

    // INVOCAR FUNCION
    sum(23, 50);
?>
