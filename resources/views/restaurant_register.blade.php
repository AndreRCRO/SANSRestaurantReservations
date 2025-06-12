<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="container">
        <div class="register-container">
            <h2 class="form-title">Registro de Restaurante</h2>
            <form action="{{ route('register.restaurant') }}" method="POST">
                @csrf
                <div class="form-section">
                    <h4>Información Básica</h4>
                    <div class="mb-3">
                        <label for="restaurantName" class="form-label">Nombre del Restaurante</label>
                        <input type="text" class="form-control" id="restaurantName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>

                <div class="form-section">
                    <h4>Detalles del Restaurante</h4>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción del Restaurante</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="numberTables" class="form-label">Número de Mesas</label>
                        <input type="number" class="form-control" id="numberTables" name="number_tables" min="1" required>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-register">Registrar Restaurante</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>