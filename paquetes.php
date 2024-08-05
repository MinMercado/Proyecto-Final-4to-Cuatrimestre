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
    <title>Awa</title>
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

    <section id="servicios">
              <div>
                  <img src="imagenes/003-water-filter.png" alt="filtro">
                  <h3>Purificacion de 5 etapas</h3>
                  <p>Incluyendo un sistema de</p>
                  <p>purificacion que consta</p>
                  <p>de 5 etapas y es uno de</p>
                  <p>los procesos físicos</p>
                  <p>más avanzados.</p>
              </div>
              <div>
                  <img src="imagenes/002-water.png" alt="water">
                  <h3>Ahorra espacio</h3>
                  <p>Nuestro sistema se instala</p>
                  <p>en la parte inferior de la </p>
                  <p>tarja de tu cocina.</p>
              </div>
              <div>
                  <img src="imagenes/001-water-tap.png" alt="water">
                  <h3>Sin garrafones</h3>
                  <p>Acceso a un sistema de</p>
                  <p>purificación de vanguardia,</p>
                  <p>¡directamente en tu casa!</p>
              </div>
              <div>
                  <img src="imagenes/004-technician.png" alt="water">
                  <h3>Servicio de soporte técnico</h3>
                  <p>Equipo especializado que te</p>
                  <p>atenderá cuando requieras</p>
                  <p>de nuestros servicios.</p>
              </div>
    </section>

    <div class="container py-3">
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Paquete Básico</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$349<small class="text-body-secondary fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>*Instalación del sistema</li>
              <li>*Agua ilimitada 24/7</li>
              <li>*Servicio de soporte técnico</li>
              <li>*Cambio de filtros anuales</li>
            </ul>
            <button class="btn btn-primary btn-block"><a href="http://localhost/PROYECTOAWA/formulario.php" class="text-white">Contáctanos</a></button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Mantenimiento</h4>
          </div>
      <div class="card-body">
          <h1 class="card-title pricing-card-title">$399<small class="text-body-secondary fw-light"> pesos</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>*Limpieza interna del tinaco</li>
              <li>*Reparaciones menores</li>
              <li>*Verificaciones del nivel de agua</li>
              <li>*Cambio de filtros</li>
            </ul>
            <button class="btn btn-primary btn-block"><a href="http://localhost/PROYECTOAWA/formulario.php" class="text-white">Contáctanos</a></button>
           </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Paquete Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$499<small class="text-body-secondary fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>*Servicio regular de purificación de agua</li>
              <li>*Cambio de filtros regulares cada 6 meses</li>
              <li>*Instalación de filtro de sedimentos pre-tinaco</li>
              <li>*Lavado de tinaco semestral</li>
            </ul>
            <button class="btn btn-primary btn-block"><a href="http://localhost/PROYECTOAWA/formulario.php" class="text-white">Contáctanos</a></button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4 titulo-azul tw-bolder">Awa en tu hogar</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Básico</th>
            <th style="width: 22%;">Mantenimiento</th>
            <th style="width: 22%;">Premium</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <th scope="row" class="text-start">Instalación del sistema</th>
          <td><p class="check-icon check">✓</p></td>
          <td><p class="check-icon check"></p></td>
          <td><p class="check-icon check">✓</p></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Lavado de tinaco/cisterna</th>
          <td><p class="check-icon check">✓</p></td>
          <td><p class="check-icon check">✓</p></td>
          <td><p class="check-icon check">✓</p></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Atención técnica 24/7</th>
          <td><p class="check-icon check">✓</p></td>
          <td><p class="check-icon check"></p></td>
          <td><p class="check-icon check">✓</p></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Cambio de filtros semestral</th>
          <td></td>
          <td><p class="check-icon check"></p></td>
          <td><p class="check-icon check">✓</p></td>
        </tr>
        <tr>
          <th scope="row" class="text-start">Reparaciones</th>
          <td><p class="check-icon check">✓</p></td>
          <td><p class="check-icon check">✓</p></td>
          <td><p class="check-icon check">✓</p></td>
        </tr>
        </tbody>
      </table>
    </div>
    <div>
      <p>
      Un contrato es un acuerdo formal entre partes que define sus derechos y obligaciones legales. Cada contrato que Awa ofrece establece claramente lo que cada parte debe hacer y qué sucede si no se cumplen los términos estipulados al contratar, favor de leer el contrato completo.</p>
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