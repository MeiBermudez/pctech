<?php require_once("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaptadores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="assets/css/cart.css">
    <!--ruta que permite funcionalidad del menu-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    /* Estilo para la ventana emergente */
    .modal-container {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        max-width: 500px;
        width: 100%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .modal-close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }
    </style>

</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">Teclados</h1>
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
                                <p class="card-text">Precio: $99.99</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-secondary btn-description">Agregar al carrito</button>
                                    <button class="btn btn-primary btn-quick-view">
                                        <i class="fas fa-eye"></i> Vista rápida
                                    </button>
                                </div>
                                <div class="modal-container">
                                    <div class="modal-content">
                                        <span class="modal-close">&times;</span>
                                        <h2 id="modal-title"></h2>
                                        <div id="modal-image-container"></div>
                                        <p id="modal-description"></p>
                                        <p id="modal-price"></p>
                                        <div class="d-flex justify-content-between">
                                            <button id="modal-buy" class="btn btn-primary">Comprar</button>
                                            <button id="modal-add-to-cart" class="btn btn-primary">Agregar al carrito</button>
                                        </div>
                                    </div>
                                </div>
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

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            // Configuración inicial del slider range
            $("#price-slider").slider({
                range: true,
                min: 0,
                max: 100,
                values: [5, 25],
                slide: function (event, ui) {
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
            $("#filter-button").click(function () {
                var minPrice = $("#price-slider").slider("values", 0);
                var maxPrice = $("#price-slider").slider("values", 1);
                filterProducts(minPrice, maxPrice);
            });

            // Manejador de evento para el botón de vista rápida
            $(".btn-quick-view").click(function () {
                var card = $(this).closest(".card");
                var title = card.find(".card-title").text();
                var description = card.find(".card-text").next().text();
                var price = card.find(".card-text").text();

                // Rellenar la ventana emergente con la información del producto
                $("#modal-title").text(title);
                $("#modal-description").text(description);
                $("#modal-price").text(price);

                // Mostrar la ventana emergente
                $(".modal-container").fadeIn();
            });

            // Manejador de evento para el botón de cerrar la ventana emergente
            $(".modal-close").click(function () {
                // Ocultar la ventana emergente
                $(".modal-container").fadeOut();
            });
        });
    </script>
</body>

</html>






