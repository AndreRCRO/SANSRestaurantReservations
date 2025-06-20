<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes Disponibles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .restaurant-card {
            margin-bottom: 2rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border-radius: 1rem;
            padding: 2rem 1rem 1rem 1rem;
            background: #fff;
            text-align: center;
            transition: transform 0.2s cubic-bezier(.4,2,.6,1), box-shadow 0.2s;
            cursor: pointer;
        }
        .restaurant-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 24px rgba(220,53,69,0.18);
            z-index: 2;
        }
        .restaurant-logo {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto 1rem auto;
            background: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: #888;
            overflow: hidden;
        }
        .restaurant-logo img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }
        .restaurant-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .restaurant-tables {
            font-size: 1.1rem;
            color: #555;
        }
        .btn-reservar {
            background: #dc3545;
            color: #fff;
            border: none;
            transition: background 0.2s;
        }
        .btn-reservar:hover, .btn-reservar:focus {
            background: #b52a37;
            color: #fff;
        }
    </style>
</head>
<body style="background:#f8f9fa;">
    <div class="container py-5">
        <h2 class="mb-4 text-center">Restaurantes Disponibles</h2>
        <div class="row">
            @php
                $profileImages = [
                    'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=facearea&w=400&h=400&q=80', 
                    'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=facearea&w=400&h=400&q=80',  
                    'https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=facearea&w=400&h=400&q=80', 
                    'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=facearea&w=400&h=400&q=80', 
                    'https://images.unsplash.com/photo-1464306076886-debca5e8a6b0?auto=format&fit=facearea&w=400&h=400&q=80', 
                    'https://images.unsplash.com/photo-1506368083636-6defb67639d0?auto=format&fit=facearea&w=400&h=400&q=80', 
                    'https://images.unsplash.com/photo-1502741338009-cac2772e18bc?auto=format&fit=facearea&w=400&h=400&q=80', 
                    'https://images.unsplash.com/photo-1458642849426-cfb724f15ef7?auto=format&fit=facearea&w=400&h=400&q=80', 
                ];
            @endphp
            @forelse($restaurants as $restaurant)
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="restaurant-card w-100" data-bs-toggle="modal" data-bs-target="#reserveModal" data-restaurant-name="{{ $restaurant->name }}">
                        <div class="restaurant-logo">
                            <img src="{{ $profileImages[array_rand($profileImages)] }}" alt="logo restaurante" style="width:100%;height:100%;border-radius:50%;object-fit:cover;">
                        </div>
                        <div class="restaurant-name">{{ $restaurant->name }}</div>
                        <div class="restaurant-tables">Mesas disponibles: {{ $restaurant->number_tables }}</div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">No hay restaurantes registrados aún.</div>
                </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="/" class="btn btn-secondary">Volver al inicio</a>
        </div>
    </div>

    <!-- Modal de Reserva -->
    <div class="modal fade" id="reserveModal" tabindex="-1" aria-labelledby="reserveModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reserveModalLabel">Reservar en <span id="modalRestaurantName"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="reserveEmail" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="reserveEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="reserveTables" class="form-label">Número de mesas</label>
                            <input type="number" class="form-control" id="reserveTables" min="1" required>
                            <div class="form-text">Las mesas son de 4 sillas cada una</div>
                        </div>
                        <div class="mb-3">
                            <label for="reserveDate" class="form-label">Fecha</label>
                            <input type="date" class="form-control" id="reserveDate" required>
                        </div>
                        <button type="submit" class="btn btn-reservar w-100">Reservar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Cambia el nombre del restaurante en el modal según la card seleccionada
        document.addEventListener('DOMContentLoaded', function() {
            var reserveModal = document.getElementById('reserveModal');
            var modalRestaurantName = document.getElementById('modalRestaurantName');
            var cards = document.querySelectorAll('.restaurant-card');
            cards.forEach(function(card) {
                card.addEventListener('click', function() {
                    var name = card.getAttribute('data-restaurant-name');
                    modalRestaurantName.textContent = name;
                });
            });
        });
    </script>
</body>
</html> 