<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\book;

class admin_home extends Controller
{
    public function index(Request $req){
        return view('admin_home.index');
    }
    public function profile(Request $req){

        $user = $req->session()->get('username');
        $list = user::where('username',$user)->get();
        // echo $list[0];
        return view('admin_home.profile',['userInfo'=>$list[0]]);

    }
    public function admin_profileUpdate(Request $req){

        $user = user::where('id',$req->submit)->get();
        $user = $user[0];

        $user->password = $req->password;
        $user->fullname     = $req->name;
        $user->phone     = $req->Phone;
        $user->address     = $req->Address;
        
        $user->save();
        return redirect('/admin_profile');

    }
    public function custlist(Request $req){

        $list = user::where('type','customer')->get();

        return view('admin_home.custlist',['u_list'=>$list]);
    }
    public function admin_cl_delete($id,Request $req){

        user::destroy($id);
        return redirect('/admin_cl');

        
    }

    public function userlist(Request $req){

        $list = user::all();
        
        return view('admin_home.alluserlist',['u_list'=>$list]);
    }
    public function newbook(Request $req){

        return view('admin_home.newbook');
    }
    public function newbook_2(Request $req){

        $book = new book();

        $book->bookName         = $req->Bookname;
        $book->price            = $req->Price;
        $book->category         = $req->Category;
        $book->authorName       = $req->Authorname;
        $book->authorInfo       = $req->Authorinfo;
        
        $book->save();

        return view('admin_home.index');
    }
}
