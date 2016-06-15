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
Route::get('/',"AdminController@login");
Route::get('admin',"AdminController@index");
Route::any('head',"AdminController@head");
Route::any('left',"AdminController@left");
Route::any('right',"AdminController@right");
Route::any('user',"AdminController@gly");

//company控制器
Route::get('list1',"CompanyController@list1");
Route::any('shenhe',"CompanyController@shenhe");
Route::any('guwen',"CompanyController@guwen");
Route::any('connoisseuradd',"CompanyController@connoisseuradd");
Route::any('banneradd',"AdController@banner");


//user控制器
Route::get('user_list',"UserController@user");
Route::any('user_jl',"UserController@jianli");

//ad控制器
Route::get('ad_list',"AdController@ad_list");
Route::any('ad_add',"AdController@ad_add");

//system控制器
Route::get('update',"SystemController@update");
Route::any('backup',"SystemController@backup");
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
