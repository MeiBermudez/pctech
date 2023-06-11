<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
  <title>Formulario</title>
  <style>
    body {
      background-color: #f8f9fa;
      padding-top: 50px;
    }

    .container {
      max-width: 700px;
      background-color: #fff;
      border-radius: 10px;
      padding-left: -30px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #343a40;
    }

    .form-control {
      border-radius: 5px;
    }

    label {
      font-weight: bold;
      color: #343a40;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }

    /* Estilos para la tabla */
    #tablaContainer {
      margin-left: 10px;
      margin-top: 25px;
    }

    #tablaContainer h2 {
      text-align: left;
      margin-bottom: 10px;
    }

    table {
      width: 100%;
      margin-bottom: 20px;
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid #dee2e6;
      padding: 8px;
      text-align: left;
    }

    .producto-img {
      max-width: 100px;
    }

    .center-button {
      text-align: center;
      margin-bottom: 15px;
    }

    .pagination {
      justify-content: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center align-items-center" style="width: 100vh;">
    <div class="container">
      <div class="row">
          <h1>Añadir Producto</h1>
          <div class="center-button">
            <button id="nuevoProductoBtn" class="btn btn-primary mb-4">Nuevo Producto</button>
          </div>
          <div id="formularioContainer" style="display: none;">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required>
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio:</label>
              <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>
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
              <input type="file" class="form-control" id="imagen" name="imagen">
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <button type="submit" class="btn btn-primary">Añadir Producto</button>
            </div>
          </div>

  <div id="tablaContainer">
    <div class="d-flex justify-content-center align-items-center" style="width: 100vh;">
      <div class="container">
        <h2>Lista de Productos</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Imagen</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Descripción</th>
              <th>Stock</th>
            </tr>
          </thead>
          <tbody id="productosTablaBody">
            <!-- Filas de productos se agregarán dinámicamente aquí -->
          </tbody>
        </table>
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <script>
    var nuevoProductoBtn = document.getElementById('nuevoProductoBtn');
    var nuevaCategoriaBtn = document.getElementById('nuevaCategoriaBtn');
    var formularioContainer = document.getElementById('formularioContainer');
    var formularioCategoriaContainer = document.getElementById('formularioCategoriaContainer');

    nuevoProductoBtn.addEventListener('click', function() {
      if (formularioContainer.style.display === 'none') {
        formularioContainer.style.display = 'block';
      } else {
        formularioContainer.style.display = 'none';
      }
      formularioCategoriaContainer.style.display = 'none';
    });

  </script>
</body>

</html>
