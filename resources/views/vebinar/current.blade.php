@extends('components.layout.vebinar-layout')

@section('title', 'Текущие вебинары')

@section('page-title', 'Список текущих вебинаров')

@section('vebinar-list')
<!-- <?php dump($currentVebinars); ?> -->

@forelse ($currentVebinars as $vebinar)
<x-vebinar-card
    title='{{ $vebinar->title }}'
    description='{{ $vebinar->description }}'
    author='{{ $vebinar->author }}'
    speaker='{{ $vebinar->speaker }}'
    start-date='{{ $vebinar->start_date }}'
    end-date="{{ $vebinar->end_date }}" />

@empty
<h3>Нет текущих вебинаров</h3>

@endforelse
@endsection