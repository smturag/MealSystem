<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YearMonth;

class YearMonthController extends Controller
{
    function addData(Request $req){
        $ym= new YearMonth();
        $ym->id = $req->input('id');
        $ym->ym_id = $req->input('ym_id');
        $ym->save();
        return response()->json($ym);

    }
}
