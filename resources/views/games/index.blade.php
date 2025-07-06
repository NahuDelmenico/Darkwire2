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
        <div class="row row-cols-1 row-cols-md-4 g-4">
        
        @foreach($games as $game)
            <div class="col">
                <div class="card h-100 shadow-lg  mb-5 bg-body-tertiary rounded ">
                    <img src="https://upload.wikimedia.org/wikipedia/en/4/44/Red_Dead_Redemption_II.jpg" class="card-img-top game-img" alt="Red Dead Redemption 2">
                    <div class="card-body">
                        <h5 class="card-title">{{$game->name}}</h5>
                        <p class="card-text">{{$game->description}}</p>

                        @if($game->price == 0)
                            <p class="card-text">Gratis</p>
                        @else
                            <p class="card-text">${{ number_format($game->price, 2, ',', '.') }}</p>
                        @endif

                        <a href="{{ route('games.view',[ 'id' => $game->game_id]) }}" class="btn btn-warning w-100 d-flex justify-contect-end">Obtener</a>
                    </div>
                </div>
            </div>
        @endforeach
          

        </div>
    </div>
    </section>
</x-layout>
