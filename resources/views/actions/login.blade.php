@extends('layouts.master')
@section('content')
    <div class="container">
        {{ Form::open(array('route'=> 'admin', 'method'=> 'post', 'class'=> 'form-horizontal')) }}
        <fieldset>
            <legend>Login</legend>
            <div class="form-group {{ $errors->has('name') }} }}">
                <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-3">
                    {{ Form::text('name')}}
                    {{--<input class="form-control" id="inputEmail" placeholder="Email" type="text" name="email" >--}}
                </div>
                @if($errors->has('name'))
                <strong> {{ $errors->first('name') }}</strong>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password') }}">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-3">
                    {{ Form::password('password')}}
                    {{--<input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password">--}}
                </div>
                @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
        {{ form::close() }}
    </div>
@endsection