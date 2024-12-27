@extends('web.layouts.master')
@section('title')
    News
@endsection
@section('content')
    <section id="becomeprovider">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-heading">
                        <h1>Become a <span>Provider</span></h1>
                        <h4>Do a Greatjob and earn money today!</h4>
                        <p>Earn on your terms, and your schedule. Turn your skills into income and connect with your
                            local community with Greatjob.</p>
                        <a class="btn btn-primary" href="#">Become a Service Provider</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutdetails">
        <div class="about-sec become-provider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-img">
                                    <img src="{{asset('assets/web/images/more-jobs.jpg')}}" alt="more-jobs">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-desc">
                                    <h2>More jobs = More income</h2>
                                    <p>With convenient and easy access to jobs around your location, Greatjob works with
                                        your schedule, flexibly.</p>
                                    <ul>
                                        <li><img src="{{asset('assets/web/images/check-icon.png')}}" alt="check-icon">
                                            Convenient access to local jobs and clients
                                        </li>
                                        <li><img src="{{asset('assets/web/images/check-icon.png')}}" alt="check-icon">
                                            Flexible schedule boosts your earnings
                                        </li>
                                        <li><img src="{{asset('assets/web/images/check-icon.png')}}" alt="check-icon">
                                            Expand your client base and get side gigs
                                        </li>
                                    </ul>
                                    <a href="#">> Become a Greatjobber</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="about-sec become-provider bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-desc">
                            <h2>Work - with no Paperwork</h2>
                            <p>Greatjob provides an easy and accessible platform that takes care of your marketing and
                                admin needs.</p>
                            <ul>
                                <li><img src="{{asset('assets/web/images/check-icon.png')}}" alt="check-icon"> Payments
                                    handled for you - no pesky invoices!
                                </li>
                                <li><img src="{{asset('assets/web/images/check-icon.png')}}" alt="check-icon"> Your
                                    services are marketed on the platform
                                </li>
                                <li><img src="{{asset('assets/web/images/check-icon.png')}}" alt="check-icon"> Provide
                                    excellent service - stress-free
                                </li>
                            </ul>
                            <a href="#">> Get Started Now - it’s easy!</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('assets/web/images/growth.jpg')}}" alt="growth">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-sec become-provider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('assets/web/images/security.jpg')}}" alt="security">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-desc">
                            <h2>Secure Payments: Every Time</h2>
                            <p>Greatjob ensures your hard work will always be rewarded. Our payments are secure and
                                consistent.</p>
                            <ul>
                                <li><img src="{{asset('assets/web/images/check-icon.png')}}" alt="check-icon">
                                    Guaranteed payments on completed jobs
                                </li>
                                <li><img src="{{asset('assets/web/images/check-icon.png')}}" alt="check-icon">
                                    Transparent system with no hidden fees
                                </li>
                                <li><img src="{{asset('assets/web/images/check-icon.png')}}" alt="check-icon"> Set your
                                    own hourly pay rates
                                </li>
                            </ul>
                            <a href="#">> Start Earning Money</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="latestjobs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-left">
                        <h2>Latest Greatjobs Done</h2>
                        <div class="slider-arrow">
                            <a id="leftbtn"><img src="{{asset('assets/web/images/dark-left-arrow.png')}}"
                                                 alt="dark-left-arrow"></a>
                            <a id="rightbtn"><img src="{{asset('assets/web/images/dark-right-arrow.png')}}"
                                                  alt="dark-right-arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="donejob-slider">
                        <div class="donejob-box">
                            <div class="job-head">
                                <div class="profile">
                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                    <p>Peyton L.</p>
                                </div>
                                <div class="rating">
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                            </div>
                            <div class="job-det">
                                <div class="servicename">
                                    <img src="{{asset('assets/web/images/lawn-mowing.png')}}" alt="lawn-mowing">
                                    <p>Lawn Mowing</p>
                                </div>
                                <div class="price-time">
                                    <h3>$45/h</h3>
                                </div>
                            </div>
                            <div class="job-desc">
                                <p>In Crows Nest</p>
                            </div>
                        </div>
                        <div class="donejob-box">
                            <div class="job-head">
                                <div class="profile">
                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                    <p>Peyton L.</p>
                                </div>
                                <div class="rating">
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                            </div>
                            <div class="job-det">
                                <div class="servicename">
                                    <img src="{{asset('assets/web/images/lawn-mowing.png')}}" alt="lawn-mowing">
                                    <p>Lawn Mowing</p>
                                </div>
                                <div class="price-time">
                                    <h3>$45/h</h3>
                                </div>
                            </div>
                            <div class="job-desc">
                                <p>In Crows Nest</p>
                            </div>
                        </div>
                        <div class="donejob-box">
                            <div class="job-head">
                                <div class="profile">
                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                    <p>Peyton L.</p>
                                </div>
                                <div class="rating">
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                            </div>
                            <div class="job-det">
                                <div class="servicename">
                                    <img src="{{asset('assets/web/images/lawn-mowing.png')}}" alt="lawn-mowing">
                                    <p>Lawn Mowing</p>
                                </div>
                                <div class="price-time">
                                    <h3>$45/h</h3>
                                </div>
                            </div>
                            <div class="job-desc">
                                <p>In Crows Nest</p>
                            </div>
                        </div>
                        <div class="donejob-box">
                            <div class="job-head">
                                <div class="profile">
                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                    <p>Peyton L.</p>
                                </div>
                                <div class="rating">
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                            </div>
                            <div class="job-det">
                                <div class="servicename">
                                    <img src="{{asset('assets/web/images/lawn-mowing.png')}}" alt="lawn-mowing">
                                    <p>Lawn Mowing</p>
                                </div>
                                <div class="price-time">
                                    <h3>$45/h</h3>
                                </div>
                            </div>
                            <div class="job-desc">
                                <p>In Crows Nest</p>
                            </div>
                        </div>
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
                                    What does Greatjob do?
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
                                    How can I post a job?
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
                                    How can I add photos/attachments to my job?
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
                                    What should I include in my job posting?
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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                    Can I post one job under multiple categories?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Are quotes free?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                    Will my contact details be visible to everyone?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
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
    <script>
        $('#leftbtn').click(function(){
            $(".slick-prev").click();
        });
        $('#rightbtn').click(function(){
            $(".slick-next").click();
        });
    </script>
@endsection
