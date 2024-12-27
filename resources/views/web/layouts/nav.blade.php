<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('assets/web/images/logo.png')}}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('service')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about-us')}}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('new')}}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('become-a-provider')}}">Providers</a>
                </li>
                @if(is_null(Auth::user()))
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" href="{{route('customer-login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="{{route('customer-signup')}}">Sign Up</a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="{{route('logout')}}">Logout</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
