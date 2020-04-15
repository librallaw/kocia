<?php

namespace App\Http\Controllers;

use App\Attendee;
use App\Comment;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    //

    public function showWatchLive()
    {
        $data['comments'] = Comment::all();
        return view("watchlive",$data);
    }


    public function addComment(Request $request)
    {

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->date = date("D, M jS, Y");
        $comment->time = time();
        $comment->save();


        return response()->json([
            "status" => true,
            "message" => "Comment successfully posted"
        ]);
    }


    public function registerService()
    {

        return view("register");
    }


    public function doregisterService(Request $request)
    {

        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'howmanywatching' => 'required',

        ]);

        $date = date("D, M jS, Y");

        $attendee = new Attendee();
        $attendee->first_name = $request->first_name;
        $attendee->last_name = $request->last_name;
        $attendee->email = $request->email;
        $attendee->howmanywatching = $request->howmanywatching;
        $attendee->date = $date;
        $attendee->save();


        session(['attendancelock' => $date]);



        return redirect()->to("/live");

    }
}
