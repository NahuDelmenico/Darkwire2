<style>
    .game-img {
        object-fit: cover;
        height: 200px;
        width: 100%;
    }
</style>

<x-layout>
    <x-slot:title>Juegos</x-slot:title>


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

    <h1 class="my-5 d-flex justify-content-center">Catálogo de Juegos</h1>

    <section class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://upload.wikimedia.org/wikipedia/en/4/44/Red_Dead_Redemption_II.jpg" class="card-img-top game-img" alt="Red Dead Redemption 2">
                    <div class="card-body">
                        <h5 class="card-title">Red Dead Redemption 2</h5>
                        <p class="card-text">Explora el Lejano Oeste en este aclamado juego de mundo abierto de Rockstar Games.</p>
                        <a href="#" class="btn btn-warning w-100">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/730/header.jpg" class="card-img-top game-img" alt="CS:GO">
                    <div class="card-body">
                        <h5 class="card-title">Counter Strike: Global Offensive</h5>
                        <p class="card-text">Clásico FPS multijugador competitivo entre terroristas y antiterroristas.</p>
                        <a href="#" class="btn btn-warning w-100">Comprar</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://cdn.akamai.steamstatic.com/steam/apps/1551360/header.jpg" class="card-img-top game-img" alt="Forza Horizon 5">
                    <div class="card-body">
                        <h5 class="card-title">Forza Horizon 5</h5>
                        <p class="card-text">Carreras en mundo abierto en los paisajes vibrantes de México.</p>
                        <a href="#" class="btn btn-warning w-100">Comprar</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://cdn.akamai.steamstatic.com/steam/apps/1259420/header.jpg" class="card-img-top game-img" alt="Days Gone">
                    <div class="card-body">
                        <h5 class="card-title">Days Gone</h5>
                        <p class="card-text">Sobrevive en un mundo postapocalíptico lleno de zombies.</p>
                        <a href="#" class="btn btn-warning w-100">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://cdn.akamai.steamstatic.com/steam/apps/239140/header.jpg" class="card-img-top game-img" alt="Dying Light">
                    <div class="card-body">
                        <h5 class="card-title">Dying Light</h5>
                        <p class="card-text">Acción y parkour en un mundo infestado por zombis.</p>
                        <a href="#" class="btn btn-warning w-100">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://imgs.search.brave.com/7wqIhnyaQyDlALEcvMEAXAulC36gBTvIRgbcT4uony8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL00v/TVY1Qk9EUm1aRGcx/TkdRdFpHVTVOUzAw/TnpWa0xUaGhaREl0/TURKa01qUXdaR1E1/TURnNVhrRXlYa0Zx/Y0djQC5qcGc" class="card-img-top game-img" alt="Alan Wake 2">
                    <div class="card-body">
                        <h5 class="card-title">Alan Wake 2</h5>
                        <p class="card-text">Terror psicológico y narrativa profunda en esta esperada secuela.</p>
                        <a href="#" class="btn btn-warning w-100">Comprar</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </section>
</x-layout>
