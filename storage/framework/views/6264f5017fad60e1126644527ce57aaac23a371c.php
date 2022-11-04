
<?php $__env->startSection('title'); ?>
    - <?php echo app('translator')->get('website/home.about_us'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">


        


        <!-- Info Boxes -->
        <section class="medium-padding100" style="background-color: rgb(225, 225, 225); border-top: 5px solid #607C9D;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-info-box info-box--numbers">
                            <h5 class="order-number" style="text-align: center;">1.</h5>
                            <h3 class="h5 info-box-title" style="text-align: center;">Who We Are?</h3>
                            <p class="info-box-text" style="text-align: center;">
                                GDP An intermediate Event Management Systems provides campus event planners a flexible, fully integrated solution to simplify the event management process and keep your customers, while maintaining important offers and data for making future planning decisions.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-info-box info-box--numbers">
                            <h5 class="order-number" style="text-align: center;">2.</h5>
                            <h3 class="h5 info-box-title" style="text-align: center;">What We Do?</h3>
                            <p class="info-box-text" style="text-align: center;">
                                We help people to design and execute memorable events that fulfill their wishes. By providing many suppliers offerings (budget) for their needed service category that was already submitted by them in an event request form.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                        <div class="crumina-module crumina-info-box info-box--numbers">
                            <h5 class="order-number" style="text-align: center;">3.</h5>
                            <h3 class="h5 info-box-title" style="text-align: center;">How Things Are Done?</h3>
                            <p class="info-box-text" style="text-align: center;">
                                Customers make an event request by selecting the suitable budget and the needed service category while filling the event request form, then there might me one or many suppliers, offers for the event with their suitable budget too and then the negotiation starts (reply section) if any of them wether it was the Customer or the Supplier is/are not okay with the budget or if there is a specific requirement that was needed by the Customer.
                            </p>
                        </div>
                    </div>

                    

                </div>
            </div>
        </section>

        <!-- ... end Info Boxes -->


        <!-- Info Boxes -->

        <section class="crumina-module crumina-module-slider bg-blue-lighteen medium-padding100" style="background: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url(<?php echo e(asset('website/img/purple_bg.jpg')); ?>); background-size: cover; border-top: 5px solid red; border-bottom: 5px solid red;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-4 col-md-offset-4 col-sm-12 col-sm-offset-0">
                        <div class="crumina-module crumina-heading align-center">
                            <h3 class="heading-title">
                                <span style="color: snow;">What is different about</span> <span class="c-primary">GDP</span><span style="color: snow;"><?php echo e(__('admin/home.question_mark')); ?></span>
                            </h3>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <div class="swiper-container pagination-bottom" data-show-items="4">
                            <div class="swiper-wrapper" style="margin-top: 5%;">
                                <div class="swiper-slide">
                                    <div class="crumina-module crumina-info-box info-box--time-line">

                                        <div class="info-box-image" style="background-color: rgb(7, 171, 7);">
                                            
                                            <i class='far fa-comments' style='font-size:36px; color:#FFFFFF;'></i>
                                            <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                                <use xlink:href="#utouch-icon-dot-arrow"></use>
                                            </svg>
                                        </div>

                                        <div class="info-box-content">
                                            <h5 class="timeline-year" style="color: rgb(19, 221, 19);">Power of Negotiation</h5>
                                            
                                            <p class="info-box-text" style="color: snow;">
                                                Customer & Supplier are able to negotiate in a reply section in the requested event 
                                                (by the Customer) and then both could make a deal together about the budget for the 
                                                satisfaction & the comfortability for both of them. 
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="crumina-module crumina-info-box info-box--time-line">

                                        <div class="info-box-image bg-orange">
                                            
                                            <i class='fas fa-tasks' style='font-size:36px; color:#FFFFFF;'></i>
                                            <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                                <use xlink:href="#utouch-icon-dot-arrow"></use>
                                            </svg>
                                        </div>

                                        <div class="info-box-content">
                                            <h5 class="timeline-year c-orange">Good Managerial Quality</h5>
                                            
                                            <p class="info-box-text" style="color: snow;">
                                                Anything that happens in the website (including the pre-transaction process) must be confirmed 
                                                by the admins. Admins are able to help customers (event request) & 
                                                suppliers (contacting the customers in the registered event) to run 
                                                their operations in the system normally, if there was any kind of maintenance, 
                                                bug or error in the website.
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="crumina-module crumina-info-box info-box--time-line">

                                        <div class="info-box-image bg-red">
                                            
                                            <i class='fa fa-shopping-cart' style='font-size:36px; color:#FFFFFF;'></i>
                                            <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                                <use xlink:href="#utouch-icon-dot-arrow"></use>
                                            </svg>
                                        </div>

                                        <div class="info-box-content">
                                            <h5 class="timeline-year c-red">Variety of Different Services' Categories</h5>
                                            
                                            <p class="info-box-text" style="color: snow;">
                                                <u>Suppliers</u> are having more opportunities to put their products/services in the website 
                                                and increase their profitability and also increase the Customers reach & loyalty. 
                                                <u>Customers</u> are having many choices for many different types of services 
                                                in the website.
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="crumina-module crumina-info-box info-box--time-line">

                                        <div class="info-box-image bg-yellow">
                                            
                                            <img src="<?php echo e(asset('website/svg/sack-dollar-solid.svg')); ?>" style='width:35px;'>
                                            <svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
                                                <use xlink:href="#utouch-icon-dot-arrow"></use>
                                            </svg>
                                        </div>

                                        <div class="info-box-content">
                                            <h5 class="timeline-year c-yellow">Budget Agreement</h5>
                                            
                                            <p class="info-box-text" style="color: snow;">
                                                It's how both of them (Customer & Supplier) negotiate mainly about the budgets 
                                                since the Customer put his/her required budget in the beggining when he/she was 
                                                submitting the event request form, and also since the Supplier provided the offer 
                                                after the Customer's event request was submitted and activated by the admins.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!--Prev next buttons-->

                            <div class="btn-slider-wrap navigation-center-bottom">

                                <div class="btn-prev">
                                    <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
                                        <use xlink:href="#utouch-icon-arrow-left-1" style="fill: snow;"></use>
                                    </svg>
                                    <svg class="utouch-icon utouch-icon-arrow-left1">
                                        <use xlink:href="#utouch-icon-arrow-left1" style="fill: snow;"></use>
                                    </svg>
                                </div>

                                <div class="btn-next">
                                    <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                        <use xlink:href="#utouch-icon-arrow-right-1" style="fill: snow;"></use>
                                    </svg>
                                    <svg class="utouch-icon utouch-icon-arrow-right1">
                                        <use xlink:href="#utouch-icon-arrow-right1" style="fill: snow;"></use>
                                    </svg>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ... end Info Boxes -->

        <!-- Case Item -->

        <section class="crumina-module crumina-module-slider medium-padding100">
            <div class="container">
                <div class="row">
                    <div class="crumina-module crumina-module-img-bottom">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading">
                                <h6 class="heading-sup-title">Our Suppliers' Services</h6>
                                <h5 class="heading-title">Let Everyone Know Why We are the Best!</h5>
                                <div class="heading-text">
                                    Check out our suppliers' services which includes a variety of different services'
                                    categories.
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-lg-offset-3 col-md-12 col-sm-12 col-sm-offset-0">
                            <a href="https://events.dev/en#suppliers-services-home-page" class="btn btn-border btn--with-shadow c-secondary mb30" onmouseover="this.style.backgroundColor='#C3CFDD'" onmouseout="this.style.backgroundColor=''">
                                All Services' Categories
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="swiper-container pagination-bottom" data-show-items="2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="crumina-module crumina-case-item" data-mh="case-item">
                                        <a href="<?php echo e(asset('website/img/food-service-about-slider-for-viewing.jpg')); ?>" class="case-item__thumb js-zoom-image">
                                            <img src="<?php echo e(asset('website/img/food-service-about-slider.jpg')); ?>" alt="food service">
                                        </a>
                                        <div class="square-colored bg-product-brown"></div>
                                        <div class="case-item-content">
                                            <h6 class="title" style="font-family: bold; font-size: 110%;">
                                                Different food services, customized for many different types of events 
                                                such as Birthday Parties, Weddings, etc.
                                            </h6>
                                            <a href="javascript:void(0)" class="more-arrow white">
                                                <span style="font-size: 13.5px;">View Service Category Events</span>
                                                <div class="btn-next">
                                                    <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                                        <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                                    </svg>
                                                    <svg class="utouch-icon utouch-icon-arrow-right1">
                                                        <use xlink:href="#utouch-icon-arrow-right1"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="crumina-module crumina-case-item" data-mh="case-item">
                                        <a href="<?php echo e(asset('website/img/occassional-attires-about-slider-for-viewing.jpg')); ?>" class="case-item__thumb js-zoom-image">
                                            <img src="<?php echo e(asset('website/img/occassional-attires-about-slider.jpg')); ?>" alt="occassional attires">
                                        </a>
                                        <div class="square-colored bg-product-red"></div>
                                        <div class="case-item-content">
                                            <h6 class="title" style="font-family: bold; font-size: 110%;">
                                                Many different attires for special occasions such as Birthday, 
                                                Graduation, Friends' Parties, etc.
                                            </h6>
                                            <a href="javascript:void(0)" class="more-arrow white">
                                                <span style="font-size: 13.5px;">View Service Category Events</span>
                                                <div class="btn-next">
                                                    <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                                        <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                                    </svg>
                                                    <svg class="utouch-icon utouch-icon-arrow-right1">
                                                        <use xlink:href="#utouch-icon-arrow-right1"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="crumina-module crumina-case-item" data-mh="case-item">
                                        <a href="<?php echo e(asset('website/img/barber-about-slider-for-viewing.jpg')); ?>" class="case-item__thumb js-zoom-image">
                                            <img src="<?php echo e(asset('website/img/barber-about-slider.jpg')); ?>" alt="barber">
                                        </a>
                                        <div class="square-colored bg-product-blue-dark"></div>
                                        <div class="case-item-content">
                                            <h6 class="title" style="font-family: bold; font-size: 110%;">
                                                Hairdressing/Barbering. cutting, styling, and coloring hair, 
                                                as well as shaving or grooming facial hair (for men) and doing other related tasks.
                                            </h6>
                                            <a href="javascript:void(0)" class="more-arrow white">
                                                <span style="font-size: 13.5px;">View Service Category Events</span>
                                                <div class="btn-next">
                                                    <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                                        <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                                    </svg>
                                                    <svg class="utouch-icon utouch-icon-arrow-right1">
                                                        <use xlink:href="#utouch-icon-arrow-right1"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="crumina-module crumina-case-item" data-mh="case-item">
                                        <a href="<?php echo e(asset('website/img/zaffah-about-for-viewing.jpeg')); ?>" class="case-item__thumb js-zoom-image">
                                            <img src="<?php echo e(asset('website/img/zaffah-about.jpeg')); ?>" alt="zaffah">
                                        </a>
                                        <div class="square-colored bg-product-green"></div>
                                        <div class="case-item-content">
                                            <h6 class="title" style="font-family: bold; font-size: 110%;">
                                                For wedding events. Zaffah/Wedding march, a musical procession of bendir 
                                                drums, bagpipes, horns, Dabke dancers and men carrying flaming swords.
                                            </h6>
                                            <a href="javascript:void(0)" class="more-arrow white">
                                                <span style="font-size: 13.5px;">View Service Category Events</span>
                                                <div class="btn-next">
                                                    <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                                        <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                                    </svg>
                                                    <svg class="utouch-icon utouch-icon-arrow-right1">
                                                        <use xlink:href="#utouch-icon-arrow-right1"></use>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <div class="swiper-pagination bottom-left"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ... end Case Items -->


        <!-- Testimonial Slider -->

        <section class="crumina-module crumina-module-slider background-contain bg-16 bg-blue-lighteen pt100">
            <div class="container">
                <div class="row">
                    <div class="crumina-module crumina-module-img-bottom">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            
                            <img class="img-bottom" src="<?php echo e(asset('website/img/testimonial-about-us2.png')); ?>" alt="testimonial about us" style="height:300px;">
                        </div>

                        <div class="col-lg-8 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="crumina-module-img-content">
                                        <div class="crumina-module crumina-heading">
                                            <h3 class="heading-title">What Our Customers Say about <span class="c-primary">GDP</span>..?</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="swiper-container top-navigation" data-show-items="2">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
                                                        <div class="author-info-wrap">
                                                            <div class="testimonial-img-author">
                                                                <img src="<?php echo e(asset('website/img/testimonial1.png')); ?>" alt="author">
                                                            </div>
                                                            <div class="author-info">
                                                                <a href="#" class="h6 author-name">Mohamed El-Haddad</a>
                                                                <div class="author-company">Professor, 40 years old</div>
                                                            </div>
                                                        </div>

                                                        <h6 class="testimonial-text">
                                                            Using this website was a very good experience. It eased the arrangement process of my birthday party
                                                            this year in everything such as getting the right cooks with an affordable price.
                                                            It was one of the most things that i really liked here in this website
                                                            which is the negotiation about the service's price with the suppliers.
                                                        </h6>

                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star"></span>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
                                                        <div class="author-info-wrap">
                                                            <div class="testimonial-img-author">
                                                                <img src="<?php echo e(asset('website/img/testimonial2.png')); ?>" alt="author">
                                                            </div>
                                                            <div class="author-info">
                                                                <a href="#" class="h6 author-name">Reham Kouta</a>
                                                                <div class="author-company">Teacher Assistance, 34 years old</div>
                                                            </div>
                                                        </div>

                                                        <h6 class="testimonial-text">
                                                            I would recommend anyone to use this website if it's hard to find a suitable service with an affordable price
                                                            in the real life world with the traditional way. in this website that the suppliers provides many services
                                                            with a variety of different categories. It actually saved my money & time before when i was searching
                                                            for a dress to buy to attend my best friend's party.
                                                        </h6>

                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="col-lg-12 col-md-4 col-sm-12">
                                                    <div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
                                                        <div class="author-info-wrap">
                                                            <div class="testimonial-img-author">
                                                                <img src="<?php echo e(asset('website/img/testimonial3.png')); ?>" alt="author">
                                                            </div>
                                                            <div class="author-info">
                                                                <a href="#" class="h6 author-name">Khaled Badran</a>
                                                                <div class="author-company">Professor, 52 years old</div>
                                                            </div>
                                                        </div>

                                                        <h6 class="testimonial-text">
                                                            It was a delight experience since i used this website and i am still using it actually.
                                                            Most of my men suits that were already bought are from suppliers from this website.
                                                        </h6>

                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="col-lg-12 col-md-4 col-sm-12">
                                                    <div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
                                                        <div class="author-info-wrap">
                                                            <div class="testimonial-img-author">
                                                                <img src="<?php echo e(asset('website/img/testimonial4.png')); ?>" alt="author">
                                                            </div>
                                                            <div class="author-info">
                                                                <a href="#" class="h6 author-name">Menna Hani</a>
                                                                <div class="author-company">Teacher Assistance, 27 years old</div>
                                                            </div>
                                                        </div>

                                                        <h6 class="testimonial-text">
                                                            I don't usually use online shopping/procurement but since my friend told me about this website
                                                            i registered in it and tried it and it was really easy and helpful experience.
                                                            Also i like the fact that customers are able to negotiate with suppliers
                                                            to make a deal about the price of the transaction that will be done
                                                            which is actually so friendly & comfortable for both the buyer and the seller.
                                                        </h6>

                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>
                                                        <span class="fa fa-star checked" style="color: orange;"></span>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <!--Prev next buttons-->

                                        <div class="btn-slider-wrap navigation-top-right">

                                            <div class="btn-prev">
                                                <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
                                                    <use xlink:href="#utouch-icon-arrow-left-1"></use>
                                                </svg>
                                                <svg class="utouch-icon utouch-icon-arrow-left1">
                                                    <use xlink:href="#utouch-icon-arrow-left1"></use>
                                                </svg>
                                            </div>

                                            <div class="btn-next">
                                                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
                                                    <use xlink:href="#utouch-icon-arrow-right-1"></use>
                                                </svg>
                                                <svg class="utouch-icon utouch-icon-arrow-right1">
                                                    <use xlink:href="#utouch-icon-arrow-right1"></use>
                                                </svg>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- ... end Testimonial Slider -->


        <!-- Teammembers -->

        <section id="meet-our-team-about-us-page" class="medium-padding100">
            <div class="container">
                <div class="row">

                    
                    <div style="text-align:center; margin-left: auto; margin-right: auto; position:relative;">
                        <h5 class="c-black" style="font-size:220%;">Meet Our Professional Team</h5>
                        <p style="font-size:120%;">
                            <strong><em>"Coming together is a beginning. Keeping together is progress. Working together is success." ⎯ Henry Ford</em></strong>
                        </p>
                    </div>

                    <div class="teammembers-wrap" style="margin-top: 15%;">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <div class="crumina-module crumina-teammembers-item">

                                <div class="teammembers-thumb">
                                    <img src="<?php echo e(asset('website/img/kareem2.png')); ?>" alt="kareem tarek team member" width="200" style="border-radius: 50px;">
                                </div>

                                <div class="teammember-content">

                                    <div class="teammembers-item-prof"><?php echo e(__('admin/home.admin_title')); ?></div>

                                    <a href="#" style="cursor: context-menu;" class="h5 teammembers-item-name"><?php echo e(__('admin/home.kareem_tarek')); ?></a>

                                    <div class="teammembers-item-prof">18105771</div>

                                    <div class="teammembers-item-prof">01010110457</div>

                                    <ul class="socials socials--round">
                                        <li>
                                            <a href="https://www.facebook.com/" class="social__item facebook">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.twitter.com/" class="social__item twitter">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://mail.google.com/mail/" class="social__item googlePlus">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>

                            <div class="crumina-module crumina-teammembers-item" style="margin-top: 25%;">

                                <div class="teammembers-thumb">
                                    <img src="<?php echo e(asset('website/img/rawan-housseiny.jpg')); ?>" alt="rawan el-housseiny team member" width="200" style="border-radius: 50px;">
                                </div>

                                <div class="teammember-content">

                                     <div class="teammembers-item-prof"><?php echo e(__('admin/home.admin_title')); ?></div>

                                    <a href="#" style="cursor: context-menu;" class="h5 teammembers-item-name"><?php echo e(__('admin/home.rawan_el_housseiny')); ?></a>

                                    <div class="teammembers-item-prof">18106139</div>

                                    <div class="teammembers-item-prof">01120400655</div>

                                    <ul class="socials socials--round">
                                        <li>
                                            <a href="https://www.facebook.com/" class="social__item facebook">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.twitter.com/" class="social__item twitter">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://mail.google.com/mail/" class="social__item googlePlus">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-teammembers-item">

                                <div class="teammembers-thumb">
                                    <img src="<?php echo e(asset('website/img/mustafa.jpeg')); ?>" alt="mustafa hesham team member" width="200" style="border-radius: 50px;">
                                </div>

                                <div class="teammember-content">

                                    <div class="teammembers-item-prof"><?php echo e(__('admin/home.admin_title')); ?></div>

                                    <a href="#" style="cursor: context-menu;" class="h5 teammembers-item-name"><?php echo e(__('admin/home.mustafa_hesham')); ?></a>

                                    <div class="teammembers-item-prof">17105773</div>

                                    <div class="teammembers-item-prof">01066544486</div>

                                    <ul class="socials socials--round">
                                        <li>
                                            <a href="https://www.facebook.com/" class="social__item facebook">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.twitter.com/" class="social__item twitter">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://mail.google.com/mail/" class="social__item googlePlus">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <div class="crumina-module crumina-teammembers-item" style="margin-top: 25%;">

                                <div class="teammembers-thumb">
                                    <img src="<?php echo e(asset('website/img/sara.jpg')); ?>" alt="sara tamer team member" width="200" style="border-radius: 50px;">
                                </div>

                                <div class="teammember-content">

                                    <div class="teammembers-item-prof"><?php echo e(__('admin/home.admin_title')); ?></div>

                                    <a href="#" style="cursor: context-menu;" class="h5 teammembers-item-name"><?php echo e(__('admin/home.sara_tamer')); ?></a>

                                    <div class="teammembers-item-prof">18108814</div>

                                    <div class="teammembers-item-prof">01001959075</div>

                                    <ul class="socials socials--round">
                                        <li>
                                            <a href="https://www.facebook.com/" class="social__item facebook">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.twitter.com/" class="social__item twitter">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://mail.google.com/mail/" class="social__item googlePlus">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>

                            <div class="crumina-module crumina-teammembers-item" style="margin-top: 25%;">

                                <div class="teammembers-thumb">
                                    <img src="<?php echo e(asset('website/img/aseel.jpg')); ?>" alt="aseel ahmed team member" width="200" style="border-radius: 50px;">
                                </div>

                                <div class="teammember-content">

                                    <div class="teammembers-item-prof"><?php echo e(__('admin/home.admin_title')); ?></div>

                                    <a href="#" style="cursor: context-menu;" class="h5 teammembers-item-name"><?php echo e(__('admin/home.aseel_ahmed')); ?></a>

                                    <div class="teammembers-item-prof">18105070</div>

                                    <div class="teammembers-item-prof">01227700001</div>

                                    <ul class="socials socials--round">
                                        <li>
                                            <a href="https://www.facebook.com/" class="social__item facebook">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.twitter.com/" class="social__item twitter">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path>
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://mail.google.com/mail/" class="social__item googlePlus">
                                                <svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                                                    <path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ... end Teammembers -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\events\resources\views/website/about.blade.php ENDPATH**/ ?>