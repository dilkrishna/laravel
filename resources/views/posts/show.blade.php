@extends('layouts.master')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            <strong> Success:</strong> {!! Session::get('success') !!}
        </div>
        {{--{{ Session::remove('success') }}--}}
    @endif
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
@endsection