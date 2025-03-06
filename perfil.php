<!-- Este archivo es la pagina del perfil, donde el usuario puede consultar sus datos-->


<?php
session_start(); // Asegúrate de que la sesión esté iniciada
if ($_SESSION['tipo_usuario'] != 'administrador') {
    header("Location: form_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">

    <link href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css" rel="stylesheet">

    <title>PazData | Perfil</title>
</head>
<body>


<section class="container">
        <header>
        <div class="header-left">
            <!-- <img src="img/logo_pazdata.png" alt="Logo Pazdata" class="header-logo"> --> Pazdata Logo
        </div>
        <div class="header-right">
            <a href="manual_usuario.php" class="icon"><i class='bx bx-book'></i></a>
            <a href="#" class="icon"><i class='bx bx-bell'></i></a>
            <a href="perfil.php" class="icon"><i class='bx bx-user'></i></a>
        </div>
        </header>

        <aside>
            <ul class="menu">
                <li><a href="admin_dashboard.php">Inicio</a></li>
                <li><a href="registrar.php">Registrar</a></li>
                <li><a href="solicitudes_revision.php">Solicitudes de Revisión</a></li>
                <li><a href="informes.php">Informes</a></li>
                <li><a href="normatividad.php">Normatividad</a></li>
            </ul>
        </aside>

        <main>
            <div class="main-container">
                
            </div>      
        </main>

        <footer>footer</footer>
        
    </section>

</body>
</html>