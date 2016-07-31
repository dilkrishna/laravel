@extends('layouts.master')
@section('content')
<p>Welcome to laravel
    {{--<a href="{{ route('hello') }}"> RAM</a><br>--}}
    <a href="{{ route('volleyball') }}"> Volleyball</a>
    <a href="{{ route('football') }}"> Football</a>
    <a href="{{ route('cricket') }}"> Cricket</a></p>

<div class="container">
    {{ Form::open(array('route' => 'submit', 'method'=> 'post')) }}
        <div>
            <label>I  play </label>
           <?php echo Form::select('action', array('Vollyball' => 'Volleyball', 'Football' => 'Football', 'Cricket'=>'Cricket' )); ?>

                {{--<select  id="select-action" name="action">--}}
                    {{--<option>volleyball</option>--}}
                    {{--<option>football</option>--}}
                    {{--<option>cricket</option>--}}
                {{--</select>--}}
            <label> with </label>
                {{--<input type="text" name="name"/>--}}
            <?php echo Form::text('name');?>
            <br>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

{{ form::close() }}
</div>
@endsection