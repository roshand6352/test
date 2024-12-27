<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-link">
                            <ul>
                                <li><a href="lawn-mowing.html">Lawn mowing</a></li>
                                <li><a href="baby-sitting.html">Baby sitting</a></li>
                                <li><a href="dog-walking.html">Dog walking</a></li>
                                <li><a href="car-washing.html">Car washing</a></li>
                                <li><a href="{{route('service')}}">All services</a></li>
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
                                @if(is_null(Auth::user()))
                                    <li><a href="{{route('customer-login')}}">Login</a></li>
                                    <li><a href="{{route('customer-signup')}}">Sign up</a></li>
                                @else
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2">
                <div class="footer-info">
                    <a href="javascript:void(0)"><img src="{{asset('assets/web/images/logo-white.png')}}"
                                                      alt="logo-white"></a>
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
                        <li><a href="javascript:void(0)"><img src="{{asset('assets/web/images/facebook-icon.png')}}"
                                                              alt="facebook-icon"></a></li>
                        <li><a href="javascript:void(0)"><img src="{{asset('assets/web/images/x-icon.png')}}"
                                                              alt="x-icon"></a></li>
                        <li><a href="javascript:void(0)"><img src="{{asset('assets/web/images/instagram-icon.png')}}"
                                                              alt="instagram-icon"></a></li>
                        <li><a href="javascript:void(0)"><img src="{{asset('assets/web/images/linkedin-icon.png')}}" alt="linkedin-icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
