<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ env('APP_NAME') }}</title>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div id="app">
            <noscript>It may sound funny, but {{ env('APP_NAME') }} requires JavaScript to sing. Please enable it.</noscript>
        </div>

        <script>
          let Laravel = {
            'csrf_token' : '{{ csrf_token() }}'
          };
        </script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
