<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="http://localhost/PROYECTOAWA/imagenes/Awa3 (1).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/PROYECTOAWA/css/estilo.css">
    <title>Galería</title>
</head>
<body class="quicksand"> 

    <div class="container text-center my-2">
            <img id="img1" src="http://localhost/PROYECTOAWA/imagenes/Awa3 (1).png" alt="Awa" class="img-fluid">
    </div>

    <header class="bg-light text-dark py-4">

        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-info" aria-current="page"
                                href="http://localhost/PROYECTOAWA/index.php">Inicio</a>
                        </li>
                        <li><a class="nav-link active text-info" aria-current="page" href="http://localhost/PROYECTOAWA/paquetes.php">Paquetes</a></li>
                        <li><a class="nav-link active text-info" aria-current="page" href="http://localhost/PROYECTOAWA/galeria.php">Galería</a></li>
                        <li class="nav-item">
                            <a class="nav-link text-info"
                                href="http://localhost/PROYECTOAWA/formulario.php">Contactanos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-info"
                                href="http://localhost/PROYECTOAWA/nosotros.php" data-bs-toggle="dropdown"
                                aria-expanded="false">Acerca de Awa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-info"
                                        href="http://localhost/PROYECTOAWA/nosotros.php">Nosotros</a></li>
                                <li><a class="dropdown-item text-info"
                                        href="http://localhost/PROYECTOAWA/login.php">Empleados</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container text-center my-4">
            <h1 id="headline" class="display-4 quicksand titulo-azul"><b>¡Calidad y Pureza en cada Gota!</b></h1>
            <h3 id="subheadline" class="lead">Agua Limpia, Vida Saludable</h3>
            </div>

    </header>

    <div class="row featurette py-4">
          <div class="col-md-7 order-md-2">
            <h2 class="titulo-azul fw-bold">¡Hablemos!<span class="titulo-azul"> Awa en tu hogar</span></h2>
                <p><strong>Nombre de la Empresa:</strong> AWA</p>
                <p><strong>Dirección:</strong> Calle independencia 55, Zona Centro, Guadalajara, Jalisco, México</p>
                <p><strong>Teléfono:</strong> +52 33 1234 5678</p>
                <p><strong>Correo Electrónico:</strong> contacto@awa.com</p>
                <p><strong>Horario de Atención:</strong> Lunes a Viernes, 9:00 AM - 6:00 PM</p>
                
            <button class="btn btn-primary btn-block">Llamar</button> 
        </div>
          <div class="col-md-5 order-md-1">
            <img class="img-thumbnail rounded mx-auto d-block shadow-lg" data-src="holder.js/300x300/auto" alt="300x300" style="width: 300px; height: 300px;" src="http://localhost/PROYECTOAWA/imagenes/mapa.png" data-holder-rendered="true">
          </div>
    </div>
    
    <hr class="featurette-divider">
    <section id="form" class="container my-3 ">
        <h2 class="mb-3 text-center fw-bold titulo-azul"><b>Formulario de Contratación</b></h2>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <form action="#" method="POST" class="border p-3 rounded shadow-sm bg-light">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="number" id="telefono" name="telefono" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="servicio" class="form-label">Servicio a Contratar:</label>
                        <select id="servicio" name="servicio" class="form-select" required>/
                            <option value="">Seleccione un servicio</option>
                            <option value="filtro_basico">Instalación Básica</option>
                            <option value="filtro_avanzado">Instalación Premium</option>
                            <option value="cisterna">Instalación de Cisterna</option>
                            <option value="mantenimiento">Mantenimiento</option>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button id="enviarForm" name="enviarForm" type="submit" class="btn btn-primary btn-block">Enviar Solicitud</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



    <footer class="text-secondary py-1">
        <div class="container shadow-top p-1 bg-light">
            <div class="row align-items-center">
                <!-- Logos de las empresas -->
                <div class="col-md-6 d-flex justify-content-center justify-content-md-start mb-1 mb-md-0">
                    <img src="http://localhost/PROYECTOAWA/imagenes/BHLogo.png" alt="Logo Empresa 1" class="img-fluid me-3" style="max-height: 40px;">
                    <img src="http://localhost/PROYECTOAWA/imagenes/logo.png" alt="Logo Empresa 2" class="img-fluid me-4" style="max-height: 40px;">
                </div>
                <div class="col-md-6 d-flex justify-content-center justify-content-md-end align-items-center">
                    <ul class="list-unstyled mb-0 d-flex align-items-center">
                        <li class="ms-3">
                            <a href="http://localhost/PROYECTOAWA/index.php" class="text-info text-decoration-none">Inicio</a>
                        </li>
                        <li class="ms-3">
                            <a href="http://localhost/PROYECTOAWA/paquetes.php" class="text-info text-decoration-none">Servicios</a>
                        </li>
                        <li class="ms-3">
                            <a href="http://localhost/PROYECTOAWA/formulario.php" class="text-info text-decoration-none">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
                <p class="mb-1">&copy; 2024 Awa. by ByteHub.</p>
            </div>
        </div>
    </footer>

   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="JS.js"></script>
</body>
</html>