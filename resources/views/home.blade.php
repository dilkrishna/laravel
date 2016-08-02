@extends('layouts.master')
@section('content')
    <p xmlns="http://www.w3.org/1999/html">Welcome to laravel
        {{--<a href="{{ route('hello') }}"> RAM</a><br>--}}
        <a href="{{ route('getaction',['do'=>'volleyball'] ) }}"> Volleyball</a>
        <a href="{{ route('getaction', ['do' => 'football']) }}"> Football</a>
        <a href="{{ route('getaction', ['do' => 'cricket']) }}"> Cricket</a>

    </p>
    <div class="container">
        <div>
            @if (count($errors) > 0)
                <div >
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    {{ Form::open(array('route' => 'hello', 'method'=> 'post')) }}
        <div>
            <label>I  play </label>
           {{ Form::select('action', array('Vollyball' => 'Volleyball', 'Football' => 'Football', 'Cricket'=>'Cricket' )) }}
                  <label> with </label>
            {{ Form::text('name')}}
            <br>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

{{ form::close() }}
</div>
@endsection