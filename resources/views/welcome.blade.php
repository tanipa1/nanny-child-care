
@extends('Layouts.website')
@section('content')

<div class="welcome">

<!-- Slider -->
    <div id="carouselExampleControls" class="container pt-2 carousel slide" data-ride="carousel">
        <div class="carousel-inner" style=" height: 428px !important;">
            @foreach($banners as $key => $banner)
            <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                <img src="{{url('')}}/website/images/banners/{{$banner->banner_image}}" class="w-100 img-fluid">
            </div>
            @endforeach
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

    <!-- Description -->
    <div class="description">
        <div class="container">

            <!-- Education -->
            <div class="row mb-4 mb-lg-5">
                <div class="col-12 col-lg-5 text-center d-lg-none">
                    <img src="{{asset('website/images/static/reading.png')}}" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 pt-lg-5 pr-lg-5 text-center text-lg-left">
                    <h2>Baby Education</h2>
                    <p>Baby education refers to the process of stimulating and promoting the development of a baby's physical, cognitive, social, and emotional abilities during the first few years of their life. This typically involves providing babies with age-appropriate sensory experiences, language exposure, and opportunities for exploration and play. The goal of baby education is to support the healthy growth and development of a child's brain and lay the foundation for future learning and success.</p>
                </div>
                <div class="col-12 col-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('website/images/static/reading.png')}}" class="img-fluid">
                </div>
            </div>

            <!-- Medical -->
            <div class="row mb-4 mb-lg-5">
                <div class="col-12 col-lg-5 text-center">
                    <img src="{{asset('website/images/static/medical.png')}}" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 pt-lg-5 pl-lg-5 text-center text-lg-right">
                    <h2>Baby Medicine</h2>
                    <p>Baby medicine refers to the medical care and treatment provided to infants and young children to promote their health and well-being. This may include preventative measures such as vaccinations, routine check-ups, and monitoring of developmental milestones, as well as diagnosis and treatment of illnesses or medical conditions. Baby medicine may involve a range of healthcare professionals such as pediatricians, nurses, and other specialists who are trained to provide specialized care for babies and young children. The goal of baby medicine is to ensure that infants receive the best possible care and support for their overall health and development.</p>
                </div>
            </div>

            <!-- Food -->
            <div class="row mb-4 mb-lg-5">
                <div class="col-12 col-lg-5 text-center d-lg-none">
                    <img src="{{asset('website/images/static/eating.png')}}" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 pt-lg-5 pr-lg-5 text-center text-lg-left">
                    <h2>Baby Food</h2>
                    <p>Baby food refers to the specially prepared foods and beverages designed for infants and young children who are transitioning from breast milk or formula to solid foods. Baby food is typically pureed or mashed to make it easier for babies to swallow and digest, and it may come in a variety of flavors and textures to provide a balanced and nutritious diet. Baby food may be made at home using fresh ingredients, or it may be commercially produced and sold in jars or pouches. The composition of baby food is carefully regulated to ensure that it meets the nutritional needs of growing infants and young children. The introduction of solid foods is an important milestone in a baby's development and helps to support their overall health and growth.</p>
                </div>
                <div class="col-12 col-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('website/images/static/eating.png')}}" class="img-fluid">
                </div>
            </div>

        </div>
    </div>

    <!-- Gallery -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Photo Gallery</h2>
                </div>

                <div class="col-12 p-0">

                    @foreach($photos as $photo)
                    <div class="card  border-0 rounded-0 photo-card">
                        <img src="{{url('')}}/website/images/gallery/{{$photo->image}}" class="p-1 rounded-2 img-fluid">
                        <div class="overlay">
                            <div class="flex-center flex-column text-center">
                                <p class="mb-0">{{$photo->title}}</p>
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