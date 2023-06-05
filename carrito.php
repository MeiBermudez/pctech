<?php
require_once("includes/header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda - Carrito de Compras</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8">
            <h2 class="h6 d-flex justify-content-between align-items-center px-4 py-3 bg-secondary text-light">
                <span>Mi Carrito</span>
                <a class="font-size-sm text-decoration-none text-light" href="https://www.tutienda.com">
                    Continuar Comprando
                </a>
            </h2>
            <!-- Elemento del carrito -->
            <div class="cart-item d-flex justify-content-between my-4 pb-4 border-bottom">
                <div class="media">
                    <a class="cart-item-thumb" href="https://www.tutienda.com/producto/12345">
                        <img src="ruta_de_la_imagen.jpg" alt="Nombre del producto" class="img-fluid">
                    </a>
                    <div class="media-body pt-3">
                        <h3 class="product-title">
                            <a href="https://www.tutienda.com/producto/12345" class="text-decoration-none text-dark">Nombre del producto</a>
                        </h3>
                        <div class="product-price">$54.95</div>
                    </div>
                </div>
                <div class="product-quantity">
                    <form id="update12345" action="https://www.tutienda.com/carrito/actualizar/12345" method="post">
                        <input type="hidden" name="_token" value="token_de_seguridad">
                        <div class="input-group">
                            <label for="quantity12345" class="input-group-text">Cantidad</label>
                            <input class="form-control" type="number" name="qty" value="1">
                        </div>
                    </form>
                    <form method="post" id="remove12345" action="https://www.tutienda.com/carrito/eliminar/12345">
                        <input type="hidden" name="_token" value="token_de_seguridad">
                        <button class="btn btn-outline-danger btn-sm btn-block mt-2" type="submit">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
        <div class="cart-summary">
    <h2 class="h6 px-4 py-3 bg-secondary text-light text-center">Resumen de la Orden</h2>
    <div class="summary-item">
        <div class="d-flex justify-content-between">
            <span>Sub Total:</span>
            <span>$54.95</span>
        </div>
        <div class="d-flex justify-content-between">
            <span>Costo de Envío:</span>
            <span>$0.00</span>
        </div>
    </div>
    <div class="summary-total text-center py-3">
        $54.95
    </div>
    <form action="#" method="post">
    <!-- Campos adicionales -->
    
    <!-- Botón de pago -->
    <button type="submit" class="btn btn-primary btn-lg btn-block">Pagar con PayPal</button>
</form>

</div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
