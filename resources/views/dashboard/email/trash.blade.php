@extends('layouts.email.master')
@section('title')
    {{__('admin/email.trash')}}
@endsection
@section('components')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/email.trash')}}</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('mail.inbox')}}">{{__('admin/email.inbox')}}</a></li>
        <li class="breadcrumb-item active">{{__('admin/email.trash')}}</li>
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
