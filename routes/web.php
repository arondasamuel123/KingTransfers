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



Route::get('/about', 'PagesController@index')->name('about');
Route::get('/howitworks', 'PagesController@how')->name('howitworks');

Route::get('/transfers', 'TransferController@index');
Route::get('/homepage', 'TransferController@create');
Route::post('/confirm','TransferController@store');
Route::get('/show', 'TransferController@show');
Route::get('/edit', 'TransferController@edit');
Route::put('/update','TransferController@update');


Route::get('/register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');

Route::get('/login', 'LoginController@create');
Route::post('/session', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::get('login/facebook', 'LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'LoginController@handleProviderCallback');


Route::get('contacts', 'ContactController@index');
Route::post('/sent','ContactController@store');
Route::get('/homepage','ContactController@show');

Route::get('/flight','FlightController@create');
Route::post('/store', 'FlightController@store');

Route::get('/payment', 'PaymentController@index')->name('payment');

Route::get('/invoice/{user}', 'InvoiceController@show');
Route::get('/mail','InvoiceController@mail');
