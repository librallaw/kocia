<?php

namespace App\Http\Controllers\ADMIN;

use App\Libraries\Messenger;
use App\News;
use App\News_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //

    public function showAllNews()
    {
        $data['news'] = News::all();
        return view("admin.news.all",$data);
    }

    public function showCreateNews()
    {
        $data['categories'] = News_category::all();
        return view("admin.news.create",$data);
    }


    public function doCreateNews(Request $request,Messenger $messenger)
    {
        $request -> validate([
            'title' => "required",
            'category' => "required",
            'news_content' => "required",

        ]);

        $news = new News();

        $unique_code = $messenger->randomId(4,'unique_code','courses');

        $directory = "news";

        if($request->has('cover')){
            $name = time().".".$request->cover->getClientOriginalExtension();
            $request->cover->move("news",$name);
            $news->cover  =$directory."/".$name;
        }

        $news->title  = $request->title;
        $news->category_id  = $request->category;
        $news->content  = $request->news_content;
        $news->news_code  = "LW-".$unique_code."-NS";

        $news->save();


        return redirect()->back()->with("message","News successfully created")->with("type","Success");

    }


    public function showViewNews($code)
    {
        $data['categories'] = News_category::all();
        $data['news'] = News::where("news_code",$code)->first();
        return view("admin.news.viewnews",$data);
    }


    public function doEditNews(Request $request)
    {
        $request -> validate([
            'title' => "required",
            'category' => "required",
            'news_content' => "required",
            'news_code' => "required"

        ]);

        $news = News::where("news_code",$request->news_code)->first();


        $directory = "news";

        if($request->has('cover')){
            $name = time().".".$request->cover->getClientOriginalExtension();
            $request->cover->move("news",$name);
            $news->cover  =$directory."/".$name;
        }


        $news->title  = $request->title;
        $news->category_id  = $request->category;
        $news->content  = $request->news_content;

        $news->save();


        return redirect()->back()->with("message","News successfully Updated")->with("type","Success");

    }


}
