<?php

namespace App\Http\Controllers;

use App\Clients;
use App\Http\Requests\UsersRequest;
use App\Roles;
use App\Staff;
use App\Photo;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();


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
//        $input = $request->all();

        if($file = $request->file('photo_id'))
        {
            return "photo exist";
        }

        //PASSWORD ENCRYPTION
        $password =bcrypt($request->password);

        $staffs = new Staff;


        $staffs->role_id = $request->role;
        $staffs->username = $request ->username;
        $staffs->password = $password; // encrypted password
        $staffs->first_name = $request ->first_name;
        $staffs->last_name = $request ->last_name;
        $staffs->phone_number = $request ->phone_number;
        $staffs->email = $request ->email;
        $staffs->photo_id = $request ->photo_id;

        $staffs->save();

        //return redirect('/admin/users');
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
        return view('admin.users.edit');
    }


/*------------------------------------------------------*/


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        //
    }

    public function client_view()
    {
        $clients = Clients::all();

        return view('admin.users.client_view',compact('clients'));

    }





}





