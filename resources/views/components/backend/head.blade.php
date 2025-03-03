{{-- Required meta tags --}}
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">

{{-- SEO --}}
<meta name="description" content="VDIPL - Vaibhav Deshmukh Infra Projects Pvt. Ltd.">
<meta name="keywords" content="VDIPL - Vaibhav Deshmukh Infra Projects Pvt. Ltd., VDIPL, VDIPL - Vaibhav Deshmukh Infra Projects Pvt. Ltd.">
<meta name="author" content="VDIPL - Vaibhav Deshmukh Infra Projects Pvt. Ltd., VDIPL, VDIPL - Vaibhav Deshmukh Infra Projects Pvt. Ltd.">

<!-- CSRF Token -->
<meta name="csrf-token" content="content">
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

{{-- Title --}}
<title>@yield('title')</title>

{{-- Favicon --}}
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/images/home/favicon.webp') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/home/favicon.webp') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/home/favicon.webp') }}" />

<!-- Google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome.css') }}" media="all">

<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/icofont.css') }}" media="all">

<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/themify.css') }}" media="all">

<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/flag-icon.css') }}" media="all">

<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/feather-icon.css') }}" media="all">

<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/slick.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/slick-theme.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/scrollbar.css') }}" media="all">

<!-- Range slider css-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/rangeslider/rSlider.min.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/animate.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/prism.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/fullcalender.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/datatables.css') }}" media="all">
<!-- Plugins css Ends-->

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/bootstrap.css') }}" media="all">

<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}" media="all">
<link id="color" rel="stylesheet" href="{{ asset('backend/assets/css/color-1.css') }}" media="all">

<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}" media="all">

<!-- Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" media="all" />

<!-- Summernot CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet" media="all">

<!-- Toaster Message -->
<script src="{{ asset('toaster/js/jquery.min.js') }}" accesskey="false"></script>
<link rel="stylesheet" href="{{ asset('toaster/css/toastr.min.css') }}" media="all" />
<script src="{{ asset('toaster/js/toastr.min.js') }}" accesskey="false"></script>
