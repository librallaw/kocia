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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/givings', function () {
    return view('membergivings');
})->name("members_givings");


Route::get('/members/givings', function () {
    return view('givings');
})->name("guest_givings")->middleware("auth");

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/foundation-school', function () {
    return view('foundation');
});

Route::get('/cell-ministry', function () {
    return view('cell-ministry');
});

//Route::get('/announcements', function () {
//    return view('contact');
//});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/live', 'WatchController@showWatchLive')->name('showWatchLive')->middleware("ServiceChecker");

Route::get('/service/register', 'WatchController@registerService')->name('registerService');
Route::post('/service/register', 'WatchController@doregisterService')->name('doregisterService');

Route::post('/addComment', 'WatchController@addComment')->name('addComment');

Route::post('/addPrayerRequest', 'HomeController@addPrayerRequest')->name('addPrayerRequest');
Route::post('/submitContact', 'HomeController@submitContact')->name('submitContact');


Route::post('/verify/payment', 'PaymentController@verifyPayment')->name('verifyPayment');
Route::post('/member/verify/payment', 'PaymentController@memberVerifyPayment')->name('memberVerifyPayment')->middleware("auth");


Auth::routes();

