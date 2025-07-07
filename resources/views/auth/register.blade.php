<x-layout>

    <x-slot:title>Registro de Usuario</x-slot:title>

        <h1 class="mb-3 d-flex justify-content-center">Crear Cuenta</h1>

        @if($errors->any())
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger w-75">
                    Hay errores en los campos ingresados.
                    Por favor, revisar los campos
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-center">
            <form action="{{route('auth.store')}}" class="w-75" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="name">Nombre Completo</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                    @error('name') aria-invalid="true" aria-describedby="error-name" @enderror value="{{old('name')}}" required>
                    @error('name')
                        <div id="error-name" class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    @error('email') aria-invalid="true" aria-describedby="error-email" @enderror value="{{old('email')}}" required>
                    @error('email')
                        <div id="error-email" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Contraseña</label>
                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    @error('password') aria-invalid="true" aria-describedby="error-password" @enderror required>
                    @error('password')
                        <div id="error-password" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                    @error('password_confirmation') aria-invalid="true" aria-describedby="error-password-confirmation" @enderror required>
                    @error('password_confirmation')
                        <div id="error-password-confirmation" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input @error('terms') is-invalid @enderror" id="terms" name="terms" value="1" 
                    @error('terms') aria-invalid="true" aria-describedby="error-terms" @enderror {{ old('terms') ? 'checked' : '' }} required>
                    <label class="form-check-label" for="terms">
                        Acepto los <a href="#" target="_blank">términos y condiciones</a>
                    </label>
                    @error('terms')
                        <div id="error-terms" class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Crear Cuenta</button>
                </div>

                <div class="text-center">
                    <p>¿Ya tienes una cuenta? <a href="{{route('auth.login')}}">Inicia sesión aquí</a></p>
                </div>
            </form>
        </div>
</x-layout>