<!-- Este archivo es la pagina de inicio de los ADMINISTRADORES -->


<?php
session_start(); // Asegúrate de que la sesión esté iniciada
if ($_SESSION['tipo_usuario'] != 'administrador') {
    header("Location: form_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PazData</title>
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css" rel="stylesheet">

</head>
<body>

    <?php include('sidebar.php'); ?> <!-- Esta linea manda a traer el header y el menu lateral -->

    <!-- Contenido Principal -->
    <main class="content">
        <h1>Bienvenido al Dashboard de Administrador</h1><br>
        <h1>¡Les damos la bienvenida a PAZDATA</h1>

        <p class="mensaje-bienvenida">
            PAZDATA es el Sistema de Gestión de Información (SGI) diseñado para dar seguimiento y fortalecer la agenda de trabajo derivada de la Política Institucional de Cultura de Paz de la Universidad de Guadalajara.
            A través de esta plataforma, cada enlace designado puede registrar, organizar y analizar las actividades implementadas en su dependencia y en la Red Universitaria para fortalecer cada una de las líneas de trabajo de la Agenda. 
        </p>


        <p class="mensaje-bienvenida">
            Este sistema facilita la generación de reportes y la toma de decisiones basada en evidencia, permitiendo medir el impacto de las acciones y garantizar su continuidad en beneficio de nuestra comunidad universitaria.
        </p>

        <p class="mensaje-bienvenida">
            Tu compromiso y participación son clave para consolidar una nuestra Politica Institucional de Cultura de Paz  y con ello fortalecer  nuestra institución.
        </p>
        
        <br>
        <p class="mensaje-bienvenida"> ¡Gracias por ser parte de este esfuerzo!</p>

    </main>


    

    <script src="script/admin_dashboard.js"></script>
</body>
</html>