@extends('layouts.admin')


@section('content')

<h1>Meal Menu</h1>


<div class="container" style="width: 100%">

    <table class="table table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>ID</th>
          <th>Photo</th>
          <th>Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Portion</th>
          <th>Is Available</th>
          <th>Ingredients</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>

    @if ($meals)
        @foreach ($meals as $meal)
            <tr>
                <td>{{ $meal->id }}</td>
                <td><img height="50" src="/img/{{ $meal->photo ? $meal->photo->file : 'no meal photo' }}" alt=""></td>
                <td>{{ $meal->name }}</td>
                @switch($meal->category_id)
                    @case(1)
                    <td>Salad</td>
                        @break
                    @case(2)
                    <td>Dish</td>
                        @break
                    @case(3)
                    <td>Drink</td>
                        @break
                    @default

                @endswitch
                <td>{{ $meal->price }}</td>
                <td>{{ $meal->portion }}</td>
                @if ($meal->is_available)
                    <td>YES</td>
                @else
                    <td>NOT</td>
                @endif

                <td>{{ $meal->ingredients }}</td>
                <td><a href="{{ route('meals.edit',$meal->id) }}" class="btn btn-primary">Edit</a></td>
                <td>
                    {!! Form::open(['method'=>'DELETE','action'=>['AdminMealsController@destroy',$meal->id]]) !!}

                    <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    </div>
                    {!! Form::close() !!}

                </td>
            </tr>

        @endforeach
    @endif


    </tbody>
    </table>
  </div>



@endsection
