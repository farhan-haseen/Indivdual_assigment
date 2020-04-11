<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\book;
use App\bookorder;
use App\cart;
use Illuminate\Support\Facades\DB;

class cust_home extends Controller
{
    public function index(Request $req){
        $b_list = book::all();
        return view('cust_home.index',['b_list'=>$b_list]);
    }
    public function profile(Request $req){

        $user = $req->session()->get('username');
        $list = user::where('username',$user)->get();
        return view('cust_home.profile',['userInfo'=>$list[0]]);

    }
    public function cust_profileUpdate(Request $req){

        $user = user::where('id',$req->submit)->get();
        $user = $user[0];

        $user->password = $req->password;
        $user->fullname     = $req->name;
        $user->phone     = $req->Phone;
        $user->address     = $req->Address;
        
        $user->save();
        return redirect('/cust_profile');

    }


    public function view(Request $req){

        $b_list = book::where('id',$req->viewBtn)->get();
        return view('cust_home.bookpage',['b_list'=>$b_list]);

    }
    public function addtocart(Request $req){

        $b_list = book::where('id',$req->cartBtn)->get();
        
        $cart = new cart();
        $cart->bookId = $b_list[0]->id;
        $cart->bookName = $b_list[0]->bookName;
        $cart->price = $b_list[0]->price;
        $cart->save();
        
        return redirect('/cust_home');

    }
    public function orderNow(Request $req){
        
        $req->session()->put('bookId',$req->orderBtn);
        $req->session()->put('b_name',$req->bn);
        $req->session()->put('b_price',$req->bp);
        return view('cust_home.payment');

    }
    public function payment(Request $req){
        
        $user = $req->session()->get('username');
        $b_id = $req->session()->get('bookId');
        $b_name = $req->session()->get('b_name');
        $b_price = $req->session()->get('b_price');

        $bookorder = new bookorder();
        $bookorder->username = $user;
        $bookorder->bookId = $b_id;
        $bookorder->bookName = $b_name;
        $bookorder->price = $b_price;
        $bookorder->paytype = $req->type;
        $bookorder->save();

        return redirect('/cust_home');
    }
    public function cart_payment(Request $req){
        return view('cust_home.cart_payment');
    }
    public function cart_pm_selected(Request $req){

        $req->session()->put('pmtype',$req->type);
        $c_list = cart::all();
        return view('cust_home.cartItems',['c_list'=>$c_list]);

    }
    public function cart_delete(Request $req){
        
        // echo $req->viewBtn;
        cart::destroy($req->viewBtn);
        
        $c_list = cart::all();
        return view('cust_home.cartItems',['c_list'=>$c_list]);
    }
    public function cart_order_all(Request $req){

        $user = $req->session()->get('username');
        $pmtype = $req->session()->get('pmtype');

        $cart = cart::all();
        
        foreach($cart as &$c)
        {
            $bookorder = new bookorder();
            $bookorder->username = $user;
            $bookorder->bookId = $c['bookId'];
            $bookorder->bookName = $c['bookName'];
            $bookorder->price = $c['price'];
            $bookorder->paytype = $pmtype;
            $bookorder->save();
        }

        DB::table('carts')->delete();
        return redirect('/cust_home');
    }
    public function Searchpage(Request $req){
        return view('cust_home.Searchpage');
    }
    public function Search_con(Request $req){

        $sc = $req->sc;
        $b_list = book::where('bookName', 'like', '%'.$sc.'%')->get();
        return view('cust_home.Search_con',['b_list'=>$b_list]);
    }

}
