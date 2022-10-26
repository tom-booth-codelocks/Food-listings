<?php

use App\Http\Controllers\CatsController;
//use App\Models\Cats;
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

Route::get("/", [CatsController::class, "index"]);



Route::get("/cats/create", [CatsController::class, "create"]);


Route::post("/cats", [CatsController::class, "store"]);




// Make sure wild car routes are below ones like above
Route::get("/cats/{cat}", [CatsController::class, "show"]);

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - Update listing
// destroy - Delete listing