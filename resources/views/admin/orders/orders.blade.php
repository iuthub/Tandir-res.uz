@extends('layouts.admin')



@section('content')

<h1>Orders</h1>

<div class="container" style="width: 100%">

    <table class="table table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>ID</th>
          <th>Client ID </th>
          <th>IS Approved</th>
          <th>Approved By</th>
          <th>Date</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <tbody>

    @if ($orders)
        @foreach ($orders as $order)

            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->client_id }}</td>
                <td>{{ $order->is_approved }}</td>
                <td>{{ $order->approved_by }}</td>
                <td>{{ $order->date }}</td>
                <td>{{ $order->total_price }}</td>
            </tr>
        @endforeach
    @endif


    </tbody>
    </table>
  </div>




@endsection
