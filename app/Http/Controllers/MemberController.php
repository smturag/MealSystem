<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    function addData(Request $req){
        $member = new Member();
        $member->id = $req->input("id");
        $member->member_id = $req->input("member_id");
        $member->name = $req->input("name");
        $member->monthYear = $req->input("date");
        $member->save();
        return response()->json($member);

    }

    function findAllData(Request $req){
        $data = Member::where('id',$req->id,'date',$req->date)->find();
        return response()->json($data);
    }

    function findData(Request $req){
        $data = Member::where('id',$req->id,'date',$req->date)->find();
        return response()->json($data);
    }
}
