<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">


    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->

    <!-- Styles -->
    <link href="{{ asset('admin/css/custom.css?v=2.1.2') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet">


</head>
<body>

    <div class="wrapper">
        @include('layouts.inc.sidebar')
        <div class="main-panel">

            @include('layouts.inc.adminnav')

            <div class="content">
                @yield('content')
            </div>

            @include('layouts.inc.adminfooter')

    </div>


    <Script src="{{ asset('admin/js/jquery.min.js') }}" defer></Script>
    <Script src="{{ asset('admin/js/popper.min.js') }}" defer></Script>
    <Script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}" defer></Script>
    <Script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></Script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
