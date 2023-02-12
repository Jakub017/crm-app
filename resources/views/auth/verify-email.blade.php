@extends('layouts.auth')
@section('title', 'Logowanie')

@section('content')
<h2 class="form-wrapper__title">Link wysłany!</h2>
<h5 class="form-wrapper__description">Dziękujemy za rejestrację! Zanim zaczniesz, czy mógłbyś zweryfikować swój adres
    e-mail, klikając na link, który właśnie wysłaliśmy do Ciebie? Jeśli nie otrzymałeś maila, chętnie wyślemy Ci
    kolejny.</h5>



@if (session('status') == 'verification-link-sent')
<div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
    {{ __('Na adres e-mail podany podczas rejestracji został wysłany nowy link weryfikacyjny.') }}
</div>
@endif



<div class="form-wrapper__verify-wrapper">
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button class="form-wrapper__submit-button">
            {{ __('Wyślij ponownie') }}
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="form-wrapper__cancel-button">
            {{ __('Wyloguj') }}
        </button>
    </form>
</div>


@endsection
