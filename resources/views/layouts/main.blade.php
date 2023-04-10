<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password App - @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tiny.cloud/1/njhu24zco629p7gplac3lpdoq5apb2lxig08zf3acrvbwtqj/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#default-editor',
            language: 'pl',
        });

    </script>
</head>

<body>
    <div class="dashboard-wrapper">
        @include('elements.sidebar')
        <div class="main">
            @include('elements.nav')
            @yield('content')
        </div>
    </div>
</body>


<script src="{{asset('js/app.js')}}"></script>

</html>
