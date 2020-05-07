@extends('layouts.admin')



@section('content')

<h1>Board Orders</h1>
{{--

<div class="container" style="width: 100%">

    <table class="table table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name </th>
          <th>Last Name</th>
          <th>Phone Number</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>

    @if ($clients)
        @foreach ($clients as $client)

            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->first_name }}</td>
                <td>{{ $client->last_name }}</td>
                <td>{{ $client->phone_number }}</td>
                <td>{{ $client->email }}</td>
            </tr>
        @endforeach
    @endif


    </tbody>
    </table>
  </div>
 --}}



@endsection
