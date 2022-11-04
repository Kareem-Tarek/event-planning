<!DOCTYPE html>
<html  @if(LaravelLocalization::getCurrentLocale() == 'ar') dir="rtl" @else dir="ltr" @endif>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('admin/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" type="image/x-icon">
    <title> {{$user->name}} - @lang('admin/home.profile')</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Harmattan&display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    @includeIf('layouts.admin.partials.css')
</head>
<body class="@if(LaravelLocalization::getCurrentLocale() == 'ar') rtl @else ltr @endif">
<div class="loader-wrapper">
    <div class="theme-loader"></div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-sidebar" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row m-0" style="background-color: #F7F7F7;">
            <div class="main-header-left">
                <div class="logo-wrapper"><a href="javascript:void(0)"><img class="img-fluid" src="{{asset('admin/images/logo/GDP-logo.jpg')}}" alt="GDP" style="width: 55%; border-radius:10px;"></a></div>
                {{-- <div class="dark-logo-wrapper"><a href="javascript:void(0)" style="color: snow; font-weight: bold;">Graduation Project 2 - AASTMT&#169;</a></div> --}}
                <div class="dark-logo-wrapper"><a href="javascript:void(0)"><img class="img-fluid" src="{{asset('admin/images/logo/GDP-logo.jpg')}}" alt="GDP" style="width: 55%; border-radius:10px;"></a></div>
            </div>
            
            <div class="nav-right col pull-right right-menu p-0">
    
                <ul class="nav-menus">
                    <li style="padding-right: 3%;">
                        {{-- <a class="text-dark btn btn-primary" href="{{ route('home') }}" style="background-color: grey; padding: 3%; width: 120%; border-radius: 6px; box-shadow: 5px 6px;">
                            Back to the Website
                        </a> --}}

                        <li><a href="{{route('home')}}" style="color: rgb(0, 0, 0);">{{__('website/home.home')}}</a></li>
                        @auth
                            @if(auth()->user()->user_type == 'customer')
                                    <li class="onhover-dropdown" style="cursor: context-menu;">
                                        <div class="notification-box" style="color: #C8A17D; font-weight: bold;">{{__('website/home.events')}}<i data-feather="chevron-down"></i></div>
                                        <ul class="notification-dropdown onhover-show-div">

                                            <li class="noti-secondary">
                                                <div class="media">
                                                    <a href="{{route('myEvents')}}">
                                                        <div class="media-body" style="color: rgb(0, 0, 0);">
                                                            {{__('admin/home.my_events')}}
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                    
                                            <li class="noti-secondary">
                                                <div class="media">
                                                    <a href="{{route('allEvents')}}">
                                                        <div class="media-body" style="color: rgb(0, 0, 0);">
                                                            {{__('admin/home.other_events')}}
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="noti-secondary">
                                                <div class="media">
                                                    <a href="{{route('event.create')}}">
                                                        <div class="media-body" style="color: rgb(0, 0, 0);">
                                                            {{__('admin/home.request_an_event')}}
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                            @elseif(auth()->user()->user_type == 'supplier' || auth()->user()->user_type == 'dashboard') <!-- dashboard (admin) is supposed to be disabled -->
                                <li>
                                    <a class="menu-component-item" href="{{route('allEvents')}}" style="color: rgb(0, 0, 0);">{{__('website/home.events')}}</a>
                                </li>
                            @endif
                            {{-- @else
                                <li>
                                    <a class="menu-component-item" href="{{route('allEvents')}}">{{__('website/home.events')}}</a>
                                </li> --}}
                        @endauth
                    </li>

                    <li><a href="https://events.dev/en#suppliers-services-home-page" style="color: rgb(0, 0, 0);">{{__('website/home.categories')}}</a></li>
                    
                    <li><a href="{{route('about-us')}}" style="color: rgb(0, 0, 0);">{{__('website/home.about_us')}}</a></li>
                    
                    <li><a href="{{route('contact-us')}}" style="color: rgb(0, 0, 0);">{{__('website/home.contact_us')}}</a></li>
                    
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
    
                    <li class="onhover-dropdown" style="cursor: context-menu;">
                        <div class="notification-box"><i data-feather="flag"></i></div>
                        <ul class="notification-dropdown onhover-show-div">
    
                            <li class="noti-secondary">
                                <div class="media">
                                    <span class="notification-bg"><i class="flag-icon flag-icon-eg"></i></span>
                                    <a href="{{url('https://events.dev/ar/profile')}}">
                                        <div class="media-body" style="color: rgb(0, 0, 0);">
                                            {{__('admin/home.arabic')}}
                                        </div>
                                    </a>
                                </div>
                            </li>
    
                            <li class="noti-secondary">
                                <div class="media">
                                    <span class="notification-bg"><i class="flag-icon flag-icon-us"> </i></span>
                                    <a href="{{url('https://events.dev/en/profile')}}">
                                        <div class="media-body" style="color: rgb(0, 0, 0);">
                                            {{__('admin/home.english')}}
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="noti-secondary">
                                <div class="media">
                                    <span class="notification-bg"><i class="flag-icon flag-icon-fr"> </i></span>
                                    <a href="{{url('https://events.dev/fr/profile/')}}">
                                    <div class="media-body" style="color: rgb(0, 0, 0);">
                                            {{__('admin/home.french')}}
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
    
                    <li class="onhover-dropdown p-0">
                        <button class="btn btn-primary-light" type="button" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>{{__('admin/home.logout')}}</button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
    
            <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
    </div>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
    <!-- Page Sidebar Ends-->
{{--        <div class="page-body">--}}
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="user-profile">
                    <div class="row">
                        <!-- user users header start-->
                        <div class="col-sm-12">
                            <div class="card profile-header">
                                <img class="img-fluid bg-img-cover" src="{{$user->getFirstMediaUrl('cover')}}" alt="cover {{$user->name}}" />
                                <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="{{$user->getFirstMediaUrl('cover')}}" alt="cover {{$user->name}}" /></div>
                                <div class="userpro-box" style="padding-top: 8%;">
                                    <div class="img-wrraper">
                                        <div class="avatar"><img class="img-fluid" alt="{{$user->name}}" src="{{$user->photo}}" /></div>
                                        <a class="icon-wrapper" href="{{route('editProfile')}}"><i class="icofont icofont-pencil-alt-5"></i></a>
                                    </div>
                                    <div class="user-designation">
                                        <div class="title">
                                            <a target="_blank" href="javascript:void(0);" style="cursor: context-menu">
                                                <h4>{{$user->name}}</h4>
                                                @if($user->user_type =='dashboard')
                                                    <h6>{{__('admin/home.admin_title')}}</h6>
                                                @else
                                                    <h6>{{$user->user_type}}</h6>
                                                @endif
                                            </a>
                                        </div>
                                        <div class="social-media">
                                            <ul class="user-list-social">
                                                <li>
                                                    <a href="https://facebook.com/{{$user->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/{{$user->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://instagram.com/{{$user->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://whatsapp.com/{{$user->whatsapp}}" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://t.me/{{$user->telegram}}" target="_blank"><i class="fa fa-telegram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- user users header end-->
                        <div class="col-xl-3 col-lg-12 col-md-5 xl-35">
                            <div class="default-according style-1 faq-accordion job-accordion">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="p-0">
                                                    <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">{{__('admin/user.about_me')}}</button>
                                                </h5>
                                            </div>
                                            <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2" data-parent="#accordion">
                                                <div class="card-body post-about">
                                                    <ul>
                                                        <li>
                                                            <div class="icon"><i data-feather="at-sign"></i></div>
                                                            <div>
                                                                <h5>{{$user->username ?? __('admin/home.alertUsername')}}</h5>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i data-feather="mail"></i>
                                                            </div>
                                                            <div>
                                                                <h5>{{$user->email ?? __('admin/home.alertEmail')}}</h5>
                                                            </div>
                                                        </li>

                                                        <li>
                                                            <div class="icon"><i data-feather="map-pin"></i></div>
                                                            <div>
                                                                <h5>{{$user->address ?? __('admin/home.alertLocation')}}</h5>
                                                                <p>{{$user->city->name ?? ''}} - {{$user->governorate->name ?? ''}} - {{$user->country->name ?? ''}}</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon"><i class="icofont icofont-air-balloon"></i></div>
                                                            <div>
                                                                <h5>{{$user->dob}}</h5>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            @if($user->gender == 'male')
                                                                <div class="icon"><i class="fa fa-male"></i></div>
                                                            @else
                                                                <div class="icon"><i class="fa fa-venus"></i></div>
                                                            @endif
                                                            <div>
                                                                <h5>{{$user->gender ?? __('admin/home.alertGender')}}</h5>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($user->user_type == 'customer')
                            <div class="col-xl-9 col-lg-12 col-md-7 xl-65">
                                <div class="card">
                                    <div class="card-body">
                                    @forelse($events as $event)
                                        <!-- event start-->
                                        <div class="col-xxl-12 col-lg-12">
                                            <div class="project-box">
                                                @if($event->status == 'Stopped')
                                                    <span class="badge badge-danger">{{__('admin/home.stopped_pending')}}</span>
                                                @elseif($event->status == 'Available')
                                                    <span class="badge badge-success" style="color:bisque;">{{__('admin/home.available_active')}}</span>
                                                @elseif($event->status == 'Expired')
                                                    <span class="badge badge-dark">{{__('admin/home.expired_paid')}}</span>
                                                @endif
                                                <h6>{{$event->title}}</h6>
                                                <div class="media">
                                                    <img class="img-20 me-2 rounded-circle" src="{{$offer->user->photo ?? ''}}" alt="{{$offer->user->name ?? ''}}" data-original-title="" title="" />
                                                    <div class="media-body">
                                                        <p>{{$event->user->name ?? ''}}</p>
                                                    </div>
                                                </div>
                                                <p>{!! Illuminate\Support\Str::limit($event->description,'70','...') !!}</p>
                                                <div class="row details">
                                                    <div class="col-6"><span>{{__('admin/event.time')}}</span></div>
                                                    <div class="col-6 font-secondary">{{$event->time}}</div>
                                                    <div class="col-6"><span>{{__('admin/event.date')}}</span></div>
                                                    <div class="col-6 font-secondary">{{$event->date}}</div>
                                                    <div class="col-6"><span>{{__('admin/event.budget')}}</span></div>
                                                    <div class="col-6 font-danger">{{$event->budget}} {{__('admin/home.currency')}}</div>
                                                </div>
                                            </div>
                                        </div><!-- event end-->
                                        @empty
                                            <div class="alert alert-secondary">
                                                {{__('admin/home.alert_no_data')}}
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($user->user_type == 'supplier')
                        <div class="col-xl-9 col-lg-12 col-md-7 xl-65">
                            <div class="card">
                                <div class="card-body">
                                @forelse($offers as $offer)
                                <!-- event start-->
                                    <div class="col-xxl-12 col-lg-12">
                                        <div class="project-box">
                                            @if($offer->value == 0)
                                                <span class="badge badge-danger">{{__('website/home.is_paid_pending')}}</span>
                                            @elseif($offer->value == 1)
                                                <span class="badge badge-success" style="color:bisque;">{{__('website/home.is_paid_success')}}</span>
                                            @endif
                                            <h6>{{__('website/home.offers')}}</h6>
                                            <div class="media">
                                                <img class="img-20 me-2 rounded-circle" src="{{$offer->user->photo ?? ''}}" alt="{{$offer->user->name ?? ''}}" data-original-title="" title="" />
                                                <div class="media-body">
                                                    <p>{{$offer->user->name ?? ''}}</p>
                                                </div>
                                            </div>
                                            <p>{{$offer->body}}</p>
                                            <div class="row details">
                                                <div class="col-6"><span>{{__('admin/event.date')}}</span></div>
                                                <div class="col-6 font-secondary">{{$offer->created_at}}</div>
                                                <div class="col-6"><span>{{__('admin/event.budget')}}</span></div>
                                                <div class="col-6 font-danger">{{$offer->value}} {{__('admin/home.currency')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- event end-->
                                    @empty
                                        <div class="alert alert-secondary">
                                            {{__('admin/home.alert_no_data')}}
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        <!-- Container-fluid Ends-->
{{--        </div>--}}

        <!-- footer start-->
        <footer class="footer" style="margin-left: auto; margin-right:auto">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright {{date('Y')}}-{{date('y', strtotime('+1 year'))}} © viho All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- latest jquery-->
@includeIf('layouts.admin.partials.js')
<script>
    $(document).ready(function(){
        var form = $('#alert-form'),
            original = form.serialize()

        form.submit(function(){
            window.onbeforeunload = null
        })

        window.onbeforeunload = function(){
            if (form.serialize() != original)
                return '{{__('admin/home.alert_form')}}'
        }
    })

    var toggle_icon = document.getElementById('dark-only');
    var body = document.getElementsByTagName('body')[0];
    var dark_theme_class = 'dark-only';

    toggle_icon.addEventListener('click', function() {
        if (body.classList.contains(dark_theme_class)) {

            body.classList.remove(dark_theme_class);

            setCookie('theme', 'empty');

        } else {
            body.classList.add(dark_theme_class);

            setCookie('theme', 'dark-only');

        }
    });

    function setCookie(name, value) {
        var d = new Date();
        d.setTime(d.getTime() + (365*24*60*60*1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

</script>
</body>
</html>







