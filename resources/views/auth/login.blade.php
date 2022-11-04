@extends('layouts.website.master')
{{-- @extends('layouts.app') --}}

@section('title')
   - @lang('admin/home.login_title')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:6%; margin-bottom:6%;">
                <div class="card-header" style="text-align: center; padding:0.25%; background-color:rgb(232, 232, 232); color:snow; border-radius:10px; margin-bottom:3%;">
                    <h2>{{__('auth.login')}}</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3" style="margin-bottom:1%; width: 50%; margin-left:auto; margin-right: auto;">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{__('website/home.email')}}</label> --}}
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{__('website/home.enter_email')}}" required autocomplete="off" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('website/home.enter_password') }}" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="text-align: center">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('website/home.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3" style="margin-bottom:1%; text-align: center;">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="color:rgb(246, 246, 246); background-color:rgb(50, 50, 50);" onmouseover="this.style.backgroundColor='rgb(108, 108, 108)'" onmouseout="this.style.backgroundColor='rgb(50, 50, 50)'">
                                    {{ __('auth.login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))--}}
                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                {{-- {{ __('Forgot Your Password?') }}--}}
                                {{-- </a>--}}
                                {{-- @endif --}}
                            </div>
                        </div>

                        <div class="row mb-0" style="text-align: center;">
                            <div class="col-md-6 offset-md-4">
                                {{__('admin/home.register_new_user')}}
                                <a href="{{route('register')}}" style="color: rgb(17, 17, 187); font-weight: bold;">
                                    <u>{{__('admin/home.signup_title')}}</u>
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