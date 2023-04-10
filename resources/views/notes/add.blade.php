@extends('layouts.main')
@section('title', 'Notatki')

@section('content')

<div class="notes">
    <h2 class="notes__title">Dodaj notatkę</h2>
    <form action="{{route('notes.store')}}" method="post" class="notes__form">
        @csrf
        <div class="notes__form-group">
            <h3 class="notes__form-group-heading">Informacje podstawowe</h3>
            <div class="notes__input-group">
                <label for="title" class="notes__label">Nazwa notatki *</label>
                <input name="title" type="text" class="notes__input">
                @error('title')
                <p>To pole zawiera błędy</p>
                @enderror
            </div>
            <div class="notes__input-group">
                <label for="tags" class="notes__label">Tagi (oddzielone przecinkami)</label>
                <input name="tags" type="text" class="notes__input">
                @error('tags')
                <p>Błąd</p>
                @enderror
            </div>
            <div class="notes__input-group">
                <label for="title" class="notes__label">Treść notatki *</label>
                <textarea name="content" class="notes__textarea"></textarea>
                @error('content')
                <p>To pole zawiera błędy</p>
                @enderror
            </div>
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
