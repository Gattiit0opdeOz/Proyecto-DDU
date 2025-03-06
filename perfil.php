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
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons/css/boxicons.min.css" rel="stylesheet">

    <title>PazData | Perfil</title>
</head>
<body>

<?php include('sidebar.php'); ?> <!-- Esta linea manda a traer el header y el menu lateral -->

<main class="content">
    <section class="container">

    
    
    </section>

   
</main>


</body>
</html>