<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GreatJob - Sign Up Customer</title>
    <meta name="description"
          content="At Greatjob, we connect you with local reliable providers who are ready to lend a helping hand. Earn money doing Greatjobs.">
    <meta name="keywords" content="Earn, money, doing, Greatjobs, greatjob, providers, washing, lawn">
    <meta name="author" content="greatjob">
    <meta name="author" content="greatjob">
    <meta property="og:title" content="Great Job - Sign Up Customer">
    <meta property="og:description"
          content="At Greatjob, we connect you with local reliable providers who are ready to lend a helping hand. Earn money doing Greatjobs.">
    <meta property="og:image" content="images/logo.png">
    <meta property="og:url" content="{{url('/customer-signup')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/web/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/web/images/favicon.png')}}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/web/images/favicon-72x72.png')}}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/web/images/favicon-114x114.png')}}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/web/images/favicon-144x144.png')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/web/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/web/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
<section id="sign-up">
    <div class="close-signup">
        <a href="{{route('home')}}"><img src="{{asset('assets/web/images/close-dark.png')}}" alt="close-dark"></a>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                <div class="pt-4 mt-3 mb-3">
                    <ul id="progressbar">
                        <li class="active" id="account"></li>
                        <li id="personal"></li>
                        <li id="payment"></li>
                        <li id="profile"></li>
                        <li id="interested"></li>
                        <li id="confirm"></li>
                    </ul>
                    <div class="signup-logo">
                        <img src="{{asset('assets/web/images/logo.png')}}" alt="logo">
                    </div>
                    <form id="msform" enctype="multipart/form-data">
                        <fieldset>
                            <h1>Sign up</h1>
                            <p>Sign up to Greatjob in 3mins and book services today</p>
                            <div class="form-card">
                                <input type="text" name="name" id="name" placeholder="Your name" class="form-control"/>
                                <div id="nameError" class="error"></div>
                            </div>
                            <button type="button" class="next action-button btn btn-primary">Continue
                            </button>
                            <div class="sign-up-info">
                                <img src="{{asset('assets/web/images/lock.png')}}" alt="logo">
                                <p>Privacy is paramount. Sign up process encrypted.</p>
                            </div>
                            <hr>
                            <div class="login-links">
                                <p>Already have an account? <a href="{{route('customer-login')}}">Login</a></p>
                                <p>Want to get jobs on Greatjob?
                                    <a href="{{route('provider-signup')}}">Provider
                                        registration</a>
                                </p>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h2>Sign up</h2>
                            <p>Enter your Email address and Password</p>
                            <div class="form-card">
                                <input type="email" name="email" id="email" placeholder="Enter your Email"
                                       class="form-control"/>
                                <div id="emailError" class="error"></div>

                                <input type="password" name="password" id="password" placeholder="Enter your Password"
                                       class="form-control"/>
                                <div id="passwordError" class="error"></div>
                            </div>
                            <button type="button" name="next" class="next action-button btn btn-primary">Continue
                            </button>
                            <div class="sign-up-info">
                                <img src="{{asset('assets/web/images/lock.png')}}" alt="logo">
                                <p>Privacy is paramount. Sign up process encrypted.</p>
                            </div>
                            <hr>
                            <div class="login-links">
                                <p>Already have an account? <a href="{{route('customer-login')}}">Login</a></p>
                                <p>Want to get jobs on Greatjob? <a href="{{route('provider-signup')}}">Provider
                                        registration</a></p>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h2>Sign up</h2>
                            <p>Enter your Postcode/Suburb and your Phone number</p>
                            <div class="form-card">
                                <input type="text" name="postcode" class="form-control typeahead" id="postcode"
                                       placeholder="Enter your Postcode or Suburb"/>

                                <div id="postcodeError" class="error"></div>
                                <input type="number" pattern="/^-?\d+\.?\d*$/"
                                       onKeyPress="if(this.value.length==11) return false;" name="phonenumber"
                                       id="phonenumber" placeholder="Phone number. ie. 04XX XXX XXX"
                                       class="form-control"/>
                                <div id="phonenumberError" class="error"></div>
                            </div>
                            <button type="button" name="next" class="next action-button btn btn-primary">Continue
                            </button>
                            <div class="sign-up-info">
                                <img src="{{asset('assets/web/images/lock.png')}}" alt="logo">
                                <p>Privacy is paramount. Sign up process encrypted.</p>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h2>Profile images</h2>
                            <p>Add your Profile image to complete your Profile</p>
                            <div class="account-profile">
                                <div class="profile-img">
                                    <img class="profile-pic" src="{{asset('assets/web/images/profile-thumbh.png')}}"
                                         alt="profile-thumbh">
                                    <div id="profilepicError" class="error text-center mt-1"></div>
                                </div>
                                <div class="profile-upload">
                                    <img src="{{asset('assets/web/images/cam-icon.png')}}" class="upload-button"
                                         alt="cam-icon">
                                    <input class="file-upload" id="profilepic" name="profilepic" type="file"
                                           accept="image/*"/>
                                </div>
                            </div>
                            <button type="button" name="next" class="next action-button btn btn-primary">Continue
                            </button>
                            <div class="sign-up-info">
                                <img src="{{asset('assets/web/images/lock.png')}}" alt="logo">
                                <p>Privacy is paramount. Sign up process encrypted.</p>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h2>Sign up</h2>
                            <p>Select the Services that your may be interested in booking - you can select more than
                                one</p>
                            <div class="form-card">
                                @php
                                    $services = DB::table('services')->where('status','active')->get();
                                @endphp
                                @foreach($services as $service)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="service[{{$service->service_id_no}}]"
                                               value="{{$service->service_id_no}}" id="service[{{$service->service_id_no}}]">
                                        <label class="form-check-label" for="service[{{$service->service_id_no}}]">
                                            {{$service->service_name}}
                                        </label>
                                    </div>
                                @endforeach
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="babysitting"--}}
{{--                                           value="Babysitting" id="babysitting">--}}
{{--                                    <label class="form-check-label" for="babysitting">--}}
{{--                                        Babysitting--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="dogwalking"--}}
{{--                                           value="Dog Walking" id="dogwalking">--}}
{{--                                    <label class="form-check-label" for="dogwalking">--}}
{{--                                        Dog Walking--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="carwashing"--}}
{{--                                           value="Car Washing" id="carwashing">--}}
{{--                                    <label class="form-check-label" for="carwashing">--}}
{{--                                        Car Washing--}}
{{--                                    </label>--}}
{{--                                </div>--}}
                                <div id="servicesError" class="error text-center"></div>
                                <p class="other-service">And what other services would you like to book in the
                                    future?</p>
                                <input type="text" name="other_service" id="other_service"
                                       placeholder="Future Services ie. Nanny, Tutor, Personal Trainer"
                                       class="form-control"/>
                            </div>
                            <button type="button" name="next" class="next action-button btn btn-primary">Continue
                            </button>
                            <div class="sign-up-info">
                                <img src="{{asset('assets/web/images/lock.png')}}" alt="logo">
                                <p>Privacy is paramount. Sign up process encrypted.</p>
                            </div>
                        </fieldset>


                        <fieldset>
                            <img src="{{asset('assets/web/images/white-check-icon.png')}}" class="regdone"
                                 alt="check-icon">
                            <h2>Registration complete!</h2>
                            <p>Congrats you now have a Greatjob Profile!<br>Let’s get started.</p>
                            <a href="{{route('home')}}" class="btn btn-primary">Find a Provider</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var APP_URL = {!! json_encode(url('/')) !!};
</script>
<script src="{{asset('assets/web/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('assets/web/js/popper.min.js')}}"></script>
<script src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/web/js/bootstrap3-typeahead.min.js')}}"></script>
<script src="{{asset('assets/web/js/sign-up.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"
        integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.8/axios.min.js"
        integrity="sha512-v8+bPcpk4Sj7CKB11+gK/FnsbgQ15jTwZamnBf/xDmiQDcgOIYufBo6Acu1y30vrk8gg5su4x0CG3zfPaq5Fcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{asset('assets/web/custom/custom.js')}}"></script>
<script>
    var searchSuggestions = ['4825', 'ALPURRURULAM', '0872', 'ERNABELLA', '0872', 'FREGON', '0872', 'INDULKANA', '0872', 'MIMILI', '0872', 'NGAANYATJARRA-GILES'];
    // Initialize the Typeahead plugin on the search input field
    $('#postcode').typeahead({
        source: searchSuggestions
    });
</script>
</body>
</html>