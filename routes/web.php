<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

Route::get('/register', [RegisterController::class,'create']);
Route::post('/register', [RegisterController::class,'store']);

Route::controller(SessionController::class)->group(function (){
  Route::get('/login','create');
  Route::post('/login','store');
  Route::post('/logout', 'destroy');
});