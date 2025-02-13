<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <x-header />

    @php

        $data = [
            'virat-kohli-anushka-sharma-wedding',
            'alia Bhatt & Ranbir Kapoor',
            'Katrina and Vicky',
            'virat-kohli-anushka-sharma-wedding',
            'kriti-kharbanda-and-pulkit-samrat',
            'Beautiful Wedding Moment!',
        ];
        $images = [
            'download.jpg',
            'alia.jpg',
            'Katrina and Vicky.jpg',
            'virat-kohli-anushka-sharma-wedding-anniversary61.webp',
            'pulkit.jpg',
            'Beautiful Wedding Moment!.jpg',
        ];

    @endphp
     <x-slider/>
     <x-carousel/>
    <div class="container">
        <div class="row">

            @for ($i = 0; $i < 6; $i++)
                <div class="col-4 p-3">
                    <x-Product price=1500 :name="$data[$i]" :image="$images[$i]" />
                </div>
            @endfor
        </div>
    </div>
   
    <x-footer />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('js/script.js')}}"></script>
   
</body>
</html>
