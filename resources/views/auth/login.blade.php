<x-layout>
    <x-slot:title> Inciar Sesion </x-slot:title>
        
    <section class="d-flex justify-content-center">
        <div class="w-25  shadow-lg p-3 mb-5 bg-body-tertiary rounded">

    
            <h1 class="mb-3 d-flex justify-content-center">Iniciar Sesion</h1>
                @if (session('feedback.message'))
                    <div class="alert alert-{{ session('feedback.type', 'info') }} mb-3">
                        {{ session('feedback.message') }}
                    </div>
                @endif
                
                <form action="{{ route('auth.authenticate') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label"> Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label"> Contraseña</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary " >Ingresar</button>
                    </div>
                </form>
        </div>
    </section>
</x-layout>