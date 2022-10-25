<?php

use App\Models\Cats;
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

Route::get("/", function() {
    return view("cats", [
        "cats" => Cats::all()
    ]);
});

Route::get("/cats/{id}", function($id) {
    return view("cat", [
        "cat" => Cats::find($id)
    ]);
});