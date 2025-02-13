
@extends('front.index')
@section('content')
    
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>About</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__video set-bg" data-setbg="{{asset('Front/img/about-video.jpg')}}">
                        <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1"
                            class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text" data-aos="fade-up" data-aos-duration="1000">
                        <div class="section-title">
                            <span>{{$about->title}}</span>
                            <h2>{{$about->heading}}</h2>
                        </div>
                        <p>{{$about->desc}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        @foreach ($skill as $skillitem)
                            <div class="about__bar__item">
                                <p>{{ $skillitem->title }}</p>
                                <div id="bar{{ $skillitem->id }}" class="barfiller">
                                    <div class="tipWrap"><span class="tip"></span></div>
                                    <span class="fill" data-percentage="{{ $skillitem->per }}"></span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

              
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>{{$ourclient->title}}</span>
                        <h2>{{$ourclient->heading}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">

                    @foreach ($client as $clientitem)
                        <div class="col-lg-6">

                            <div class="testimonial__item">
                                <div class="testimonial__author">
                                    <div class="testimonial__author__pic">
                                        <img src="{{ asset('storage/client/' . $clientitem->image) }}" alt="">
                                    </div>
                                    <div class="testimonial__author__text">
                                        <h5>{{ $clientitem->name }}</h5>
                                        <span>{{ $clientitem->place }}</span>
                                    </div>
                                </div>
                                <div class="rating">
                                    @if ($clientitem->star == 1)
                                        <span class="icon_star"> </span>
                                        <span class="icon_star_alt"></span>
                                        <span class="icon_star_alt"></span>
                                        <span class="icon_star_alt"></span>
                                        <span class="icon_star_alt"></span>
                                    @endif
                                    @if ($clientitem->star == 2)
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                        <span class="icon_star_alt"></span>
                                        <span class="icon_star_alt"></span>
                                        <span class="icon_star_alt"></span>
                                    @endif
                                    @if ($clientitem->star == 3)
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                        <span class="icon_star_alt"></span>
                                        <span class="icon_star_alt"></span>
                                    @endif
                                    @if ($clientitem->star == 4)
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                        <span class="icon_star_alt"></span>
                                    @endif
                                    @if ($clientitem->star == 5)
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                        <span class="icon_star"> </span>
                                    @endif
                                </div>
                                <p>{{ $clientitem->desc }}</p>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>{{$ourteam->title}}</span>
                        <h2>{{$ourteam->heading}} </h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Join Us</a>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($team as $teamitem)
                <div class="col-lg-3 col-md-6 col-sm-6">


                    <div class="team__item set-bg" data-setbg="{{ asset('storage/team/' . $teamitem->image) }}">
                        <div class="team__item__text">
                            <h6>{{ $teamitem->name }}</h6>
                            <span>{{ $teamitem->post }}</span>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
               
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    @endsection

    