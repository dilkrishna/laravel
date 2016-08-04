<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\User;

class SignupController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|alpha',
            'password' => 'required',
            'email' => 'required',
        ]);

        if($validator->fails()){
            return view('actions.signup', ['errors'=>$validator->errors()]);
        }
        else {
            $user = New User;
            $user->name         =   $request->name;
            $user->email        =   $request->email;
            $user->password     =   $request->password;

            $user->save();

            return view('admin.admin', ['name' => $request['name']]);
        }
    }
    //
}
