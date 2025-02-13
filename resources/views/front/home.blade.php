@extends('front.index')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            @foreach ($data as $item)
                <div class="hero__item set-bg" data-setbg="{{ asset('image/slider/' . $item->image) }}">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <div class="hero__text">
                                    <h2>{{ $item->title }}</h2>
                                    <a href="#" class="primary-btn">Our cakes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
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
                    <div class="about__bar" data-aos="fade-left" data-aos-duration="2000">
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

    <!-- Categories Section Begin -->
    <div class="categories">
        <div class="container">
            <div class="row">

                <div class="categories__slider owl-carousel" data-aos="fade-up" data-aos-duration="2000">

                    @foreach ($category as $cate)
                    
                        <a href="{{ url('category/' . $cate->id) }}">
                            <div class="categories__item">
                                <div class="categories__item__icon">
                                    <span class={{ $cate->icon }}></span>
                                    <h5>{{ $cate->category }}</h5>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                @foreach ($product as $shop)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product__item" data-aos="zoom-in-up" data-aos-duration="2000">
                            <a href="{{ url('shopdetails/' . $shop->id) }}">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('image/product/' . $shop->thumbnail) }}">
                                    <div class="product__label">
                                        <span>{{ $shop->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="product__item__text">
                                <h6><a href="{{ url('shopdetails/' . $shop->id) }}">{{ $shop->title }}</a></h6>
                                <div class="product__item__price">{{ $shop->price }}</div>
                                <div class="cart_add">
                                    <a href="{{ url('shopdetails/' . $shop->id) }}">Add to cart</a>
                                </div>
                            </div>
                        </div>  
                    </div>
                @endforeach
  
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Class Section Begin -->
    <section class="class spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" >
                    <div class="class__form" >
                        <div class="section-title">
                            <span>Class cakes</span>
                            <h2>Made from your <br />own hands</h2>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Phone">
                            <select>
                                <option value="">Studying Class</option>
                                <option value="">Writting Class</option>
                                <option value="">Reading Class</option>
                            </select>
                            <input type="text" placeholder="Type your requirements">
                            <button type="submit" class="site-btn">registration</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="class__video set-bg" data-setbg="{{ asset('Front/img/class-video.jpg') }}">
                <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1"
                    class="play-btn video-popup"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </section>
    <!-- Class Section End -->

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
                    <div class="col-lg-3 col-md-6 col-sm-6" data-aos="zoom-in-right" data-aos-duration="2000">


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
                <div class="testimonial__slider owl-carousel" data-aos="zoom-in" data-aos-duration="2000">

                    @foreach ($client as $clientitem)
                        <div class="col-lg-6"  >

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

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>{{$follow->title}}</span>
                            <h2>{{$follow->heading}}</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i> @sweetcake</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($multiimage as $multiitem)
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="{{ asset('storage/multiimage/'.$multiitem->image) }}" alt="" data-aos="zoom-out-up" data-aos-duration="2000"> 
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Map Begin -->
    <div class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <div class="map__inner">
                        <h6>COlorado</h6>
                        <ul>
                            <li>1000 Lakepoint Dr, Frisco, CO 80443, USA</li>
                            <li>Sweetcake@support.com</li>
                            <li>+1 800-786-1000</li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
        <div class="map__iframe">
            <iframe
                src="{{setting()->map}}"
                height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!-- Map End -->
@endsection
