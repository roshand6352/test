<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Great Job</title>
    <meta name="description" content="At Greatjob, we connect you with local reliable providers who are ready to lend a helping hand. Earn money doing Greatjobs.">
    <meta name="keywords" content="Earn, money, doing, Greatjobs, greatjob, providers, washing, lawn">
    <meta name="author" content="greatjob">
    <meta name="author" content="greatjob">
    <meta property="og:title" content="Great Job - Become A Provider">
    <meta property="og:description" content="At Greatjob, we connect you with local reliable providers who are ready to lend a helping hand. Earn money doing Greatjobs.">
    <meta property="og:image" content="images/more-jobs.jpg">
    <meta property="og:url" content="https://great-job.projectdemo.click/dashboard.html">
    <link rel="icon" type="image/png" href="{{asset('assets/web/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/web/images/favicon.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/web/images/favicon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/web/images/favicon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/web/images/favicon-144x144.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/web/css/bootstrap.min.css')}}">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/web/css/style.css')}}">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light dashboardnav">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('assets/web/images/logo.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="{{route('provider-dashboard')}}">
                            <span class="material-symbols-outlined">grid_view</span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my-bookings.html">
                            <span class="material-symbols-outlined">calendar_today</span>
                            My bookings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="find-provider.html">
                            <span class="material-symbols-outlined">trip</span>
                            Find a job
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my-notifications.html">
                            <span class="material-symbols-outlined">notifications</span>
                            Notifications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="messages.html">
                            <span class="material-symbols-outlined">chat_bubble</span>
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my-account.html">
                            <span class="material-symbols-outlined">person</span>
                            My account
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <main id="dashboard">
        <section id="pageheading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dheading">
                            <h1>Good Afternoon, {{$user->name}}</h1>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#availabity">Your
                                Availability</a>
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
                                <h2>My Jobs</h2>
                                <a href="#">All bookings <span class="material-symbols-outlined">east</span></a>
                            </div>
                            <div class="row">
                                @if(count($my_jobs) > 0)
                                    @foreach($my_jobs as $my_job)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="jobbooking-list active">
                                                <div class="list-head">
                                                    <div class="uprofile">
                                                        <div class="pro">
                                                            <img src="{{asset('assets/web/images/review.png')}}"
                                                                 alt="user">
                                                            <p>Liam</p>
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
                                    @endforeach
                                @else
                                    <div class="col-lg-4 col-md-6">
                                        <b>Not Found</b>
                                    </div>
                                @endif
                                {{--                                <div class="col-lg-4 col-md-6">--}}
                                {{--                                    <div class="jobbooking-list">--}}
                                {{--                                        <div class="list-head">--}}
                                {{--                                            <div class="uprofile">--}}
                                {{--                                                <div class="pro">--}}
                                {{--                                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">--}}
                                {{--                                                    <p>Sandt</p>--}}
                                {{--                                                </div>--}}
                                {{--                                                <div class="prorating">--}}
                                {{--                                                    <span class="material-icons">star</span>--}}
                                {{--                                                    <p>5.0</p>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="utime">--}}
                                {{--                                                <div class="time-icon">--}}
                                {{--                                                    <span class="material-symbols-outlined">schedule</span>--}}
                                {{--                                                    <p>14:45<br>TODAY</p>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <p><b>Babysitting</b> at <b>Mosman</b></p>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                {{--                                <div class="col-lg-4 col-md-6">--}}
                                {{--                                    <div class="jobbooking-list">--}}
                                {{--                                        <div class="list-head">--}}
                                {{--                                            <div class="uprofile">--}}
                                {{--                                                <div class="pro">--}}
                                {{--                                                    <img src="{{asset('assets/web/images/review.png')}}" alt="user">--}}
                                {{--                                                    <p>Jiayi</p>--}}
                                {{--                                                </div>--}}
                                {{--                                                <div class="prorating">--}}
                                {{--                                                    <span class="material-icons">star</span>--}}
                                {{--                                                    <p>5.0</p>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="utime">--}}
                                {{--                                                <div class="time-icon">--}}
                                {{--                                                    <span class="material-symbols-outlined">schedule</span>--}}
                                {{--                                                    <p>14:45<br>TOMORROW</p>--}}
                                {{--                                                </div>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <p><b>Car Washing</b> at <b>Mosman</b></p>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

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
                                <h2>Job Requests</h2>
                                <a href="#"><span class="material-symbols-outlined">east</span></a>
                            </div>
                            @foreach($job_requests as $job_request)
                            <div class="job-requests-list">
                                <div class="jobname">
                                    <img src="{{asset('assets/web/images/lawn-mowing.svg')}}" alt="Lawn mowing">
                                    <p><b>Lawn Mowing</b> in <b>Waverton</b></p>
                                </div>
                                <div class="jobtime">
                                    <span>03:28</span>
                                </div>
                            </div>
                            @endforeach
{{--                            <div class="job-requests-list">--}}
{{--                                <div class="jobname">--}}
{{--                                    <img src="{{asset('assets/web/images/dog.svg')}}" alt="Lawn mowing">--}}
{{--                                    <p><b>Dog walking</b> in <b>Crows Nest</b></p>--}}
{{--                                </div>--}}
{{--                                <div class="jobtime">--}}
{{--                                    <span>03:28</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="job-requests-list">--}}
{{--                                <div class="jobname">--}}
{{--                                    <img src="{{asset('assets/web/images/baby-sitting.svg')}}" alt="baby sitting">--}}
{{--                                    <p><b>Babysitting</b> in <b>Mosman</b></p>--}}
{{--                                </div>--}}
{{--                                <div class="jobtime">--}}
{{--                                    <span>03:28</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="noti-list">
                            <div class="widget-heading">
                                <h2>My notifications</h2>
                                <a href="#"><span class="material-symbols-outlined">east</span></a>
                            </div>
                            @foreach($notifications as $notification)
                            <div class="notifications-list">
                                <div class="provider-work-icon noti-uprofile">
                                    <img src="{{asset('assets/web/images/noti-1.png')}}" alt="Joan">
                                </div>
                                <div class="noti-short-desc">
                                    <p>Joan hired you for: <b>Lawn Mowing</b> at <b>Chatswood</b></p>
                                    <span>2 mins ago</span>
                                </div>
                            </div>
                            @endforeach
{{--                            <div class="notifications-list">--}}
{{--                                <div class="provider-work-icon noti-uprofile">--}}
{{--                                    <img src="{{asset('assets/web/images/noti-2.png')}}" alt="Lawn">--}}
{{--                                </div>--}}
{{--                                <div class="noti-short-desc">--}}
{{--                                    <p>You completed a job: <b>Lawn Mowing</b> at <b>Waverton</b></p>--}}
{{--                                    <span>4hrs ago</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="notifications-list">--}}
{{--                                <div class="provider-work-icon noti-uprofile">--}}
{{--                                    <img src="{{asset('assets/web/images/noti-3.png')}}" alt="Kate">--}}
{{--                                </div>--}}
{{--                                <div class="noti-short-desc">--}}
{{--                                    <p>Kate requested you for: <b>Babysitting</b> at <b>Crows</b></p>--}}
{{--                                    <span>15hrs ago</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
                                    <a href="{{route('my-profile-sp')}}"><span
                                            class="material-symbols-outlined">east</span></a>
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

    <div class="modal fade" id="availabity" tabindex="-1" aria-labelledby="availabityLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <a data-bs-dismiss="modal" aria-label="Close" href="javascript:void()">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 text-center">
                                <div class="availabity-update">
                                    <div class="signup-logo">
                                        <img src="{{asset('assets/web/images/logo.png')}}" alt="logo">
                                    </div>
                                    <h1>Update Your Availability</h1>
                                    <div class="form-card availability">
                                        <button type="button" class="edit-availability" data-bs-toggle="modal"
                                                data-bs-target="#availability">
                                            <img src="{{asset('assets/web/images/edit-icon.png')}}" alt="edit">
                                        </button>
                                        <table class="availability-time">
                                            <tbody>
                                            <tr>
                                                <th>Day</th>
                                                <th>Morning</th>
                                                <th>Afternoon</th>
                                                <th>Evening</th>
                                                <th>Night</th>
                                            </tr>
                                            <tr>
                                                <td>Mon</td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                            </tr>
                                            <tr>
                                                <td>Tue</td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                            </tr>
                                            <tr>
                                                <td>Wed</td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                            </tr>
                                            <tr>
                                                <td>Thu</td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                            </tr>
                                            <tr>
                                                <td>Fri</td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                            </tr>
                                            <tr>
                                                <td>Sat</td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                            </tr>
                                            <tr>
                                                <td>Sun</td>
                                                <td><img src="{{asset('assets/web/images/check-dark.png')}}"
                                                         alt="check"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                                <td><img src="{{asset('assets/web/images/close-dark-1.png')}}"
                                                         alt="uncheck"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>Tip: You will get notified of Jobs and can still Accept/Decline.</p>
                                    <input type="button" name="Update" class="btn btn-primary" value="Update">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="availability" tabindex="-1" aria-labelledby="availabilityLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <table>
                        <tr>
                            <th>Day</th>
                            <th>Morning</th>
                            <th>Afternoon</th>
                            <th>Evening</th>
                            <th>Night</th>
                        </tr>
                        <tr>
                            <td>Mon</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Tue</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Wed</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Thu</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Fri</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sat</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="on" type="checkbox" role="switch" checked>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sun</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="off" type="checkbox" role="switch">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-primary">Done</button>
                </div>
            </div>
        </div>
    </div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-link">
                            <ul>
                                <li><a href="#">Lawn mowing</a></li>
                                <li><a href="#">Baby sitting</a></li>
                                <li><a href="#">Dog walking</a></li>
                                <li><a href="#">Car washing</a></li>
                                <li><a href="#">All services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-link">
                            <ul>
                                <li><a href="{{route('about-us')}}">About Us</a></li>
                                <li><a href="{{route('new')}}">News</a></li>
                                <li><a href="privacy.html">Privacy</a></li>
                                <li><a href="terms.html">Terms</a></li>
                                <li><a href="{{route('contact-us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-link">
                            <ul>
                                <li><a href="#">Get a job</a></li>
                                <li><a href="{{route('customer-login')}}">Login</a></li>
                                <li><a href="{{route('customer-signup')}}">Sign up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2">
                <div class="footer-info">
                    <a href="javascript:void(0)"><img src="images/logo-white.png" alt="logo-white"></a>
                    <label>Subscribe to the Greatjob Newsletter</label>
                    <form action="" method="">
                        <input type="text" name="email" placeholder="Email address" class="form-control">
                        <button type="submit">Go</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-copy">
                    <p>Copyright © Greatjob 2025</p>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2">
                <div class="footer-copy">
                    <ul>
                        <li><a href="javascript:void(0)"><img src="images/facebook-icon.png" alt="facebook-icon"></a></li>
                        <li><a href="javascript:void(0)"><img src="images/x-icon.png" alt="x-icon"></a></li>
                        <li><a href="javascript:void(0)"><img src="images/instagram-icon.png" alt="instagram-icon"></a></li>
                        <li><a href="javascript:void(0)"><img src="images/linkedin-icon.png" alt="linkedin-icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src='https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js'></script>
<script src="js/script.js"></script>
</body>
</html>
