@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-10">
            <h1> All the posts</h1>
        </div>
        <div class="col-lg-2">
            <a href="{{ route('post.create') }}" class="btn btn-primary btn-h1-margin"> Create Post</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-hover hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr class="trhover" onclick="location.href='{{ route('post.show',[$post->id]) }}'">
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ substr($post->body, 0, 50)}}{{ strlen($post->body)>50 ? "............" :"" }}</td>
                        <td>{{ date( 'M j Y, a:h',strtotime($post->created_at)) }}</td>
                        <td>
                            <a href="{{ route('post.show',[$post->id]) }}" class="btn btn-inverse">View</a>
                            <a href="{{ route('post.edit',[$post->id]) }}" class="btn btn-inverse">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
              {{ $posts->links()}}
            </div>
        </div>
    </div>
@endsection
