<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Post;
use Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index',['posts'=>$posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // validation
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'body' => 'required',
        ]);

        if($validator->fails()){
//            return redirect()->route('post.create',['errors'=>$validator->errors()]);
            return view('posts.create', ['errors'=>$validator->errors()]);
        }
        else {
            // insert into database
            $post = new Post;
            $post->title  =  $request->title;
            $post->body   =  $request->body;

            $post->save();

            Session::flash('success', 'The blog is successfully save !');

            return redirect()->route('post.show',[$post->id]);
        }


    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',['post'=>$post]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit',['post'=>$post]);
    }

    public function update(Request $request, $id)
    {
       die(test);
       // validation
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'body' => 'required',
        ]);

        $data = [$id,$validator];

        if($validator->fails()){
//            return redirect()->route('post.create',['errors'=>$validator->errors()]);
            return view('posts.edit', compact('data'));
        }
        else {
            // insert into database
            $post = Post::find($id);
            $post->title  =  $request->input('title');
            $post->body   =  $request->input('body');

            $post->save();
            // flash data save

            Session::flash('success', 'The blog is successfully save !');
//redirect
            return redirect()->route('post.show',[$post->id]);
        }
    }


    public function destroy($id)
    {
        return 'destroy';
    }
}
