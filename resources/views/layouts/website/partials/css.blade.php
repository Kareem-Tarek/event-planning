<link rel="stylesheet" type="text/css" href="{{asset('website/css/theme-styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/blocks.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/widgets.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/plugins/ion.rangeSlider.css')}}">
<!--External fonts-->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
<!-- Styles for Plugins -->
<link rel="stylesheet" type="text/css" href="{{asset('website/css/plugins/swiper.min.css')}}">
<!--Styles for RTL-->
@if(LaravelLocalization::getCurrentLocale() == 'ar')
<link rel="stylesheet" type="text/css" href="{{asset('website/css/rtl.css')}}">
@endif
@stack('css')
@livewireStyles
