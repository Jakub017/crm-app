@extends('layouts.main')
@section('title', 'Dodaj wydarzenie')

@section('content')

<div class="calendar">
    <h2 class="calendar__title">Dodaj wydarzenie</h2>
    <form method="POST" action="{{route('events.store')}}" class="calendar__form">
        @csrf
        <div class="calendar__form-group">
            <h3 class="calendar__form-group-heading">Informacje podstawowe</h3>
            <div class="calendar__form-inputs">
                <div class="calendar__input-group">
                    <label for="title" class="calendar__label">Nazwa wydarzenia</label>
                    <input name="title" type="text" class="calendar__input" placeholder="Zadzwonić do mamy">
                    @error('title')
                    <p>Błąd</p>
                    @enderror
                </div>
                <div class="calendar__input-group">
                    <label for="day" class="calendar__label">Dzień</label>
                    <input name="day" type="date" class="calendar__input">
                    @error('day')
                    <p>Błąd</p>
                    @enderror
                </div>
                <div class="calendar__input-group">
                    <label for="hour" class="calendar__label">Godzina</label>
                    <input name="hour" type="time" class="calendar__input">
                    @error('hour')
                    <p>Błąd</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="calendar__form-group">
            <h3 class="calendar__form-group-heading">Informacje dodatkowe</h3>
            <div class="calendar__form-inputs">
                <div class="calendar__input-group">
                    <label for="color" class="calendar__label">Kolor</label>
                    <input name="color" type="color" class="calendar__input" value="#1A8FFF">
                    @error('color')
                    <p>Błąd</p>
                    @enderror
                </div>
                <div class="calendar__input-group">
                    <label for="tags" class="calendar__label">Tagi (oddzielone przecinkami)</label>
                    <input name="tags" type="text" class="calendar__input">
                    @error('tags')
                    <p>Błąd</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="calendar__buttons">
            <a href="{{route('events')}}" class="calendar__cancel-button">
                {{ __('Anuluj') }}
            </a>
            <button type="submit" href="{{route('events')}}" class="calendar__submit-button">
                {{ __('Zapisz') }}
            </button>
        </div>
    </form>
</div>
@endsection
