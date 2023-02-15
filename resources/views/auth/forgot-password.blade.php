@extends('auth.layouts.main')
@section('title', 'Odzyskiwanie hasła')

@section('content')
<h2 class="form-wrapper__title">Nie pamiętasz hasła?</h2>
<h5 class="form-wrapper__description">Nie ma problemu. Wystarczy, że podasz nam swój adres e-mail, a my wyślemy Ci link
    resetujący hasło, który pozwoli Ci ustawić nowe.</h5>

<!-- Session Status -->


<form class="form-wrapper__form" method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
    <div class="form-wrapper__input-group">
        <div class="form-wrapper__input-icon">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.66671 38.3333C6.61254 38.3333 5.71043 37.9583 4.96037 37.2082C4.20904 36.4569 3.83337 35.5542 3.83337 34.5V11.5C3.83337 10.4458 4.20904 9.54371 4.96037 8.79366C5.71043 8.04232 6.61254 7.66666 7.66671 7.66666H38.3334C39.3875 7.66666 40.2903 8.04232 41.0416 8.79366C41.7917 9.54371 42.1667 10.4458 42.1667 11.5V34.5C42.1667 35.5542 41.7917 36.4569 41.0416 37.2082C40.2903 37.9583 39.3875 38.3333 38.3334 38.3333H7.66671ZM38.3334 15.3333L24.0063 24.2937C23.8466 24.3896 23.6785 24.4611 23.5022 24.5084C23.3272 24.557 23.1598 24.5812 23 24.5812C22.8403 24.5812 22.6729 24.557 22.4979 24.5084C22.3215 24.4611 22.1535 24.3896 21.9938 24.2937L7.66671 15.3333V34.5H38.3334V15.3333ZM23 21.0833L38.3334 11.5H7.66671L23 21.0833ZM7.66671 15.8125V12.9854V13.0333V13.0084V15.8125Z"
                    fill="#848484" fill-opacity="0.8" />
            </svg>

        </div>
        <input class="form-wrapper__input" id="email" class="block mt-1 w-full" type="email" name="email"
            :value="old('email')" required autofocus placeholder="Adres email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <x-auth-session-status class="form-wrapper__info" :status="session('status')" />

    <button class="form-wrapper__submit-button">
        {{ __('Wyślij link') }}
    </button>
</form>
@endsection
