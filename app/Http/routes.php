<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware'=>'web'], function(){
    Route::get('/', 'AdminController@index')
    ->name('home');

    Route::post('/hello',[
            'uses' => 'AdminController@submit',
            'as'  => 'hello'
            ]);

    Route::get('/name/{do?}',[
        'uses' => 'AdminController@getAction',
        'as'  => 'getaction'
    ]);

    Route::get('/login',function(){
      return view('actions.login');
    })->name('login');

    Route::post('/admin',[
       'uses' => 'AdminController@login',
        'as'  => 'admin'
    ]);

    Route::post('/admin1',[
        'uses' => 'SignupController@index',
        'as'  => 'sign'
    ]);


    Route::get('/signup',function(){
        return view('actions.signup');
    })->name('signup');

    Route::resource('post', 'PostController');
});




