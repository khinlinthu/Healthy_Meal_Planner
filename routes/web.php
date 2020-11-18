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


// Route::get('testing', function () {
//     return view('frontend.new');
//      // return view('Backendtemplate');

// Route::get('/', function () {
//     return view('frontend.calculate');
     

// // Route::get('/', function () {
// //     return view('backendtemplate');


// });

//frontend 
Route::get('/', 'FrontendController@home')->name('main_page');

// Route::get('about', 'FrontendController@about')->name('aboutpage');

Route::get('calculate','FrontendController@calculate')->name('calculatepage');

Route::get('signin','FrontendController@signin')->name('signinpage');

Route::get('history','FrontendController@history')->name('history');

Route::get('cartpage','FrontendController@cart')->name('cartpage');


//backend
Route::middleware('role:admin')->group(function () {
Route::resource('foodpackage','FoodpackageController');

});

Route::resource('userdetail','UserdetailController');


Route::resource('user','UserController');

Route::resource('order', 'OrderController');

Route::post('confirm/{id}', 'OrderController@confirm')->name('order.confirm');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('getfoodpackage','FrontendController@getFoodPackages')->name('getfoodpackage');



