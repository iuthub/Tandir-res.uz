@extends('layouts.admin')



@section('content')

<h1>Meal Orders</h1>


<div class="container" style="width: 100%">

    <table class="table table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>ID</th>
          <th>Customer Name </th>
          <th>Meal </th>
          <th>Quantity</th>
          <th>Order Time</th>
          <th>Total Price</th>
          <th>Delete</th>

        </tr>
      </thead>
      <tbody>

    @if ($meal_orders || $meal_orders || $meal_orders)
        @foreach ($meal_orders as $meal_order)

                    <tr>
                        <td>{{ $meal_order->id }}</td>
                        <td>{{ $meal_customer }}</td>
                        <td>{{ $meal_name }}</td>
                        <td>{{ $meal_order->quantity }}</td>
                        <td>{{ $meal_order->order_time }}</td>
                        <td>{{ $meal_order->total_price }}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','action'=>['AdminMealOrdersController@destroy',$meal_order->id]]) !!}

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
