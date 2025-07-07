<x-layout>
    <x-slot:title>Panel de Control</x-slot:title>

    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- Sidebar izquierdo -->
            <aside class="col-12 col-md-3 col-lg-2 bg-body-tertiary text-white py-4">
                <h4 class="px-3 mb-4">Menú Administrador</h4>
                <ul class="nav flex-column px-3">
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.users') }}" class="nav-link text-light">
                            <i class="fas fa-users me-2"></i>Usuarios
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.announcements') }}" class="nav-link text-light active bg-primary rounded">
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
                        <h2 class="mb-1">Gestión de Anuncios</h2>
                        <p class="text-muted mb-0">Administra los anuncios y novedades del sistema</p>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="text-center d-flex">
                            
                        <div class="badge border border-info text-muted  fs-5"> Total de Anuncios: {{ $announcements->count() }}</div>
                            
                        </div>
                        <a class="btn btn-primary" href="{{ route('announcements.create') }}">
                            <i class="fas fa-plus me-2"></i>Crear nuevo anuncio
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
                            placeholder="Buscar por título, autor o contenido..." id="searchInput">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select bg-dark border-secondary text-white">
                            <option>Todos los autores</option>
                            @foreach($announcements->unique('author') as $announcement)
                                <option>{{ $announcement->author }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select bg-dark border-secondary text-white">
                            <option>Ordenar por</option>
                            <option>Más reciente</option>
                            <option>Más antiguo</option>
                            <option>Título A-Z</option>
                            <option>Título Z-A</option>
                        </select>
                    </div>
                </div>

                <!-- Tabla de anuncios -->
                <div class="card bg-dark border-secondary">
                    <div class="card-header bg-secondary">
                        <h5 class="mb-0">Lista de Anuncios</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-dark table-hover mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th scope="col" class="ps-4">#</th>
                                        <th scope="col">Título</th>
                                        <th scope="col">Subtítulo</th>
                                        <th scope="col">Autor</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Fecha de Creación</th>
                                        <th scope="col" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($announcements as $index => $announcement)
                                    <tr>
                                        <td class="ps-4">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-3 fw-bold" style="width: 40px; height: 40px;">
                                                    <i class="fas fa-bullhorn"></i>
                                                </div>
                                                <div>
                                                    <strong>{{ Str::limit($announcement->title, 40) }}</strong>
                                                    <br>
                                                    <small class="text-muted">ID: {{ $announcement->announcement_id }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted">
                                                {{ Str::limit($announcement->subtitle, 30) }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-warning text-dark">
                                                {{ $announcement->author }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-muted small">
                                                {{ Str::limit($announcement->description, 50) }}
                                            </span>
                                        </td>
                                        <td>
                                            <small>{{ $announcement->created_at->format('d/m/Y') }}</small>
                                            <br>
                                            <small class="text-muted">{{ $announcement->created_at->format('H:i') }}</small>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="{{route('announcements.view', ['id' => $announcement->announcement_id])}}" class="btn btn-sm btn-outline-info" title="Detalle">Ver detalles</a>
                                                <a href="{{route('announcements.edit',['id' => $announcement->announcement_id])}}" class="btn btn-sm btn-outline-warning" title="Editar">Editar</a>
                                                <a href="{{route('announcements.delete',['id' => $announcement->announcement_id])}}" class="btn btn-sm btn-outline-danger" title="Eliminar">Eliminar</a>
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
</x-layout>