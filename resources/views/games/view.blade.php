<x-layout>
    <x-slot:title>{{ $game->name }}</x-slot:title>

    <div class="game-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb-section">
            <div class="container">
                <nav class="breadcrumb-nav">
                    <a href="{{ route('games.index') }}" class="breadcrumb-link">Todos los juegos</a>
                    <span class="breadcrumb-separator">></span>
                    <a href="#" class="breadcrumb-link">CATEGORIA</a>
                    <span class="breadcrumb-separator">></span>
                    <span class="breadcrumb-current">{{ $game->name }}</span>
                </nav>
            </div>
        </div>

        <!-- Hero Section -->
        <div class="game-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="game-media">
                            <div class="main-image">
                                <!-- Imagen Principal Cargada -->
                                <img src="https://imgs.search.brave.com/bxlM2Gy6pDnrbrkbgHqfr_7IK-qA5cMHGGwALM0Y_Hw/rs:fit:860:0:0:0/g:ce/aHR0cDovL2ltYWdl/Lm5vZWxzaGFjay5j/b20vZmljaGllcnMv/MjAxOS80NC81LzE1/NzI2MjE1MzItcmRy/Mi1wYy1zY3JlZW5z/aG90LTAzOC5qcGc" 
                                    alt="{{ $game->name }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="game-info-sidebar">
                            <div class="game-logo mb-3">
                                <img src="{{ $game->logo ?? '/images/default-logo.png' }}" 
                                    alt="{{ $game->name }}" class="img-fluid">
                            </div>
                            
                            <div class="game-description mb-4">
                                <p class="text-light">{{ $game->description }}</p>
                            </div>

                            <div class="game-tags mb-4">
                                <span class="tag">{{ $game->category }}</span>
                                <span class="tag">Acción</span>
                                <span class="tag">Aventura</span>
                                <span class="tag">Un jugador</span>
                            </div>

                            <div class="purchase-section">
                                <div class="price-section mb-3">
                                    @if($game->price > 0)
                                        <div class="discount-badge">-40%</div>
                                        <div class="price-info">
                                            <span class="original-price">${{ number_format($game->price * 1.4, 2) }}</span>
                                            <span class="current-price">${{ number_format($game->price, 2) }}</span>
                                        </div>
                                    @else
                                        <div class="free-badge">GRATIS</div>
                                    @endif
                                </div>
                                
                                <div class="purchase-buttons">
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
        </div>

        <!-- Game Details Section -->
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

        <!-- Similar Games Section -->
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

    <style>
        .game-page {
            background: linear-gradient(135deg, #1e2328 0%, #2a2d32 100%);
            min-height: 100vh;
            color: #c7d5e0;
        }

        .breadcrumb-section {
            background: rgba(0, 0, 0, 0.3);
            padding: 1rem 0;
            border-bottom: 1px solid #3c4043;
        }

        .breadcrumb-nav {
            font-size: 0.9rem;
        }

        .breadcrumb-link {
            color: #66c0f4;
            text-decoration: none;
        }

        .breadcrumb-link:hover {
            color: #ffffff;
        }

        .breadcrumb-separator {
            margin: 0 0.5rem;
            color: #8f98a0;
        }

        .breadcrumb-current {
            color: #c7d5e0;
        }

        .game-hero {
            padding: 2rem 0;
            background: linear-gradient(135deg, #1b2838 0%, #2a475e 100%);
        }

        .game-media {
            position: relative;
        }

        .main-image {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .main-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .play-button:hover {
            background: rgba(0, 0, 0, 0.9);
            transform: translate(-50%, -50%) scale(1.1);
        }

        .thumbnail {
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .thumbnail:hover {
            transform: scale(1.05);
        }

        .thumbnail img {
            width: 100%;
            height: 60px;
            object-fit: cover;
        }

        .game-info-sidebar {
            background: rgba(0, 0, 0, 0.4);
            padding: 2rem;
            border-radius: 8px;
            border: 1px solid #3c4043;
        }

        .game-logo img {
            max-width: 100%;
            height: auto;
        }

        .tag {
            background: #3c4043;
            color: #c7d5e0;
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.85rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            display: inline-block;
        }

        .purchase-section {
            background: linear-gradient(135deg, #4c6c22 0%, #417a1a 100%);
            padding: 1.5rem;
            border-radius: 8px;
            border: 1px solid #5c7c2a;
        }

        .discount-badge {
            background: #4c6c22;
            color: #beee11;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .free-badge {
            background: #417a1a;
            color: #beee11;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .price-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .original-price {
            color: #738895;
            text-decoration: line-through;
            font-size: 0.9rem;
        }

        .current-price {
            color: #beee11;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .btn-primary {
            background: #66c0f4;
            border: none;
            padding: 0.75rem 2rem;
            font-weight: bold;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #54a3d8;
            transform: translateY(-2px);
        }

        .btn-outline-light {
            border: 2px solid #c7d5e0;
            color: #c7d5e0;
            padding: 0.75rem 2rem;
            font-weight: bold;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background: #c7d5e0;
            color: #1b2838;
        }

        .game-details {
            padding: 3rem 0;
        }

        .section-title {
            color: #ffffff;
            margin-bottom: 2rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #66c0f4;
        }

        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #3c4043;
        }

        .feature-list li:before {
            content: "✓";
            color: #beee11;
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .reviews-summary {
            background: rgba(0, 0, 0, 0.3);
            padding: 1.5rem;
            border-radius: 8px;
            border: 1px solid #3c4043;
        }

        .score-badge {
            background: #66c0f4;
            color: #1b2838;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-weight: bold;
            margin-right: 1rem;
        }

        .score-badge.positive {
            background: #66c0f4;
        }

        .review-item {
            background: rgba(0, 0, 0, 0.3);
            padding: 1.5rem;
            border-radius: 8px;
            border: 1px solid #3c4043;
            margin-bottom: 1rem;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .review-type {
            background: #66c0f4;
            color: #1b2838;
            padding: 0.25rem 0.75rem;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: bold;
        }

        .review-hours {
            color: #8f98a0;
            font-size: 0.85rem;
        }

        .review-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
            font-size: 0.85rem;
            color: #8f98a0;
        }

        .game-info-box {
            background: rgba(0, 0, 0, 0.3);
            padding: 1.5rem;
            border-radius: 8px;
            border: 1px solid #3c4043;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid #3c4043;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .label {
            color: #8f98a0;
            font-weight: bold;
        }

        .value {
            color: #c7d5e0;
        }

        .system-requirements {
            background: rgba(0, 0, 0, 0.3);
            padding: 1.5rem;
            border-radius: 8px;
            border: 1px solid #3c4043;
        }

        .requirements-tabs {
            display: flex;
            margin-bottom: 1rem;
        }

        .tab {
            background: #3c4043;
            color: #c7d5e0;
            padding: 0.5rem 1rem;
            cursor: pointer;
            border-radius: 4px 4px 0 0;
            margin-right: 0.25rem;
        }

        .tab.active {
            background: #66c0f4;
            color: #1b2838;
        }

        .requirement-item {
            padding: 0.5rem 0;
            border-bottom: 1px solid #3c4043;
        }

        .requirement-item:last-child {
            border-bottom: none;
        }

        .similar-games {
            background: rgba(0, 0, 0, 0.3);
            padding: 3rem 0;
            border-top: 1px solid #3c4043;
        }

        .game-card {
            background: rgba(0, 0, 0, 0.4);
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #3c4043;
        }

        .game-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .game-image img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .game-card-info {
            padding: 1rem;
        }

        .game-title {
            color: #ffffff;
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .game-price .price {
            color: #beee11;
            font-weight: bold;
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .game-hero {
                padding: 1rem 0;
            }
            
            .game-info-sidebar {
                margin-top: 2rem;
            }
            
            .price-info {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
        }
    </style>

</x-layout>