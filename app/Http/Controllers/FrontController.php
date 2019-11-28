<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class FrontController extends Controller
{
    
    public function getNews(){

        $data = News::where("status", 1)->orderBy("id", "desc")->get();
        return view("news", compact('data'));

    }


}
