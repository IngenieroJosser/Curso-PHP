<?php
    if (($_GET['nombre']) && ($_GET['edad'])&& ($_GET['fecha_de_nacimiento'])&& ($_GET['a_que_te_dedicas'])&& ($_GET['fecha_de_nacimiento'])&& ($_GET['descripción']) && ($_GET['contraseña'])) {
        echo '<h1>'.$_GET['nombre'].'</h1>';
        echo '<h2>'.$_GET['edad'].'</h2>';
        echo '<h3>'.$_GET['fecha_de_nacimiento'].'</h3>';
        echo '<h4>'.$_GET['a_que_te_dedicas'].'</h4>';
        echo '<h5>'.$_GET['descripción'].'</h5>';
        echo '<h5>'.$_GET['contraseña'].'</h5>';
    } else {
        echo 'Acción no valida al procesar o manipular los datos';
    }
?>