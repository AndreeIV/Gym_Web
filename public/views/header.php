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
  <link rel="shortcut icon" href="public/build/imgs/logo2.png" type="image/x-icon">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="public\build\css\app.css">
</head>

<body>
  <header>
    <!-- Header -->

    <div class="bg-light border-bottom py-4">
      <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
        <!-- Nombre de la empresa -->
        <div class="fw-bold header-text logo-header">
          <img src="public/build/imgs/logo2.png" alt="Logo">
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
    <nav class="navbar navbar-expand-lg bg-dark container_navegacion" data-bs-theme="dark">
  <div class="container-fluid navegacion">
    <a class="navbar-brand logo" href="index.php">Elite Fitness</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="nosotros.php">Sobre Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Planes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Más
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Horarios</a></li>
            <li><a class="dropdown-item" href="clases.php">Clases grupales</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Iniciar Sesión</a></li>
            <li><a class="dropdown-item" href="public\views\loginregister1.html">Registrarse</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </header>