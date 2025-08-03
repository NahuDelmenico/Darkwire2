<x-layout>
    <x-slot:title>Carrito de Compras</x-slot:title>

    <div class="flex bg-[#2e2e2e] text-white min-h-screen">
        <main class="container-fluid p-4">

            <!-- Header del Carrito -->
            <section class="mb-5">
                <div class="text-center mb-4">
                    <h1 class="display-4 text-warning fw-bold">Mi Carrito</h1>
                    <p class="lead">Revisa tus juegos seleccionados antes de finalizar la compra</p>
                </div>
            </section>

            @if(session('feedback.message'))
            <div class="alert alert-{{ session('feedback.type', 'success') }} alert-dismissible fade show" role="alert">
                {!! session('feedback.message') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <!-- Contenido del Carrito -->
            <section class="row">
                <!-- Lista de Juegos en el Carrito -->
                <div class="col-lg-8 mb-4">
                    <div class="bg-dark rounded p-4 border border-warning">
                        <h3 class="text-warning mb-4">
                            <i class="bi bi-cart3 me-2"></i>
                            Juegos en tu carrito (<span id="cart-count">{{ count($cartItems ?? []) }}</span>)
                        </h3>

                        @if(isset($cartItems) && count($cartItems) > 0)
                        <!-- Template para iterar juegos del carrito -->
                        @foreach($cartItems as $index => $item)
                        <div class="cart-item border-bottom border-secondary pb-4 mb-4" data-item-id="{{ $item['id'] ?? $index }}">
                            <div class="row align-items-center">

                                <!-- Imagen del Juego -->
                                <div class="col-md-3 col-sm-4 mb-3 mb-md-0">
                                    <img src="{{ $item['logo'] ?? 'https://via.placeholder.com/200x100?text=Game+Image' }}"
                                        class="img-fluid rounded"
                                        alt="{{ $item['name'] ?? 'Juego' }}"
                                        style="max-height: 120px; object-fit: cover;">
                                </div>

                                <!-- Información del Juego -->
                                <div class="col-md-5 col-sm-8">
                                    <h5 class="text-white mb-2">{{ $item['name'] ?? 'Nombre del Juego' }}</h5>
                                    <p class="text-muted mb-2">
                                        <small>
                                            <i class="bi bi-tag me-1"></i>
                                            {{ $item['category'] ?? 'Categoría' }}
                                        </small>
                                    </p>
                                    <p class="text-muted mb-0">
                                        <small>{{ $item['description'] ?? 'Descripción del juego...' }}</small>
                                    </p>
                                </div>

                                <!-- Precio y Botón Eliminar -->
                                <div class="col-md-2 col-sm-6 text-center">
                                    <div class="mb-2">
                                        <span class="text-warning fw-bold fs-5">
                                            ${{ number_format($item['price'] ?? 0, 2) }}
                                        </span>
                                    </div>
                                    <form action="{{route('cart.remove', ['id'=> $index] )}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm btn-remove"
                                            title="Eliminar del carrito">
                                            <i class="bi bi-trash">Eliminar</i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <!-- Carrito Vacío -->
                        <div class="text-center py-5" id="empty-cart">
                            <div class="mb-4">
                                <i class="bi bi-cart-x display-1 text-muted"></i>
                            </div>
                            <h4 class="text-muted mb-3">Tu carrito está vacío</h4>
                            <p class="text-muted mb-4">¡Explora nuestra colección de juegos y encuentra tu próxima aventura!</p>
                            <a href="{{ route('games.index') }}" class="btn btn-warning btn-lg">
                                <i class="bi bi-controller me-2"></i>
                                Explorar Juegos
                            </a>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Resumen de Compra -->
                <div class="col-lg-4">
                    <div class="bg-dark rounded p-4 border border-warning sticky-top">
                        <h4 class="text-warning mb-4">
                            <i class="bi bi-receipt me-2"></i>
                            Resumen de Compra
                        </h4>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Subtotal:</span>
                                <span id="subtotal">${{ number_format($subtotal ?? 0, 2) }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Descuentos:</span>
                                <span class="text-success" id="descuentos">-${{ number_format($descuentos ?? 0, 2) }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Impuestos:</span>
                                <span id="impuestos">${{ number_format($impuestos ?? 0, 2) }}</span>
                            </div>
                            <hr class="border-warning">
                            <div class="d-flex justify-content-between fs-5 fw-bold">
                                <span>Total:</span>
                                <span class="text-warning" id="total">${{ number_format($total ?? 0, 2) }}</span>
                            </div>
                        </div>

                        <!-- Código de Descuento -->
                        <div class="mb-4">
                            <label class="form-label text-muted">Código de descuento</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ingresa tu código" id="codigo-descuento">
                                <button class="btn btn-outline-warning" type="button" id="aplicar-descuento">
                                    Aplicar
                                </button>
                            </div>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="d-grid gap-2">
                            @if(isset($cartItems) && count($cartItems) > 0)
                            <button class="btn btn-warning btn-lg fw-bold" id="btn-checkout">
                                <i class="bi bi-credit-card me-2"></i>
                                Proceder al Pago
                            </button>
                            <form action="{{ route('cart.clear') }}" method="POST" class="d-grid">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger" id="btn-clear-cart">
                                    <i class="bi bi-trash me-2"></i>
                                    Vaciar Carrito
                                </button>
                            </form>
                            @endif
                            <a href="{{ route('games.index') }}" class="btn btn-outline-warning">
                                <i class="bi bi-arrow-left me-2"></i>
                                Seguir Comprando
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Estilos adicionales -->
    <style>
        .cart-item:hover {
            background-color: rgba(255, 193, 7, 0.1);
            transition: background-color 0.3s ease;
        }

        .btn-remove:hover {
            transform: scale(1.1);
            transition: transform 0.2s ease;
        }

        .quantity-input {
            background-color: #2e2e2e;
            border-color: #ffc107;
            color: white;
        }

        .quantity-input:focus {
            background-color: #2e2e2e;
            border-color: #ffc107;
            color: white;
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
        }
    </style>
</x-layout>