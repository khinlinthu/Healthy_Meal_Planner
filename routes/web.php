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

<<<<<<< HEAD

Route::resource('foodpackage','FoodpackageController');
Route::resource('userdetail','UserdetailController');
=======
<<<<<<< HEAD
Route::get('contact','FrontendController@contact')->name('contactpage');

=======
<<<<<<< HEAD

// Route::resource('foodpackage','FoodpackageController');
// Route::resource('userdetail','UserdetailController');
=======
>>>>>>> dc310ea59c09352161b2ba4d09a00871f59f9553
>>>>>>> 1f4daa4094742915d5f186d876ac0b9c4e023906
Route::resource('user','UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('getfoodpackage','FrontendController@getFoodPackages')->name('getfoodpackage');
