<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{config('app.name','Laravel Blog')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
           @yield('content')
        </div>
    </body>
</html>
