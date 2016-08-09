<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <head>
        <title>Blog</title>
        {{--{!! Html::style('public/css/bootstrap.min.js') !!}--}}
        {{--{!! Html::style('public/css/document.js') !!}--}}


        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/document.css ')}}">
    </head>
    <body>
        @include('includes.header')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
