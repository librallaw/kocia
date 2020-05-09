<?php

namespace App\Http\Controllers\ADMIN;

use App\Category;
use App\Course;
use App\Libraries\Messenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    //

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

        $course = new Course();


        $unique_code = $messenger->randomId(4,'unique_code','courses');

        $directory = "courses";

        if($request->has('cover')){
            $name = time().".".$request->cover->getClientOriginalExtension();
            $request->cover->move("courses",$name);
            $course->cover  =$directory."/".$name;
        }


        $course->title  = $request->title;
        $course->category  = $request->category;
        $course->subtitle  = $request->subtitle;
        $course->description  = $request->description;
        $course->amount  = $request->amount;
        $course->unique_code  = "LW-".$unique_code;

        $course->save();


        return redirect()->back()->with("message","Course successfully created")->with("type","Success");

    }
}
