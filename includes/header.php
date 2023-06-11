<!doctype html>
<html lang="en">

<head>
    <title>Tienda Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/head.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropdownTogglers = document.querySelectorAll('.navbar-nav .nav-item.dropdown .dropdown-toggle');

            dropdownTogglers.forEach(function(toggler) {
                var dropdownMenu = toggler.nextElementSibling;
                var hasSubmenu = dropdownMenu.classList.contains('dropdown-menu');

                if (!hasSubmenu) {
                    toggler.parentNode.classList.add('no-caret');
                }
            });
        });
    </script>
</head>

<body>
    <!--encabezado de la pagina-->
    <header>
        <nav id="header-navbar" class="navbar navbar-expand-lg navbar-dark small-icons-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">PCTECH Santa Ana</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item search-bar">
                            <div class="input-group justify-content-center">
                                <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
                                <button class="btn btn-outline-light" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                            </div>
                        </li>
                        <!--Formulario de inicio de sesion-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user small-icon"></i> Iniciar sesión
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="loginDropdown">
                                <form class="px-4 py-3 custom-form" action="login.php" method="POST">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" name="correo" placeholder="Ingresa tu correo electrónico">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="clave" name="clave" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                                    </div>
                                </form>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    ¿Aún no tienes una cuenta?
                                </a>
                                <div class="text-center">
                                    <a href="registro.php">Regístrate</a>
                                </div>


                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-shopping-cart small-icon"></i> Carrito</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--menu de la pagina-->
    <div id="navbar-container">
        <nav id="categories-navbar" class="navbar navbar-expand-lg navbar-light bg-light w-100 text-center">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav2">
                    <ul class="navbar-nav navbar-dark custom-navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-tags"></i> <span>Ofertas</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="accesoriosDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-music"></i> <span>Audio</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="accesoriosDropdown">
                                <a class="dropdown-item" href="audifonos.php">Audifonos</a>
                                <a class="dropdown-item" href="bocinas.php">Bocinas</a>
                                <a class="dropdown-item" href="microfonos.php">Microfonos</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="audioDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-wifi"></i> <span>Conectividad</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="audioDropdown">
                                <a class="dropdown-item" href="repetidores.php">Repetidores</a>
                                <a class="dropdown-item" href="adaptadores.php">Adaptadores</a>
                                <a class="dropdown-item" href="cables.php">Cables</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="componentesDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-microchip"></i> <span>Componentes</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="componentesDropdown">
                                <a class="dropdown-item" href="ram.php">Memorias RAM</a>
                                <a class="dropdown-item" href="almacenamiento.php">Almacenamiento</a>
                                <a class="dropdown-item" href="cooler.php">Cooler</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="accesoriosDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-laptop"></i> <span>Accesorios</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="accesoriosDropdown">
                                <a class="dropdown-item" href="mouse.php">Mouse</a>
                                <a class="dropdown-item" href="teclado.php">Teclados</a>
                                <a class="dropdown-item" href="cargadores.php">cargadores</a>
                                <a class="dropdown-item" href="otros.php">Otros</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sublimacion.php"><i class="fas fa-paint-brush"></i> <span>Sublimación</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>