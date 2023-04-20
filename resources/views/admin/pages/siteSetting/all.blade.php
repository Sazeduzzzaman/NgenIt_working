@extends('admin.master')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <style>
        .accordion {
           --accordion-border-width: 0px !important;
        }
        .section-border{
            border-bottom: 0.5px solid #24739763;
        }
    </style>
    <div class="content-wrapper">
        <div class="content p-0">
            <section style="min-height: 100vh;">
                <!-- Page header -->
                <section class="shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        {{-- Page Destination/ BreadCrumb --}}
                        <div class="page-header-content d-lg-flex ">
                            <div class="d-flex px-2">
                                <div class="breadcrumb py-2">
                                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                                    <a href="" class="breadcrumb-item"><span
                                            class="breadcrumb-item active">Business</span></a>
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
                        <div>
                            <a href="{{ route('sales-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-truck-field me-1" style="font-size: 12px;"></i>
                                    <span>Supply Chain</span>
                                </div>

                            </a>
                            <a href="{{ route('marketing-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                                    <span> Business</span>
                                </div>
                            </a>
                            <a href="{{ route('product-showcase-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-calculator me-1" style="font-size: 12px;"></i>
                                    <span>Accounts</span>
                                </div>
                            </a>
                            <a href="{{ route('product-showcase-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-user-tie me-1" style="font-size: 12px;"></i>
                                    <span>HR Admin</span>
                                </div>
                            </a>
                            <a href="{{ route('product-showcase-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-cog me-1" style="font-size: 12px;"></i>
                                    <span>Website Settings</span>
                                </div>
                            </a>
                            <a href="{{ route('product-showcase-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-gallery-thumbnails me-1" style="font-size: 12px;"></i>
                                    <span>Role Settings</span>
                                </div>
                            </a>
                        </div>
                </section>
                <!-- /page header -->

                <!-- Sales Chain Page -->
                <section>
                    <div class="container-fluid ">
                        <div class="row">

                            <div class="col-lg-3">
                                <h5 class="p-0 m-0 mb-1">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">Supply Chain</span>
                                </h5>
                                <div class="bg-white rounded custom_shadow">
                                    <div class="business_cards">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">DMAR <i
                                                    class="fa-light fa-arrow-right"></i></span>

                                        </div>
                                    </div>
                                    <div class="business_cards">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">CMAR <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-user-tie"></i> <span>165</span> %
                                            </p>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-user-tie"></i> <span>165</span> %
                                            </p>
                                        </div>
                                    </div>
                                    <div class="business_cards">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">EMAR <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                            </p>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h5 class="p-0 m-0 mb-1">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">Business</span>
                                </h5>
                                <div class="bg-white rounded custom_shadow">
                                    <div class="business_cards">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Knowledge <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-bangladeshi-taka-sign"></i> <span>5</span> L
                                            </p>
                                        </div>
                                    </div>
                                    <div class="business_cards" style="">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Presentation <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-can-food"></i> <span>10%</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="business_cards" style="">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Showcase BD <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-envelopes"></i> <span>165</span> %
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h5 class="p-0 m-0 mb-1">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">Accounts</span>
                                </h5>
                                <div class="bg-white rounded custom_shadow">
                                    <div class="business_cards">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Knowledge <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-bangladeshi-taka-sign"></i> <span>5</span> L
                                            </p>
                                        </div>
                                    </div>
                                    <div class="business_cards" style="">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Presentation <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-can-food"></i> <span>10%</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="business_cards" style="">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Showcase BD <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-envelopes"></i> <span>165</span> %
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h5 class="p-0 m-0 mb-1">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">HR Admin</span>
                                </h5>
                                <div class="bg-white rounded custom_shadow">
                                    <div class="business_cards">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Knowledge <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-bangladeshi-taka-sign"></i> <span>5</span> L
                                            </p>
                                        </div>
                                    </div>
                                    <div class="business_cards" style="">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Presentation <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-can-food"></i> <span>10%</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="business_cards" style="">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Showcase BD <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-envelopes"></i> <span>165</span> %
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h5 class="p-0 m-0 mb-1">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">Website Settings</span>
                                </h5>
                                <div class="bg-white rounded custom_shadow">
                                    <div class="business_cards">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Knowledge <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-bangladeshi-taka-sign"></i> <span>5</span> L
                                            </p>
                                        </div>
                                    </div>
                                    <div class="business_cards" style="">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Presentation <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-can-food"></i> <span>10%</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="business_cards" style="">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Showcase BD <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-envelopes"></i> <span>165</span> %
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h5 class="p-0 m-0 mb-1">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">Role Settings</span>
                                </h5>
                                <div class="bg-white rounded custom_shadow pb-1">
                                    <div class="business_cards section-border p-1 px-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">
                                                <a href="{{ route('all.permission') }}"> All Permission</a>
                                                <i class="fa-light fa-arrow-right"></i></span>
                                            {{-- <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-bangladeshi-taka-sign"></i> <span>5</span> L
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="business_cards section-border p-1 px-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">
                                                <a href="{{ route('all.roles') }}"> All Roles</a>
                                                <i class="fa-light fa-arrow-right"></i></span>
                                            {{-- <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-can-food"></i> <span>10%</span>
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="business_cards section-border p-1 px-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">
                                                <a href="{{ route('add.roles.permission') }}">  Roles in Permission</a>
                                                <i class="fa-light fa-arrow-right"></i></span>
                                            {{-- <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-envelopes"></i> <span>165</span> %
                                            </p> --}}
                                        </div>
                                    </div>
                                    <div class="business_cards p-1 px-3">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">
                                                <a href="{{ route('all.roles.permission') }}">  All Roles in Permission</a>
                                                <i class="fa-light fa-arrow-right"></i></span>
                                            {{-- <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-envelopes"></i> <span>165</span> %
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Sales Chain Page -->


            </section>
        </div>
    </div>
@endsection
