<x-layout>

    <x-slot:title> Publicar una Notica </x-slot:title>

        <h1 class="mb-3 d-flex justify-content-center">Publicar Nueva Noticia</h1>

        @if($errors->any())
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger w-75">
                    Hay errores en los campos ingresados.
                    Por favor, revisar los campos
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-center">
            <form action="{{route('announcements.store')}}" class="w-75" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="title">Titulo</label>
                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" 
                    @error('title') arial-invalid="true" arial-errornessage="error-title" @enderror value="{{old('title')}}">
                    @error('title')
                        <div id="error-title" class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="subtitle">Subtitulo</label>
                    <input type="text" id="subtitle" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror"
                    @error('subtitle') arial-invalid="true" arial-errornessage="error-subtitle" @enderror value="{{old('subtitle')}}">
                    @error('subtitle')
                        <div id="error-subtitle" class="text-danger">{{$message}}</div>
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
                    <label class="form-label" for="author">Autor</label>
                    <input type="text" id="author" name="author" class="form-control @error('author') is-invalid @enderror"
                    @error('author') arial-invalid="true" arial-errornessage="error-author" @enderror value="{{old('author')}}">
                    @error('author')
                        <div id="error-author" class="text-danger">{{$message}}</div>
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