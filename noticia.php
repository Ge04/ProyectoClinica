<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/noticia.css">
    <title>Noticias</title>
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

  <div class="container-fluid">
  <div id="carouselExampleDark" class=" carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../imagenes/comprimidos.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ultimas noticias</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../imagenes/dentista.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../imagenes/ginecologo.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
  <div class="row lineas-noticias">
    <div class="col-md-10 lineas-noticias-texto">
      <h2>Noticias recientes</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis nostrum quis temporibus
         a repudiandae provident doloribus doloremque quaerat quas quasi.
        </p>
    </div>
    <div class="col-md-2">
      <button class="btn btn-primary">Ver mas</button>
    </div>
  </div>
</div>
<!--COMIENZO DE LA PARTE DE TARJETAS DE NOTICIAS-->
<div class="container tarjetas-noticias" >
  <div class="card " >
    <img src="../imagenes/cardiologo.jpg" width="60px" height="60px" alt="">
    <div class="card-body">
      <h5 class="card-title">Titulo de la Noticia</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
      <a href="./desNoticia.php" class="btn btn-primary">Leer mas</a>
  </div>
  
</div>

<div class="card " >
    <img src="../imagenes/cardiologo.jpg" width="60px" height="60px" alt="">
    <div class="card-body">
      <h5 class="card-title">Titulo de la Noticia</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
      <a href="./desNoticia.php" class="btn btn-primary">Leer mas</a>
  </div>
  
</div>

<div class="card " >
    <img src="../imagenes/cardiologo.jpg" width="60px" height="60px" alt="">
    <div class="card-body">
      <h5 class="card-title">Titulo de la Noticia</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
      <a href="./desNoticia.php" class="btn btn-primary">Leer mas</a>
  </div>
  
</div>
</div>
<!--FIN DE LA PARTE DE TARJETAS DE NOTICIAS-->

<!--CoMIENZO DEL SEGUNDO SLIDER-->
<div id="carouselExampleInterval" class="carousel slide carouseles" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../imagenes/inyecciones.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../imagenes/medicos.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../imagenes/ovulos.webp" class="d-block w-100"  alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--FIN DEL SEGUNDO SLIDER-->

<!--comienzo de noticias en linea-->
<div class="container-fluid columnas-noticias">
  <div class="row">
    <div class="col-md-3">
      <h3>Noticias</h3>
      <a href=""><i class="fa-solid fa-caret-left"></i> <span>Lorem ipsum dolor sit.</span></a>
      <a href=""><i class="fa-solid fa-caret-left"></i> <span>Lorem ipsum dolor sit.</span></a>
      <a href=""><i class="fa-solid fa-caret-left"></i> <span>Lorem ipsum dolor sit.</span></a>
      <a href=""><i class="fa-solid fa-caret-left"></i> <span>Lorem ipsum dolor sit.</span></a>
    </div>
   <div class="col-md-5">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis labore velit reiciendis, id distinctio nulla voluptate amet. Rerum nesciunt, quibusdam perspiciatis illum 
        nulla architecto corporis quas tempora culpa doloribus!
      </p>
      <div class="contadores">
        <h2><span><p>1</p></span></h2>
        <h2><span>50%</span></h2>
        <h2><span>50%</span></h2>
      </div>
      
    </div>
    <div class="col-md-4">
      <h2>Nuestros Clientes</h2>
      <div class="textos-clientes">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ratione nesciunt provident neque unde! Atque, asperiores perferendis eos nihil, ipsum vitae aperiam 
          delectus ducimus sit aut, iusto sunt quos ab!
        </p>
      </div>
    </div>
   
  </div>
</div>
<!--fin de noticias en linea-->
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