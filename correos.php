<?php 
    $destino =  "rolando_osuna@live.com.mx";
    $nombre =  $_POST["nombre"];
    $correo =  $_POST["correo"];
    $mensaje =  $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    
?>