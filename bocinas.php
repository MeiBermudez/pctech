<?php require_once("includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bocinas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  
    </script>
    <style>
        /* Estilos CSS personalizados */
        .price_label {
            margin-top: 10px;
        }

        #price-slider {
            width: 100%;
            margin-bottom: 20px;
        }

        #product-list .card {
            width: 100%;
        }

        #product-list .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        #product-list .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        #product-list .card-text {
            margin-bottom: 10px;
        }

        #product-list .btn-description,
        #product-list .btn-add-to-cart {
            width: 100%;
        }

        #product-modal .modal-body {
            text-align: center;
        }

        #product-modal .modal-img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .input-quantity {
            width: 60px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center my-4">Bocinas</h1>
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
                            <img src="https://th.bing.com/th/id/R.a628028206b5033dfb49c3673192d094?rik=JqEBEjqxCeuwKw&riu=http%3a%2f%2fprevenblog.com%2fwp-content%2fuploads%2fmouse.jpg&ehk=Ilrw4tNqVqokdQVY9g5LIVdH9XW9SXUoBTyu%2bKkBCXg%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="Producto">
                            <div class="card-body">
                                <h5 class="card-title">Producto 2</h5>
                                <p class="card-text">Descripción del producto.</p>
                                <p class="card-text">Precio: $49.99</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary btn-add-to-cart" style="background-color: orange; color: white;">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="btn btn-primary btn-description" data-toggle="modal" data-target="#product-modal"
                                        data-product-id="2" data-product-title="Producto 2" data-product-image="https://th.bing.com/th/id/R.a628028206b5033dfb49c3673192d094?rik=JqEBEjqxCeuwKw&riu=http%3a%2f%2fprevenblog.com%2fwp-content%2fuploads%2fmouse.jpg&ehk=Ilrw4tNqVqokdQVY9g5LIVdH9XW9SXUoBTyu%2bKkBCXg%3d&risl=&pid=ImgRaw&r=0"
                                        data-product-description="Descripción del producto 2" style="background-color: blue; color: white;">Vista Previa</button>
                                </div>
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
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary btn-add-to-cart" style="background-color: orange; color: white;">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                    <button class="btn btn-primary btn-description" data-toggle="modal" data-target="#product-modal"
                                        data-product-id="2" data-product-title="Producto 2" data-product-image="path_to_image"
                                        data-product-description="Descripción del producto 2" style="background-color: blue; color: white;">Vista Previa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin productos -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="product-modal" class="modal fade" tabindex="-1" aria-labelledby="product-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="product-modal-label"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="" class="modal-img" alt="Producto">
                        </div>
                        <div class="col-md-7">
                            <h5>Nombre del Producto</h5>
                            <div class="d-flex align-items-center mb-3">
                                <div class="input-group">
                                    <input type="number" id="quantity" name="quantity" min="1" value="1" class="form-control form-control-sm input-quantity">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-add-to-cart" style="background-color: orange; color: white;">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p>Información adicional</p>
                            <p>Precio: $99.99</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            var minPrice = 0;
            var maxPrice = 100;
            var priceRange = $("#price-range");

            // Inicializar el slider
            $("#price-slider").slider({
                range: true,
                min: 0,
                max: 100,
                values: [0, 100],
                slide: function (event, ui) {
                    priceRange.text("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });

            // Mostrar el rango de precio inicial
            var initialRange = $("#price-slider").slider("values");
            priceRange.text("$" + initialRange[0] + " - $" + initialRange[1]);

            // Filtrar productos al hacer clic en el botón "Filtrar"
            $("#filter-button").on("click", function () {
                var minPrice = $("#price-slider").slider("values", 0);
                var maxPrice = $("#price-slider").slider("values", 1);

                // Filtrar los productos según el rango de precio
                $("#product-list .card").each(function () {
                    var productPrice = parseFloat($(this).find(".card-text").text().replace("$", ""));
                    if (productPrice >= minPrice && productPrice <= maxPrice) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });

            // Actualizar el rango de precio al mover el slider
            $("#price-slider").on("slide", function (event, ui) {
                priceRange.text("$" + ui.values[0] + " - $" + ui.values[1]);
            });
            // Menú del encabezado
            $(".nav-link").click(function () {
                $(".nav-link").removeClass("active");
                $(this).addClass("active");
            });

            // Modal
            $(".btn-description").click(function () {
                var productId = $(this).data("product-id");
                var productTitle = $(this).data("product-title");
                var productImage = $(this).data("product-image");
                var productDescription = $(this).data("product-description");

                $(".modal-title").text(productTitle);
                $(".modal-img").attr("src", productImage);
                $(".modal-description").text(productDescription);

                $("#product-modal").modal("show");
            });

            // Slider de precio
            $("#price-slider").slider({
                range: true,
                min: 0,
                max: 200,
                values: [0, 200],
                slide: function (event, ui) {
                    $("#price-range").text("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
        });
    </script>
</body>

</html>
