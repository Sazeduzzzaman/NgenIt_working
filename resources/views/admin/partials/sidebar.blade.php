@php
    //$menus = App\Models\Admin\AdminMenuBuilder::all();
    $setting = App\Models\Admin\Setting::first();
@endphp

<style>
    .side_baricon{
        font-size: 15px ;
    }
    .sidebar-expand-lg.sidebar-main-resized:not(.sidebar-collapsed):not(.sidebar-main-unfold){
        width: 3rem;
    }
    .nav-link{
        font-size: 12px;
    }
    .sidebar-section-body {
        /* position: relative; */
        padding: 5px 6px 4px 18px;
    }
</style>

<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-main-resized"
    style="background-image:url('{{ asset('backend/images/black_sidebar.jpg') }}');background-repeat:no-repeat; background-size: cover;">
    <!-- Sidebar content -->
    <div class="sidebar-content">
        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">
                    <img class="img-fluid" src="{{ !file_exists('upload/logoimage/' . $setting->logo) ? url('upload/logoimage/' . $setting->logo) : $setting->logo }}"
                        class="img-fluid" alt="" width="50px" height="50px">
                </h5>
                <div>
                    <button type="button" style="background-color: #2e2d2d;"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph ph-arrows-counter-clockwise"></i>
                    </button>
                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link d-flex align-items-center justify-content-start">
                        <i class="fa-regular fa-house-day side_baricon"></i>
                        <span class="text-start">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="{{ route('supplychain') }}" class="nav-link d-flex align-items-center justify-content-start">
                        <i class="fa-light fa-truck-field side_baricon"></i>
                        <span class="text-start">Supply Chain</span>
                    </a>
                </li>
                <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="{{ route('business.index') }}" class="nav-link d-flex align-items-center justify-content-start">
                        <i class="fa-light fa-business-time side_baricon"></i>
                        <span class="text-start">Business</span></a>
                </li>
                <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="{{ route('accounts-finance.index') }}" class="nav-link d-flex align-items-center justify-content-start">
                        <i class="fa-solid fa-calculator side_baricon"></i>
                        <span class="text-start ps-1">Accounts Finance</span></a>
                </li>
                <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="{{ route('site-content.index') }}" class="nav-link d-flex align-items-center justify-content-start">
                        <i class="fa-duotone fa-sidebar-flip side_baricon"></i>
                        <span class="text-start ps-1">Site Contents</span></a>
                </li>
                <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="{{ route('crm.index') }}" class="nav-link d-flex align-items-center justify-content-start">
                        <i class="fa-light fa-people-roof side_baricon"></i>
                        <span class="text-start ">CRM</span></a>
                </li>
                <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="{{ route('hr-and-admin.index') }}" class="nav-link d-flex align-items-center justify-content-start">
                        <i class="fa-light fa-user-tie side_baricon"></i>
                        <span class="text-start ps-1">HR & Admin</span></a>
                </li>
                <li class="nav-item {{ Route::current()->getName() == '' ? 'active' : '' }}">
                    <a href="{{ route('site-setting.index') }}" class="nav-link d-flex align-items-center justify-content-start">
                        <i class="fa-light fa-screwdriver-wrench side_baricon"></i>
                        <span class="text-start ps-1">Site Setting</span></a>
                </li>
            </ul>
        </div>




        <!-- Main navigation -->

        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>
