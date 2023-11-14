@extends('Layouts.account')
@section('content')
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Indexing</th>
            <th scope="col">Nanny Name</th>
            <th scope="col">User Name</th>
            <th scope="col">User Phone</th>
            <th scope="col">User Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($payments as $item)
            <tr>
                <th scope="row">{{ $loop->index +1 }}</th>
                <td>{{ $item->nanny ?$item->nanny->name : "" }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ url('payment', $item->id) }}">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

@endsection 