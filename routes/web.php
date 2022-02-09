<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

Route::get('/Registration',[RegistrationController::class,'display']);
Route::get('/Login',[LoginController::class,'display']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
