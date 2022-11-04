@extends('layouts.website.master')
@section('title')
    - @lang('website/home.events')
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Start Header -->
        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
            <div class="container">
                <div class="stunning-header-content">
                    @if(auth()->user())
                        @if(auth()->user()->user_type == 'customer')
                        <div class="inline-items">
                            <h4 class="stunning-header-title">{{__('website/event.latest_events')}}</h4>
                        </div>
                        @endif
                    @endif
                    <div class="breadcrumbs-wrap inline-items">
                        @component('components.breadcrumbs-wrap')
                            @slot('breadcrumbs_item_active')
                                <li class="breadcrumbs-item active">
                                    <span class="breadcrumbs-custom">{{__('website/home.events')}}</span>
                                    <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                                </li>
                            @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        </div><!-- end Header -->

        <!-- Start Events -->
        <section class="medium-padding100">
            <div class="container">
                <div class="row">
                    <div class="curriculum-event-wrap">
                        @forelse($events as $event)
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="curriculum-event c-primary" data-mh="curriculum">
                                <div class="curriculum-event-thumb">
                                    <img src="{{$event->photo}}" alt="{{$event->title}}">
                                    <div class="category-link">{{$event->category->name ?? ''}}</div>

                                    <div class="curriculum-event-content">
                                        <div class="author-block inline-items">
                                            <div class="author-avatar">
                                                <img src="{{$event->user->photo}}" alt="{{$event->user->name ?? ''}}">
                                            </div>
                                            <div class="author-info">
                                                <a href="#" class="h6 author-name">{{$event->user->name ?? ''}}</a>
                                                <div class="author-prof">({{$event->user->user_type ?? ''}})</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay-standard overlay--primary"></div>
                                </div>
                                <div class="curriculum-event-content">
                                    <div class="icon-text-item display-flex">
                                        <svg class="utouch-icon utouch-icon-calendar-2"><use xlink:href="#utouch-icon-calendar-2"></use></svg>
                                        <div class="text">
                                            {{$event->created_at->format('D d-m-Y')}} –
                                            <a href="{{route('event.country',$event->country_id)}}">{{$event->country->name ?? ''}}</a> ,
                                            <a href="{{route('event.governorate',$event->governorate_id)}}">{{$event->governorate->name ?? ''}}</a> ,
                                            <a href="{{route('event.city',$event->city_id)}}">{{$event->city->name ?? ''}}</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-8 col-sm-8 col-md-8">
                                            <div style="color: grey;"><u>{{__('website/event.status')}}</u> &nbsp; 
                                                @if($event->status == 'Available')
                                                    <span class="cat-count c-yellow" style="background-color: rgb(200, 234, 186); padding: 3%; color: rgb(10, 156, 7); font-size: 15px; border-radius: 10px;" onmouseover="this.style.color='#0083FF'" onmouseout="this.style.color='rgb(10, 156, 7)'">
                                                        {{__('admin/home.available_active')}}
                                                    </span>
                                                @elseif($event->status == 'Expired')
                                                    <span class="cat-count c-yellow" style="background-color: rgb(231, 185, 185); padding: 3%; color: rgb(173, 19, 19); font-size: 15px; border-radius: 10px;" onmouseover="this.style.color='snow'" onmouseout="this.style.color='rgb(173, 19, 19)'">
                                                        {{__('admin/home.expired_paid')}}
                                                    </span>
                                                @else <!-- $event->status == 'Stopped' -->
                                                    <span class="cat-count c-yellow" style="background-color: rgb(231, 228, 185); padding: 3%; color: rgb(255, 115, 0); font-size: 15px; border-radius: 10px;" onmouseover="this.style.color='black'" onmouseout="this.style.color='rgb(255, 115, 0)'">
                                                        {{__('admin/home.stopped_pending')}}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="c-red"><u>{{__('website/event.budget')}}</u> &nbsp; {{$event->budget}} USD</div>
                                        </div>

                                        {{-- <div class="col-lg-4 col-sm-4 col-md-4">
                                            
                                        </div> --}}
                                    </div>
                                    <a href="{{route('event.show',$event->id)}}" class="h5 title">{{$event->title}}</a>
                                </div>
                            </div>
                        </div>
                        @empty
                            <div class="alert alert-danger" role="alert">
                                {{__('website/event.no_events')}}
                            </div>
                        @endforelse
                    </div>
                    {!! $events->links('pagination::simple-default') !!}
                </div>
            </div>
        </section><!-- end Events -->
    </div>
@endsection

