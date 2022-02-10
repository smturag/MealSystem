<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMealSheetController extends Controller
{
    public function add_sheet(){
        return view('layouts._addMealSheet');
    }
}
