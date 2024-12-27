@extends('web.layouts.master')
@section('title')
    About Us
@endsection
@section('content')
    <section id="aboutuspage">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-heading">
                        <h1>About <span>Greatjob</span></h1>
                        <h4>On-demand services. No stress required.</h4>
                        <p>At Greatjob, we connect you with local reliable providers who are ready to lend a helping
                            hand. Simplify life’s chores, one job at a time.</p>
                        <a class="btn btn-primary" href="#">Book now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutdetails">
        <div class="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-desc">
                                    <h2>Simple Beginnings</h2>
                                    <p>In today’s fast-moving world, our schedules are often really full! So, Greatjob
                                        began with one simple idea: connect people with trusted, local providers -
                                        on-demand and ASAP, taking the hassle out of both booking and providing.</p>
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
                            <img src="{{asset('assets/web/images/reliable-connections.jpg')}}"
                                 alt="reliable-connections">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-desc">
                            <h2>Building Reliable Connections</h2>
                            <p>As Greatjob grows, so does our commitment to supporting our customers and providers. We
                                have a focus on building a strong network of local providers ready to lend a reliable
                                helping hand wherever and whenever needed.</p>
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
                            <h2>Greatjob: Shaping Tomorrow</h2>
                            <p>Today, Greatjob is a thriving place that connects people in need of assistance with
                                trustworthy help. Our mission remains simple: to keep communities thriving and support
                                our modern, busy lifestyles to give you back your time.</p>
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
    </section>
    <section id="experience">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2 text-center">
                    <div class="job-experience">
                        <h2>Experience a Greatjob.</h2>
                        <p>Today, Greatjob is a thriving place that connects people in need of assistance with
                            trustworthy help. Our mission remains simple: to keep communities thriving and support our
                            modern, busy lifestyles to give you back your time.</p>
                        <a href="#" class="btn btn-white">Get a Job</a>
                        <a href="#" class="btn btn-primary">Book a Job</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="heading-center">
                        <h2>Meet our Team</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="team-member">
                        <img src="{{asset('assets/web/images/team-1.jpg')}}" alt="team-member">
                        <h4>Kevin</h4>
                        <p>Managing Director</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="team-member">
                        <img src="{{asset('assets/web/images/team-2.png')}}" alt="team-member">
                        <h4>Jimmy</h4>
                        <p>Customer Experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="team-member">
                        <img src="{{asset('assets/web/images/team-3.png')}}" alt="team-member">
                        <h4>Jane</h4>
                        <p>Success Manager</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="team-member">
                        <img src="{{asset('assets/web/images/team-4.png')}}" alt="team-member">
                        <h4>Sarah</h4>
                        <p>Account Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-left">
                        <h2>Greatjob FAQs</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How can I book a Service on Greatjob?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does it take a Service Provider to start my job?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    How can I become a Service Provider on Greatjob?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    How can I contact Greajob?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="get-touch">
                        <p>Got another question?</p>
                        <a class="btn btn-outline-primary" href="{{route('contact-us')}}">Get in touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-script')
@endsection
