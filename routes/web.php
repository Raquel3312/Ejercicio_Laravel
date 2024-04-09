<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});

route::get('test',[HomeController::class,'index']);