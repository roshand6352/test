@extends('web.layouts.master')
@section('title')
    Serives Details
@endsection
@section('content')
    <section class="servide-details">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-heading">
                        <h1>Find a <span>Lawn Mower</span> near you</h1>
                        <h4>Ready to start your job within 30mins.</h4>
                        <p>Of our 258 Lawn Mowers, let’s find who is available in your area now.</p>
                        <div class="search-location">
                            <input type="text" name="location" class="form-control" placeholder="Enter your location">
                            <img src="{{asset('assets/web/images/search-icon.png')}}" alt="search-icon">
                            <a class="btn btn-primary" href="#">Go</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-left">
                        <h2>Lawn Mowing Services</h2>
                        <p>288 of 982 Available Today</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="{{asset('assets/web/images/more-jobs.jpg')}}" alt="more-jobs">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In efficitur convallis gravida. Nam
                            laoreet nunc dolor, dignissim varius tellus commodo in. Aenean non orci eu ligula tempus
                            vestibulum. Nulla dignissim eros vel porttitor ultrices. Donec dapibus quam ut sem vulputate
                            facilisis. Ut dapibus odio lectus, a aliquam lectus</p>
                        <p>Nunc nec nibh elementum, imperdiet erat et, elementum leo. Aliquam erat volutpat. Duis eu
                            ipsum nec nulla gravida porta. Praesent ut pellentesque libero, non interdum est. Nam sapien
                            urna, commodo sed aliquet ac, pulvinar scelerisque ligula. Nam odio augue, aliquet eu
                            consectetur fermentum, finibus ut dolor. Ut quis </p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="availablenow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-left">
                        <h2>Lawn Mowers Available Now</h2>
                        <div class="slider-arrow">
                            <a id="leftbtn"><img src="{{asset('assets/web/images/dark-left-arrow.png')}}"
                                                 alt="dark-left-arrow"></a>
                            <a id="rightbtn"><img src="{{asset('assets/web/images/dark-right-arrow.png')}}"
                                                  alt="dark-right-arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="availablenow-slider">
                        <div class="available-box">
                            <img src="{{asset('assets/web/images/online-user.jpg')}}" alt="online-user">
                            <b>Billie</b>
                            <div class="u-det">
                                <div>
                                    <span></span>
                                    <p>Beg</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/check-icon-round.png')}}" alt="check-icon">
                                    <p>20</p>
                                </div>
                            </div>
                            <h4>$45/h</h4>
                        </div>
                        <div class="available-box">
                            <img src="{{asset('assets/web/images/online-user.jpg')}}" alt="online-user">
                            <b>Bob</b>
                            <div class="u-det">
                                <div>
                                    <span></span>
                                    <p>Beg</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/check-icon-round.png')}}" alt="check-icon">
                                    <p>20</p>
                                </div>
                            </div>
                            <h4>$45/h</h4>
                        </div>
                        <div class="available-box">
                            <img src="{{asset('assets/web/images/online-user.jpg')}}" alt="online-user">
                            <b>Dazza</b>
                            <div class="u-det">
                                <div>
                                    <span></span>
                                    <p>Beg</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/check-icon-round.png')}}" alt="check-icon">
                                    <p>20</p>
                                </div>
                            </div>
                            <h4>$45/h</h4>
                        </div>
                        <div class="available-box">
                            <img src="{{asset('assets/web/images/online-user.jpg')}}" alt="online-user">
                            <b>Billie</b>
                            <div class="u-det">
                                <div>
                                    <span></span>
                                    <p>Beg</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/check-icon-round.png')}}" alt="check-icon">
                                    <p>20</p>
                                </div>
                            </div>
                            <h4>$45/h</h4>
                        </div>
                        <div class="available-box">
                            <img src="{{asset('assets/web/images/online-user.jpg')}}" alt="online-user">
                            <b>Bob</b>
                            <div class="u-det">
                                <div>
                                    <span></span>
                                    <p>Beg</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/check-icon-round.png')}}" alt="check-icon">
                                    <p>20</p>
                                </div>
                            </div>
                            <h4>$45/h</h4>
                        </div>
                        <div class="available-box">
                            <img src="{{asset('assets/web/images/online-user.jpg')}}" alt="online-user">
                            <b>Dazza</b>
                            <div class="u-det">
                                <div>
                                    <span></span>
                                    <p>Beg</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                                <div>
                                    <img src="{{asset('assets/web/images/check-icon-round.png')}}" alt="check-icon">
                                    <p>20</p>
                                </div>
                            </div>
                            <h4>$45/h</h4>
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
                            <a id="leftbtn1"><img src="{{asset('assets/web/images/dark-left-arrow.png')}}"
                                                  alt="dark-left-arrow"></a>
                            <a id="rightbtn1"><img src="{{asset('assets/web/images/dark-right-arrow.png')}}"
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
    <section id="latestreviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-left">
                        <h2>Latest Lawn Mowing Reviews</h2>
                        <div class="slider-arrow">
                            <a id="leftbtn2"><img src="{{asset('assets/web/images/dark-left-arrow.png')}}"
                                                  alt="dark-left-arrow"></a>
                            <a id="rightbtn2"><img src="{{asset('assets/web/images/dark-right-arrow.png')}}"
                                                   alt="dark-right-arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mowing-reviews">
                        <div class="reviews-box">
                            <div class="reviews-head">
                                <div class="profile">
                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                    <p>Jimmy</p>
                                </div>
                                <div class="rating">
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                            </div>
                            <span>In Mosman 5mins ago</span>
                            <p>Rorem ipsum dolor sit amet, consectetur adipiscin gelit. Praen dolor sit amet,
                                consectetur adipiscin gelt...</p>
                        </div>
                        <div class="reviews-box">
                            <div class="reviews-head">
                                <div class="profile">
                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                    <p>Jimmy</p>
                                </div>
                                <div class="rating">
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                            </div>
                            <span>In Mosman 5mins ago</span>
                            <p>Rorem ipsum dolor sit amet, consectetur adipiscin gelit. Praen dolor sit amet,
                                consectetur adipiscin gelt...</p>
                        </div>
                        <div class="reviews-box">
                            <div class="reviews-head">
                                <div class="profile">
                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                    <p>Jimmy</p>
                                </div>
                                <div class="rating">
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                            </div>
                            <span>In Mosman 5mins ago</span>
                            <p>Rorem ipsum dolor sit amet, consectetur adipiscin gelit. Praen dolor sit amet,
                                consectetur adipiscin gelt...</p>
                        </div>
                        <div class="reviews-box">
                            <div class="reviews-head">
                                <div class="profile">
                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                    <p>Jimmy</p>
                                </div>
                                <div class="rating">
                                    <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                    <p>5.0</p>
                                </div>
                            </div>
                            <span>In Mosman 5mins ago</span>
                            <p>Rorem ipsum dolor sit amet, consectetur adipiscin gelit. Praen dolor sit amet,
                                consectetur adipiscin gelt...</p>
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
                        <h2>Lawn Mowing FAQs with Greatjob</h2>
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
    <section id="serviceposter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="earn-money-box poster-provide">
                        <div class="poster-img">
                            <img src="{{asset('assets/web/images/provide-a-service.png')}}" alt="provide-a-service">
                        </div>
                        <div class="poster-description">
                            <h2>Provide a service with Greatjob</h2>
                            <h4>Become a SP - easy as 1, 2, 3!</h4>
                            <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tisa mauris et eros
                                pretium bibendum mattis ete.</p>
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
