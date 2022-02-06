<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\YearMonthController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\MealStorageController;
use App\Http\Controllers\FindUserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/registration',[AdministrationController::class,'addData']);
Route::post('/ym',[YearMonthController::class,'addData']);
Route::post('/balance',[BalanceController::class,'addData']);
Route::post('/meal',[MealStorageController::class,'addData']);


//Route::get('/findAllUser',[FindUserController::class,'index']);
Route::get('/findAllUser',[AdministrationController::class,'index']);
//Route::get('/findUser',[AdministrationController::class,'login']);
Route::get('/login',[AdministrationController::class,'login']);