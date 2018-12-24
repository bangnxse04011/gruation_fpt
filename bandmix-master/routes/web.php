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
//events
Route::resource('/events','EventsController');
Route::resource('/feedback','FeedbackController');
Route::get('/', 'HomePageController@index');
Route::get('/search', 'HomePageController@search')->name('masterSearching');;


Route::group(['middleware' => 'auth'], function(){
    Route::get('/events/create','EventsController@create')->name('events.create');
    Route::get('/bands/management','BandsController@management')->name('bands.manage');
    Route::post('/bands','BandsController@store')->name('bands.store');
    Route::get('/bands/create','BandsController@create')->name('bands.create');
    //cart
    Route::get('/cart','CartsController@index')->name('cart.show');
    Route::post('/cart','CartsController@store')->name('cart.store');
    Route::get('empty','CartsController@empty')->name('cart.empty');
    Route::get('/bands/edit/{id}','BandsController@edit')->name('bands.edit');
    Route::PUT('/bands/{slug}', 'BandsController@update')->name('bands.update');
    Route::post('events','EventsController@store')->name('events.store');
    Route::resource('/events','EventsController');
});

//event
Route::get('events','EventsController@index')->name('events.index');

//events
Route::get('/events/create','EventsController@create')->name('events.create');
// Route::get('/events/manage','EventsController@manage')->name('events.manage');
Route::get('/event/manage','EventsController@manage')->name('events.manage');
Route::get('/events/{id}','EventsController@show')->name('events.show');
Route::get('/event/detail/{id}','EventsController@detail')->name('events.detail');
Route::get('/events/edit/{id}','EventsController@edit')->name('events.edit');
Route::get('/events/delete/{id}','EventsController@deleteEvent')->name('events.delete');

Route::get('/events/{slug}','EventsController@show');
Route::resource('/events','EventsController');
Route::get('/', 'HomePageController@index')->name('homepage');


//band
Route::get('/bands','BandsController@index')->name('bands.index');
Route::get('/bands/{slug}','BandsController@show')->name('bands.show');

//news
Route::get('/news','NewsController@index')->name('news.index');
Route::get('/news/{id}','NewsController@show')->name('news.show');

//search
Route::get('/user/{id}','MembersController@show')->name('members.index');
Route::get('/user/edit/{id}','MembersController@edit')->name('members.edit');
Route::Post('/user/{id}','MembersController@update')->name('members.update');
//login
Auth::routes();
Route::Post('/','Auth\LoginController@login')->name('login');
Route::get('/login','HomePageController@index');

// Route reg 
Route::post('/authen','Auth\LoginController@authen')->name('authen');
Route::post('/sign-in','Auth\RegisterController@sign_In')->name('sign-in');
Route::post('/check-exit-email','Auth\RegisterController@check_Exist_User')->name('check-exit-email');

Route::post('/change-pass','Auth\RegisterController@change_Pass')->name('change-pass');
Route::post('/reset-pass','Auth\RegisterController@reset_Pass')->name('reset-pass');