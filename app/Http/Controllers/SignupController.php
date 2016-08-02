<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

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
            return view('admin.admin', ['name' => $request['name']]);
        }
    }
    //
}
