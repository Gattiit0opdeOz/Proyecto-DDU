<?php
	session_start();
	// Verifica si hay un mensaje en la variable de sesión
	if (isset($_SESSION['mensaje'])) {
		// Genera un script de JavaScript para mostrar el mensaje
		echo "<script>alert('{$_SESSION['mensaje']}');</script>";
		 unset($_SESSION['mensaje']);
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="icon" href="img/logo_icon.ico" type="image/x-icon">
	<title>Pazdata | Inicio de Sesión</title>	
	<link rel="stylesheet" href="css/form_login.css">
</head>


<body>
	<div class="container-form register">
		<div class="information">
			
			<div class="info-childs">		
				<h2>Bienvenido</h2>
				<p>Inicia sesión con tus credenciales</p>
				<input type="button" value="Iniciar Sesión" id="sign-in">
			</div>
		</div>
		
		<div class="form-information">
			<div class="form-information-childs">
				<h2>Crea una cuenta</h2>
				<p>Completa el siguiente formulario</p>

				<p class="error"></p>
				
				<form class="form" method="post" action="registro.php"> 
    
                
					<label>
						<i class='bx bx-user'></i>
						<input type="text" name="nombre" placeholder="Nombre" required="">
					</label>

					<label>
						<i class='bx bx-group'></i>
						<input type="text" placeholder="Codigo de trabajador" id="codigotranajador" name="codigotranajador" required>
					</label>

					<label>
						<i class='bx bx-envelope' ></i>
						<input type="email" placeholder="Correo Electrónico" id="email" name="email" required>
					</label>

					<label>
						<i class='bx bx-lock-alt' ></i>
						<input type="password" placeholder="Contraseña" id="password" name="password" required>
					</label>

					<label>
						<i class='bx bx-buildings'></i>
						<input type="text" placeholder="Dependencia" id="depe" name="depe" required>
					</label>

					<label>
						<i class='bx bx-briefcase-alt'></i>
						<input type="text" placeholder="Cargo" id="cargo" name="cargo" required>
					</label>


					<select name="rol" id="rol">
						<option value="" disabled selected>Selecciona el rol del usuario</option>
						<option value="administrador">Administrador</option>
						<option value="designado">Enlace Designado</option>
						<option value="usuario">Usuario General</option>
						<option value="desarrollador">Desarrolador y Soporte Tecnico &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>

					</select>


					<input type="submit" value="Registrarse">
				</form>
			</div>
		</div>
	</div>

	<div class="container-form login hide">
		<div class="information">
			<div class="info-childs">
				<h2>Bienvenido nuevamente</h2>
				<p>Si aun no tienes una cuenta crea una facilmente</p>
				<input type="button" value="Registrarse" id="sign-up">
			</div>
		</div>
		

		<div class="form-information">
			<div class="form-information-childs">
				<h2>Iniciar Sesión</h2>
				<p>Escribe tus credenciales</p>

				<form class="form" method="post" action="login.php">

					<label>
						<i class='bx bx-envelope' ></i>
						<input type="email" placeholder="Correo Electrónico" id="correo" name="correo" required>
					</label>

					<label>
						<i class='bx bx-lock-alt' ></i>
						<input type="password" placeholder="Contraseña" id="contrasena" name="contrasena" required>
					</label>

					<a class="olvidarpass" href="olvidar_contrasena.php">Olvidé mi contraseña</a>
					
					<input type="submit" value="Iniciar Sesión">
				</form>
			</div>
		</div>
	</div>
		
<script src="script/script_login.js"></script>

       
    
</body>
</html>