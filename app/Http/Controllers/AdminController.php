<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function submit(Request $request)
    {
        $validator =Validator::make($request->all(),[
        'action' => 'required',
        'name' => 'required|alpha',
        ]);

        if($validator->fails()){
            return view('home', ['errors'=>$validator->errors()])
                ->withErrors($validator)
                ->withInput(Input::except('password', 'password'));
            }
        else{
            return view('actions.hello', ['action' => $request['action'], 'name' => $request['name']]);
        }

    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|alpha',
            'password' => 'required',
        ]);

        if($validator->fails()){
            
            return view('actions.login', ['errors'=>$validator->errors()])
                ->withErrors($validator)
                ->withInput(Input::except('password', 'password'));
        }
        else {
            return view('admin.admin', ['name' => $request['name']]);
        }
    }


    public function getAction($name, $do = null)
    {
        return view('actions.'.$name.$do,['do' => $do]);
    }
}
