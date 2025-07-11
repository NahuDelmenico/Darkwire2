<x-layout>
    <x-slot:title>Panel de Control</x-slot:title>

    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- Sidebar izquierdo -->
            <aside class="col-12 col-md-3 col-lg-2 bg-body-tertiary text-white py-4">
                <h4 class="px-3 mb-4">Menú Administrador</h4>
                <ul class="nav flex-column px-3">
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.users') }}" class="nav-link text-light active bg-primary rounded">
                            <i class="fas fa-users me-2"></i>Usuarios
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{route('admin.announcements')}}" class="nav-link text-light">
                            <i class="fas fa-bullhorn me-2"></i>Novedades
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.games') }}" class="nav-link text-light">
                            <i class="fas fa-gamepad me-2"></i>Juegos
                        </a>
                    </li>
                </ul>
            </aside>

            <!-- Contenido principal -->
            <main class="col-12 col-md-9 col-lg-10 bg-dark text-white py-4">

                @if(session('feedback.message'))
                    <div class="alert alert-{{ session('feedback.type', 'success') }} alert-dismissible fade show" role="alert">
                        {!! session('feedback.message') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <!-- Header con título y estadísticas -->
                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div>
                        <h2 class="mb-1">Gestión de Usuarios</h2>
                        <p class="text-muted mb-0">Administra los usuarios del sistema</p>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <div class="text-center d-flex">
                            
                        <div class="badge border border-info text-muted  fs-5"> Total de Usuarios: {{ $users->count() }}</div>
                            
                        </div>
                        <a class="btn btn-primary" href="{{ route('user.create') }}">
                            <i class="fas fa-plus me-2"></i>Crear nuevo usuario
                        </a>
                    </div>
                </div>

                <!-- Barra de búsqueda y filtros -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text bg-secondary border-secondary">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" class="form-control bg-dark border-secondary text-white" 
                                placeholder="Buscar usuarios por nombre o email..." id="searchInput">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select bg-dark border-secondary text-white">
                            <option>Todos los roles</option>
                            <option>Administrador</option>
                            <option>Usuario</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select bg-dark border-secondary text-white">
                            <option>Todos los estados</option>
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    </div>
                </div>

                <!-- Tabla de usuarios -->
                <div class="card bg-dark border-secondary">
                    <div class="card-header bg-secondary">
                        <h5 class="mb-0">Lista de Usuarios</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-dark table-hover mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th scope="col" class="ps-4">#</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Rol</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Fecha de Registro</th>
                                        <th scope="col" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $index => $user)
                                    <tr>
                                        <td class="ps-4">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle m-2" viewBox="0 0 16 16">
                                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                                    </svg>
                                                
                                                <div>
                                                    <strong>{{ $user->name }}</strong>
                                                    <br>
                                                    <small class="text-muted">ID: {{ $user->id }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <span class="badge {{ $user->rol == 'Administrador' ? 'bg-primary' : 'bg-success' }}">
                                                {{ $user->rol }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Activo</span>
                                        </td>
                                        <td>
                                            <small>{{ $user->created_at->format('d/m/Y') }}</small>
                                            <br>
                                            <small class="text-muted">{{ $user->created_at->format('H:i') }}</small>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="{{route('user.view', ['id' => $user->id])}}" class="btn btn-sm btn-outline-info" title="Detalle">Ver detalles</a>
                                                <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-sm btn-outline-warning" title="Editar">Editar</a>
                                                <a href="{{route('user.delete', ['id' => $user->id])}}" class="btn btn-sm btn-outline-danger" title="Eliminar">Eliminar</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

    <style>
        .avatar-circle {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>

</x-layout>
