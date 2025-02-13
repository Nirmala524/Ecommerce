<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('Front/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Front/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Front/css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Front/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Front/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Front/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Front/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Front/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Front/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('Front/css/style.css') }}" type="text/css">
    {{-- ........animation....... --}}

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div>  --}}

    <x-Header />
    @yield('content')

    <x-footer />

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        AOS.init();
    </script>

    <script>
        $('#addcart').click(function() {

            let _token = "{{ csrf_token() }}";
            let product_id = $("#product_id").val();
            let product_quantity = $("#product_quantity").val();
            // console.log(product_id);
            // console.log(product_quantity);


            $.ajax({
                type: "POST",
                url: "{{ route('addtocart') }}",
                data: {
                    _token: _token,
                    product_id: product_id,
                    product_quantity: product_quantity,

                },

                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Your work has been saved",
                            showConfirmButton: false,
                            timer: 1500
                        });

                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                        });

                    }


                }
            });
        });

       

           

    </script>
</body>

</html>
