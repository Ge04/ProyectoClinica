 <!-- ...  include_once(__DIR__ . '/../components/footer.php'); ?> ... -->
<header class="header-main">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="../index.php">
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
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../servicios/servicios.html">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../especialistas.html">Especialistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="noticias.php">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contacto.php">Contacto</a>
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