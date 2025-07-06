<x-layout>
    <x-slot:title>Panel de Control</x-slot:title>

    <div class="container-fluid">
        <div class="row min-vh-100">

            <!-- Sidebar izquierdo -->
            <aside class="col-12 col-md-3 col-lg-2 bg-body-tertiary text-white py-4">
                <h4 class="px-3 mb-4">Opciones:</h4>
                <ul class="nav flex-column px-3">
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.users') }}" class="nav-link text-light">
                            <i class="fas fa-users me-2"></i>Usuarios
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.announcements') }}" class="nav-link text-light">
                            <i class="fas fa-bullhorn me-2"></i>Novedades
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('admin.games') }}" class="nav-link text-light active bg-primary rounded">
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
                        <h2 class="mb-1">Gestión de Juegos</h2>
                        <p class="text-muted mb-0">Administra el catálogo de juegos del sistema</p>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="text-center">
                            <div class="badge bg-info fs-6">{{ $games->count() }}</div>
                            <small class="text-muted d-block">Total</small>
                        </div>
                        <div class="text-center">
                            <div class="badge bg-success fs-6">${{ $games->sum('price') }}</div>
                            <small class="text-muted d-block">Valor Total</small>
                        </div>
                        <a class="btn btn-primary" href="{{route('games.create')}}">
                            <i class="fas fa-plus me-2"></i>Agregar nuevo juego
                        </a>
                    </div>
                </div>

                <!-- Barra de búsqueda y filtros -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-text bg-secondary border-secondary">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" class="form-control bg-dark border-secondary text-white" 
                                   placeholder="Buscar juegos..." id="searchInput">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select bg-dark border-secondary text-white">
                            <option>Todos los precios</option>
                            <option>Gratuitos</option>
                            <option>$0 - $20</option>
                            <option>$20 - $50</option>
                            <option>$50+</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select bg-dark border-secondary text-white">
                            <option>Ordenar por</option>
                            <option>Más reciente</option>
                            <option>Más antiguo</option>
                            <option>Nombre A-Z</option>
                            <option>Nombre Z-A</option>
                            <option>Precio mayor</option>
                            <option>Precio menor</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select bg-dark border-secondary text-white">
                            <option>Fecha de lanzamiento</option>
                            <option>Este mes</option>
                            <option>Últimos 3 meses</option>
                            <option>Este año</option>
                            <option>Año pasado</option>
                        </select>
                    </div>
                </div>

                <!-- Tabla de juegos -->
                <div class="card bg-dark border-secondary">
                    <div class="card-header bg-secondary">
                        <h5 class="mb-0">Catálogo de Juegos</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-dark table-hover mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th scope="col" class="ps-4">#</th>
                                        <th scope="col">Juego</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Fecha de Lanzamiento</th>
                                        <th scope="col">Creado</th>
                                        <th scope="col" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($games as $index => $game)
                                    <tr>
                                        <td class="ps-4">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-3" style="width: 60px; height: 60px;">
                                                    @if($game->cover_image)
                                                        <img src="{{ asset('storage/' . $game->cover_image) }}" 
                                                             class="rounded" 
                                                             style="width: 100%; height: 100%; object-fit: cover;" 
                                                             alt="{{ $game->name }}">
                                                    @else
                                                        <div class="rounded bg-gradient d-flex align-items-center justify-content-center text-white fw-bold" 
                                                             style="width: 100%; height: 100%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                                            <i class="fas fa-gamepad"></i>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div>
                                                    <strong>{{ Str::limit($game->name, 30) }}</strong>
                                                    <br>
                                                    <small class="text-muted">ID: {{ $game->game_id }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted small">
                                                {{ Str::limit($game->description, 60) }}
                                            </span>
                                        </td>
                                        <td>
                                            @if($game->price == 0)
                                                <span class="badge bg-success">GRATIS</span>
                                            @else
                                                <span class="badge bg-primary">${{ number_format($game->price, 2) }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <small>{{ $game->release_at }}</small>
                                            <br>
                                            <small class="text-muted">{{ $game->release_at }}</small>
                                        </td>
                                        <td>
                                            <small>{{ $game->created_at }}</small>
                                            <br>
                                            <small class="text-muted">{{ $game->created_at }}</small>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="{{route('games.view', ['id' => $game->game_id])}}" class="btn btn-sm btn-outline-info" title="Detalle">Ver detalles</a>

                                                <a href="{{route('games.edit', ['id' => $game->game_id])}}" class="btn btn-sm btn-outline-warning" title="Editar">Editar</a>

                                                <a href="#" class="btn btn-sm btn-outline-success" title="Subir portada">Subir portada</a>

                                                <a href="{{route('games.delete', ['id' => $game->game_id])}}" class="btn btn-sm btn-outline-danger" title="Eliminar">Eliminar</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Estadísticas rápidas -->
                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="card bg-secondary">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $games->where('price', 0)->count() }}</h5>
                                <p class="card-text text-muted">Juegos Gratuitos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-secondary">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $games->where('price', '>', 0)->count() }}</h5>
                                <p class="card-text text-muted">Juegos de Pago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-secondary">
                            <div class="card-body text-center">
                                <h5 class="card-title">${{ number_format($games->avg('price'), 2) }}</h5>
                                <p class="card-text text-muted">Precio Promedio</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-secondary">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $games->where('created_at', '>=', now()->subMonth())->count() }}</h5>
                                <p class="card-text text-muted">Agregados Este Mes</p>
                            </div>
                        </div>
                    </div>
                </div>

            </main>

        </div>
    </div>
</x-layout>