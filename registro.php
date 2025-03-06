<!-- Este archivo lo que hace es recibir los datos del formulario y subirlos a la BD -->

<?php
require 'conexion.php'; // Incluye la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y limpiar los datos del formulario
    $nombre = trim($_POST["nombre"]);
    $codigo_trabajador = trim($_POST["codigotranajador"]);
    $correo_electronico = trim($_POST["email"]);
    $contrasena = trim($_POST["password"]);
    $dependencia = trim($_POST["depe"]);
    $cargo = trim($_POST["cargo"]);
    $tipo_usuario = trim($_POST["rol"]);

    // Validar que no haya campos vacíos
    if (empty($nombre) || empty($codigo_trabajador) || empty($correo_electronico) || empty($contrasena) || empty($dependencia) || empty($cargo) || empty($tipo_usuario)) {
        die("Error: Todos los campos son obligatorios.");
    }

    // Hash de la contraseña para mayor seguridad
    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Verificar si el código de trabajador o el correo ya están registrados
    $sql_check = "SELECT id FROM usuarios WHERE codigo_trabajador = ? OR correo_electronico = ?";
    $stmt_check = $conexion->prepare($sql_check);
    $stmt_check->bind_param("ss", $codigo_trabajador, $correo_electronico);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        die("Error: El código de trabajador o correo ya están registrados.");
    }
    $stmt_check->close();

    // Insertar el usuario en la base de datos
    $sql_insert = "INSERT INTO usuarios (nombre, codigo_trabajador, correo_electronico, contrasena, dependencia, cargo, tipo_usuario) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert = $conexion->prepare($sql_insert);
    $stmt_insert->bind_param("sssssss", $nombre, $codigo_trabajador, $correo_electronico, $contrasena_hash, $dependencia, $cargo, $tipo_usuario);

    if ($stmt_insert->execute()) {
        $_SESSION['mensaje'] = "Usuario registrado correctamente";
        header("Location: form_login.php");
    } else {
        $_SESSION['mensaje'] = "Error al registrar el usuario";
        header("Location: form_login.php");
    }

    $stmt_insert->close();
    $conexion->close();
} else {
    echo "Acceso no autorizado.";
}
?>
