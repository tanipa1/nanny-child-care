@extends('Layouts.website')
@section('content')

<div class="services">
    <div class="header">
        <div class="overlay">
            <div class="flex-center flex-column">
                <h2>OUR SERVICES</h2>
                <h5>WE HAVE 25 YEARS EXERIENCE IN BABY CARE</h5>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>WE PROVIDE</h2>
                </div>
            </div>


            <!-- Services -->
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{asset('website/images/services/01.jpg')}}" class="img-fluid w-100">
                        <div class="card-body">
                            <h5>child care</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur doloribus commodi itaque recusandae aliquam quisquam asperiores, consequatur id suscipit?</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{asset('website/images/services/02.jpg')}}" class="img-fluid w-100">
                        <div class="card-body">
                            <h5>child care</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur doloribus commodi itaque recusandae aliquam quisquam asperiores, consequatur id suscipit?</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{asset('website/images/services/03.jpg')}}" class="img-fluid w-100">
                        <div class="card-body">
                            <h5>child care</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur doloribus commodi itaque recusandae aliquam quisquam asperiores, consequatur id suscipit?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="row my-5 py-5 bg-light">
                <div class="col-12 col-lg-9 text-center text-lg-left mb-4 mb-lg-0">
                    <h5 class="mb-4">Call us today at +8801354702974 or Email us at example@gmail.com</h5>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, soluta.</p>
                </div>
                <div class="col-12 col-lg-3 text-center">
                    <a href="{{url('/contact-us')}}" type="button" class="btn btn-info shadow-none text-white px-3">Contact Us</a>
                </div>
            </div>


            <!-- Upcoming -->
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h2>UPCOMING SERVICES</h2>
                </div>


                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{asset('website/images/services/01.jpg')}}" class="img-fluid w-100">
                        <div class="card-body">
                            <h5>child care</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur doloribus commodi itaque recusandae aliquam quisquam asperiores, consequatur id suscipit?</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{asset('website/images/services/02.jpg')}}" class="img-fluid w-100">
                        <div class="card-body">
                            <h5>child care</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur doloribus commodi itaque recusandae aliquam quisquam asperiores, consequatur id suscipit?</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{asset('website/images/services/03.jpg')}}" class="img-fluid w-100">
                        <div class="card-body">
                            <h5>child care</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consectetur doloribus commodi itaque recusandae aliquam quisquam asperiores, consequatur id suscipit?</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection