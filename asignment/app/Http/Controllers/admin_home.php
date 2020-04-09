<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class admin_home extends Controller
{
    public function index(Request $req){
        return view('admin_home.index');
    }
    public function profile(Request $req){

        $user = $req->session()->get('username');
        
    }
    public function custlist(Request $req){

    }
    public function userlist(Request $req){

    }
    public function newbook(Request $req){

    }
}
