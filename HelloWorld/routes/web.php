<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;



Route::get('/', function () {
    return view('welcome');
});
//This is the first Route
Route::get('/greet', function () {
    return 'Hello, Laravel!';
//THis is the second Route
});
Route::get('/greeting',[GreetController::class, 'greeting']);


