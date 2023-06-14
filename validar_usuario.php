<?php
    session_start();
    $correo_ingreso = $_POST ['correo'];
    $contrasenia_ingreso = $_POST ['contrasenia'];

    include('conexion.php');

    $consultar_usuario = mysqli_query($conexion, "SELECT correo, contrasenia FROM registro WHERE correo='$correo_ingreso'");

    if(mysqli_num_rows($consultar_usuario)==0) {
        header("Location: registrate.php?error_ingreso");
    } else {
        $contrasenia_tabla = mysqli_fetch_assoc($consultar_usuario);

        $validar = password_verify($contrasenia_ingreso, $contrasenia_tabla ['contrasenia']);

        if($validar) {
            $_SESSION ['cliente'] = $correo_ingreso;
            header("Location: menu.php");
        } else {
            header("Location: registrate.php?error_validar");
        }
    }
?>