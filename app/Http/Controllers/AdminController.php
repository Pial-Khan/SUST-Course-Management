<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function add_course()
    {
    	return view('admin.add_course');
    }

    public function save_course(Request $request)
    {
    	$data=array();
    	$data['course_name']=$request->course_name;
    	$data['course_description']=$request->course_description;
    	$data['publication_status']=$request->publication_status;
    	$course_id=DB::table('tbl_course')->insertGetId($data);
    	Session::put('message','Course added Successfully');
    	return Redirect::to('/add_course');
    }

    public function all_course()
    {
    	return view('admin.all_course');
    }

    public function unactive_course($course_id)
    {
    	DB::table('tbl_course')
    			->where('course_id',$course_id)
    			->update(['publication_status' => 0]);
    			Session::put('message','Course unactive successfully  !!!');
    			return Redirect::to('/all_course');
    }

    public function active_course($course_id)
    {
    	DB::table('tbl_course')
    			->where('course_id',$course_id)
    			->update(['publication_status' => 1]);
    			Session::put('message','Course active successfully  !!!');
    			return Redirect::to('/all_course');
    }

    public function delete_course($course_id)
    {
    	DB::table('tbl_course')
    		->where('course_id',$course_id)
    		->delete();
  	    	Session::put('message','Course deleted successfully  !!!');
  	    	return Redirect::to('/all_course');

    }

    public function add_language()
    {
    	return view('admin.add_language');
    }

    public function save_language(Request $request)
    {
    	$data=array();
    	$data['language_name']=$request->language;
    	$data['language_description']=$request->language_description;
    	$data['publication_status']=$request->publication_status;
    	$language_id=DB::table('tbl_language')->insertGetId($data);
    	Session::put('message','Course added Successfully');
    	return Redirect::to('/add_language');

    }

    public function add_session()
    {
        return view('admin.add_session');
    }

    public function save_session(Request $request)
    {
        $data=array();
        $data['session']=$request->session_name;
        $data['publication_status']=$request->publication_status;
        $session_id=DB::table('tbl_session')->insertGetId($data);
        Session::put('message','session added successfully');
        return Redirect::to('/add_session');
    }

    public function all_session()
    {
    	return view('admin.all_session');
    }

    public function unactive_session($session_id)
    {
    	DB::table('tbl_session')
    			->where('session_id',$session_id)
    			->update(['publication_status' => 0]);
    			Session::put('message','Session unactive successfully  !!!');
    			return Redirect::to('/all_session');
    }

    public function active_session($session_id)
    {
    	DB::table('tbl_session')
    			->where('session_id',$session_id)
    			->update(['publication_status' => 1]);
    			Session::put('message','Session active successfully  !!!');
    			return Redirect::to('/all_session');
    }

    public function delete_session($session_id)
    {
    	DB::table('tbl_session')
    		->where('session_id',$session_id)
    		->delete();
  	    	Session::put('message','Session deleted successfully  !!!');
  	    	return Redirect::to('/all_session');

    }

    public function admin_layout()
    {
    	return view('admin.admin_layout');
    }

    public function add_teacher()
    {
        return view('admin.add_teacher');
    }

    public function save_teacher(Request $request)
    {
        $data=array();
        $data['teacher_name']=$request->teacher_name;
        $data['designation']=$request->designation;
        $data['phone_number']=$request->phone_number;
        $data['email']=$request->email;
        $data['publication_status']=$request->publication_status;

        $image=$request->file('image');
        if($image){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success){
                $data['image']=$image_url;
                DB::table('tbl_teacher')->insert($data);
                Session::put('message','Teacher details saved succesfully');
                return Redirect::to('/add_teacher');
            }
        }

         $data['image']='';
                 DB::table('tbl_teacher')->insert($data);
                 Session::put('message','Teacher details saved succesfully');
                 return Redirect::to('/add_teacher');
    }

    public function add_type()
    {
        return view('admin.add_type');
    }

    public function save_type(Request $request)
    {
        $data=array();
        $data['type_name']=$request->type_name;
        $data['publication_status']=$request->publication_status;
        $type_id=DB::table('tbl_type')->insertGetId($data);
        Session::put('type_id',$type_id);
        Session::put('message','Course type added successfully');
        return Redirect::to('/add_type');
    }

    public function all_type()
    {
        return view('admin.all_type');
    }

    public function unactive_type($type_id)
    {
        DB::table('tbl_type')
                ->where('type_id',$type_id)
                ->update(['publication_status' => 0]);
                Session::put('message','type unactive successfully  !!!');
                return Redirect::to('/all_type');
    }

    public function active_type($type_id)
    {
        DB::table('tbl_type')
                ->where('type_id',$type_id)
                ->update(['publication_status' => 1]);
                Session::put('message','type active successfully  !!!');
                return Redirect::to('/all_type');
    }

    public function delete_type($type_id)
    {
        DB::table('tbl_type')
            ->where('type_id',$type_id)
            ->delete();
            Session::put('message','type deleted successfully  !!!');
            return Redirect::to('/all_type');

    }
}
