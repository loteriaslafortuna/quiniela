<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos enviados desde el formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $partido1 = $_POST['partido1'];
    $partido2 = $_POST['partido2'];

    // Recopilar los datos en un mensaje
    $mensaje = "Nombre: " . $nombre . "\n";
    $mensaje .= "Correo: " . $email . "\n";
    $mensaje .= "Partido 1: " . $partido1 . "\n";
    $mensaje .= "Partido 2: " . $partido2 . "\n";
    // Agregar más campos según sea necesario

    // Dirección del destinatario (correo donde recibirás la quiniela)
    $destinatario = "info@loteriaslafortuna.com";
    $asunto = "Quiniela Enviada desde el Formulario";

    // Encabezados del correo (quién está enviando el correo)
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "¡Quiniela enviada correctamente!";
    } else {
        echo "Hubo un error al enviar la quiniela.";
    }
} else {
    // Si el formulario no fue enviado, redirigir al formulario
    header("Location: index.html");
    exit();
}
?>
