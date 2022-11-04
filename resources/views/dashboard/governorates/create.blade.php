@extends('layouts.admin.master')
@inject('model', 'App\Models\Governorate')

@section('title') {{__('admin/governorate.create')}} @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/governorate.create')}}</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('governorates.index')}}">{{__('admin/governorate.Governorates')}}</a> </li>
        <li class="breadcrumb-item active">{{__('admin/governorate.create')}}</li>

    @endcomponent

    @include('layouts.admin.partials.validation-errors')

    <div class="col-sm-12 col-xl-6 xl-100">
        <div class="card">
            <div class="card-header pb-0">
                <h5>{{__('admin/governorate.addGovernorate')}}</h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link @if(LaravelLocalization::getCurrentLocale() == 'ar') active  @endif" id="ar-tab" data-bs-toggle="pill" href="#ar" role="tab" aria-controls="ar" aria-selected="@if(LaravelLocalization::getCurrentLocale() == 'ar') true @else false @endif">{{__('admin/home.arabic')}}<div class="media"></div></a></li>
                    <li class="nav-item"><a class="nav-link @if(LaravelLocalization::getCurrentLocale() == 'en') active  @endif" id="en-tab" data-bs-toggle="pill" href="#en" role="tab" aria-controls="en" aria-selected="@if(LaravelLocalization::getCurrentLocale() == 'ar') true @else false @endif">{{__('admin/home.english')}}</a></li>
                    <li class="nav-item"><a class="nav-link @if(LaravelLocalization::getCurrentLocale() == 'fr') active  @endif" id="fr-tab" data-bs-toggle="pill" href="#fr" role="tab" aria-controls="fr" aria-selected="@if(LaravelLocalization::getCurrentLocale() == 'ar') true @else false @endif">{{__('admin/home.french')}}</a></li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <form action="{{route('governorates.store')}}" method="post" id="alert-form">
                        @csrf
                        @include('dashboard.governorates.form')
                        <button class="btn btn-success mt-4 d-block me-auto" type="submit">{{__('admin/governorate.add_new')}}</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
