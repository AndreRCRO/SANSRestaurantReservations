<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel de Administración</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/admin-panel.css') }}">
    </head>
    <body>
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <p class="text-muted">
            Bienvenido al panel de administración
            @isset($restaurant)
                , <strong>{{ $restaurant->name }}</strong>
            @endisset
        </p>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">Admin Panel</a>
        </div>
        <nav class="nav-menu">
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-utensils"></i>
                    <span>Restaurante</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Reservaciones</span>
                </a>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="page-header">
            <h1 class="page-title">Dashboard</h1>
            <p class="text-muted">Bienvenido al panel de administración</p>
        </div>
        <!-- Aquí irá el contenido principal -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 


    <!-- Aquí irá el contenido principal -->