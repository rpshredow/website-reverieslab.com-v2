<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'reveries.lab') }}</title> -->
    <title>welcome to reveries lab</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('inc/navbar')  
        <main class="py-4">
            @include('inc/messages')
            @yield('content')
        </main>
    </div>

    <script src={{ asset('ckeditor/ckeditor.js')}}></script> 
    <script> 
        CKEDITOR.replace('article-ckeditor'); 
    </script>
</body>
</html>
