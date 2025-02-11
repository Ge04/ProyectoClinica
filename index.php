<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="styles.css">
    
 
    
    <meta name="description" content="Your website description">
    <meta name="keywords" content="your, keywords, here">
    
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <meta name="theme-color" content="#121212">
    <link rel="manifest" href="manifest.json">
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
                            <a class="nav-link" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#especialistas">Especialistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonios">Testimonios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
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

    <section class="section section-light">
        <div class="video-container">
            <div class="content-overlay">
                <h1>Cuidando tu Salud con Excelencia</h1>
                <p>Expertos médicos comprometidos con tu bienestar y el de tu familia</p>
                <a href="#" class="appointment-btn" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                    <i class="far fa-calendar-alt me-2"></i>Reservar Cita
                </a>
            </div>
            <video autoplay muted loop>
                <source src="img/background.mp4" type="video/mp4">
            </video>
        </div>
    </section>

    <section class="section section-dark">
        <div class="container">
            <div class="section-title">
                <h2>Nuestros Servicios</h2>
                <p>Ofrecemos una amplia gama de servicios médicos especializados para cuidar de tu salud</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-img">
                            <img src="path/to/your/image1.jpg" alt="Service 1">
                        </div>
                        <div class="service-content">
                            <h3>Título del Servicio</h3>
                            <h4>Subtítulo del Servicio</h4>
                            <p>Descripción detallada del servicio que se ofrece en la clínica médica.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-img">
                            <img src="path/to/your/image2.jpg" alt="Service 2">
                        </div>
                        <div class="service-content">
                            <h3>Título del Servicio</h3>
                            <h4>Subtítulo del Servicio</h4>
                            <p>Descripción detallada del servicio que se ofrece en la clínica médica.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-img">
                            <img src="path/to/your/image3.jpg" alt="Service 3">
                        </div>
                        <div class="service-content">
                            <h3>Título del Servicio</h3>
                            <h4>Subtítulo del Servicio</h4>
                            <p>Descripción detallada del servicio que se ofrece en la clínica médica.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="section-title">
                <h2>Por Qué Elegirnos</h2>

                <p>Descubre lo que nos hace diferentes y por qué somos tu mejor opción en atención médica</p>
            </div>
        </div>
    </section>

    <section class="section section-dark">
        <div class="container">
            <div class="section-title">
                <h2>Lo Que Dicen Nuestros Pacientes</h2>
                <p>Experiencias reales de quienes confían en nosotros</p>
            </div>

            <div class="testimonials-slider">
                <!-- Testimonial 1 -->
                <div class="testimonial-item">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left quote-icon"></i>
                        <p class="testimonial-text">"La atención personalizada y el profesionalismo del equipo médico superaron todas mis expectativas. Me sentí en excelentes manos desde el primer momento."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="author-info">
                            <h4>María García</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="specialty">Paciente de Cardiología</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-item">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left quote-icon"></i>
                        <p class="testimonial-text">"Excelente atención y seguimiento. El equipo médico siempre está disponible para resolver cualquier duda."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="author-info">
                            <h4>Carlos Martínez</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="specialty">Paciente de Traumatología</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left quote-icon"></i>
                        <p class="testimonial-text">"Un servicio excepcional. Las instalaciones son modernas y el personal muy amable y profesional."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="author-info">
                            <h4>Ana López</h4>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="specialty">Paciente de Medicina General</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentModalLabel">Reservar Cita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="appointmentEmail" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="appointmentEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Fecha Preferida</label>
                            <input type="date" class="form-control" id="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Hora Preferida</label>
                            <input type="time" class="form-control" id="time" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Confirmar Cita</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <script src="script.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const slider = document.querySelector('.testimonials-slider');
        const dots = document.querySelectorAll('.nav-dot');
        const slideWidth = document.querySelector('.testimonial-item').offsetWidth + 30; // 30 is the gap

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                // Update scroll position
                slider.scrollLeft = slideWidth * index;
                
                // Update active dot
                dots.forEach(d => d.classList.remove('active'));
                dot.classList.add('active');
            });
        });

        // Optional: Auto-update dots on scroll
        slider.addEventListener('scroll', () => {
            const index = Math.round(slider.scrollLeft / slideWidth);
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        });
    });
    </script>
</body>
</html>
