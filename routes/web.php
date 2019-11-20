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



// rute za admin deo
Route::get("/admin/login", "AdminController@loginView")->name("admin.login");

Route::get("/admin/home", "AdminController@homePage")->middleware("auth");


// rute za lekove
Route::get("/admin/dodaj-lek", "AdminController@getAddLek")->middleware("auth");
Route::post("/admin/dodaj-modele", "AdminController@storeLek")->middleware("auth");
Route::get("/admin/lista-lekova", "AdminController@listLek")->middleware("auth");
Route::get("/admin/izmeni-lek/{id}", "AdminController@getUpdateLek")->middleware("auth");
Route::post("/admin/izmeni-lek", "AdminController@updateLek")->middleware("auth");
Route::post("/admin/get-ajax-list-lekovi", "AdminController@getAjaxListLekovi")->middleware("auth");
Route::get("/admin/obrisi-lek/{id}", "AdminController@deleteLek")->middleware("auth");


// ruta za dodavanje fabrika
Route::get("/admin/dodaj-fabriku", "AdminController@getAddFabrika")->middleware("auth");
Route::post("/admin/dodaj-fabrike", "AdminController@storeFabrika")->middleware("auth");
Route::get("/admin/lista-fabrika", "AdminController@listFabrika")->middleware("auth");
Route::get("/admin/izmeni-fabriku/{id}", "AdminController@getUpdateFabriku")->middleware("auth");
Route::post("/admin/izmeni-fabriku", "AdminController@updateFabriku")->middleware("auth");
Route::post("/admin/get-ajax-list-fabrika", "AdminController@getAjaxListFabrika")->middleware("auth");
Route::get("/admin/obrisi-fabriku/{id}", "AdminController@deleteFabriku")->middleware("auth");


// ruta za dodavanje atc
Route::get("/admin/dodaj-atc", "AdminController@getAddAtc")->middleware("auth");
Route::post("/admin/dodaj-atc", "AdminController@storeAtc")->middleware("auth");
Route::get("/admin/lista-atc", "AdminController@listAtc")->middleware("auth");
Route::post("/admin/get-ajax-list-atc", "AdminController@getAjaxListAtc")->middleware("auth");
Route:: get("/admin/obrisi-atc/{id}", "AdminController@deleteAtc")->middleware("auth");


// ruta za dodavanje legendi
Route::get("/admin/dodaj-legende", "AdminController@getAddLegende")->middleware("auth");
Route::post("/admin/dodaj-legende", "AdminController@storeLegende")->middleware("auth");
Route::get("/admin/lista-legende", "AdminController@listLegende")->middleware("auth");
Route::get("/admin/izmeni-legendu/{id}", "AdminController@getUpdateLegend")->middleware("auth");
Route::post("/admin/izmeni-legendu", "AdminController@updateLegend")->middleware("auth");
Route::post("/admin/get-ajax-list-legende", "AdminController@getAjaxListLegende")->middleware("auth");
Route::get("/admin/obrisi-legendu/{id}", "AdminController@deleteLegende")->middleware("auth");


// ruta za dodavanje nosioca
Route::get("/admin/dodaj-nosioce", "AdminController@getAddNosioce")->middleware("auth");
Route::post("/admin/dodaj-nosioce", "AdminController@storeNosioce")->middleware("auth");
Route::get("/admin/lista-nosioca", "AdminController@listNosioci")->middleware("auth");
Route::get("/admin/izmeni-nosioca/{id}", "AdminController@getUpdateNosioc")->middleware("auth");
Route::post("/admin/izmeni-nosioca", "AdminController@updateNosioca")->middleware("auth");
Route::post("/admin/get-ajax-list-nosioci", "AdminController@getAjaxListNosioci")->middleware("auth");
Route::get("/admin/obrisi-nosioca/{id}", "AdminController@deleteNosioca")->middleware("auth");


// ruta za sve banere
Route::get("/admin/dodaj-banere", "AdminController@getAddBaners")->middleware("auth");
Route::post("/admin/dodaj-banere-lek", "AdminController@storeBanerLek")->middleware("auth");
Route::post("/admin/dodaj-banere-proizvodjac", "AdminController@storeBanerProizvodjac")->middleware("auth");
Route::post("/admin/dodaj-banere-nosioci", "AdminController@storeBanerNosioci")->middleware("auth");
Route::post("/admin/dodaj-slova", "AdminController@storeWordBaners")->middleware("auth");
Route::get("/admin/obrisi-word-baner/{id}", "AdminController@deleteWordBaner")->middleware("auth");
Route::get("/admin/obrisi-lek-baner/{id}", "AdminController@deleteLekBaner")->middleware("auth");
Route::get("/admin/obrisi-proizvodjac-baner/{id}", "AdminController@deleteFabricBaner")->middleware("auth");
Route::get("/admin/obrisi-nosioc-baner/{id}", "AdminController@deleteNosiocBaner")->middleware("auth");


Route::get("/admin/lista-banera", "AdminController@listBaners")->middleware("auth");
Route::get("/admin/lista-lekovi-baneri", "AdminController@listLekoviBaners")->middleware("auth");
Route::get("/admin/lista-proizvodjaci-baneri", "AdminController@listProizvodjaciBaners")->middleware("auth");
Route::get("/admin/lista-nosioci-baneri", "AdminController@listNosiociBaners")->middleware("auth");


// ajax ruta za vracanje lekova na osnovu pocetnog slova
Route::post("/admin/get-ajax-word-lek", "AdminController@getAjaxWordLek")->middleware("auth");
Route::post("/admin/get-ajax-word-proizvodjac", "AdminController@getAjaxWordProizvodjac")->middleware("auth");
Route::post("/admin/get-ajax-word-nosioci", "AdminController@getAjaxWordNosioc")->middleware("auth");

Route::post("/get-home-baner", "ProductController@getWordBaners")->middleware("auth");



//rute za admine
Route::get("/admin/dodaj-administratora", "AdminController@getAddAdmin")->middleware("auth");
Route::post("/admin/dodaj-administratora", "AdminController@storeAdmin")->middleware("auth");
Route::get("/admin/lista-administratora", "AdminController@listAdmins")->middleware("auth");
Route::get("/admin/obrisi-administratora/{id}", "AdminController@deleteAdmin")->middleware("auth");

// ruta za dodavanje slika u galeriji
Route::post("/admin/dodaj-galeriju-slika", "AdminController@storeImages")->middleware("auth");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
