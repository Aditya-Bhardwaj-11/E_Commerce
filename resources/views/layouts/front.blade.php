<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <style>
        a{
            text-decoration: none !important;
        }
    </style>

</head>
<body>

    @include('layouts.inc.frontnavbar')
    <div class="content">
        @yield('content')
    </div>


    <Script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}" defer></Script>
    <Script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></Script>
    <Script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer></Script>

    {{-- <script>src="https://code.jquery.com/jquery-3.7.1.min.js"</script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.com/libraries/OwlCarousel2"></script>

    @if (session('status'))
        <script>
            // Swal.fire("{{ session('status') }}");
            Swal.fire({
                title: "{{ session('status') }}",
                showClass: {
                    popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                    `
                },
                hideClass: {
                    popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate__faster
                    `
                }
            });
        </script>
    @endif

    @yield('scripts')

</body>
</html>
