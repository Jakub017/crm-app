<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password App - @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="form-wrapper">
        <div class="form-wrapper__half">
            <img class="form-wrapper__image" src="{{ asset('img/main.jpg') }}" alt="">
        </div>
        <div class="form-wrapper__half">
            @yield('content')
            @include('auth.elements.footer')
        </div>
    </div>
</body>
<script src="{{asset('js/image-name.js')}}"></script>

</html>
