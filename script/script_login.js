const btnSignIn = document.getElementById("sign-in"),
      btnSignUp = document.getElementById("sign-up"),
      formRegister = document.querySelector(".register"),
      formLogin = document.querySelector(".login");

btnSignIn.addEventListener("click", e =>{
    formRegister.classList.add("hide");
    formLogin.classList.remove("hide");
})

btnSignUp.addEventListener("click", e =>{
    formRegister.classList.remove("hide");
    formLogin.classList.add("hide");
})


 // Datos de las opciones dependientes

 //-------------------------------------  Honorable Consejo General Universitario  -------------------------------------------------
        
        const opciones = {
            DDU:   ["Defensor de los Derechos Universitarios",
                    "Secretario de la Defensoría",
                    "Primera Visitaduría",
                    "Segunda Visitaduría",
                    "Tercera Visitaduría",
                    "Representante de la DDU en CUAAD - Arte,",
                    "Representante de la DDU en CUCBA - Ciencias",
                    "Representante de la DDU en CUALTOS - Centro",
                    "Representante de la DDU en CUCOSTA - Puerto",
                    "Representante de la DDU en CUCHAPALA - Centro Universitario de Chapala",
                    "Representante de la DDU en CUCS - Ciencias de la Salud",
                    "Representante de la DDU en CUCIENEGA - Centro Universitario de la Ciénega",
                    "Representante de la DDU en CULAGOS - Lagos de Moreno, San Juan de los Lagos",
                    "Representante de la DDU en CUNORTE - Colotlán",
                    "Representante de la DDU en CUSUR - Ciudad Guzmán",
                    "Representante de la DDU en CUTONALÁ -Tonalá",
                    "Representante de la DDU en CUVALLES - Ameca",
                    "Representante de la DDU en SEMS - Sistema de Educación Media Superior",
                    "Asistente",
                    "Responsable de Orientación y Atención Psicológica",
                    "Responsable de la Clínica Multidisciplinaria en Derechos Humanos",
                    "Responsable del Área de Innovación y Proyectos Especiales",
                    "Responsable de Vinculación y Seguimiento",
                    "Coordinadora de Finanzas"
            ],

//-------------------------------------  VICERECTORIA EJECUTIVA -------------------------------------------------
            SIUBI: ["Director del Sistema Universitario de Bibliotecas de la UDG", 
                    "Secretaría del Sistema Universitario de Bibliotecas de la UDG", 
                    "Jefa de Unidad de Servicios a los Usuarios",
                    "Jefe de Unidad de Servicios Técnicos",
                    "Jefe de Unidad de Tecnologías de la Información",
                    "Jefa de la Biblioteca Digital y del Repositorio Institucional",
                    "Director de la Biblioteca Pública del Estado de Jalisco Juan José Arreola",
                    "Directora de la Biblioteca Iberoamericana Octavio Paz",
                    "Coordinadora del Centro Documental de Literatura Iberoamericana Carmen Balcells"
            ],



            CGAI:  ["Coordinadora General Académica y de Innovación",
                    "Secretaria de Coordinación General Académica y de Innovación",
                    "Coordinador de Desarrollo Académico",
                    "Coordinadora de Fomento al Desarrollo Integral",
                    "Coordinadora de Internacionalización",
                    "Jefa de Unidad de Lenguas"
            ],



            CGSAIT: ["Coordinadora General de Servicios Administrativos e Infraestructura Tecnológica",
                     "Secretario de Coordinación General de Servicios Administrativos e Infraestructura Tecnológica", 
                     "Jefe de la Unidad de Presupuesto",
                     "Coordinador de Servicios Generales",
                     "Jefe de la Unidad de Adquisiciones",
                     "Jefe de la Unidad de Costos y Presupuestos",
                     "Jefe de la Unidad de Proyectos",
                     "Jefe de la Unidad de Supervisión",
                     "Jefe de la Unidad de Conservación de Entornos de Inmuebles de la Administración General",
                     "Jefe de la Unidad de Planeación y Evaluación de Infraestructura",
                     "Coordinadora de Mejora Regulatoria e Innovación para la Gestión",
                     "Coordinador de Diseño de Proyectos Tecnológicos",
                     "Coordinador de Operaciones, Servicios de Información y Telecomunicaciones",
                     "Coordinadora de Sostenibilidad"
            ],

            DFinanzas: ["Director de Finanzas",
                "Secretaria de Dirección de Finanzas",
                "Coordinación de Contabilidad",
                "Coordinación de Salarios y Prestaciones Económicas",
                "Coordinación del Régimen de Pensiones, Jubilaciones y Prestaciones de Seguridad Social",
                "Unidad de Control Interno",
                "Unidad de Ingresos",
                "Unidad de Egresos",
                "Unidad de Tecnologías"
            ],

            CGPE: ["Coordinadora General",
                "Apoyo Técnico del(la) Coordinador(a) General",
                "Secretario de la Coordinación General",
                "Apoyo Técnico del (de la) Secretario(a)",
                "Auxiliar de Diseño",
                "Patrimonio",
                "Finanzas",
                "Auxiliar de Finanzas",
                "Recursos Humanos",
                "Auxiliar de Mantenimiento",
                "Auxiliar Recursos Humanos",
                "Archivo",
                "Auxiliar de Correspondencia",
                "Coordinadora de Desarrollo Institucional",
                "Auxiliar de la Coordinación",
                "Jefa de Unidad de Planeación",
                "Auxiliar de la Unidad de Planeación",
                "Jefe de Unidad de Estrategias Institucionales",
                "Auxiliar de la Unidad de Estrategias Institucionales",
                "Coordinador de Evaluación",
                "Jefa de Unidad de Análisis Estratégico",
                "Auxiliar de la Unidad de Análisis Estratégico",
                "Jefa de Unidad de Seguimiento y Monitoreo",
                "Auxiliar de la Unidad de Seguimiento y Monitoreo",
                "Jefa de Unidad de Estadística Institucional",
                "Auxiliar de la Unidad de Estadística Institucional",
                "Jefe(a) de la Unidad de Programación y Gestión para Resultados",
                "Auxiliar de la Unidad de Programación y Gestión para Resultados",
                "Jefe de la Unidad de Proyectos y Fondos Externos",
                "Auxiliar de la Unidad de Proyectos y Fondos Externos",

            ],

//--aqui falta
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
            defaultOption.textContent = "Selecciona tu cargo";
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
