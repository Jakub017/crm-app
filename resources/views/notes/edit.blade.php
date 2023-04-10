@extends('layouts.main')
@section('title', 'Notatki')

@section('content')

<div class="notes">
    <h2 class="notes__title">Podgląd / edycja notatki</h2>
    <form action="{{route('notes.update', $note->id)}}" method="post" class="notes__form">
        @csrf
        @method('PATCH')
        <div class="notes__form-group">
            <div class="notes__input-group">
                <label for="title" class="notes__label">Nazwa notatki *</label>
                <input name="title" type="text" class="notes__input" value="{{$note->title}}">
            </div>
            <div class="notes__input-group">
                <label for="tags" class="notes__label">Tagi (oddzielone przecinkami)</label>
                <input name="tags" type="text" class="notes__input" value="{{$note->tags}}"">
                @error('tags')
                <p>Błąd</p>
                @enderror
            </div>
            <div class=" notes__input-group">
                <label for="title" class="notes__label">Treść notatki *</label>
                <textarea name="content" class="notes__textarea">{{$note->content}}</textarea>
            </div>
        </div>

        <div class="notes__buttons">
            <a href="{{route('notes')}}" class="notes__cancel-button">
                {{ __('Powrót') }}
            </a>
            <button type="submit" href="{{route('notes')}}" class="notes__submit-button">
                {{ __('Edytuj') }}
            </button>
        </div>

    </form>
</div>


@endsection
