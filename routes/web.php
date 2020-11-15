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
Route::get('contact','FrontendController@contact')->name('contactpage');

=======
<<<<<<< HEAD

// Route::resource('foodpackage','FoodpackageController');
// Route::resource('userdetail','UserdetailController');
=======
>>>>>>> dc310ea59c09352161b2ba4d09a00871f59f9553
Route::resource('user','UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 600e0dcc05991a7f942166630e2818eebd2dafde
