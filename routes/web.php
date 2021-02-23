<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','HomeController@index');
Route::get('/sign_up','SignUpController@signup');

Route::post('/signup_post','SignUpController@signup_post');
Route::get('/logout','HomeController@logout');
Route::get('/user_login','LoginController@login');
Route::post('/login_post','LoginController@login_post');

Route::get('/all_project','ProjectController@all_project');
Route::get('/courses','HomeController@courses');

Route::get('/teacher/{teacher_id}','HomeController@Teacher');

Route::get('/add_project','ProjectController@add_project');
Route::post('/save-project','ProjectController@save_project');

Route::get('/project_by_course/{course_id}','ProjectController@show_project_by_course');

Route::get('/project_by_session/{session_id}','ProjectController@show_project_by_session');

Route::get('/project_by_type/{type_id}','ProjectController@show_project_by_type');
Route::get('/project_details/{project_id}','ProjectController@project_details');
Route::post('/post_comment/{project_id}','ProjectController@post_comment');



//admin panel.......
Route::get('/add_course','AdminController@add_course');
Route::post('/save-course','AdminController@save_course');
Route::get('/add_language','AdminController@add_language');
Route::post('/save-language','AdminController@save_language');
Route::get('/all_course','AdminController@all_course');
Route::get('/admin_layout','AdminController@admin_layout');
Route::get('/add_session','AdminController@add_session');
Route::post('/save-session','AdminController@save_session');
Route::get('/unactive-course/{course_id}','AdminController@unactive_course');
Route::get('/active-course/{course_id}','AdminController@active_course');
Route::get('/delete-course/{course_id}','AdminController@delete_course');

Route::get('/all_session','AdminController@all_session');
Route::get('/unactive-session/{session_id}','AdminController@unactive_session');
Route::get('/active-session/{session_id}','AdminController@active_session');
Route::get('/delete-session/{session_id}','AdminController@delete_session');

Route::get('/add_teacher','AdminController@add_teacher');
Route::post('/save-teacher','AdminController@save_teacher');

Route::get('/add_type','AdminController@add_type');
Route::get('/all_type','AdminController@all_type');
Route::post('/save-type','AdminController@save_type');
Route::get('/unactive-type/{type_id}','AdminController@unactive_type');
Route::get('/active-type/{type_id}','AdminController@active_type');
Route::get('/delete-type/{type_id}','AdminController@delete_type');
