<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class cust_home extends Controller
{
    public function index(Request $req){
        return view('cust_home.index');
    }
}
