@section('header')
@parent
<div class="container flex-column pt-2">
    <nav>
        <ul class="nav nav-tabs w-100">
            <li class="nav-item">
                <a href="{{ route('vebinars.past') }}" class="nav-link {{ request()->routeIs('vebinars.past') ? 'active' : '' }}">Прошедшие вебинары</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('vebinars.current') }}" class="nav-link {{ request()->routeIs('vebinars.current') ? 'active' : '' }}">Актуальные вебинары</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('vebinars.future') }}" class="nav-link {{ request()->routeIs('vebinars.future') ? 'active' : '' }}">Будущие вебинары</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('vebinars.sign-in') }}" class="nav-link {{ request()->routeIs('vebinars.sign-in') ? 'active' : '' }}">Записаться на вебинар</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('vebinars.create') }}" class="nav-link {{ request()->routeIs('vebinars.create') ? 'active' : '' }}">Стать автором</a>
            </li>
        </ul>
    </nav>
</div>
@endsection