<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', 'UserController@login'); //login
Route::post('register', 'UserController@register'); //register

Route::group(['middleware' => ['jwt.verify']], function () {
    
    Route::get('login/check', "UserController@LoginCheck"); //cek token

    });



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
