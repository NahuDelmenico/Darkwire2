<x-layout>
    <x-slot:title>Inicio</x-slot:title>

    <div class="flex bg-[#2e2e2e] text-white min-h-screen">
        <main >
            <section >
             <div id="carouselExampleIndicators" class="carousel slide mb-3" >
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="max-height: 600px;">
                    <div class="carousel-item active">
                        <img src="https://www.igta5.com/images/official-artwork-wade.jpg" class="d-block img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/HX7YJ2NUBNAQNMKEWVXCWVWJJU.jpg" class="d-block img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.wired.com/photos/5bd38d06938e62768650e48d/16:9/w_2080,h_1170,c_limit/RedDead-FA.jpg" class="d-block img-fluid w-100"  alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </section>


            <section >
                    <h2 class="title text-center">Todas las categorias</h2>
                        <div class="d-flex  text-center my-4 w-100">
                        <div class="bg-warning-subtle border border-3 border-warning  p-5 fs-3 m-3 w-100">
                            <a href="" style="text-decoration: none; " class="p-5 text-warning">Supervivencia</a>
                        </div>
                        <div class="bg-warning-subtle border border-3 border-warning  p-5 fs-3 m-3 w-100">
                            <a href="" style="text-decoration: none; " class="p-5 text-warning">FPS</a>
                        </div>
                        <div class="bg-warning-subtle border border-3 border-warning  p-5 fs-3 m-3  w-100">
                            <a href="" style="text-decoration: none; " class="p-5 text-warning">Estrategia</a>
                        </div>
                    </div>

            </section>


            <section class="d-flex felex-row bg-warning  ">

                <div class=" d-flex align-items-center ps-5 w-50">
                     <div class="w-50">
                        <h2 style="color: #000000;">Reseñas</h2>
                        <p style="color: #000000;">Cada jugador tiene una historia que contar. Mirá lo que dice nuestra comunidad después de sumergirse en los mejores títulos del sitio.</p>
                    </div>
                </div>


                <div class="w-50 m-3">
                     <div class="row">
                        <div class="col w-50 p-3 m-2 ">
                            <div class="card w-75 h-100">
                                <div class="card-body">
                                    <div class="d-flex flex-row mb-2">
                                        <div class="pe-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                        </svg>
                                        </div>

                                        <h3 class="card-title fs-5">GamerX</h3>
                                    </div>


                                    <p class="card-text">“Me encantó el sistema de logros. Motiva a seguir jugando y explorando cada juego al máximo.”</p>

                                </div>
                            </div>
                        </div>
                        <div class="col w-50 p-3  m-2 ">
                            <div class="card w-75 h-100">
                                <div class="card-body">
                                    <div class="d-flex flex-row mb-2">
                                        <div class="pe-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                        </svg>
                                        </div>

                                        <h3 class="card-title fs-5">NoobSlayer</h3>
                                    </div>


                                    <p class="card-text">“Increíble selección de juegos y una interfaz súper fluida. ¡Me quedé horas jugando sin darme cuenta!”.</p>

                                </div>
                            </div>
                        </div>
                     </div>


                     <div class="row">
                        <div class="col w-50 p-3 m-2">

                            <div class="card w-75 h-100" >
                                <div class="card-body">
                                    <div class="d-flex flex-row mb-2">
                                        <div class="pe-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                        </svg>
                                        </div>

                                        <h3 class="card-title fs-5">PixelQueen</h3>
                                    </div>


                                    <p class="card-text">“Los gráficos y el rendimiento son de primera. Se nota que le ponen amor al desarrollo.”</p>

                                </div>
                            </div>

                        </div>
                        <div class="col w-50 p-3 m-2">

                            <div class="card w-75 h-100" >
                                <div class="card-body">
                                    <div class="d-flex flex-row mb-2">
                                        <div class="pe-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                        </svg>
                                        </div>

                                        <h3 class="card-title fs-5">RetroFan88</h3>
                                    </div>


                                    <p class="card-text">“Tiene ese toque nostálgico con juegos retro, pero también lo último en títulos actuales. ¡Muy completo!”</p>

                                </div>
                            </div>

                        </div>
                     </div>
                </div>
            </section>
        </main>
    </div>
</x-layout>
