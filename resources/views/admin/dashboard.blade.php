@extends('admin.index')
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> {{ __('dashboard.title') }}</h1>
            <p>{{ __('dashboard.heading') }}</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">{{ __('dashboard.title') }}</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>{{ __('dashboard.user') }}</h4>
                    <p><b>5</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
                <div class="info">
                    <h4>{{ __('dashboard.Likes') }}</h4>
                    <p><b>25</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                    <h4>{{ __('dashboard.Uploades') }}</h4>
                    <p><b>10</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>{{ __('dashboard.Stars') }}</h4>
                    <p><b>500</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">{{ __('dashboard.MonthlySales') }}</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">{{ __('dashboard.SupportRequests') }}</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">{{ __('dashboard.Features') }}</h3>
                <ul>
                    <li>{{ __('dashboard.h1') }}</li>
                    <li>{{ __('dashboard.h2') }}</li>
                    <li>{{ __('dashboard.h3') }}</li>
                    <li>{{ __('dashboard.h4') }}</li>
                    <li>{{ __('dashboard.h5') }}</li>
                    <li>{{ __('dashboard.h6') }}</li>
                    <li>{{ __('dashboard.h7') }}</li>
                    <li>{{ __('dashboard.h8') }}</li>
                    <li>{{ __('dashboard.h9') }}</li>
                </ul>
                <p>{{ __('dashboard.p') }}</p>
                <p>{{ __('dashboard.p1') }}</p>
                <p class="mt-4 mb-4"><a class="btn btn-primary mr-2 mb-2" href="http://pratikborsadiya.in/blog/vali-admin"
                        target="_blank"><i class="fa fa-file"></i>Docs</a><a class="btn btn-info mr-2 mb-2"
                        href="https://github.com/pratikborsadiya/vali-admin" target="_blank"><i
                            class="fa fa-github"></i>GitHub</a><a class="btn btn-success mr-2 mb-2"
                        href="https://github.com/pratikborsadiya/vali-admin/archive/master.zip" target="_blank"><i
                            class="fa fa-download"></i>Download</a></p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">{{ __('dashboard.frameworks ') }}</h3>
                <p>{{ __('dashboard.c1') }}</p>
                <p>{{ __('dashboard.c2') }}</p>
                <p>{{ __('dashboard.c3') }}</p>
            </div>
        </div>
    </div>
@endsection
