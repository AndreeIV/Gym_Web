<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elite | Fitness</title>

  <meta name="keywords" content="html5,css,javascript,desarrollo web">
  <meta name="author" content="Jhonathan Andree Ismodes Orbegozo">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">

  <!-- Para los estilos css y el icono -->
  <link rel="shortcut icon" href="build/imgs/logo2.png" type="image/x-icon">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="build\css\app.css?v=<?php echo time(); ?>">
</head>

<body>
  <header>
    <!-- Header -->

    <div class="bg-light border-bottom py-4">
      <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
        <!-- Nombre de la empresa -->
        <div class="fw-bold header-text">
          Elite Fitness
        </div>

        <!-- Teléfono y correo -->
        <div>
          <i class="fas fa-phone me-2 text-dark"></i>+51 938985009
          <span class="mx-3">|</span>
          <i class="fas fa-envelope me-2 text-dark"></i>elitefitness@gmail.com
        </div>

        <!-- Redes sociales -->
        <div class="redes_sociales">
          <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-dark me-3"><i class="fab fa-x-twitter"></i></a>
          <a href="#" class="text-dark me-3"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>

    <!-- Navbar content -->
    <nav class="navbar navbar-expand-lg border-bottom bg-dark  border-body navegacion_content" data-bs-theme="dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between container_navegacion" id="navbarSupportedContent">
          <ul class="navbar-nav navegacion">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill p-1"></i>Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-person-fill p-1"></i>Proveedores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-people-fill p-1"></i>Patrocinios</a>
            </li>
            <!-- !Toggle -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-box-fill p-1"></i>Servicios
              </a>
              <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Construccion</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Carpinteria</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Electricidad</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Gasfitería</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Soldadura</a>
                <div class="dropdown-divider"></div>

              </div>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control form-control-lg me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>