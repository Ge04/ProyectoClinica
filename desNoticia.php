<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/desNoticias.css">
    <title>Document</title>
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
                       
                        <li class="nav-item">
                            <a class="nav-link login-btn" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                                <i class="fas fa-user me-1"></i>Iniciar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class=" container-fluid titulo">
        <h1>Titulo de la noticia</h1>
    </div>
    <div class="container-fluid">
        <div class=" contedor-contexto">
        <h6>Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit. Repellat, delectus!
        </h6>
        <img src="../imagenes/comprimidos.webp"  alt="">
        </div>
        <div class="contenedor-desarrollo">
            <h2>Subtitulo</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti optio, suscipit itaque aspernatur hic quasi, voluptatum similique, adipisci doloribus porro ipsum placeat nesciunt
                 voluptas nostrum quae. Temporibus ea corporis perferendis!
                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non sit corporis optio amet distinctio eveniet fuga, autem ullam suscipit commodi quia harum! Laudantium
                  culpa exercitationem consequuntur facere expedita inventore facilis.
                </p>
        </div>
        
    </div>
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
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>