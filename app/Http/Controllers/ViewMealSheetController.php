<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewMealSheetController extends Controller
{
    public function view_sheet(){
        return view('layouts._viewMealChart');
    }
}
