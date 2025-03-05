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
                        || (Route::currentRouteName() === 'services.index') || (Route::currentRouteName() === 'services.create') || (Route::currentRouteName() === 'services.edit')
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
                            <a href="{{ route('services.index') }}" class="{{ (Route::currentRouteName() === 'services.index') || (Route::currentRouteName() === 'services.create') || (Route::currentRouteName() === 'services.edit') ? 'active' : '' }}">Services</a>
                        </li>
                    </ul>
                </li>

                {{-- Clientele --}}
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav {{ (Route::currentRouteName() === 'our-clientele.index') || (Route::currentRouteName() === 'our-clientele.create') || (Route::currentRouteName() === 'our-clientele.edit') ? 'active' : '' }}" href="{{ route('our-clientele.index') }}">
                        <svg class="stroke-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-user') }}"></use>
                        </svg>
                        <span>Clientele</span>
                    </a>
                </li>

                {{-- Associates --}}
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                        <svg class="stroke-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-internationalization') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('backend/assets/svg/icon-sprite.svg#fill-internationalization') }}"></use>
                        </svg>
                        <span>Associates</span>
                    </a>
                </li>

            </ul>
            <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
            </div>
        </div>
    </nav>
</div>
