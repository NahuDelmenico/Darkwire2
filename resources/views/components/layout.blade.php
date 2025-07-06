<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>{{$title ?? ''}}:: Darkwire</title>
</head>

<body data-bs-theme="dark">
    <div id=”app”>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Darkwire</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar menú de navegación">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item">
                    <x-nav-link route="home">Home</x-nav-link>
                    </li>
                    <li class="nav-item">
                    <x-nav-link route="catalogo">Catálogo</x-nav-link>
                    </li>
                    <li class="nav-item">
                    <x-nav-link route="announcements.index">Novedades</x-nav-link>
                    </li>
                </ul>


                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item">
                        <a href="{{ route('admin.users') }}" class="btn btn-warning">Administrar</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('auth.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">
                            {{ auth()->user()->email }} (Cerrar Sesión)
                        </button>
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <x-nav-link route="auth.login">Iniciar Sesión</x-nav-link>
                    </li>
                    @endauth
                </ul>
                </div>
            </div>
            </nav>


        <main class="p-4 " >
            {{ $slot}}
        </main>
        <footer class="footer text-bg-dark text-center border-top border-dark-subtle border-4 pt-5">
            <div class="row">
                <div class="col">
                    <x-nav-link
                                route="home"
                            >
                               Home
                            </x-nav-link>
                </div>
                <div class="col">
               <x-nav-link
                                route="catalogo"
                            >
                               Catalogo
                            </x-nav-link>
                </div>
                <div class="col">
                <x-nav-link
                                route="announcements.index"
                            >
                                Novedades
                            </x-nav-link>
                </div>
                <div class="col">
                @auth

                                <form action="{{ route('auth.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="nav-link">
                                        {{ auth()->user()->email }}  (Cerrar Sesion)
                                    </button>
                                </form>

                        @else

                                <x-nav-link route="auth.login">
                                    Iniciar Sesion
                                </x-nav-link>

                        @endauth
                </div>
            </div>
            <p>Copyright &copy; Darkwire</p>
        </footer>
    </div>

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
