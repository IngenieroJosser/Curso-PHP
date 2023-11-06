<?php
    function Addition($num1, $num2) {
        echo '<h1>La suma de dos números </h1>' . "<br/>";

        $result = $num1 + $num2;
        echo '<span>La suma de estos números es: ' . $result . '</span>' . "<br/>" . "<br/>";
    }

    function Subtraction($num1, $num2) {
        echo '<h1>La resta de dos números </h1>' . "<br/>";

        $result = $num1 - $num2;
        echo '<span>La resta de estos números es: ' . $result . '</span>' . "<br/>" . "<br/>";
    }

    function Multiplication($num1, $num2) {
        echo '<h1>La mulplicación de dos números </h1>' . "<br/>";

        $result = $num1 * $num2;
        echo '<span>La multiplicación de estos números es: ' . $result . '</span>' . "<br/>" . "<br/>";
    }

    function Division($num1, $num2) {
        echo '<h1>La división de dos números </h1>' . "<br/>";

        $result = $num1 + $num2;
        echo '<span>La división de estos números es: ' . $result . '</span>' . "<br/>" . "<br/>";
    }

    // INVOCAR FUNCION
    Addition(23, 50);
    Subtraction(23, 50);
    Multiplication(23, 50);
    Division(23, 50);
?>