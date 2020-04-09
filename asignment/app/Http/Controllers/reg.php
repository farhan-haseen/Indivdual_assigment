<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class reg extends Controller
{
    public function index(Request $req){
        return view('reg.index');
    }
    public function newAccount(Request $req){
    
        $req->validate([
            'username'=>'bail|required|min:3|unique:users',
            'password'=>'required',
            'name'=>'required',
            'Phone'=>'required',
            'Address'=>'required',
            'type'=>'required'
        ]);

        echo "sAAAAAfsd";
        
    }
}
