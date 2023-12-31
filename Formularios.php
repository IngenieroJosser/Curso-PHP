<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Ejemplo</title>
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form method="POST" action="ValidorFormulario.php" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br>
        <input type="image" id="imagen" name="imagen">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera los datos del formulario
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];
        $image = $_POST["imagen"];

        // Realiza alguna acción con los datos (por ejemplo, enviar un correo)
        // En este ejemplo, simplemente mostraremos los datos enviados
        echo "Nombre: $nombre<br>";
        echo "Correo Electrónico: $email<br>";
        echo "Mensaje: $mensaje<br>";
        echo "imagen: $image<br>";
    } else {
        echo "Acceso no permitido.";
    }
?>
