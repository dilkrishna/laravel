<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function submit(Request $request)
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

    public function getAction($do = null)
    {
        return view('actions.'.$do,['do' => $do]);
    }
}
