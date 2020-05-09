@extends('layouts.admin')



@section('content')

<h1>Orders</h1>

<div class="container" style="width: 100%;">

    <table class="table table-hover table-bordered table-responsive">
      <thead>
        <tr>
          {{-- <th>ID</th> --}}
          <th>ID </th>
          <th>First Name </th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Number of People</th>
          <th>Order Date</th>
          <th>Order Time</th>
          <th>Total Price</th>
          <th>Is Approved</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>

    @if ($orders)
        @foreach ($orders as $order)

            <tr>
                {{-- <td>{{ $order->id }}</td> --}}
                <td>{{ $order->id }}</td>
                <td>{{ $order->first_name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->phone_number }}</td>
                <td>{{ $order->number_of_people }}</td>
                <td>{{ $order->date }}</td>
                <td>{{ $order->time }}</td>
                <td>{{ $order->total_price }}</td>

                <td>
                    @if ($order->is_approved==1)

                        {!! Form::open(['method'=>'PATCH','action'=>['AdminOrdersController@update',$order->id]]) !!}

                        <input type="hidden" name="is_approved" value="0">

                            <div class="form-group">
                                {!! Form::submit('Unapprove', ['class'=>'btn btn-succes']) !!}
                            </div>
                            {!! Form::close() !!}
                    @else

                    {!! Form::open(['method'=>'PATCH','action'=>['AdminOrdersController@update',$order->id]]) !!}

                        <input type="hidden" name="is_approved" value="1">

                            <div class="form-group">
                                {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                            </div>
                            {!! Form::close() !!}


                    @endif


                </td>

                {{-- @if ($order->is_approved==1)
                    <td> Approved</td>
                @else
                    <td> Disapproved</td>
                @endif

                <td><a href="#" class="btn btn-primary">Approve</a></td>
                <td><a href="#" class="btn btn-danger">Disapprove</a></td> --}}

                <td>


                    {!! Form::open(['method'=>'DELETE','action'=>['AdminOrdersController@destroy',$order->id]]) !!}

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
