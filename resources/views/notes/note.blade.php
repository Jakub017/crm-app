@extends('notes.layouts.main')
@section('title', 'Podgląd notatki')

@section('content')
<div class="note-view">
    <h4 class="note-view__label">Tytuł notatki</h4>
    <h2 class="note-view__title">{{$note->title}}</h2>

</div>


@endsection
