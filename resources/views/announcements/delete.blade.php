<x-layout>


    <x-slot:title>
        Eliminar Novedad :: {{ $announcement->title}}
    </x-slot:title>

     

    <div class="d-flex justify-content-center w-100">
        <div class="w-75">
            <div class="alert alert-danger">
                <p>Estasa a putno de elimiar la novedad <b>"{{ $announcement->title}}"</b></p>
                <p>¿Quieres eliminar la novedad?</p>

                <form action="{{route('announcements.destroy',['id'=>$announcement->announcement_id])}}"
                class="mb-3"
                method="post">
                    @csrf
                    @method('DELETE')


                    <button type="submit" class="btn btn-danger">Quiero eliminar "{{ $announcement->title}}" </button>
                </form>
            </div>
            <div class="bg-body-secondary p-5">
                <h1 class="mb-3">{{ $announcement->title}}</h1>

                <p>{{ $announcement->subtitle}}</p>

               <span class="fst-italic text-body-secondary mt-auto">
                    {{ $announcement->created_at }} - {{ $announcement->author }}
                </span>
            </div>
            <div class="w-100">
                <img src="{{ asset('images/image.png') }}" class="img-fluid w-100" alt="Imagen">
            </div>
            <div class="bg-body-secondary p-5">
                <p>{{ $announcement->description}}</p>
            </div>
        </div>
    </div>

</x-layout>