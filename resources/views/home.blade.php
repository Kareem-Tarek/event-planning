@extends('layouts.website.master')

@section('title')
   - @lang('website/home.home')
@endsection

@section('content')
<div class="content-wrapper">


    <!-- Start Main Slider -->
    <div class="crumina-module crumina-module-slider container-full-width">
        <div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade" style="cursor: grabbing; background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url({{asset('website/img/catering-2.jpg')}}); background-repeat: no-repeat; background-size: 100% 100%;">
            <div class="swiper-wrapper">
                <div class="swiper-slide main-slider-bg-light">
                    <div class="container table">
                        <div class="row table-cell">
                            <div class="first-main-slider-show col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12" style=" padding: 3%; padding-bottom:0.5%;">
                                <div class="slider-content align-center">
                                    <h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
                                        <span style="color: #F89522; font-size:50px;">{{__('admin/home.home_page_title')}}</span>
                                    </h1>
                                    <h6 class="slider-content-text" data-swiper-parallax="-200">
                                        <div><h5 style=" font-size:30px; font-weight: bold; color: #FFFEF7; cursor: context-menu;">Getting Day Planned (GDP)</h5></div>
                                        <span style="color: #FFFEF7; font-size:20px;">{{__('admin/home.home_page_content')}}</span>
                                    </h6>

                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">
                                        <a onmouseover="this.style.background='#6D4A23'" onmouseout="this.style.background='#F89522'" href="#" class="btn btn--with-shadow" style="background-color:#F89522; color:#FFFEF7;">{{__('admin/home.home_page_learn-more')}}</a>
                                        <a href="{{route('allContributions')}}" class="contribution-button btn btn-border btn--with-shadow" style="border-color:#F89522; color: #F89522; text-decoration:bold;">{{__('website/home.contributions')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide main-slider-bg-light" style="background-color: rgb(238, 247, 214); background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url({{asset('website/img/friends-2.jpg')}}); background-repeat: no-repeat; background-size: 100% 100%;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide main-slider-bg-light">

                            <div class="container table">
                                <div class="row table-cell">

                                    <div class="first-main-slider-show col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12" style=" padding: 3%; padding-bottom:0.5%;">

                                        <div class="slider-content align-center">

                                            <h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
                                                <span style="color: #F89522; font-size:60px;">Let us help</span><br>
                                                <span style="color: #FFFEF7; font-size:60px;">You Create</span>
                                            </h1>

                                            <h6 class="slider-content-text" data-swiper-parallax="-200">
                                                <span style=" color: #FFFEF7; font-size:20px;">Planning a Wedding, Proposal, or Event in our busy city is not easy, and it takes skills "and time" to make it all look easy-going</span>
                                            </h6>

                                            <div class="main-slider-btn-wrap" data-swiper-parallax="-300">
                                                <a href="https://events.dev/en#suppliers-services-home-page" class="btn btn--with-shadow" style="background-color:#F89522; color:#FFFEF7;" onmouseover="this.style.background='#6D4A23'" onmouseout="this.style.background='#F89522'">
                                                    Check our categories
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide thumb-left main-slider-bg-light" style="background-color: rgb(238, 247, 214); background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url({{asset('website/img/sparks2.jpg')}}); background-repeat: no-repeat; background-size: 100% 100%;">

                    <div class="container table full-height">
                        <div class="row table-cell">
                            <div class="col-lg-6 col-sm-12 table-cell">

                                <div class="slider-content align-both">
                                    <h2 class="slider-content-title" data-swiper-parallax="-100" style="color: #F89522;">{{__('admin/home.home_page_title3')}}</h2>
                                    <h6 class="slider-content-text" data-swiper-parallax="-200" style="color: #FFFEF7;">{{__('admin/home.home_page_content3')}}</h6>
                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300"><a onmouseover="this.style.backgroundColor ='6D4A23'" onmouseout="this.style.backgroundColor ='F89522'" href="https://events.dev/en#suppliers-services-home-page" class="btn btn--lime btn--with-shadow" style="background-color:#F89522; color:#FFFEF7;">{{__('admin/home.home_page_content3_button')}}</a></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12 table-cell">
                                <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="200">
                                    <img src="{{asset('website/img/events_image.png')}}" alt="slider" style="height:600px ;">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!--Prev next buttons-->

        <div class="btn-prev with-bg" style="background-color: #F89522;">
            <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
                <use xlink:href="#utouch-icon-arrow-left-1"></use>
            </svg>
            <svg class="utouch-icon utouch-icon-arrow-left1">
                <use xlink:href="#utouch-icon-arrow-left1"></use>
            </svg>
        </div>

        <div class="btn-next with-bg" style="background-color: #F89522;">
            <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                <use xlink:href="#utouch-icon-arrow-right-1"></use>
            </svg>
            <svg class="utouch-icon utouch-icon-arrow-right1">
                <use xlink:href="#utouch-icon-arrow-right1"></use>
            </svg>
        </div>

    </div>
</div>
    <!-- End Main Slider -->


    <!-- Info Boxes -->
    <section id="suppliers-services-home-page" class="crumina-module crumina-module-slider medium-padding100" style="background-color: rgba(241, 234, 225, 0.962); border-top: solid 5px #F89522; border-bottom: solid 5px #F89522;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-4 col-md-offset-4 col-sm-12 col-sm-offset-0">
                    <div class="crumina-module crumina-heading align-center">
                        @auth
                            @if(auth()->user()->user_type == 'customer')
                                <h4 class="heading-title">{{__('website/home.customer_condition_text1')}}</h4>
                                <span>
                                    <a href="{{route('event.create')}}" class="btn btn--with-shadow" style="background-color: rgb(250, 141, 114); color:#FFFEF7; border: solid 3px black;" onmouseover="this.style.background='rgb(139, 85, 71)'" onmouseout="this.style.background='rgb(250, 141, 114)'">
                                        {{__('website/home.customer_condition_text2')}}
                                    </a>
                                </span>
                            @elseif(auth()->user()->user_type == 'supplier')
                                <h4 class="heading-title">{{__('website/home.supplier_condition_text')}}</h4>
                            @elseif(auth()->user()->user_type == 'dashboard')
                                <h4 class="heading-title">{{__('website/home.dashboard_condition_text1')}}</h4>
                                <h5 class="heading-title"><a href="{{route('categories.create')}}" style="color: rgb(17, 17, 187);" onmouseover="this.style.color='purple'" onmouseout="this.style.color='rgb(17, 17, 187)'">{{__('website/home.dashboard2_condition_text2_1')}}</a> {{__('website/home.dashboard2_condition_text2_2')}}</h5>
                            @endif
                        @endauth
                        @guest
                            <h4 class="heading-title">{{__('website/home.guest_condition_text1')}}</h4>
                            <h5 class="heading-title">{{__('website/home.guest_condition_text2')}}</h5>
                                <span>
                                    <a href="{{route('register')}}" class="btn btn-border btn--with-shadow c-secondary mb30" onmouseover="this.style.backgroundColor='#C3CFDD'" onmouseout="this.style.backgroundColor='rgb(246, 208, 193)'" style="background-color: rgb(246, 208, 193);">
                                        {{__('website/home.guest_condition_text3')}}
                                    </a>
                                </span>
                        @endguest
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="swiper-container pagination-bottom" data-show-items="4">
                        <div class="swiper-wrapper">
                            @foreach($services_section as $service)
                            <div class="swiper-slide">
                                <div class="crumina-module crumina-info-box info-box--time-line">
                                    <a href="{{route('event.category',$service->id)}}">
                                        <div class="info-box-image bg-secondary-color" style="background-color:{{$service->color}};" onmouseover="this.style.backgroundColor='grey'" onmouseout="this.style.backgroundColor='{{$service->color}}'"> <!-- bg-color from DB for icon -->
                                            <img class="utouch-icon" src="{{asset("website/".$service->icon)}}" alt="{{$service->name}}"> <!--icon from DB-->
                                            <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                                <use xlink:href="#utouch-icon-dot-arrow" style="fill: rgb(0, 0, 0);"></use>
                                            </svg>
                                        </div>
                                    </a>

                                    <div class="info-box-content">
                                        <h4 class="timeline-year c-secondary" style="color:{{$service->color}};"><a href="{{route('event.category',$service->id)}}" onmouseover="this.style.color='grey'" onmouseout="this.style.color=''">{{$service->name}}</a></h4> <!-- headline-text-color from DB for icon -->
                                        <p class="info-box-text">{!! \Str::words($service->content,'30',' ...') !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!--Prev next buttons-->
                        <div class="btn-slider-wrap navigation-center-bottom">
                            <div class="btn-prev">
                                <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
                                    <use xlink:href="#utouch-icon-arrow-left-1" style="fill: #F89522;"></use>
                                </svg>
                                <svg class="utouch-icon utouch-icon-arrow-left1">
                                    <use xlink:href="#utouch-icon-arrow-left1" style="fill: #F89522;"></use>
                                </svg>
                            </div>

                            <div class="btn-next">
                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                    <use xlink:href="#utouch-icon-arrow-right-1" style="fill: #F89522;"></use>
                                </svg>
                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                    <use xlink:href="#utouch-icon-arrow-right1" style="fill: #F89522;"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ... end Info Boxes -->


    <!-- Slider with vertical tabs -->
    <section class="crumina-module crumina-module-slider slider-tabs-vertical-line">

        <div class="swiper-container" data-show-items="1">
            <div class="swiper-wrapper">

                <div class="swiper-slide " data-mh="slide" style="background-color:#273842 ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="slider-tabs-vertical-thumb">
                                    <img src="{{asset('website/img/prom.jpg')}}" style="border-radius:5%;" alt="Prom Prep">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-white">
                                    <p style="color:#B2DAFF; font-weight:bold; font-size:120%;">{{__('admin/home.service1')}}</p>
                                    <h2 class="heading-title">{{__('admin/home.service1_content')}}</h2>
                                    <div class="heading-text">{{__('admin/home.service1_sub-content')}}</div>
                                </div>

                                <a href="javascript:void(0)" class="btn btn-market btn--with-shadow" style="margin-left:30%; margin-right:auto;" onmouseover="this.style.color='#C52A0C'" onmouseout="this.style.color=''">
                                    <img src="https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/40/undefined/external-graduation-cap-learning-xnimrodx-lineal-color-xnimrodx-2.png" />
                                    <div class="text" style="padding-left:5px ;">
                                        <span class="sup-title">{{__('admin/home.services_chceck-now-on_button')}}</span>
                                        <span class="title">{{__('admin/home.Service1_button_text')}}</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide " data-mh="slide" style="background-color: #79543D;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="slider-tabs-vertical-thumb">
                                    <img src="{{asset('website/img/fireworks.jpg')}}" style="border-radius:5%;" alt="fireworks">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-white">
                                    <p style="color:#B2DAFF; font-weight:bold; font-size:120%;">{{__('admin/home.service2')}}</p>
                                    <h2 class="heading-title">{{__('admin/home.service2_content')}}</h2>
                                    <div class="heading-text">{{__('admin/home.service2_sub-content')}}</div>
                                </div>

                                <a href="javascript:void(0)" class="btn btn-market btn--with-shadow" style="margin-left:30%; margin-right:auto;" onmouseover="this.style.color='orange'" onmouseout="this.style.color=''">
                                    <img src="https://img.icons8.com/external-basicons-color-edtgraphics/40/undefined/external-fireworks-birthday-edtim-outline-color-edtim-2.png" />
                                    <div class="text" style="padding-left:5px ;">
                                        <span class="sup-title">{{__('admin/home.services_chceck-now-on_button')}}</span>
                                        <span class="title">{{__('admin/home.Service2_button_text')}}</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide " data-mh="slide" style="background-color: #CC969D;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="slider-tabs-vertical-thumb">
                                    <img src="{{asset('website/img/roses.jpg')}}" style="border-radius:20px;" alt="barber">
                                </div>
                            </div>
                            <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="crumina-module crumina-heading custom-color c-white">
                                    <p style="color:#B2DAFF; font-weight:bold; font-size:120%;">{{__('admin/home.service3')}}</p>
                                    <h2 class="heading-title">{{__('admin/home.service3_content')}}</h2>
                                    <div class="heading-text">{{__('admin/home.service3_sub-content')}}</div>
                                </div>

                                <a href="javascript:void(0)" class="btn btn-market btn--with-shadow" style="margin-left:30%; margin-right:auto;" onmouseover="this.style.color='#A16B78'" onmouseout="this.style.color=''">
                                    <img src="https://img.icons8.com/external-photo3ideastudio-flat-photo3ideastudio/40/undefined/external-rose-supermarket-photo3ideastudio-flat-photo3ideastudio.png" />
                                    <div class="text">
                                        <span class="sup-title">{{__('admin/home.services_chceck-now-on_button')}}</span>
                                        <span class="title">{{__('admin/home.Service3_button_text')}}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="slider-slides slider-slides--vertical-line">
                <a href="#" class="slides-item">
                    <span class="round primary"></span>1.
                </a>

                <a href="#" class="slides-item">
                    <span class="round orange"></span>2.
                </a>

                <a href="#" class="slides-item">
                    <span class="round red"></span>3.
                </a>

            </div>
        </div>
    </section>
    <!-- ... Slider with vertical tabs -->


    <!-- Start Video -->
    <section class="bg-8 background-contain pt100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                <div class="crumina-module crumina-heading">
                    <h6 class="heading-sup-title">{{__('admin/home.how_it_works_video')}}</h6>
                    <h2 class="heading-title">{{__('admin/home.how_it_works1')}} <span class="c-primary">GDP</span> {{__('admin/home.how_it_works2')}}</h2>
                    <p class="heading-text" style="font-size:110%; font-family: Arial, Helvetica, sans-serif;">
                        {{__('admin/home.how_it_works_content')}} "<strong><u>{{__('admin/home.customer_title')}}</u></strong>" & "<strong><u>{{__('admin/home.supplier_title')}}</u></strong>").
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-bottom:5%;">
                <div class="crumina-module crumina-our-video">
                    <div class="video-thumb">
                        <img src="{{asset('website/img/video-thumb.png')}}" alt="video">
                        <a href="javascript:void(0);" class="video-control js-popup-iframe">
                            <img src="{{asset('website/img/play.png')}}" alt="play">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Video -->


    <!-- Start container -->
    <section class="bg-secondary-color background-contain bg-10">
    <div class="container">
        <div class="row">

            <div style="text-align:center; width: 82%; margin-left: auto; margin-right: auto; padding-top:5%;">
                <h5 class="c-white" style="font-size:200%;">{{__('admin/home.what_s')}} GDP{{__('admin/home.question_mark')}}</h5>
                <p class="c-semitransparent-white" style="font-weight:bold;">
                    <em style="font-size:120%; font-family:Arial, Helvetica, sans-serif;">
                    <hr>
                        <span style="color:rgb(208, 208, 208);">{{__('admin/home.middle_section')}}</span>
                    <hr>
                        <span style="color: rgb(150, 150, 150);">"{{__('admin/home.middle_section_content')}}"</span>
                    </em>
                </p>
            </div>

            <div class="counters">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span>{{$no_of_customers}}</span>
                        </div>
                        <h5 class="counter-title">{{__('admin/home.number_of_customers')}}</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span>{{$no_of_suppliers}}</span>
                        </div>
                        <h5 class="counter-title">{{__('admin/home.number_of_suppliers')}}</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span>{{\App\Models\Comment::count()}}</span>
                        </div>
                        <h5 class="counter-title">{{__('admin/home.number_of_comments')}}</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="crumina-module crumina-counter-item">
                        <div class="counter-numbers c-yellow">
                            <span>{{\App\Models\Event::count()}}</span>
                        </div>
                        <h5 class="counter-title">{{__('admin/home.number_of_events')}}</h5>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End container -->
    </section>



    <!-- Testimonials -->
    <section class="crumina-module crumina-module-slider bg-4 cloud-center navigation-center-both-sides medium-padding100">

        <div class="header-lines-decoration">
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
            <span style="background-color: #6987AB;"></span>
        </div>

    <div class="container">

        <div style="text-align:center; padding-bottom:1%;">
            <h5 class="c-black" style="font-size:200%;"><u>{{ __('admin/home.testimonials')}}</u></h5>
        </div>

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
                <div class="swiper-container" data-effect="fade">
                    <div class="swiper-wrapper">

                        <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                            <div class="testimonial-img-author" data-swiper-parallax="-100">
                                <img src="{{asset('website/img/testimonial1.png')}}" alt="testimonial">
                            </div>

                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star"></span>

                            <h6 class="testimonial-text" data-swiper-parallax="-300">
                                Using this website was a very good experience. It eased the arrangement process of my birthday party
                                this year in everything such as getting the right cooks with an affordable price.
                                It was one of the most things that i really liked here in this website
                                which is the negotiation about the service's price with the suppliers.
                            </h6>

                            <div class="author-info-wrap" data-swiper-parallax="-100">
                                <div class="author-info">
                                    <a href="#" class="h6 author-name">Mohamed El-haddad</a>
                                    <div class="author-company">Professor, 40 years old</div>
                                </div>
                            </div>
                        </div>

                        <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                            <div class="testimonial-img-author" data-swiper-parallax="-100">
                                <img src="{{asset('website/img/testimonial2.png')}}" alt="avatar">
                            </div>

                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>

                            <h6 class="testimonial-text" data-swiper-parallax="-300">
                                I would recommend anyone to use this website if it's hard to find a suitable service with an affordable price
                                in the real life world with the traditional way. in this website that the suppliers provides many services
                                with a variety of different categories. It actually saved my money & time before when i was searching
                                for a dress to buy to attend my best friend's party.
                            </h6>

                            <div class="author-info-wrap" data-swiper-parallax="-100">

                                <div class="author-info">
                                    <a href="#" class="h6 author-name">Reham Kouta</a>
                                    <div class="author-company">Teacher Assistance, 34 years old</div>
                                </div>

                            </div>
                        </div>

                        <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                            <div class="testimonial-img-author" data-swiper-parallax="-100">
                                <img src="{{asset('website/img/testimonial3.png')}}" alt="avatar">
                            </div>

                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                            <h6 class="testimonial-text" data-swiper-parallax="-300">
                                It was a delight experience since i used this website and i am still using it actually.
                                Most of my men suits that were already bought are from suppliers from this website.
                            </h6>

                            <div class="author-info-wrap" data-swiper-parallax="-100">
                                <div class="author-info">
                                    <a href="#" class="h6 author-name">Khaled Badran</a>
                                    <div class="author-company">Professor, 52 years old</div>
                                </div>
                            </div>
                        </div>

                        <div class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

                            <div class="testimonial-img-author" data-swiper-parallax="-100">
                                <img src="{{asset('website/img/testimonial4.png')}}" alt="avatar">
                            </div>

                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>

                            <h6 class="testimonial-text" data-swiper-parallax="-300">
                                I don't usually use online shopping/procurement but since my friend told me about this website
                                i registered in it and tried it and it was really easy and helpful experience.
                                Also i like the fact that customers are able to negotiate with suppliers
                                to make a deal about the price of the transaction that will be done
                                which is actually so friendly & comfortable for both the buyer and the seller.
                            </h6>

                            <div class="author-info-wrap" data-swiper-parallax="-100">
                                <div class="author-info">
                                    <a href="#" class="h6 author-name">Menna Hani</a>
                                    <div class="author-company">Teacher Assistance, 27 years old</div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Prev next buttons-->

    <div class="btn-prev">
        <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
            <use xlink:href="#utouch-icon-arrow-left-1"></use>
        </svg>
        <svg class="utouch-icon utouch-icon-arrow-left1">
            <use xlink:href="#utouch-icon-arrow-left1"></use>
        </svg>
    </div>

    <div class="btn-next">
        <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
            <use xlink:href="#utouch-icon-arrow-right-1"></use>
        </svg>
        <svg class="utouch-icon utouch-icon-arrow-right1">
            <use xlink:href="#utouch-icon-arrow-right1"></use>
        </svg>
    </div>
</section>
    <!-- ... end Testimonials -->


</div>
@endsection


@section('script')
<!-- jQuery-scripts for Modules (Send Message) -->
<script src="{{asset('website/modules/forms/src/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('website/modules/forms/src/js/sweetalert2.all.js')}}"></script>
<script src="{{asset('website/modules/forms/src/js/scripts.js')}}"></script>
<!-- /jQuery-scripts for Modules (Send Message) -->
@endsection
