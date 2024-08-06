<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $profesor = $_POST['profesor'];
    $materia = $_POST['materia'];
    $calificacion = $_POST['calificacion'];
    $comentarios = $_POST['comentarios'];

    $to = "2303281@utmir.edu.mx";
    $subject = "Evaluación del Profesor";
    $message = "Nombre del estudiante: $nombre\n";
    $message .= "Correo Institucional: $email\n";
    $message .= "Nombre del profesor: $profesor\n";
    $message .= "Materia: $materia\n";
    $message .= "Calificación del profesor: $calificacion\n";
    $message .= "Comentarios adicionales: $comentarios\n";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
