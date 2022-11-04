@extends('layouts.website.master')
{{-- @extends('layouts.app') --}}

@section('title')
   - @lang('admin/home.signup_title')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:6%; margin-bottom:6%;">
                <div class="card-header" style="text-align: center; padding:0.25%; background-color:rgb(232, 232, 232); color:snow; border-radius:10px; margin-bottom:3%;">
                    <h2>{{__('auth.register')}}</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="row mb-3" style="margin-bottom:1%; width: 50%; margin-left:auto; margin-right: auto;">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-end">{{__('website/home.name')}}</label> --}}
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{__('website/home.enter_name')}}" required autocomplete="off" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; width: 50%; margin-left:auto; margin-right: auto;">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{__('website/home.email')}}</label> --}}
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{__('website/home.enter_email')}}" required autocomplete="off">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; width: 50%; margin-left:auto; margin-right: auto;">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('website/home.password') }}</label> --}}
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('website/home.enter_password') }}" required autocomplete="off">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; width: 50%; margin-left:auto; margin-right: auto;">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('website/home.confirm_password') }}</label> --}}
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{__('website/home.enter_confirm_password')}}" required autocomplete="off">
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; width: 70%; margin-left:auto; margin-right: auto;">
                            {{-- <label for="user_type" class="col-md-4 col-form-label text-md-end">{{ __('website/home.user_type') }}</label><br> --}}
                            <div class="col-lg-6" style="margin-left: 25%;">
                                <select name="user_type" class="form-control" required>
                                    <option value="">{{__('admin/home.please_choose_user_type')}}</option>
                                    <option value="supplier">{{__('website/home.supplier')}}</option>
                                    <option value="customer">{{__('website/home.customer')}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; text-align: center;">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="color:rgb(246, 246, 246); background-color:rgb(50, 50, 50);" onmouseover="this.style.backgroundColor='rgb(108, 108, 108)'" onmouseout="this.style.backgroundColor='rgb(50, 50, 50)'">
                                    {{ __('auth.register') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-0" style="text-align: center;">
                            <div class="col-md-6 offset-md-4">
                                {{__('admin/home.login_already_existing_user')}}
                                <a href="{{route('login')}}" style="color: rgb(17, 17, 187); font-weight: bold;">
                                    <u>{{__('admin/home.login_title')}}</u>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
