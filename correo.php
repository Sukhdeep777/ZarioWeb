<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $residencia = $_POST['residencia'];
    $problema = $_POST['problema'];

    // Dirección de correo a donde se enviarán los datos
    $destinatario = "herassanchezjosemiguel@fpllefia.com"; // Cambia esto por tu correo
    $asunto = "Solicitud de Asistencia al Cliente";
    
    // Cuerpo del mensaje
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Correo: $correo\n";
    $mensaje .= "Residencia: $residencia\n";
    $mensaje .= "Problema: $problema\n";
    
    // Encabezados del correo
    $headers = "From: $correo";

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "Gracias por contactarnos. Tu solicitud ha sido enviada.";
    } else {
        echo "Hubo un error al enviar tu solicitud. Por favor, intenta de nuevo.";
    }
}
?>
