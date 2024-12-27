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
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#availabity">Your
                                Availability</a>
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
                                <img src="{{asset('assets/web/images/my-acc-1.png')}}" alt="profiles">
                                <h2>Bob Doe</h2>
                            </div>
                            <div class="pro-overview">
                                <ul>
                                    <li>
                                        <span class="material-symbols-outlined">check</span>
                                        <p>Verified by Greatjob</p>
                                    </li>
                                    <li>
                                        <span class="material-symbols-outlined">kid_star</span>
                                        <p>4.7 Stars</p>
                                    </li>
                                    <li>
                                        <span class="material-symbols-outlined">task_alt</span>
                                        <p>15 Greatjobs Completed</p>
                                    </li>
                                    <li>
                                        <span class="material-symbols-outlined">location_on</span>
                                        <p>Waverton, Sydney</p>
                                    </li>
                                    <li>
                                        <span class="material-symbols-outlined">person</span>
                                        <p>Joined Jan 2025</p>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <h3>Qualifications</h3>
                            <ul class="badges">
                                <li>
                                    <span class="material-symbols-outlined">editor_choice</span>
                                    <p>WWCC (11/12/24)</p>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">editor_choice</span>
                                    <p>Lawn mowing Licence</p>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">editor_choice</span>
                                    <p>Dog walking Licence</p>
                                </li>
                                <li>
                                    <span class="material-symbols-outlined">editor_choice</span>
                                    <p>Police Check</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="material-symbols-outlined">add_circle</span>
                                        <p>Add/Edit Qualifications</p>
                                    </a>
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
                                <h3>My Services</h3>
                            </div>
                            <div class="service-listing">
                                <div class="my-service">
                                    <div class="services-list">
                                        <img src="{{asset('assets/web/images/lawn-mowing.svg')}}" alt="Lawn Mowing">
                                        <p>Lawn Mowing</p>
                                    </div>
                                    <div class="services-list">
                                        <img src="{{asset('assets/web/images/dog.svg')}}" alt="Dog Walking">
                                        <p>Dog Walking</p>
                                    </div>
                                </div>
                                <div class="add-services">
                                    <a href="#">
                                        <span class="material-symbols-outlined">add_circle</span>
                                        <p>Add a Service</p>
                                    </a>
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
                                <div class="photos-slider-box">
                                    <img src="{{asset('assets/web/images/photo-1.jpg')}}" alt="photo">
                                </div>
                                <div class="photos-slider-box">
                                    <img src="{{asset('assets/web/images/photo-2.jpg')}}" alt="photo">
                                </div>
                                <div class="photos-slider-box additem">
                                    <input type="file" name='photos[]' multiple>
                                    <div class="addphoto">
                                        <span class="material-symbols-outlined">add_circle</span>
                                        <p>Upload photo</p>
                                    </div>
                                </div>

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
                            <div class="col-md-10 offset-md-1 text-center">
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
