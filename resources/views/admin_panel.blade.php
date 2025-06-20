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
    <body style="background: #f8f9fa;">
    <div class="page-header" style="margin-left: 220px; padding-top: 2rem;">
        <h1 class="page-title" style="font-size:2.5rem;font-weight:800;letter-spacing:1px;color:#dc3545;">Panel Restaurante</h1>
        <p class="text-muted" style="font-size:1.2rem;">Bienvenido, @isset($restaurant)<strong>{{ $restaurant->name }}</strong>@endisset</p>
    </div>
    <!-- Sidebar -->
    <div class="sidebar" style="width: 210px; position: fixed; top: 0; left: 0; height: 100vh; background: #fff; box-shadow: 2px 0 8px rgba(0,0,0,0.06); z-index: 100;">
        <div class="sidebar-header" style="padding: 1.5rem 1rem;">
            <a href="#" class="sidebar-brand" style="font-size:1.3rem;font-weight:700;color:#dc3545;letter-spacing:2px;">SANS Admin</a>
        </div>
        <nav class="nav-menu">
            <div class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-home"></i> <span>Dashboard</span></a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-utensils"></i> <span>Restaurante</span></a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-calendar-alt"></i> <span>Reservaciones</span></a>
            </div>
            <div class="nav-item mt-4">
                <form action="{{ route('logout.restaurant') }}" method="POST" id="logoutForm">
                    @csrf
                    <button type="submit" class="btn btn-link text-danger w-100 text-start" style="font-weight:600;font-size:1.1rem;"><i class="fas fa-sign-out-alt me-2"></i>Cerrar sesión</button>
                </form>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content" style="margin-left: 220px; padding: 2rem 2rem 0 2rem; min-height: 100vh;">
        <div id="dashboard-section">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div style="background:#fff;border-radius:1.2rem;box-shadow:0 2px 12px rgba(220,53,69,0.10);padding:2rem;text-align:center;">
                        <div style="font-size:2.2rem;color:#dc3545;font-weight:700;">
                            {{ $restaurant->reservations_count ?? 0 }}
                        </div>
                        <div style="font-size:1.1rem;color:#888;">Mesas reservadas</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background:#fff;border-radius:1.2rem;box-shadow:0 2px 12px rgba(220,53,69,0.10);padding:2rem;text-align:center;">
                        <div style="font-size:2.2rem;color:#dc3545;font-weight:700;">
                            {{ $restaurant->free_tables ?? 0 }}
                        </div>
                        <div style="font-size:1.1rem;color:#888;">Mesas libres</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background:#fff;border-radius:1.2rem;box-shadow:0 2px 12px rgba(220,53,69,0.10);padding:2rem;text-align:center;">
                        <div style="font-size:2.2rem;color:#dc3545;font-weight:700;">
                            {{ $restaurant->number_tables ?? 0 }}
                        </div>
                        <div style="font-size:1.1rem;color:#888;">Mesas totales</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="restaurante-section" style="display:none;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @if(isset($restaurant))
                    <div style="background: #fff; border-radius: 1.5rem; box-shadow: 0 4px 24px rgba(220,53,69,0.08); padding: 2.5rem 2rem 2rem 2rem; margin-bottom: 2rem;">
                        <div class="d-flex flex-column align-items-center">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=facearea&w=400&h=400&q=80" alt="Restaurante" style="width:110px;height:110px;border-radius:50%;object-fit:cover;margin-bottom:1.2rem;box-shadow:0 2px 12px rgba(220,53,69,0.12);border:4px solid #fff;">
                            <h2 style="font-weight:700;color:#dc3545;">{{ $restaurant->name }}</h2>
                            <div class="mt-3 w-100" style="max-width:400px;">
                                <div class="mb-2"><i class="fas fa-envelope me-2 text-secondary"></i><strong>Correo:</strong> {{ $restaurant->email }}</div>
                                <div class="mb-2"><i class="fas fa-map-marker-alt me-2 text-secondary"></i><strong>Dirección:</strong> {{ $restaurant->address }}</div>
                                <div class="mb-2"><i class="fas fa-phone me-2 text-secondary"></i><strong>Teléfono:</strong> {{ $restaurant->phone }}</div>
                                <div class="mb-2"><i class="fas fa-align-left me-2 text-secondary"></i><strong>Descripción:</strong> {{ $restaurant->description }}</div>
                                <div class="mb-2"><i class="fas fa-chair me-2 text-secondary"></i><strong>Número de mesas:</strong> {{ $restaurant->number_tables }}</div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div id="reservaciones-section" style="display:none;">
        <div class="row">
            @if(isset($restaurant) && $restaurant->reservations->count())
                @foreach($restaurant->reservations as $reservation)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div style="background:#fff;border-radius:1.2rem;box-shadow:0 2px 12px rgba(220,53,69,0.10);padding:2rem;">
                            <div style="font-weight:700;color:#dc3545;font-size:1.2rem;">
                                {{ $reservation->customer_name ?? 'Sin nombre' }}
                            </div>
                            <div style="color:#888;">Correo: {{ $reservation->email }}</div>
                            <div style="color:#888;">Mesas reservadas: {{ $reservation->tables }}</div>
                            <div style="color:#888;">Fecha: {{ $reservation->date }}</div>
                            <div style="color:#888;">Hora: {{ $reservation->time }}</div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <div class="alert alert-info text-center">No hay reservaciones registradas.</div>
                </div>
            @endif
        </div>
    </div>
        <script>
            // Navegación visual entre secciones
            document.addEventListener('DOMContentLoaded', function() {
                const dashboardSection = document.getElementById('dashboard-section');
                const restauranteSection = document.getElementById('restaurante-section');
                const reservacionesSection = document.getElementById('reservaciones-section');
                const navLinks = document.querySelectorAll('.nav-link');
                navLinks.forEach((link, idx) => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        dashboardSection.style.display = 'none';
                        restauranteSection.style.display = 'none';
                        reservacionesSection.style.display = 'none';
                        if(idx === 0) dashboardSection.style.display = 'block';
                        if(idx === 1) restauranteSection.style.display = 'block';
                        if(idx === 2) reservacionesSection.style.display = 'block';
                    });
                });
            });
        </script>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 


    <!-- Aquí irá el contenido principal -->