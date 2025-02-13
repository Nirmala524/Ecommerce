 <!-- Offcanvas Menu Begin -->
 <div class="offcanvas-menu-overlay"></div>
 <div class="offcanvas-menu-wrapper">
     <div class="offcanvas__cart">
         <div class="offcanvas__cart__links">
             <a href="#" class="search-switch"><img src="{{ asset('Front/img/icon/search.png') }}" alt=""></a>
             <a href="#"><img src="{{ asset('Front/img/icon/heart.png') }}" alt=""></a>
         </div>
         <div class="offcanvas__cart__item">
             <a href="#"><img src="{{ asset('Front/img/icon/cart.png') }}" alt=""> <span>0</span></a>
             <div class="cart__price">Cart: <span>$0.00</span></div>
         </div>
     </div>
     <div class="offcanvas__logo">
         <a href="./index.html"><img src="{{ asset('Front/img/logo.png') }}" alt=""></a>
     </div>
     <div id="mobile-menu-wrap"></div>
     <div class="offcanvas__option">
         <ul>
             <li>USD <span class="arrow_carrot-down"></span>
                 <ul>
                     <li>EUR</li>
                     <li>USD</li>
                 </ul>
             </li>
             <li>ENG <span class="arrow_carrot-down"></span>
                 <ul>
                     <li>Spanish</li>
                     <li>ENG</li>
                 </ul>
             </li>
             <li><a href="{{ route('login') }}">Sign in</a> <span class="arrow_carrot-down"></span></li>
             <li><a href="{{ route('register') }}">Register</a> <span class="arrow_carrot-down"></span></li>
         </ul>
     </div>
 </div>
 <!-- Offcanvas Menu End -->

 <!-- Header Section Begin -->
 <header class="header">
     <div class="header__top">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="header__top__inner">
                         <div class="header__top__left">
                             <ul>
                                 <li>USD <span class="arrow_carrot-down"></span>
                                     <ul>
                                         <li>EUR</li>
                                         <li>USD</li>
                                     </ul>
                                 </li>
                                 <li>ENG <span class="arrow_carrot-down"></span>
                                     <ul>
                                         <li>Spanish</li>
                                         <li>ENG</li>
                                     </ul>
                                 </li>


                                 @php
                                     $emailSession = Session::get('email');
                                     $nameSession = Session::get('name');
                                 @endphp

                                 @if (isset($nameSession))
                                     <li>

                                         {{ $nameSession }}
                                     </li>
                                     <li><a href="{{ url('logout') }}">logout</a><span class="arrow_carrot-down"></span>
                                     </li>
                                 @else
                                     <li>

                                         <a href="{{ route('customlogin') }}">Sign in</a> <span
                                             class="arrow_carrot-down"></span>
                                     </li>
                                     <li><a href="{{ route('customregister') }}">Register</a> <span
                                             class="arrow_carrot-down"></span>
                                     </li>
                                 @endif

                             </ul>
                         </div>
                         <div class="header__logo">
                             <a href="./index.html"><img src="{{ asset('storage/setting/' . setting()->darkimage) }}"
                                     alt=""></a>
                         </div>
                         <div class="header__top__right">
                             <div class="header__top__right__links">
                                 <a href="#" class="search-switch"><img
                                         src="{{ asset('Front/img/icon/search.png') }}" alt=""></a>
                                 <a href="#"><img src="{{ asset('Front/img/icon/heart.png') }}"
                                         alt=""></a>
                             </div>
                             <div class="header__top__right__cart">
                                 <a href="{{ url('shopcart') }}"><img src="{{ asset('Front/img/icon/cart.png') }}"
                                         alt="">
                                     <span>0</span></a>
                                 <div class="cart__price">Cart: <span>$0.00</span></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="canvas__open"><i class="fa fa-bars"></i></div>
         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <nav class="header__menu mobile-menu">
                     <ul>
                         <li class="active"><a href="{{ url('/') }}">Home</a></li>
                         <li><a href="{{ url('/about') }}">About</a></li>
                         <li><a href="{{ url('/shop') }}">Shop</a></li>
                         <li><a href="#">Pages</a>
                             <ul class="dropdown">
                                 {{-- <li><a href="{{url('/shopdetails')}}">Shop Details</a></li> --}}
                                 <li><a href="{{ url('/shopcart') }}">Shoping Cart</a></li>
                                 <li><a href="{{ url('/checkout') }}">Check Out</a></li>
                                 <li><a href="{{ url('/wisslist') }}">Wisslist</a></li>
                                 <li><a href="{{ url('/class') }}">Class</a></li>
                                 <li><a href="{{ url('/blogdetails') }}">Blog Details</a></li>
                             </ul>
                         </li>
                         <li><a href="{{ url('/blog') }}">Blog</a></li>
                         <li><a href="{{ url('/contact') }}">Contact</a></li>
                     </ul>
                 </nav>
             </div>
         </div>
     </div>
 </header>
 <!-- Header Section End -->
