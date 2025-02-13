@extends('front.index')
@section('content')
    <!-- Class Section Begin -->
    <section class="class spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="class__form">
                        <div class="section-title">
                            <span>Create New Account</span>
                            <h2>Registration </h2>
                        </div>
                        <form action="{{url('customstore')}}" method="POST">
                            @csrf
                            <input type="text" placeholder="Name" name="name">
                            <input type="email" placeholder="Email" name="email">
                            <input type="password" placeholder="Password" name="password">
                            <button type="submit" class="site-btn">Registration</button>
                        </form>
                    </div>
                </div>
            </div>
 
        </div>
    </section>
    <!-- Class Section End -->
@endsection
