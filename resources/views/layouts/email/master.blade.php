@extends('layouts.admin.master')

@section('title') {{__('admin/email.inbox')}} @endsection

@section('content')

    @yield('components')

    <div class="container-fluid">
        <div class="email-wrap">
            <div class="row">
                <div class="col-xl-3 col-md-6 xl-30">
                    <div class="email-sidebar">
                        <div class="email-left-aside">
                            <div class="card">
                                <div class="card-body">
                                    <div class="email-app-sidebar">
                                        <div class="media">
                                            <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('admin/images/user/user.png')}}" alt="" /></div>
                                            <div class="media-body">
                                                <h6 class="f-w-600">{{$setting->title}}</h6>
                                                <p>{{$setting->email}}</p>
                                            </div>
                                        </div>
                                        <ul class="nav main-menu" role="tablist">
                                            <li class="nav-item">
                                                <p class="btn-primary btn-block btn-mail w-100" id="pills-darkhome-tab" data-bs-toggle="pill" role="tab" aria-controls="pills-darkhome" aria-selected="true">
                                                 {{__('admin/email.email_list')}}
                                                </p>
                                            </li>
                                            <li>
                                                <a href="{{route('mail.inbox')}}" @if(routeActive('mail.inbox')) aria-selected="true" @endif>
                                                    <span class="title"><i class="icon-import"></i>{{__('admin/email.inbox')}}</span><span class="badge pull-right">({{\App\Models\Contact::where('is_read',0)->count()}})</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('mail.all-mail')}}" @if(routeActive('mail.all-mail')) aria-selected="true" @endif>
                                                    <span class="title"><i class="icon-folder"></i>{{__('admin/email.all_mail')}}</span><span class="badge pull-right">({{\App\Models\Contact::count()}})
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{route('mail.trash')}}" @if(routeActive('mail.trash')) aria-selected="true" @endif>
                                                    <span class="title"><i class="icon-trash"></i>{{__('admin/email.trash')}}</span><span class="badge pull-right">({{\App\Models\Contact::onlyTrashed()->count()}})</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content-email')
            </div>
        </div>
    </div>
@endsection
