<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
  <title>Formulario</title>
  <style>
    /* Estilos CSS */

    /* ... (los estilos CSS que ya habías definido) ... */

  </style>
</head>

<body>
  <div class="d-flex justify-content-center align-items-center" style="width: 100vh;">
    <div class="container">
      <h1>Añadir Producto</h1>
      <div class="center-button">
        <button id="nuevoProductoBtn" class="btn btn-primary mb-4">Nuevo Producto</button>
      </div>

      <div id="formularioProductoContainer" style="display: none;">
        <!-- Formulario de Producto -->
        <form action="procesar_producto.php" method="POST">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required>
              </div>
              <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
              </div>
              <div class="mb-3">
                <label for="categoria" class="form-label">Categoría:</label>
                <select class="form-select" id="categoria" name="categoria" required>
                  <option value="">Selecciona una categoría</option>
                  <!-- Opciones de categoría generadas dinámicamente desde PHP -->
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" maxlength="200" required></textarea>
              </div>
              <div class="mb-3">
                <label for="stock" class="form-label">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
              </div>
              <div class="mb-3">
                <label for="imagen" class="form-label">Imagen:</label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary">Añadir Producto</button>
          </div>
        </form>
      </div>

      <div id="formularioCategoriaContainer" style="display: none;">
        <!-- Formulario de Categoría -->
        <form action="procesar_categoria.php" method="POST">
          <div class="mb-3">
            <label for="nombreCategoria" class="form-label">Nombre de la Categoría:</label>
            <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" maxlength="100" required>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary">Añadir Categoría</button>
          </div>
        </form>
      </div>

    </div>
  </div>

  <div class="d-flex justify-content-center align-items-center" style="width: 100vh;">
    <div class="container">
      <div>
        <h1>Añadir Categoría</h1>
        <div class="center-button">
          <button id="nuevaCategoriaBtn" class="btn btn-primary mb-4">Nueva Categoría</button>
        </div>
      </div>
    </div>
  </div>

  <div id="tablaContainer">
    <!-- Tabla de productos generada dinámicamente desde PHP -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>
    // Código JavaScript para mostrar/ocultar formularios
    const nuevoProductoBtn = document.getElementById('nuevoProductoBtn');
    const nuevaCategoriaBtn = document.getElementById('nuevaCategoriaBtn');
    const formularioProductoContainer = document.getElementById('formularioProductoContainer');
    const formularioCategoriaContainer = document.getElementById('formularioCategoriaContainer');

    nuevoProductoBtn.addEventListener('click', () => {
      formularioProductoContainer.style.display = 'block';
      formularioCategoriaContainer.style.display = 'none';
    });

    nuevaCategoriaBtn.addEventListener('click', () => {
      formularioCategoriaContainer.style.display = 'block';
      formularioProductoContainer.style.display = 'none';
    });
  </script>
</body>

</html>
