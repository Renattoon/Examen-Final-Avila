<?php
    //RECIBIR DATOS POR POST Y GUARDARLOS EN VARIABLES
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    //DATOS PARA EL CORREO
    $destinatario = "renaavila12@gmail.com";
    $asunto = "Solicitud de Inscripcion en Taller de Verano - Taller de parkour"

    $carta = "De: $nombre \n";
    $carta .= "Whatsapp: $telefono \n";
    $carta .= "Correo: $correo \n";
    $carta .= "Mensaje: $mensaje";

    //Enviando Mensaje
    mail($destinatario, $asunto, $carta);
    header('Location:mensaje-enviado.php');
?>