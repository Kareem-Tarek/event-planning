<!DOCTYPE html>
<html  @if(LaravelLocalization::getCurrentLocale() == 'ar') dir="rtl" @else dir="ltr" @endif>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('admin/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" type="image/x-icon">
    <title>{{auth()->user()->name}} - @lang('admin/home.edit_profile')</title>
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
                            @elseif(auth()->user()->user_type == 'supplier')
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
            @include('layouts.admin.partials.validation-errors')
            <div class="container-fluid">
                <div class="edit-profile">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">{{__('admin/user.my_profile')}}</h4>
                                    <div class="card-options">
                                        <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <div class="card-body" style="margin-top: 10%;">
                                    <form action="{{route('editProfile-post')}}" method="post">
                                        @csrf
                                        <div class="row mb-2">
                                            <div class="profile-title">
                                                <div class="media">
                                                    <img class="img-70 rounded-circle" alt="Avatar {{$model->name}}" src="{{$model->photo}}" />
                                                    <div class="media-body">
                                                        <h3 class="mb-1 f-20 txt-primary">{{$model->name}}</h3>
                                                        @if($model->user_type =='dashboard')
                                                            <p class="f-2">{{__('admin/home.admin_title')}}</p>
                                                        @else
                                                            <p class="f-2">{{$model->user_type}}</>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-5"><h5>{{__('admin/user.change_password')}}</h5></div>

                                        <div class="mb-3">
                                            <label class="form-label">{{__('admin/user.current_password')}}</label>
                                            <input class="form-control @error('current_password') is-invalid @enderror" name="current_password" type="password" placeholder="{{__('admin/user.enter_current_password')}}"/>
                                            @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">{{__('admin/user.new_password')}}</label>
                                            <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="{{__('admin/user.enter_password')}}"/>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">{{__('admin/user.confirm_new_password')}}</label>
                                            <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder="{{__('admin/user.enter_password_confirmation')}}"/>
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-footer">
                                            <button class="btn btn-primary btn-block" type="submit">{{__('admin/home.save')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <form action="{{route('editMyProfile')}}" method="post" class="card" files="true" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">{{__('admin/user.edit_profile')}}</h4>
                                    <div class="card-options">
                                        <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <div class="card-body" style="margin-top: 8%;">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('admin/user.name')}}</label>
                                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="{{__('admin/user.enter_full_name')}}" autocomplete="off" value="{{Request::old('name') ? Request::old('name') : $model->name}}"/>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('admin/user.username')}}</label>
                                                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="{{__('admin/user.enter_username')}}" autocomplete="off" value="{{Request::old('username') ? Request::old('username') : $model->username}}"/>
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('admin/user.phone')}}</label>
                                                <input class="form-control @error('phone') is-invalid @enderror" type="tel" name="phone" placeholder="{{__('admin/user.enter_phone')}}" autocomplete="off" value="{{Request::old('phone') ? Request::old('phone') : $model->phone}}"/>
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('admin/user.email')}}</label>
                                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="{{__('admin/user.enter_email')}}" autocomplete="off" value="{{Request::old('email') ? Request::old('email') : $model->email}}"/>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <label class="form-label">{{__('admin/user.gender')}}</label>
                                            <div class="form-group m-checkbox-inline custom-radio-ml">
                                                <div class="radio radio-primary">
                                                    <input id="radioinline1" type="radio" name="gender" {{ isset($model) && $model->gender == 'male' ? 'checked'  : '' }}  value="male">
                                                    <label class="mb-0" for="radioinline1">{{__('admin/user.male')}}</label>
                                                </div>
                                                <div class="radio radio-primary">
                                                    <input id="radioinline2" type="radio" name="gender" {{ isset($model) && $model->gender == 'female' ? 'checked'  : '' }} value="female">
                                                    <label class="mb-0" for="radioinline2">{{__('admin/user.female')}}</label>

                                                </div>

                                            </div>
                                            @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('admin/user.dob')}}</label>
                                                <input class="form-control @error('dob') is-invalid @enderror" type="date" name="dob" autocomplete="off" value="{{Request::old('dob') ? Request::old('dob') : $model->dob}}"/>
                                                @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('admin/user.address')}}</label>
                                                <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" placeholder="{{__('admin/user.enter_address')}}" autocomplete="off" value="{{Request::old('address') ? Request::old('address') : $model->address}}"/>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('admin/user.postal_code')}}</label>
                                                <input class="form-control @error('postal_code') is-invalid @enderror" type="number" name="postal_code" placeholder="{{__('admin/user.enter_postal_code')}}" autocomplete="off" value="{{Request::old('postal_code') ? Request::old('postal_code') : $model->postal_code}}"/>
                                                @error('postal_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('admin/user.state_province')}}</label>
                                                <input class="form-control @error('state_province') is-invalid @enderror" type="text" name="state_province" placeholder="{{__('admin/user.enter_state_province')}}" autocomplete="off" value="{{Request::old('state_province') ? Request::old('state_province') : $model->state_province}}"/>
                                                @error('state_province')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Country</label>
                                                @inject('countries','App\Models\Country')
                                                {!! Form::select('country_id',$countries->pluck('name','id'),Request::old('country_id') ? Request::old('country_id') : $model->country_id,[
                                                    'placeholder' => __('admin/home.select'),
                                                    'class'       => 'form-control select'. ( $errors->has('country_id') ? ' is-invalid' : '' )
                                                ]) !!}
                                                @error('country_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Governorate</label>
                                                @inject('governorate','App\Models\Governorate')
                                                {!! Form::select('governorate_id',$governorate->pluck('name','id'),Request::old('governorate_id') ? Request::old('governorate_id') : $model->governorate_id,[
                                                    'placeholder' => __('admin/home.select'),
                                                    'class'       => 'form-control select'. ( $errors->has('governorate_id') ? ' is-invalid' : '' )
                                                ]) !!}
                                                @error('governorate_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                @inject('cities','App\Models\City')
                                                {!! Form::select('city_id',$cities->pluck('name','id'),Request::old('city_id') ? Request::old('city_id') : $model->city_id,[
                                                    'placeholder' => __('admin/home.select'),
                                                    'class'       => 'form-control select'.( $errors->has('city_id') ? ' is-invalid' : '' )
                                                ]) !!}
                                                @error('city_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">{{__('admin/user.about_me')}}</label>
                                                <textarea class="form-control" rows="5" name="bio" placeholder="{{__('admin/user.enter_bio')}}">{{Request::old('bio') ? Request::old('bio') : $model->bio}}</textarea>
                                                @error('bio')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3 input-group-solid">
                                                <label class="form-label">{{__('admin/user.facebook')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="icofont icofont-social-facebook"></i></span>
                                                    <input class="form-control @error('facebook') is-invalid @enderror" type="text" name="facebook" placeholder="{{__('admin/user.enter_facebook')}}" autocomplete="off" value="{{Request::old('facebook') ? Request::old('facebook') : $model->facebook}}"/>
                                                    @error('facebook')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3 input-group-solid">
                                                <label class="form-label">{{__('admin/user.twitter')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="icofont icofont-social-twitter"></i></span>
                                                    <input class="form-control @error('twitter') is-invalid @enderror" type="text" name="twitter" placeholder="{{__('admin/user.enter_twitter')}}" autocomplete="off" value="{{Request::old('twitter') ? Request::old('twitter') : $model->twitter}}"/>
                                                    @error('twitter')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="mb-3 input-group-solid">
                                                <label class="form-label">{{__('admin/user.instagram')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="icofont icofont-social-instagram"></i></span>
                                                    <input class="form-control @error('instagram') is-invalid @enderror" type="text" name="instagram" placeholder="{{__('admin/user.enter_instagram')}}" autocomplete="off" value="{{Request::old('instagram') ? Request::old('instagram') : $model->instagram}}"/>
                                                    @error('instagram')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="mb-3 input-group-solid">
                                                <label class="form-label">{{__('admin/user.whatsApp')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="icofont icofont-social-whatsapp"></i></span>
                                                    <input class="form-control @error('whatsApp') is-invalid @enderror" type="tel" name="whatsApp" placeholder="{{__('admin/user.enter_whatsApp')}}" autocomplete="off" value="{{Request::old('whatsApp') ? Request::old('whatsApp') : $model->whatsApp}}"/>
                                                    @error('whatsApp')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="mb-3 input-group-solid">
                                                <label class="form-label">{{__('admin/user.telegram')}}</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="icofont icofont-social-telegram"></i></span>
                                                    <input class="form-control @error('telegram') is-invalid @enderror" type="text" name="telegram" placeholder="{{__('admin/user.enter_telegram')}}" autocomplete="off" value="{{Request::old('telegram') ? Request::old('telegram') : $model->telegram}}"/>
                                                    @error('telegram')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-6">
                                                <label class="form-label">{{__('admin/user.avatar')}}</label>
                                                <input class="form-control @error('avatar') is-invalid @enderror" type="file" name="avatar"/>
                                                @error('avatar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-6">
                                                <label class="form-label">{{__('admin/user.cover')}}</label>
                                                <input class="form-control @error('cover') is-invalid @enderror" type="file" name="cover"/>
                                                @error('cover')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">{{__('admin/user.update_profile')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Container-fluid Ends-->
{{--        </div>--}}

        <!-- footer start-->
        <footer class="footer" style="margin-left: auto; margin-right: auto;">
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


