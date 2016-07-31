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

Route::get('/', 'AdminController@index')
->name('home');


Route::post('/submit',[
        'uses' => 'AdminController@submit',
        'as'  => 'submit'
        ]);

Route::get('/{do?}',[
    'uses' => 'AdminController@getAction',
    'as'  => 'getaction'
]);

//Route::get('/cricket/{name?}', function ($name = null) {
//    return view('actions.cricket',['name' => $name]);
//})->name('cricket');
//
//Route::get('/football', function () {
//    return view('actions.football');
//})->name('football');
//
//Route::get('/vollyball', function () {
//    return view('actions.volleyball');
//})->name('volleyball');

//Route::get('/{name}', function ($name) {
//    return view('actions.hello',['name'=>$name]);
//})->name('hello');



