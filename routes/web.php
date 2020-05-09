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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/service', 'PagesController@service')->name('service');
Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('/sendContactMessage','PagesController@sendMessage')->name('sendContactMessage');
Route::post('/reserve','PagesController@reserve')->name('reserve');

//Authentication Routes
//Views
Route::get('/login','LoginController@show')->name('login')->middleware('guest');
Route::get('/register','RegisterController@show')->name('register')->middleware('guest');
//Posts

Route::post('/loginPost','LoginController@login')->name('loginPost');
Route::post('/registerPost','RegisterController@register')->name('registerPost');


//Protected routes: Only authenticated users can get in
Route::middleware('auth')->group(function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	Route::get('/logout','LoginController@logout')->name('logout');
});