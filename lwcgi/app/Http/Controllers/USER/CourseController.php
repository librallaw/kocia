<?php

namespace App\Http\Controllers\USER;

use App\Course;
use App\Lecture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    //
    public function showAllUserCourses()
    {
        $data['courses'] = Course::orderBy("id","desc")->paginate(12);
        return view("user.course.all",$data);
    }

    public function showViewUserCourse($code)
    {

        $data['course'] = Course::where("course_code",$code)->first();
        return view("user.course.view",$data);
    }


    public function showCourseVideo($code)
    {

        $data['lecture'] = Lecture::where("lecture_code",$code)->first();
        return view("user.course.video",$data);
    }
}
