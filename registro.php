<?php
require_once("includes/header.php");
?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="my-4"></div> <!-- Espacio adicional -->
            <h1 class="text-center">Formulario de Registro</h1>
            <div class="card form-container">
                <div class="card-body">
                    <form action="procesar_registro.php" method="POST">
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <label for="nombre" class="form-label">Nombre*</label>
                            <span class="text-end">* Campos requeridos</span>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce tu nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido*</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Introduce tus apellidos" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico*</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Introduce tu correo electrónico" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña*</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña" required>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary">Crear</button>
                            <span class="mx-2"> O </span>
                            <a href="index.php" class="btn btn-link">Regresar a la tienda</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
require_once("includes/pie.php");
?>
