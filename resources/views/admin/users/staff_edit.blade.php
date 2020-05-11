@extends('layouts.admin')



@section('content')


<h1>Edit User </h1>


{{----------Error Message--------------------------}}

@include('includes.form_error')


{{----------/Error Message--------------------------}}


{!! Form::model($staff,['method'=>'PATCH','action'=>['AdminUsersController@update',$staff->id],'files'=>true]) !!}

<div class="form-group">
    {!! Form::label('username','Username:') !!}
    {!! Form::text('username',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password','Password:') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('first_name','First Name:') !!}
    {!! Form::text('first_name',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('lastname','Last Name:') !!}
    {!! Form::text('last_name',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('phone_number','Phone Number:') !!}
    {!! Form::text('phone_number',null, ['class'=>'form-control']) !!}
</div>

<div class="form-froup">
    {!! Form::label('email','Email:') !!}
    {!! Form::email('email',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group" style="margin-top: 15px">
    {!! Form::label('role','Role:') !!}
    {!! Form::select('role',[''=>'Choose Options'] + $roles ,null, ['class'=>'form-control']) !!}
</div>

<div class="form-group" style="margin-top: 20px;">
    {!! Form::submit('Edit User', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}






{!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy',$staff->id]]) !!}


<div class="form_group">
    {!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}
</div>


@endsection
