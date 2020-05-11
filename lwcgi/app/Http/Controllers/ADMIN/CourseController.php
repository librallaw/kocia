<?php

namespace App\Http\Controllers\ADMIN;

use App\Category;
use App\Course;
use App\Lecture;
use App\Libraries\Messenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    //

    public function showAllCourses()
    {
        $data['courses'] = Course::all();
        return view("admin.course.all",$data);
    }

    public function showCreateCourse()
    {
        $data['categories'] = Category::all();
        return view("admin.course.create",$data);
    }


    public function doCreateCourse(Request $request,Messenger $messenger)
    {
        $request -> validate([
           'title' => "required",
           'category' => "required",
           'subtitle' => "required",
           'description' => "required",
           'amount' => "required",

        ]);

        $course = new N();


        $unique_code = $messenger->randomId(4,'unique_code','courses');

        $directory = "courses";

        if($request->has('cover')){
            $name = time().".".$request->cover->getClientOriginalExtension();
            $request->cover->move("courses",$name);
            $course->cover  =$directory."/".$name;
        }


        $course->title  = $request->title;
        $course->category_id  = $request->category;
        $course->subtitle  = $request->subtitle;
        $course->description  = $request->description;
        $course->amount  = $request->amount;
        $course->course_code  = "LW-".$unique_code."-C";

        $course->save();


        return redirect()->to(route("showViewCourse",['code'=>$course->course_code]))->with("message","Course successfully created")
            ->with
        ("type","Success");

    }


    public function showViewCourse($code)
    {
        $data['lectures'] = Lecture::where("course_code",$code)->get();
        $data['categories'] = Category::all();
        $data['course'] = Course::where("course_code",$code)->first();
        return view("admin.course.viewcourse",$data);
    }


    public function doEditCourse(Request $request)
    {
        $request -> validate([
            'title' => "required",
            'category' => "required",
            'subtitle' => "required",
            'description' => "required",
            'amount' => "required",
            'course_code' => "required"

        ]);

        $course = Course::where("course_code",$request->course_code)->first();


        $directory = "courses";

        if($request->has('cover')){
            $name = time().".".$request->cover->getClientOriginalExtension();
            $request->cover->move("courses",$name);
            $course->cover  =$directory."/".$name;
        }


        $course->title  = $request->title;
        $course->category_id  = $request->category;
        $course->subtitle  = $request->subtitle;
        $course->description  = $request->description;
        $course->amount  = $request->amount;

        $course->save();


        return redirect()->back()->with("message","Course successfully Updated")->with("type","Success");

    }
}
