@extends('Layouts.website')
@section('content')
<section class="container card my-4 p-4" >
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card" style="width: 17rem;">
                    <img src="{{ url('') }}/website/images/nanny/{{ $item->image }}" width="100%"
                        height="200px" class="">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ url('nanny', $item->id) }}">{{ $item->name }}</a>
                        </h5>
                        <p class="card-text d-flex justify-content-between">
                            <span>{{ $item->age }}Year</span>
                            @if ($item->user_id == null)
                                <a class="btn btn-success btn-sm"
                                    href="{{ url('nanny/hire', $item->id) }}">Hire</a>
                            @else
                                <button type="button" class="btn btn-danger btn-sm">Booked</button>
                            @endif
                            <span>{{ $item->experience }}Exp</span>
                        </p>


                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="row justify-content-center desing">
                    <div class="col-md-12">
                        <p style="color: #EA2027"class="h3 ">
                           [NB]: We Accept Cash-Out Only. This Number is Agent [Bkash, Rocket, Nogod] 01855860386 and Send Your Transaction Id.  
                        </p>
                        <h2 class="text-center">Checkout Form</h2>
                        <form class="form-group" action="{{ url('payment/store', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label style="font-weight: bold" for="">Enter Your Name *</label>
                                <input type="text" placeholder="Enter Your Name" name="name" class="form-control my-2 " value="{{Auth::user()->name}}"  id="" required>
                            </div>
                            <div class="row form-gorup">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label style="font-weight: bold"  for="">Enter Your Email *</label>
                                        <input type="email" name="email" class="form-control my-2" placeholder="Enter Your Email" value="{{Auth::user()->email}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label style="font-weight: bold"  for="">Enter Your Phone *</label>
                                        <input type="number" name="phone" class="form-control my-2" placeholder="Enter Your Phone" value="{{ Auth::user()->phone }}" required>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label style="font-weight: bold"  for="">Enter Your Location *</label>
                                <input type="text" placeholder="Enter Your Location" name="location" class="form-control my-2" value="" id="" required>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-weight: bold"  for="">Select Your Payment</label>
                                        <select class="form-control my-2" name="payment_name" id="">
                                            <option value="disable">Select Your Payment Method</option>
                                            <option value="bkash"> Bkash </option>
                                            <option value="rocket"> Rocket </option>
                                            <option value="nogod"> Nogod </option>
                                        </select>
                                    </div>
                                </div>
            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-weight: bold"  for="">Enter Your Payment Number *</label>
                                        <input type="number" placeholder="Enter Your Number" name="payment_number" class="form-control my-2" value="" id="" required>
                                    </div>
                                </div>
            
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-weight: bold"  for="">Enter Your Payment Transaction Id*</label>
                                        <input type="text" placeholder="Enter Your Transaction Id" name="payment_secret" class="form-control my-2" value="" id="" required>
                                    </div>
                                </div>
                            </div>
                                   
                               <div class="form-group">
                                    <label style="font-weight: bold"  for="">Description *</label>
                                    <textarea name="description" placeholder="Enter Your Description" class="form-control my-2" id="" cols="10" rows="5"></textarea>
                                </div>
                                <div class="text-center my-3">
                                    <input style="background-color:#2e86de" type="submit" class="btn btn-lg text-light" name="btn" value="Submit" id="">
                                </div>
            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    


</section>

@endsection