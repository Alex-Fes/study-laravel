@extends('components.layout.vebinar-layout')

@section('page-title', 'Раздел вебинаров')


@section('description-from-view')
<meta name="description" content="Раздел вебинаров, description из view">
@endsection

@section('keywords-from-view')
<meta name="keywords" content="вебинары, кейвордс, сео, keywords из view">
@endsection

@section('main-vebinar-page-content')
    <div class="card p-4">
        <!-- <h1>Вебинары</h1> -->
        <p>Выберите интересующий вас раздел в меню выше</p>

        <p class="fs-4">
            тут будет описание раздела
        </p>
        
        {{-- @if($vebinars->count() > 0)
            <div class="recent-vebinars">
                <h2>Последние вебинары</h2>
                @foreach($vebinars as $vebinar)
                    <div class="vebinar-card">
                        <h3>{{ $vebinar->title }}</h3>
                        <p>{{ $vebinar->description }}</p>
                    </div>
                @endforeach
            </div>
        @endif --}}
    </div>
@endsection