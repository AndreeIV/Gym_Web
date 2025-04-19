<?php include('./views/header.php'); ?>

<main>
    <!-- Carousel con Bootstrap 5 -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Primer slide -->
            <div class="carousel-item active slider">
                <img src="./build/imgs/background.jpg" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a nuestro sitio</h5>
                    <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                    <a href="#seccion" class="btn-custom">Ir a la sección</a>
                </div>
            </div>
            <div class="carousel-item slider">
                <img src="./build/imgs/background1.jpg" class="d-block w-100" alt="Imagen 1">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a nuestro sitio</h5>
                    <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                    <a href="#seccion" class="btn-custom">Ir a la sección</a>
                </div> -->
            </div>
            <div class="carousel-item slider">
                <img src="./build/imgs/background2.jpg" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a nuestro sitio</h5>
                    <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                    <a href="#seccion" class="btn-custom">Ir a la sección</a>
                </div>
            </div>
            <div class="carousel-item slider">
                <img src="./build/imgs/background3.webp" class="d-block w-100 h-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a nuestro sitio</h5>
                    <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                    <a href="#seccion" class="btn-custom">Ir a la sección</a>
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
        <p>Esta es la sección a la que el botón sdsdsdsdsdte llevará.</p>
    </section>

    <!-- ! Section Planes -->
    <section class="planes">
        <h2>Elige tus Planes</h2>
        <p>¡Comienza a entrenar con nosotros! Elige el plan que quieras y nos vemos en la sede de tu preferencia.</p>

        <div class="card-group">
            <div class="card">
                <div class="card-header">
                    Plan <span>Básico</span><br>
                    <div class="precio">S/99dsdsdsd soles al mes</div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ideal para principiantes quieran comenzar su cambio
                        Incluye:</h5>
                    <div class="card-text">
                        <ul class="beneficios">
                            <li>Acceso a máquinas de fuerza y cardio</li>
                            <li>1 evaluación física inicial</li>
                            <li>Rutina personalizada básica</li>
                            <li>Locker diario</li>
                            <li>Horario libre</li>
                        </ul>
                    </div>
                    <a class="btn btn-danger" href="#" role="button">Empieza Hoy</a>
                </div>
                
            </div>
            <div class="card">
                <div class="card-header">
                    Plan <span>Intermedio</span>
                    <div class="precio">S/149 soles al mes</div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Para quienes buscan progresar y mejorar
                        Incluye todo lo del Plan Básico, más:</h5>
                    <div class="card-text">
                        <ul class="beneficios">
                            <li>2 clases grupales por semana (funcional, HIIT, etc.)</li>
                            <li>Rutina avanzada con seguimiento mensual</li>
                            <li>Asesoramiento nutricional general</li>
                            <li>Acceso a zona de estiramiento premium</li>

                        </ul>
                    </div>
                    <a class="btn btn-danger" href="#" role="button">Empieza Hoy</a>
                </div>
                
            </div>
            <div class="card">
                <div class="card-header">
                    Plan <span>Premiun</span>
                    <div class="precio">S/229 soles al mes</div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Para los que no tienen límites
                        Incluye todo lo del Plan Intermedio, más:</h5>
                    <div class="card-text">
                        <ul class="beneficios">
                            <li>Clases ilimitadas</li>
                            <li>Personal trainer 1 vez por semana</li>
                            <li>Análisis corporal por bioimpedancia</li>
                            <li>Suplemento post entrenamiento (1 diario)</li>
                            <li>Acceso VIP: zona exclusiva y prioridad de atención</li>

                        </ul>
                    </div>


                    <a class="btn btn-danger" href="#" role="button">Empieza Hoy</a>
                </div>
            </div>
        </div>

    </section>

</main>

<?php include('./views/footer.php'); ?>