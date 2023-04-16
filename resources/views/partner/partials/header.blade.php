<!-- Main navbar -->
<div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10" style="background: #ae0a46;">
    <div class="container-fluid">
        <div class="d-flex d-lg-none me-2">
            <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                <i class="ph-list"></i>
            </button>
        </div>
        @php
            $setting = App\Models\Admin\Setting::latest()->first();
        @endphp

        <div class="navbar-brand flex-1 flex-lg-0">
            <a href="{{route('admin.dashboard')}}" class="d-inline-flex align-items-center">
                <img src="{{ (!file_exists('upload/logoimage/'.$setting->logo)) ? $setting->logo:url('upload/logoimage/'.$setting->logo) }}" alt="">
                {{-- <img src="{{asset('upload/logoimage/'.$setting->logo)}}" class="d-none d-sm-inline-block h-16px ms-3" alt=""> --}}
            </a>
        </div>

        <ul class="nav flex-row">
            <li class="nav-item d-lg-none">
                <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="collapse">
                    <i class="ph-magnifying-glass"></i>
                </a>
            </li>


        </ul>

        <div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
            <div class="navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3">
                <div class="form-control-feedback form-control-feedback-start flex-grow-1" data-color-theme="dark">
                    <input type="text" class="form-control bg-transparent rounded-pill" placeholder="Search" data-bs-toggle="dropdown" style="width: 17rem">
                    <div class="form-control-feedback-icon">
                        <i class="ph-magnifying-glass"></i>
                    </div>
                    <div class="dropdown-menu w-100" data-color-theme="light">
                        <button type="button" class="dropdown-item">
                            <div class="text-center w-32px me-3">
                                <i class="ph-magnifying-glass"></i>
                            </div>
                            <span>Search <span class="fw-bold">"in"</span> everywhere</span>
                        </button>

                        <div class="dropdown-divider"></div>

                        <div class="dropdown-menu-scrollable-lg">
                            <div class="dropdown-header">
                                Contacts
                                <a href="#" class="float-end">
                                    See all
                                    <i class="ph-arrow-circle-right ms-1"></i>
                                </a>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('/') }}backend/assets/images/demo/users/face3.jpg" class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Christ<mark>in</mark>e Johnson</div>
                                    <span class="fs-sm text-muted">c.johnson@awesomecorp.com</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-user-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('/') }}backend/assets/images/demo/users/face24.jpg" class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Cl<mark>in</mark>ton Sparks</div>
                                    <span class="fs-sm text-muted">c.sparks@awesomecorp.com</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-user-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>

                            <div class="dropdown-header">
                                Clients
                                <a href="#" class="float-end">
                                    See all
                                    <i class="ph-arrow-circle-right ms-1"></i>
                                </a>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('/') }}backend/assets/images/brands/adobe.svg" class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Adobe <mark>In</mark>c.</div>
                                    <span class="fs-sm text-muted">Enterprise license</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-briefcase"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('/') }}backend/assets/images/brands/holiday-inn.svg" class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold">Holiday-<mark>In</mark>n</div>
                                    <span class="fs-sm text-muted">On-premise license</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-briefcase"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-item cursor-pointer">
                                <div class="me-3">
                                    <img src="{{ asset('/') }}backend/assets/images/brands/ing.svg" class="w-32px h-32px rounded-pill" alt="">
                                </div>

                                <div class="d-flex flex-column flex-grow-1">
                                    <div class="fw-semibold"><mark>IN</mark>G Group</div>
                                    <span class="fs-sm text-muted">Perpetual license</span>
                                </div>

                                <div class="d-inline-flex">
                                    <a href="#" class="text-body ms-2">
                                        <i class="ph-briefcase"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#" class="navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1" data-bs-toggle="dropdown" data-bs-auto-close="outside"  style="margin-right: 25rem">
                    <i class="ph-faders-horizontal" style="margin-right: 25rem"></i>
                </a>

                <div class="dropdown-menu w-100 p-3">
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="mb-0">Search options</h6>
                        <a href="#" class="text-body rounded-pill ms-auto">
                            <i class="ph-clock-counter-clockwise"></i>
                        </a>
                    </div>

                    <div class="mb-3">
                        <label class="d-block form-label">Category</label>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" checked>
                            <span class="form-check-label">Invoices</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Files</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Users</span>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Addition</label>
                        <div class="input-group">
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>has</option>
                                <option value="2">has not</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Enter the word(s)">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div class="input-group">
                            <select class="form-select w-auto flex-grow-0">
                                <option value="1" selected>is</option>
                                <option value="2">is not</option>
                            </select>
                            <select class="form-select">
                                <option value="1" selected>Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">New</option>
                                <option value="4">Expired</option>
                                <option value="5">Pending</option>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex">
                        <button type="button" class="btn btn-light">Reset</button>

                        <div class="ms-auto">
                            <button type="button" class="btn btn-light">Cancel</button>
                            <button type="button" class="btn btn-primary ms-2">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav flex-row justify-content-end order-1 order-lg-2">
            <li class="nav-item ms-lg-2">
                <a type="button" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas" data-bs-target="#demo_config">
                    <i class="ph-gear"></i>
                </a>
            </li>

            <li class="nav-item ms-lg-2">
                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas" data-bs-target="#notifications">
                    <i class="ph-bell"></i>
                    <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                </a>
            </li>

            <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                    <div class="status-indicator-container">
                        <img src="{{ (!empty(Auth::guard('partner')->user()->photo)) ? url('upload/Profile/admin/'.Auth::guard('partner')->user()->photo):url('upload/no_image.jpg') }}" class="w-32px h-32px rounded-pill" alt="">
                        <span class="status-indicator bg-success"></span>
                    </div>
                    <span class="d-none d-lg-inline-block mx-lg-2">{{Auth::guard('partner')->user()->name}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{ route('admin.profile') }}" class="dropdown-item">
                        <i class="ph-user-circle me-2"></i>
                        My profile
                    </a>
                    <a href="{{ route('admin.change.password') }}" class="dropdown-item">
                        <i class="ph-password"></i>
                        Change Password
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-currency-circle-dollar me-2"></i>
                        My subscription
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-shopping-cart me-2"></i>
                        My orders
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ph-envelope-open me-2"></i>
                        My inbox
                        <span class="badge bg-primary rounded-pill ms-auto">26</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('admin.profile') }}" class="dropdown-item">
                        <i class="ph-gear me-2"></i>
                        Account settings
                    </a>
                    <a href="{{ route('partner.logout') }}" class="dropdown-item">
                        <i class="ph-sign-out me-2"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->

