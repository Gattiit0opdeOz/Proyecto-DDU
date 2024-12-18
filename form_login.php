<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/form_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container" id="main">
        <div class="sign-up">
            <form action="#">
                <h1>Crear Cuenta</h1>
                <p>Usa tu codigo para registrarte</p>
                <input type="text" name="text" placeholder="Nombre" required="">
                <input type="text" name="codigo" placeholder="Codigo" required="">

                
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
                            <option value="">Coordinación General de Patrimonio</option>
                            <option value="">Coordinación General de Servicios a Universitarios</option>
                            <option value="">Coordinación de Transparencia y Archivo General</option>
                            <option value="">Coordinación General de Control Escolar</option>
                            <option value="">Coordinación General de Recursos Humanos</option>
                        </optgroup>

                </select>

                

                <select id="select2" required>
                    <option value="" disabled selected>Selecciona del directorio</option>
                </select>

                <input type="password" name="pswd" placeholder="Contraseña" required="">
                <button>Crear cuenta</button>
            </form>
        </div>

        <div class="sign-in">
            <form action="#">
                <h1>Iniciar Sesion</h1>
                <p>Entra con tu codigo UDG</p>
                <input type="text" name="codigo" placeholder="Codigo" required="">
                <input type="password" name="pswd" placeholder="Contraseña" required="">
                <a href="#">Olvide mi contraseña</a>
                <button>Iniciar Sesion</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Bienvenido de nuevo</h1>
                    <p>Para iniciar sesion usa tu codigo de trabajador</p>
                    <button id="signIn">Iniciar Sesion</button>
                </div>
                <div class="overlay-right">
                    <h1>Hola!</h1>
                    <p>Usa tu codigo de trabajador para registrarte</p>
                    <button id="signUp">Crear cuenta</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const main = document.getElementById('main');

        signUpButton.addEventListener('click', () => {
            main.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            main.classList.remove("right-panel-active");
        });




        

        // Datos de las opciones dependientes
        //-------------------------------------  VICERECTORIA EJECUTIVA -------------------------------------------------
        const opciones = {
            SIUBI: ["Director", 
                    "Secretaría", 
                    "Unidad de Servicios a los Usuarios",
                    "Unidad de Servicios Técnicos",
                    "Unidad de Planeación y Evaluación",
                    "Unidad de Tecnologías de la Información",
                    "Biblioteca Digital y Repositorio Institucional",
                    "Biblioteca Pública del Estado de Jalisco Juan José Arreola",
                    "Biblioteca Iberoamericana Octavio Paz",
                    "Centro Documental de Literatura Iberoamericana Carmen Balcells"
            ],



            CGAI:  ["Coordinador General",
                    "Secretario",
                    "Coordinación de Desarrollo Académico",
                    "Coordinación de Fomento al Desarrollo Integral",
                    "Coordinación de Internacionalización",
                    "Unidad de Lenguas"
            ],



            CGSAIT: ["Coordinador General",
                     "Secretaría", 
                     "Unidad de Presupuesto",
                     "Coordinación de Servicios Generales",
                     "Coordinación de Mejora Regulatoria e Innovación para la Gestión",
                     "Coordinación de Diseño de Proyectos Tecnológicos",
                     "Coordinación de Operaciones, Servicios de Información y Telecomunicaciones",
                     "Coordinación de Sostenibilidad"
            ],

            DFinanzas: ["Director",
                "Secretaria de Dirección de Finanzas",
                "Coordinación de Contabilidad",
                "Coordinación de Salarios y Prestaciones Económicas",
                "Coordinación del Régimen de Pensiones, Jubilaciones y Prestaciones de Seguridad Social",
                "Unidad de Control Interno",
                "Unidad de Ingresos",
                "Unidad de Egresos",
                "Unidad de Tecnologías"
            ],

            CGPE: ["Coordinación General",
                "Secretaría de la Coordinación General",
                "Diseño",
                "Patrimonio",
                "Finanzas",
                "Recursos Humanos",
                "Sistemas y Telecomunicaciones",
                "Oficialía de Partes",
                "Coordinación de Desarrollo Institucional",
                "Unidad de Planeación",
                "Unidad de Estrategias Institucionales",
                "Coordinación de Evaluación",
                "Unidad de Análisis Estratégico",
                "Unidad de Seguimiento y Monitoreo",
                "Unidad de Estadística Institucional",
                "Unidad de Programación y Gestión para Resultados",
                "Unidad de Proyectos y Fondos Externos"
            ],


            CGEDC: ["Coordinación General de Extensión y Difusión Cultural",
                    "Secretaría de la Coordinación General de Extensión y Difusión Cultural",
                    "Unidad de Innovación y Vinculación",
                    "Jefatura de Planeación y Estudios Estratégicos",
                    "Unidad de Proyectos y Estadística",
                    "Unidad de Enlace Institucional",
                    "Jefatura de Finanzas y Auditorías",
                    "Jefatura de Servicios Generales, Logística y Tecnologías",
                    "Jefatura de Administración de la CGEDC",
                    "Jefatura de Recursos Humanos",
                    "Jefatura de Prensa",
                    "Jefatura de Diseño y Multimedia",
                    "Jefatura de Desarrollo y Plataformas en línea",
                    "Coordinación de Música",
                    "Dirección de Orquesta Higinio Ruvalcaba",
                    "Coordinación de Artes Escénicas y Literatura",
                    "Coordinación de Artes Plásticas, Visuales y Digitales",
                    "Coordinación de Extensión y Acción Social",
                    "Unidad de Inclusión",
                    "Unidad de Brigadas Multidisciplinarias",
                    "Unidad de Apoyo a Comunidades Indígenas",
                    "Unidad de Servicio Social",
                    "Dirección del Centro Cultural Diana",
                    "Dirección del Museo de las Artes",
                    "Asistente Dirección del Museo de las Artes",
                    "Unidad de Cultura Infantil y Juvenil",
            ],

            CGIPV: ["Coordinación General",
                    "Secretaría",
                    "Coordinación de Investigación",
                    "Unidad Comunicación y Difusión de la Ciencia",
                    "Unidad de Atención y Fomento a la Investigación",
                    "Coordinación de Posgrado",
                    "Unidad de Certificación y Calidad Educativa",
                    "Unidad de Gestión y Desarrollo",
                    "Coordinación de Transferencia Tecnológica y del Conocimiento",
                    "Unidad de Estudios y Análisis de Propiedad Intelectual",
                    "Unidad de Inversión y Enlace con Sectores de Desarrollo",
                    "Unidad de Centros de Emprendimiento e Innovación"
            ],




        //-------------------------------------  SECRETARÍA GENERAL -------------------------------------------------
            OAG:  ["Abogado General",
                   "Unidad de Protección del Patrimonio Intangible",
                   "Secretaría", 
                   "Coordinación Jurídica", 
                   "Unidad de lo Contencioso", 
                   "Unidad de Atención y Prestación de Servicios Legales", 
                   "Coordinación de Normatividad Universitaria", 
                   "Unidad de Apoyo a Organos Colegiados", 
                   "Unidad de Proyectos de Normatividad Administrativa", 
                   "Unidad de Estatutos y Reglamentos", 
                   "Coordinación de Enlace con la Red", 
                   "Unidad de Capacitación, Investigación y Difusión de la Cultura Jurídica", 
                   "Unidad de Instrumentos Jurídicos", 
                   "Unidad de Asuntos Internacionales", 
            ],


            CGCS: ["Coordinación General",
                   "Asistente",
                   "Secretario de la Coordinación General de Comunicación Social",
                   "Medios",
                   "Coordinación de Prensa y Comunicaciones",
                   "Red de Comunicación Universitaria",
                   "Atención a Medios",
                   "Unidad de Comunicación Interna y Mercadotecnia",
                   "Unidad de Gaceta"
            ]


        };

        function actualizarSegundoSelect() {
            const select1 = document.getElementById("select1");
            const select2 = document.getElementById("select2");
            const seleccion = select1.value;

            // Limpia el segundo select
            select2.innerHTML = "";

            // Agrega la opción predeterminada no seleccionable
            const defaultOption = document.createElement("option");
            defaultOption.value = "";
            defaultOption.textContent = "Selecciona del directorio";
            defaultOption.disabled = true;
            defaultOption.selected = true;
            select2.appendChild(defaultOption);

            // Si hay opciones para la selección actual, las agrega
            if (opciones[seleccion]) {
                opciones[seleccion].forEach(raza => {
                    const option = document.createElement("option");
                    option.value = raza.toLowerCase();
                    option.textContent = raza;
                    select2.appendChild(option);
                });
            }

            // Hacer el segundo select obligatorio
            select2.required = true;
        }
    </script>
</body>
</html>