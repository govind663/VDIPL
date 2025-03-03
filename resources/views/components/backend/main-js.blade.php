<!-- latest jquery-->
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>

<!-- scrollbar js-->
<script src="{{ asset('backend/assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('backend/assets/js/scrollbar/custom.js') }}"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('backend/assets/js/config.js') }}"></script>

<!-- Plugins JS start-->
<script src="{{ asset('backend/assets/js/sidebar-menu.js') }}"></script>
{{-- <script src="{{ asset('backend/assets/js/sidebar-pin.js') }}"></script> --}}
<script src="{{ asset('backend/assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('backend/assets/js/header-slick.js') }}"></script>
{{-- <script src="{{ asset('backend/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart/apex-chart/stock-prices.js') }}"></script> --}}

<!-- Range Slider js-->
{{-- <script src="{{ asset('backend/assets/js/range-slider/rSlider.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/rangeslider/rangeslider.js') }}"></script> --}}
<script src="{{ asset('backend/assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/counter/counter-custom.js') }}"></script>
{{-- <script src="{{ asset('backend/assets/js/custom-card/custom-card.js') }}"></script> --}}

<!-- calendar js-->
{{-- <script src="{{ asset('backend/assets/js/calendar/fullcalender.js') }}"></script>
<script src="{{ asset('backend/assets/js/calendar/custom-calendar.js') }}"></script> --}}
{{-- <script src="{{ asset('backend/assets/js/dashboard/dashboard_2.js') }}"></script> --}}
<script src="{{ asset('backend/assets/js/animation/wow/wow.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<!-- Plugins JS Ends-->

<!-- Theme js-->
<script src="{{ asset('backend/assets/js/script.js') }}"></script>
{{-- <script src="{{ asset('backend/assets/js/theme-customizer/customizer.js') }}"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

{{-- Summernote Js --}}
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

<!-- Toaster JS -->
<script>
    $(document).ready(function () {
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            };
            toastr.warning("{{ session('warning') }}");
        @endif
    });
</script>