<x-layout>

    <x-slot:title> Editar Usuario {{$user->name}} </x-slot:title>

        <h1 class="mb-3 d-flex justify-content-center">Editando a {{$user->name}}</h1>

        @if($errors->any())
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger w-75">
                    Hay errores en los campos ingresados.
                    Por favor, revisar los campos
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-center">
            <form action="#" class="w-75" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label" for="title">Nombre</label>
                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" 
                    @error('title') arial-invalid="true" arial-errornessage="error-title" @enderror value="{{old('title',$user->name)}}">
                    @error('title')
                        <div id="error-title" class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="subtitle">Email</label>
                    <input type="text" id="subtitle" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror"
                    @error('subtitle') arial-invalid="true" arial-errornessage="error-subtitle" @enderror value="{{old('subtitle',$user->email)}}">
                    @error('subtitle')
                        <div id="error-subtitle" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Confirmar Cambios</button>
                </div>
            </form>
        </div>
</x-layout>