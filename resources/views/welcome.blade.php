
@extends('Layouts.website')
@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('website/images/slider/01.jpg')}}" class="w-100 img-fluid">
        </div>
        <div class="carousel-item">
            <img src="{{asset('website/images/slider/02.jpg')}}" class="w-100 img-fluid">
        </div>
        <div class="carousel-item">
            <img src="{{asset('website/images/slider/03.jpg')}}" class="w-100 img-fluid">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



@endsection