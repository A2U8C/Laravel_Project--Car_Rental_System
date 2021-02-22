@extends('layouts.app')

@section('content')
 <!--<h1>{{$title}}</h1>
   <div class="jumbotron text-center">
        <h1>Welcome to Car rental system</h1>
        <p>This system is developed using laravel framework</p>
        
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        
        </div>-->

    </div>


    <!--== Preloader Area Start ==
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>-->
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    




   <!-- == Header Area End ==-->

    <!--== SlideshowBg Area Start ==-->
<!--
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>BOOK A CAR TODAY!</h1>
                                <p>FOR AS LOW AS 500 INR A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

-->


    
    <section id="slideslow-bg" style="height: 712px;" class="vegas-container">
        <div class="vegas-slide vegas-transition-fade vegas-transition-fade-in" 
        style="transition: all 0ms ease 0s;">
        <div class="vegas-slide-inner vegas-animation-kenburnsUpRight" 
        style="background-image: url('/img/slider-img/slider-img-3.jpg'); 
        background-color: rgb(0, 0, 0); 
        background-position: center center; 
        background-size: cover; animation-duration: 20000ms;">
        </div>
        </div>
        <div class="vegas-slide vegas-transition-fade vegas-transition-fade-in vegas-transition-fade-out" style="transition: all 0ms ease 0s;">
        <div class="vegas-slide-inner vegas-animation-kenburnsUpLeft" 
        style="background-image: url('/img/slider-img/slider-img-4.jpg'); 
        background-color: rgb(0, 0, 0); 
        background-position: center center; background-size: cover; 
        animation-duration: 2000ms;">
        </div>
        </div>
        <div class="vegas-slide vegas-transition-fade vegas-transition-fade-in vegas-transition-fade-out" style="transition: all 0ms ease 0s;">
        <div class="vegas-slide-inner vegas-animation-kenburnsDown" 
        style="background-image: url('/img/slider-img/slider-img-1.jpg'); background-color: rgb(0, 0, 0); 
        background-position: center center; background-size: cover; animation-duration: 2000ms;">
        </div>
        </div>
        <div class="vegas-overlay">
        </div>
        <div class="vegas-timer">
        <div class="vegas-timer-progress" style="transition-duration: 0ms;">
        </div>
        </div>
        <div class="vegas-wrapper" style="overflow: visible; padding: 0px;"><div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="slideshowcontent">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h1>BOOK A CAR TODAY!</h1>
                                        <p>FOR AS LOW AS 500 INR A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div></section>



                
    <!--== SlideshowBg Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Car Rentals made simple with just a click !</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>We want to make renting a car as simple and personal as driving your own.Renting a car brings you freedom, and we’ll help you find the right car for you at a great price. But there’s much more to us than that. We're here to make renting a car a lot less hassle..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="/img/home-2-about.png" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item active">
                            <i class="fa fa-car"></i>
                            <h3>SERVICE MATTERS</h3>
                            <p>So we use real reviews, genuine customer feedback and our own experience to guide you through your best options.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>WIDE NETWORK</h3>
                            <p>From household names to small local specialists – to bring you the cars, choices and deals that make the difference to your trip.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>24x7 SUPPORT</h3>
                            <p>Our customer team is here to support you through your trip, wherever and whenever you need extra help.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Us Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/img/partner/partner-logo-1.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/img/partner/partner-logo-2.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/img/partner/partner-logo-3.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/img/partner/partner-logo-4.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/img/partner/partner-logo-5.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/img/partner/partner-logo-7.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/img/partner/partner-logo-6.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>We Bring you Unbeatable Value and Peace of Mind Throughout your rental car journey..</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-taxi"></i>
							<h3>RENTAL CAR</h3>
							<p>One-Click Car Rental Service.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-cog"></i>
							<h3>CAR REPAIR</h3>
							<p>Our Mechanics will help you out if you unwillingly damage the car.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-map-marker"></i>
							<h3>DELIVERY SERVICE</h3>
							<p>We Deliver Prime SUV and Sedans to your location.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-life-ring"></i>
							<h3>life insurance</h3>
							<p>We Offer Life Insurance,so Sit Back relaxed and enjoy your ride .</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-bath"></i>
							<h3>car wash</h3>
							<p>Our cars are cleaned and washed after every ride to proivde you a clean & pleasant environment</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-phone"></i>
							<h3>support team</h3>
							<p>Our support team is availabe 24x7 to assist & help you out.</p>
						</div>
						<!-- Single Service End -->
					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Pricing Area Start ==-->
    <section id="pricing-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Only quality for clients</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Explore the wide range of cars available and select what suits best for you.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Pricing Table Conatent Start -->
            <div class="row">
                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>STANDARD</h3>
                        <h2>Micro / Mini</h2>
                        <h5>(OPTIONAL INSUARANCE) </h5>

                        <ul class="package-list">
                            <li>PICK UP YOUR VEHICLE</li>
                            <li>MANUAL TRANSMISSION</li>
                            <li>COMPACT CARS</li>
                            <li>POCKET FRIENDLY</li>
                            <li>CONVINIENT PARKING</li>
                            <li>AUDIO SYSTEM</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>BUSINESS</h3>
                        <h2>SEDAN</h2>
                        <h5>FULL INSURANCE</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>AUTOMATIC TRANSMISSION</li>
                            <li>KEYLESS RIDE</li>
                            <li>HIGHLY SPACIOUS</li>
                            <li>AGGREGATE MILEAGE</li>
                            <li>ANDROID UI</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table">
                        <h3>LUXURY</h3>
                        <h2>SUV</h2>
                        <h5>FULL INSURANCE</h5>

                        <ul class="package-list">
                            <li>FREE VEHICLE DELIVERY</li>
                            <li>AUTOMATIC TRANSMISSION</li>
                            <li>EXTREMELY SPACIOUS</li>
                            <li>SUNROOF & MINIBAR</li>
                            <li>FRONT & REAR CAMERAS</li>
                            <li>INFOTAINMENT SYSTEM</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Pricing Table -->
            </div>
            <!-- Pricing Table Conatent End -->
        </div>
    </section>
    <!--== Pricing Area End ==-->

     

    <!--== Articles Area Start ==-->
    <section id="tips-article-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Tips and articles</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Our team takes FAQ seriously.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Articles Content Wrap Start -->
            <div class="row">
                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="/img/article/arti-thumb-1.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a>WILL ENTERPRISE PICK ME UP?</a></h3>
                                            <div class="article-meta">
                                            </div>

                                            <p>Yes, our free pick-up service is available at non-airport locations and during normal business hours. To schedule your pick up time or make additional arrangements, please call you local rental office directly. Once picked up and back at the office, a friendly rental representative will complete your paper work and have you on the road in no time.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article middle">
                        <div class="row">

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-xl-none">
                                <div class="article-thumb">
                                    <img src="/img/article/arti-thumb-2.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a>ENTERPRISE CAR RENTAL CANCELLATION AND CHANGE POLICY</a></h3>
                                            <div class="article-meta">
                                            </div>

                                            <p>If you have not picked up your vehicle you can view, modify, or cancel your reservation by clicking here. When visiting this page, you will need to make sure all fields are filled out. If you fail to enter in your confirmation number, first name, and last name -- the reservation will not be found.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->

                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5 d-none d-xl-block">
                                <div class="article-thumb">
                                    <img src="/img/article/arti-thumb-2.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="/img/article/arti-thumb-3.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a>MY VEHICLE WAS DAMAGED AND I NEED TO RENT A CAR. WHAT CAN I EXPECT?</a></h3>
                                            <div class="article-meta">
                                            </div>

                                            <p>As the insured, once your reservation is set up, your local office will fulfill your needs within 24 hours. Upon arriving at the Enterprise office, you will be expected to show the branch that you are on the policy. The local office will work with your insurance provider to set up a direct bill for the covered amount of your rental. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->
            </div>
            <!-- Articles Content Wrap End -->
        </div>
    </section>
    <!--== Articles Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
| Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->


        

    @endsection