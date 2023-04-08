@extends('layouts.main')
@section('title', 'Notatki')

@section('content')

<div class="notes">
    <h2 class="notes__title">Edytuj notatkę</h2>
    <form action="{{route('notes.update', $note->id)}}" method="post" class="notes__form">
        @csrf
        @method('PATCH')
        <div class="notes__group">
            <label for="title" class="notes__label">Nazwa notatki</label>
            <input name="title" type="text" class="notes__input" value="{{$note->title}}">
        </div>
        <div class="notes__group">
            <label for="title" class="notes__label">Treść notatki</label>
            <textarea name="content" id="content" cols="30" rows="10"
                class="notes__textarea">{{$note->content}}</textarea>
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
