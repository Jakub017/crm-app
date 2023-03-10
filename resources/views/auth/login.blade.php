@extends('auth.layouts.main')
@section('title', 'Logowanie')
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />


@section('content')
<h2 class="form-wrapper__title">Zaloguj się!</h2>
<h5 class="form-wrapper__description">Lorem Ipsum is simply dummy text of the printing and typesetting
    industry.</h5>
<form method="POST" class="form-wrapper__form" action="{{ route('login') }}">
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
        <input class="form-wrapper__input" id="email" type="email" name="email" :value="old('email')" required autofocus
            autocomplete="email" placeholder="Adres email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="form-wrapper__input-group">
        <div class="form-wrapper__input-icon">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.5949 15.0192C19.5949 16.1871 19.5949 17.3192 19.9633 18.3793C16.091 22.9254 5.8668 34.9375 4.91445 35.8539C4.72518 36.0238 4.57376 36.2315 4.47005 36.4637C4.36634 36.6959 4.31266 36.9473 4.3125 37.2016C4.3125 37.9653 4.77969 38.702 5.175 39.1153C5.76797 39.7352 8.30156 42.0801 8.76875 41.6309C10.1523 40.2832 10.4309 39.9239 10.9969 39.3668C11.8504 38.5313 10.907 36.8243 11.2035 36.1325C11.5 35.4407 11.8145 35.3059 12.3266 35.1981C12.8387 35.0903 13.7461 35.4586 14.4559 35.4676C15.2016 35.4766 15.6059 35.1621 16.1629 34.6411C16.6121 34.2278 16.9355 33.8414 16.9445 33.2395C16.9625 32.4309 15.7945 31.3618 16.666 30.5082C17.5375 29.6547 18.7953 31.0653 19.7207 30.9575C20.6461 30.8496 21.7691 29.5649 21.8859 29.0168C22.0027 28.4688 20.8348 27.0582 21.0145 26.2586C21.0773 25.9891 21.6254 25.3602 22.0387 25.2704C22.452 25.1805 24.2848 25.8903 24.698 25.8004C25.2012 25.6926 25.7852 25.1625 26.2613 24.8661C27.6539 25.468 28.9207 25.7106 30.5469 25.7106C36.7012 25.7106 41.6875 20.9129 41.6875 15.0012C41.6875 9.08949 36.7012 4.3125 30.5469 4.3125C24.3926 4.3125 19.5949 9.10746 19.5949 15.0192ZM35.9375 12.9375C35.9375 13.5061 35.7689 14.062 35.453 14.5348C35.1371 15.0076 34.6881 15.3761 34.1627 15.5937C33.6374 15.8113 33.0593 15.8682 32.5016 15.7573C31.9439 15.6463 31.4316 15.3725 31.0296 14.9704C30.6275 14.5684 30.3537 14.0561 30.2427 13.4984C30.1318 12.9407 30.1887 12.3626 30.4063 11.8373C30.6239 11.3119 30.9924 10.8629 31.4652 10.547C31.938 10.2311 32.4939 10.0625 33.0625 10.0625C33.825 10.0625 34.5563 10.3654 35.0954 10.9046C35.6346 11.4437 35.9375 12.175 35.9375 12.9375Z"
                    fill="#848484" fill-opacity="0.7" />
            </svg>
        </div>
        <input class="form-wrapper__input" id="password" type="password" name="password" required
            autocomplete="current-password" placeholder="Hasło" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <a class="form-wrapper__forgot-password" href="{{route('password.request')}}">Nie pamiętasz hasła?</a>

    <div class="form-wrapper__two-inputs">
        <label class="form-wrapper__remember-me" for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" name="remember">
            <span>{{ __('Zapamiętaj mnie') }}</span>
        </label>
        <button class="form-wrapper__submit-button">
            {{ __('Zaloguj') }}
        </button>
    </div>

    <div class="form-wrapper__spacer"></div>
    <button class="form-wrapper__google-login">
        <div class="form-wrapper__google-icon">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_11_8)">
                    <path
                        d="M34.9762 14.7556C35.1861 15.9638 35.2908 17.1878 35.289 18.4141C35.289 23.8906 33.3315 28.5211 29.925 31.6553H29.9295C26.9505 34.4071 22.8555 36.0001 18 36.0001C13.2261 36.0001 8.64773 34.1037 5.27208 30.728C1.89642 27.3524 0 22.774 0 18.0001C0 13.2262 1.89642 8.64783 5.27208 5.27217C8.64773 1.89652 13.2261 9.67415e-05 18 9.67415e-05C22.4684 -0.0522345 26.7836 1.62647 30.042 4.6846L24.903 9.8236C23.0454 8.05279 20.5661 7.08308 18 7.1236C13.3043 7.1236 9.315 10.2916 7.893 14.5576C7.13904 16.793 7.13904 19.214 7.893 21.4493H7.89975C9.3285 25.7086 13.311 28.8766 18.0068 28.8766C20.4323 28.8766 22.5158 28.2556 24.1313 27.1576H24.1245C25.0625 26.5362 25.865 25.7311 26.4833 24.791C27.1016 23.8509 27.5231 22.7953 27.7222 21.6878H18V14.7578L34.9762 14.7556Z"
                        fill="white" />
                </g>
                <defs>
                    <clipPath id="clip0_11_8">
                        <rect width="36" height="36" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        Kontynuuj przez Google
    </button>
    <p class="form-wrapper__login-link">Nie masz jeszcze konta? <a href="{{route('register')}}">Załóż już teraz!</a></p>
</form>
@endsection
