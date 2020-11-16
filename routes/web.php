<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.calculate');

});

//frontend 
Route::get('/', 'FrontendController@home')->name('mainpage');

Route::get('about', 'FrontendController@about')->name('aboutpage');

Route::get('calculate','FrontendController@calculate')->name('calculatepage');

Route::get('signin','FrontendController@signin')->name('signinpage');



Route::resource('foodpackage','FoodpackageController');
Route::resource('userdetail','UserdetailController');

Route::get('contact','FrontendController@contact')->name('contactpage');
Route::get('cartpage','FrontendController@cart')->name('cartpage');


Route::resource('user','UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('getfoodpackage','FrontendController@getFoodPackages')->name('getfoodpackage');
