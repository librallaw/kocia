<?php

namespace App\Http\Controllers\ADMIN;

use App\Lecture;
use App\Libraries\Messenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LectureController extends Controller
{
    //
    public function doCreateLecture(Request $request,Messenger $messenger)
    {
        $request -> validate([
            'title' => "required",
            'facilitator' => "required",
            'url' => "required",
            'description' => "required",
            'duration' => "required",
            'course_code' => 'required'

        ]);

        $lecture = new Lecture();


        $unique_code = $messenger->randomId(4,'lecture_code','lectures');

        $lecture->title  = $request->title;
        $lecture->facilitator  = $request->facilitator;
        $lecture->description  = $request->description;
        $lecture->url  = $request->url;
        $lecture->duration  = $request->duration;
        $lecture->course_code  = $request->course_code;
        $lecture->lecture_code  = "LW-".$unique_code."-L";

        $lecture->save();

        return redirect()->back()->with("message","Lecture successfully Added")->with("type","Success");

    }
}
