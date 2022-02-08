<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/Registration',[RegistrationController::class,'display']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
