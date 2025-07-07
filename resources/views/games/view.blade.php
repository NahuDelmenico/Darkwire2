<x-layout>
    <x-slot:title>{{ $game->name }}</x-slot:title>

    <div class="game-page">
        

        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="">
                            <div class="">
                                
                            <img 
                            src="{{ \Illuminate\Support\Facades\Storage::url($game->cover) }}"                                     
                            class="img-fluid w-100"
                            alt="{{ $game->name }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="game-info-sidebar">
                            <div class="me-3 d-flex" style="width: 60px; height: 60px;">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($game->logo) }}" 
                                                             class="rounded" 
                                                             style="width: 100%; height: 100%; object-fit: cover;" 
                                                             alt="{{ $game->name }}">
                                <h1 class="fs-5 p-3 align-center">{{ $game->name }}</h1>
                            </div>
                            
                            <div class="game-description mb-4">
                                <p class="text-light">{{ $game->description }}</p>
                            </div>

                            <div class="game-tags mb-4">
                                <span class="tag">{{ $game->category_fk }}</span>
                                <span class="tag">Acción</span>
                                <span class="tag">Aventura</span>
                                <span class="tag">Un jugador</span>
                            </div>

                            <div class="bg-success rounded">
                                <div class="price-section mb-3">
                                    @if($game->price > 0)
                                        
                                        <div class="price-info p-3">
                                            
                                            <span class="current-price">${{ number_format($game->price, 2) }}</span>
                                            
                                        </div>
                                    @else
                                        <div class="free-badge">GRATIS</div>
                                    @endif
                                </div>
                                
                            </div>
                            <div >
                                    <button class="btn btn-primary btn-lg w-100 mb-2">
                                        <i class="fas fa-cart-plus me-2"></i>
                                        Añadir al carrito
                                    </button>
                                    <button class="btn btn-outline-light w-100">
                                        <i class="fas fa-heart me-2"></i>
                                        Añadir a lista de deseados
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="game-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="details-content">
                            <div class="about-section mb-5">
                                <h2 class="section-title">Acerca de {{ $game->name }}</h2>
                                <div class="about-content">
                                    <p class="text-light">{{ $game->description }}</p>
                                    
                                    <div class="features-list mt-4">
                                        <h4>Características principales:</h4>
                                        <ul class="feature-list">
                                            <li>Mundo abierto expansivo</li>
                                            <li>Sistema de combate dinámico</li>
                                            <li>Historia envolvente</li>
                                            <li>Gráficos de última generación</li>
                                            <li>Banda sonora épica</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="reviews-section">
                                <h2 class="section-title">Reseñas de usuarios</h2>
                                <div class="reviews-summary">
                                    <div class="review-score">
                                        <span class="score-badge positive">Muy positivas</span>
                                        <span class="score-text">(1,234 reseñas)</span>
                                    </div>
                                </div>
                                
                                <div class="recent-reviews mt-4">
                                    <h4>Reseñas recientes:</h4>
                                    <div class="review-item">
                                        <div class="review-header">
                                            <span class="review-type positive">Recomendado</span>
                                            <span class="review-hours">45.2 hrs en total</span>
                                        </div>
                                        <p class="review-text">
                                            "Excelente juego con una historia increíble y mecánicas de juego muy pulidas. 
                                            Los gráficos son impresionantes y la banda sonora es épica."
                                        </p>
                                        <div class="review-footer">
                                            <span class="review-date">Publicada el 15 de junio</span>
                                            <span class="review-helpful">¿Te ha sido útil? Sí (23) No (2)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="sidebar-details">
                            <div class="game-info-box">
                                <h4>Información del juego</h4>
                                <div class="info-item">
                                    <span class="label">Fecha de lanzamiento:</span>
                                    <span class="value">{{ $game->release_at ? $game->release_at : 'Próximamente' }}</span>
                                </div>
                                <div class="info-item">
                                    <span class="label">Desarrollador:</span>
                                    <span class="value">Guerrilla Games</span>
                                </div>
                                <div class="info-item">
                                    <span class="label">Editor:</span>
                                    <span class="value">PlayStation Publishing LLC</span>
                                </div>
                                <div class="info-item">
                                    <span class="label">Etiquetas populares:</span>
                                    <div class="tag-list">
                                        <span class="tag">{{ $game->category }}</span>
                                        <span class="tag">Acción</span>
                                        <span class="tag">Aventura</span>
                                    </div>
                                </div>
                            </div>

                            <div class="system-requirements mt-4">
                                <h4>Requisitos del sistema</h4>
                                <div class="requirements-tabs">
                                    <div class="tab active" data-tab="minimum">Mínimos</div>
                                    <div class="tab" data-tab="recommended">Recomendados</div>
                                </div>
                                <div class="requirements-content">
                                    <div class="requirement-item">
                                        <strong>SO:</strong> Windows 10 64-bit
                                    </div>
                                    <div class="requirement-item">
                                        <strong>Procesador:</strong> Intel Core i5-2500K / AMD FX-6300
                                    </div>
                                    <div class="requirement-item">
                                        <strong>Memoria:</strong> 8 GB de RAM
                                    </div>
                                    <div class="requirement-item">
                                        <strong>Gráficos:</strong> NVIDIA GTX 780 / AMD R9 280X
                                    </div>
                                    <div class="requirement-item">
                                        <strong>Almacenamiento:</strong> 100 GB disponibles
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="similar-games">
            <div class="container">
                <h2 class="section-title">Juegos similares</h2>
                <div class="row">
                    @for($i = 1; $i <= 4; $i++)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="game-card">
                            <div class="game-image">
                                <img src="/images/similar-game-{{ $i }}.jpg" alt="Similar Game {{ $i }}" class="img-fluid">
                            </div>
                            <div class="game-card-info">
                                <h5 class="game-title">Juego Similar {{ $i }}</h5>
                                <div class="game-price">
                                    <span class="price">${{ rand(20, 60) }}.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    

</x-layout>