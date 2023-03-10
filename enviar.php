<?php
    $destino = "ejemplo@email.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $contenido = "nombre: " . $nombre . "\ncorrreo: " . $correo . "\ntelefono: " . $telefono . "\nmensaje " . $mensaje;
    mail($destino,"contacto", $contenido);
?>