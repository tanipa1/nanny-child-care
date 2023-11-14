@extends('Layouts.admin')
@section('content')


<div class="row px-4">
    <div class="col-md-4">
        <h4>Order Info</h4>
        <hr>
        <p>
            <strong>Name:</strong>{{ $show->name }} <br>
            <strong>Phone:</strong>{{ $show->phone }} <br>
            <strong>Email:</strong>{{ $show->email }} <br>
            <strong>Location:</strong>{{ $show->location }} <br>
        </p>
    </div>
    <div class="col-md-4">
        <h4>Payment History</h4>
        <hr>
        <strong>Payment Type:</strong>{{ $show->payment_name }} <br>
        <strong>Payment Number:</strong>{{ $show->payment_number }} <br>
        <strong>Payment Transaction Id: </strong>{{ $show->payment_secret }} <br>
    </div>
    <div class="col-md-4">

        <h4>Details</h4>
        <hr>
        <strong>Comment:</strong>{{ $show->description }} <br>
    </div>
</div>


<h3 class="px-4">Nanny information</h3>
<table class="table text-center px-4">
    <thead>
      <tr>
        <th scope="col">Nanny Name</th>
        <th scope="col">User Phone</th>
        <th scope="col">User Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $show->nanny ? $show->nanny->name : "" }}</td>
            <td>{{ $show->nanny ? $show->nanny->phone : "" }}</td>
            <td>{{ $show->nanny ? $show->nanny->email : "" }}</td>
            <td><a href="{{ url('nanny', $show->nanny_id) }}">View</a></td>
        </tr>
    </tbody>
  </table>
</div>
@endsection