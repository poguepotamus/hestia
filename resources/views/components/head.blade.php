<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <title>Matthew Pogue</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="http://unpkg.com/turbolinks"></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=lato">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body>
    <div {{$attributes}}>
      {{ $slot }}
    </div>
  </body>

</html>
