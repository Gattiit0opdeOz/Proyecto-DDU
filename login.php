<?php
include 'conexion.php';
session_start(); // Iniciar la sesión si no lo has hecho

// Verifica si hay un mensaje en la variable de sesión
if (isset($_SESSION['mensaje'])) {
    // Genera un script de JavaScript para mostrar el mensaje
    echo "<script>alert('{$_SESSION['mensaje']}');</script>";
    unset($_SESSION['mensaje']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = trim($_POST["correo"]);
    $contrasena = trim($_POST["contrasena"]);

    if (!empty($correo) && !empty($contrasena)) {
        // Consulta preparada
        $sql = "SELECT id, nombre, correo_electronico, contrasena, tipo_usuario FROM usuarios WHERE correo_electronico = ?";
        if ($stmt = $conexion->prepare($sql)) {
            $stmt->bind_param("s", $correo);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                $stmt->bind_result($id, $nombre, $correo_db, $contrasena_hash, $tipo_usuario);
                $stmt->fetch();

                // Verificar la contraseña
                if (password_verify($contrasena, $contrasena_hash)) {
                    $_SESSION["id"] = $id;
                    $_SESSION["nombre"] = $nombre;
                    $_SESSION["correo"] = $correo_db;
                    $_SESSION["tipo_usuario"] = $tipo_usuario;

                    // Redirección según el tipo de usuario
                    if ($tipo_usuario === "administrador") {
                        header("Location: admin_dashboard.php");
                    } elseif ($tipo_usuario === "designado") {
                        header("Location: designado_dashboard.php");
                    } elseif ($tipo_usuario === "desarrollador") {
                        header("Location: desarrollador_dashboard.php");
                    } else {
                        header("Location: usuario_dashboard.php");
                    }
                    exit();
                } else {
                    // Almacenar error en la sesión
                    $_SESSION['mensaje'] = "La contraseña ingresada no es correcta";
                    header("Location: form_login.php");
                    exit();
                }
            } else {
                // Almacenar error en la sesión
                $_SESSION['mensaje'] = "El correo no se encuentra registrado";
                header("Location: form_login.php");
                exit();
            }
            $stmt->close();
        }
    } else {
        // Almacenar error en la sesión
        $_SESSION['error'] = "Todos los campos son obligatorios.";
        header("Location: form_login.php");
        exit();
    }
    $conexion->close();
}
?>
