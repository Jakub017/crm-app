@extends('layouts.main')
@section('title', 'Notatki')

@section('content')

<div class="notes">
    <h2 class="notes__title">Dodaj notatkę</h2>
    <form action="{{route('notes.store')}}" method="post" class="notes__form">
        @csrf
        <div class="notes__group">
            <label for="title" class="notes__label">Nazwa notatki</label>
            <input name="title" type="text" class="notes__input">
        </div>
        <div class="notes__group">
            <label for="title" class="notes__label">Treść notatki</label>
            <textarea name="content" id="default-editor" class="notes__textarea"></textarea>
        </div>
        <div class="notes__buttons">
            <a href="{{route('notes')}}" class="notes__cancel-button">
                {{ __('Anuluj') }}
            </a>
            <button type="submit" href="{{route('notes')}}" class="notes__submit-button">
                {{ __('Zapisz') }}
            </button>
        </div>

    </form>
</div>


@endsection
