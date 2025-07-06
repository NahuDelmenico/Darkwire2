<x-layout>

    <x-slot:title> Publicar un Juego </x-slot:title>

        <h1 class="mb-3 d-flex justify-content-center">Publicar Nuevo Juego</h1>

        @if($errors->any())
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger w-75">
                    Hay errores en los campos ingresados.
                    Por favor, revisar los campos
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-center">
            <form action="{{route('games.store')}}" class="w-75" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="title">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                    @error('name') arial-invalid="true" arial-errornessage="error-name" @enderror value="{{old('name')}}">
                    @error('title')
                        <div id="error-name" class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                

                <div class=" mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" style="height: 300px"
                    @error('description') arial-invalid="true" arial-errornessage="error-description" @enderror >{{old('description')}} </textarea>
                    @error('description')
                        <div id="error-description" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="price">Precio</label>
                    <input type="number" id="price" name="price" class="form-control @error('price') is-invalid @enderror"
                    @error('price') arial-invalid="true" arial-errornessage="error-price" @enderror value="{{old('price')}}">
                    @error('price')
                        <div id="error-price" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="release_at">Fecha de lanzamiento</label>
                    <input type="date" id="release_at" name="release_at" class="form-control @error('release_at') is-invalid @enderror"
                    @error('release_at') arial-invalid="true" arial-errornessage="error-release_at" @enderror value="{{old('release_at')}}">
                    @error('release_at')
                        <div id="error-release_at" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="cover" class="form-label">Portada</label>
                    <input class="form-control form-control-lg" id="cover" name="cover" type="file">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Publicar</button>
                </div>
            </form>
        </div>
</x-layout>