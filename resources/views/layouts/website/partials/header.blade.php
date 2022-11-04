<header class="header header--menu-rounded header--blue-lighteen" id="site-header" style="background-color: #F7F7F7;">

     <div class="header-lines-decoration">
        <span style="background-color: #6987AB;"></span>
        <span style="background-color: #6987AB;"></span>
        <span style="background-color: #6987AB;"></span>
        <span style="background-color: #6987AB;"></span>
        <span style="background-color: #6987AB;"></span>
        <span style="background-color: #6987AB;"></span>
        <span style="background-color: #6987AB;"></span>
    </div>

    

    <div class="top-bar top-bar" style="background-color: rgb(0, 0, 0); font-weight:bold; color: #6987AB;">
        <div class="container">

            <div class="top-bar-contact">

                <div class="contact-item">
                    <div class="contact-item" id="clock">
                        {{Carbon\Carbon::now()->translatedFormat('D Y')}} &nbsp;
                        <span id="time" style="color: snow;"></span>
                        <script >
                            function showTime() {
                                var date = new Date(),
                                    utc = new Date(Date.UTC(
                                        date.getFullYear(),
                                        date.getMonth(),
                                        date.getDate(),
                                        date.getHours() - 2,  //modified on the Egyptian (Cairo UTC) time
                                        date.getMinutes(),
                                        date.getSeconds()
                                    ));

                                document.getElementById('time').innerHTML = utc.toLocaleTimeString();
                            }

                            setInterval(showTime, 1000);
                        </script>
                    </div>
                </div>

                <div class="contact-item">
                    <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys">
                        <use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use>
                    </svg>
                    <span style="color: snow;">{{$setting->phone}}</span>
                </div>

                <div class="contact-item">
                    <svg class="utouch-icon utouch-icon-letter">
                        <use xlink:href="#utouch-icon-letter"></use>
                    </svg>
                    <a href="mailto://{{$setting->email}}" style="color: snow;">{{$setting->email}}</a>
                </div>

            </div>

            <div class="follow_us">
                <span style="position: relative; right: 15%;"><a href="{{route('faq')}}" style="color: snow;"><u>{{__('admin/home.faq')}}</u></a></span>
                <span><u>{{__('website/home.follow_us')}}:</u></span>
                <div class="socials">

                    <a href="https://facebook.com/{{$setting->facebook}}" rel="nofollow" target="_blank" class="social__item">
                        <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                            <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero" />
                        </svg>
                    </a>

                    <a href="https://twitter.com/{{$setting->twitter}}" rel="nofollow" target="_blank" class="social__item">
                        <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                            <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero" />
                        </svg>
                    </a>
                </div>
            </div>

            <a href="#" class="top-bar-close" id="top-bar-close-js">
                <svg class="utouch-icon utouch-icon-cancel-1">
                    <use xlink:href="#utouch-icon-cancel-1"></use>
                </svg>
            </a>

        </div>
    </div>

    <div class="container" style="">
        <a href="javascript:void(0)" id="top-bar-js" class="top-bar-link">
            <svg class="utouch-icon utouch-icon-arrow-top">
                <use xlink:href="#utouch-icon-arrow-top"></use>
            </svg>
        </a>
        <div class="header-content-wrapper" style="background-color: #F7F7F7">

            <div class="site-logo" style="width: 35%">
                <a href="{{route('home')}}" class="full-block"></a>
                <img src="{{asset('website/img/GDP-logo.jpg')}}" alt="touch" style="width: 35%; border-radius:10px;"><br>
                <div class="logo-text">
                    <div class="logo-title">{{$setting->title ?? ''}}</div>
                    <div class="logo-sub-title">{{$setting->content ?? ''}}</div>
                </div>
            </div>

            <nav id="primary-menu" class="primary-menu">

                <!-- menu-icon-wrapper -->

                <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                    <span class="mob-menu--title">Menu</span>
                    <span id="menu-icon-wrapper" class="menu-icon-wrapper">
						<svg width="1000px" height="1000px">
							<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
							<path id="pathE" d="M 300 500 L 700 500"></path>
							<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
						</svg>
					</span>
                </a>

                <ul class="primary-menu-menu" style="width: 125%; padding-left:4%;">
                    <li class="menu-item-has-children">
                        <a href="{{route('home')}}">{{__('website/home.home')}}</a>
                    </li>
                    @auth
                        @if(auth()->user()->user_type == 'customer')
                            <li>
                                <a class="menu-component-item" href="javascript:void(0);">{{__('website/home.events')}}</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('myEvents')}}">{{__('admin/home.my_events')}}</a></li>
                                    <li><a href="{{route('allEvents')}}">{{__('admin/home.other_events')}}</a></li>
                                    <li><a href="{{route('event.create')}}">{{__('admin/home.request_an_event')}}</a></li>
                                </ul>
                            </li>
                        @elseif(auth()->user()->user_type == 'supplier' || auth()->user()->user_type == 'dashboard')
                            <li>
                                <a class="menu-component-item" href="{{route('allEvents')}}">{{__('website/home.events')}}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a class="menu-component-item" href="{{route('allEvents')}}">{{__('website/home.events')}}</a>
                        </li>
                    @endauth


                    <li><a href="https://events.dev/en#suppliers-services-home-page">{{__('website/home.categories')}}</a></li>
                    <li><a href="{{route('about-us')}}">{{__('website/home.about_us')}}</a></li>
                    <li><a href="{{route('contact-us')}}">{{__('website/home.contact_us')}}</a></li>
                    @if(!auth()->user()) <!---------- = unregistered user (which means "guest") ---------->
                        <li>
                            <a href="javascript:void(0)">{{__('auth.register')}}</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('register')}}">{{__('auth.register')}}</a></li>
                                <li><a href="{{route('login')}}">{{__('auth.login')}}</a></li>
                            </ul>
                        </li>
                    @else <!---------- = registered user (any user type in the system) ---------->
                        <li><a href="javascript:void(0)" style="color: #0083FF;" onMouseOver="this.style.color='#151414'" onMouseOut="this.style.color='#0083FF'">{{auth()->user()->name ?? ''}}</a>
                        @if(auth()->user()->user_type == 'dashboard') <!---------- dashboard (admin) ---------->
                            <label style="color:rgb(125, 125, 125);">{{__('admin/home.admin_title')}}</label>
                        @elseif(auth()->user()->user_type == 'customer') <!---------- customer ---------->
                            <label style="color:rgb(125, 125, 125);">{{__('admin/home.customer_title')}}</label>
                        @else <!---------- supplier ---------->
                            <label style="color:rgb(125, 125, 125);">{{__('admin/home.supplier_title')}}</label>
                            @endif
                            <ul class="sub-menu">
                                @if(auth()->user()->user_type == 'customer' || auth()->user()->user_type == 'supplier')
                                    <li><a href="{{route('User')}}">Profile Management</a></li>
                                @endif
                                @if(auth()->user()->user_type == 'dashboard')
                                    <li><a href="{{route('dashboard')}}">{{__('admin/home.admin_dashboard_website')}}</a></li>
                                @endif
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('auth.logout')}}</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                    @endif

                    <li>
                        <a href="javascript:void(0)"><i class="fa fa-flag" aria-hidden="true"></i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{url('ar/')}}">
                                    <img src="{{asset('admin/fonts/flag-icon/eg.svg')}}" alt="arabic-egypt" width="40">
                                    <span>&nbsp;&nbsp;&nbsp;{{__('website/home.arabic')}}</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('en/')}}">
                                    <img src="{{asset('admin/fonts/flag-icon/us.svg')}}" alt="english-us" width="40">
                                    <span>&nbsp;&nbsp;&nbsp;{{__('website/home.english')}}</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{url('fr/')}}">
                                    <img src="{{asset('admin/fonts/flag-icon/fr.svg')}}" alt="french" width="40">
                                    <span>&nbsp;&nbsp;&nbsp;{{__('website/home.french')}}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
</header>
<div class="header-spacer"></div>
<br>
<br>
