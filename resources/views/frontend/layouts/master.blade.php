<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    {{-- Head Start --}}
    <x-frontend.head />
    {{-- Head End --}}

    {{-- Custom CSS --}}
    @stack('styles')
</head>

<body>
    {{-- Header Start --}}
    <x-frontend.header />
    {{-- Header End --}}

    {{-- Main Content Start --}}
    @yield('content')
    {{-- End Main Content --}}

    {{-- Footer Start --}}
    <x-frontend.footer />
    {{-- Footer End --}}

    {{-- Start Main JS --}}
    <x-frontend.main-js />
    {{-- End Main JS --}}

    {{-- Custom Js --}}
    @stack('scripts')
</body>

</html>
