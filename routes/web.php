<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\MealStorageController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MemberController;


Route::get('/Registration',[AuthenticationController::class,'registration']);
Route::get('/Login',[AuthenticationController::class,'login']);
Route::get('/Dashboard',[AuthenticationController::class,'master']);
Route::get('/Profile',[AdministrationController::class,'profile']);
Route::get('/AddMember',[MemberController::class,'add_member']);
Route::get('/AddSheet',[MealStorageController::class,'add_sheet']);
Route::get('/ViewSheet',[MealStorageController::class,'view_sheet']);
Route::get('/Authentication',[AuthenticationController::class,'authentication']);
