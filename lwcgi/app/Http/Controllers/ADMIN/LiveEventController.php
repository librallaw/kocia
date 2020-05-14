<?php

namespace App\Http\Controllers\ADMIN;

use App\Libraries\Messenger;
use App\Live_event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class LiveEventController extends Controller
{
    //
    public function showAllEvent()
    {
        $data['events'] = Live_event::orderBy("id","desc")->paginate(10);
        return view("admin.event.all",$data);
    }

    public function showViewEvent($code)
    {
        $data['event'] = Live_event::where("event_code",$code)->first();
        return view("admin.event.view",$data);
    }

    public function showCreateEvent()
    {
        return view("admin.event.create");
    }

    public function doCreateEvent(Request $request,Messenger $messenger)
    {

        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'start_time'  => 'required',
            'link'        => 'required',

        ]);

        if ($validator->fails()) {

            return response()->json([
                'status'  => false,
                'message' => 'Sorry All fields are required',
                'errors'  => $validator->errors()->all() ,
            ]);

        }



        $event_code = "LW-".$messenger->randomId('4','event_code','live_events')."-EV" ;
        $directory = "events";

        $event = new Live_event();

        if($request->has('cover')){
            $name = time().".".$request->cover->getClientOriginalExtension();
            $request->cover->move("courses",$name);
            $event->cover  =$directory."/".$name;
        }

        $event -> title       = $request -> title;
        $event -> link       = $request -> link;
        $event -> start_time  = strtotime($request -> start_time);
        $event -> event_code  = $event_code;
        $event -> save();


        return redirect()->back()->with("message","Event successfully created")->with("type","success");
    }

    public function doEditEvent(Request $request)
    {
        $request -> validate([

            'title'         => "required",
            'start_time'    => "required",
            'event_code'    => "required",
            'status'        => "required",
            'live'          => "required",

        ]);

        $event = Live_event::where("event_code",$request->event_code) -> first();

        $directory = "events";

        if($request->has('cover')){
            $name = time().".".$request->cover->getClientOriginalExtension();
            $request->cover->move("courses",$name);
            $event->cover  =$directory."/".$name;
        }

        $event -> title       = $request -> title;
        $event -> start_time  = $request -> start_time;
        $event -> link  = $request -> link;
        $event -> status      = $request -> status;
        $event -> live        = $request -> live;

        $event->save();

        return redirect()->back()->with("message","Event successfully Updated")->with("type","success");

    }

    
    
}
