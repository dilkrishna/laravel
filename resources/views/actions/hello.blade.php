@extends('layouts.master')
   @section('content')
       <a href="{{ route('home') }}">Home</a>
      <p> I play {{ $action }} with {{ $name }}</p>
   @endsection