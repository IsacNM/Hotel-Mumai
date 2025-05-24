<?php include_once __DIR__ . '/../components/header.php'; ?>
<div class="container mt-4">
    <h2 class="text-center">Gestión de Habitaciones</h2>
    <div class="d-flex justify-content-end mb-3">
        <a href="" class="btn btn-success">Agregar Habitación</a>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Número</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <div class="modal fade" id="modalEditar" tabindex="-1" data-bs-dismiss="modal">
        <div class="modal-dialog">
            <form action="" id="formEditar" class="modal-content"></form>
            <div class="modal-header">
                <h5 class="modal-title">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" id="idEditar" name="idEditar" required>
                <div class="mb-3">
                    <label for="nombreEditar" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreEditar" name="nombreEditar" required>
                </div>
                <div class="mb-3">
                    <label for="emailEditar" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailEditar" name="emailEditar" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-sucess">Guardar Cambios</button>
            </div>
        </div>
    </div>
    <?php include_once __DIR__ . '/../partials/footer.php'; ?>