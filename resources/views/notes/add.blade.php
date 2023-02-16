@extends('notes.layouts.main')
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
            <textarea name="content" id="content" cols="30" rows="10" class="notes__textarea"></textarea>
        </div>
    </form>
</div>


@endsection
