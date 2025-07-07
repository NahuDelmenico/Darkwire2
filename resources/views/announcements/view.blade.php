<x-layout>


    <x-slot:title>
        Novedades :: {{ $announcement->title}}
    </x-slot:title>

    <div class="d-flex justify-content-center w-100">
        <div class="w-75">
            <div class="bg-body-secondary p-5">
                <h1 class="mb-3">{{ $announcement->title}}</h1>

                <p>{{ $announcement->subtitle}}</p>

            <span class="fst-italic text-body-secondary mt-auto">
                    {{ $announcement->created_at }} - {{ $announcement->author }}
                </span>
            </div>
            <div class="w-100">
                <img 
                src="{{ \Illuminate\Support\Facades\Storage::url($announcement->cover) }}" 
                class="img-fluid w-100" 
                alt="{{ $announcement->cover_description }}">
                
            </div>
            <div class="bg-body-secondary p-5">
                <p>{{ $announcement->description}}</p>
            </div>
            
        </div>
    </div>

</x-layout>