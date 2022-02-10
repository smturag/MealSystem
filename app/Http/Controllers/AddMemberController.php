<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMemberController extends Controller
{
    public function add_member(){
        return view('layouts._addMember');
    }
}
