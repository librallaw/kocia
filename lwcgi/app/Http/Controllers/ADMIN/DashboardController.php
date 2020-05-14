<?php

namespace App\Http\Controllers\ADMIN;

use App\Category;
use App\Course;
use App\Http\Controllers\AuthController;
use App\Lecture;
use App\News;
use App\Quiz;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function showAdminDashboard()
    {

        $data['lectures'] = Lecture::all();
        $data['courses'] = Course::orderBy('id','desc')->get();
        $data['news'] = News::orderBy('id','desc')->get();
        $data['categories'] = Category::all();
        $data['users'] = User::all();
        $data['quizzes'] = Quiz::orderBy('id','desc')->get();


        return view("admin.dashboard",$data);
    }
}
