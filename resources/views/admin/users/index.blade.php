@extends('layouts.admin')



@section('content')

<h1>Staff Information</h1>

<div class="container" style="width: 100%">

    <table class="table table-hover table-bordered table-responsive">
      <thead>
        <tr>
          <th>ID</th>
          <th>Role </th>
          <th>Username</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>

    @if ($staffs)
        @foreach ($staffs as $staff)
            @if ($staff->role_id!==8)

            <tr>
                <td>{{ $staff->id }}</td>

                @switch($staff->role_id)
                    @case(1)
                    <td> admin </td>
                        @break
                    @case(2)
                    <td> owner </td>
                        @break
                    @case(3)
                    <td> manager </td>
                        @break
                    @case(4)
                    <td> cheff-cooker </td>
                        @break
                    @case(5)
                    <td> editor </td>
                        @break
                    @case(6)
                    <td> accountant </td>
                        @break
                    @case(7)
                    <td> waiter </td>
                        @break
                    @case(8)
                    <td> client </td>
                        @break
                    @default

                @endswitch

                <td>{{ $staff->username }}</td>
                <td>{{ $staff->first_name }}</td>
                <td>{{ $staff->last_name }}</td>
                <td>{{ $staff->phone_number }}</td>
                <td>{{ $staff->email }}</td>
                <td><a href="{{ route('users.edit',$staff->id) }}" class="btn btn-primary">Edit</a></td>
                <td><a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            @endif
        @endforeach
    @endif


    </tbody>
    </table>
  </div>




@endsection
