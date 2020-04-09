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

        // echo "sAAAAAfsd";

        $user = new user();

        $user->username = $req->username;
        $user->password = $req->password;
        $user->fullname     = $req->name;
        $user->phone     = $req->Phone;
        $user->address     = $req->Address;
        $user->type     = $req->type;
        
        $user->save();
        return view('login.index');
        
        // if($user->save()){
        //     return redirect()->route('home.list');
        // }else{
        //     return redirect()->route('home.add');
        // }
    }
}
