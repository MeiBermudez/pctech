<?php
require_once("includes/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargadores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="assets/css/cart.css">
    <!--ruta que permite funcionalidad del menu-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">Cargadores</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Filtrar por precio</h5>
                        <div id="price-slider"></div>
                        <div class="price_label">
                            Precio: <span id="price-range"></span>
                        </div>
                        <button id="filter-button" class="btn btn-primary">Filtrar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row" id="product-list">
                    <!-- Productos -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="path_to_image" class="card-img-top" alt="Producto">
                            <div class="card-body">
                                <h5 class="card-title">Producto 1</h5>
                                <p class="card-text">Descripción del producto.</p>
                                <p class="card-text">Precio: $99.99</p>
                                <button class="btn btn-primary btn-add-to-cart">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="path_to_image" class="card-img-top" alt="Producto">
                            <div class="card-body">
                                <h5 class="card-title">Producto 1</h5>
                                <p class="card-text">Descripción del producto.</p>
                                <p class="card-text">Precio: $99.99</p>
                                <button class="btn btn-primary btn-add-to-cart">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="path_to_image" class="card-img-top" alt="Producto">
                            <div class="card-body">
                                <h5 class="card-title">Producto 1</h5>
                                <p class="card-text">Descripción del producto.</p>
                                <p class="card-text">Precio: $99.99</p>
                                <button class="btn btn-primary btn-add-to-cart">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="path_to_image" class="card-img-top" alt="Producto">
                            <div class="card-body">
                                <h5 class="card-title">Producto 2</h5>
                                <p class="card-text">Descripción del producto.</p>
                                <p class="card-text">Precio: $49.99</p>
                                <button class="btn btn-primary btn-add-to-cart">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                    <!-- Agrega más productos aquí -->
                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center" id="pagination"></ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        $(function() {
            // Configuración inicial del slider range
            $("#price-slider").slider({
                range: true,
                min: 0,
                max: 100,
                values: [5, 25],
                slide: function(event, ui) {
                    $("#price-range").text("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });

            // Actualizar los valores del rango al cargar la página
            var initialValues = $("#price-slider").slider("values");
            $("#price-range").text("$" + initialValues[0] + " - $" + initialValues[1]);

            // Función para filtrar los productos
            function filterProducts(minPrice, maxPrice) {
                // Aquí puedes agregar tu lógica para filtrar los productos según los precios seleccionados
                // Actualiza el contenido de la lista de productos según los criterios de filtrado
            }

            // Manejador de evento para el botón de filtrar
            $("#filter-button").click(function() {
                var minPrice = $("#price-slider").slider("values", 0);
                var maxPrice = $("#price-slider").slider("values", 1);
                filterProducts(minPrice, maxPrice);
            });

            // Ejemplo de paginación estática
            var totalPages = 5; // Total de páginas
            var currentPage = 1; // Página actual

            // Función para actualizar la paginación
            function updatePagination() {
                $("#pagination").empty(); // Limpiar la paginación

                // Agregar botón anterior
                var previousButton = '<li class="page-item' + (currentPage === 1 ? ' disabled' : '') + '"><a class="page-link" href="#" onclick="changePage(' + (currentPage - 1) + ')">Anterior</a></li>';
                $("#pagination").append(previousButton);

                // Agregar botones de páginas
                for (var i = 1; i <= totalPages; i++) {
                    var pageButton = '<li class="page-item' + (currentPage === i ? ' active' : '') + '"><a class="page-link" href="#" onclick="changePage(' + i + ')">' + i + '</a></li>';
                    $("#pagination").append(pageButton);
                }

                // Agregar botón siguiente
                var nextButton = '<li class="page-item' + (currentPage === totalPages ? ' disabled' : '') + '"><a class="page-link" href="#" onclick="changePage(' + (currentPage + 1) + ')">Siguiente</a></li>';
                $("#pagination").append(nextButton);
            }

            // Función para cambiar de página
            window.changePage = function(page) {
                if (page >= 1 && page <= totalPages) {
                    currentPage = page;
                    // Aquí puedes actualizar la lista de productos según la página seleccionada
                    updatePagination();
                }
            };

            // Actualizar la paginación al cargar la página
            updatePagination();
        });
    </script>
</body>

</html>







