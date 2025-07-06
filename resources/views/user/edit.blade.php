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
            <form action="{{route('user.update',['id'=> $user -> id])}}" class="w-75" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label" for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                    @error('name') arial-invalid="true" arial-errornessage="error-name" @enderror value="{{old('name',$user->name)}}">
                    @error('name')
                        <div id="error-name" class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    @error('email') arial-invalid="true" arial-errornessage="error-email" @enderror value="{{old('email',$user->email)}}">
                    @error('email')
                        <div id="error-email" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Confirmar Cambios</button>
                </div>
            </form>
        </div>
</x-layout>