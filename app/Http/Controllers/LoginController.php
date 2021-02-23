<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_post(Request $request){
    	$user_email=$request->user_email;
        $password=$request->pass;

        $result1=DB::table('tbl_user')
                ->where('email',$user_email)
                ->where('password',$password)
                ->first();

        if($result1){

                Session::put('name',$result1->name);
                Session::put('user_id',$result1->user_id);
                return Redirect::to('/');
                 
            }else{

                Session::put('message','Email or password invalid');
                return Redirect::to('/user_login');

            }
    }
}
