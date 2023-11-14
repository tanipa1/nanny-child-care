
@extends('Layouts.admin')
@section('content')

<div class="container-fluid px-lg-4">
    <div class="row">

        <div class="col-12 my-3">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h5 class="mb-0 mt-2 text-dark"><b>Nanny List</b></h5>
                        </div>
                        <div class="ml-auto">
                            <a href="{{url('admin/nanny/create')}}" class="btn btn-info rounded-0 shadow-none text-white"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mb-4">
            <table class="table table-bordered table-responsive-md">
                <thead>
                    <tr>
                        <td><p class="mb-0 text-dark"><b>SL</b></p></td>
                        <td class="text-center"><p class="mb-0 text-dark"><b>Image</b></p></td>
                        <td><p class="mb-0 text-dark"><b>Name</b></p></td>
                        <td><p class="mb-0 text-dark"><b>Phone</b></p></td>
                        <td class="text-center"><p class="mb-0 text-dark"><b>Action</b></p></td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($nannies as $item)
                    <tr>
                        <td><p class="mb-0 text-dark"><b>{{$loop->index + 1}}</b></p></td>
                        <td class="text-center">
                            <img src="{{url('')}}/website/images/nanny/{{$item->image}}" class="img-fluid" style="width: 150px;">
                        </td>
                        <td><p class="mb-0 text-dark"><b>{{$item->name}}</b></p></td>
                        <td><p class="mb-0 text-dark">{{$item->phone}}</p></td>
                        <td class="text-center">
                            <a href="{{ url('admin/nanny/edit', $item->id) }}">Edit</a>
                            <a href="{{ url('admin/nanny/delete', $item->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>
</div>

@endsection