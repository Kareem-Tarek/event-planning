@extends('layouts.website.master')
@section('title')
   - @lang('admin/home.faq')
@endsection
@section('content')
    <div class="content-wrapper">

        <!-- start FAQ -->

        <div class="card-header" style="text-align: center; width: 79%; padding:0.25%; background-color:rgb(232, 232, 232); color:snow; border-radius:10px; margin-bottom:3%; margin-top:5%; margin-left:auto; margin-right:auto;">
            <h1>{{__('admin/home.faq')}}</h1>
        </div>
  
        <div class="faq-container" style="margin-bottom: 3%;">

            <div class="faq" style="border-radius: 35px;">
                <h5 class="faq-title">How GDP works in general? (<u>Guidelines by steps</u>)</h5>
                <p class="faq-text">
                    <ul class="faq-text" style="list-style-type: upper-roman; padding-left: 2%;">
                        <li>
                            You won't be allowed to request an event (to purchase any service) in the website unless you 
                            <a href="{{route('register')}}" style="color: rgb(17, 17, 187); font-weight: bold;">Sign Up</a> first (as a Customer).
                        </li>
                        <hr>
                        <li>
                            After Signing Up, the website will automatically login you into your account. 
                            Then you have to make an event request with the event details you need then submit the request.
                        </li>
                        <hr>
                        <li>
                            Wait until any Supplier(s) contacts you in the requested event that you made already. Each Supplier
                            will enter your requested event, and will provide an offer with a suitable price for them and also
                            based on your input budget (when you entered event details including the budget), then 
                            you will be able to purchase the service based on the Supplier's provided offer/budget <b><u>OR</u></b> 
                            you can still negotiate with the Supplier(s) (within the requested event in the reply section) 
                            before accepting the budget they provided, in order to change the price to meet your availabe budget 
                            too as well until both sides (you and the supplier you chose) are okay with the deal then you are ready 
                            to pay (with PayPal). 
                        </li>
                    </ul>
                </p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down dropdown_faq"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="faq" style="border-radius: 35px;">
                <h5 class="faq-title">How do I pay the services (from the requested event) that I need?</h5>
                <p class="faq-text">
                    You need to have a "PayPal" account to pay the money online through the website 
                    to the Supplier you chose or the one you made the deal with.
                </p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down dropdown_faq"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="faq" style="border-radius: 35px;">
                <h5 class="faq-title">
                    What happens if something wrong happened in my account, if the server went down or the website is in maintenance?
                </h5>
                <p class="faq-text">
                    <span style="font-weight: bold;"><u>You can try any of the following methods below:</u></span>
                    <ul class="faq-text" style="list-style-type: square; padding-left: 2%;">
                        <li>
                            You can contact the admins of the website, you can get their details from "<a href="{{route('about-us')}}" style="color: rgb(17, 17, 187); font-weight: bold;">About Us</a>" page in the website.
                        </li>
                        <li>
                            You can also use the "<a href="{{route('contact-us')}}" style="color: rgb(17, 17, 187); font-weight: bold;">Contact Us</a>" page from the website to send E-mails to the admins 
                            about a specific issue or problem that you are already facing or if you want to ask about any question.
                        </li>
                        <li>
                            In the top navigator over the header of the website, you will see some basic details about the website
                            for contact info.
                        </li>
                        <li>
                            In the bottom navigator of the website (the footer), you will also see some contact info of the website 
                            and you can also click on the button that says "<a href="#" class="js-message-popup cd-nav-trigger" style="color: rgb(0, 0, 0); font-weight: bold;">SEND A MESSAGE</a>". After clicking on the button, 
                            complete the form then press "SEND" to send E-mails to the admins without even going to the "<a href="{{route('contact-us')}}" style="color: rgb(17, 17, 187); font-weight: bold;">Contact Us</a>" page.
                        </li>
                    </ul>
                </p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down dropdown_faq"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
    
            <div class="faq" style="border-radius: 35px;">
                <h5 class="faq-title">What is the advantages you get from GDP?</h5>
                <p class="faq-text">
                    When you request an event, many of our Suppliers will try to reach & contact you in the requested event
                    to complete the payment process. So, in fact suppliers need to sell and customers want to buy 
                    then it's 2 way advantage. From you perspective as a Customer it's much easier for you to open 
                    the website and surf it to find a suitable service you need and pay for it online from your own place 
                    without spending any time or effort trying to find it.
                </p>
                <button class="faq-toggle">
                    <i class="fas fa-chevron-down dropdown_faq"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>

        </div>
        <!-- end FAQ -->

        <style>
            @import url('https://fonts.googleapis.com//css?family=Muli&display=swap');

* {
    box-sizing: border-box;
}

h1 {
    margin: 50px 0 30px;
    text-align: center;
}

.faq-container {
    max-width: 70%;
    margin: 0 auto;
}

.faq {
    background-color: rgb(202, 202, 203);
    /* border: 1px solid #c1c4c7; */
    border: 2px solid #000000;
    margin: 20px 0;
    padding: 25px;
    position: relative;
    overflow: hidden;
    transition: 0.3s ease;
}

.faq.active {
    background-color: rgb(232, 230, 234);
    box-shadow: 0 3px 6px rgba(0,0,0,0.1), 0 3px 6px rgba(0,0,0,0.1);
}

.faq.active::before,
.faq.active::after {
  content: '\f075';
  font-family: 'Font Awesome 5 Free';
  color: #2ecc71;
  font-size: 7rem;
  position: absolute;
  opacity: 0.2;
  top: 20px;
  left: 20px;
  z-index: 0;
}

.faq.active::before {
    color: #3498db;
    top: -10px;
    left: -30px;
    transform: rotateY(180deg);
}

.faq-title {
    margin: 0 35px 0 0;
}

.faq-text {
    display: none;
    margin: 30px 0 0 ;
}

.faq.active .faq-text {
    display: block;
}

.faq-toggle {
    background-color: transparent;
    border: 0;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    padding: 0;
    position: absolute;
    top: 30px;
    right: 30px;
    height: 30px;
    width: 30px;
}

.faq-toggle:focus {
    outline: 0;
}

.faq-toggle .fa-times {
    display: none;
}

.faq.active .faq-toggle .fa-times {
    font-size: 20px;
    color: rgb(217, 7, 7);
    display: block;
}

.dropdown_faq{
    color: rgb(27, 139, 170);
    font-size: 20px;
}

.faq.active .faq-toggle .fa-chevron-down {
    display: none;
}
        </style>

<script>
const toggles = document.querySelectorAll('.faq-toggle');

toggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
        toggle.parentNode.classList.toggle('active');
    });
});
</script>

    </div>
@endsection
{{-- @section('scripts')
    <script src="{{asset('website/js/js-plugins/leaflet.js')}}"></script>
    <script src="{{asset('website/js/js-plugins/MarkerClusterGroup.js')}}"></script>
    <script src="{{asset('website/js/js-plugins/leaflet-init.js')}}"></script>
@endsection --}}
