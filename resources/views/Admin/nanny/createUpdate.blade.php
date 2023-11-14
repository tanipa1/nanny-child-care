
@extends('Layouts.admin')
@section('content')

<div class="container-fluid px-lg-4">
    <div class="row">

        <div class="col-12 my-3">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h5 class="mb-0 mt-2 text-dark"><b>Make new Nanny</b></h5>
                        </div>
                        <div class="ml-auto">
                            <a href="{{url('admin/nanny')}}" class="btn btn-info rounded-0 shadow-none text-white"><i class="fas fa-chevron-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="row">
                <div class="col-12">
                    @if(Session::has('success'))
                        <p class="text-success mb-0">{{Session::get('success')}}</p>
                    @endif
                    @if (@$edit)
                    <form action="{{url('admin/nanny/update', @$edit->id)}}" method="post" enctype="multipart/form-data">
                        @else    
                        <form action="{{url('admin/nanny/store')}}" method="post" enctype="multipart/form-data">
                        @endif
                    
                        @csrf
                        <!-- Name -->
                        <div class="form-group mb-3">
                            @if($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @else
                                <small class="text-muted">Name</small>
                            @endif
                            <input value="{{ @$edit->name }}" type="text" class="form-control form-control-lg rounded-0 shadow-none" name="name" placeholder="Enter name">
                        </div>


                        <!-- email -->
                        <div class="form-group mb-3">
                            @if($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @else
                                <small class="text-muted">Email</small>
                            @endif
                            <input value="{{ @$edit->email }}" type="text" class="form-control form-control-lg rounded-0 shadow-none" name="email" placeholder="Enter email">
                        </div>

                        <!-- Phone -->
                        <div class="form-group mb-3">
                            @if($errors->has('Phone'))
                                <small class="text-danger">{{ $errors->first('phone') }}</small>
                            @else
                                <small class="text-muted">Phone</small>
                            @endif
                            <input value="{{ @$edit->phone }}" type="text" class="form-control form-control-lg rounded-0 shadow-none" name="phone" placeholder="Enter phone number">
                        </div>

                        <!-- location -->
                        <div class="form-group mb-3">
                            @if($errors->has('location'))
                                <small class="text-danger">{{ $errors->first('location') }}</small>
                            @else
                                <small class="text-muted">location</small>
                            @endif
                            <input value="{{ @$edit->location }}" type="text" class="form-control form-control-lg rounded-0 shadow-none" name="location" placeholder="Enter location">
                        </div>

                        <!-- fb -->
                        <div class="form-group mb-3">
                            @if($errors->has('facebook'))
                                <small class="text-danger">{{ $errors->first('facebook') }}</small>
                            @else
                                <small class="text-muted">Facebook</small>
                            @endif
                            <input value="{{ @$edit->fb }}" type="text" class="form-control form-control-lg rounded-0 shadow-none" name="fb" placeholder="Enter facebook">
                        </div>

                        <!-- insta -->
                        <div class="form-group mb-3">
                            @if($errors->has('insta'))
                                <small class="text-danger">{{ $errors->first('insta') }}</small>
                            @else
                                <small class="text-muted">Instagram</small>
                            @endif
                            <input value="{{ @$edit->insta }}" type="text" class="form-control form-control-lg rounded-0 shadow-none" name="insta" placeholder="Enter instagrap">
                        </div>

                        <!-- linkdin -->
                        <div class="form-group mb-3">
                            @if($errors->has('linkdin'))
                                <small class="text-danger">{{ $errors->first('linkdin') }}</small>
                            @else
                                <small class="text-muted">Linkdin</small>
                            @endif
                            <input value="{{ @$edit->linkdin }}" type="text" class="form-control form-control-lg rounded-0 shadow-none" name="linkdin" placeholder="Enter linkdin">
                        </div>

                         <!-- age -->
                         <div class="form-group mb-3">
                            @if($errors->has('age'))
                                <small class="text-danger">{{ $errors->first('age') }}</small>
                            @else
                                <small class="text-muted">age</small>
                            @endif
                            <input value="{{ @$edit->age }}" type="text" class="form-control form-control-lg rounded-0 shadow-none" name="age" placeholder="Enter age">
                        </div>

                         <!-- age -->
                         <div class="form-group mb-3">
                            @if($errors->has('experience'))
                                <small class="text-danger">{{ $errors->first('experience') }}</small>
                            @else
                                <small class="text-muted">Experience</small>
                            @endif
                            <input value="{{ @$edit->experience }}" type="text" class="form-control form-control-lg rounded-0 shadow-none" name="experience" placeholder="Enter experience">
                        </div>


                        <!-- image -->
                        <div class="form-group mb-3">
                            @if($errors->has('image'))
                                <small class="text-danger">{{ $errors->first('image') }}</small>
                            @else
                                <small class="text-muted">Image</small>
                            @endif
                            <br>
                            <input  type="file" name="image">
                        </div>

                        <button type="submit" class="btn btn-lg btn-primary rounded-0 shadow-none float-right text-white px-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection