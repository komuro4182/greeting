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

Route::get("/comments/random", [App\Http\Controllers\GreetController::class, 'random']);

Route::get("/comments/{time}", [App\Http\Controllers\GreetController::class, 'greeting']);

Route::get("/comments/freeword/{word}", [App\Http\Controllers\GreetController::class, 'freewords']);

