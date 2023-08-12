<?php

// exclusivo para testeas recibimiento de datos del form
print_r($_POST);

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

print("<br> Nombre del usuario: " . $nombre . " email: " . $email . " tel: ". $telefono);


?>