<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div class="logo-wrapper">
        <a href="{{ route('admin.dashboard') }}">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/home/vdipl-footer-logo.webp') }}" alt="" style="height: 50px; width: 50px;">
        </a>
        <div class="back-btn">
            <i class="fa fa-angle-left"></i>
        </div>
        <div class="toggle-sidebar">
            <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
        </div>
    </div>
    <div class="logo-icon-wrapper">
        <a href="{{ route('admin.dashboard') }}">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/home/vdipl-footer-logo.webp') }}" alt="" style="height: 50px; width: 50px;">
        </a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
            <i data-feather="arrow-left"></i>
        </div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                    <a href="{{ route('admin.dashboard') }}">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/home/vdipl-footer-logo.webp') }}" alt="" style="height: 50px; width: 50px;"">
                    </a>
                    <div class="mobile-back text-end">
                        <span>Back </span>
                        <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                    </div>
                </li>

                {{-- Dashboard --}}
                <li class="sidebar-list">
                    <a class="sidebar-link  {{
                        (Route::currentRouteName() === 'admin.dashboard')
                        ? 'active' : '' }} sidebar-title" href="javascript:void(0)">

                        <span>
                            <i class="icon-home"></i>
                            Home
                        </span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="" class="">Banner</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
            </div>
        </div>
    </nav>
</div>
