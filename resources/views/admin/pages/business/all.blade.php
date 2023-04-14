@extends('admin.master')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <style>
        .accordion {
            --accordion-border-width: 0px !important;
        }
    </style>
    <div class="content-wrapper">
        <div class="content">
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
                                    <i class="fa-solid fa-chart-mixed-up-circle-dollar me-1" style="font-size: 10px;"></i>
                                    <span>Sales</span>
                                </div>

                            </a>
                            <a href="{{ route('marketing-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-bullhorn me-1" style="font-size: 10px;"></i>
                                    <span> Marketing</span>
                                </div>
                            </a>
                            <a href="{{ route('product-showcase-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-gallery-thumbnails me-1" style="font-size: 10px;"></i>
                                    <span>Product Showcase</span>
                                </div>
                            </a>
                        </div>
                </section>
                <!-- /page header -->

                <!-- Sales Chain Page -->
                <section>
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="p-0 m-0">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">Sales</span>
                                </h5>
                                <div class="bg-white rounded custom_shadow">
                                    <div class="business_cards ">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Total Monthly Sales Value <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-bangladeshi-taka-sign"></i> <span>5</span> L
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex justify-content-between align-items-center">
                                                <span class="p-0 m-0  card_title">QTY</span>
                                                <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                    <span>5</span> %
                                                </p>
                                            </div>
                                            |
                                            <div class="col d-flex justify-content-between align-items-center">
                                                <span class="p-0 m-0  card_title">Ration</span>
                                                <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                    <span>5</span> %
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="business_cards " style="border-top: 0.5px solid #24739763;">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">Total Monthly Ration <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-can-food"></i> <span>10%</span>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex justify-content-between align-items-center">
                                                <span class="p-0 m-0  card_title">QTY</span>
                                                <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                    <span>5</span> %
                                                </p>
                                            </div>
                                            |
                                            <div class="col d-flex justify-content-between align-items-center">
                                                <span class="p-0 m-0  card_title">Ration</span>
                                                <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                    <span>5</span> %
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="p-0 m-0">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">Marketing</span>
                                </h5>
                                <div class="bg-white rounded custom_shadow">
                                    <div class="business_cards">
                                        <div class="d-flex justify-content-between">
                                            <span class="p-0 m-0  card_title main_text_color">DMAR <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                            </p>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-hourglass-start"></i> <span>165</span> %
                                            </p>
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
                            <div class="col-lg-4">
                                <h5 class="p-0 m-0">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">Product Showcase</span>
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
                        </div>
                    </div>
                </section>
                <!-- Sales Chain Page -->
                <section>
                    <div class="cotnainer-fluid mx-2">
                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="p-0 m-0">
                                    <span style="border-bottom: 2px solid #247297;font-size: 12px;">Busniess Team</span>
                                </h5>
                                <div class="bg-white rounded custom_shadow">
                                    <div class="business_cards business_tab">
                                        <div class="d-flex justify-content-between" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne">
                                            <span class="p-0 m-0  card_title main_text_color ">Total Monthly Sales Value <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-bangladeshi-taka-sign"></i> <span>5</span> L
                                            </p>
                                        </div>
                                    </div>

                                    <div class="business_cards business_tab" style="border-top: 0.5px solid #24739763;">
                                        <div class="d-flex justify-content-between" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapsetwo">
                                            <span class="p-0 m-0  card_title main_text_color ">Total Monthly Ration <i
                                                    class="fa-light fa-arrow-right"></i></span>
                                            <p class="p-0 m-0 main_text_color value" style="font-size: 30px">
                                                <i class="fa-light fa-can-food"></i> <span>10%</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="accordion accordion-flush " id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <div id="flush-collapseOne" class="accordion-collapse collapse "
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body p-1 ">
                                                <div class="table-responsive my-2">
                                                    <table class="table border text-center">
                                                        <thead class="main_bg_color text-white">
                                                            <tr>
                                                                <th width="5%">SL</th>
                                                                <th width="25%">Name</th>
                                                                <th width="20%">Image</th>
                                                                <th width="20%">Id</th>
                                                                <th width="20%">Total Sales</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Joy Lobo Jhon</td>
                                                                <td>
                                                                    <img src="https://www.citypng.com/public/uploads/preview/download-black-male-user-profile-icon-png-116371332534k5baafcll.png"
                                                                        alt="" width="25" height="25">
                                                                </td>
                                                                <td>666</td>
                                                                <td>152</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Joy Lobo Jhon</td>
                                                                <td>
                                                                    <img src="https://www.citypng.com/public/uploads/preview/download-black-male-user-profile-icon-png-116371332534k5baafcll.png"
                                                                        alt="" width="25" height="25">
                                                                </td>
                                                                <td>666</td>
                                                                <td>152</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Joy Lobo Jhon</td>
                                                                <td>
                                                                    <img src="https://www.citypng.com/public/uploads/preview/download-black-male-user-profile-icon-png-116371332534k5baafcll.png"
                                                                        alt="" width="25" height="25">
                                                                </td>
                                                                <td>666</td>
                                                                <td>152</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Joy Lobo Jhon</td>
                                                                <td>
                                                                    <img src="https://www.citypng.com/public/uploads/preview/download-black-male-user-profile-icon-png-116371332534k5baafcll.png"
                                                                        alt="" width="25" height="25">
                                                                </td>
                                                                <td>666</td>
                                                                <td>152</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <div id="flush-collapsetwo" class="accordion-collapse collapse "
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body p-1 ">
                                                <div class="table-responsive my-2">
                                                    <table class="table border text-center">
                                                        <thead class="main_bg_color text-white">
                                                            <tr>
                                                                <th width="5%">SL</th>
                                                                <th width="25%">Name</th>
                                                                <th width="20%">Image</th>
                                                                <th width="20%">Id</th>
                                                                <th width="20%">Total Sales</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Joy Lobo Jhon</td>
                                                                <td>
                                                                    <img src="https://www.citypng.com/public/uploads/preview/download-black-male-user-profile-icon-png-116371332534k5baafcll.png"
                                                                        alt="" width="25" height="25">
                                                                </td>
                                                                <td>666</td>
                                                                <td>152</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Joy Lobo Jhon</td>
                                                                <td>
                                                                    <img src="https://www.citypng.com/public/uploads/preview/download-black-male-user-profile-icon-png-116371332534k5baafcll.png"
                                                                        alt="" width="25" height="25">
                                                                </td>
                                                                <td>666</td>
                                                                <td>152</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Joy Lobo Jhon</td>
                                                                <td>
                                                                    <img src="https://www.citypng.com/public/uploads/preview/download-black-male-user-profile-icon-png-116371332534k5baafcll.png"
                                                                        alt="" width="25" height="25">
                                                                </td>
                                                                <td>666</td>
                                                                <td>152</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Joy Lobo Jhon</td>
                                                                <td>
                                                                    <img src="https://www.citypng.com/public/uploads/preview/download-black-male-user-profile-icon-png-116371332534k5baafcll.png"
                                                                        alt="" width="25" height="25">
                                                                </td>
                                                                <td>666</td>
                                                                <td>152</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




                {{-- <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-body">
                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#js-tab1" class="nav-link active" data-bs-toggle="tab">
                                            Active
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#js-tab2" class="nav-link" data-bs-toggle="tab">
                                            Inactive
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#js-tab3" class="nav-link disabled" data-bs-toggle="tab">
                                            Disabled
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="js-tab1">
                                        This is some placeholder content the <strong>first</strong> tab's associated content
                                    </div>

                                    <div class="tab-pane fade" id="js-tab2">
                                        This is some placeholder content the <strong>second</strong> tab's associated content
                                    </div>

                                    <div class="tab-pane fade" id="js-tab3">
                                        This is some placeholder content the <strong>third</strong> tab's associated content
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            </section>
        </div>
    </div>
@endsection
