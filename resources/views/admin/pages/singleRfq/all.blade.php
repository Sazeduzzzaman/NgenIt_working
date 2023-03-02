@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">RFQ Management</span>
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
        <div class="content">

                <article class="card">
                    <header class="card-header text-center"> <h6 class="m-0 p-0">RFQ Code: OD45345345435</h6> </header>
                    <div class="card-body">

                        <article class="card">
                            <div class="card-body row">

                                    <div class="col-lg-6 mb-3">
                                        <table class="table table-bordered table-striped p-1">
                                            <thead>
                                                <tr class="expand-switch2" style="background: rgb(0, 0, 0); padding-top:8px;padding-bottom:8px;">
                                                    <th width="76%" colspan="3" class="text-white" style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                        <i class="icon2 fa fa-plus mx-3"></i> Client Details</th>
                                                </tr>

                                            </thead>
                                            <tbody class="expand-div2 d-none">
                                                <tr>
                                                    <th width="33%" style="padding:8px !important;font-size:15px !important;">
                                                        Client Type : {{ ucfirst($rfq_details->client_type) }}
                                                    </th>
                                                    <th width="33%" style="padding:8px !important;font-size:15px !important;">
                                                        Name : {{ ucfirst($rfq_details->name) }}
                                                    </th>
                                                    <th width="33%" style="padding:8px !important;font-size:15px !important;">
                                                        Company Name : {{ ucfirst($rfq_details->company_name) }}
                                                </th>
                                                </tr>

                                                <tr>
                                                    <th style="padding:8px !important;font-size:15px !important;">Asking Quantity : @if (App\Models\Admin\DealSas::where('rfq_id' , $rfq_details->id)->sum('qty') > 0)
                                                            {{App\Models\Admin\DealSas::where('rfq_id' , $rfq_details->id)->sum('qty')}}
                                                        @else
                                                        {{ $rfq_details->qty}}
                                                        @endif
                                                    </th>
                                                    <th style="padding:8px !important;font-size:15px !important;">Phone Number : {{ $rfq_details->phone }}</th>
                                                    <th style="padding:8px !important;font-size:15px !important;">
                                                        Total Price : $ {{App\Models\Admin\DealSas::where('rfq_id' , $rfq_details->id)->value('grand_total')}}
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" style="padding:8px !important;font-size:15px !important;">
                                                        Assigned Sales Manager (L1) : {{ App\Models\User::where('id',$rfq_details->sales_man_id_L1)->value('name') }} <br>
                                                        @if ($rfq_details->sales_man_id_T1)
                                                        Assigned Sales Manager (T1) : {{ App\Models\User::where('id',$rfq_details->sales_man_id_T1)->value('name') }} <br>
                                                        @endif
                                                        @if ($rfq_details->sales_man_id_T2)
                                                            Assigned Sales Manager (T2) : {{ App\Models\User::where('id',$rfq_details->sales_man_id_T2)->value('name') }}
                                                        @endif

                                                    </th>
                                                    <th style="padding:8px !important;font-size:15px !important;">
                                                        Status : <span class="badge bg-success p-1">{{ucfirst(($rfq_details->status))}}</span>
                                                    </th>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="expand-switch" style="background: rgb(0, 0, 0); padding-top:8px;padding-bottom:8px;">
                                                        <th width="76%" colspan="2" class="text-white" style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                            <i class="icon3 fa fa-plus mx-3"></i> Product Details</th>
                                                        <th width="24%" class="text-center" style="border:none;">
                                                            <a href="javascript:void(0);" class="text-white" title="Show SAS"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#show-sas">
                                                                <i class="icon-eye"></i>
                                                            </a>
                                                        </th>
                                                    </tr>

                                                </thead>
                                                <tbody class="expand-div d-none">
                                                    @if (count($deal_products) > 0)
                                                        <tr class="text-center">
                                                            <td width="60%"> Product Name</td>
                                                            <td width="20%"> Quantity </td>
                                                            <td width="20%"> Sale Price </td>
                                                        </tr>

                                                        @foreach ($deal_products as $item)
                                                        <tr>
                                                            <th><a href="javascript:void(0);" title="{{$item->item_name}}">{{ Str::limit($item->item_name,28) }}</a></th>
                                                            <th>{{$item->qty}}</th>
                                                            <th>{{$item->sub_total_cost}}</th>
                                                        </tr>
                                                        @endforeach
                                                    @else

                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                            </div>
                        </article>
                        <div class="track">
                            <div class="step active"> <span class="icon"> <i class="fa fa-check"></i>
                                </span> <span class="text">RFQ Created</span> </div>
                            <div class="step active"> <span class="icon"> <i class="fa fa-user"></i>
                                </span> <span class="text"> Salesman Assigned</span> </div>
                            <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span>
                                <span class="text"> Deal Created </span> </div>
                            <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span>
                                <span class="text">SAS Created</span> </div>
                            <div class="step active"> <span class="icon"> <i class="fa fa-user"></i>
                                </span> <span class="text"> SAS Approved</span> </div>
                            <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span>
                                <span class="text"> Quotation Sent </span> </div>
                            <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span>
                                <span class="text">Work Order Uploaded</span> </div>
                            <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span>
                                <span class="text">Invoice Sent</span> </div>
                            <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span>
                                <span class="text">Proof of Payment Uploaded</span> </div>
                        </div>
                        <hr>
                        <ul class="row">
                            <li class="col-md-4">
                                <figure class="itemside mb-3">
                                    <div class="aside"><img src="https://i.imgur.com/iDwDQ4o.png"
                                            class="img-sm border"></div>
                                    <figcaption class="info align-self-center">
                                        <p class="title">Dell Laptop with 500GB HDD <br> 8GB RAM</p> <span
                                            class="text-muted">$950 </span>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-4">
                                <figure class="itemside mb-3">
                                    <div class="aside"><img src="https://i.imgur.com/tVBy5Q0.png"
                                            class="img-sm border"></div>
                                    <figcaption class="info align-self-center">
                                        <p class="title">HP Laptop with 500GB HDD <br> 8GB RAM</p> <span
                                            class="text-muted">$850 </span>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-md-4">
                                <figure class="itemside mb-3">
                                    <div class="aside"><img src="https://i.imgur.com/Bd56jKH.png"
                                            class="img-sm border"></div>
                                    <figcaption class="info align-self-center">
                                        <p class="title">ACER Laptop with 500GB HDD <br> 8GB RAM</p> <span
                                            class="text-muted">$650 </span>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                        <hr>
                        <a href="#" class="btn btn-warning" data-abc="true"> <i
                                class="fa fa-chevron-left"></i> Back to orders</a>
                    </div>
                </article>

        </div>

    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>
@endsection

<style>


    .card-header:first-child {
        border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1)
    }

    .track {
        position: relative;
        background-color: #ddd;
        height: 7px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px
    }

    .track .step {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative
    }

    .track .step.active:before {
        background: #FF5722
    }

    .track .step::before {
        height: 7px;
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        top: 18px
    }

    .track .step.active .icon {
        background: #ee5435;
        color: #fff
    }

    .track .icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: relative;
        border-radius: 100%;
        background: #ddd
    }

    .track .step.active .text {
        font-weight: 400;
        color: #000
    }

    .track .text {
        display: block;
        margin-top: 7px
    }

    .itemside {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }

    .itemside .aside {
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0
    }

    .img-sm {
        width: 80px;
        height: 80px;
        padding: 7px
    }

    ul.row,
    ul.row-sm {
        list-style: none;
        padding: 0
    }

    .itemside .info {
        padding-left: 15px;
        padding-right: 7px
    }

    .itemside .title {
        display: block;
        margin-bottom: 5px;
        color: #212529
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    .btn-warning {
        color: #ffffff;
        background-color: #ee5435;
        border-color: #ee5435;
        border-radius: 1px
    }

    .btn-warning:hover {
        color: #ffffff;
        background-color: #ff2b00;
        border-color: #ff2b00;
        border-radius: 1px
    }
</style>

@once
    @push('scripts')
        <script type="text/javascript">
            $('.rfqDT1').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 4],
                }, ],
            });
            $('.rfqDT2').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2, 4],
                }, ],
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab2").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                });

            });
        </script>
        <script>
            $(document).ready(function() {
                $('.editRfquser').click(function() {
                    $(".Rfquser").toggle(this.checked);
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                    $(".expand-switch").on('click', function(){
                        //$("#additionalExpand").toggle();
                        if ($(".expand-div").hasClass('d-none')) {
                            $(".expand-div").removeClass('d-none');
                            $(".icon3").removeClass('fa-plus');
                            $(".icon3").addClass('fa-minus');
                        } else {
                            $(".expand-div").addClass('d-none');
                            $(".icon3").removeClass('fa-minus');
                            $(".icon3").addClass('fa-plus');
                        }


                    });


                });
        </script>

        <script>
            $(document).ready(function() {
                    $(".expand-switch2").on('click', function(){
                        //$("#additionalExpand").toggle();
                        if ($(".expand-div2").hasClass('d-none')) {
                            $(".expand-div2").removeClass('d-none');
                            $(".icon2").removeClass('fa-plus');
                            $(".icon2").addClass('fa-minus');
                        } else {
                            $(".expand-div2").addClass('d-none');
                            $(".icon2").removeClass('fa-minus');
                            $(".icon2").addClass('fa-plus');
                        }


                    });


                });
        </script>


    @endpush
@endonce
