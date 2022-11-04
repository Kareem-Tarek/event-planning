@extends('layouts.email.master')
@section('title')
    {{__('admin/email.read_message')}} ({{$readMail->name}})
@endsection
@section('components')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{__('admin/email.read_message')}} ({{$readMail->name}})</h3>
        @endslot
        <li class="breadcrumb-item"><a href="{{route('mail.inbox')}}">{{__('admin/email.inbox')}}</a></li>
        <li class="breadcrumb-item active">{{__('admin/email.read_message')}} ({{$readMail->name}})</li>
    @endcomponent
@endsection
@section('content-email')
    <div class="col-xl-9 col-md-12 xl-60">
        <div class="email-right-aside">
            <div class="card email-body">
                <div class="email-profile">
                    <div class="email-right-aside">
                        <div class="email-body">
                            <div class="email-content">
                                <div class="email-top">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="media">
                                                <img class="me-3 rounded-circle" src="{{asset('admin/images/user/user.png')}}" alt="{{$readMail->name}}" />
                                                <div class="media-body">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <h6 class="d-block">{{$readMail->name}}</h6>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6 class="d-block"><a href="tel://{{$readMail->phone}}">{{$readMail->phone}}</a></h6>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6 class="d-block"><a href="mailto://{{$readMail->email}}">{{$readMail->email}}</a> </h6>
                                                        </div>
                                                    </div>
                                                    <p>{{$readMail->subject}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-wrapper">
                                    <div class="emailread-group">
                                        <div class="read-group">
                                            <p>{{$readMail->message}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
