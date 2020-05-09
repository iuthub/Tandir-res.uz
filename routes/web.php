<?php

use App\Clients;
use App\Http\Controllers\AdminUsersController;
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



//1.VIEW STAFF INFORMATION
Route::resource('admin/users', 'AdminUsersController');

//2.CREATING NEW STAFF ACCOUNT
Route::get('admin/users/create','AdminUsersController@create')->name('admin.users.create');


//3.ADMIN HOME PAGE (DASHBOARD)
Route::get('/admin', function(){ return view('admin.index'); } )->name('admin.dashboard');




//5.VIEW MEAL ORDERS
Route::resource('admin/orders' ,'AdminOrdersController');

//6.VIEW MEAL ORDERS
Route::resource('admin/meal_orders','AdminMealOrdersController');

//7.MEALS CONTROLLER
Route::resource('admin/meals', 'AdminMealsController');




//-----------------------------SOBIR'S PART---------------------------------------------------//


Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact',function(){return view('pages.contact');})->name('contactPage');
Route::post('/sendContactMessage','PagesController@sendMessage')->name('sendContactMessage');
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



//-----------------------------END OF SOBIR'S PART---------------------------------------------------//
