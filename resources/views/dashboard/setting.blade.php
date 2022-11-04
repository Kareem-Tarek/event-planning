@extends('layouts.admin.master')

@section('title') {{__('admin/home.settings')}} @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/home.settings')}}</h3>
        @endslot
        <li class="breadcrumb-item active">{{__('admin/home.settings')}}</li>

    @endcomponent
    @include('layouts.admin.partials.validation-errors')
    <div class="col-sm-12 col-xl-6 xl-100">
        <div class="card">
            <div class="card-header pb-0">
                <h5>{{__('admin/home.check_changes')}}</h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link @if(LaravelLocalization::getCurrentLocale() == 'ar') active  @endif" id="ar-tab" data-bs-toggle="pill" href="#ar" role="tab" aria-controls="ar" aria-selected="@if(LaravelLocalization::getCurrentLocale() == 'ar') true @else false @endif">{{__('admin/home.arabic')}}<div class="media"></div></a></li>
                    <li class="nav-item"><a class="nav-link @if(LaravelLocalization::getCurrentLocale() == 'en') active  @endif" id="en-tab" data-bs-toggle="pill" href="#en" role="tab" aria-controls="en" aria-selected="@if(LaravelLocalization::getCurrentLocale() == 'ar') true @else false @endif">{{__('admin/home.english')}}</a></li>
                    <li class="nav-item"><a class="nav-link @if(LaravelLocalization::getCurrentLocale() == 'fr') active  @endif" id="fr-tab" data-bs-toggle="pill" href="#fr" role="tab" aria-controls="fr" aria-selected="@if(LaravelLocalization::getCurrentLocale() == 'ar') true @else false @endif">{{__('admin/home.french')}}</a></li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <form action="{{route('setting.update')}}" method="post" id="alert-form">
                        @csrf

                        <div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'ar') show active @endif" id="ar" role="tabpanel" aria-labelledby="ar-tab">
                            <div class="form-group row">
                                <label class="form-label col-lg-3">{{__('admin/home.title_site')}} <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('title_ar') is-invalid @enderror" required value="{{Request::old('title_ar') ? Request::old('title_ar') : $settings->getTranslation('title','ar')}}" type="text" name="title_ar" placeholder="{{__('admin/home.enter_title_ar')}}" autocomplete="off">
                                    @error('title_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-lg-3">{{__('admin/home.content_site')}} <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea class="form-control @error('content_ar') is-invalid @enderror" required type="text" name="content_ar">{{Request::old('content_ar') ? Request::old('content_ar') : $settings->getTranslation('content','ar')}}</textarea>
                                    @error('content_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'en') show active @endif" id="en" role="tabpanel" aria-labelledby="en-tab">
                            <div class="form-group row">
                                <label class="form-label col-lg-3">{{__('admin/home.title_site')}} <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('title_en') is-invalid @enderror" required value="{{Request::old('title_en') ? Request::old('title_en') : $settings->getTranslation('title','en')}}" type="text" name="title_en" placeholder="{{__('admin/home.enter_title_en')}}" autocomplete="off">
                                    @error('title_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-lg-3">{{__('admin/home.content_site')}} <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea class="form-control @error('content_en') is-invalid @enderror" required type="text" name="content_en">{{Request::old('content_en') ? Request::old('content_en') : $settings->getTranslation('content','en')}}</textarea>
                                    @error('content_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade mt-4 @if(LaravelLocalization::getCurrentLocale() == 'fr') show active @endif" id="fr" role="tabpanel" aria-labelledby="fr-tab">
                            <div class="form-group row">
                                <label class="form-label col-lg-3">{{__('admin/home.title_site')}} <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input class="form-control @error('title_fr') is-invalid @enderror" required value="{{Request::old('title_fr') ? Request::old('title_fr') : $settings->getTranslation('title','fr')}}" type="text" name="title_fr" placeholder="{{__('admin/home.enter_title_fr')}}" autocomplete="off">
                                    @error('title_fr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="form-label col-lg-3">{{__('admin/home.content_site')}} <span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <textarea class="form-control @error('content_fr') is-invalid @enderror" required type="text" name="content_fr">{{Request::old('content_fr') ? Request::old('content_fr') : $settings->getTranslation('content','fr')}}</textarea>
                                    @error('content_fr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-lg-3">{{__('admin/home.email')}} <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control @error('email') is-invalid @enderror" type="email" required name="email" placeholder="{{__('admin/home.enter_email')}}" autocomplete="off" required value="{{Request::old('email') ? Request::old('email') : $settings->email}}"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-lg-3">{{__('admin/home.phone')}} <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" placeholder="{{__('admin/home.enter_phone')}}" autocomplete="off" required value="{{Request::old('phone') ? Request::old('phone') : $settings->phone}}"/>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-lg-3">{{__('admin/home.whatsApp')}} <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input class="form-control @error('whatsApp') is-invalid @enderror" type="tel" name="whatsApp" placeholder="{{__('admin/home.enter_whatsApp')}}" autocomplete="off" required value="{{Request::old('whatsApp') ? Request::old('whatsApp') : $settings->whatsApp}}"/>
                                @error('whatsApp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-lg-3">{{__('admin/home.facebook')}}</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('facebook') is-invalid @enderror" type="text" name="facebook" placeholder="{{__('admin/home.enter_facebook')}}" autocomplete="off" value="{{Request::old('facebook') ? Request::old('facebook') : $settings->facebook}}"/>
                                @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-lg-3">{{__('admin/home.twitter')}}</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('twitter') is-invalid @enderror" type="text" name="twitter" placeholder="{{__('admin/home.enter_twitter')}}" autocomplete="off" value="{{Request::old('twitter') ? Request::old('twitter') : $settings->twitter}}"/>
                                @error('twitter')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-lg-3">{{__('admin/home.instagram')}}</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('instagram') is-invalid @enderror" type="text" name="instagram" placeholder="{{__('admin/home.enter_instagram')}}" autocomplete="off" value="{{Request::old('instagram') ? Request::old('instagram') : $settings->instagram}}"/>
                                @error('instagram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="form-label col-lg-3">{{__('admin/home.telegram')}}</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('telegram') is-invalid @enderror" type="text" name="telegram" placeholder="{{__('admin/home.enter_telegram')}}" autocomplete="off" value="{{Request::old('telegram') ? Request::old('telegram') : $settings->telegram}}"/>
                                @error('telegram')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-lg-3">{{__('admin/home.linkedin')}}</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('linkedin') is-invalid @enderror" type="text" name="linkedin" placeholder="{{__('admin/home.enter_linkedin')}}" autocomplete="off" value="{{Request::old('linkedin') ? Request::old('linkedin') : $settings->linkedin}}"/>
                                @error('linkedin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-lg-3">{{__('admin/home.location')}}</label>
                            <div class="col-lg-9">
                                <input class="form-control @error('location') is-invalid @enderror" type="text" name="location" placeholder="{{__('admin/home.enter_location')}}" autocomplete="off" value="{{Request::old('location') ? Request::old('location') : $settings->location}}"/>
                                @error('location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn-success mt-4 d-block me-auto" type="submit">{{__('admin/tag.update')}}</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
