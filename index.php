<?php include('public/views/header.php'); ?>

<main>
    <!-- Carousel con Bootstrap 5 -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Primer slide -->
            <div class="carousel-item active slider">
                <img src="./public/build/imgs/background.jpg" class="d-block w-100" alt="Imagen 1">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a nuestro sitio</h5>
                    <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                    <a href="#seccion" class="btn-custom">Ir a la sección</a>
                </div> -->
            </div>
            <div class="carousel-item slider">
                <img src="./public/build/imgs/background1.jpg" class="d-block w-100" alt="Imagen 1">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a nuestro sitio</h5>
                    <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                    <a href="#seccion" class="btn-custom">Ir a la sección</a>
                </div> -->
            </div>
            <div class="carousel-item slider">
                <img src="./public/build/imgs/background2.jpg" class="d-block w-100" alt="Imagen 1">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a nuestro sitio</h5>
                    <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                    <a href="#seccion" class="btn-custom">Ir a la sección</a>
                </div> -->
            </div>
            <div class="carousel-item slider">
                <img src="./public/build/imgs/background3.webp" class="d-block w-100 h-100" alt="Imagen 1">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a nuestro sitio</h5>
                    <p>Este es un ejemplo de carousel elegante y moderno usando Bootstrap 5.</p>
                    <a href="#seccion" class="btn-custom">Ir a la sección</a>
                </div> -->
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

   

    <!-- ! Section Planes -->
    <section class="planes">
        <h2>Elige tus <span>Planes</span></h2>
        <p>¡Comienza a entrenar con nosotros! Elige el plan que quieras y nos vemos en la sede de tu preferencia.</p>

        <div class="card-group">
            <div class="card">
                <div class="card-header">
                    Plan <span>Básico</span><br>
                    <div class="precio">S/99 soles al mes</div>
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

    <!-- ! Clases Grupales -->
    <section class="clases-grupales">
        <h2>Conoce Nuestras Clases Grupales <span>EXCLUSIVAS</span></h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="public/build/imgs/zumba.png" class="card-img-top" alt="...">
                    <div class="card-body clases">
                        <h5 class="card-title">Zumba</h5>
                        <ul class="container-plus">
                            <li class="plus-items">
                                <span class="icono">
                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.2582 27.9H14.2587C15.9884 27.9009 17.7016 27.5639 19.3005 26.908C20.8993 26.2521 22.3527 25.29 23.5776 24.0764C24.8024 22.8628 25.7747 21.4213 26.4385 19.8341C27.1023 18.247 27.4445 16.5454 27.4455 14.8266V14.8261C27.4455 12.2393 26.6723 9.71116 25.2246 7.5613C23.7769 5.41152 21.72 3.73682 19.3147 2.74776C16.9094 1.75872 14.263 1.49932 11.7096 2.00206C9.15609 2.5048 6.8092 3.74734 4.96592 5.57377C3.12257 7.40026 1.86564 9.72874 1.35517 12.2653C0.844681 14.8019 1.10383 17.4315 2.09954 19.8216C3.09522 22.2117 4.78236 24.254 6.94658 25.6915C9.11072 27.1289 11.6551 27.8971 14.2582 27.9Z" stroke="#8D8D8D" stroke-width="1.8"></path>
                                        <path d="M14.2619 24.5652C12.3205 24.5631 10.4233 23.9901 8.81018 22.9186C7.19701 21.8472 5.94028 20.3254 5.19882 18.5456C4.45737 16.7659 4.26448 14.808 4.64454 12.9195C5.0246 11.031 5.96054 9.29665 7.33407 7.93568C8.7076 6.57471 10.457 5.64822 12.3613 5.2733C14.2655 4.89838 16.2391 5.09188 18.0325 5.82932C19.8259 6.56677 21.3587 7.81506 22.437 9.41642C23.5154 11.0178 24.0909 12.9003 24.0909 14.8261C24.0902 16.1057 23.8354 17.3727 23.3411 18.5547C22.8467 19.7367 22.1225 20.8105 21.2098 21.7149C20.2971 22.6193 19.2138 23.3364 18.0217 23.8255C16.8295 24.3146 15.552 24.5659 14.2619 24.5652Z" stroke="#FDB924" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="60 200"></path>
                                        <path d="M16.6493 18.4481L17.2593 19.0295C17.3309 19.1081 17.418 19.1711 17.5153 19.2147C17.6126 19.2582 17.7179 19.2813 17.8246 19.2825C17.9313 19.2838 18.0372 19.2631 18.1354 19.2217C18.2337 19.1804 18.3223 19.1194 18.3956 19.0425C18.4689 18.9656 18.5254 18.8744 18.5615 18.7748C18.5976 18.6752 18.6126 18.5692 18.6054 18.4636C18.5982 18.3579 18.5691 18.2549 18.5198 18.161C18.4706 18.0671 18.4023 17.9843 18.3192 17.9178L17.717 17.3456L13.7718 13.6157L10.1359 10.1667C9.98441 10.0455 9.79241 9.98542 9.59821 9.99841C9.40401 10.0114 9.22189 10.0965 9.08815 10.2368C8.95441 10.3771 8.8789 10.5622 8.87666 10.7553C8.87442 10.9483 8.94563 11.1351 9.07608 11.2784L12.7319 14.7358L16.6493 18.4481Z" fill="#FDB924"></path>
                                        <path d="M13.6571 16.9862C14.7769 17.2628 15.9106 16.5865 16.1894 15.4758C16.4682 14.3651 15.7865 13.2405 14.6667 12.964C13.547 12.6874 12.4133 13.3636 12.1345 14.4744C11.8557 15.5851 12.5374 16.7097 13.6571 16.9862Z" fill="#FDB924"></path>
                                    </svg>
                                </span>
                                <p class="name-item">
                                    Duración
                                </p>
                                <p class="desc-item">
                                    45/50 min
                                </p>
                            </li>
                            <li class="new-home-v4-training-classes-details-list__item">
                                <span class="icono">
                                    <svg width="34" height="29" viewBox="0 0 34 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 6H3C1.89543 6 1 6.89543 1 8V22C1 23.1046 1.89543 24 3 24H11.0625M19.375 6H27C28.1046 6 29 6.89543 29 8V22C29 23.1046 28.1046 24 27 24H17.625" stroke="#8A8C8E" stroke-width="1.6" stroke-linecap="round"></path>
                                        <path d="M29 9H31C32.1046 9 33 9.89543 33 11V19C33 20.1046 32.1046 21 31 21H29V9Z" stroke="#8A8C8E" stroke-width="1.6"></path>
                                        <line x1="5.8" y1="9.8" x2="4.8" y2="21.2" stroke="#8A8C8E" stroke-width="1.6" stroke-linecap="round"></line>
                                        <line x1="23.8" y1="9.8" x2="22.8" y2="21.2" stroke="#8A8C8E" stroke-width="1.6" stroke-linecap="round"></line>
                                        <path d="M15.7025 11.1899L17.7576 2.96957C17.8712 2.51538 17.2459 2.26932 17.0195 2.67908L8.53105 18.0391C8.35048 18.3658 8.6763 18.7399 9.02474 18.6059L13.8216 16.7609C14.1159 16.6477 14.4193 16.9036 14.3575 17.2127L12.5858 26.0711C12.4943 26.5287 13.1271 26.7458 13.3358 26.3284L21.49 10.0199C21.6591 9.68173 21.308 9.31941 20.9646 9.47786L16.2582 11.6501C15.9532 11.7908 15.6211 11.5157 15.7025 11.1899Z" fill="#FDB924"></path>
                                    </svg>
                                </span>
                                <p class="name-item">
                                    Intensidad
                                </p>
                                <p class="desc-item">
                                    Alta
                                </p>
                            </li>
                        </ul>
                        <hr>
                        <p class="card-text">Diviértete en una clase que fusiona el baile con una rutina de ejercicios al compás de la música, mejorando tu forma física y tu coordinación.</p>
                    </div>
                    
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="public/build/imgs/tabata.png" class="card-img-top" alt="...">
                    <div class="card-body clases">
                        <h5 class="card-title">Tabata</h5>

                        <ul class="container-plus">
                            <li class="plus-items">
                                <span class="icono">
                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.2582 27.9H14.2587C15.9884 27.9009 17.7016 27.5639 19.3005 26.908C20.8993 26.2521 22.3527 25.29 23.5776 24.0764C24.8024 22.8628 25.7747 21.4213 26.4385 19.8341C27.1023 18.247 27.4445 16.5454 27.4455 14.8266V14.8261C27.4455 12.2393 26.6723 9.71116 25.2246 7.5613C23.7769 5.41152 21.72 3.73682 19.3147 2.74776C16.9094 1.75872 14.263 1.49932 11.7096 2.00206C9.15609 2.5048 6.8092 3.74734 4.96592 5.57377C3.12257 7.40026 1.86564 9.72874 1.35517 12.2653C0.844681 14.8019 1.10383 17.4315 2.09954 19.8216C3.09522 22.2117 4.78236 24.254 6.94658 25.6915C9.11072 27.1289 11.6551 27.8971 14.2582 27.9Z" stroke="#8D8D8D" stroke-width="1.8"></path>
                                        <path d="M14.2619 24.5652C12.3205 24.5631 10.4233 23.9901 8.81018 22.9186C7.19701 21.8472 5.94028 20.3254 5.19882 18.5456C4.45737 16.7659 4.26448 14.808 4.64454 12.9195C5.0246 11.031 5.96054 9.29665 7.33407 7.93568C8.7076 6.57471 10.457 5.64822 12.3613 5.2733C14.2655 4.89838 16.2391 5.09188 18.0325 5.82932C19.8259 6.56677 21.3587 7.81506 22.437 9.41642C23.5154 11.0178 24.0909 12.9003 24.0909 14.8261C24.0902 16.1057 23.8354 17.3727 23.3411 18.5547C22.8467 19.7367 22.1225 20.8105 21.2098 21.7149C20.2971 22.6193 19.2138 23.3364 18.0217 23.8255C16.8295 24.3146 15.552 24.5659 14.2619 24.5652Z" stroke="#FDB924" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="60 200"></path>
                                        <path d="M16.6493 18.4481L17.2593 19.0295C17.3309 19.1081 17.418 19.1711 17.5153 19.2147C17.6126 19.2582 17.7179 19.2813 17.8246 19.2825C17.9313 19.2838 18.0372 19.2631 18.1354 19.2217C18.2337 19.1804 18.3223 19.1194 18.3956 19.0425C18.4689 18.9656 18.5254 18.8744 18.5615 18.7748C18.5976 18.6752 18.6126 18.5692 18.6054 18.4636C18.5982 18.3579 18.5691 18.2549 18.5198 18.161C18.4706 18.0671 18.4023 17.9843 18.3192 17.9178L17.717 17.3456L13.7718 13.6157L10.1359 10.1667C9.98441 10.0455 9.79241 9.98542 9.59821 9.99841C9.40401 10.0114 9.22189 10.0965 9.08815 10.2368C8.95441 10.3771 8.8789 10.5622 8.87666 10.7553C8.87442 10.9483 8.94563 11.1351 9.07608 11.2784L12.7319 14.7358L16.6493 18.4481Z" fill="#FDB924"></path>
                                        <path d="M13.6571 16.9862C14.7769 17.2628 15.9106 16.5865 16.1894 15.4758C16.4682 14.3651 15.7865 13.2405 14.6667 12.964C13.547 12.6874 12.4133 13.3636 12.1345 14.4744C11.8557 15.5851 12.5374 16.7097 13.6571 16.9862Z" fill="#FDB924"></path>
                                    </svg>
                                </span>
                                <p class="name-item">
                                    Duración
                                </p>
                                <p class="desc-item">
                                    30 min
                                </p>
                            </li>
                            <li class="new-home-v4-training-classes-details-list__item">
                                <span class="icono">
                                    <svg width="34" height="29" viewBox="0 0 34 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 6H3C1.89543 6 1 6.89543 1 8V22C1 23.1046 1.89543 24 3 24H11.0625M19.375 6H27C28.1046 6 29 6.89543 29 8V22C29 23.1046 28.1046 24 27 24H17.625" stroke="#8A8C8E" stroke-width="1.6" stroke-linecap="round"></path>
                                        <path d="M29 9H31C32.1046 9 33 9.89543 33 11V19C33 20.1046 32.1046 21 31 21H29V9Z" stroke="#8A8C8E" stroke-width="1.6"></path>
                                        <line x1="5.8" y1="9.8" x2="4.8" y2="21.2" stroke="#8A8C8E" stroke-width="1.6" stroke-linecap="round"></line>
                                        <line x1="23.8" y1="9.8" x2="22.8" y2="21.2" stroke="#8A8C8E" stroke-width="1.6" stroke-linecap="round"></line>
                                        <path d="M15.7025 11.1899L17.7576 2.96957C17.8712 2.51538 17.2459 2.26932 17.0195 2.67908L8.53105 18.0391C8.35048 18.3658 8.6763 18.7399 9.02474 18.6059L13.8216 16.7609C14.1159 16.6477 14.4193 16.9036 14.3575 17.2127L12.5858 26.0711C12.4943 26.5287 13.1271 26.7458 13.3358 26.3284L21.49 10.0199C21.6591 9.68173 21.308 9.31941 20.9646 9.47786L16.2582 11.6501C15.9532 11.7908 15.6211 11.5157 15.7025 11.1899Z" fill="#FDB924"></path>
                                    </svg>
                                </span>
                                <p class="name-item">
                                    Intensidad
                                </p>
                                <p class="desc-item">
                                    Alta
                                </p>
                            </li>
                        </ul>

                        <hr>
                        <p class="card-text">Clase de intervalos de alta intensidad, donde ejercicios vigorosos se combinan con breves descansos para maximizar resultados. Mejora tu resistencia, fuerza y salud en general en sesiones dinámicas y efectivas.</p>
                    </div>
                    <
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="public/build/imgs/bike.png" class="card-img-top" alt="...">
                    <div class="card-body clases">
                        <h5 class="card-title">Bike</h5>
                        <ul class="container-plus">
                            <li class="plus-items">
                                <span class="icono">
                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.2582 27.9H14.2587C15.9884 27.9009 17.7016 27.5639 19.3005 26.908C20.8993 26.2521 22.3527 25.29 23.5776 24.0764C24.8024 22.8628 25.7747 21.4213 26.4385 19.8341C27.1023 18.247 27.4445 16.5454 27.4455 14.8266V14.8261C27.4455 12.2393 26.6723 9.71116 25.2246 7.5613C23.7769 5.41152 21.72 3.73682 19.3147 2.74776C16.9094 1.75872 14.263 1.49932 11.7096 2.00206C9.15609 2.5048 6.8092 3.74734 4.96592 5.57377C3.12257 7.40026 1.86564 9.72874 1.35517 12.2653C0.844681 14.8019 1.10383 17.4315 2.09954 19.8216C3.09522 22.2117 4.78236 24.254 6.94658 25.6915C9.11072 27.1289 11.6551 27.8971 14.2582 27.9Z" stroke="#8D8D8D" stroke-width="1.8"></path>
                                        <path d="M14.2619 24.5652C12.3205 24.5631 10.4233 23.9901 8.81018 22.9186C7.19701 21.8472 5.94028 20.3254 5.19882 18.5456C4.45737 16.7659 4.26448 14.808 4.64454 12.9195C5.0246 11.031 5.96054 9.29665 7.33407 7.93568C8.7076 6.57471 10.457 5.64822 12.3613 5.2733C14.2655 4.89838 16.2391 5.09188 18.0325 5.82932C19.8259 6.56677 21.3587 7.81506 22.437 9.41642C23.5154 11.0178 24.0909 12.9003 24.0909 14.8261C24.0902 16.1057 23.8354 17.3727 23.3411 18.5547C22.8467 19.7367 22.1225 20.8105 21.2098 21.7149C20.2971 22.6193 19.2138 23.3364 18.0217 23.8255C16.8295 24.3146 15.552 24.5659 14.2619 24.5652Z" stroke="#FDB924" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="60 200"></path>
                                        <path d="M16.6493 18.4481L17.2593 19.0295C17.3309 19.1081 17.418 19.1711 17.5153 19.2147C17.6126 19.2582 17.7179 19.2813 17.8246 19.2825C17.9313 19.2838 18.0372 19.2631 18.1354 19.2217C18.2337 19.1804 18.3223 19.1194 18.3956 19.0425C18.4689 18.9656 18.5254 18.8744 18.5615 18.7748C18.5976 18.6752 18.6126 18.5692 18.6054 18.4636C18.5982 18.3579 18.5691 18.2549 18.5198 18.161C18.4706 18.0671 18.4023 17.9843 18.3192 17.9178L17.717 17.3456L13.7718 13.6157L10.1359 10.1667C9.98441 10.0455 9.79241 9.98542 9.59821 9.99841C9.40401 10.0114 9.22189 10.0965 9.08815 10.2368C8.95441 10.3771 8.8789 10.5622 8.87666 10.7553C8.87442 10.9483 8.94563 11.1351 9.07608 11.2784L12.7319 14.7358L16.6493 18.4481Z" fill="#FDB924"></path>
                                        <path d="M13.6571 16.9862C14.7769 17.2628 15.9106 16.5865 16.1894 15.4758C16.4682 14.3651 15.7865 13.2405 14.6667 12.964C13.547 12.6874 12.4133 13.3636 12.1345 14.4744C11.8557 15.5851 12.5374 16.7097 13.6571 16.9862Z" fill="#FDB924"></path>
                                    </svg>
                                </span>
                                <p class="name-item">
                                    Duración
                                </p>
                                <p class="desc-item">
                                    45/50 min
                                </p>
                            </li>
                            <li class="new-home-v4-training-classes-details-list__item">
                                <span class="icono">
                                    <svg width="34" height="29" viewBox="0 0 34 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.375 6H3C1.89543 6 1 6.89543 1 8V22C1 23.1046 1.89543 24 3 24H11.0625M19.375 6H27C28.1046 6 29 6.89543 29 8V22C29 23.1046 28.1046 24 27 24H17.625" stroke="#8A8C8E" stroke-width="1.6" stroke-linecap="round"></path>
                                        <path d="M29 9H31C32.1046 9 33 9.89543 33 11V19C33 20.1046 32.1046 21 31 21H29V9Z" stroke="#8A8C8E" stroke-width="1.6"></path>
                                        <line x1="5.8" y1="9.8" x2="4.8" y2="21.2" stroke="#8A8C8E" stroke-width="1.6" stroke-linecap="round"></line>
                                        <line x1="23.8" y1="9.8" x2="22.8" y2="21.2" stroke="#8A8C8E" stroke-width="1.6" stroke-linecap="round"></line>
                                        <path d="M15.7025 11.1899L17.7576 2.96957C17.8712 2.51538 17.2459 2.26932 17.0195 2.67908L8.53105 18.0391C8.35048 18.3658 8.6763 18.7399 9.02474 18.6059L13.8216 16.7609C14.1159 16.6477 14.4193 16.9036 14.3575 17.2127L12.5858 26.0711C12.4943 26.5287 13.1271 26.7458 13.3358 26.3284L21.49 10.0199C21.6591 9.68173 21.308 9.31941 20.9646 9.47786L16.2582 11.6501C15.9532 11.7908 15.6211 11.5157 15.7025 11.1899Z" fill="#FDB924"></path>
                                    </svg>
                                </span>
                                <p class="name-item">
                                    Intensidad
                                </p>
                                <p class="desc-item">
                                    Alta
                                </p>
                            </li>
                        </ul>
                        <hr>
                        <p class="card-text">Perfecto para aquellos que buscan una explosión de energía y diversión durante el entrenamiento, Smart Bike ofrece la combinación perfecta de intensidad y entretenimiento.</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <a href="clases.php" class="btn btn-danger d-block mt-5 margin-auto ver-clases">Ver todas las clases grupales</a>


    </section>

</main>

<?php include('public/views/footer.php'); ?>