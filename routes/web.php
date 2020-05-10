<?php

use App\Clients;
use App\Http\Controllers\AdminUsersController;
use Illuminate\Support\Facades\Mail;
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
Route::get('/admin', 'AdminController@index' )->name('admin.dashboard');

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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/',function(){

    $data = [

        'title'=>'Hi Murodjon',
        'content'=>'You reservation oder approved'
    ];

    Mail::send('mail', $data, function ($message) {
        $message->from('tandir.res.uz@gmail.com', 'Tandir Rstoran');
        $message->sender('tandir.res.uz@gmail.com', 'Tandirchilar');
        $message->to('murodbek99.murodov@gmail.com', 'Murodjon');
    //   $message->cc('john@johndoe.com', 'John Doe');
    //     $message->bcc('john@johndoe.com', 'John Doe');
    //     $message->replyTo('john@johndoe.com', 'John Doe');
        $message->subject('Order Approvment');
        // $message->priority(3);
        // $message->attach('pathToFile');
    });

});

