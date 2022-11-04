<div class="page-main-header">
    <div class="main-header-right row m-0">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="javascript:void(0)"><img class="img-fluid" src="{{asset('admin/images/logo/GDP-logo.jpg')}}" alt="GDP" style="width: 55%; border-radius:10px;"></a></div>
            {{-- <div class="dark-logo-wrapper"><a href="javascript:void(0)" style="color: snow; font-weight: bold;">Graduation Project 2 - AASTMT&#169;</a></div> --}}
            <div class="dark-logo-wrapper"><a href="javascript:void(0)"><img class="img-fluid" src="{{asset('admin/images/logo/GDP-logo.jpg')}}" alt="GDP" style="width: 55%; border-radius:10px;"></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle" onmouseover="this.style.color='grey'" onmouseout="this.style.color=''"> </i></div>
        </div>
        <div class="left-menu-header col">
            <ul>
                <li>
                    <form class="form-inline search-form">
                        <div class="search-bg"><i class="fa fa-search"></i>
                            <input class="form-control-plaintext" placeholder="Search here.....">
                        </div>
                    </form>
                    <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                </li>
            </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">

            <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>

                <li class="onhover-dropdown" style="cursor: context-menu;">
                    <div class="notification-box"><i data-feather="flag"></i></div>
                    <ul class="notification-dropdown onhover-show-div">

                        <li class="noti-primary">
                            <div class="media">
                                <span class="notification-bg"><i class="flag-icon flag-icon-eg"></i></span>
                                <a href="{{url('ar/dashboard')}}">
                                    <div class="media-body">
                                        {{__('admin/home.arabic')}}
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="noti-primary">
                            <div class="media">
                                <span class="notification-bg"><i class="flag-icon flag-icon-us"> </i></span>
                                <a href="{{url('en/dashboard')}}">
                                    <div class="media-body">
                                        {{__('admin/home.english')}}
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="noti-primary">
                            <div class="media">
                                <span class="notification-bg"><i class="flag-icon flag-icon-fr"> </i></span>
                                <a href="{{url('fr/dashboard')}}">
                                <div class="media-body">
                                        {{__('admin/home.french')}}
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    {{-- <div class="mode"><i id="dark-only" class="@if($theme == 'dark-only') fa fa-lightbulb-o @else fa fa-moon-o @endif"></i></div> --}}
                    <div class="mode" style="cursor: pointer;"><i class="fa fa-moon-o"></i></div>
                 </li>

                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>{{__('admin/home.logout')}}</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>

        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>
