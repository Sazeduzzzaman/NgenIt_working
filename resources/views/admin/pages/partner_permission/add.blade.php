@extends('admin.master')
@section('content')
    <style>
        .label_style {
            width: 151px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i>Home</a>
                        <a href="{{ route('knowledge.index') }}" class="breadcrumb-item">Partner Permission</a>
                        <a href="" class="breadcrumb-item">Add</a>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content pt-2 w-50 mx-auto">
            <div class="text-center">
                <div class="text-start">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('partnerPermission.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <p class="text-white p-0 m-0 fw-bold"> Add Partner Permission </p>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                            <a href="{{ route('row.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                    <span>Row</span>
                                </div>
                            </a>
                            <a href="{{ route('solution.index') }}" class="btn navigation_btn ms-2">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                    <span>Solution</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form id="myform" method="post" action="{{ route('partnerPermission.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <!--Banner Section-->
                    <div class="container">
                        <div class="row g-2 p-1">
                            <div class="col">
                                <div class="px-2 py-2 rounded bg-light">
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Full Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" class="form-control form-control-sm" name="name"
                                                maxlength="100" required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Phone</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="number" class="form-control form-control-sm" name="phone"
                                                maxlength="100" required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Email</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="email" class="form-control form-control-sm" name="email"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Address</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <textarea class="form-control" rows="2" name="address" required></textarea>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Country</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="country" class="form-control form-select-sm select"
                                                data-container-css-class="select-sm" data-placeholder="Chose Country"
                                                required>
                                                @foreach ($countries as $item)
                                                    <option value="{{ $item->country_name }}">{{ $item->country_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Postal</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" class="form-control form-select-sm" name="postal"
                                                required />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Profile Picture</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input id="image" type="file" class="form-control form-select-sm"
                                                name="photo" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Password</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="password" name="password"
                                                class="form-control form-control-sm @error('new_password') is-invalid @enderror"
                                                id="new_password" placeholder="Password" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Confirm Password</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="password" name="password_confirmation"
                                                class="form-control form-control-sm" placeholder="Confirm New Password" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pb-2 pe-3 mt-2">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits" style="padding: 4px 9px;"
                            id="submitbtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
