@extends('layouts.website.master')
@section('title')
   - @lang('website/home.contact_us')
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Contacts -->
        <section>
            <div class="container-fluid no-padding">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no-padding">
                    <!-- Leaflet map -->
                    <div id="map" style="height: 620px; margin-top: 3%;"></div>
                    <!-- End Leaflet map -->
                </div>
                <div class="col-lg-3 col-lg-offset-1 col-md-12 col-sm-12 pt70 pb100">
                    <div class="breadcrumbs-wrap inline-items">
                        <a href="{{route('home')}}" class="btn btn--transparent btn--round">
                            <svg class="utouch-icon utouch-icon-home-icon-silhouette"><use xlink:href="#utouch-icon-home-icon-silhouette"></use></svg>
                        </a>

                        <ul class="breadcrumbs">
                            <li class="breadcrumbs-item active">
                                <span>{{__('website/home.contact_us')}}</span>
                                <svg class="utouch-icon utouch-icon-media-play-symbol"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                            </li>
                        </ul>
                    </div>

                    <div class="crumina-module crumina-heading">
                        <h4 class="heading-title">{{__('website/home.get_touch')}}</h4>
                        <div class="heading-text">
                            {{__('website/home.description_contact')}}
                        </div>
                    </div>
                    <div class="widget w-contacts w-contacts--style2 ">
                        <div class="contact-item display-flex">
                            <svg class="utouch-icon utouch-icon-placeholder-3"><use xlink:href="#utouch-icon-placeholder-3"></use></svg>
                            <span class="info">{{$setting->location}}</span>
                        </div>
                        <div class="contact-item display-flex">
                            <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
                            <div class="info-wrap">
                                <span class="info"><a href="tel://{{$setting->whatsApp}}">{{$setting->whatsApp}}</a> <span>- {{__('website/home.central_office')}}</span></span>
                                <span class="info"><a href="https://wa.me/{{$setting->whatsApp}}" rel="nofollow" target="_blank">{{$setting->whatsApp}}</a> <span>- {{__('website/home.whatsApp')}}</span></span>
                            </div>
                        </div>
                        <div class="contact-item display-flex">
                            <svg class="utouch-icon utouch-icon-message"><use xlink:href="#utouch-icon-message"></use></svg>
                            <a href="mailto://{{$setting->whatsApp}}" class="info">{{$setting->email}}</a>
                        </div>

                        <a href="#" class="btn btn--grey btn--with-shadow js-message-popup cd-nav-trigger">{{__('website/home.send_message')}}</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ... end Contacts -->

    </div>
@endsection
@section('scripts')
    <script src="{{asset('website/js/js-plugins/leaflet.js')}}"></script>
    <script src="{{asset('website/js/js-plugins/MarkerClusterGroup.js')}}"></script>
    <script src="{{asset('website/js/js-plugins/leaflet-init.js')}}"></script>
@endsection
