<?php
$nombre_formu = $_POST ['nombre'];
$apellido_formu = $_POST ['apellido'];
$correo_formu = $_POST ['correo'];
$consulta_formu = $_POST ['consulta'];

include('conexion.php');

mysqli_query ($conexion, "INSERT INTO contacto VALUES (DEFAULT, '$nombre_formu', '$apellido_formu', '$correo_formu', '$consulta_formu')");

header("Location: contacto.php?ok");
?>