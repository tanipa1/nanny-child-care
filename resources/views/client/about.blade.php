@extends('Layouts.website')
@section('content')

<div class="about">
    <div class="header">
        <div class="overlay">
            <div class="flex-center flex-column">
                <h2>ABOUT US</h2>
                <h5>WE HAVE 25 YEARS EXERIENCE IN BABY CARE</h5>
            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>TEAM MEMBERS</h2>
                </div>
            </div>

            <div class="row flex-center">

                @foreach($members as $member)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card rounded-4">
                        <img src="{{url('')}}/website/images/team/{{$member->image}}" class="p-3 w-100 img-fluid">
                        <div class="card-body text-center">
                            <h5>{{$member->name}}</h5>
                            <p>{{$member->title}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 col-sm-6 col-lg-6">
                    <h5 class="fs-2 fw-bolder">Tania Ahmed Nipa,</h5> <p class="text-justify">the owner and founder of The Nanny, offers 10 years of proven expertise. From babysitter and mentor in his hometown outside of Philadelphia (Haddonfield, NJ), to studying Child Development & Psychology in college, childcare has long been an integral theme in his life. His path to creating The Nanny began after graduating Cum Laude from Syracuse University’s S.I. Newhouse School with a degree in Television, Radio & Film and Psychology. He started his career in entertainment as a Page at NBC Universal Burbank. He then went on to work directly within the company building relationships with filmmakers, relaying interview requests, coordinating travel, and handling talent. He provided a diverse range of public relations and marketing consultancy services for the Academy of Television Arts & Sciences, Humanitas and Special Events.  He acted as a show publicist, and assisted VP and Press Managers with administrative and operational responsibilities. Although his time working in the television and film industry was extraordinary, Lindsay decided to find his way back to his first love – working with children. </p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection