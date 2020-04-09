<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class admin_home extends Controller
{
    public function index(Request $req){
        return view('admin_home.index');
    }
}
