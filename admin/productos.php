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
      padding: 15px;
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
  </style>
</head>

<body>
<div class="d-flex justify-content-center align-items-center" style="width: 100vh;">
  <div class="container">
    <h1>Añadir Producto</h1>
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
        <!--aca debe ir php para anclarlo con categorias-->
        <div class="mb-3">
  <label for="categoria" class="form-label">Categoría:</label>
  <select class="form-select" id="categoria" name="categoria" required>
    <option value="">Selecciona una categoría</option>
    <option value="categoria1">Categoría 1</option>
    <option value="categoria2">Categoría 2</option>
    <option value="categoria3">Categoría 3</option>
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
    </form>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
