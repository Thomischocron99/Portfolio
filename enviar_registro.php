<?php
$nombre_registrate = $_POST ['nombre'];
$apellido_registrate = $_POST ['apellido'];
$correo_registrate = $_POST ['correo']; 
$contrasenia_registrate = $_POST ['contrasenia'];
$contrasenia2_registrate = $_POST ['contrasenia2']; 

if($contrasenia_registrate==$contrasenia2_registrate) {  


    
include('conexion.php');

$clave_encriptada = password_hash ($contrasenia_registrate, PASSWORD_DEFAULT, array ('cost'=>4));

mysqli_query ($conexion, "INSERT INTO registro VALUES ('$nombre_registrate', '$apellido_registrate', '$correo_registrate', '$clave_encriptada')");

header("Location: registrate.php?ok");

} else {
    header("Location: index.php?error");
}

?>