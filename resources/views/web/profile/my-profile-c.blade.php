@extends('web.layouts.master')
@section('title')
    My Profile
@endsection
@section('content')
    <main id="myprofile">
        <section id="pageheading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dheading">
                            <h1>My profile</h1>
                            <a href="#" class="btn btn-primary">Book a Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="profile-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-box">
                            <div class="pro-img">
                                <img src="{{asset('assets/web/images/my-acc.png')}}" alt="profiles">
                                <h2>Liam Adam <span class="material-symbols-outlined">verified</span></h2>
                            </div>
                            <div class="pro-overview">
                                <ul>
                                    <li>
                                        <span class="material-symbols-outlined">kid_star</span>
                                        <p>5.0 (10 reviews)</p>
                                    </li>
                                    <li>
                                        <span class="material-symbols-outlined">task_alt</span>
                                        <p>15 Greatjobs posted</p>
                                    </li>
                                    <li>
                                        <span class="material-symbols-outlined">location_on</span>
                                        <p>Mosman</p>
                                    </li>
                                    <li>
                                        <span class="material-symbols-outlined">person</span>
                                        <p>Joined Feb 2025</p>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <h3>Badges</h3>
                            <ul class="badges">
                                <li>
                                    <span class="material-symbols-outlined">editor_choice</span>
                                    <p>Mobile Verified</p>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">editor_choice</span>
                                    <p>ID Verified</p>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">editor_choice</span>
                                    <p>Payment Verified</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="about-me">
                            <div class="about-title">
                                <h3>About me</h3>
                                <a href="#" class="edit-desc">
                                    <span class="material-symbols-outlined">edit</span>
                                    Edit
                                </a>
                            </div>
                            <div class="about-desc">
                                <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tisa mauris et eros
                                    pretium bibendum mattis eteral. Sorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Etiam tisa mauris et eros pretium bibendum mattis eteral. Sorem ipsum dolo...
                                    more</p>
                            </div>
                            <div class="about-title">
                                <h3>Reviews</h3>
                                <div class="slider-arrow">
                                    <a id="leftbtn"><img src="{{asset('assets/web/images/dark-left-arrow.png')}}"
                                                         alt="dark-left-arrow"></a>
                                    <a id="rightbtn"><img src="{{asset('assets/web/images/dark-right-arrow.png')}}"
                                                          alt="dark-right-arrow"></a>
                                </div>
                            </div>
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
                                    <span>Lawn mowing | 5mins ago</span>
                                    <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                        aliquam.</p>
                                </div>
                                <div class="reviews-box">
                                    <div class="reviews-head">
                                        <div class="profile">
                                            <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                            <p>Susan</p>
                                        </div>
                                        <div class="rating">
                                            <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                            <p>5.0</p>
                                        </div>
                                    </div>
                                    <span>Babysitting | 5mins ago</span>
                                    <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                        aliquam.</p>
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
                                    <span>Lawn mowing | 5mins ago</span>
                                    <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                        aliquam.</p>
                                </div>
                                <div class="reviews-box">
                                    <div class="reviews-head">
                                        <div class="profile">
                                            <img src="{{asset('assets/web/images/review.png')}}" alt="user">
                                            <p>Susan</p>
                                        </div>
                                        <div class="rating">
                                            <img src="{{asset('assets/web/images/star.png')}}" alt="star">
                                            <p>5.0</p>
                                        </div>
                                    </div>
                                    <span>Babysitting | 5mins ago</span>
                                    <p>Lorem6 ipsum dolor sit, consectetuer adipiscing 50 elit. Felis mattis lobortis
                                        aliquam.</p>
                                </div>
                            </div>
                            <div class="about-title">
                                <h3>Photos</h3>
                                <div class="slider-arrow">
                                    <a id="leftbtn1"><img src="{{asset('assets/web/images/dark-left-arrow.png')}}"
                                                          alt="dark-left-arrow"></a>
                                    <a id="rightbtn1"><img src="{{asset('assets/web/images/dark-right-arrow.png')}}"
                                                           alt="dark-right-arrow"></a>
                                </div>
                            </div>
                            <div class="photos-slider">
                                <div class="photos-slider-box additem">
                                    <input type="file" name='photos[]' multiple>
                                    <div class="addphoto">
                                        <span class="material-symbols-outlined">add_circle</span>
                                        <p>Upload photo</p>
                                    </div>
                                </div>
                                <div class="photos-slider-box">
                                    <img src="{{asset('assets/web/images/photo-1.jpg')}}" alt="photo">
                                </div>
                                <div class="photos-slider-box">
                                    <img src="{{asset('assets/web/images/photo-2.jpg')}}" alt="photo">
                                </div>
                                <div class="photos-slider-box">
                                    <img src="{{asset('assets/web/images/photo-1.jpg')}}" alt="photo">
                                </div>
                                <div class="photos-slider-box">
                                    <img src="{{asset('assets/web/images/photo-2.jpg')}}" alt="photo">
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
    <script>
        $('#leftbtn').click(function(){
            $(".mowing-reviews .slick-prev").click();
        });
        $('#rightbtn').click(function(){
            $(".mowing-reviews .slick-next").click();
        });
        $('#leftbtn1').click(function(){
            $(".photos-slider .slick-prev").click();
        });
        $('#rightbtn1').click(function(){
            $(".photos-slider .slick-next").click();
        });
    </script>
@endsection
