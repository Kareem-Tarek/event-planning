@extends('layouts.website.master')
@inject('model','App\Models\Event')
@section('title')
    - @lang('website/event.add_event')
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Start Header -->
        <div class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
            <div class="container">
                <div class="stunning-header-content">
                    <div class="inline-items">
                        <h4 class="stunning-header-title">{{__('website/event.add_event')}}</h4>
                    </div>
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
                                    <span class="breadcrumbs-custom">{{__('website/event.add_event')}}</span>
                                    <svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom"><use xlink:href="#utouch-icon-media-play-symbol"></use></svg>
                                </li>
                                @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        </div><!-- end Header -->



        <div class="container">

            <div class="row" style="margin: 75px 0 75px 0">
                @include('layouts.website.partials.messages.message')
                @include('layouts.website.partials.validation-errors')
                <div class="col-lg-12">
                    <form class="form-validate contact-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="{{route('event.store')}}" style="margin-bottom: 75px"  files="true" enctype="multipart/form-data">
                        @csrf
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                        <input name="title_ar" placeholder="{{__('website/home.enter_title_ar')}}" type="text" value="{{Request::old('title_ar') ? Request::old('title_ar') : $model->getTranslation('title','ar')}}" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                    <textarea name="description_ar" required placeholder="{{__('website/home.enter_description_ar')}}">{{Request::old('description_ar') ? Request::old('description_ar') : $model->getTranslation('description','ar')}}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                        <input name="location_ar" placeholder="{{__('website/home.enter_location_ar')}}" type="text" value="{{Request::old('location_ar') ? Request::old('location_ar') : $model->getTranslation('location','ar')}}" required autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                        <input name="title_en" placeholder="{{__('website/home.enter_title_en')}}" type="text" value="{{Request::old('title_en') ? Request::old('title_en') : $model->getTranslation('title','en')}}" required autocomplete="off">
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                    <textarea name="description_en" required  placeholder="{{__('website/home.enter_description_en')}}">{{Request::old('description_en') ? Request::old('description_ar') : $model->getTranslation('description','en')}}</textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                    <input name="location_en" placeholder="{{__('website/home.enter_location_en')}}" type="text" value="{{Request::old('location_en') ? Request::old('location_en') : $model->getTranslation('location','en')}}" required autocomplete="off">
                                </div>
                                
                            </div>
                        </div>
                        @elseif(LaravelLocalization::getCurrentLocale() == 'fr')

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                        <input name="title_fr" placeholder="{{__('website/home.enter_title_fr')}}" type="text" value="{{Request::old('title_fr') ? Request::old('title_fr') : $model->getTranslation('title','fr')}}" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                    <textarea name="description_fr" required placeholder="{{__('website/home.enter_description_fr')}}">{{Request::old('description_fr') ? Request::old('description_fr') : $model->getTranslation('description','fr')}}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                        <input name="location_fr" placeholder="{{__('website/home.enter_location_fr')}}" type="text" value="{{Request::old('location_fr') ? Request::old('location_fr') : $model->getTranslation('location','fr')}}" required  autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                <input name="budget" placeholder="{{__('website/home.enter_budget')}}" type="number" value="{{Request::old('budget') ? Request::old('budget') : $model->budget}}" @error('budget') required @enderror autocomplete="off">
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                <input name="date"  type="date" value="{{Request::old('date') ? Request::old('date') : $model->date}}" @error('date') required @enderror autocomplete="off">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                <input name="time" placeholder="{{__('website/home.enter_time')}}" type="time" value="{{Request::old('time') ? Request::old('time') : $model->time}}" @error('time') required @enderror autocomplete="off">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                <select name="category_id">
                                    <option data-display="{{__('website/home.categories')}}">{{__('website/home.please_select_section')}}</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                <select name="country_id">
                                    <option data-display="{{__('website/home.countries')}}">{{__('website/home.please_select_country')}}</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                <select name="governorate_id">
                                    <option data-display="{{__('website/home.governorates')}}">{{__('website/home.please_select_governorate')}}</option>
                                    @foreach($governorates as $governorate)
                                        <option value="{{$governorate->id}}">{{$governorate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                <select name="city_id">
                                    <option data-display="{{__('website/home.cities')}}">{{__('website/home.please_select_city')}}</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-1 col-sm-12 col-xs-12" @if(LaravelLocalization::getCurrentLocale() == 'ar') style="float: right" @endif>
                                <input type="file" name="images">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-1 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn--green-light">{{__('website/home.submit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ... end Typography -->
    </div>
@endsection
