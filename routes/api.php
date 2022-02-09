<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\YearMonthController;
use App\Http\Controllers\MealStorageController;
use App\Http\Controllers\FindUserController;
use App\Http\Controllers\AmountController;
use App\Http\Controllers\MemberController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/add_registration',[AdministrationController::class,'addData']);
Route::post('/add_ym',[YearMonthController::class,'addData']);
Route::post('/add_meal',[MealStorageController::class,'addData']);
Route::post('/add_amount',[AmountController::class,'addData']);
Route::post('/add_member',[MemberController::class,'addData']);






// //Route::get('/findAllUser',[FindUserController::class,'index']);
// Route::get('/findAllUser',[AdministrationController::class,'index']);
// //Route::get('/findUser',[AdministrationController::class,'login']);
Route::get('/login/{mail}&{password}',[AdministrationController::class,'login']);