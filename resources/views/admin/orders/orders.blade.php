@extends('layouts.admin')



@section('content')

<h1>Orders</h1>

<div class="container" style="width: 100%;">

    <table class="table table-hover table-bordered table-responsive">
      <thead>
        <tr>
          {{-- <th>ID</th> --}}
          <th>First Name </th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Number of People</th>
          <th>Order Date</th>
          <th>Order Time</th>
          <th>Total Price</th>
          <th>Is Approved</th>
          <th>Approve</th>
          <th>Edit<br>Delete</th>
        </tr>
      </thead>
      <tbody>

    @if ($orders)
        @foreach ($orders as $order)

            <tr>
                {{-- <td>{{ $order->id }}</td> --}}
                <td>{{ $order->first_name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->phone_number }}</td>
                <td>{{ $order->number_of_people }}</td>
                <td>{{ $order->date }}</td>
                <td>{{ $order->time }}</td>
                <td>{{ $order->total_price }}</td>

                @if ($order->is_approved==1)
                    <td> Approved</td>
                @else
                    <td> Disapproved</td>
                @endif


                <th><a href="#" class="btn btn-primary" style="margin:5px">Approve</a><br>
                <a href="#" class="btn btn-danger">Disapprove</a></th>
                <th><a href="#" class="btn btn-primary" style="margin: 5px">Edit</a><br>
                <a href="#" class="btn btn-danger">Delete</a></th>

            </tr>
        @endforeach
    @endif


    </tbody>
    </table>
  </div>




@endsection
