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

