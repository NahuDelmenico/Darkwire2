<x-layout>

    <x-slot:title>
        Novedades
    </x-slot:title>


    <h1 class="mb-3 d-flex justify-content-center">Novedades</h1>


    <div class="m-5 w-75 mx-auto border-bottom border-dark-subtle border-4">
        <p class="w-100 fs-4 font-monospace text-center">
            Desde las últimas actualizaciones hasta los grandes anuncios que marcan el futuro del gaming, te traemos la información más fresca y confiable para que no te pierdas ni un solo detalle de la comunidad gamer.
        </p>
    </div>

    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column align-items-center w-100">
            @foreach($announcements as $announcement)

            <div class="card d-flex flex-row mb-4 shadow-lg  mb-5 bg-body-tertiary rounded" style="width: 75%; height: 250px;">
                              
                @if($announcement->cover)
                <img    src="{{ \Illuminate\Support\Facades\Storage::url('covers/' . $announcement->cover) }}" 
                        class="img-fluid w-25 rounded-start" 
                        alt="{{ $announcement->cover_description }}">
                @else
                    <p>No cover image</p>
                @endif
                <div class="card-body d-flex flex-row w-75">

                    <div class="w-75  p-3 h-100 d-flex flex-column">
                        <h2 class="card-title">{{ $announcement->title }}</h>
                        <p class=" w-lighter fs-5 text-body-secondary">{{ $announcement->subtitle }}</p>


                        <span class="fst-italic fs-6 text-body-secondary mt-auto">
                            {{ $announcement->created_at }} - {{ $announcement->author }}
                        </span>
                    </div>

                    <div class="w-25 d-flex flex-column align-items-center justify-content-center">
                        <a href="{{route('announcements.view', ['id' => $announcement->announcement_id])}}" style="background-color: 47e72a;" class="btn btn-primary w-75 my-2">Ver mas</a>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>




</x-layout>
