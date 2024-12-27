@extends('web.layouts.master')
@section('title')
    Contact Us
@endsection
@section('content')
    <section id="contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-heading">
                        <h1>Contact Us</h1>
                        <h4>Get in touch with questions or queries.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium bibendum mattis et ante duis selse... more</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="getintouch">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contactus">
                        <h2>Get in touch</h2>
                        <h4>We’re here to help!</h4>
                        <p>Dorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium bibendum mattis ete.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="" method="">
                        <input type="text" name="name" placeholder="Full Name" class="form-control">
                        <input type="text" name="emailphone" placeholder="Email / Phone" class="form-control">
                        <textarea class="form-control" placeholder="Leave us a message" rows="8"></textarea>
                        <div class="get-touch">
                            <p>We’ll reply ASAP!</p>
                            <a class="btn btn-primary" href="javascript:void(0)">Send Message</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutdetails">
        <div class="about-sec bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('assets/web/images/our-friendly-service.jpg')}}" alt="our-friendly-service">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-desc">
                            <h2>Our Friendly Service</h2>
                            <p>Corem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra vel mi quis faucibus. Nullam non arcu magna. Fusce non nibh ut mi aliquet lacinia in.</p>
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What does Greatjob do?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How can I post a job?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How can I add photos/attachments to my job?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What should I include in my job posting?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can I post one job under multiple categories?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Are quotes free?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Will my contact details be visible to everyone?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
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
