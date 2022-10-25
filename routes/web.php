<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/hello", function(){
    return response("<h1> hello there </h1>");
});

Route::get("/test", function() {
    return view("test", [
        "data" =>   [
            [
                "first_Var" => "hello there",
                "second_var" => "test"
            ], 
            [
                "first_Var" => "hello there",
                "second_var" => "test2"
            ]
        ]
    ]);
});