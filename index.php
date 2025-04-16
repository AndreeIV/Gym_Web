<?php include('./views/header.php'); ?>

<main>
    <!-- Carousel con Bootstrap 5 -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Primer slide -->
        <div class="carousel-item active">
            <img src="./build/imgs/background.jpg" class="d-block w-100" alt="Imagen 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Bienvenido a nuestro sitio</h5>
                <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                <a href="#seccion" class="btn-custom">Ir a la sección</a>
            </div>
        </div>
        <!-- Segundo slide -->
        <div class="carousel-item">
            <img src="https://static.vecteezy.com/system/resources/previews/000/677/302/non_2x/abstract-technology-banner-background.jpg" class="d-block w-100" alt="Imagen 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Explora nuestros productos</h5>
                <p>Descubre todo lo que tenemos para ti en nuestra tienda online.</p>
                <a href="#seccion" class="btn-custom">Ver más</a>
            </div>
        </div>
        <!-- Tercer slide -->
        <div class="carousel-item">
            <img src="https://static.vecteezy.com/system/resources/previews/000/677/302/non_2x/abstract-technology-banner-background.jpg" class="d-block w-100" alt="Imagen 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Ofertas exclusivas</h5>
                <p>No te pierdas nuestras promociones y descuentos especiales.</p>
                <a href="#seccion" class="btn-custom">Aprovecha ahora</a>
            </div>
        </div>
    </div>
    <!-- Controles del carousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<!-- Sección a la que el botón redirige -->
<section id="seccion" class="container py-5">
    <h2>Bienvenido a la Sección</h2>
    <p>Esta es la sección a la que el botón te llevará.</p>
</section>

    
</main>

<?php include('./views/footer.php'); ?>