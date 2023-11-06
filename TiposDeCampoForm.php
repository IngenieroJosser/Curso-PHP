<?php
    /*
        Texto (input type="text): 
        Este campo permite a los usuarios ingresar texto, como nombres, direcciones de correo electrónico, comentarios, etc.
    */
?>
<input type="text" name="nombre" />
//---------------------------------------------------------------------

<?php
/*
    Contraseña (input type="password): 
    Este campo oculta los caracteres ingresados y se utiliza para capturar contraseñas u otro tipo de información sensible.
*/
?>
<input type="password" name="contrasena" />
//---------------------------------------------------------------------

<?php
/*
    Cuadro de selección (select): 
    Los cuadros de selección permiten a los usuarios elegir una opción de una lista desplegable.
*/
?>
<select name="color">
    <option value="rojo">Rojo</option>
    <option value="verde">Verde</option>
    <option value="azul">Azul</option>
</select>
//---------------------------------------------------------------------

<?php
/*
    Botón de radio (input type="radio): 
    Los botones de radio permiten a los usuarios seleccionar una única opción de un grupo de opciones.
*/
?>
<input type="radio" name="sexo" value="masculino" /> Masculino
<input type="radio" name="sexo" value="femenino" /> Femenino
//---------------------------------------------------------------------

<?php
/*
    Casilla de verificación (input type="checkbox): 
    Las casillas de verificación permiten a los usuarios seleccionar una o más opciones de una lista.
*/
?>
<input type="checkbox" name="intereses[]" value="deporte" /> Deporte
<input type="checkbox" name="intereses[]" value="lectura" /> Lectura
<input type="checkbox" name="intereses[]" value="viajes" /> Viajes
//---------------------------------------------------------------------

<?php
/*
    Área de texto (textarea): 
    Este campo permite a los usuarios ingresar texto más largo, como comentarios extensos.
*/
?>
<textarea name="comentario" rows="4" cols="50"></textarea>
//---------------------------------------------------------------------

<?php
/*
    Botón de envío (input type="submit): 
    Este tipo de campo se utiliza para enviar el formulario al servidor una vez que el usuario ha completado los datos.
*/
?>
<input type="submit" value="Enviar" />
