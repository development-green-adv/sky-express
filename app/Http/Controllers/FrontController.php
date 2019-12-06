<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Event;

class FrontController extends Controller
{
    
    public function getHomePage(){

        $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
        return view("welcome", compact("data"));

    }

    public function getSrbHome(){

        $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
        return view("/sr/welcome", compact("data"));

    }


    public function getNews(){

        $data = News::where("status", 1)->where('lang', "en")->orderBy("id", "desc")->paginate(4);
        $dataRight = News::where("status", 1)->where("lang", "en")->orderBy("id", "desc")->skip(0)->take(4)->get();

        return view("news", compact('data', 'dataRight'));

    }

    public function getNewsSrb(){

        $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "desc")->paginate(4);
        $dataRight = News::where("status", 1)->where("lang", "sr")->orderBy("id", "desc")->skip(0)->take(4)->get();

        return view("/sr/news", compact('data', 'dataRight'));

    }

    public function getEvents(){

        $dataNext = Event::where("status", 1)->where("lang", "en")->orderBy("date", "desc")->get();
        $dataPrevious = Event::where("status", 1)->where("lang", "en")->orderBy("date", "desc")->paginate(10);

        return view("events", compact("dataNext", "dataPrevious"));

    }

    public function getEventsSrb(){

        $dataNext = Event::where("status", 1)->where('lang', "sr")->orderBy("date", "desc")->get();
        $dataPrevious = Event::where("status", 1)->where('lang', 'sr')->orderBy("date", "desc")->paginate(10);

        return view("/sr/events", compact("dataNext", "dataPrevious"));

    }

    public function getSingleNews($alias){

        $all = News::where("status", 1)->orderBy("id", "desc")->get();
        $alia = $alias;
        $data = News::where("alias", "like", $alias)->first();
        return view("single-news", compact("data", "all", "alia"));

    }

    public function getSingleNewsSrb($alias){

        $all = News::where("status", 1)->where("lang", "sr")->orderBy("id", "desc")->get();
        $alia = $alias;
        $data = News::where("alias", "like", $alias)->first();
        return view("/sr/single-news", compact("data", "all", "alia"));

    }


}
