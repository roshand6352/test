<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GreatJob - Sign Up Services Provider</title>
    <meta name="description" content="At Greatjob, we connect you with local reliable providers who are ready to lend a helping hand. Earn money doing Greatjobs.">
    <meta name="keywords" content="Earn, money, doing, Greatjobs, greatjob, providers, washing, lawn">
    <meta name="author" content="greatjob">
    <meta name="author" content="greatjob">
    <meta property="og:title" content="Great Job - Sign Up Services Provider">
    <meta property="og:description" content="At Greatjob, we connect you with local reliable providers who are ready to lend a helping hand. Earn money doing Greatjobs.">
    <meta property="og:image" content="images/logo.png">
    <meta property="og:url" content="https://great-job.projectdemo.click/sign-up-service-providers.html">
    <link rel="icon" type="image/png" href="{{asset('assets/web/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/web/images/favicon.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/web/images/favicon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/web/images/favicon-114x114.png')}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/web/images/favicon-144x144.png')}}" />
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
                    <!-- <ul id="progressbar">
                        <li class="active" id="account"></li>
                        <li id="personal"></li>
                        <li id="payment"></li>
                        <li id="profile"></li>
                        <li id="interested"></li>
                        <li id="confirm"></li>
                    </ul> -->
                    <div class="signup-logo">
                        <img src="{{asset('assets/web/images/logo.png')}}" alt="logo">
                    </div>
                    <form id="mscform">

                        <fieldset>
                            <h2>Login</h2>
                            <p>Welcome back, Login to your Greatjob Dashboard now</p>
                            <div class="form-card">
                                <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control" />
                                <div id="emailError" class="error"></div>

                                <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control" />
                                <div id="passwordError" class="img-error">
                                    <div id="passwordError1" class="error">
                                    </div>
                                </div>
                                <button type="submit" class="next action-button btn btn-primary">Continue</button>
                                <div class="sign-up-info">
                                    <img src="{{asset('assets/web/images/lock.png')}}" alt="logo">
                                    <p>Privacy is paramount. Login inputs are encrypted.</p>
                                </div>
                                <hr>
                                <div class="login-links">
                                    <p>Forgot your Password? <a href="#">Reset Password</a></p>
                                    <p>Don’t have an account? <a href="{{route('customer-signup')}}">Sign Up</a></p>
                                    <p>Are you a Greatjob Service Provider? <a href="{{route('provider-login')}}">Provider Login</a></p>
                                </div>
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
<script src="{{asset('assets/web/js/bootstrap3-typeahead.min.js')}}"></script>
<script src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/web/js/login.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.8/axios.min.js" integrity="sha512-v8+bPcpk4Sj7CKB11+gK/FnsbgQ15jTwZamnBf/xDmiQDcgOIYufBo6Acu1y30vrk8gg5su4x0CG3zfPaq5Fcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{asset('assets/web/custom/custom.js')}}"></script>
</body>
</html>
