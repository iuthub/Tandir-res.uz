@extends('layouts.admin')



@section('content')

<h1>Meal Orders</h1>


<div class="container" style="width: 100%">

    <table class="table table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>ID</th>
          <th>Order ID </th>
          <th>Meal ID</th>
          <th>Quantity</th>
          <th>Order Time</th>
          <th>Total Price</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>

    @if ($meal_orders)
        @foreach ($meal_orders as $meal_order)

            <tr>
                <td>{{ $meal_order->id }}</td>
                <td>{{ $meal_order->order_id }}</td>
                <td>{{ $meal_order->meal_id }}</td>
                <td>{{ $meal_order->quantity }}</td>
                <td>{{ $meal_order->order_time }}</td>
                <td>{{ $meal_order->total_price }}</td>
                <td><a href="#" class="btn btn-primary">Edit</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    @endif


    </tbody>
    </table>
  </div>




@endsection
