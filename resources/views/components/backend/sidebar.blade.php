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
                        || (Route::currentRouteName() === 'banner.index') || (Route::currentRouteName() === 'banner.create') || (Route::currentRouteName() === 'banner.edit')
                        || (Route::currentRouteName() === 'our-clientele.index') || (Route::currentRouteName() === 'our-clientele.create') || (Route::currentRouteName() === 'our-clientele.edit')
                        || (Route::currentRouteName() === 'our-associates.index') || (Route::currentRouteName() === 'our-associates.create') || (Route::currentRouteName() === 'our-associates.edit')
                        ? 'active' : '' }} sidebar-title" href="javascript:void(0)">

                        <svg class="stroke-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-home') }}"></use>
                        </svg>
                        <span>Home</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('banner.index') }}" class="{{ (Route::currentRouteName() === 'banner.index') || (Route::currentRouteName() === 'banner.create') || (Route::currentRouteName() === 'banner.edit') ? 'active' : '' }}">Banner</a>
                        </li>

                        <li>
                            <a href="{{ route('our-clientele.index') }}" class="{{ (Route::currentRouteName() === 'our-clientele.index') || (Route::currentRouteName() === 'our-clientele.create') || (Route::currentRouteName() === 'our-clientele.edit') ? 'active' : '' }}">Clientele</a>
                        </li>

                        <li>
                            <a href="{{ route('our-associates.index') }}" class="{{ (Route::currentRouteName() === 'our-associates.index') || (Route::currentRouteName() === 'our-associates.create') || (Route::currentRouteName() === 'our-associates.edit') ? 'active' : '' }}">Associates</a>
                        </li>

                        {{-- <li>
                            <a href="{{ route('services.index') }}" class="{{ (Route::currentRouteName() === 'services.index') || (Route::currentRouteName() === 'services.create') || (Route::currentRouteName() === 'services.edit') ? 'active' : '' }}">Services</a>
                        </li> --}}
                    </ul>
                </li>


                {{-- About Us --}}
                <li class="sidebar-list">
                    <a class="sidebar-link {{ (Route::currentRouteName() === 'about-vdipl.index') || (Route::currentRouteName() === 'about-vdipl.create') || (Route::currentRouteName() === 'about-vdipl.edit')
                        ? 'active' : '' }} sidebar-title" href="javascript:void(0)">

                        <svg class="stroke-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-faq') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-faq') }}"></use>
                        </svg>
                        <span>About Us</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('about-vdipl.index') }}" class="{{ (Route::currentRouteName() === 'about-vdipl.index') || (Route::currentRouteName() === 'about-vdipl.create') || (Route::currentRouteName() === 'about-vdipl.edit') ? 'active' : '' }}">About VDIPL</a>
                        </li>
                        <li>
                            <a href="#" class="">Project Statistics</a>
                        </li>
                    </ul>
                </li>

                {{-- Services --}}
                <li class="sidebar-list">
                    <a class="sidebar-link  {{
                        ( Route::currentRouteName() === 'services.index') || (Route::currentRouteName() === 'services.create') || (Route::currentRouteName() === 'services.edit')
                        ? 'active' : '' }} sidebar-title" href="javascript:void(0)">

                        <svg class="stroke-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-sample-page') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-sample-page') }}"></use>
                        </svg>
                        <span>Services</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('services.index') }}" class="{{ (Route::currentRouteName() === 'services.index') || (Route::currentRouteName() === 'services.create') || (Route::currentRouteName() === 'services.edit') ? 'active' : '' }}">Manage Service</a>
                        </li>
                    </ul>
                </li>

                {{-- Projects --}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">

                        <svg class="stroke-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-project') }}"></use>
                        </svg>
                        <span>Projects</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="#" class="">Manage Project</a>
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
