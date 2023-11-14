@extends('Layouts.website')
@section('content')
    <div class="services">
        <div class="header">
            <div class="overlay">
                <div class="flex-center flex-column">
                    <h2>OUR Nanny</h2>
                    <h5>WE HAVE 25 YEARS EXERIENCE IN BABY CARE</h5>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="container">

                <!-- Upcoming -->
                <div class="container">
                    <div class="row">
                        @foreach ($nannies as $item)
                            <div class="col-md-3 col-lg-3 col-sm-12">

                            
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
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
