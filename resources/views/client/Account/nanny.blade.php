@extends('Layouts.account')
@section('content')
  

   



        <style>
            /***
                User Profile Sidebar by @keenthemes
                A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: https://j.mp/metronictheme
                Licensed under MIT
                ***/

            body {
                background: #F1F3FA;
            }

            /* Profile container */
            .profile {
                margin: 20px 0;
            }

            /* Profile sidebar */
            .profile-sidebar {
                padding: 20px 0 10px 0;
                background: #fff;
            }

            .profile-userpic img {
                float: none;
                margin: 0 auto;
                width: 50%;
                height: 50%;
                -webkit-border-radius: 50% !important;
                -moz-border-radius: 50% !important;
                border-radius: 50% !important;
            }

            .profile-usertitle {
                text-align: center;
                margin-top: 20px;
            }

            .profile-usertitle-name {
                color: #5a7391;
                font-size: 16px;
                font-weight: 600;
                margin-bottom: 7px;
            }

            .profile-usertitle-job {
                text-transform: uppercase;
                color: #5b9bd1;
                font-size: 12px;
                font-weight: 600;
                margin-bottom: 15px;
            }

            .profile-userbuttons {
                text-align: center;
                margin-top: 10px;
            }

            .profile-userbuttons .btn {
                text-transform: uppercase;
                font-size: 11px;
                font-weight: 600;
                padding: 6px 15px;
                margin-right: 5px;
            }

            .profile-userbuttons .btn:last-child {
                margin-right: 0px;
            }

            .profile-usermenu {
                margin-top: 30px;
            }

            .profile-usermenu ul li {
                border-bottom: 1px solid #f0f4f7;
            }

            .profile-usermenu ul li:last-child {
                border-bottom: none;
            }

            .profile-usermenu ul li a {
                color: #93a3b5;
                font-size: 14px;
                font-weight: 400;
            }

            .profile-usermenu ul li a i {
                margin-right: 8px;
                font-size: 14px;
            }

            .profile-usermenu ul li a:hover {
                background-color: #fafcfd;
                color: #5b9bd1;
            }

            .profile-usermenu ul li.active {
                border-bottom: none;
            }

            .profile-usermenu ul li.active a {
                color: #5b9bd1;
                background-color: #f6f9fb;
                border-left: 2px solid #5b9bd1;
                margin-left: -2px;
            }

            /* Profile Content */
            .profile-content {
                padding: 20px;
                background: #fff;
                min-height: 460px;
            }























            a,
            button,
            code,
            div,
            img,
            input,
            label,
            li,
            p,
            pre,
            select,
            span,
            svg,
            table,
            td,
            textarea,
            th,
            ul {
                -webkit-border-radius: 0 !important;
                -moz-border-radius: 0 !important;
                border-radius: 0 !important;
            }

            .dashboard-stat,
            .portlet {
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                -ms-border-radius: 4px;
                -o-border-radius: 4px;
            }

            .portlet {
                margin-top: 0;
                margin-bottom: 25px;
                padding: 0;
                border-radius: 4px;
            }

            .portlet.bordered {
                border-left: 2px solid #e6e9ec !important;
            }

            .portlet.light {
                padding: 12px 20px 15px;
                background-color: #fff;
            }

            .portlet.light.bordered {
                border: 1px solid #e7ecf1 !important;
            }

            .list-separated {
                margin-top: 10px;
                margin-bottom: 15px;
            }

            .profile-stat {
                padding-bottom: 20px;
                border-bottom: 1px solid #f0f4f7;
            }

            .profile-stat-title {
                color: #7f90a4;
                font-size: 25px;
                text-align: center;
            }

            .uppercase {
                text-transform: uppercase !important;
            }

            .profile-stat-text {
                color: #5b9bd1;
                font-size: 10px;
                font-weight: 600;
                text-align: center;
            }

            .profile-desc-title {
                color: #7f90a4;
                font-size: 17px;
                font-weight: 600;
            }

            .profile-desc-text {
                color: #7e8c9e;
                font-size: 14px;
            }

            .margin-top-20 {
                margin-top: 20px !important;
            }

            [class*=" fa-"]:not(.fa-stack),
            [class*=" glyphicon-"],
            [class*=" icon-"],
            [class^=fa-]:not(.fa-stack),
            [class^=glyphicon-],
            [class^=icon-] {
                display: inline-block;
                line-height: 14px;
                -webkit-font-smoothing: antialiased;
            }

            .profile-desc-link i {
                width: 22px;
                font-size: 19px;
                color: #abb6c4;
                margin-right: 5px;
            }
        </style>


        <!-- Upcoming -->
        <div class="container">
            @foreach ($nannies as $item)
            <div class="row profile">
                <div class="col-md-6">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic text-center">
                            <img src="{{url('')}}/website/images/nanny/{{$item->image}}" class="img-fluid" style="width: 150px;">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                {{ $item->name }}
                            </div>
                            <div class="profile-usertitle-job">
                                {{ $item->experience }} years+
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            @if ($item->user_id == null)
                            <a class="btn btn-success btn-sm" href="{{ url('nanny/hire', $item->id) }}">Hire</a>
                            @else 
                            <button type="button" class="btn btn-success btn-sm">Booked</button>
                            <a class="btn btn-danger btn-sm" href="{{ url('nanny/hire/cancel', $item->id) }}">Cancel</a>
                            
                            @endif
                            

                        </div>
                        <!-- END SIDEBAR BUTTONS -->

                        <div class="portlet light bordered">
                            <div>
                                <h4 class="profile-desc-title">About {{ $item->name }}</h4>
                                <span class="text-muted"> 
                                    <span class="">Email: {{ $item->email }}</span> <br>
                                    <span>Phone: {{ $item->phone }}</span>  <br>
                                    <span>Location: {{ $item->location }}</span> </span> 
                                <div class="margin-top-20 profile-desc-link" style="width:250px">
                                    <i class="fa fa-globe"></i>
                                    <a href="https://www.linkedin.com/feed/">{{ $item->linkdin }}</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link" style="width:250px">
                                    <i class="fa fa-globe"></i>
                                    <a href="https://www.instagram.com/">{{ $item->insta }}</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-globe"></i>
                                    <a href="https://www.facebook.com/">{{ $item->fb }}</a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            @endforeach
            
        </div>

@endsection