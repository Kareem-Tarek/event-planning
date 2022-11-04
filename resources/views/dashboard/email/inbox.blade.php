@extends('layouts.email.master')
@section('title')
    {{__('admin/email.inbox')}}
@endsection
@section('components')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/email.inbox')}}</h3>
        @endslot
        <li class="breadcrumb-item active">{{__('admin/email.inbox')}}</li>
    @endcomponent
@endsection
@section('content-email')
    <div class="col-xl-9 col-md-12 xl-70">
        <div class="email-right-aside">
            <div class="card email-body">
                <div class="email-profile">
                    <div class="inbox">
                        @include('dashboard.email.media-body')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
