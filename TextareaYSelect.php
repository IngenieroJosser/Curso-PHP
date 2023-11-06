<?php
    // 1. Campo de texto (Textarea):
?>

<form action="procesar_formulario.php" method="post">
    <label for="comentario">Comentario:</label>
    <textarea name="comentario" id="comentario" rows="4" cols="50"></textarea>
    <br>
    <input type="submit" value="Enviar">
</form>

<!--
    En este ejemplo, hemos creado un campo de texto llamado "comentario" 
    que permite a los usuarios ingresar texto largo, como un comentario. 
    El atributo rows define el número de filas visibles y 
    el atributo cols define el número de columnas visibles en el área de texto.
--->

<?php
    // 2. Cuadro de selección (Select):
?>

<form action="procesar_formulario.php" method="post">
    <label for="color">Color favorito:</label>
    <select name="color" id="color">
        <option value="rojo">Rojo</option>
        <option value="verde">Verde</option>
        <option value="azul">Azul</option>
        <option value="amarillo">Amarillo</option>
    </select>
    <br>
    <input type="submit" value="Enviar">
</form>


<!--- 
    En este ejemplo, hemos creado un cuadro de selección llamado "color" que permite a los usuarios elegir su color favorito. Los elementos option dentro del cuadro de selección representan las diferentes opciones que los usuarios pueden elegir.
--->

<?php
/*
    Ambos ejemplos son parte de un formulario HTML que se enviaría a un archivo de procesamiento PHP (en este caso, "procesar_formulario.php") cuando se hace clic en el botón "Enviar". El valor seleccionado en el cuadro de selección o el texto ingresado en el campo de texto se enviarían al servidor para su procesamiento.
*/
?>