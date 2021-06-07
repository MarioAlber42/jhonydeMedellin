<?php 
$destino = "marbertoalmar2000@gmail.com";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo electrónico: " . $email . "\nTeléfono " . $telefono . "\nMensaje" . $mensaje;

mail($destino,"Contacto del sitio web", $contenido);
header("Location:enviado/index.html");
?>