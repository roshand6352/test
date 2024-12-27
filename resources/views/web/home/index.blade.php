@extends('web.layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <section id="hero">
        <div class="hero-slider">
            <div class="slide" style="background-image: url(images/slider-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="hero-caption">
                                <h1>What a <span>Great<span>job</span></span>!</h1>
                                <h4>A helping hand at your door in just 30 minutes.</h4>
                                <p>From lawn mowing to car washing, Greatjob connects you with trusted service providers
                                    quickly and easily — so you can reclaim your time.</p>
                                <a class="btn btn-outline-primary" href="about.html">About us</a>
                                <a class="btn btn-primary" href="sign-up-service-providers.html">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url(images/slider-2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="hero-caption">
                                <h1>What a <span>Great<span>job</span><span>!</span></span></h1>
                                <h4>A helping hand at your door in just 30 minutes.</h4>
                                <p>From lawn mowing to car washing, Greatjob connects you with trusted service providers
                                    quickly and easily — so you can reclaim your time.</p>
                                <a class="btn btn-outline-primary" href="about.html">About us</a>
                                <a class="btn btn-primary" href="sign-up-service-providers.html">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url(images/slider-3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="hero-caption">
                                <h1>What a <span>Great<span>job</span><span>!</span></span></h1>
                                <h4>A helping hand at your door in just 30 minutes.</h4>
                                <p>From lawn mowing to car washing, Greatjob connects you with trusted service providers
                                    quickly and easily — so you can reclaim your time.</p>
                                <a class="btn btn-outline-primary" href="about.html">About us</a>
                                <a class="btn btn-primary" href="sign-up-service-providers.html">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url(images/slider-4.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="hero-caption">
                                <h1>What a <span>Great<span>job</span><span>!</span></span></h1>
                                <h4>A helping hand at your door in just 30 minutes.</h4>
                                <p>From lawn mowing to car washing, Greatjob connects you with trusted service providers
                                    quickly and easily — so you can reclaim your time.</p>
                                <a class="btn btn-outline-primary" href="about.html">About us</a>
                                <a class="btn btn-primary" href="sign-up-service-providers.html">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-left">
                        <h2>Greatjob Services</h2>
                        <p>288 of 982 Available Today</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services-box">
                        <img src="{{asset('assets/web/images/lawn-mowing.jpg')}}" alt="Lawn Mowing">
                        <div class="service-details">
                            <h3>Lawn Mowing</h3>
                            <p>Book a Lawn Mower now and give your backyard a fresh cut.</p>
                            <a href="lawn-mowing.html">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services-box">
                        <img src="{{asset('assets/web/images/baby-sitting.jpg')}}" alt="Lawn Mowing">
                        <div class="service-details">
                            <h3>Baby Sitting</h3>
                            <p>For worry-free supervision while you’re out, book a trusted Babysitter.</p>
                            <a href="baby-sitting.html">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services-box">
                        <img src="{{asset('assets/web/images/dog-walking.jpg')}}" alt="Lawn Mowing">
                        <div class="service-details">
                            <h3>Dog Walking</h3>
                            <p>Book a Dog Walker and get some exercise in for your pup while you relax.</p>
                            <a href="dog-walking.html">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services-box">
                        <img src="{{asset('assets/web/images/car-washing.jpg')}}" alt="Lawn Mowing">
                        <div class="service-details">
                            <h3>Car Washing</h3>
                            <p>Spotless - book a Car Washer and refresh your ride: good as new!</p>
                            <a href="car-washing.html">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="makesgreat">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="heading-center">
                        <h2>What makes Greatjob, great?</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="great-box">
                        <img src="{{asset('assets/web/images/time.png')}}" alt="time">
                        <h3>Just 30 Minutes</h3>
                        <p>Prompt, on-demand service: with a provider able to be at your door within just 30 minutes of
                            booking.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="great-box">
                        <img src="{{asset('assets/web/images/location.png')}}" alt="location">
                        <h3>Local to You</h3>
                        <p>We offer providers local to you, to ensure quick and reliable helping hands right from your
                            community.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="great-box">
                        <img src="{{asset('assets/web/images/verified.png')}}" alt="verified">
                        <h3>Verified Profiles</h3>
                        <p>Our providers are trusted: to grant you peace of mind when selecting one that suits your
                            needs.</p>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="all-servicebtn">
                        <a href="all-services.html" class="btn btn-primary">All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="earnmoney">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="earn-money-box">
                        <div class="poster-img">
                            <img src="{{asset('assets/web/images/earn-money.jpg')}}" alt="earn-money">
                        </div>
                        <div class="poster-description">
                            <h2>Earn money doing Greatjobs</h2>
                            <h4>Flexible work to fit your schedule</h4>
                            <p>Join a growing network of providers, turn your skills into income, and connect with
                                customers right in your area.</p>
                            <a href="#">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-script')
@endsection
