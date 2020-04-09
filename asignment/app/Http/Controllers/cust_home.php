<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\book;
use App\cart;

class cust_home extends Controller
{
    public function index(Request $req){
        $b_list = book::all();
        return view('cust_home.index',['b_list'=>$b_list]);
    }
    public function view(Request $req){

        $b_list = book::where('id',$req->viewBtn)->get();
        return view('cust_home.bookpage',['b_list'=>$b_list]);

    }
    public function addtocart(Request $req){

        $b_list = book::where('id',$req->cartBtn)->get();
        
        $cart = new cart();
        $cart->bookName = $b_list[0]->bookName;
        $cart->price = $b_list[0]->price;
        $cart->save();
        
        return redirect('/cust_home');

    }
    public function payment(Request $req){
        
    }
    
}
