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

//-------------------------------ROUTE GROUP-----------------------------------------------------//

// Route::group(['middleware' => 'admin'], function () {

//1.ADMIN HOME PAGE (DASHBOARD)
Route::get('/admin', function(){ return view('admin.index'); } )->name('admin.dashboard');

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



// });







//-------------------------------END OF ROUTE GROUP-----------------------------------------------------//
















//-----------------------------SOBIR'S PART---------------------------------------------------//




//-----------------------------END OF SOBIR'S PART---------------------------------------------------//
