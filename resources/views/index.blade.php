<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SANS - Sistema de Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">S A N S</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#benefits">Beneficios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plans">Planes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt me-1"></i>Ingresar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <div class="container text-center">
            <div class="sans-title">
                <h1 class="display-1">S A N S</h1>
                <div class="names-container">
                    <div class="name-item">Santiago</div>
                    <div class="name-item">Andre</div>
                    <div class="name-item">Nacho</div>
                    <div class="name-item">Socios</div>
                </div>
            </div>
            <button class="btn btn-primary btn-lg mt-4">HAZ TU RESERVA AQUÍ!!!</button>
            <div class="mt-3">
                <span>Registra tu restaurante </span>
                <a href="/registrar-restaurante" class="register-link">AQUÍ</a>
            </div>
        </div>
    </section>

    <div class="modal fade" id="restaurantRegisterModal" tabindex="-1" aria-labelledby="restaurantRegisterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="restaurantRegisterModalLabel">Registro de Restaurante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="restaurantName" class="form-label">Nombre del Restaurante</label>
                            <input type="text" class="form-control" id="restaurantName" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción del Restaurante</label>
                            <textarea class="form-control" id="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="numberTables" class="form-label">Número de Mesas</label>
                            <input type="number" class="form-control" id="numberTables" min="1" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrar Restaurante</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section id="benefits" class="benefits-slider py-5">
        <div class="container">
            <h2 class="text-center mb-4">Beneficios de Nuestro Servicio</h2>
            <div id="benefitsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#benefitsCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3>Reservas Instantáneas</h3>
                            <p>Reserva tu mesa en tiempo real con solo unos clics. Sin llamadas ni esperas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Gestión Eficiente</h3>
                            <p>Optimiza la ocupación de tu restaurante y mejora la experiencia de tus clientes.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>Acceso Móvil</h3>
                            <p>Gestiona tus reservas desde cualquier dispositivo, en cualquier momento.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#benefitsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#benefitsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </section>

    <section id="features" class="feature-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Características Principales</h2>
                <p class="section-subtitle">Descubre todo lo que podemos ofrecerte</p>
            </div>
            <div class="feature-content">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="feature-image">
                            <i class="fas fa-star feature-icon"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-details">
                            <h3>Sistema de Reservas Inteligente</h3>
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i> Reservas en tiempo real con confirmación instantánea</li>
                                <li><i class="fas fa-check"></i> Gestión avanzada de mesas y disponibilidad</li>
                                <li><i class="fas fa-check"></i> Panel de administración intuitivo</li>
                                <li><i class="fas fa-check"></i> Estadísticas y reportes detallados</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits-detail" class="benefits-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Beneficios para tu Negocio</h2>
                <p class="section-subtitle">Optimiza tu restaurante con nuestras soluciones</p>
            </div>
            <div class="benefits-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="benefits-image">
                            <i class="fas fa-gift benefits-icon"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="benefits-details">
                            <h3>Maximiza tu Potencial</h3>
                            <ul class="benefits-list">
                                <li><i class="fas fa-check"></i> Aumento significativo en la captación de clientes</li>
                                <li><i class="fas fa-check"></i> Optimización de recursos y personal</li>
                                <li><i class="fas fa-check"></i> Mejora en la experiencia del cliente</li>
                                <li><i class="fas fa-check"></i> Reducción de errores en reservas</li>
                                <li><i class="fas fa-check"></i> Análisis de datos y tendencias</li>
                                <li><i class="fas fa-check"></i> Mayor eficiencia operativa</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="plans" class="plans-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Planes Disponibles</h2>
                <p class="section-subtitle">Elige el plan que mejor se adapte a tus necesidades</p>
            </div>
            <div class="plans-content">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="plans-image">
                            <i class="fas fa-cubes plans-icon"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="plans-details">
                            <h3>Soluciones para cada Negocio</h3>
                            <div class="plan-options">
                                <div class="plan-option">
                                    <h4>Plan Básico</h4>
                                    <p>Perfecto para pequeños restaurantes</p>
                                    <ul>
                                        <li>Hasta 10 mesas</li>
                                        <li>Reservas básicas</li>
                                        <li>Soporte por email</li>
                                    </ul>
                                </div>
                                <div class="plan-option">
                                    <h4>Plan Premium</h4>
                                    <p>Ideal para restaurantes medianos</p>
                                    <ul>
                                        <li>Hasta 30 mesas</li>
                                        <li>Funciones avanzadas</li>
                                        <li>Soporte prioritario</li>
                                    </ul>
                                </div>
                                <div class="plan-option">
                                    <h4>Plan Empresarial</h4>
                                    <p>Para cadenas y grandes establecimientos</p>
                                    <ul>
                                        <li>Mesas ilimitadas</li>
                                        <li>Todas las funciones</li>
                                        <li>Soporte 24/7</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="contact-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Contacto</h2>
                <p class="section-subtitle">Estamos aquí para ayudarte</p>
            </div>
            <div class="contact-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="contact-image">
                            <i class="fas fa-envelope contact-icon"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="contact-details">
                            <h3>Ponte en Contacto</h3>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fas fa-phone"></i>
                                    <div>
                                        <h4>Teléfono</h4>
                                        <p>+591 75634824</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <div>
                                        <h4>Email</h4>
                                        <p>sansSystem@gmail.com</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <h4>Dirección</h4>
                                        <p>Calle Pitajaya #50</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-clock"></i>
                                    <div>
                                        <h4>Horario</h4>
                                        <p>Lun-Vie: 9am-6pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Login -->
    <div class="modal fade login-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">
                        <i class="fas fa-user-circle me-2"></i>Iniciar Sesión
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <form action="{{ route('login.restaurant') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="loginEmail" class="form-label">Correo Electrónico</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="loginEmail" name="email" placeholder="ejemplo@correo.com" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="loginPassword" class="form-label">Contraseña</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Ingresa tu contraseña" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-login">
                            <i class="fas fa-sign-in-alt me-2"></i>Ingresar
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="d-flex justify-content-between w-100">
                        <a href="{{ route('admin.panel') }}" class="admin-link">
                            <i class="fas fa-user-shield me-1"></i>Panel Admin
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>