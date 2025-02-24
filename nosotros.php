<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias - Portal de Noticias</title>
    <!-- Vinculamos Bootstrap y el CSS personalizado -->
   
    <link rel="stylesheet" href="../css/noticias.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
</head>
<body>
<header class="header-main">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container ">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <i class="fas fa-hospital me-2"></i>
                    <span>Clínica Médica</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" 
                        aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../servicios.html">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../especialistas.html">Especialistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./noticia.php">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contactos.php">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./farmacia.php">Farmacos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./nosotros.php">Nosotros</a>
                        </li>
                       
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Slider con imagen de fondo -->
    <section class="slider" style="background-image: url('../imagenes/2.avif');">
        <div class="overlay">
            <div class="container text-center text-white">
                <h1>Sobre Nosotros</h1>
                <p>Descubre Nuestra Empresa</p>
                <a href="#noticias" class="btn btn-primary">Leer más</a>
                <a href="#comentarios" class="btn btn-secondary">Ver comentarios</a>
            </div>

        </div>
    </section>

    <!-- Sección de noticias -->
    <section id="noticias " class="container my-5 ">
        <div class="row mt-5">
            <!-- Imagen y título de la noticia -->
            <div class="col-md-6">
                <img src="../imagenes/cardiologo.jpg" class="img-fluid" alt="Noticia">
            </div>
            <div class="col-md-6">
                <h2>Nuestra mision</h2>
                <p>Resumen de la noticia... Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo dolorem reiciendis reprehenderit non itaque ea cupiditate quas asperiores in iusto perferendis,
                     necessitatibus consequatur facilis. Quo nulla nemo sapiente modi rerum!
                </p>
                <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#desarrollo">
                    Mostrar Desarrollo
                </button>
                <div id="desarrollo" class="collapse mt-3">
                    <p>Desarrollo completo de la noticia... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Texto centrado -->
    <section class="text-center py-4 bg-light masked-doctor-section">
            <div class="overlay"></div>
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-circle">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="stat-number">+1000</div>
                    <div class="stat-line"></div>
                    <div class="stat-text">Happy Customers</div>
                </div>
                <div class="stat-item">
                    <div class="stat-circle">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-number">2017</div>
                    <div class="stat-line"></div>
                    <div class="stat-text">Top Hospitality</div>
                </div>
                <div class="stat-item">
                    <div class="stat-circle">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div class="stat-number">1105</div>
                    <div class="stat-line"></div>
                    <div class="stat-text">Innovative Approach</div>
                </div>
                <div class="stat-item">
                    <div class="stat-circle">
                        <i class="fas fa-lungs"></i>
                    </div>
                    <div class="stat-number">+500</div>
                    <div class="stat-line"></div>
                    <div class="stat-text">Lung Replacement</div>
                </div>
            </div>
        </section>
   

   

    <!-- Footer con anclas -->
    <footer class="bg-dark text-white py-3 mt-3">
        <div class="container text-center">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-white">Términos y Condiciones</a></li>
                <li class="list-inline-item"><a href="#" class="text-white">Política de Privacidad</a></li>
                <li class="list-inline-item"><a href="#" class="text-white">Contacto</a></li>
            </ul>
        </div>
    </footer>

     <!-- Comentarios -->
     <section id="comentarios" class="container comentarios my-5">
        <h3>Personal</h3>
        <div class="row">
            <!-- Comentarios -->
            <div class="col-md-4">
                <div class="card">
                    <img src="../imagenes/2.avif" class="card-img-top rounded-circle" alt="Usuario 1">
                    <div class="card-body">
                        <h5 class="card-title">Ana Isabel</h5>
                        <p class="card-text">Gran noticia, muy interesante. Espero que sigan publicando más contenido como este.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../imagenes/1.jpg" class="card-img-top rounded-circle" alt="Usuario 2">
                    <div class="card-body">
                        <h5 class="card-title">Francisco Obama</h5>
                        <p class="card-text">Me encantó la noticia. Es importante estar al día con lo que sucede en el mundo.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="../imagenes/1.jpg" class="card-img-top rounded-circle" alt="Usuario 2">
                    <div class="card-body">
                        <h5 class="card-title">Francisco Obama</h5>
                        <p class="card-text">Me encantó la noticia. Es importante estar al día con lo que sucede en el mundo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--COMIENZO DE LA PARTE DEL FOOTER-->
    <section class="section section-light footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <h3>Clínica Médica</h3>
                <h4></h4>
                <p>Comprometidos con tu salud y bienestar, ofreciendo servicios médicos de excelencia.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <h3>Contacto</h3>
                <h4></h4>
                <p><i class="fas fa-map-marker-alt"></i> Dirección: Calle Principal #123</p>
                <p><i class="fas fa-phone"></i> Teléfono: (123) 456-7890</p>
                <p><i class="fas fa-envelope"></i> Email: info@clinicamedica.com</p>
            </div>
            <div class="col-md-4 footer-col">
                <h3>Horario</h3>
                <h4></h4>
                <p>Lunes - Viernes: 8:00 AM - 8:00 PM</p>
                <p>Sábado: 9:00 AM - 2:00 PM</p>
                <p>Domingo: Emergencias 24/7</p>
            </div>
        </div>
        <div class="footer-bottom">
            <hr>
            <p>&copy; 2024 Clínica Médica. Todos los derechos reservados.</p>
        </div>
    </div>
</section>
    <!--COMIENZO DE LA PARTE DEL FOOTER-->

    <!-- Scripts de Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>