<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Event;

class FrontController extends Controller
{
    
    public function getNews(){

        $data = News::where("status", 1)->orderBy("id", "desc")->get();
        return view("news", compact('data'));

    }

    public function getEvents(){

        $data = Event::where("status", 1)->orderBy("id", "desc")->get();
        return view("events", compact("data"));

    }


}
