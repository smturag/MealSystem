<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AddMemberController;
use App\Http\Controllers\AddMealSheetController;
use App\Http\Controllers\ViewMealSheetController;
use App\Http\Controllers\AuthenticationController;


Route::get('/Registration',[RegistrationController::class,'display']);
Route::get('/Login',[LoginController::class,'display']);
Route::get('/Dashboard',[MainController::class,'display']);
Route::get('/Profile',[ProfileController::class,'profile']);
Route::get('/AddMember',[AddMemberController::class,'add_member']);
Route::get('/AddSheet',[AddMealSheetController::class,'add_sheet']);
Route::get('/ViewSheet',[ViewMealSheetController::class,'view_sheet']);
Route::get('/Authentication',[AuthenticationController::class,'authentication']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
