@extends('admin.master')
@section('content')
<section style="min-height: 90vh;">
        <!-- Page header -->
        <section class="shadow-sm" >
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <span class="breadcrumb-item active">Supply Chain</span>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}

                <!-- Basic tabs -->
                <div >
                        <a href="{{ route('product-sourcing.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                <span>Sourcing</span>
                            </div>
                        </a>
                        <a href="{{ route('purchase.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                <span>Purchase</span>
                            </div>
                        </a>
                        <a href="{{ route('delivery.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-truck-bolt me-1" style="font-size: 10px;"></i>
                                <span>delivery</span>
                            </div>
                        </a>
                </div>
        </section>
        <!-- /page header -->

        <!-- Supply Chain Page -->
        <section class="mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-12 ">
                        <div class="card ">
                            <div class="card-body ">
                                <a href="">
                                    <div class="d-flex mb-3 ">
                                        <div class="flex-fill ">
                                            <h6 class="mb-0 d-flex align-items-center"><a href="">Sourcing</a>
                                                <i class="ph ph-git-branch ph-lg main_text_color ms-2"></i>
                                            </h6>
                                            <span class="para_color">Until 1st of June</span>
                                        </div>
                                        <div class=" align-self-center">
                                            <a href="{{ route('product-sourcing.create') }}" class=" text-success nav-link cat-tab3">
                                                <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Add Expense">
                                                    <i class="ph-plus icons_design"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="progress mb-2" style="height: 0.5rem;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    {{-- First --}}
                                    <div class="bg-light px-2 py-1 rounded">
                                        <div>
                                            <span class="float-end main_text_color fw-bold">100%</span>
                                            Demo
                                        </div>
                                        <div>
                                            <span class="float-end main_text_color fw-bold">100%</span>
                                            Demo
                                        </div>
                                    </div>.
                                    {{-- Second --}}
                                    <div class="bg-light px-2 py-1 rounded">
                                        <div>
                                            <span class="float-end main_text_color fw-bold">100%</span>
                                            Demo
                                        </div>
                                        <div>
                                            <span class="float-end main_text_color fw-bold ">100%</span>
                                            Demo
                                        </div>
                                    </div>
                                    {{-- Third --}}
                                    <div class="bg-light px-2 py-1 rounded mt-3">
                                        <div>
                                            <span class="float-end main_text_color fw-bold">100%</span>
                                            Demo
                                        </div>
                                        <div>
                                            <span class="float-end main_text_color fw-bold">100%</span>
                                            Demo
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 ">
                        <div class="card ">
                            <div class="card-body ">
                                <div class="d-flex mb-3 ">
                                    <div class="flex-fill ">
                                        <h6 class="mb-0 d-flex align-items-center"><a href="">Purchase</a>
                                            <i class="ph ph-money ph-lg main_text_color ms-2"></i>
                                        </h6>
                                        <span class="para_color">Until 1st of June</span>
                                    </div>
                                    <div class=" align-self-center">
                                        <a href="{{ route('purchase.index') }}" class=" text-success nav-link cat-tab3">
                                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Add Expense">
                                                <i class="ph-plus icons_design"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="progress mb-2" style="height: 0.5rem;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                {{-- First --}}
                                <div class="bg-light px-2 py-1 rounded">
                                    <div>
                                        <span class="float-end  main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                </div>.
                                {{-- Second --}}
                                <div class="bg-light px-2 py-1 rounded">
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                </div>
                                {{-- Third --}}
                                <div class="bg-light px-2 py-1 rounded mt-3">
                                    <div>
                                        <span class="float-end main_text_color  fw-bold">100%</span>
                                        Demo
                                    </div>
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 ">
                        <div class="card ">
                            <div class="card-body ">
                                <div class="d-flex mb-3 ">
                                    <div class="flex-fill ">
                                        <h6 class="mb-0 d-flex align-items-center"><a href="">Delivery</a>
                                            <i class="ph ph-truck ph-lg main_text_color ms-2"></i>
                                        </h6>
                                        <span class="para_color">Until 1st of June</span>
                                    </div>
                                    <div class=" align-self-center">
                                        <a href="{{ route('delivery.index') }}" class=" text-success nav-link cat-tab3">
                                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Add Expense">
                                                <i class="ph-plus icons_design"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="progress mb-2" style="height: 0.5rem;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                {{-- First --}}
                                <div class="bg-light px-2 py-1 rounded">
                                    <div>
                                        <span class="float-end fw-bold main_text_color">100%</span>
                                        Demo
                                    </div>
                                    <div>
                                        <span class="float-end fw-bold main_text_color">100%</span>
                                        Demo
                                    </div>
                                </div>.
                                {{-- Second --}}
                                <div class="bg-light px-2 py-1 rounded">
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                </div>
                                {{-- Third --}}
                                <div class="bg-light px-2 py-1 rounded mt-3">
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 ">
                        <div class="card ">
                            <div class="card-body ">
                                <div class="d-flex mb-3 ">
                                    <div class="flex-fill ">
                                        <h6 class="mb-0 d-flex align-items-center"><a href="">Others</a>
                                            <i class="ph ph-dots-three ph-lg main_text_color ms-2"></i>
                                        </h6>
                                        <span class="para_color">Until 1st of June</span>
                                    </div>

                                    <div class="ms-3 align-self-center">

                                    </div>
                                    <div class=" align-self-center">
                                        <a href="" class=" text-success nav-link cat-tab3">
                                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Add Expense">
                                                <i class="ph-plus icons_design"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="progress mb-2" style="height: 0.5rem;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                {{-- First --}}
                                <div class="bg-light px-2 py-1 rounded">
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                </div>.
                                {{-- Second --}}
                                <div class="bg-light px-2 py-1 rounded">
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                </div>
                                {{-- Third --}}
                                <div class="bg-light px-2 py-1 rounded mt-3">
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                    <div>
                                        <span class="float-end main_text_color fw-bold">100%</span>
                                        Demo
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</section>

@endsection
