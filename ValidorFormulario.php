<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];

        // Puedes utilizar los datos como desees, por ejemplo, mostrarlos
        echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
        echo "Correo Electrónico: " . htmlspecialchars($email) . "<br>";
        echo "Mensaje: " . htmlspecialchars($mensaje) . "<br>";
    } else {
        echo "Acceso no permitido.";
    }
?>
