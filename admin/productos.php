<!DOCTYPE html>
<html>
<head>
  <title>Gestión de productos</title>
  <link rel="stylesheet" href="assets/css/product.css">

</head>
<body>
  <h1>Gestión de productos</h1>
  <button id="add-product">Agregar producto</button>
  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody id="product-list">
      <!-- Aquí se generarán dinámicamente las filas de productos -->
    </tbody>
  </table>

  <!-- Formulario modal para agregar productos -->
  <div id="add-product-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Agregar producto</h2>
      <form id="add-product-form">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name">

        <label for="description">Descripción:</label>
        <textarea id="description" name="description"></textarea>

        <label for="price">Precio:</label>
        <input type="number" id="price" name="price">

        <input type="submit" value="Agregar">
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
