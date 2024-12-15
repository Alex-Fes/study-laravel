<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel')</title>

    @isset($description)
    <meta name="description" content="{{ $description }}">
    @endisset

    @isset($keywords)
    <meta name="keywords" content="{{ $keywords }}">
    @endisset

    @yield('description-from-view')
    @yield('keywords-from-view')

    <!-- Стили -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')
</head>

<body>
   @section('header')
    <header class="bg-light py-3">
        <div class="container">
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('vebinars.index') }}" class="nav-link">Вебинары</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    @show

    <!-- Основной контент -->
    <main class="pb-4">
        <div class="container-lg">
            @yield('content')
        </div>
    </main>

    <!-- Футер -->
    <footer class="bg-light py-3 mt-auto">
        <div class="container">
            <p class="text-center mb-0">&copy; {{ date('Y') }} Учимся программировать Laravel</p>
        </div>
    </footer>

    <!-- Скрипты -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>