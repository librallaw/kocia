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

Route::get('/', function () {
    return view('home');
});


Route::group(['prefix'=>'admin'],function (){

    Route::get("dashboard","ADMIN\DashboardController@showAdminDashboard")->name("showAdminDashboard");
    Route::get("/","ADMIN\DashboardController@showAdminDashboard");

    Route::group(['prefix'=>'course'],function (){

        Route::get("create","ADMIN\CourseController@showCreateCourse")->name("showCreateCourse");
        Route::post("create","ADMIN\CourseController@doCreateCourse")->name("doCreateCourse");

    });

});