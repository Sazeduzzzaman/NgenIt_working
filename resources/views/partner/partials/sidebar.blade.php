<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-main-resized" style="background:#242424">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h5 class="sidebar-resize-hide flex-grow-1 my-auto">{{ Auth::guard('partner')->user()->name }}</h5>

                <div>
                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button"
                        class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">


                <li class="nav-item">
                    <a href="{{ route('partner.dashboard') }}" class="nav-link active">
                        <i class="ph-house"></i>
                        <span>
                            Dashboard

                        </span>
                    </a>
                </li>
                @if (Auth::guard('partner')->user()->status == 'active')
                @else
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">
                            <i class="ph-user-focus"></i>
                            <span>Your Profile</span>
                        </a>
                        <ul class="nav-group-sub collapse">
                            <li class="nav-item"><a href="{{ route('partner.profile') }}" class="nav-link active"><i
                                        class="ph-user-focus"></i>
                                    <span>Profile Details</span></a></li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="ph-user-circle-gear"></i>
                                    <span>
                                        Change Password
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif



            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
