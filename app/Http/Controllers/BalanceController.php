<?php

namespace App\Http\Controllers;
use App\Models\Balance;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    function addData(Request $req){
        $balance= new Balance();
        $balance->Name = $req->input('name');
        $balance->amount = $req->input('amount');
        $balance->date = $req->input('date');
        $balance->save();
        return response()->json($balance);

    }
}
