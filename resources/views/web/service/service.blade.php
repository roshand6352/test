@extends('web.layouts.master')
@section('title')
    Serives
@endsection
@section('content')
    <section id="aboutuspage" class="servicespage">
        <div class="hero-slider">
            <div class="slide" style="background-image: url(images/slider-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="page-heading">
                                <h1><span>Greatjob</span> Services</h1>
                                <h4>30min arrival time by a local service provider</h4>
                                <p>Mon 10:52AM: There are 798 Greatjobbers ready for bookings. amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium... more</p>
                                <a class="btn btn-primary" href="book-now.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url(images/slider-2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="page-heading">
                                <h1><span>Greatjob</span> Services</h1>
                                <h4>30min arrival time by a local service provider</h4>
                                <p>Mon 10:52AM: There are 798 Greatjobbers ready for bookings. amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium... more</p>
                                <a class="btn btn-primary" href="book-now.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url(images/slider-3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="page-heading">
                                <h1><span>Greatjob</span> Services</h1>
                                <h4>30min arrival time by a local service provider</h4>
                                <p>Mon 10:52AM: There are 798 Greatjobbers ready for bookings. amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium... more</p>
                                <a class="btn btn-primary" href="book-now.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url(images/slider-4.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="page-heading">
                                <h1><span>Greatjob</span> Services</h1>
                                <h4>30min arrival time by a local service provider</h4>
                                <p>Mon 10:52AM: There are 798 Greatjobbers ready for bookings. amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium... more</p>
                                <a class="btn btn-primary" href="book-now.html">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="serviceslist">
        <div class="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-desc">
                                    <h2>Lawn Mowing</h2>
                                    <p>There are 258 Lawn Mowers who can do a Greatjob for you. Dorem ipsum dolor sit amet, consectetur adtis ete.</p>
                                    <a class="btn btn-outline-primary" href="{{route('service-detail',2)}}">More</a>
                                    <a class="btn btn-primary" href="#">Book</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-img">
                                    <img src="{{asset('assets/web/images/beginnings.jpg')}}" alt="beginnings">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="about-sec bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('assets/web/images/reliable-connections.jpg')}}" alt="reliable-connections">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-desc">
                            <h2>Babysitting</h2>
                            <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium bibendum mattis ete.</p>
                            <a class="btn btn-outline-primary" href="{{route('service-detail',2)}}">More</a>
                            <a class="btn btn-primary" href="#">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-desc">
                            <h2>Dog walking</h2>
                            <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium bibendum mattis ete.</p>
                            <a class="btn btn-outline-primary" href="{{route('service-detail',2)}}">More</a>
                            <a class="btn btn-primary" href="#">Book</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('assets/web/images/shaping-tomorrow.jpg')}}" alt="shaping-tomorrow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-sec bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('assets/web/images/reliable-connections.jpg')}}" alt="reliable-connections">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-desc">
                            <h2>Car washing</h2>
                            <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium bibendum mattis ete.</p>
                            <a class="btn btn-outline-primary" href="{{route('service-detail',2)}}">More</a>
                            <a class="btn btn-primary" href="#">Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="serviceposter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="earn-money-box">
                        <div class="poster-description">
                            <h2>Do a Greatjob!</h2>
                            <h4>Become a Greatjob service provider today</h4>
                            <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium bibendum mattis ete.</p>
                            <a href="#">More</a>
                        </div>
                        <div class="poster-img">
                            <img src="{{asset('assets/web/images/earn-money.jpg')}}" alt="earn-money">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-script')
@endsection
