@extends('layouts.maste<r')
@section('content')
    <div class="container">
        {{ Form::open(array('route'=> 'sign', 'method'=> 'post', 'class'=> 'form-horizontal')) }}
        <fieldset>
            <legend>Create Your Profile</legend>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="username" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-3">
                    <input class="form-control" placeholder="Enter User Name" type="text" name="name" value="{{ Input::get('name') }}" >
                    {{--{{ Form::text('name')}}--}}
                </div>
                @if ($errors->has('name'))
                    <strong>{{ $errors->first('name') }}</strong>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-3">
                    {{--{{ Form::email('email')}}--}}
                    <input class="form-control" placeholder="Email" type="text" name="email" value="{{ Input::get('email') }}" >
            </div>
                    @if ($errors->has('email'))
                       <strong>{{ $errors->first('email') }}</strong>
                    @endif
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' :'' }}">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-3">
                    <input class="form-control" placeholder="Password" type="password" name="password"  >
                    {{--{{ Form::password('password')}}--}}
                </div>
                    @if ($errors->has('password'))
                        <strong>{{ $errors->first('password') }}</strong>
                    @endif
                    {{--<input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password">--}}
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