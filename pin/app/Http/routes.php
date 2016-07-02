<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//admin控制器 
Route::get('/',"LoginController@login");
Route::any('admin',"AdminController@index");
Route::any('head',"AdminController@head");
Route::any('left',"AdminController@left");
Route::any('right',"AdminController@right");
Route::any('user',"AdminController@gly");
Route::any('main',"AdminController@main");

//company控制器
Route::get('list1',"CompanyController@list1");
/*Route::any('shenhe',"CompanyController@shenhe");
Route::any('guwen',"CompanyController@guwen");*/
Route::any('connoisseuradd',"CompanyController@connoisseuradd");
//Route::any('banneradd',"AdController@banner");


//user控制器
Route::get('user_list',"UserController@user_list");


//ad控制器
Route::get('ad_list',"AdController@ad_list");
Route::any('ad_add',"AdController@ad_add");

//system控制器
Route::get('update',"SystemController@update");
Route::get('logout',"LoginController@login");
Route::any('backup',"SystemController@backup");

//resume控制器
Route::get('resume_list',"ResumeController@resume_list");
Route::get('resume_statu',"ResumeController@resume_statu");
Route::any('resume_search',"ResumeController@resume_ss");
//Route::any('backup',"SystemController@backup");
//job控制器
Route::get('job_list',"JobController@job_list");
//Route::any('backup',"SystemController@backup");
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
});
