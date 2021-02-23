<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProjectController extends Controller
{
    public function all_project()
    {
    	return view('all_project');
    }

    public function add_project()
    {
    	$this->AuthCheck();
    	return view('add_project');
    }

    public function save_project(Request $request)
    {
    	$data=array();
    	
    	$data['user_id']=Session::get('user_id');
    	$data['member1_name']=$request->member1_name;
    	$data['member1_reg']=$request->member1_reg;
    	$data['member2_name']=$request->member2_name;
    	$data['member2_reg']=$request->member2_reg;
    	$data['session_id']=$request->session_id;
    	$data['course_id']=$request->course_id;
    	$data['type_id']=$request->type_id;
        $data['teacher_id']=$request->teacher_id;
        $data['project_name']=$request->project_name;
    	$data['project_description']=$request->project_description;
    	$data['Github_link']=$request->Github_link;

    	$image=$request->file('project_image');
    	if($image){
    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='image/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
    		if($success){
    			$data['project_image']=$image_url;
    			DB::table('tbl_project')->insert($data);
    			Session::put('message','Project saved succesfully');
    			return Redirect::to('/add_project');
    		}
    	}

    	$data['project_image']='';
    	DB::table('tbl_project')->insert($data);
    	Session::put('message','Project saved succesfully');
    	return Redirect::to('/');

    }

    public function AuthCheck()
    {
    	
    	$admin_id=Session::get('user_id');
    	if ($admin_id) {
    		return ;
    	}
    	else
    	{
			return Redirect::to('/user_login')->send();
    	}
    }

    public function show_project_by_course(Request $request,$course_id)
    {
        $project_by_course=DB::table('tbl_project')
                        ->join('tbl_course','tbl_project.course_id','=','tbl_course.course_id')
                        ->join('tbl_teacher','tbl_project.teacher_id','=','tbl_teacher.teacher_id')
                        ->join('tbl_session','tbl_project.session_id','=','tbl_session.session_id')
                        ->join('tbl_type','tbl_project.type_id','=','tbl_type.type_id')
                        ->select('tbl_project.*','tbl_course.course_name','tbl_teacher.teacher_name','tbl_session.session','tbl_type.type_name')
                        

                        ->where('tbl_course.course_id',$course_id)
                        
                        //->where('tbl_products.publication_status',1)
                        ->limit(18)
                        ->get();

                        $manage_project_by_course=view('project_by_course')
                        ->with('project_by_course',$project_by_course);
        //return view('layout')->with('all_published_product',$all_published_product);

        return view('layout')->with('project_by_course',$manage_project_by_course);
    }

    public function show_project_by_session(Request $request,$session_id)
    {
        $project_by_session=DB::table('tbl_project')
                        ->join('tbl_course','tbl_project.course_id','=','tbl_course.course_id')
                        ->join('tbl_teacher','tbl_project.teacher_id','=','tbl_teacher.teacher_id')
                        ->join('tbl_session','tbl_project.session_id','=','tbl_session.session_id')
                        ->join('tbl_type','tbl_project.type_id','=','tbl_type.type_id')
                        ->select('tbl_project.*','tbl_course.course_name','tbl_teacher.teacher_name','tbl_session.session','tbl_type.type_name')
                        

                        ->where('tbl_session.session_id',$session_id)
                        
                        //->where('tbl_products.publication_status',1)
                        ->limit(18)
                        ->get();

                        $manage_project_by_session=view('project_by_session')
                        ->with('project_by_session',$project_by_session);
        //return view('layout')->with('all_published_product',$all_published_product);

        return view('layout')->with('project_by_session',$manage_project_by_session);
    }

    public function show_project_by_type(Request $request,$type_id)
    {
        $project_by_type=DB::table('tbl_project')
                        ->join('tbl_course','tbl_project.course_id','=','tbl_course.course_id')
                        ->join('tbl_teacher','tbl_project.teacher_id','=','tbl_teacher.teacher_id')
                        ->join('tbl_session','tbl_project.session_id','=','tbl_session.session_id')
                        ->join('tbl_type','tbl_project.type_id','=','tbl_type.type_id')
                        ->select('tbl_project.*','tbl_course.course_name','tbl_teacher.teacher_name','tbl_session.session','tbl_type.type_name')
                        

                        ->where('tbl_type.type_id',$type_id)
                        
                        //->where('tbl_products.publication_status',1)
                        ->limit(18)
                        ->get();

                        $manage_project_by_type=view('project_by_type')
                        ->with('project_by_type',$project_by_type);
        //return view('layout')->with('all_published_product',$all_published_product);

        return view('layout')->with('project_by_type',$manage_project_by_type);
    }

    public function project_details(Request $request,$project_id)
    {
        $project_details=DB::table('tbl_project')
                        ->join('tbl_session','tbl_project.session_id','=','tbl_session.session_id')
                        ->join('tbl_type','tbl_project.type_id','=','tbl_type.type_id')
                        ->join('tbl_course','tbl_project.course_id','=','tbl_course.course_id')
                        ->join('tbl_teacher','tbl_project.teacher_id','=','tbl_teacher.teacher_id')
                        ->select('tbl_project.*','tbl_session.session','tbl_course.course_name','tbl_type.type_name','tbl_teacher.*')
                        ->where('tbl_project.project_id',$project_id)
                        //->where('tbl_products.publication_status',1)
                        ->first();

                        $manage_project_details=view('project_details')
                        ->with('project_details',$project_details);
        //return view('layout')->with('all_published_product',$all_published_product);

        return view('layout')->with('project_details',$manage_project_details);
        //return view('project_details');
    }

    public function post_comment(Request $request,$project_id)
    {
        $data=array();
        
        $data['user_id']=Session::get('user_id');
        $data['project_id']=$project_id;
        $data['comment']=$request->comment;
        DB::table('tbl_comment')->insert($data);
        
        return Redirect::back();
    }
}
