@extends('components.layout.vebinar-layout')

@section('title', 'Регистранция автора')

@section('page-title', 'Стать автором вебинара')

@section('main-vebinar-page-content')
<div class="card p-4" style="width: 40rem;">
    <h3 class="fs-4">
        Регистранция автора вебинара
    </h3>

    <form method="POST" class="d-flex flex-column gap-2 mw-600" action="{{ route('vebinars.store') }}">
        @csrf
        <x-input
            value=""
            placeholder="Введите азвание"
            label="Название вебинара"
            name="title"
            id="title"
            type="text" />

        <x-textarea
            class="textarea"
            value=""
            label="Описание вебинара"
            placeholder="Введите вебинара"
            name="description"
            id="description"
            rows="3" />

        <x-input
            value=""
            placeholder="Введите вебинара"
            label="Автор вебинара"
            name="author"
            id="author"
            type="text" />

        <x-input
            value=""
            placeholder="Почта автора"
            label="Email автора"
            name="author_email"
            id="euthor_email"
            type="email" />

        <x-input
            value=""
            placeholder="Введите имя и фамилию"
            label="ФИО"
            name="speaker"
            id="speaker"
            type="text" />

        <x-input
            value=""
            placeholder="Почта спикера"
            label="Почта автора"
            name="speaker_email"
            id="speaker_email"
            type="email" />

        <x-input
            value=""
            label="Дата начала"
            name="start_date"
            id="start_date"
            type="date" />

        <x-input
            value=""
            label="Дата окончания"
            name="end_date"
            id="end_date"
            type="date" />

        <x-input
            value=""
            label="Старт регистрации"
            name="start_registration"
            id="start_registration"
            type="date" />

        <x-input
            value=""
            label="Окончание регистрации"
            name="end_registration"
            id="end_registration"
            type="date" />

        <input type="submit" value="Зарегистрироваться" />
    </form>
</div>
@endsection