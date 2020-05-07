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

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('welcome');
// });


//ADMIN HOME PAGE (DASHBOARD)
Route::get('/admin', function(){ return view('admin.index'); } )->name('admin.dashboard');


//VIEW STAFF INFORMATION
Route::resource('admin/users', 'AdminUsersController');

//VIEW CLIENT INFORMATION
Route::get('admin/clients','AdminUsersController@client_view')->name('admin.users.client');

//VIEW MEAL ORDERS
Route::resource('admin/orders' ,'AdminOrdersController');

// // CREATING NEW STAFF ACCOUNT
// Route::get('admin/users/create','AdminUsersController@create')->name('admin.users.create');


=======
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

