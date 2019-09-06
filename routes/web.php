<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Author: Niaz Chowdhury
| Date: 20.03.2019
|
*/
use App\Http\Controllers\RecaptchaController;
use App\Mail\SendMailable;
use App\Mail\SendMailableServer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/main', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.index');
});
/*
Route::get('/coach-hire', function () {
    return view('pages.coach-hire');
});

Route::get('/minibus-hire', function () {
    return view('pages.minibus-hire');
});

Route::get('/airport-minibus', function () {
    return view('pages.airport-minibus');
});

Route::get('/self-driving-minibus', function () {
    return view('pages.self-driving-minibus');
});
*/
Route::get('/about-us', function () {
    return view('pages.about-us');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/minibus-fleet', function () {
    return view('pages.minibus-fleet');
});

Route::post('send_email', function (Request $request) {
     if ((new RecaptchaController)->store($request)) {
        Mail::send(new SendMailable($request));
        Mail::send(new SendMailableServer($request));
        return view('pages.thankyou');
    }
})->name('send_email');
/*
Route::get('/wedding-transfers', function () {
    return view('pages.wedding-transfers');
});

Route::get('/seater-minibus-hire', function () {
    return view('pages.seater-minibus-hire');
});
*/
Route::get('/terms', function () {
    return view('pages.terms');
});

