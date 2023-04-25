@extends('layouts.main')
@section('title', 'Wydarzenia')

@section('content')

<div class="calendar">
    <h2 class="calendar__title">Twoje wydarzenia</h2>
    <div class="calendar__wrapper">
        <form action="" class="calendar__search">
            <input class="calendar__search-input" type="text" name="search"
                placeholder="Szukaj według nazwy lub tagów...">
            <button type="submit" class="calendar__search-button">Szukaj</button>
        </form>
        <a href="{{route('events.add')}}" class="calendar__item-add-new">
            <div class="calendar__item-circle">
                &#43;
            </div>
            <h3 class="calendar__add-item-text">Dodaj nowe wydarzenie</h3>
        </a>
        @foreach($events as $event)
        <div class="calendar__item">
            <div class="calendar__item-left">
                <div class="calendar__tags">
                    <ul class="calendar__tags-list">
                        @foreach(explode(',', $event->tags) as $tag)
                        <li class="calendar__tag">
                            {{ $tag }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <h2 class="calendar__name">{{ $event->title }}</h2>
            </div>
            <div class="calendar__item-date-wrapper">
                <div class="calendar__date">
                    <span class=" calendar__day">{{ \Carbon\Carbon::parse($event->day)->format('d.m')}}</span>
                    <span class="calendar__hour">{{ \Carbon\Carbon::parse($event->hour)->format('h:i')}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
