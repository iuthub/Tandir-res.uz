@extends('layouts.admin')


@section('content')

<h1>Create New Meal</h1>


{{----------Error Message--------------------------}}

@include('includes.form_error')


{{----------/Error Message--------------------------}}


{!! Form::open(['method'=>'POST','action'=>'AdminMealsController@store']) !!}

<div class="form-group">
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group" style="margin-top: 15px">
    {!! Form::label('category','Category:') !!}
    {!! Form::select('category',[''=>'Choose Options'] + $categories ,null, ['class'=>'form-control']) !!}
</div>



<div class="form-group">
    {!! Form::label('price','Price:') !!}
    {!! Form::text('price',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('portion','Portion:') !!}
    {!! Form::number('portion',null, ['class'=>'form-control']) !!}
</div>

<div class="form-froup">
    {!! Form::label('ingredients','Ingredients:') !!}
    {!! Form::text('ingredients',null, ['class'=>'form-control']) !!}
</div>


<div class="form-group" style="margin-top: 20px;">
    {!! Form::submit('Create Meal', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}






@endsection
