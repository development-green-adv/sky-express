<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\ImageGallery;
use App\News;
use App\Event;
use App\Blog;
use App\Position;

class AdminController extends Controller
{
    
    public function loginView(){

        return view("admin/pages/login");

    } 

    public function homePage(){

        return view("admin/pages/home");

    }

    public function getAddLek(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-modele", compact("allImages"));

    }


    public function storeLek(Request $request){

        $data = new News();

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
         }else{
             $gallery = "";
         }
 
         if(!empty($request->input("video_link"))){
             $videos = implode(",", $request->input("video_link"));
         }else{
             $videos = "";
         }

        $data->title           = $request->input('title');
        $data->subtitle        = $request->input('subtitle');
        $data->text            = $request->input('text');
        $data->date            = $request->input('date');
        $data->main_image      = $request->input('mainImage');
        $data->image_gallery   = $gallery;
        $data->video_gallery   = $videos;
        $data->status          = $request->input('status');
        $data->lang            = $request->input('lang');

        $saveData = $data->save();

        if($saveData){

            return redirect()->back()->with('success', 'Uspešno ste dodali novost');

        }else{

            return redirect()->back()->with("messageError", "Niste dodali novost");

        }

    }




    public function listLek(){

        $rows = News::get();

        return view("admin/pages/lista-lekova", compact("rows"));

    }


    public function getUpdateLek($id){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        $data = News::where("id", $id)->first();
        return view("admin/pages/izmeni-lek", compact("data", "allImages"));

    }


    public function updateLek(Request $request){

        $data = new News();

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
         }else{
            $gallery = "";
         }
 
         if(!empty($request->input("video_link"))){
            $videos = implode(",", $request->input("video_link"));
         }else{
            $videos = "";
         }

        $updateData = $data->where('id', $request->input("id"))
            ->update(
                [
                    "title"           => $request->input("title"),
                    "subtitle"        => $request->input("subtitle"),
                    "text"            => $request->input("text"),
                    "date"            => $request->input("date"),
                    "main_image"      => $request->input("mainImage"),
                    "image_gallery"   => $gallery,
                    "video_gallery"   => $videos,
                    "status"          => $request->input("status"),
                    "lang"            => $request->input("lang")

                ]
            );

        if($updateData){

            return redirect()->back()->with('success', 'Uspešno ste izmenili novost');

        }else{

            return redirect()->back()->with("messageError", "Niste izmenili novost");

        }

    }

    public function deleteLek($id){

        $deleteData = News::where("id", $id)->delete();

        if($deleteData){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali novost');

        }else{

            return redirect()->back()->with("messageError", "Niste izbrisali novost");

        }

    }


    

    public function getAddEvent(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-event", compact("allImages"));

    }

    public function storeEvent(Request $request){

        $data = new Event();

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
         }else{
             $gallery = "";
         }
 
         if(!empty($request->input("video_link"))){
             $videos = implode(",", $request->input("video_link"));
         }else{
             $videos = "";
         }

        $data->title           = $request->input('title');
        $data->subtitle        = $request->input('subtitle');
        $data->text            = $request->input('text');
        $data->date            = $request->input('date');
        $data->time_from       = $request->input('time_from');
        $data->time_to         = $request->input('time_to');
        $data->main_image      = $request->input('mainImage');
        $data->image_gallery   = $gallery;
        $data->video_gallery   = $videos;
        $data->status          = $request->input('status');
        $data->lang            = $request->input('lang');

        $saveData = $data->save();

        if($saveData){

            return redirect()->back()->with('success', 'Uspešno ste dodali dogadjaj');

        }else{

            return redirect()->back()->with("messageError", "Niste dodali dogadjaj");

        }        

    }

    public function listEvents(){

        $rows = Event::get();

        return view("admin/pages/lista-eventa", compact("rows"));

    }

    public function getUpdateEvent($id){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        $data = Event::where("id", $id)->first();
        return view("admin/pages/izmeni-event", compact("data", "allImages"));

    }

    public function updateEvent(Request $request){

        $data = new Event();

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
         }else{
            $gallery = "";
         }
 
         if(!empty($request->input("video_link"))){
            $videos = implode(",", $request->input("video_link"));
         }else{
            $videos = "";
         }

        $updateData = $data->where('id', $request->input("id"))
            ->update(
                [
                    "title"           => $request->input("title"),
                    "subtitle"        => $request->input("subtitle"),
                    "text"            => $request->input("text"),
                    "date"            => $request->input("date"),
                    "time"            => $request->input("time"),
                    "main_image"      => $request->input("mainImage"),
                    "image_gallery"   => $gallery,
                    "video_gallery"   => $videos,
                    "status"          => $request->input("status"),
                    "lang"            => $request->input("lang")

                ]
            );

        if($updateData){

            return redirect()->back()->with('success', 'Uspešno ste izmenili dogadjaj');

        }else{

            return redirect()->back()->with("messageError", "Niste izmenili dogadjaj");

        }

    }

    public function deleteEvent($id){

        $deleteData = Event::where("id", $id)->delete();

        if($deleteData){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali dogadjaj');

        }else{

            return redirect()->back()->with("messageError", "Niste izbrisali dogadjaj");

        }

    }




    public function getAddBlog(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-blog", compact("allImages"));

    }


    public function storeBlog(Request $request){

        $data = new Blog();

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
         }else{
             $gallery = "";
         }
 
         if(!empty($request->input("video_link"))){
             $videos = implode(",", $request->input("video_link"));
         }else{
             $videos = "";
         }

        $data->title           = $request->input('title');
        $data->subtitle        = $request->input('subtitle');
        $data->text            = $request->input('text');
        $data->date            = $request->input('date');
        $data->time            = $request->input('time');
        $data->main_image      = $request->input('mainImage');
        $data->image_gallery   = $gallery;
        $data->video_gallery   = $videos;
        $data->status          = $request->input('status');
        $data->lang            = $request->input('lang');

        $saveData = $data->save();

        if($saveData){

            return redirect()->back()->with('success', 'Uspešno ste dodali blog');

        }else{

            return redirect()->back()->with("messageError", "Niste dodali blog");

        }  

    }


    public function listBlog(){

        $rows = Blog::get();

        return view("admin/pages/lista-blogova", compact("rows"));

    }


    public function getUpdateBlog($id){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        $data = Blog::where("id", $id)->first();
        return view("admin/pages/izmeni-blog", compact("data", "allImages"));

    }


    public function updateBlog(Request $request){

        $data = new Blog();

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
         }else{
            $gallery = "";
         }
 
         if(!empty($request->input("video_link"))){
            $videos = implode(",", $request->input("video_link"));
         }else{
            $videos = "";
         }

        $updateData = $data->where('id', $request->input("id"))
            ->update(
                [
                    "title"           => $request->input("title"),
                    "subtitle"        => $request->input("subtitle"),
                    "text"            => $request->input("text"),
                    "date"            => $request->input("date"),
                    "time"            => $request->input("time"),
                    "main_image"      => $request->input("mainImage"),
                    "image_gallery"   => $gallery,
                    "video_gallery"   => $videos,
                    "status"          => $request->input("status"),
                    "lang"            => $request->input("lang")

                ]
            );

        if($updateData){

            return redirect()->back()->with('success', 'Uspešno ste izmenili blog');

        }else{

            return redirect()->back()->with("messageError", "Niste izmenili blog");

        }

    }


    public function deleteBlog($id){

        $deleteData = Blog::where("id", $id)->delete();

        if($deleteData){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali blog');

        }else{

            return redirect()->back()->with("messageError", "Niste izbrisali blog");

        }

    }



    public function getAddPoziciju(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-poziciju", compact("allImages"));

    }


    public function storePoziciju(Request $request){

        $data = new Position();

        $data->title           = $request->input('title');
        $data->text            = $request->input('text');
        $data->file            = $request->input('file');
        $data->status          = $request->input('status');
        $data->lang            = $request->input('lang');

        $saveData = $data->save();

        if($saveData){

            return redirect()->back()->with('success', 'Uspešno ste dodali poziciju');

        }else{

            return redirect()->back()->with("messageError", "Niste dodali poziciju");

        }  

    }


    public function listPozicija(){

        $rows = Position::get();

        return view("admin/pages/lista-pozicija", compact("rows"));

    }


    public function getUpdatePoziciju($id){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        $data = Position::where("id", $id)->first();
        return view("admin/pages/izmeni-poziciju", compact("data", "allImages"));

    }

    public function updatePoziciju(Request $request){

        $data = new Position();

        $updateData = $data->where('id', $request->input("id"))
            ->update(
                [
                    "title"           => $request->input("title"),
                    "text"            => $request->input("text"),
                    "file"            => $request->input("file"),
                    "status"          => $request->input("status"),
                    "lang"            => $request->input("lang")

                ]
            );

        if($updateData){

            return redirect()->back()->with('success', 'Uspešno ste izmenili poziciju');

        }else{

            return redirect()->back()->with("messageError", "Niste izmenili poziciju");

        }

    }


    public function deletePoziciju($id){

        $deleteData = Position::where("id", $id)->delete();

        if($deleteData){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali blog');

        }else{

            return redirect()->back()->with("messageError", "Niste izbrisali blog");

        }


    }






































   
    public function storeImages(Request $request){
        
        $images = $request->file("images");

        for($i = 0; $i < count($images); $i++){

            $new = $i.time().".".$images[$i]->getClientOriginalExtension();
            $slika = $images[$i]->move(public_path("images_gallery"), $new);

            $gallery = new ImageGallery();
            $gallery->image_name = $new;
            $gallery->save();

        }

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return $allImages;

    }




    public function getAddAdmin(){

        return view("admin/pages/dodaj-administratora");

    }

    public function storeAdmin(Request $request){

        $user = new User();

        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("password"));

        $storeAdmin = $user->save();

        if($storeAdmin){

            return redirect()->back()->with("success", "Admin je uspesno dodat");

        }else{

            return redirect()->back()->with("Niste dodali admina");

        }

    }

    public function listAdmins(){

        $users = User::get();

        return view("admin/pages/lista-administratora", compact("users"));

    }

    public function deleteAdmin($id){

        $deleteUser = User::where("id", $id)->delete();

        if($deleteUser){

            return redirect()->back()->with("success", "Admin je uspesno izbrisan");

        }else{

            return redirect()->back()->with("Niste izbrisali admina");

        }

    }

}
