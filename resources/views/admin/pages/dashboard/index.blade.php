@extends('admin.master')
@section('content')
    <style>
        .card {
            height: 10rem !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="{{ route('supplychain') }}" class="breadcrumb-item">Dashboard</a>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}
        </section>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">
            <!--Business Operation -->

            <div>
                <div class="card-body border-0">
                    <!-- /row - 1 -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="{{ route('notification.index') }}">
                                            <h6 class="mb-0 "> Notifications </h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="{{ route('notification.index') }}">
                                        <button type="button" class="btn  rounded-circle"
                                            style="width: 30px; height: 30px">
                                            <i style="color: #247297" class="ph-arrow-right"></i>
                                        </button>
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 </span> Today's Notification
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 </span> This Month's Notification
                                </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="{{ route('all.product') }}">
                                            <h6 class="mb-0 text-primary">Total Products :</h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="{{ route('all.product') }}">
                                        {{-- <button type="button" class="btn  rounded-circle dashboard_btn" --}}
                                        {{-- style="width: 30px; height: 30px"> --}}
                                        <h2 class="float-end mb-0">
                                            {{ App\Models\Admin\Product::where('product_status', 'product')->where('status', 'active')->count() }}
                                        </h2>
                                        {{-- </button> --}}
                                    </a>
                                </div>
                                <div class="box_details">
                                    <a href="{{ route('brand.index') }}">
                                        <span class="float-end">Hardware :
                                            {{ App\Models\Admin\Product::where('product_status', 'product')->where('product_type', 'hardware')->where('status', 'active')->count() }}</span>
                                        Software :
                                        {{ App\Models\Admin\Product::where('product_status', 'product')->where('product_type', 'software')->where('status', 'active')->count() }}
                                    </a>
                                </div>
                                <div class="box_details">
                                    <a href="{{ route('brand.index') }}">
                                        <span class="float-end">{{ App\Models\Admin\Brand::count() }}</span> Brands </a>
                                </div>
                                <div class="box_details">
                                    <a href="{{ route('brand.index') }}">
                                        <span class="float-end">{{ App\Models\Admin\Category::count() }}</span> Categories
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="../full/income.html">
                                            <h6 class="mb-0 text-primary">Total RFQ & Deal</h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="{{ route('rfq-manage.index') }}">
                                        <button type="button" class="btn  rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i style="color: #247297" class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="box_details">
                                    <a href="{{ route('rfq-manage.index') }}">
                                        <span class="float-end">RFQ :
                                            {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->count() }}</span> Deal :
                                        {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->count() }}
                                    </a>
                                </div>
                                <div class="box_details">
                                    <a href="{{ route('rfq-manage.index') }}">
                                        <span class="float-end">Deal :
                                            {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->whereDate('create_date', Carbon\Carbon::today())->count() }}
                                            <span>RFQ :
                                                {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->whereDate('create_date', Carbon\Carbon::today())->count() }}</span>
                                        </span> Today's </a>
                                </div>
                                <div class="box_details">
                                    <a href="{{ route('rfq-manage.index') }}">
                                        <span class="float-end">Deal :
                                            {{ App\Models\Admin\Rfq::where('rfq_type', 'deal')->whereMonth('create_date', Carbon\Carbon::now()->month)->count() }}
                                            <span>RFQ :
                                                {{ App\Models\Admin\Rfq::where('rfq_type', 'rfq')->whereMonth('create_date', Carbon\Carbon::now()->month)->count() }}</span>
                                        </span> This Month's </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="javascript:void(0);">
                                            <h6 class="mb-0 text-black">Total Industry & Solutions</h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="javascript:void(0);">
                                        <button type="button" class="btn  rounded-circle p-1 dashboard_btn">
                                            <i style="color: #247297" class="icon-office icon-1x p-1"></i>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('industry.index') }}">
                                        <span class="float-end">{{ App\Models\Admin\Industry::count() }}</span> Total
                                        Industries </a>
                                </div>
                                <div>
                                    <a href="{{ route('industry.index') }}">
                                        <span class="float-end">{{ App\Models\Admin\SolutionDetail::count() }}</span> Total
                                        Solutions </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row - 1 -->
                    <!-- /row - 2 -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="{{ route('dashboard.salesreport') }}">
                                            <h6 class="mb-0 text-primary">
                                                <span>Sales Report</span>
                                            </h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="{{ route('dashboard.salesreport') }}">
                                        <button type="button" class="btn  rounded-circle"
                                            style="width: 30px; height: 30px">
                                            <i style="color: #247297" class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span></span>
                                    </span> Today's Sale
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span></span>
                                    </span> This Month's Sale
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="../full/payable.html">
                                            <h6 class="mb-0 text-primary">Total Balance</h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="../full/payable.html">
                                        <button type="button" class="btn  rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i style="color: #247297" class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> Today
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> This Month
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="{{ route('income-expense.ledger') }}">
                                            <h6 class="mb-0 text-primary">Total Expense</h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="{{ route('income-expense.ledger') }}">
                                        <button type="button" class="btn  rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i style="color: #247297" class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> Today
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> This Month
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="{{ route('income-expense.overview') }}">
                                            <h6 class="mb-0 text-primary">Total Income</h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="{{ route('income-expense.overview') }}">
                                        <button type="button" class="btn  rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i style="color: #247297" class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> Today
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> This Month
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="{{ route('pending.order') }}">
                                            <h6 class="mb-0 text-primary">Total Order</h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="{{ route('pending.order') }}">
                                        <button type="button" class="btn  rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i style="color: #247297" class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> Today
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> This Month
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body border-0 shadow-none">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill title_text_link">
                                        <a href="../full/stock_module.html">
                                            <h6 class="mb-0 text-primary">Stock Report</h6>
                                        </a>
                                        <span class="text-muted">Until {{ Carbon\Carbon::now()->format('d-m-Y') }}</span>
                                    </div>
                                    <a href="../full/stock_module.html">
                                        <button type="button" class="btn  rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i style="color: #247297" class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> Today
                                </div>
                                <div class="box_details">
                                    <span class="float-end">0 <span>$</span>
                                    </span> This Month
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row - 2 -->
                </div>
            </div>
            <!--Business Operation -->

        </div>
        <!-- /content area -->
        @include('admin.partials.modals')
        <!-- /inner content -->
    </div>




    <!-- /content area -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        //  $('#accordion').click(function(){
        //     //var element = document.querySelector(".expandable");
        //     var expandable = document.getElementsByClassName('d-none');
        //     if (expandable.length > 0) {
        //         $('.expandable').removeClass('d-none').next().slideUp();
        //     }
        //     else {
        //         // At least some are closed, open all
        //         $('.expandable').addClass('d-none').next().slideDown();
        //     }
        // });
        $(document).ready(function() {
            $("#accordion").click(function() {
                $('.expandable').toggle("slide");
            });
        });
    </script>
@endsection
