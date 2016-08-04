<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <head>
        <title>pila</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/document.css') }}">
    </head>
    <body>
        @include('includes.header')
        <div class="container">
            @yield('content')
        </div>
    </body>
     
</html>
