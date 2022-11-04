@extends('layouts.website.master')
@section('title')
    - {{$event->title}}
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Stunning Header -->
        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
            <div class="container">
                <div class="stunning-header-content">
                    @if(auth()->user())
                        @if(auth()->user()->user_type == 'customer')
                            <div class="inline-items">
                                <h4 class="stunning-header-title">{{__('website/event.your_latest_events')}}</h4>
                                <a href="{{route('event.create')}}" class="btn btn--green btn--with-shadow f-right">
                                    {{__('website/event.add_event')}}
                                </a>
                            </div>
                        @endif
                    @endif
                    <div class="breadcrumbs-wrap inline-items">
                    @component('components.breadcrumbs-wrap')
                        @slot('breadcrumbs_item')
                            <li class="breadcrumbs-item">
                                <a href="{{route('allEvents')}}" class="breadcrumbs-custom">{{__('website/home.events')}}</a>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                        @endslot

                        @slot('breadcrumbs_item_active')
                            <li class="breadcrumbs-item active">
                                <span class="breadcrumbs-custom">{{$event->title}}</span>
                                <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                        @endslot
                    @endcomponent
                    </div>
                </div>
            </div>
        </div>
        <!--end Header -->

        <!-- Start Event-->
        <section class="medium-padding100">

            <div class="container">
                @if(session('delete') ?? '' )
                    @include('layouts.website.partials.alert.danger')
                @endif
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="block-rounded-shadow">
                            <h3>{{$event->title}}</h3>
                            <img src="{{$event->photo}}" alt="{{$event->title}}">
                            <p>{{ $event->description }}</p>
                        </div>

                        <div class="comments">
                            @if($event->status == 'Available' || $order && $order->is_paid == 0)
                                @if(auth()->user())
                                    @if(count($event->comments->where('user_id',auth()->user()->id)) == 0)
                                        @if(auth()->user()->user_type == 'supplier')
                                        <form class="contact-form" action="{{route('comment.add')}}" method="post">
                                            @csrf
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h3>{{__('website/event.add_offer_now')}}</h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input required name="value" id="value" placeholder="{{__('website/event.offer_value')}}" type="number" autocomplete="off" onkeyup="$('#gain_value').val($(this).val() - ($(this).val()*5/100) );$('.gain_value').text($(this).val()- ($(this).val()*5/100) );">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <input required disabled placeholder="{{__('website/event.you_will_get')}}" id="gain_value" type="number" autocomplete="off">
                                                </div>

                                                <input name="event_id" value="{{ $event->id }}" type="hidden" autocomplete="off">

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="with-icon">
                                                        <textarea name="comment_body" required placeholder="{{__('website/event.offer_details')}}" style="min-height: 160px;"></textarea>
                                                        <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
                                                    </div>
                                                </div>

                                                <div class="submit-block">
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btn btn--large btn--green btn--with-shadow full-width">
                                                            <span class="text">{{__('website/event.add_offer')}}</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @endif
                                    @endif
                                @else
                                    <div class="crumina-module crumina-heading align-center">
                                        <div class="heading-text"> {{__('website/event.to_add')}}
                                            <a href="{{route('register')}}" style="color: rgb(17, 17, 187); font-weight: bold;">{{__('website/event.register')}}</a> {{__('website/event.or')}}
                                            <a href="{{route('login')}}" style="color: rgb(17, 17, 187); font-weight: bold;">{{__('website/event.log_in')}}</a>
                                        </div>
                                    </div>
                                @endif
                            @endif

                            <div class="d-flex--content-inline">
                                <h3>{{__('website/event.provided_offers')}}</h3>
                            </div>
                            @if(session('message') ?? '' )
                                @include('layouts.website.partials.alert.success')
                            @endif
                                @if($event->status == 'Available' || $order && $order->is_paid == 0)
                                @forelse($event->comments as $comment)

                                <ol class="comments__list">
                                    <li class="comments__item">
                                        <div class="comment-entry comment comments__article">
                                            <div class="comments__avatar">
                                                <img src="{{$comment->user->photo ?? ''}}" alt="{{$comment->user->name ?? ''}}">
                                            </div>
                                            <div class="comments__body">
                                                <div class="row">
                                                    <div class="@if(auth()->user()) @if(auth()->user()->user_type == 'customer' || auth()->user()->user_type == 'dashboard') col-lg-4 col-md-4 @else col-lg-8 col-md-8 @endif @endif" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right; margin: 0 auto;" @endif>
                                                        <div class="d-flex--content-inline">
                                                            <header class="comment-meta comments__header">
                                                                <cite class="fn url comments__author">
                                                                    <a href="javascript:void(0)" rel="external" class="h6">{{$comment->user->name ?? ''}}</a>
                                                                </cite>
                                                                <div class="comments__time">
                                                                    <time class="published" title="{{$comment->created_at->diffForHumans()}}" datetime="{{$comment->created_at}}">{{$comment->created_at->format('d D M Y, H:m a')}}</time>
                                                                </div>
                                                            </header>
                                                        </div>
                                                    </div>
                                                    @if(auth()->user())
                                                        @if($comment->user_id == auth()->user()->id || $event->user_id == auth()->user()->id  || auth()->user()->user_type == 'dashboard')

                                                            @if(auth()->user()->user_type == 'customer')
                                                                <div class="col-lg-4 col-md-4">
                                                                    {!! Form::open([
                                                                        'route' => ['payNow'],
                                                                        'method' => 'post'
                                                                    ])!!}
                                                                    <input type="hidden" value="{{ $event->id }}" name="event_id">
                                                                    <input type="hidden" value="{{ $comment->user_id }}" name="user_to">
                                                                    <input type="hidden" value="{{ $comment->value }}" name="value">
                                                                    <button class="btn btn--green" style="margin-bottom: 20px; margin-left: 0;" title="{{__('website/home.payNow')}}">{{$comment->value}} (USD)</button>
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            @endif

                                                            <div class="col-lg-4 col-md-4">
                                                                {!! Form::open([
                                                                    'route' => ['comment.delete',$comment->id],
                                                                    'method' => 'delete'
                                                                ])!!}
                                                                <button class="btn btn--red" style="margin-bottom: 20px; margin-left: 0;">{{__('website/home.delete')}}</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        @endif
                                                    @endif
                                                </div>
                                                <div class="comment-content comment">
                                                    <p>{{$comment->body ?? ''}}</p>
                                                </div>

                                            </div>
                                        </div>
                                        @if(auth()->user())
                                            @if($comment->user_id == auth()->user()->id || $event->user_id == auth()->user()->id || auth()->user()->user_type == 'dashboard')
                                                @foreach($comment->replies as $reply)
                                                    @include('website.events.reply')
                                                @endforeach
                                            @endif
                                        @endif

                                    </li>
                                    @if(auth()->user())
                                        @if($comment->user_id == auth()->user()->id || $event->user_id == auth()->user()->id  || auth()->user()->user_type == 'dashboard')
                                            <a href="" class="btn bg-yellow" style="margin-bottom: 3%;" onclick="$(this).next('div').slideToggle(500);return false;">{{__('website/home.reply')}}</a>
                                            <div style="display: none">
                                                <form method="post" action="{{ route('reply.event', $comment->id)}}">
                                                    @csrf
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="with-icon">
                                                            <textarea name="comment_body" required placeholder="{{__('website/event.offer_details')}}" style="min-height: 160px;"></textarea>
                                                            <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
                                                            <input type="hidden" name="commentable_id" value="{{ $event->id }}" />
                                                            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn bg-blue">{{__('website/home.add_reply')}}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif
                                    @endif
                                </ol>

                                @empty
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{__('website/event.Oh_snap')}} </strong>{{__('website/event.no_offers')}}
                                    </div>
                                @endforelse
                                @else
                                    <div class="alert alert-danger" role="alert">
                                       {{__('website/event.expired')}}
                                    </div>
                                @endif
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                        <aside aria-label="sidebar" class="sidebar sidebar-right">

                            <aside class="widget w-category">
                                <h5 class="widget-title">{{__('website/event.event_card')}}</h5>
                                <ul class="category-list">
                                    <li><a>{{__('website/home.status')}}:
                                                @if($event->status == 'Available')
                                                    <span class="cat-count c-yellow" style="background-color: rgb(200, 234, 186); padding: 3%; color: rgb(10, 156, 7); font-size: 13px;" onmouseover="this.style.color='#0083FF'" onmouseout="this.style.color='rgb(10, 156, 7)'">
                                                        {{__('admin/home.available_active')}}
                                                    </span>
                                                @elseif($event->status == 'Expired')
                                                    <span class="cat-count c-yellow" style="background-color: rgb(231, 185, 185); padding: 3%; color: rgb(173, 19, 19); font-size: 13px;" onmouseover="this.style.color='snow'" onmouseout="this.style.color='rgb(173, 19, 19)'">
                                                        {{__('admin/home.expired_paid')}}
                                                    </span>
                                                @else <!-- $event->status == 'Stopped' -->
                                                    <span class="cat-count c-yellow" style="background-color: rgb(231, 228, 185); padding: 3%; color: rgb(255, 115, 0); font-size: 13px;" onmouseover="this.style.color='black'" onmouseout="this.style.color='rgb(255, 115, 0)'">
                                                        {{__('admin/home.stopped_pending')}}
                                                    </span>
                                                @endif
                                        </a>
                                    </li>
                                    <li><a>{{__('website/home.publication_date')}}:<span class="cat-count">{{$event->created_at->format('Y-d-h')}}</span></a></li>
                                    <li><a>{{__('website/home.budget')}}:<span class="cat-count">{{$event->budget}} USD</span></a></li>
                                    <li><a>{{__('website/home.no_of_suppliers_involved')}}:<span class="cat-count">{{$event->comments->count()}}</span></a></li>
                                    <li><a>{{__('website/home.average_offers')}}:<span class="cat-count">{{intval($event->comments->sum('value') ?? '' / $event->comments->count() ?? '')}}</span></a></li>
                                    <li><a>{{__('website/home.country')}}:<span class="cat-count">{{$event->country->name ?? ''}}</span></a></li>
                                    <li><a>{{__('website/home.governorate')}}:<span class="cat-count">{{$event->governorate->name ?? ''}}</span></a></li>
                                    <li><a>{{__('website/home.city')}}:<span class="cat-count">{{$event->city->name ?? ''}}</span></a></li>
                                    <li><a>{{__('website/home.category')}}:<span class="cat-count">{{$event->category->name ?? ''}}</span></a></li>
                                </ul>
                            </aside>

                            <aside class="widget w-author">
                                <div class="testimonial-img-author">
                                    <img src="{{$event->user->photo ?? ''}}" alt="author">
                                    <div class="socials">

                                        <a href="http://facebook.com/{{$event->user->facebook ?? ''}}" target="_blank" rel="nofollow" class="social__item">
                                            <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/>
                                            </svg>
                                        </a>

                                        <a href="http://twitter.com/{{$event->user->twitter ?? ''}}" target="_blank" rel="nofollow" class="social__item">
                                            <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"/>
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                                <a href="#" class="h6 title">{{__('website/home.customer')}}</a>
                                <a href="#" class="h4 title">{{$event->user->name ?? ''}}</a>
                                <p class="contacts-text">{{$event->user->address ?? ''}}</p>

                                <div class="contact-item display-flex">
                                    <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
                                    <span class="info" title="{{$event->user->created_at->format('Y M') ?? ''}}">{{$event->user->created_at->format('Y M') ?? ''}}</span>
                                </div>
                            </aside>
                            @if($order && $order->is_paid == 1)
                                <aside class="widget w-author">
                                    <div class="testimonial-img-author">
                                        <img src="{{$order->user_to->photo ?? ''}}" alt="{{$order->user_to->name ?? ''}}">
                                    </div>

                                    <a href="javascript:void(0);" class="h6 title">{{__('website/home.supplier')}}</a>
                                    <a href="javascript:void(0);" class="h4 title">{{$order->user_to->name ?? ''}}</a>
                                    <p class="contacts-text">{{$order->user_to->address ?? ''}}</p>
                                </aside>
                            @endif


                            <aside class="widget w-tags">
                                <h5 class="widget-title">{{__('website/event.tags')}}</h5>
                                <ul class="tags-list">
                                    @forelse($event->tags as $tag)
                                        <li><a >{{$tag->name}}</a></li>
                                    @empty
                                        <div class="alert alert-danger" role="alert">{{__('website/event.no_tags')}}</div>
                                    @endforelse
                                </ul>
                            </aside>
                        </aside>
                    </div>
                </div>
            </div>
        </section><!-- end Event-->
    </div>
@endsection
