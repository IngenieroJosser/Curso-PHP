<?php
// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    // Inicializa un array para almacenar mensajes de error
    $errores = array();

    // Validación del nombre
    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio.";
    }

    // Validación del correo electrónico
    if (empty($email)) {
        $errores[] = "El correo electrónico es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo electrónico no es válido.";
    }

    // Verifica si hay errores antes de procesar los datos
    if (empty($errores)) {
        // Procesa los datos del formulario (puede guardar en la base de datos, enviar un correo, etc.)
        // ...

        // Redirige a una página de éxito
        header("Location: exito.php");
        exit();
    }
}
?>
