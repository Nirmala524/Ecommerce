@extends('front.index')
@section('content')
    <!-- Class Section Begin -->
    <section class="class spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="class__form">
                        <div class="section-title">
                            <span>Access Your Account</span>
                            <h2>Login </h2>
                        </div>
                        <form action="{{url('loginstore')}}" method="POST">
                            @csrf
                            <input type="email" placeholder="Email" name="email">
                            <input type="password" placeholder="Password" name="password">
                            <button type="submit" class="site-btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Class Section End -->
@endsection
