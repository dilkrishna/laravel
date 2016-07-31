<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubmitController extends Controller
{
    public function index(Request $request)
    {

        if((isset($request['action'])) && ($request['name'])){
            if(strlen($request['name'])> 0 ) {
                return view('actions.hello', ['action' => $request['action'], 'name' => $request['name']]);
            }
            else{
                return redirect()->back();
            }
        }
        else
        return redirect()->back();
    }
}
