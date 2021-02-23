<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SignUpController extends Controller
{
    public function Signup()
    {
    	return view('sign_up');
    }

    public function signup_post(Request $request)
    {
    	$data=array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['reg_num']=$request->reg_num;
    	$data['department']=$request->department;
    	$data['user_type']=$request->user_type;
    	$data['password']=$request->password;

    	$user_id=DB::table('tbl_user')->insertGetId($data);

    	Session::put('user_id',$user_id);
    	Session::put('name',$request->name);
    	return Redirect::to('/');

    }
}
