<x-layout>
    <x-slot:title>Panel de Control</x-slot:title>

    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- Sidebar izquierdo -->
            <aside class="col-12 col-md-3 col-lg-2 bg-body-tertiary text-white py-4">
                <h4 class="px-3">Opciones:</h4>
                <ul class="nav flex-column px-3">
                    <li class="nav-item">
                        <a href="{{ route('admin.games') }}" class="nav-link text-light">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a href="{ route('admin.announcements') }}" class="nav-link text-light">Novedades</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users') }}" class="nav-link text-light">Juegos</a>
                    </li>
                </ul>
            </aside>

            <!-- Contenido principal -->
            <main class="col-12 col-md-9 col-lg-10 bg-dark text-white py-4">

                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary mt-3 mb-3" href="#">Crear nuevo juego</a>
                </div>

                <div class="card bg-dark text-white mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                            </div>
                            <div class="text-end">
                                <a href="#" class="btn btn-secondary w-75 my-2">Editar</a>
                                <a href="#" class="btn btn-danger w-75 my-2">Eliminar</a>
                            </div>
                        </div>
                </div>
            </main>

        </div>
    </div>
</x-layout>