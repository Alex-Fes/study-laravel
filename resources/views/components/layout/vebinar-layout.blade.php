@extends('components.layout.main-layout')

@section('title', 'Вебинары')

@extends('vebinar.vebinar-nav')

@section('content')
<div class="container border-bottom border-end border-start rounded-bottom pb-4">
    <div class="row justify-content-center align-items-center h-100">
        <h3 class="display-3">
            @yield('page-title')
        </h3>

        <div class="d-flex flex-column gap-3">
            @yield('vebinar-list')
        </div>

        <div class="">
            @yield('main-vebinar-page-content')
        </div>
    </div>
</div>
@endsection