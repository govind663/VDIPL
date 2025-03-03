<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Head Start -->
    <x-backend.head />

    @stack('styles')
</head>

<body>
    {{-- Pre Loader Start --}}
    {{-- <x-backend.pre-loader /> --}}
    {{-- Pre Loader End --}}

    <!-- tap on top starts-->
    <div class="tap-top">
        <i data-feather="chevrons-up"></i>
    </div>
    <!-- tap on tap ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Header Start -->
        <x-backend.header />
        <!-- Header End -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Sidebar Start -->
            <x-backend.sidebar />
            <!-- Sidebar End -->

            <!-- Page Wrapper Start -->
            @yield('content')
            <!-- Page Wrapper End -->

            <!-- Footer Start -->
            <x-backend.footer />
            <!-- Footer End -->
        </div>
        <!-- Page Body End-->

    </div>
    <!-- page-wrapper End-->

    <!-- Start Main JS  -->
    <x-backend.main-js />
    <!-- End Main JS  -->

    {{-- Custom Js --}}
    @stack('scripts')
</body>

</html>
