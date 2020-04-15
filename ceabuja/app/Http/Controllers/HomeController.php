<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Prayerrequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function submitContact(Request $request)
    {
        $request->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'message' => 'required',

        ]);

        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email =  $request->email;
        $contact->message = $request->message;
        $contact->save();



        return redirect()->to("/contact")->with("message","Your message has been received, we will get back to you ASAP!")->with("type","success");
    }


    public function addPrayerRequest(Request $request)
    {

        $comment = new Prayerrequest();
        $comment->name = $request->name;
        $comment->message = $request->comment;
        $comment->date = date("D, M jS, Y");
        $comment->time = time();
        $comment->save();


        return response()->json([
            "status" => true,
            "message" => "Your Prayer Request was received successfully"
        ]);
    }




}
