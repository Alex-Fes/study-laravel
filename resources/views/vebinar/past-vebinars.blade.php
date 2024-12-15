@extends('components.layout.vebinar-layout')

@section('title', 'Прошедшие вебинары')

@section('page-title', 'Список прошедших вебинаров')

@section('vebinar-list')

@forelse ($pastVebinars as $vebinar)
<x-vebinar-card
    title='{{ $vebinar->title }}'
    description='{{ $vebinar->description }}'
    author='{{ $vebinar->author }}'
    speaker='{{ $vebinar->speaker }}'
    start-date='{{ $vebinar->start_date }}'
    end-date="{{ $vebinar->end_date }}" />

    @empty
    <h3>Нет прошедших вебинаров</h3>

    @endforelse
    @endsection