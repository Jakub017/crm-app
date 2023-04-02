@extends('notes.layouts.main')
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
        @foreach($events as $event)
        <div class="calendar__item">
            <div class="calendar__top">
                <h2 class="calendar__name">{{ $event->title }}</h2>
                <div class="calendar__date" style="background-color: {{$event->color}};">
                    <span class="calendar__day">{{ \Carbon\Carbon::parse($event->day)->format('d.m')}}</span>
                    <span class="calendar__hour">{{ \Carbon\Carbon::parse($event->day)->format('h:m')}}</span>
                </div>
            </div>
            <div class="calendar__tags">
                <span class="calendar__tag-heading">Tagi:</span>
                <ul class="calendar__tags-list">
                    @foreach(explode(',', $event->tags) as $tag)
                    <li>
                        <a class="calendar__tag" href="/wydarzenia/?tag={{$tag}}">{{ $tag }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
    <a href="{{route('events.add')}}" class="notes__add">
        <svg class="calendar__add-icon" width="40" height="40" viewBox="0 0 40 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M30.0002 21.6633H21.6668V29.9967C21.6668 30.4387 21.4912 30.8626 21.1787 31.1752C20.8661 31.4877 20.4422 31.6633 20.0002 31.6633C19.5581 31.6633 19.1342 31.4877 18.8217 31.1752C18.5091 30.8626 18.3335 30.4387 18.3335 29.9967V21.6633H10.0002C9.55814 21.6633 9.13421 21.4877 8.82165 21.1752C8.50909 20.8626 8.3335 20.4387 8.3335 19.9967C8.3335 19.5546 8.50909 19.1307 8.82165 18.8182C9.13421 18.5056 9.55814 18.33 10.0002 18.33H18.3335V9.99667C18.3335 9.55464 18.5091 9.13072 18.8217 8.81816C19.1342 8.5056 19.5581 8.33 20.0002 8.33C20.4422 8.33 20.8661 8.5056 21.1787 8.81816C21.4912 9.13072 21.6668 9.55464 21.6668 9.99667V18.33H30.0002C30.4422 18.33 30.8661 18.5056 31.1787 18.8182C31.4912 19.1307 31.6668 19.5546 31.6668 19.9967C31.6668 20.4387 31.4912 20.8626 31.1787 21.1752C30.8661 21.4877 30.4422 21.6633 30.0002 21.6633Z"
                fill="white" />
        </svg>
    </a>
</div>
@endsection
