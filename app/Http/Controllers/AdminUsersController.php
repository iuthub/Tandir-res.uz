<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\UsersRequest;
use App\Roles;

use App\User;
use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    public function index()
    {
        $staffs = User::paginate(9);


        return view('admin.users.index',compact('staffs'));
    }

    public function create()
    {

        $roles = Roles::pluck('role','id')->all();


        return view('admin.users.create',compact('roles'));
    }

    public function store(UsersRequest $request)
    {

        //PASSWORD ENCRYPTION
        $password =bcrypt($request->password);

        $staffs = new User;


        $staffs->role_id = $request->role;
        $staffs->name = $request ->username;
        $staffs->password = $password; // encrypted password
        $staffs->first_name = $request ->first_name;
        $staffs->last_name = $request ->last_name;
        $staffs->phone_number = $request ->phone_number;
        $staffs->email = $request ->email;

        $staffs->save();

        return redirect('/admin/users');
    }




    public function edit($id)
    {
        $staff = User::findOrFail($id);

        $roles = Roles::pluck('role','id')->all();

        return view('admin.users.staff_edit',compact('staff','roles'));
    }




    public function update(UsersRequest $request, $id)
    {
        $staff = User::findOrFail($id);

        $password =bcrypt($request->password);

        $staff->role_id = $request->role;
        $staff->name = $request ->username;
        $staff->password = $password;
        $staff->first_name = $request ->first_name;
        $staff->last_name = $request ->last_name;
        $staff->phone_number = $request ->phone_number;
        $staff->email = $request ->email;

        $staff->save();



        return redirect('/admin/users');
    }




    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return  redirect('/admin/users');


    }













}
