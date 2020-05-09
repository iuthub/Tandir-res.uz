<?php

namespace App\Http\Controllers;


use App\Http\Requests\UsersRequest;
use App\Roles;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = User::paginate(9);


        return view('admin.users.index',compact('staffs'));
    }


/*------------------------------------------------------*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Roles::pluck('role','id')->all();


        return view('admin.users.create',compact('roles'));
    }


/*------------------------------------------------------*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {

        //PASSWORD ENCRYPTION
        $password =bcrypt($request->password);

        $staffs = new User;


        $staffs->role_id = $request->role;
        $staffs->username = $request ->username;
        $staffs->password = $password; // encrypted password
        $staffs->first_name = $request ->first_name;
        $staffs->last_name = $request ->last_name;
        $staffs->phone_number = $request ->phone_number;
        $staffs->email = $request ->email;

        $staffs->save();

        return redirect('/admin/users');
    }


/*------------------------------------------------------*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.show');
    }


/*------------------------------------------------------*/


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = User::findOrFail($id);

        $roles = Roles::pluck('role','id')->all();

        return view('admin.users.staff_edit',compact('staff','roles'));
    }


/*------------------------------------------------------*/


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
        $staff = User::findOrFail($id);

        $password =bcrypt($request->password);

        $staff->role_id = $request->role;
        $staff->username = $request ->username;
        $staff->password = $password;
        $staff->first_name = $request ->first_name;
        $staff->last_name = $request ->last_name;
        $staff->phone_number = $request ->phone_number;
        $staff->email = $request ->email;

        $staff->save();



        return redirect('/admin/users');
    }


/*------------------------------------------------------*/


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return  redirect('/admin/users');


    }





}





