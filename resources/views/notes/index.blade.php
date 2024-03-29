@extends('layouts.main')
@section('title', 'Notatki')

@section('content')

<div class="notes">
    <h2 class="notes__title">Twoje notatki</h2>
    <div class="notes__wrapper">
        <form action="" class="notes__search">
            <input class="notes__search-input" type="text" name="search" placeholder="Szukaj według nazwy lub tagów...">
            <button type="submit" class="notes__search-button">Szukaj</button>
        </form>
        <a class="notes__add-note" href="{{route('notes.add')}}">
            <div class="notes__circle">
                &#43;
            </div>
            <h3 class="notes__add-note-text">Dodaj nową notatkę</h3>
        </a>
        @foreach($notes as $note)
        <div class="notes__note">
            <div class="notes__text">
                <h2 class="notes__name">{{ $note->title }}</h2>
                <ul class="notes__note-tags">
                    @foreach(explode(',', $note->tags) as $tag)
                    <li class="notes__note-tag">{{ $tag }}</li>
                    @endforeach
                </ul>
                <div class="notes__content">{{Str::limit($note->content, 100, $end="...") }}</div>
            </div>
            <div class="notes__info">
                <span class="notes__date">{{ $note->created_at->format('d.m.Y') }}</span>
                <div class="notes__actions">
                    <a href="{{route('notes.edit', $note)}}" class="notes__show">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 5.625C8.75 5.625 3.4125 9.5125 1.25 15C3.4125 20.4875 8.75 24.375 15 24.375C21.25 24.375 26.5875 20.4875 28.75 15C26.5875 9.5125 21.25 5.625 15 5.625ZM15 21.25C11.55 21.25 8.75 18.45 8.75 15C8.75 11.55 11.55 8.75 15 8.75C18.45 8.75 21.25 11.55 21.25 15C21.25 18.45 18.45 21.25 15 21.25ZM15 11.25C12.925 11.25 11.25 12.925 11.25 15C11.25 17.075 12.925 18.75 15 18.75C17.075 18.75 18.75 17.075 18.75 15C18.75 12.925 17.075 11.25 15 11.25Z"
                                fill="#848484" fill-opacity="0.7" />
                        </svg>

                    </a>
                    <form action="{{ route('notes.destroy', $note) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="notes__delete" type="submit"><svg width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 3.84615H15.5L14.5 2.88461H9.5L8.5 3.84615H5V5.76923H19M6 18.2692C6 18.7793 6.21071 19.2684 6.58579 19.6291C6.96086 19.9897 7.46957 20.1923 8 20.1923H16C16.5304 20.1923 17.0391 19.9897 17.4142 19.6291C17.7893 19.2684 18 18.7793 18 18.2692V6.73077H6V18.2692Z"
                                    fill="#848484" fill-opacity="0.7" />
                            </svg></button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <!-- <a href="{{route('notes.add')}}" class="notes__add">
        <svg class="notes__add-icon" width="40" height="40" viewBox="0 0 40 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M30.0002 21.6633H21.6668V29.9967C21.6668 30.4387 21.4912 30.8626 21.1787 31.1752C20.8661 31.4877 20.4422 31.6633 20.0002 31.6633C19.5581 31.6633 19.1342 31.4877 18.8217 31.1752C18.5091 30.8626 18.3335 30.4387 18.3335 29.9967V21.6633H10.0002C9.55814 21.6633 9.13421 21.4877 8.82165 21.1752C8.50909 20.8626 8.3335 20.4387 8.3335 19.9967C8.3335 19.5546 8.50909 19.1307 8.82165 18.8182C9.13421 18.5056 9.55814 18.33 10.0002 18.33H18.3335V9.99667C18.3335 9.55464 18.5091 9.13072 18.8217 8.81816C19.1342 8.5056 19.5581 8.33 20.0002 8.33C20.4422 8.33 20.8661 8.5056 21.1787 8.81816C21.4912 9.13072 21.6668 9.55464 21.6668 9.99667V18.33H30.0002C30.4422 18.33 30.8661 18.5056 31.1787 18.8182C31.4912 19.1307 31.6668 19.5546 31.6668 19.9967C31.6668 20.4387 31.4912 20.8626 31.1787 21.1752C30.8661 21.4877 30.4422 21.6633 30.0002 21.6633Z"
                fill="white" />
        </svg>
    </a> -->
</div>

@endsection
