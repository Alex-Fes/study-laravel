@extends('components.layout.vebinar-layout')

@section('title', 'Бдущие вебинары')

@section('page-title', 'Список бдущих вебинаров')

@section('vebinar-list')
<x-slot name="title">
    Будущие вебинары
</x-slot>

<x-slot name="description">
    Будущие вебинары
</x-slot>

<!-- <h1>Прошедшие вебинары</h1> -->

<!-- <?php dump($futureVebinars); ?> -->

@forelse ($futureVebinars as $vebinar)
<x-vebinar-card
    title='{{ $vebinar->title }}'
    description='{{ $vebinar->description }}'
    author='{{ $vebinar->author }}'
    speaker='{{ $vebinar->speaker }}'
    start-date='{{ $vebinar->start_date }}'
    end-date="{{ $vebinar->end_date }}" />

@empty
<h3>Нет бдущих вебинаров</h3>

@endforelse
@endsection