<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/medicinas.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/fontawesome.min.css">
  <title>Farmacia</title>
  <style>
   
  </style>
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


  <div class="container-fluid">

   <div class="header">
    <h1>Clínica Salud Total</h1>
    <p>Bienvenido a nuestra sección de medicamentos</p>
  </div>

  <nav class="nav">
    <a href="#medicamentos">Medicamentos</a>
    <a href="#contacto">Contacto</a>
    <a href="#nosotros">Nosotros</a>
  </nav>

  <div class="container">
    <!-- Sección de medicamentos -->
    <section id="medicamentos">
      <div class="buscador d-flex ">
      <h2>Lista de Medicamentos Disponibles</h2>
      <form class="d-flex pl-5" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
      
      <table class="table orde table-striped">
        
          <tr>
            <th class="bg-dark ">Nombre del Medicamento</th>
            <th class="bg-dark">Descripción</th>
            <th class="bg-dark">Precio</th>
          </tr>
       
        <tbody>
          <tr>
            <td>Paracetamol</td>
            <td>Analgesico y antipirético</td>
            <td>$5.00</td>
          </tr>
          <tr>
            <td>Ibuprofeno</td>
            <td>Antiinflamatorio no esteroideo</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Amoxicilina</td>
            <td>Antibiótico</td>
            <td>$10.00</td>
          </tr>
          <tr>
            <td>Aspirina</td>
            <td>Antiinflamatorio y analgésico</td>
            <td>$4.50</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- Formulario de solicitud 
    <section id="contacto">
      <h2>Solicitar Receta</h2>
      <div class="form-container">
        <form action="#">
          <label for="nombre">Nombre Completo:</label>
          <input type="text" id="nombre" name="nombre" required>

          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="email" required>

          <label for="mensaje">¿Qué medicamento necesitas?</label>
          <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

          <button type="submit">Enviar Solicitud</button>
        </form>
      </div>
    </section>-->

  
  </div>


 

    <!--Comienzo de temporizador-->

<div class=" temporizador mt-5">
  <div class="row">
    <div class="col-md">
    <img src="../imagenes/cardiologo.jpg" alt="">
    </div>
    <div class="col-md muestra">
    <h3>Todos los farmacos  a su disposicion!</h3>
    <p>Tiempo de espera</p>
    <h2>61: 05: 31: 20</h2>
    <button>Obtener ahora</button>
    </div>
  </div>
   
    <div class="">
    
    </div>
    
</div>
<!--Comienzo de temporizador-->

<!--Comienzo de las tarjetas de medicamentos-->
<!-- Testimonial 3 -->

      <!--fin de las tarjetas de medicamentos-->

 
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