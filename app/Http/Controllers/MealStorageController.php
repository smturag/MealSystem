<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealStorage;

class MealStorageController extends Controller
{
    function addData(Request $req){
        
        $mealStorage= new MealStorage();
        $mealStorage->id = $req->input('id');
        $mealStorage->ym_id = $req->input('ym_id');
        $mealStorage->Name = $req->input('Name');
        $mealStorage->date = $req->input('date');
        $mealStorage->meal = $req->input('meal');
        $mealStorage->save();
        return response()->json($mealStorage);

    }
}
