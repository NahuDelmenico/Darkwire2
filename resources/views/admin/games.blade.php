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
                        <a class="btn btn-primary" href="#">
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
                                            <small>{{ $game->release_at->format('d/m/Y') }}</small>
                                            <br>
                                            <small class="text-muted">{{ $game->release_at->diffForHumans() }}</small>
                                        </td>
                                        <td>
                                            <small>{{ $game->created_at->format('d/m/Y') }}</small>
                                            <br>
                                            <small class="text-muted">{{ $game->created_at->format('H:i') }}</small>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="#" class="btn btn-sm btn-outline-info" title="Ver detalles">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-outline-warning" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-outline-success" title="Subir portada">
                                                    <i class="fas fa-image"></i>
                                                </a>
                                                <button class="btn btn-sm btn-outline-danger" title="Eliminar"
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Acciones masivas -->
                <div class="mt-4 p-3 bg-secondary rounded">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h6 class="mb-0">Acciones masivas:</h6>
                            <small class="text-muted">Selecciona juegos para aplicar acciones en lote</small>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="#" class="btn btn-sm btn-outline-info" title="Detalle">Ver detalles</a>
                                <a href="#" class="btn btn-sm btn-outline-warning" title="Editar">Editar</a>
                                <a href="#" class="btn btn-sm btn-outline-danger" title="Eliminar">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vista previa del juego seleccionado -->
                <div class="mt-4">
                    <div class="card bg-dark border-secondary">
                        <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Vista Previa del Juego</h6>
                            <button class="btn btn-sm btn-outline-light" onclick="togglePreview()">
                                <i class="fas fa-eye" id="previewIcon"></i>
                            </button>
                        </div>
                        <div class="card-body d-none" id="previewContent">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <div class="mb-3" style="width: 150px; height: 150px; margin: 0 auto;">
                                        <img id="previewImage" src="" class="rounded" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4 id="previewTitle" class="text-primary">Selecciona un juego para ver la vista previa</h4>
                                    <p id="previewDescription" class="text-light"></p>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <h5>Precio: <span class="badge bg-primary" id="previewPrice"></span></h5>
                                            <p><strong>Fecha de lanzamiento:</strong> <span id="previewRelease"></span></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Agregado:</strong> <span id="previewCreated"></span></p>
                                            <p><strong>Última actualización:</strong> <span id="previewUpdated"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <script>
        function confirmDelete(gameId) {
            if (confirm('¿Estás seguro de que quieres eliminar este juego?')) {
                // Aquí iría la lógica para eliminar el juego
                console.log('Eliminando juego:', gameId);
            }
        }
        
        // Búsqueda en tiempo real
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
        
        // Vista previa
        function togglePreview() {
            const content = document.getElementById('previewContent');
            const icon = document.getElementById('previewIcon');
            
            if (content.classList.contains('d-none')) {
                content.classList.remove('d-none');
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                content.classList.add('d-none');
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
        
        // Función para mostrar vista previa al hacer clic en una fila
        document.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('click', function(e) {
                if (e.target.closest('.btn-group')) return; // No activar si se hace clic en botones
                
                const name = this.cells[1].querySelector('strong').textContent;
                const description = this.cells[2].textContent.trim();
                const price = this.cells[3].textContent.trim();
                const releaseDate = this.cells[4].textContent.trim();
                const createdDate = this.cells[5].textContent.trim();
                const imageElement = this.cells[1].querySelector('img');
                
                document.getElementById('previewTitle').textContent = name;
                document.getElementById('previewDescription').textContent = description;
                document.getElementById('previewPrice').textContent = price;
                document.getElementById('previewRelease').textContent = releaseDate;
                document.getElementById('previewCreated').textContent = createdDate;
                document.getElementById('previewUpdated').textContent = 'Hace 2 días'; // Ejemplo
                
                // Configurar imagen
                const previewImage = document.getElementById('previewImage');
                if (imageElement) {
                    previewImage.src = imageElement.src;
                    previewImage.alt = imageElement.alt;
                } else {
                    previewImage.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUwIiBoZWlnaHQ9IjE1MCIgdmlld0JveD0iMCAwIDE1MCAxNTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIxNTAiIGhlaWdodD0iMTUwIiBmaWxsPSIjNjY3ZWVhIi8+CjxwYXRoIGQ9Ik03NSA2MEM4My4yODQzIDYwIDkwIDY2LjcxNTcgOTAgNzVTODMuMjg0MyA5MCA3NSA5MFM2MCA4My4yODQzIDYwIDc1UzY2LjcxNTcgNjAgNzUgNjBaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K';
                    previewImage.alt = 'Sin imagen';
                }
                
                // Mostrar vista previa si está oculta
                const content = document.getElementById('previewContent');
                const icon = document.getElementById('previewIcon');
                if (content.classList.contains('d-none')) {
                    content.classList.remove('d-none');
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
                
                // Highlight de la fila seleccionada
                document.querySelectorAll('tbody tr').forEach(r => r.classList.remove('table-active'));
                this.classList.add('table-active');
            });
        });
    </script>
</x-layout>