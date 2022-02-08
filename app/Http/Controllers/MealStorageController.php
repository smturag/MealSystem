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
        $mealStorage->member_id = $req->input('member_id');
        $mealStorage->date = $req->input('date');
        $mealStorage->meal = $req->input('meal');
        $mealStorage->save();
        return response()->json($mealStorage);

    }

    function findAllData(Request $req){
        $data = MealStorage::where('id',$req->id,'date',$req->date)->find();
        return response()->json($data);
    }

    }
