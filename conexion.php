<!-- Este archivo es la conexion de la base de datos -->


<?php
    $servidor = "localhost"; // Cambia esto si tu base de datos está en otro servidor
    $usuario = "root"; // Usuario de la base de datos (cámbialo si es diferente)
    $contrasena = ""; // Contraseña del usuario (déjala vacía si no tiene)
    $base_datos = "pazdata"; // Nombre de la base de datos

    // Crear conexión
    $conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Establecer la codificación de caracteres a UTF-8
    $conexion->set_charset("utf8");
?>