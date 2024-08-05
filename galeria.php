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

    <div class="album py-3 bg-light">
        <div class="container">
        <h2 class="fw-bold" style="color:blue">Conoce nuestros proyectos</h2>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-lg">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://localhost/PROYECTOAWA/imagenes/instalacion.jpeg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Instalación de tinaco en coto residencial:
                  Instalamos tinacos en cotos residenciales, asegurando eficiencia y durabilidad en el suministro de agua. Garantizamos una instalación precisa y acorde a sus... </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Leer más</button>
                    </div>
                    <small class="text-muted">Hace 1 semana</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-lg">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://localhost/PROYECTOAWA/imagenes/mantenimiento2.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Mantenimiento de tinaco:
                  Ofrecemos servicio completo de mantenimiento de tinacos para garantizar agua limpia y segura en su hogar. Incluye inspección, limpieza y reparaciones necesarias.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Leer más</button>
                    </div>
                    <small class="text-muted">Hace 3 semanas</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-lg">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://localhost/PROYECTOAWA/imagenes/filtro2.jpeg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Colocación de filtro a tinaco:
                  Instalamos filtros en tinacos para mejorar la calidad del agua y proteger su salud. Seleccionamos el filtro adecuado para sus requerimientos específicos.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Leer más</button>
                    </div>
                    <small class="text-muted">Hace 1 mes</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-lg">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://localhost/PROYECTOAWA/imagenes/instalacion2.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Instalación de tinacos en coto residencial:
                  Especialistas en la instalación de tinacos en cotos residenciales, optimizando el almacenamiento de agua. Nuestro servicio incluye la revisión y ajuste final para asegurar el correcto funcionamiento.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Leer más</button>
                    </div>
                    <small class="text-muted">Hace 1 mes</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-lg">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://localhost/PROYECTOAWA/imagenes/lavado-de-tinaco.png" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Mantenimiento de tinaco:
                  Realizamos mantenimiento preventivo y correctivo de tinacos, prolongando su vida útil. Detectamos y solucionamos problemas antes de que se conviertan en fallas mayores.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Leer más</button>
                    </div>
                    <small class="text-muted">Hace 2 meses</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-lg">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://localhost/PROYECTOAWA/imagenes/limpieza2.jpg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Mantenimiento de tinaco:
                  Nuestro servicio de mantenimiento de tinacos incluye limpieza y revisión de todos sus componentes. Aseguramos que su sistema de almacenamiento de agua esté siempre en óptimas condiciones.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Leer más</button>
                    </div>
                    <small class="text-muted">Hace 2 meses</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
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