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

//Route::get('/', 'AddController@index');
Route::get('/', function () {
    return view('welcome');
})->name('home'); 

Auth::routes();

/************* News scrapping ********************/

Route::get('kaliningrad/ka', 'HomeController@show');

Route::get('baltic', 'AddController@index');

Route::get('test', 'AddController@create');//delfi

Route::get('economic', 'AddController@economic');

/********* jobs **********/

Route::get('work', 'AddController@work');

Route::put('subSave', 'SubscriptionController@store');

Route::post('work', 'AddController@work');

Route::get('skelbimu-prenumeravimas', 'AddController@subsOrder');

/***** users bar ***********/

Route::get('mySubs', 'UserController@index');

Route::get('delete/{id}', 'SubscriptionController@destroy');

/********* sending subscriptions ***********/

Route::get('subscribe', 'SubscriptionController@create');//sending emails

Route::get('emails', 'SubscriptionController@authEmails')->middleware('admin');



Auth::routes();
Route::get('verify/{token}', 'Auth\RegisterController@verify');

Route::get('verife/{token}', 'SubscriptionController@guestConfirm');

//Route::get('/home', 'HomeController@index')->name('home');
