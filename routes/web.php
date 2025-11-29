<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::prefix('jobs')->as('jobs.')->controller(JobController::class)->group(function() {
  Route::get('/', 'index')->name('index')->middleware('auth');
  
  Route::get('/create', 'create')->name('create');
  
  Route::post('/', 'store')->name('store')->middleware('auth');
  
  Route::get('/{job}', 'show')->name('show');
  
  Route::get('/{job}/edit', 'edit')->name('edit')->middleware('auth')->can('edit', 'job');
  
  Route::put('/{job}', 'update')->name('update');
  Route::patch('/{job}', 'update')->name('update');
  
  Route::delete('/{job}', 'destroy')->name('destroy');
});



Route::get('/register', [RegisterController::class,'create']);
Route::post('/register', [RegisterController::class,'store']);

Route::controller(SessionController::class)->group(function (){
  Route::get('/login','create')->name('login');
  Route::post('/login','store');
  Route::post('/logout', 'destroy');
});