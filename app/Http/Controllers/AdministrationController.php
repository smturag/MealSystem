<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminstration;
use Illuminate\Support\Facades\Hash;

class AdministrationController extends Controller
{
    function addData(Request $req){
        $adminstration= new Adminstration();
        $adminstration->id = $req->input('id');
        $adminstration->userName = $req->input('userName');
        $adminstration->password = Hash::make($req->input('password'));
        $adminstration->rePassword = Hash::make($req->input('rePassword'));
        $adminstration->mail = $req->input('mail');
        if(Hash::make($req->input('password'))!= Hash::make($req->input('rePassword'))){
            return "password error";
        }else{
            $adminstration->save();
            return response()->json($adminstration);
        }
        

    }
    public function index(){
        $data = Adminstration::all();
        return response()->json($data);
    }

    public function login(Request $req){
        $data = Adminstration::where ('userName',$req->userName,)->first();
        if(!$data || !Hash::check($req->password, $data->password_get_info)){
            return "password error";
        }else{
            return response()->json($data);
        }
        return response()->json($data);
    }
}
