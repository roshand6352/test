@extends('web.layouts.master')
@section('title')
    News
@endsection
@section('content')
    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-heading">
                        <h1><span>Greatjob</span> News</h1>
                        <h4>See the latest and greatest updates from Greatjob!</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tisa mauris et eros pretium
                            bibendum mattis et ante duis selse este la.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="latestarticles">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-left">
                        <h2>Latest Articles</h2>
                        <div class="slider-arrow">
                            <a id="leftbtn"><img src="{{asset('assets/web/images/dark-left-arrow.png')}}"
                                                 alt="dark-left-arrow"></a>
                            <a id="rightbtn"><img src="{{asset('assets/web/images/dark-right-arrow.png')}}"
                                                  alt="dark-right-arrow"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-articles">
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/articles-1.jpg')}}" alt="articles">
                                <h4>Handyman for wall mount</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/articles-2.jpg')}}" alt="articles">
                                <h4>How to garden</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/articles-3.jpg')}}" alt="articles">
                                <h4>Finding a dog walker</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/articles-4.jpg')}}" alt="articles">
                                <h4>Article title 2</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/articles-1.jpg')}}" alt="articles">
                                <h4>Handyman for wall mount</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/articles-2.jpg')}}" alt="articles">
                                <h4>How to garden</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/articles-3.jpg')}}" alt="articles">
                                <h4>Finding a dog walker</h4>
                                <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                    aliquam. Vehicula 100 posuere vitae. Neque tempus fames.</p>
                            </a>
                        </div>
                        <div class="articles-box">
                            <a href="news-details.html">
                                <img src="{{asset('assets/web/images/articles-4.jpg')}}" alt="articles">
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
    <section id="providerinsights">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-left">
                        <h2>Service provider insights</h2>
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
    <section id="experience-greatjob">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="heading-center">
                        <h2>Experience a Greatjob.</h2>
                    </div>
                </div>
                <div class="col-md-6 text-center offset-md-3">
                    <div class="experience-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra vel mi quisele
                            faucibus. Nullam non arcu magna. Fusce non</p>
                        <a class="btn btn-outline-primary" href="#">Get a Job</a>
                        <a class="btn btn-primary" href="#">Book a Job</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom-script')
    <script>
        $('#leftbtn').click(function(){
            $(".latest-articles .slick-prev").click();
        });
        $('#rightbtn').click(function(){
            $(".latest-articles .slick-next").click();
        });
        $('#leftbtn1').click(function(){
            $(".provider-insights .slick-prev").click();
        });
        $('#rightbtn1').click(function(){
            $(".provider-insights .slick-next").click();
        });
        $('#leftbtn2').click(function(){
            $(".mowing-reviews .slick-prev").click();
        });
        $('#rightbtn2').click(function(){
            $(".mowing-reviews .slick-next").click();
        });
    </script>
@endsection
