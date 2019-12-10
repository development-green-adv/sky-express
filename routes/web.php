<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\News;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
});

Route::get('/', "FrontController@getHomePage");

Route::get("/sr", "FrontController@getSrbHome");

Route::get('/about-us', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('about-us', compact("data"));
});

Route::get("/sr/o-nama", function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view("/sr/about-us", compact("data"));
});

Route::get('/careers', function () {
    return view('carers');
});

Route::get('/sr/karijera', function () {
    return view('/sr/carers');
});

Route::get('/cookie-policy', function () {
    return view('cookie-policy');
});

Route::get('/sr/politika-kolacica', function () {
    return view('/sr/cookie-policy');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/sr/politika-privatnosti', function () {
    return view('/sr/privacy-policy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/sr/odredbe-i-uslovi', function () {
    return view('/sr/terms');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/sr/faq', function () {
    return view('/sr/faq');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/pen-testing', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('pen-testing', compact("data"));
});

Route::get('/sr/pentesting-i-hakovanje', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/pen-testing', compact("data"));
});

Route::get('/security-consulting', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('security-consulting', compact("data"));
});

Route::get('/sr/konsultantske-usluge', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/security-consulting', compact("data"));
});

Route::get('/security-awareness-planning', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('security-awareness-planning', compact("data"));
});

Route::get('/sr/planiranje-svesti-o-bezbednosti', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/security-awareness-planning', compact("data"));
});

Route::get('/security-analysis', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('security-analysis', compact("data"));
});

Route::get('/sr/bezbedonosna-analiza', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/security-analysis', compact("data"));
});

Route::get('/compliance-analysis', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('compliance-analysis', compact("data"));
});

Route::get('/sr/analiza-uskladjenosti', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/compliance-analysis', compact("data"));
});

Route::get('/managed-security-services', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('managed-security-services', compact("data"));
});

Route::get('/sr/managed-security-services', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/managed-security-services', compact("data"));
});

Route::get('/information-security-management-system', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('information-security-management-system', compact("data"));
});

Route::get('/sr/information-security-management-system', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/information-security-management-system', compact("data"));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/sr/kontakt', function () {
    return view('/sr/contact');
});

Route::get('/df-labs', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('df-labs', compact("data"));
});

Route::get('/sr/df-labs', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/df-labs', compact("data"));
});

Route::get('/news', 'FrontController@getNews');

Route::get('/sr/vesti', 'FrontController@getNewsSrb');

Route::get('/events', "FrontController@getEvents");

Route::get('/sr/dogadjaji', "FrontController@getEventsSrb");


Route::get('/why-us', function () {
    return view('why-us');
});

Route::get('/sr/zasto-sky-express', function () {
    return view('/sr/why-us');
});

Route::get('/security-and-risk-management', function () {
    return view('security-and-risk-management');
});

Route::get('/sap-security-guidelines', function () {
    return view('sap-security-guidelines');
});

Route::get('/sr/sap-bezbednosne-smernice', function () {
    return view('/sr/sap-security-guidelines');
});

Route::get('/meeting-gdpr', function () {
    return view('meeting-gdpr');
});

Route::get('/sr/meeting-gdpr', function () {
    return view('/sr/meeting-gdpr');
});

Route::get('/iso-27001', function () {
    return view('iso-27001');
});

Route::get('/sr/iso-27001', function () {
    return view('/sr/iso-27001');
});

Route::get('/by-compliance', function () {
    return view('by-compliance');
});

Route::get('/sr/po-uskladjenosti', function () {
    return view('/sr/by-complinace');
});

Route::get('/solutions', function () {
    return view('solutions');
});

Route::get('/sr/resenja', function () {
    return view('/sr/solutions');
});

Route::get('/carbon-black', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('carbon-black', compact("data"));
});

Route::get('/sr/carbon-black', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/carbon-black', compact("data"));
});

Route::get('/avast', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('avast', compact("data"));
});

Route::get('/sr/avast', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/avast', compact("data"));
});

Route::get('/eperi', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('eperi', compact("data"));
});

Route::get('/sr/eperi', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/eperi', compact("data"));
});

Route::get('/kerio', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('kerio', compact("data"));
});

Route::get('/sr/kerio', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/kerio', compact("data"));
});

Route::get('/logpoint', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('logpoint', compact("data"));
});

Route::get('/sr/logpoint', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/logpoint', compact("data"));
});

Route::get('/onapsis', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('onapsis', compact("data"));
});

Route::get('/sr/onapsis', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/onapsis', compact("data"));
});

Route::get('/open-systems', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('open-systems', compact("data"));
});

Route::get('/sr/open-systems', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/open-systems', compact("data"));
});

Route::get('/security-scorecard', function () {
    $data = News::where("status", 1)->where("lang", "en")->orderBy("id", "asc")->limit(3)->get();
    return view('security-scorecard', compact("data"));
});

Route::get('/sr/security-scorecard', function () {
    $data = News::where("status", 1)->where("lang", "sr")->orderBy("id", "asc")->limit(3)->get();
    return view('/sr/security-scorecard', compact("data"));
});

Route::get('/all-products', function () {
    return view('all-products');
});

Route::get('/sr/proizvodi', function () {
    return view('/sr/all-products');
});

Route::get('/all-solutions', function () {
    return view('all-solutions');
});

Route::get('/sr/sva-resenja', function () {
    return view('/sr/all-solutions');
});

Route::get('/single-news/{alias}', "FrontController@getSingleNews");

Route::get("/sr/vest/{alias}", "FrontController@getSingleNewsSrb");










// rute za admin deo
Route::get("/admin/login", "AdminController@loginView")->name("admin.login");

Route::get("/admin/home", "AdminController@homePage")->middleware("auth");


// rute za novosti
Route::get("/admin/dodaj-lek", "AdminController@getAddLek")->middleware("auth");
Route::post("/admin/dodaj-modele", "AdminController@storeLek")->middleware("auth");
Route::get("/admin/lista-lekova", "AdminController@listLek")->middleware("auth");
Route::get("/admin/izmeni-lek/{id}", "AdminController@getUpdateLek")->middleware("auth");
Route::post("/admin/izmeni-lek", "AdminController@updateLek")->middleware("auth");
Route::get("/admin/obrisi-lek/{id}", "AdminController@deleteLek")->middleware("auth");


// rute za dogadjaje
Route::get("/admin/dodaj-event", "AdminController@getAddEvent")->middleware("auth");
Route::post("/admin/dodaj-event", "AdminController@storeEvent")->middleware("auth");
Route::get("/admin/lista-eventa", "AdminController@listEvents")->middleware("auth");
Route::get("/admin/izmeni-event/{id}", "AdminController@getUpdateEvent")->middleware("auth");
Route::post("/admin/izmeni-event", "AdminController@updateEvent")->middleware("auth");
Route::get("/admin/obrisi-event/{id}", "AdminController@deleteEvent")->middleware("auth");


// rute za blog
Route::get("/admin/dodaj-blog", "AdminController@getAddBlog")->middleware("auth");
Route::post("/admin/dodaj-blog", "AdminController@storeBlog")->middleware("auth");
Route::get("/admin/lista-blogova", "AdminController@listBlog")->middleware("auth");
Route::get("/admin/izmeni-blog/{id}", "AdminController@getUpdateBlog")->middleware("auth");
Route::post("/admin/izmeni-blog", "AdminController@updateBlog")->middleware("auth");
Route::get("/admin/obrisi-blog/{id}", "AdminController@deleteBlog")->middleware("auth");


// rute za pozicije
Route::get("/admin/dodaj-poziciju", "AdminController@getAddPoziciju")->middleware("auth");
Route::post("/admin/dodaj-poziciju", "AdminController@storePoziciju")->middleware("auth");
Route::get("/admin/lista-pozicija", "AdminController@listPozicija")->middleware("auth");
Route::get("/admin/izmeni-poziciju/{id}", "AdminController@getUpdatePoziciju")->middleware("auth");
Route::post("/admin/izmeni-poziciju", "AdminController@updatePoziciju")->middleware("auth");
Route::get("/admin/obrisi-poziciju/{id}", "AdminController@deletePoziciju")->middleware("auth");





//rute za admine
Route::get("/admin/dodaj-administratora", "AdminController@getAddAdmin")->middleware("auth");
Route::post("/admin/dodaj-administratora", "AdminController@storeAdmin")->middleware("auth");
Route::get("/admin/lista-administratora", "AdminController@listAdmins")->middleware("auth");
Route::get("/admin/obrisi-administratora/{id}", "AdminController@deleteAdmin")->middleware("auth");
Route::post("/admin/izmeni-event", "AdminController@updateEvent")->middleware("auth");

// ruta za dodavanje slika u galeriji
Route::post("/admin/dodaj-galeriju-slika", "AdminController@storeImages")->middleware("auth");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
