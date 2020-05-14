<?php

namespace App\Http\Controllers\USER;

use App\Category;
use App\Course;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function showUserDashboard()
    {


        $data['courses'] = Course::orderBy('id','desc')->get();
        $data['courses2'] = Course::orderByRaw('RAND()')->get();
        $data['news'] = News::orderBy('id','desc')->get();
        $data['categories'] = Category::all();
        //$data['users'] = User::all();
        //$data['quizzes'] = Quiz::orderBy('id','desc')->get();


        return view("user.dashboard",$data);
    }
}
