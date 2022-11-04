<!-- jQuery first, then Other JS. -->

<script src="{{asset('website/js/jquery-3.3.1.js')}}"></script>

<!-- jQuery-scripts for Template -->

<script src="{{asset('website/js/js-plugins/jquery.countdown.min.js')}}"></script>

<script src="{{asset('website/js/js-plugins/crum-mega-menu.js')}}"></script>
<script src="{{asset('website/js/js-plugins/swiper.jquery.min.js')}}"></script>
<script src="{{asset('website/js/js-plugins/jquery.typeahead.js')}}"></script>
<script src="{{asset('website/js/js-plugins/velocity.min.js')}}"></script>

<script src="{{asset('website/js/js-plugins/waypoints.js')}}"></script>
<script src="{{asset('website/js/js-plugins/jquery-countTo.js')}}"></script>
<script src="{{asset('website/js/js-plugins/jquery.nice-select.js')}}"></script>
<script src="{{asset('website/js/js-plugins/imagesLoaded.js')}}"></script>
<script src="{{asset('website/js/js-plugins/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('website/js/js-plugins/jquery.matchHeight.js')}}"></script>
<script src="{{asset('website/js/js-plugins/Headroom.js')}}"></script>
<script src="{{asset('website/js/js-plugins/smooth-scroll.js')}}"></script>
<script src="{{asset('website/js/js-plugins/segment.js')}}"></script>
<script src="{{asset('website/js/js-plugins/bootstrap.js')}}"></script>
<script src="{{asset('admin/js/bootstrap/bootstrap.min.js')}}"></script>

<script src="{{asset('website/js/js-plugins/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('website/js/js-plugins/ion.rangeSlider.js')}}"></script>
<script src="{{asset('website/js/js-plugins/parsley.min.js')}}"></script>

<script src="{{asset('website/js/main.js')}}"></script>
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }

    //start all main website customized js
    var contribution = document.querySelector('.contribution-button')

    contribution.addEventListener('mouseover', function(event){
        contribution.style.color = '#FFFEF7'
        contribution.style.borderColor = '#FFFEF7'
    });

    contribution.addEventListener('mouseout', function(event){
        contribution.style.color = '#F89522'
        contribution.style.borderColor = '#F89522'
    });
    //end all main website customized js
</script>
@yield('scripts')
@livewireScripts
