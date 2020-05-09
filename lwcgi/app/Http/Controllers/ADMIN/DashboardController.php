<?php

namespace App\Http\Controllers\ADMIN;

use App\Category;
use App\Course;
use App\Lecture;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function showAdminDashboard()
    {
        $data['lectures'] = Lecture::all();
        $data['courses'] = Course::orderBy('id','desc')->get();
        $data['categories'] = Category::all();
        $data['users'] = User::all();
        return view("admin.dashboard",$data);
    }
}
