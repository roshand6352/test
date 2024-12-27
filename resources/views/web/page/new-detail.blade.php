@extends('web.layouts.master')
@section('title')
    News Details
@endsection
@section('content')
    <section id="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('new')}}">News</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Greatjob’s Impact on Local Gigs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="articles-details">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="articles-heading">
                        <h1>Greatjob’s Impact on Local Gigs</h1>
                        <span>Written by Benjamin Jaminben | 3 min read</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="atricle-banner">
            <img src="{{asset('assets/web/images/news-details.jpg')}}" alt="news-details">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="articles-desc">
                        <h2>Building Trust: Enhancing Client Relationships</h2>
                        <p>Cras id enim metus. In rutrum leo odio, non consectetur magna sodales quis. Donec aliquet
                            ante ut sodales viverra. Morbi fringilla libero eget lorem dapibus bibendum. Curabitur
                            tristique ligula a libero porttitor, quis tempor sem molestie. Donec neque arcu, aliquet non
                            arcu non, volutpat feugiat augue. Suspendisse sodales est non pretium auctor. Suspendisse
                            eros mi, dignissim vel bibendum in, lacinia sed leo. Nam in turpis id enim pellentesque
                            lobortis. Nam eu auctor lectus. Vestibulum ante ipsum primis in faucibus orci luctus et
                            ultrices posuere cubilia curae; Vivamus porttitor velit laoreet accumsan consectetur. Nam
                            vel lacinia enim, sit amet semper turpis. In sem metus, finibus vitae aliquet vel,
                            ullamcorper ac nunc. Phasellus vitae vestibulum metus, scelerisque egestas nisl. Nulla
                            facilisi. Curabitur a tempus turpis. Nulla facilisi. Pellentesque venenatis luctus
                            consectetur.</p>
                        <img src="{{asset('assets/web/images/articles-1.png')}}" alt="articles">
                        <h2>Boosting Local Economies: The Ripple Effect</h2>
                        <b>Cras id enim metus. In rutrum leo odio non</b>
                        <p>Nulla volutpat turpis arcu, sed ultricies nulla aliquet nec. Integer egestas justo sed
                            bibendum aliquam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Praesent at imperdiet urna. Morbi semper, dui a lobortis pellentesque, nunc
                            quam commodo magna, a efficitur leo ligula ac mauris. Nulla ac arcu a augue dapibus volutpat
                            sit amet vel erat. Ut mattis pulvinar arcu, ac iaculis velit rhoncus sed. Nulla mattis augue
                            eleifend tincidunt egestas. Aliquam et ante ligula. Quisque sit amet magna velit. Integer
                            egestas justo sed bibendum aliquam. Orci varius natoque penatibus et magnis dis parturient
                            montes, nascetur ridiculus mus.</p>
                        <img src="{{asset('assets/web/images/articles-2.jpg')}}" alt="articles">

                        <h2>Boosting Local Economies: The Ripple Effect</h2>
                        <b>Cras id enim metus. In rutrum leo odio non</b>
                        <p>Nulla volutpat turpis arcu, sed ultricies nulla aliquet nec. Integer egestas justo sed
                            bibendum aliquam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Praesent at imperdiet urna. Morbi semper, dui a lobortis pellentesque, nunc
                            quam commodo magna, a efficitur leo ligula ac mauris. Nulla ac arcu a augue dapibus volutpat
                            sit amet vel erat. Ut mattis pulvinar arcu, ac iaculis velit rhoncus sed. Nulla mattis augue
                            eleifend tincidunt egestas. Aliquam et ante ligula. Quisque sit amet magna velit. Integer
                            egestas justo sed bibendum aliquam. Orci varius natoque penatibus et magnis dis parturient
                            montes, nascetur ridiculus mus.</p>

                        <hr>
                        <div class="social-share">
                            <p>Share:</p>
                            <a href="#"><img src="{{asset('assets/web/images/linkedin-icon.png')}}" alt="linkedin-icon"></a>
                            <a href="#"><img src="{{asset('assets/web/images/facebook-icon.png')}}" alt="facebook-icon"></a>
                            <a href="#"><img src="{{asset('assets/web/images/instagram-icon.png')}}"
                                             alt="instagram-icon"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="providerinsights">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-left">
                        <h2>Other Articles</h2>
                        <div class="slider-arrow">
                            <a id="leftbtn1"><img src="{{asset('assets/web/images/dark-left-arrow.png')}}"
                                                  alt="dark-left-arrow"></a>
                            <a id="rightbtn1"><img src="{{asset('assets/web/images/dark-right-arrow.png')}}"
                                                   alt="dark-right-arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="provider-insights">
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/provider-insights-1.jpg')}}" alt="articles">
                                <h4>Handyman for wall mount</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/provider-insights-2.jpg')}}" alt="articles">
                                <h4>How to garden</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/provider-insights-3.jpg')}}" alt="articles">
                                <h4>Finding a dog walker</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/provider-insights-4.jpg')}}" alt="articles">
                                <h4>Article title 2</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/provider-insights-1.jpg')}}" alt="articles">
                                <h4>Handyman for wall mount</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/provider-insights-2.jpg')}}" alt="articles">
                                <h4>How to garden</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/provider-insights-3.jpg')}}" alt="articles">
                                <h4>Finding a dog walker</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/provider-insights-4.jpg')}}" alt="articles">
                                <h4>Article title 2</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-script')

@endsection
