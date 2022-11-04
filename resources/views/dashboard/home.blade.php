@extends('layouts.admin.master')

@section('title', __('admin/home.dashboard'))

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/animate.css')}}">
@endpush
@section('content')
@yield('breadcrumb-list')

<!-- Container-fluid starts-->
<div class="container-fluid dashboard-default-sec">
    <div class="row">
        <div class="col-xl-6 box-col-12 des-xl-100">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec" style="margin-top: 5%;">
                    <div class="card income-card">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <i data-feather="calendar"></i>
                            </div>
                            <h5>{{\App\Models\Event::count()}}</h5>
                            <p>{{__('admin/event.events')}}</p>
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span>
                            <a class="btn-arrow arrow-primary" href="{{route('events.index')}}" 
                               style="color:#FFFFFF; background-color:rgb(95, 95, 95); padding:4%; border-radius:5px; transition: 0.40s ease-in-out;"
                               onMouseOver="this.style.backgroundColor='#BA895D'" onMouseOut="this.style.backgroundColor='rgb(95, 95, 95)'">
                               {{__('admin/home.show_link')}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec" style="margin-top: 5%;">
                    <div class="card income-card">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <i data-feather="message-circle"></i>
                            </div>
                            <h5>{{\App\Models\Comment::count()}}</h5>
                            <span>{{__('admin/home.offers_made1')}}</span>
                            <p>{{__('admin/home.offers_made2')}}</p>
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span>
                            <label class="btn-arrow arrow-secondary" style="color:#BA895D;">{{__('admin/home.offers_made_content')}}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 box-col-12 des-xl-100">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec" style="margin-top: 5%;">
                    <div class="card income-card">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <i data-feather="edit"></i>
                            </div>
                            <h5>{{\App\Models\Contribution::count()}}</h5>
                            <p>{{__('admin/contribution.contributions')}}</p>
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span>
                            <a class="btn-arrow arrow-primary" href="{{route('contributions.index')}}" 
                               style="color:#FFFFFF; background-color:rgb(95, 95, 95); padding:4%; border-radius:5px; transition: 0.40s ease-in-out;"
                               onMouseOver="this.style.backgroundColor='#BA895D'" onMouseOut="this.style.backgroundColor='rgb(95, 95, 95)'">
                                {{__('admin/home.show_link')}}
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-md-6 col-sm-6 box-col-3 des-xl-25 rate-sec" style="margin-top: 5%;">
                    <div class="card income-card">
                        <div class="card-body text-center">
                            <div class="round-box">
                                <i data-feather="list"></i>
                            </div>
                            <h5>{{\App\Models\Category::count()}}</h5>
                            <p>{{__('admin/category.services_categories')}}</p>
                            <span style="color:white;">⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯⎯</span>
                            <a class="btn-arrow arrow-primary" href="{{route('categories.index')}}" 
                               style="color:#FFFFFF; background-color:rgb(95, 95, 95); padding:4%; border-radius:5px; transition: 0.40s ease-in-out;"
                               onMouseOver="this.style.backgroundColor='#BA895D'" onMouseOut="this.style.backgroundColor='rgb(95, 95, 95)'">
                               {{__('admin/home.show_link')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@push('scripts')
<script src="{{asset('admin/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('admin/js/counter/counter-custom.js')}}"></script>

@endpush
@endsection
