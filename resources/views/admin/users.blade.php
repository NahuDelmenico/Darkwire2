<x-layout>
    <x-slot:title>Panel de Control</x-slot:title>

    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- Sidebar izquierdo -->
            <aside class="col-12 col-md-3 col-lg-2 bg-body-tertiary text-white py-4">
                <h4 class="px-3 mb-4">Opciones:</h4>
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

                <!-- Header con título y estadísticas -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h2 class="mb-1">Gestión de Usuarios</h2>
                        <p class="text-muted mb-0">Administra los usuarios del sistema</p>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="text-center">
                            <div class="badge bg-info fs-6">{{ $users->count() }}</div>
                            <small class="text-muted d-block">Total</small>
                        </div>
                        <a class="btn btn-primary" href="#">
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
                                                <div class="avatar-circle me-3">
                                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <strong>{{ $user->name }}</strong>
                                                    <br>
                                                    <small class="text-muted">ID: {{ $user->id }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <span class="badge bg-success">Usuario</span>
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
                                                <a href="#" class="btn btn-sm btn-outline-info" title="Detalle">Ver detalles</a>
                                                <a href="#" class="btn btn-sm btn-outline-warning" title="Editar">Editar</a>
                                                <a href="#" class="btn btn-sm btn-outline-danger" title="Eliminar">Eliminar</a>
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
