@extends('layouts.master')
@section('content')
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


        {{ Form::open(array('route'=> 'admin', 'method'=> 'post', 'class'=> 'form-horizontal')) }}
        <fieldset>
            <legend>Login</legend>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-3">
                    {{ Form::text('name')}}
                    {{--<input class="form-control" id="inputEmail" placeholder="Email" type="text" name="email" >--}}
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-3">
                    {{ Form::password('password')}}
                    {{--<input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password">--}}
                </div>
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