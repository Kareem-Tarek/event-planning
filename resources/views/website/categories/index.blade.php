@extends('layouts.website.master')
@section('title')
- @lang('website/home.all_categories')
@endsection
@section('content')

<div class="content-wrapper">

    <!-- Stunning Header -->

    <div class="crumina-stunning-header crumina-stunning-header--small stunning-header--content-inline bg-black">
        <div class="container">
            <div class="stunning-header-content c-white custom-color">
                <div class="inline-items">
                    <h4 class="stunning-header-title">{{__('website/home.all_categories')}}</h4>

                    {{-- <a href="#" class="btn btn--green btn--with-shadow f-right">--}}
                    {{-- {{__('website/home.create_categories')}}--}}
                    {{-- </a>--}}
                </div>
            </div>
        </div>
    </div><!-- ... end Stunning Header -->
    <!-- Breadcrumbs -->
    <div class="container">
        <div class="row">
            <div class="breadcrumbs-wrap inline-items with-border">
                <a href="{{route('home')}}" class="btn btn--transparent btn--round">
                    <svg class="utouch-icon utouch-icon-home-icon-silhouette">
                        <use xlink:href="#utouch-icon-home-icon-silhouette"></use>
                    </svg>
                </a>

                <ul class="breadcrumbs">
                    <li class="breadcrumbs-item active">
                        <span>{{__('website/home.categories')}}</span>
                        <svg class="utouch-icon utouch-icon-media-play-symbol">
                            <use xlink:href="#utouch-icon-media-play-symbol"></use>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ... end Breadcrumbs -->

    <!-- Main content starts -->

    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <aside aria-label="sidebar" class="sidebar sidebar-right">

            <aside class="widget w-category">
                <h5 class="widget-title">{{__('website/home.categories')}}</h5>
                <ul class="category-list">
                    @forelse($categories as $category)
                    <li>
                        <a href="{{route('contribution.category',$category->id)}}">{{$category->name}}</a>
                    </li>
                    @empty
                    <div class="alert alert-danger" role="alert">{{__('website/home.no_categories')}}</div>
                    @endforelse
                </ul>
            </aside>
        </aside>
    </div>

</div>
@endsection