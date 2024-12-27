@extends('web.layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <main id="dashboard">
        <section id="pageheading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dheading">
                            <h1>Good Afternoon, {{Auth::user()->name}}</h1>
                            <a href="#" class="btn btn-primary">Book a Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="jobs-bookings">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="jobs-bookings-box">
                            <div class="jobs-bookings-heading">
                                <h2>My bookings</h2>
                                <a href="#">All bookings <span class="material-symbols-outlined">east</span></a>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="jobbooking-list active">
                                        <div class="list-head">
                                            <div class="uprofile">
                                                <div class="pro">
                                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                                    <p>Bob</p>
                                                </div>
                                                <div class="prorating">
                                                    <span class="material-icons">star</span>
                                                    <p>5.0</p>
                                                </div>
                                            </div>
                                            <div class="utime">
                                                <div class="time-icon">
                                                    <span class="material-symbols-outlined">schedule</span>
                                                    <p>14:45<br>STARTED</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p><b>Lawn Mowing</b> at <b>Mosman</b></p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="jobbooking-list">
                                        <div class="list-head">
                                            <div class="uprofile">
                                                <div class="pro">
                                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                                    <p>Sandt</p>
                                                </div>
                                                <div class="prorating">
                                                    <span class="material-icons">star</span>
                                                    <p>5.0</p>
                                                </div>
                                            </div>
                                            <div class="utime">
                                                <div class="time-icon">
                                                    <span class="material-symbols-outlined">schedule</span>
                                                    <p>14:45<br>TODAY</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p><b>Babysitting</b> at <b>Mosman</b></p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="jobbooking-list">
                                        <div class="list-head">
                                            <div class="uprofile">
                                                <div class="pro">
                                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                                    <p>Jiayi</p>
                                                </div>
                                                <div class="prorating">
                                                    <span class="material-icons">star</span>
                                                    <p>5.0</p>
                                                </div>
                                            </div>
                                            <div class="utime">
                                                <div class="time-icon">
                                                    <span class="material-symbols-outlined">schedule</span>
                                                    <p>14:45<br>TOMORROW</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p><b>Car Washing</b> at <b>Mosman</b></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="avalnoti">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="available-providers">
                            <div class="widget-heading">
                                <h2>Providers available now</h2>
                                <a href="#"><span class="material-symbols-outlined">east</span></a>
                            </div>
                            <div class="providers-list">
                                <div class="pro-name">
                                    <img src="{{asset('assets/web/images/providers-1.png')}}" alt="providers">
                                    <b>Billy</b>
                                </div>
                                <div class="pro-det">
                                    <div class="pro-stars">
                                        <span class="material-icons">star</span>
                                        <p>5.0</p>
                                    </div>
                                    <div class="location">
                                        <span class="material-symbols-outlined">location_on</span>
                                        <p>4 km</p>
                                    </div>
                                    <div class="provider-exp">
                                        <span class="pro"></span>
                                        <p>Pro</p>
                                    </div>
                                    <div class="provider-work-icon">
                                        <img src="{{asset('assets/web/images/lawn-mowing.svg')}}" alt="Lawn mowing">
                                    </div>
                                </div>
                            </div>
                            <div class="providers-list">
                                <div class="pro-name">
                                    <img src="{{asset('assets/web/images/providers-2.png')}}" alt="providers">
                                    <b>Samantha</b>
                                </div>
                                <div class="pro-det">
                                    <div class="pro-stars">
                                        <span class="material-icons">star</span>
                                        <p>5.0</p>
                                    </div>
                                    <div class="location">
                                        <span class="material-symbols-outlined">location_on</span>
                                        <p>4 km</p>
                                    </div>
                                    <div class="provider-exp">
                                        <span class="int"></span>
                                        <p>Int</p>
                                    </div>
                                    <div class="provider-work-icon">
                                        <img src="{{asset('assets/web/images/baby-sitting.svg')}}" alt="baby sitting">
                                    </div>
                                </div>
                            </div>

                            <div class="providers-list">
                                <div class="pro-name">
                                    <img src="{{asset('assets/web/images/providers-3.png')}}" alt="providers">
                                    <b>Josh</b>
                                </div>
                                <div class="pro-det">
                                    <div class="pro-stars">
                                        <span class="material-icons">star</span>
                                        <p>5.0</p>
                                    </div>
                                    <div class="location">
                                        <span class="material-symbols-outlined">location_on</span>
                                        <p>4 km</p>
                                    </div>
                                    <div class="provider-exp">
                                        <span class="ent"></span>
                                        <p>Ent</p>
                                    </div>
                                    <div class="provider-work-icon">
                                        <img src="{{asset('assets/web/images/car-washing.svg')}}" alt="car-washing">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="noti-list">
                            <div class="widget-heading">
                                <h2>My notifications</h2>
                                <a href="#"><span class="material-symbols-outlined">east</span></a>
                            </div>
                            <div class="notifications-list">
                                <div class="provider-work-icon">
                                    <img src="{{asset('assets/web/images/lawn-mowing.svg')}}" alt="Lawn mowing">
                                </div>
                                <div class="noti-short-desc">
                                    <p>You accepted Joan for your job: <b>Lawn Mowing</b> at <b>Mosan</b></p>
                                    <span>2 mins ago</span>
                                </div>
                            </div>
                            <div class="notifications-list">
                                <div class="provider-work-icon">
                                    <img src="{{asset('assets/web/images/baby-sitting.svg')}}" alt="baby sitting">
                                </div>
                                <div class="noti-short-desc">
                                    <p>John finished a job: <b>Babysitting</b> at <b>Mosan</b></p>
                                    <span>4hrs ago</span>
                                </div>
                            </div>
                            <div class="notifications-list">
                                <div class="provider-work-icon">
                                    <img src="{{asset('assets/web/images/car-washing.svg')}}" alt="car-washing">
                                </div>
                                <div class="noti-short-desc">
                                    <p>Kate accepted your job request for: <b>Carwashing</b></p>
                                    <span>15hrs ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="direct-link">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="link-box">
                                    <div>
                                        <span class="material-symbols-outlined">person</span>
                                        <p>My Profile</p>
                                    </div>
                                    <a href="{{route('my-profile-c')}}"><span class="material-symbols-outlined">east</span></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="link-box">
                                    <div>
                                        <span class="material-symbols-outlined">chat_bubble</span>
                                        <p>Messages</p>
                                    </div>
                                    <a href="#"><span class="material-symbols-outlined">east</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="link-box">
                                    <div>
                                        <span class="material-symbols-outlined">settings</span>
                                        <p>Settings</p>
                                    </div>
                                    <a href="#"><span class="material-symbols-outlined">east</span></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="link-box">
                                    <div>
                                        <span class="material-symbols-outlined">mail</span>
                                        <p>Contact us</p>
                                    </div>
                                    <a href="#"><span class="material-symbols-outlined">east</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('custom-script')
@endsection
