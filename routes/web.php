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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/careers', function () {
    return view('carers');
});

Route::get('/cookie-policy', function () {
    return view('cookie-policy');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/pen-testing', function () {
    return view('pen-testing');
});

Route::get('/security-consulting', function () {
    return view('security-consulting');
});

Route::get('/security-awareness-planning', function () {
    return view('security-awareness-planning');
});

Route::get('/security-analysis', function () {
    return view('security-analysis');
});

Route::get('/compliance-analysis', function () {
    return view('compliance-analysis');
});

Route::get('/managed-security-services', function () {
    return view('managed-security-services');
});

Route::get('/information-security-management-system', function () {
    return view('information-security-management-system');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/df-labs', function () {
    return view('df-labs');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/why-us', function () {
    return view('why-us');
});

Route::get('/security-and-risk-management', function () {
    return view('security-and-risk-management');
});

Route::get('/sap-security-guidelines', function () {
    return view('sap-security-guidelines');
});

Route::get('/meeting-gdpr', function () {
    return view('meeting-gdpr');
});

Route::get('/iso-27001', function () {
    return view('iso-27001');
});

Route::get('/by-compliance', function () {
    return view('by-compliance');
});

Route::get('/solutions', function () {
    return view('solutions');
});

Route::get('/carbon-black', function () {
    return view('carbon-black');
});

Route::get('/avast', function () {
    return view('avast');
});

Route::get('/eperi', function () {
    return view('eperi');
});

Route::get('/kerio', function () {
    return view('kerio');
});

Route::get('/logpoint', function () {
    return view('logpoint');
});

Route::get('/onapsis', function () {
    return view('onapsis');
});

Route::get('/open-systems', function () {
    return view('open-systems');
});

Route::get('/security-scorecard', function () {
    return view('security-scorecard');
});

Route::get('/all-products', function () {
    return view('all-products');
});

Route::get('/all-solutions', function () {
    return view('all-solutions');
});





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
