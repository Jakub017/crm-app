@extends('dashboard.layouts.main')
@section('title', 'Pulpit')

@section('content')

<div class="main-content">
    <h1 class="main-content__title">Dzień dobry, <span class="main-content__name">{{ Auth::user()->name }}</span></h1>

    <div class="main-content__section">
        <h3 class="main-content__section-name">Twoje ostatnie notatki</h3>
        <div class="main-content__latest-wrapper">
            @foreach($latestNotes as $latestNote)
            <div class="main-content__latest-note">
                <div class="main-content__latest-note-text">
                    <h3 class="main-content__latest-note-title">{{ $latestNote->title }}</h3>
                    <p class="main-content__latest-note-content">{{ $latestNote->content }}</p>
                </div>
            </div>
            @endforeach
            <div class="main-content__latest-note">
                <div class="main-content__latest-note-text">
                    <h3 class="main-content__latest-note-title">Dodaj notatkę</h3>
                    <p class="main-content__latest-note-content">Spisz swoje myśli</p>
                </div>
                <div class="main-content__latest-icon">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.7915 18.9583H18.9582V24.7917H16.0415V18.9583H10.2082V16.0417H16.0415V10.2083H18.9582V16.0417H24.7915M17.4998 2.91666C15.5847 2.91666 13.6884 3.29387 11.919 4.02675C10.1497 4.75963 8.54205 5.83383 7.18786 7.18802C4.45296 9.92292 2.9165 13.6322 2.9165 17.5C2.9165 21.3677 4.45296 25.0771 7.18786 27.812C8.54205 29.1661 10.1497 30.2404 11.919 30.9732C13.6884 31.7061 15.5847 32.0833 17.4998 32.0833C21.3676 32.0833 25.0769 30.5469 27.8118 27.812C30.5467 25.0771 32.0832 21.3677 32.0832 17.5C32.0832 15.5849 31.706 13.6885 30.9731 11.9192C30.2402 10.1499 29.166 8.5422 27.8118 7.18802C26.4576 5.83383 24.85 4.75963 23.0806 4.02675C21.3113 3.29387 19.4149 2.91666 17.4998 2.91666Z"
                            fill="#848484" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content__section">
        <h3 class="main-content__section-name">Twoje nadchodzące wydarzenia</h3>
    </div>
    <div class="main-content__section">
        <h3 class="main-content__section-name">Ostatnio edytowane dane</h3>
    </div>
</div>

@endsection
