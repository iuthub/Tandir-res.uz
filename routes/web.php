<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


//---------------FRONT SIDE---------------------------//


Route::get('/', 'PagesController@index')->name('index');
Route::get('/service', 'PagesController@service')->name('service');
Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('/sendContactMessage','PagesController@sendMessage')->name('sendContactMessage');
Route::post('/reserve','PagesController@reserve')->name('reserve');

//---------------FRONT SIDE---------------------------//


//---------------ADMIN SIDE---------------------------//


//---------------ADMIN SIDE---------------------------//





Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');


Route::group(['middleware' =>'admin'], function () {


//1.ADMIN HOME PAGE (DASHBOARD)
Route::get('/admin/index', 'AdminController@index' )->name('admin.dashboard');

//2.CREATING NEW STAFF ACCOUNT
Route::get('admin/users/create','AdminUsersController@create')->name('admin.users.create');

//3.VIEW STAFF INFORMATION
Route::resource('admin/users', 'AdminUsersController');


//4.VIEW MEAL ORDERS
Route::resource('admin/orders' ,'AdminOrdersController');

//5.VIEW MEAL ORDERS
Route::resource('admin/meal_orders','AdminMealOrdersController');


//6.MEALS CONTROLLER
Route::resource('admin/meals', 'AdminMealsController');

});




