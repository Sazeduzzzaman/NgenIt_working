@extends('admin.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>

                {{-- <div class="collapse d-lg-block ms-lg-auto" id="breadcrumb_elements">
                    <div class="d-lg-flex mb-2 mb-lg-0">
                        <a href="#" class="d-flex align-items-center text-body py-2">
                            <i class="ph-lifebuoy me-2"></i>
                            Support
                        </a>

                        <div class="dropdown ms-lg-3">
                            <a href="#" class="d-flex align-items-center text-body dropdown-toggle py-2"
                                data-bs-toggle="dropdown">
                                <i class="ph-gear me-2"></i>
                                <span class="flex-1">Settings</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shield-warning me-2"></i>
                                    Account security
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-chart-bar me-2"></i>
                                    Analytics
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-lock-key me-2"></i>
                                    Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    All settings
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <!--Business Operation -->
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center mb-0">Business Operation</h5>
                </div>
                <div class="card-body">

                    <!-- /row - 1 -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="{{route('notification.index')}}">
                                            <h6 class="mb-0 text-primary"><strong>Notifications</strong></h6>
                                        </a>
                                        <span class="text-muted">Until {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="{{route('notification.index')}}">
                                        <button type="button" class="btn btn-primary rounded-circle"
                                            style="width: 30px; height: 30px">
                                            <i class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <span class="float-end">0 <span></span></span>
                                    Today's Notification
                                </div>
                                <div>
                                    <span class="float-end">0 <span></span></span>
                                    This Month's Notification
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-4">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="{{ route('all.product') }}">
                                            <h6 class="mb-0 text-primary">Total Products :</h6>
                                        </a>
                                        <span class="text-muted">Until  {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="{{ route('all.product') }}">
                                        {{-- <button type="button" class="btn btn-primary rounded-circle dashboard_btn" --}}
                                            {{-- style="width: 30px; height: 30px"> --}}
                                            <h2 class="float-end mb-0">{{App\Models\Admin\Product::where('product_status' , 'product')->where('status' , 'active')->count()}}</h2>
                                        {{-- </button> --}}
                                    </a>
                                </div>
                                <div style="font-size: 16px;">
                                    <a href="{{route('brand.index')}}">
                                        <span class="float-end">Hardware : {{App\Models\Admin\Product::where('product_status' , 'product')->where('product_type', 'hardware')->where('status' , 'active')->count()}}</span>
                                        Software : {{App\Models\Admin\Product::where('product_status' , 'product')->where('product_type', 'software')->where('status' , 'active')->count()}}
                                    </a>
                                </div>
                                <div style="font-size: 16px;">
                                    <a href="{{route('brand.index')}}">
                                        <span class="float-end">{{App\Models\Admin\Brand::count()}}</span>
                                        Brands
                                    </a>
                                </div>
                                <div style="font-size: 16px;">
                                    <a href="{{route('brand.index')}}">
                                        <span class="float-end">{{App\Models\Admin\Category::count()}}</span>
                                        Categories
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="../full/income.html">
                                            <h6 class="mb-0 text-primary">Total RFQ & Deal</h6>
                                        </a>
                                        <span class="text-muted">Until  {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="{{route('rfq-manage.index')}}">
                                        <button type="button" class="btn btn-primary rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div style="font-size: 16px;">
                                    <a href="{{route('rfq-manage.index')}}">
                                        <span class="float-end">RFQ : {{App\Models\Admin\Rfq::where('rfq_type' , 'rfq')->count()}}</span>
                                        Deal : {{App\Models\Admin\Rfq::where('rfq_type' , 'deal')->count()}}
                                    </a>
                                </div>

                                <div style="font-size: 16px;">
                                    <a href="{{route('rfq-manage.index')}}">
                                        <span class="float-end">Deal : {{App\Models\Admin\Rfq::where('rfq_type' , 'deal')->whereDate('create_date', Carbon\Carbon::today())->count()}}
                                            <span>RFQ : {{App\Models\Admin\Rfq::where('rfq_type' , 'rfq')->whereDate('create_date', Carbon\Carbon::today())->count()}}</span>
                                        </span>
                                        Today's
                                    </a>
                                </div>
                                <div style="font-size: 16px;">
                                    <a href="{{route('rfq-manage.index')}}">
                                        <span class="float-end">Deal : {{App\Models\Admin\Rfq::where('rfq_type' , 'deal')->whereMonth('create_date', Carbon\Carbon::now()->month)->count()}}
                                            <span>RFQ : {{App\Models\Admin\Rfq::where('rfq_type' , 'rfq')->whereMonth('create_date', Carbon\Carbon::now()->month)->count()}}</span>
                                        </span>
                                        This Month's
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="javascript:void(0);">
                                            <h6 class="mb-0 text-black">Total Industry & Solutions</h6>
                                        </a>
                                        <span class="text-muted">Until  {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="javascript:void(0);">
                                        <button type="button" class="btn btn-primary rounded-circle p-1 dashboard_btn">
                                            <i class="icon-office icon-1x p-1"></i>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{route('industry.index')}}">
                                        <span class="float-end">{{App\Models\Admin\Industry::count()}}</span>
                                        Total Industries
                                    </a>
                                </div>
                                <div>
                                    <a href="{{route('industry.index')}}">
                                        <span class="float-end">{{App\Models\Admin\SolutionDetail::count()}}</span>
                                        Total Solutions
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- /row - 1 -->


                    <!-- /row - 2 -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="{{route('dashboard.salesreport')}}">
                                            <h6 class="mb-0 text-primary"><strong>Sales Report</strong></h6>
                                        </a>
                                        <span class="text-muted">Until {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="{{route('dashboard.salesreport')}}">
                                        <button type="button" class="btn btn-primary rounded-circle"
                                            style="width: 30px; height: 30px">
                                            <i class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <span class="float-end">0 <span></span></span>
                                    Today's Sale
                                </div>
                                <div>
                                    <span class="float-end">0 <span></span></span>
                                    This Month's Sale
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="../full/payable.html">
                                            <h6 class="mb-0 text-primary">Total Balance</h6>
                                        </a>
                                        <span class="text-muted">Until  {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="../full/payable.html">
                                        <button type="button" class="btn btn-primary rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    Today
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    This Month
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="{{route('income-expense.ledger')}}">
                                            <h6 class="mb-0 text-primary">Total Expense</h6>
                                        </a>
                                        <span class="text-muted">Until  {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="{{route('income-expense.ledger')}}">
                                        <button type="button" class="btn btn-primary rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    Today
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    This Month
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="{{route('income-expense.overview')}}">
                                            <h6 class="mb-0 text-primary">Total Income</h6>
                                        </a>
                                        <span class="text-muted">Until  {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="{{route('income-expense.overview')}}">
                                        <button type="button" class="btn btn-primary rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    Today
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    This Month
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="{{route('pending.order')}}">
                                            <h6 class="mb-0 text-primary">Total Order</h6>
                                        </a>
                                        <span class="text-muted">Until  {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="{{route('pending.order')}}">
                                        <button type="button" class="btn btn-primary rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    Today
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    This Month
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12">
                            <div class="card card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-fill">
                                        <a href="../full/stock_module.html">
                                            <h6 class="mb-0 text-primary">Stock Report</h6>
                                        </a>
                                        <span class="text-muted">Until  {{Carbon\Carbon::now()->format('d-m-Y')}}</span>
                                    </div>
                                    <a href="../full/stock_module.html">
                                        <button type="button" class="btn btn-primary rounded-circle dashboard_btn"
                                            style="width: 30px; height: 30px">
                                            <i class="ph-arrow-right"></i>
                                        </button>
                                    </a>
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    Today
                                </div>
                                <div>
                                    <span class="float-end">0 <span>$</span></span>
                                    This Month
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
