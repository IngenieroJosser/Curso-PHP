<?php
    $result = 0;

    for ($i = 1; $i <= 150; $i++) {
        $result += $i;
        echo "<p>La suma consecutiva es: $result</p>". "<br/>". "<br/>";

        if ($i >= 150) {
            echo " ";
        }
    }

    echo "<h1>La suma de los numero del 1 al 100 es: $result</h1>";
?>