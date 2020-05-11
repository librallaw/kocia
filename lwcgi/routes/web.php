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

        Route::get("/","ADMIN\CourseController@showAllCourses")->name("showAllCoursesHome");
        Route::get("all","ADMIN\CourseController@showAllCourses")->name("showAllCourses");
        Route::get("create","ADMIN\CourseController@showCreateCourse")->name("showCreateCourse");
        Route::post("create","ADMIN\CourseController@doCreateCourse")->name("doCreateCourse");
        Route::post("edit","ADMIN\CourseController@doEditCourse")->name("doEditCourse");

        Route::get("view/{code}","ADMIN\CourseController@showViewCourse")->name("showViewCourse");

    });

    Route::group(['prefix'=>'lecture'],function (){

        Route::post("create","ADMIN\LectureController@doCreateLecture")->name("doCreateLecture");


    });

    Route::group(['prefix'=>'quiz'],function (){

        Route::get("create","ADMIN\QuizController@showCreateQuiz")->name("showCreateQuiz");
        Route::post("create","ADMIN\QuizController@doCreateQuiz")->name("doCreateQuiz");


    });


    Route::group(['prefix'=>'news'],function (){

        Route::get("/","ADMIN\NewsController@showAllNews")->name("showAllNewsHome");
        Route::get("all","ADMIN\NewsController@showAllNews")->name("showAllNews");

        Route::get("create","ADMIN\NewsController@showCreateNews")->name("showCreateNews");
        Route::post("create","ADMIN\NewsController@doCreateNews")->name("doCreateNews");

        Route::post("edit","ADMIN\NewsController@doEditNews")->name("doEditNews");

        Route::get("view/{code}","ADMIN\NewsController@showViewnews")->name("showViewNews");

    });




});