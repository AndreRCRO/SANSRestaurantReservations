<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Restaurante</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h2>Registro de Restaurante</h2>
        <form action="{{ route('register.restaurant') }}" method="POST">
            @csrf
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
                <label for="description" class="form-label">Descripción del Restaurante</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="numberTables" class="form-label">Número de Mesas</label>
                <input type="number" class="form-control" id="numberTables" name="number_tables" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrar Restaurante</button>
        </form>
    </div>
</body>
</html>