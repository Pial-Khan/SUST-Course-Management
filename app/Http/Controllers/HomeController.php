<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index()
    {
    	return view('Home');
    }

    public function logout()
    {
    	Session::flush();
    	return Redirect::to('/');
    }

    public function courses()
    {
    	return view('courses');
    }

    public function teacher($teacher_id)
    {

    	$all_teacher_info=DB::table('tbl_teacher')
    					->where('teacher_id',$teacher_id)
    					->get();

    	$all_teachers=view('teacher_profile')
                        ->with('all_teacher_info',$all_teacher_info);
    	return view('layout')->with('teacher_profile',$all_teachers);
    }
}
