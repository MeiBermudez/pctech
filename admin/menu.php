<!DOCTYPE html>
<html lang="es">
<head>
    <title>Interfaz del Administrador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Cargar página inicial al cargar la interfaz del administrador
            $("#content").load("pedidos.php");

            // Manejar los eventos de clic en los elementos del menú
            $(".nav-link").click(function(e) {
                e.preventDefault();
                var page = $(this).attr("href");
                $("#content").load(page);
            });
        });
    </script>
    <style>
        .sidebar {
            padding-top: 4rem;
            background-color: #f8f9fa;
        }

        .sidebar .nav-link {
            padding: 10px 20px;
            font-size: 18px;
        }

        .sidebar .bi {
            font-size: 24px;
            margin-right: 10px;
        }

        @media (min-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                z-index: 100;
                width: 250px;
                overflow-x: hidden;
                overflow-y: auto;
            }
        }
        #content{
          padding-top:4rem;
        }
    </style>
</head>
<body>
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="pedidos.php">
                        <i class="bi bi-list"></i> Gestionar Pedidos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes.php">
                        <i class="bi bi-people"></i> Ver Clientes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">
                        <i class="bi bi-plus"></i> Agregar Producto
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gestionarCategorias.php">
                        <i class="bi bi-tags"></i> Gestionar Categorías
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="verInformes.php">
                        <i class="bi bi-file-earmark-bar-graph"></i> Ver Informes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">
                        <i class="bi bi-door-open"></i> Salir
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Panel de Administrador</a>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 offset-md-3">
                <div id="content">
                 
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>