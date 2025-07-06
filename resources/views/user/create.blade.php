<x-layout>

    <x-slot:title> Crear Nuevo Usuario </x-slot:title>

        <h1 class="mb-3 d-flex justify-content-center">Crear Nuevo Usuario</h1>

        @if($errors->any())
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger w-75">
                    Hay errores en los campos ingresados.
                    Por favor, revisar los campos
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-center">
            <form action="{{route('user.store')}}" class="w-75" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                    @error('name') arial-invalid="true" arial-errornessage="error-name" @enderror value="{{old('name')}}">
                    @error('name')
                        <div id="error-name" class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    @error('email') arial-invalid="true" arial-errornessage="error-email" @enderror value="{{old('email')}}">
                    @error('email')
                        <div id="error-email" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    @error('password') arial-invalid="true" arial-errornessage="error-password" @enderror value="{{old('password')}}">
                    @error('password')
                        <div id="error-password" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
</x-layout>