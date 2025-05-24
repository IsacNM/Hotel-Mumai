<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once __DIR__ . '/../components/header.php'; ?>
    <!-- Asegúrate de que Bootstrap CSS esté incluido -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once __DIR__ . '/../components/navbar.php'; ?>

    <div class="container mt-3">
        <div class="row text-center align-items-center">
            <div class="col-4">
                <a href="reservations.php" class="badge border border-dark text-dark bg-transparent text-decoration-none fs-6 p-3 d-block m-5">Ir a
                    Reservas</a>
            </div>
            <div class="col-4">
                <a href="rooms.php" class="badge border border-dark text-dark bg-transparent text-decoration-none fs-6 p-3 d-block m-5">Ir a
                    Habitaciones</a>
            </div>
            <div class="col-4">
                <a href="clients.php" class="badge border border-dark text-dark bg-transparent text-decoration-none fs-6 p-3 d-block m-5">Ir a
                    Clientes</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <!-- Tarjeta de Habitaciones Disponibles -->
        <div class="col-12 col-md-4 mb-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Habitaciones Disponibles</h5>
                    <p class="card-text display-6">12</p>
                    <a href="rooms.php" class="btn btn-light">Ver habitaciones</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta de Habitaciones Ocupadas -->
        <div class="col-12 col-md-4 mb-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Habitaciones Ocupadas</h5>
                    <p class="card-text display-6">8</p>
                    <a href="rooms.php" class="btn btn-light">Ver habitaciones</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta de Reservas del Día -->
        <div class="col-12 col-md-4 mb-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Reservas del Día</h5>
                    <p class="card-text display-6">5</p>
                    <a href="reservations.php" class="btn btn-light">Ver reservas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-12 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title text-center">Reservas Recientes</h5>
                    <ul class="list-group text-center">
                        <li class="list-group-item">Cliente: Juan Pérez - Habitación 101</li>
                        <li class="list-group-item">Cliente: Ana Torres - Habitación 204</li>
                        <li class="list-group-item">Cliente: Luis Gómez - Habitación 303</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>

    <?php include_once __DIR__ . '/../partials/footer.php'; ?>
</body>

</html>