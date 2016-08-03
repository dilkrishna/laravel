@extends('layouts.master')
@section('content')
    <div class="container">
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
        {{ Form::open(array('route'=> 'post.store', 'method'=> 'post', 'class'=> 'form-horizontal')) }}
        <div class="form-group">
            <label for="title" class="col-lg-2 control-label">Title</label>
            <div class="col-lg-3">
                {{ Form::text('title')}}
            </div>
        </div>
        <br>

        <div class="form-group">
            <label for="title" class="col-lg-2 control-label">body</label>
            <div class="col-lg-3">
                {{ Form::textarea('body')}}
            </div>
        </div>

        <div class="form-group">
            <label for="title" class="col-lg-2 control-label"></label>
            <div class="col-lg-3">
                {{ Form::submit('Create', array('class'=>'btn btn-primary'))}}
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection