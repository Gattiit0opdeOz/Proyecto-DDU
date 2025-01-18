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
	<title>Shared Reads | Inicio de Sesión</title>	
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
						<i class='bx bx-phone'></i>
						<input type="number" placeholder="Teléfono" id="tel" name="tel" required>
					</label>

					<select id="select1" onchange="actualizarSegundoSelect()" required>
                    <option value="" disabled selected> Selecciona tu dependencia</option>
                        <optgroup label="Vicerrectoría Ejecutiva">
                            <option value="SIUBI">Sistema Universitario de Bibliotecas</option>
                            <option value="CGAI">Coordinación General Académica y de Innovación</option>
                            <option value="CGSAIT">Coordinación General de Servicios Administrativos  
                            e Infraestructura Tecnológica</option>
                            <option value="DFinanzas">Dirección de Finanzas</option>
                            <option value="CGPE">Coordinación General de Planeación y Evaluación</option>
                            <option value="CGEDC">Coordinación General de Extensión y Difusión Cultural</option>
                            <option value="CGIPV">Coordinación General de Investigación, Posgrado y Vinculación</option>
                        </optgroup>

                        <optgroup label="Secretaría General">
                            <option value="OAG">Oficina de la Abogacía General</option>
                            <option value="CGCS">Coordinación General de Comunicación Social</option>
                            <option value="CGP">Coordinación General de Patrimonio</option>
                            <option value="">Coordinación General de Servicios a Universitarios</option>
                            <option value="">Coordinación de Transparencia y Archivo General</option>
                            <option value="">Coordinación General de Control Escolar</option>
                            <option value="">Coordinación General de Recursos Humanos</option>
                        </optgroup>

                </select>
					
                <select id="select2" required>
                    <option value="" disabled selected>Selecciona del directorio</option>
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