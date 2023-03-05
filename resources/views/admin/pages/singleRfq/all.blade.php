@extends('admin.master')
@section('content')
    <style>
        .track {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px;
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
            background: #09bb20
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
            background: #09bb20;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            position: relative;
            border-radius: 100%;
            background: #ddd;
            color: #ff2b00;
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
                <header class="card-header text-center">
                    <h6 class="m-0 p-0">RFQ Code: {{ $rfq_details->rfq_code }}</h6>
                </header>
                <div class="card-body">

                    <article class="card">
                        <div class="card-body row">

                            <div class="col-lg-6 mb-3">
                                <table class="table table-bordered table-striped p-1">
                                    <thead>
                                        <tr class="expand-switch2"
                                            style="background: rgb(0, 0, 0); padding-top:8px;padding-bottom:8px;">
                                            <th width="76%" colspan="3" class="text-white"
                                                style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                <i class="icon2 fa fa-plus mx-3"></i> Client Details
                                            </th>
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
                                            <th style="padding:8px !important;font-size:15px !important;">Asking Quantity :
                                                @if (App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') > 0)
                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                @else
                                                    {{ $rfq_details->qty }}
                                                @endif
                                            </th>
                                            <th style="padding:8px !important;font-size:15px !important;">Phone Number :
                                                {{ $rfq_details->phone }}</th>
                                            <th style="padding:8px !important;font-size:15px !important;">
                                                Total Price : $
                                                {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" style="padding:8px !important;font-size:15px !important;">
                                                Assigned Sales Manager (L1) :
                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                <br>
                                                @if ($rfq_details->sales_man_id_T1)
                                                    Assigned Sales Manager (T1) :
                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                    <br>
                                                @endif
                                                @if ($rfq_details->sales_man_id_T2)
                                                    Assigned Sales Manager (T2) :
                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                @endif

                                            </th>
                                            <th style="padding:8px !important;font-size:15px !important;">
                                                Status : <span
                                                    class="badge bg-success p-1">{{ ucfirst($rfq_details->status) }}</span>
                                            </th>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <div class="table-responsive">

                                    @if (!empty($sourcing->grand_total))
                                        <table class="table table-bordered" style="width: 100%;height: auto;">
                                            <thead>
                                                <tr class="expand-switch1"
                                                    style="background: rgb(0, 0, 0); padding-top:8px;padding-bottom:8px;">
                                                    <th width="86%" colspan="4" class="text-white"
                                                        style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                        <i class="icon1 fa fa-plus mx-3"></i> Product Details
                                                    </th>
                                                    <th width="14%" class="text-center" style="border:none;">
                                                        @if ($rfq_details->status == 'rfq_created')
                                                        @elseif ($rfq_details->status == 'assigned')

                                                        @elseif ($rfq_details->status == 'deal_created')
                                                        @else
                                                            <a href="javascript:void(0);" class="text-white"
                                                                title="Show SAS" data-bs-toggle="modal"
                                                                data-bs-target="#show-sas">
                                                                <i class="icon-eye"></i>
                                                            </a>
                                                        @endif
                                                    </th>
                                                </tr>

                                            </thead>

                                            <tbody class="expand-div1 d-none">
                                                <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                                    <th width="40%">Product Description</th>
                                                    <th width="14%">Quantity</th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none">Discount </th>
                                                        <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                                    @else
                                                        <th width="10%" class="rg_unit">Unit Price </th>
                                                    @endif

                                                    <th width="15%">Unit Total</th>
                                                </tr>

                                                @foreach ($deal_products as $key => $item)
                                                    <tr>
                                                        <td>
                                                            <a class="text-black"
                                                                title="{{ $item->item_name }}">{{ Str::limit($item->item_name, 28) }}</a>
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $item->qty }}</td>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ $item->regular_discount }} % </th>
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @else
                                                            <th width="10%" class="rg_unit">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @endif

                                                        <td class="text-center">$
                                                            {{ $item->sales_price }}</td>
                                                    </tr>
                                                @endforeach


                                                <tr>
                                                    <th> </th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <td class="text-center"> Sub Total </td>
                                                    <td class="text-center"> $
                                                        {{ $sourcing->sub_total_sales }}</td>
                                                </tr>
                                                @if ($rfq_details->special == '1')
                                                    <tr class="special_discount">
                                                        <th> </th>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                        @else
                                                            <th width="10%" class="rg_unit"></th>
                                                        @endif
                                                        <td class="text-center">
                                                            Special discount </td>
                                                        <td class="text-center">
                                                            {{ $sourcing->special_discount }} %</td>
                                                        <td class="text-center"> $
                                                            {{ $sourcing->special_discounted_sales }}</td>
                                                    </tr>
                                                @endif



                                                <tr>
                                                    <th> </th>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <th class="text-center"> Total </th>
                                                    <td class="text-center">
                                                        $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                                </tr>
                                            </tbody>



                                        </table>


                                        @if ($rfq_details->tax_status == '1')
                                            <table class="table table-bordered mt-2 expand-div1 d-none">
                                                <th colspan="3" width="80%"> Tax / VAT</td>
                                                <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                                <td class="text-center" width="10%"> $ {{ $sourcing->tax_sales }}</td>
                                                </tr>

                                            </table>
                                        @endif
                                    @else
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="expand-switch"
                                                    style="background: rgb(0, 0, 0); padding-top:8px;padding-bottom:8px;">
                                                    <th width="76%" colspan="2" class="text-white"
                                                        style="border:none; font-size:18px !important; padding-top:8px !important;padding-bottom:8px !important;">
                                                        <i class="icon3 fa fa-plus mx-3"></i> Product Details
                                                    </th>
                                                    <th width="24%" class="text-center" style="border:none;">
                                                        @if ($rfq_details->status == 'rfq_created')
                                                        @elseif ($rfq_details->status == 'assigned')

                                                        @elseif ($rfq_details->status == 'deal_created')
                                                        @else
                                                            <a href="javascript:void(0);" class="text-white"
                                                                title="Show SAS" data-bs-toggle="modal"
                                                                data-bs-target="#show-sas">
                                                                <i class="icon-eye"></i>
                                                            </a>
                                                        @endif
                                                    </th>
                                                </tr>

                                            </thead>
                                            <tbody class="expand-div d-none">

                                                <tr class="text-center">
                                                    <td width="60%"> Product Name</td>
                                                    <td width="20%"> Quantity </td>
                                                    <td width="20%"> Sale Price </td>
                                                </tr>


                                                <tr>
                                                    <th><a href="javascript:void(0);"
                                                            title="{{ App\Models\Admin\Product::where('id', $rfq_details->product_id)->value('name') }}">{{ Str::limit(App\Models\Admin\Product::where('id', $rfq_details->product_id)->value('name'), 28) }}</a>
                                                    </th>
                                                    <th>{{ $rfq_details->qty }}</th>
                                                    <th></th>
                                                </tr>


                                            </tbody>
                                        </table>
                                    @endif

                                </div>
                            </div>


                        </div>
                    </article>
                    <div class="table-responsive" style="height:10rem;">
                        <div class="track">

                            @if ($rfq_details->rfq_type == 'rfq')
                                <div
                                    class="step
                                        {{ $rfq_details->status == 'rfq_created' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'assigned' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'deal_created' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'sas_created' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                        ">

                                    <span class="icon">
                                        @if ($rfq_details->status == 'rfq_created')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'assigned')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'deal_created')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'sas_created')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'sas_approved')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'quoted')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'workorder_uploaded')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                            <i class="fa fa-check"></i>
                                        @else
                                            <i class="fa fa-times"></i>
                                        @endif

                                    </span>
                                    <span class="text">RFQ Created</span>
                                </div>

                                <div
                                    class="step
                                        {{ $rfq_details->status == 'assigned' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'deal_created' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'sas_created' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                        {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                        ">
                                    <span class="icon">
                                        @if ($rfq_details->status == 'assigned')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'deal_created')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'sas_created')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'sas_approved')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'quoted')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'workorder_uploaded')
                                            <i class="fa fa-check"></i>
                                        @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                            <i class="fa fa-check"></i>
                                        @else
                                            <i class="fa fa-times"></i>
                                        @endif
                                    </span>
                                    <span class="text"> Salesman Assigned</span>
                                    <span class="text">
                                        @if ($rfq_details->status == 'rfq_created')
                                            <a href="javascript:void(0);" class="text-primary mx-3 mx-3"
                                                data-bs-toggle="modal" title="View & Assign Sales Manager"
                                                data-bs-target="#assign-manager-{{ $rfq_details->rfq_code }}">
                                                <i class="icon-user-check icon-1x"></i>
                                            </a>
                                        @endif
                                    </span>
                                </div>
                            @endif

                            <div
                                class="step
                                    {{ $rfq_details->status == 'deal_created' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'sas_created' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                        ">
                                <span class="icon">
                                    @if ($rfq_details->status == 'deal_created')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'sas_created')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'sas_approved')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'quoted')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'workorder_uploaded')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                        <i class="fa fa-check"></i>
                                    @else
                                        <i class="fa fa-times"></i>
                                    @endif
                                </span>
                                <span class="text"> Deal Created </span>
                                <span class="text">
                                    @if ($rfq_details->status == 'assigned')
                                        <a href="{{ route('deal.convert', [$rfq_details->id]) }}"
                                            class="text-success mx-3 mx-3" title="Convert To Deal">
                                            <i class="icon-pen-plus icon-1x"></i>
                                        </a>
                                    @endif
                                </span>
                            </div>

                            <div
                                class="step
                                    {{ $rfq_details->status == 'sas_created' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                    ">
                                <span class="icon">
                                    @if ($rfq_details->status == 'sas_created')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'sas_approved')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'quoted')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'workorder_uploaded')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                        <i class="fa fa-check"></i>
                                    @else
                                        <i class="fa fa-times"></i>
                                    @endif
                                </span>
                                <span class="text">SAS Created</span>
                                <span class="text">
                                    @if ($rfq_details->status == 'deal_created')
                                        <a href="{{ route('deal-sas.show', $rfq_details->rfq_code) }}"
                                            class="text-success mx-3 mx-3" title="Create SAS">
                                            <i class="icon-file-plus2 icon-1x"></i>
                                        </a>
                                    @endif
                                </span>

                            </div>

                            <div
                                class="step
                                    {{ $rfq_details->status == 'sas_approved' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                    ">
                                <span class="icon">
                                    @if ($rfq_details->status == 'sas_approved')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'quoted')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'workorder_uploaded')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                        <i class="fa fa-check"></i>
                                    @else
                                        <i class="fa fa-times"></i>
                                    @endif
                                </span>
                                <span class="text"> SAS Approved</span>
                                <span class="text">
                                    @if ($rfq_details->status == 'sas_created')
                                        <a href="{{ route('deal-sas.edit', $rfq_details->rfq_code) }}"
                                            class="text-info mx-2" title="Edit Sas">
                                            <i class="icon-pencil icon-1x"></i>
                                        </a>
                                        <a href="{{ route('dealsasapprove', $rfq_details->rfq_code) }}"
                                            class="text-warning mx-3 mx-3" title="Approve Sas">
                                            <i class="mi-check-circle mi-1x"></i>
                                        </a>
                                    @endif
                                </span>
                            </div>

                            <div
                                class="step
                                    {{ $rfq_details->status == 'quoted' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                    ">
                                <span class="icon">
                                    @if ($rfq_details->status == 'quoted')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'workorder_uploaded')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                        <i class="fa fa-check"></i>
                                    @else
                                        <i class="fa fa-times"></i>
                                    @endif
                                </span>
                                <span class="text"> Quotation Sent </span>
                                <span class="text">
                                    @if ($rfq_details->status == 'sas_approved')
                                        <a href="javascript:void(0);" class="text-primary mx-3 mx-3"
                                            data-bs-toggle="modal" title="Send Quotation"
                                            data-bs-target="#quotation-send-{{ $rfq_details->rfq_code }}">
                                            <i class="icon-paperplane icon-1x"></i>
                                        </a>
                                    @endif
                                </span>
                            </div>

                            <div
                                class="step
                                    {{ $rfq_details->status == 'workorder_uploaded' ? 'active' : '' }}
                                    {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                    ">
                                <span class="icon">
                                    @if ($rfq_details->status == 'workorder_uploaded')
                                        <i class="fa fa-check"></i>
                                    @elseif ($rfq_details->status == 'proof_of_payment_uploaded')
                                        <i class="fa fa-check"></i>
                                    @else
                                        <i class="fa fa-times"></i>
                                    @endif
                                </span>
                                <span class="text">Work Order Uploaded</span>
                                @if ($rfq_details->status == 'quoted')
                                    <span class="text">
                                        <a href="javascript:void(0);" class="text-primary mx-2" data-bs-toggle="modal"
                                            title="Upload Work order"
                                            data-bs-target="#Work-order-{{ $rfq_details->rfq_code }}">
                                            <i class="icon-file-plus2"></i>
                                        </a>

                                    </span>
                                @endif
                            </div>



                            <div
                                class="step
                                    {{ $rfq_details->status == 'invoice_sent' ? 'active' : '' }}
                                    ">
                                <span class="icon">
                                    @if ($rfq_details->status == 'invoice_sent')
                                        <i class="fa fa-check"></i>
                                    @else
                                        <i class="fa fa-times"></i>
                                    @endif
                                </span>
                                <span class="text">Invoice Sent</span>
                                <span class="text">
                                    @if ($rfq_details->status == 'workorder_uploaded')
                                        <a href="javascript:void(0);" class="text-primary mx-3 mx-3"
                                            data-bs-toggle="modal" title="Send Invoice"
                                            data-bs-target="#invoice-send-{{ $rfq_details->rfq_code }}">
                                            <i class="icon-paperplane icon-1x"></i>
                                        </a>
                                    @endif
                                </span>
                            </div>

                            <div
                                class="step {{ $rfq_details->status == 'proof_of_payment_uploaded' ? 'active' : '' }}
                                    ">
                                <span class="icon">
                                    @if ($rfq_details->status == 'proof_of_payment_uploaded')
                                        <i class="fa fa-check"></i>
                                    @else
                                        <i class="fa fa-times"></i>
                                    @endif
                                </span>
                                <span class="text">Proof of Payment Uploaded</span>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <ul class="row">
                        <li class="col-md-4 text-center">
                            <div class="row text-center">
                                <figcaption class="info align-self-center">
                                    <p class="title"><strong>Sales</strong></p>
                                    @if ($rfq_details->status == 'sale_completed')
                                        <span class="badge bg-success">Sale Completed</span>
                                    @else
                                        <span class="badge bg-warning">On Going</span>
                                    @endif
                                </figcaption>

                                <div class="table-respnsive">

                                </div>
                            </div>

                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">

                                <figcaption class="info align-self-center">
                                    <p class="title"><strong>Accounts</strong></p>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">

                                <figcaption class="info align-self-center">
                                    <p class="title"><strong>Purchase</strong></p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>


                </div>
            </article>

        </div>

    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>

    <!-------Modals----->

    <!---Deal Show modal--->
    <div id="show-deals-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    @php
                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                    @endphp
                    <h5 class="modal-title">Deal Details : {{ $rfq_details->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7">


                    <div class="row mb-3">
                        <div class="card">

                            <div class="row">
                                <table class="table table-bordered table-striped p-1">
                                    <thead>
                                        <tr>
                                            <th>
                                                Client Type : {{ ucfirst($rfq_details->client_type) }}
                                            </th>
                                            <th>
                                                Name : {{ ucfirst($rfq_details->name) }}
                                            </th>
                                            <th>
                                                Company Name : {{ ucfirst($rfq_details->company_name) }}
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>Asking Quantity : @if (App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') > 0)
                                                    {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                @else
                                                    {{ $rfq_details->qty }}
                                                @endif
                                            </th>
                                            <th>Phone Number : {{ $rfq_details->phone }}</th>
                                            <th>
                                                Total Price : $
                                                {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Assigned Sales Manager (L1) :
                                                {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                <br>
                                                @if ($rfq_details->sales_man_id_T1)
                                                    Assigned Sales Manager (T1) :
                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                    <br>
                                                @endif
                                                @if ($rfq_details->sales_man_id_T2)
                                                    Assigned Sales Manager (T2) :
                                                    {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                @endif

                                            </th>
                                            <th>
                                                Status : <span
                                                    class="badge bg-success p-1">{{ ucfirst($rfq_details->status) }}</span>


                                            </th>
                                            <th></th>
                                        </tr>

                                    </thead>
                                </table>
                            </div>
                            <div class="row">
                                <table class="table table-bordered table-striped p-1">
                                    <thead>
                                        @if (count($deal_products) > 0)
                                            <tr>
                                                <th> Product Name</th>
                                                <th> Quantity </th>
                                                <th> Sale Price </th>
                                            </tr>

                                            @foreach ($deal_products as $item)
                                                <tr class="bg-gray text-white">
                                                    <th>{{ $item->item_name }}</th>
                                                    <th>{{ $item->qty }}</th>
                                                    <th>{{ $item->sub_total_cost }}</th>
                                                </tr>
                                            @endforeach
                                        @else
                                        @endif




                                    </thead>
                                </table>
                            </div>

                        </div>
                    </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Deal Show modal--->

    <!---Assign Manager modal--->
    <div id="assign-manager-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    @php
                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                    @endphp
                    <h5 class="modal-title">Assign Sales Manager For RFQ No : {{ $rfq_details->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7">

                    <form method="post" action="{{ route('assign.salesman', $rfq_details->rfq_code) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="card">
                                <div class="row">
                                    <table class="table table-bordered table-striped p-1">
                                        <thead>
                                            <tr>
                                                <th style="padding:7px !important;">
                                                    Client Type :

                                                    @if (!empty($rfq_details->client_type))
                                                        {{ ucfirst($rfq_details->client_type) }}
                                                    @else
                                                        Online
                                                    @endif
                                                </th>
                                                <th style="padding:7px !important;">
                                                    Name : {{ ucfirst($rfq_details->name) }}
                                                </th>
                                                <th style="padding:7px !important;">
                                                    Company Name : {{ ucfirst($rfq_details->company_name) }}
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3">
                                                    <h6 class="text-center mb-0 pt-1 text-black">Product Name :
                                                        {{ App\Models\Admin\Product::where('id', $rfq_details->product_id)->value('name') }}
                                                    </h6>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Asking Quantity : {{ $rfq_details->qty }}</th>
                                                <th>Phone Number : {{ $rfq_details->phone }}</th>
                                                <th>
                                                    @if ($rfq_details->call == 1)
                                                        Need To be Called.
                                                    @else
                                                    @endif
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="row mt-2 p-2 text-center">
                                    <div class="col-12 text-white py-1" style="background:black;">
                                        Assign Sales Manager :
                                        <a class="p-1 editRfquser" href="javascript:void(0);">
                                            <i class="ph-note-pencil" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col-12 Rfquser" style="display:none">
                                        <div class="row mb-3 p-2 border">


                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0 text-black">Sales Manager (Leader - L1) <span
                                                            class="text-danger">*</span></h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_L1" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose  ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0 text-black">Sales Manager (Team - T1)</h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_T1" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose  ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="col-sm-12">
                                                    <h6 class="mb-0 text-black">Sales Manager (Team - T2)</h6>
                                                </div>
                                                <div class="form-group text-secondary col-sm-12">
                                                    <select name="sales_man_id_T2" class="form-control select"
                                                        data-minimum-results-for-search="Infinity"
                                                        data-placeholder="Choose ">
                                                        <option></option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Assign Manager modal--->

    <!---Send Quotation modal--->
        <div id="quotation-send-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        @php
                            $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                            $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                        @endphp
                        <h5 class="modal-title">Send Quotation : {{ $rfq_details->rfq_code }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body border br-7">

                        <form method="post" action="{{ route('quotation.send', $rfq_details->rfq_code) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="card">
                                    <div class="row">
                                        <table class="table table-bordered table-striped p-1">
                                            <thead>
                                                <tr>
                                                    <th> Product Name</th>
                                                    <th> Quantity </th>
                                                    <th> Sale Price </th>
                                                </tr>

                                                @if ($deal_products)
                                                    @foreach ($deal_products as $item)
                                                        <tr class="bg-gray text-white">
                                                            <th>{{ $item->item_name }}</th>
                                                            <th>{{ $item->qty }}</th>
                                                            <th>{{ $item->sub_total_cost }}</th>
                                                        </tr>
                                                    @endforeach
                                                @endif



                                            </thead>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <table class="table table-bordered table-striped p-1">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Client Type : {{ ucfirst($rfq_details->client_type) }}
                                                    </th>
                                                    <th>
                                                        Name : {{ ucfirst($rfq_details->name) }}
                                                    </th>
                                                    <th>
                                                        Company Name : {{ ucfirst($rfq_details->company_name) }}
                                                    </th>
                                                </tr>
                                                {{-- <tr>
                                                        <th colspan="3" style="background: #7e7d7c">
                                                            <p class="text-center pt-1 text-white">Product Name : {{App\Models\Admin\DealSas::where('id' , $rfq_details->product_id)->value('name')}}</p>
                                                        </th>
                                                    </tr> --}}
                                                <tr>
                                                    <th>Asking Quantity :
                                                        {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->sum('qty') }}
                                                    </th>
                                                    <th>Phone Number : {{ $rfq_details->phone }}</th>
                                                    <th>
                                                        Total Price : $
                                                        {{ App\Models\Admin\DealSas::where('rfq_id', $rfq_details->id)->value('grand_total') }}
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Assigned Sales Manager (L1) :
                                                        {{ App\Models\User::where('id', $rfq_details->sales_man_id_L1)->value('name') }}
                                                        <br>
                                                        @if ($rfq_details->sales_man_id_T1)
                                                            Assigned Sales Manager (T1) :
                                                            {{ App\Models\User::where('id', $rfq_details->sales_man_id_T1)->value('name') }}
                                                            <br>
                                                        @endif
                                                        @if ($rfq_details->sales_man_id_T2)
                                                            Assigned Sales Manager (T2) :
                                                            {{ App\Models\User::where('id', $rfq_details->sales_man_id_T2)->value('name') }}
                                                        @endif

                                                    </th>
                                                    <th>
                                                        Status : <span
                                                            class="badge bg-success p-2">{{ ucfirst($rfq_details->status) }}</span>


                                                    </th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="3" style="background: #7e7d7c">
                                                        <p class="text-center pt-1 text-white">Send Quotation To : <input
                                                                type="email" name="email" id=""
                                                                value="{{ $rfq_details->email }}"></p>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>

                                </div>
                            </div>




                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <button type="submit" class="btn btn-primary">Send Quotation <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    <!---Send Quotation modal--->


    <!---Send Invoice modal--->
    <div id="invoice-send-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    @php
                        $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                        $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                    @endphp
                    <h5 class="modal-title">Send Invoice For {{ $rfq_details->rfq_code }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7">
                    <form method="post" action="{{ route('invoice.send', $rfq_details->rfq_code) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="card">
                                <div class="table-responsive">

                                    @if (!empty($sourcing->grand_total))
                                        <table class="table table-bordered" style="width: 100%;height: auto;">


                                            <tbody>
                                                <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                                    <th width="40%">Product Description</th>
                                                    <th width="14%">Quantity</th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none">Discount </th>
                                                        <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                                    @else
                                                        <th width="10%" class="rg_unit">Unit Price </th>
                                                    @endif

                                                    <th width="15%">Unit Total</th>
                                                </tr>

                                                @foreach ($deal_products as $key => $item)
                                                    <tr>
                                                        <td>
                                                            <a class="text-black"
                                                                title="{{ $item->item_name }}">{{ Str::limit($item->item_name, 28) }}</a>
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $item->qty }}</td>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ $item->regular_discount }} % </th>
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @else
                                                            <th width="10%" class="rg_unit">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @endif

                                                        <td class="text-center">$
                                                            {{ $item->sales_price }}</td>
                                                    </tr>
                                                @endforeach


                                                <tr>
                                                    <th> </th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <td class="text-center"> Sub Total </td>
                                                    <td class="text-center"> $
                                                        {{ $sourcing->sub_total_sales }}</td>
                                                </tr>
                                                @if ($rfq_details->special == '1')
                                                    <tr class="special_discount">
                                                        <th> </th>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                        @else
                                                            <th width="10%" class="rg_unit"></th>
                                                        @endif
                                                        <td class="text-center">
                                                            Special discount </td>
                                                        <td class="text-center">
                                                            {{ $sourcing->special_discount }} %</td>
                                                        <td class="text-center"> $
                                                            {{ $sourcing->special_discounted_sales }}</td>
                                                    </tr>
                                                @endif



                                                <tr>
                                                    <th> </th>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <th class="text-center"> Total </th>
                                                    <td class="text-center">
                                                        $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                                </tr>
                                            </tbody>



                                        </table>

                                        @if ($rfq_details->tax_status == '1')
                                            <table class="table table-bordered mt-2 expand-div1 d-none">
                                                <th colspan="3" width="80%"> Tax / VAT</td>
                                                <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                                <td class="text-center" width="10%"> $ {{ $sourcing->tax_sales }}
                                                </td>
                                                </tr>

                                            </table>
                                        @endif

                                    @endif
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header m-0 p-0" style="background: black;">
                                    <h6 class="mb-0 text-center p-0 text-white">Send Invoice</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-sm-12">
                                                <h6 class="m-0 text-center">Work Order No </h6>
                                            </div>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="work_order_no" value="{{$rfq_details->work_order_no}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-sm-12">
                                                <h6 class="m-0 text-center">Email Id to Send Invoice</h6>
                                            </div>
                                            <div class="col-sm-12 m-auto" style="width:60%;">
                                                <input type="text" class="form-control" name="email" value="{{$rfq_details->email}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary text-center">
                                <button type="submit" class="btn btn-primary">Send Invoice <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Send Invoice modal--->

    <!---Show SAS modal--->
        @if ($sourcing != null)
            <div id="show-sas" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title">SAS Details : {{ $rfq_details->rfq_code }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body border br-7">
                            <div class="content">

                                <div class="center d-none">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="regular" value="1"
                                            id="flexRadioDefault1" {{ $rfq_details->regular == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Regular Discount
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="special" value="1"
                                            id="flexRadioDefault1" {{ $rfq_details->special == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Special Discount
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="tax_status" value="1"
                                            id="flexRadioDefault1" {{ $rfq_details->tax_status == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Tax / VAT
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="m-auto" style="width:80%;">
                                                <div class="bg-dark mb-2">
                                                    <table class="text-center table table-hover br-7">
                                                        <thead>
                                                            <tr class="br-7">
                                                                <th class="text-white">RFQ Code :
                                                                    {{ $rfq_details->rfq_code }}
                                                                    <input type="hidden" name="rfq_code"
                                                                        value="{{ $rfq_details->rfq_code }}">
                                                                    <input type="hidden" name="rfq_id"
                                                                        value="{{ $rfq_details->id }}">
                                                                </th>
                                                                <th class="text-white">SAS Create Date :
                                                                    {{ $rfq_details->create_date }}

                                                                </th>
                                                                <th class="text-white text-center">
                                                                    This Deal is for our @if ($rfq_details->client_type == 'partner')
                                                                        Partner
                                                                    @else
                                                                        Client
                                                                    @endif
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="table-responsive">


                                                <div class="mb-2">
                                                    <table class="text-center table table-bordered table-hover mb-3">
                                                        <thead>
                                                            <tr class="bg-gray">
                                                                <th width="40%">Item Name</th>
                                                                <th width="10%">Quantity</th>
                                                                <th width="10%">Unit Price</th>
                                                                <th width="10%">Cost (Cog Price)</th>
                                                                <th width="10%" class="rg_discount d-none">Regular Discount
                                                                </th>
                                                                <th width="10%" class="rg_discount d-none">Discounted Sales
                                                                    Price</th>
                                                                <th width="10%">Unit Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($deal_products as $item)
                                                                <tr class="thd">
                                                                    <td class="border-none">
                                                                        {{ $item->item_name }}
                                                                    </td>

                                                                    <td class="border-none">
                                                                        {{ $item->qty }}
                                                                    </td>
                                                                    <td class="border-none">
                                                                        {{ $item->unit_price }}
                                                                    </td>
                                                                    <td class="border-none">
                                                                        {{ $item->cog_price }}
                                                                    </td>
                                                                    <td class="rg_discount d-none border-none">
                                                                        {{ $item->regular_discount }}
                                                                    </td>

                                                                    <td class="rg_discount d-none border-none">
                                                                        {{ $item->discounted_sales }}
                                                                    </td>
                                                                    <td class="border-none">
                                                                        {{ $item->sales_price }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>


                                                                <td class="border-none" width="45%" colspan="3">Sub
                                                                    Total</td>

                                                                <td class="border-none">
                                                                    {{ $sourcing->sub_total_cost }}
                                                                </td>
                                                                <td class="rg_discount d-none border-none"></td>
                                                                <td class="rg_discount d-none border-none">
                                                                    {{ $sourcing->sub_total_discounted_sales }}</td>

                                                                <td class="border-none">{{ $sourcing->sub_total_sales }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="text-center table table-bordered table-hover">
                                                        <thead>
                                                            <tr class="special_discount d-none">
                                                                <th class="border-none" colspan="5" width="67%">Special
                                                                    Discount</th>
                                                                <th class="border-none">{{ $sourcing->special_discount }} %
                                                                </th>
                                                                <th class="border-none">
                                                                    {{ $sourcing->special_discounted_sales }}</th>
                                                            </tr>
                                                            <tr class="tax d-none">

                                                                <th class="border-none" colspan="5" width="67%">Tax/VAT
                                                                </th>
                                                                <th class="border-none">{{ $sourcing->tax }} %</th>
                                                                <th class="border-none">{{ $sourcing->tax_sales }}</th>
                                                            </tr>
                                                            <tr>

                                                                <th class="border-none" colspan="5" width="67%">Grand
                                                                    Total (With Everything)</th>
                                                                <th class="border-none" width="18%"></th>

                                                                <th class="border-none" width="15%">
                                                                    {{ $sourcing->grand_total }}</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>

                                                <div class="m-auto" style="width:60%;">
                                                    <table class="text-center table table-bordered table-hover">
                                                        <tbody class="tb accordion padding text-center"
                                                            id="accordion_expanded">
                                                            <tr class="bg-dark accordion_expense">
                                                                <td class="text-white" colspan="3">
                                                                    <i class="ph-arrow-down"></i>&nbsp;&nbsp; Expenses
                                                                </td>
                                                            </tr>

                                                            <tr class="body_expense" style="display: none;">
                                                                <td class="border-none">Bank & Remittance Charge - (1.5%)</td>
                                                                <td class="border-none">{{ $sourcing->bank_charge }}%
                                                                </td>

                                                            </tr>

                                                            <tr class="body_expense" style="display: none;">
                                                                <td class="border-none">Customs & Duty - (5.0%)</td>
                                                                <td class="border-none">{{ $sourcing->customs }} %
                                                                </td>

                                                            </tr>

                                                            <tr class="body_expense" style="display: none;">
                                                                <td class="border-none">HR , Office & Utility Cost- (5.0%)</td>
                                                                <td class="border-none">{{ $sourcing->utility_cost }} %
                                                                </td>

                                                            </tr>

                                                            <tr class="body_expense" style="display: none;">
                                                                <td class="border-none">Shipping & Handling Cost- (5.0%)</td>
                                                                <td class="border-none">{{ $sourcing->shiping_cost }} %
                                                            </tr>

                                                            <tr class="body_expense" style="display: none;">
                                                                <td class="border-none">Sales / Consultancy Comission - (5.0%)
                                                                </td>
                                                                <td class="border-none">{{ $sourcing->sales_comission }} %
                                                                </td>
                                                            </tr>

                                                            <tr class="body_expense" style="display: none;">
                                                                <td class="border-none">Bank Loan / Liability / Debt - (5.0%)
                                                                </td>
                                                                <td class="border-none">{{ $sourcing->liability }} %
                                                                </td>
                                                            </tr>

                                                            <tr class="bg-dark accordion_offer">
                                                                <td class="border-none text-white" colspan="3">
                                                                    <i class="ph-arrow-down"></i>&nbsp;&nbsp;
                                                                    Offering Value Adding
                                                                </td>
                                                            </tr>

                                                            <tr class="body_offer" style="display: none;">
                                                                <td class="border-none">Deal Closing / Rebates</td>
                                                                <td class="border-none">{{ $sourcing->rebates }} %
                                                                </td>
                                                            </tr>

                                                            <tr class="bg-dark accordion_other">
                                                                <td class="border-none text-white" colspan="3">
                                                                    <i class="ph-arrow-down"></i>&nbsp;&nbsp;
                                                                    Other Income
                                                                </td>
                                                            </tr>

                                                            <tr class="body_other" style="display: none;">
                                                                <td class="border-none">Loan / Capital / Partner Share - (5%)
                                                                </td>
                                                                <td class="border-none">{{ $sourcing->capital_share }} %</td>
                                                            </tr>

                                                            <tr class="body_other" style="display: none;">
                                                                <td class="border-none">Management Cost - (5%)</td>
                                                                <td class="border-none">{{ $sourcing->management_cost }} %
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="border-none">Gross Profit (%) between Sales and Cost
                                                                </td>
                                                                <td class="border-none">
                                                                    {{ $sourcing->gross_profit_subtotal }} %</td>
                                                                <td class="border-none">$
                                                                    {{ $sourcing->gross_profit_amount }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="border-none">Net Profit - (5%)</td>
                                                                <td class="border-none">
                                                                    {{ $sourcing->net_profit_percentage }} %
                                                                </td>
                                                                <td class="border-none">$ {{ $sourcing->net_profit_amount }}
                                                                </td>
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
                </div>
            </div>
        @endif
    <!---Show SAS modal--->

    <!---Work Order Upload modal--->
    @if ($sourcing)
        <div id="Work-order-{{ $rfq_details->rfq_code }}" class="modal fade" tabindex="-1" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        @php
                            $rfq = App\Models\Admin\Rfq::where('rfq_code', $rfq_details->rfq_code)->first();
                            $deal_products = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->get();
                            $sourcing = App\Models\Admin\DealSas::where('rfq_code', $rfq_details->rfq_code)->first();
                        @endphp
                        <h5 class="modal-title">Upload Your Work Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body border br-7">

                        <form method="post" action="{{ route('work-order.upload', $rfq_details->rfq_code) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <table class="table table-bordered"
                                                style="width: 100%;
                                                    height: auto;">
                                                <tr class="text-center" style="background-color: rgba(0,0,0,.03);">
                                                    <th>SL #
                                                    </th>
                                                    <th>Product
                                                        Description</th>
                                                    <th>Quantity
                                                    </th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none">Discount </th>
                                                        <th width="10%" class="rg_discount d-none">Disc. Unit </th>
                                                    @else
                                                        <th width="10%" class="rg_unit">Unit Price </th>
                                                    @endif

                                                    <th width="15%">Total
                                                    </th>
                                                </tr>

                                                @foreach ($deal_products as $key => $item)
                                                    <tr>
                                                        <td> {{ ++$key }}
                                                        </td>

                                                        <td>
                                                            {{ $item->item_name }}</td>
                                                        <td class="text-center">
                                                            {{ $item->qty }}</td>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ $item->regular_discount }} % </th>
                                                            <th width="10%" class="rg_discount d-none">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @else
                                                            <th width="10%" class="rg_unit">
                                                                {{ number_format($item->sales_price / $item->qty, 2) }}
                                                            </th>
                                                        @endif

                                                        <td class="text-center">$
                                                            {{ $item->sales_price }}</td>
                                                    </tr>
                                                @endforeach


                                                <tr>
                                                    <th> </th>

                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <td colspan="2" class="text-center"> Sub Total </td>
                                                    <td class="text-center"> $
                                                        {{ $sourcing->sub_total_sales }}</td>
                                                </tr>
                                                @if ($rfq_details->special == '1')
                                                    <tr class="special_discount">
                                                        <th> </th>
                                                        @if ($rfq_details->regular == '1')
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                            <th width="10%" class="rg_discount d-none"></th>
                                                        @else
                                                            <th width="10%" class="rg_unit"></th>
                                                        @endif
                                                        <td class="text-center">
                                                            Special discount </td>
                                                        <td class="text-center">
                                                            {{ $sourcing->special_discount }} %</td>
                                                        <td class="text-center"> $
                                                            {{ $sourcing->special_discounted_sales }}</td>
                                                    </tr>
                                                @endif



                                                <tr>
                                                    <th> </th>
                                                    @if ($rfq_details->regular == '1')
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                        <th width="10%" class="rg_discount d-none"></th>
                                                    @else
                                                        <th width="10%" class="rg_unit"></th>
                                                    @endif
                                                    <th colspan="2" class="text-center"> Total </th>
                                                    <td class="text-center">
                                                        $ {{ $sourcing->grand_total - $sourcing->tax_sales }}</td>
                                                </tr>

                                                <!-- <tr>
                                                        <th colspan="2" width="40%"> In Words: </th> <th colspan="5" width="60%"> <small> <b> Thirty One Lac sixty Four Thousand and Four Hundred Twenty One Taka Only (w/o Tax / VAT) </b> </small> </th>
                                                        </tr> -->


                                            </table>


                                            @if ($rfq_details->tax_status == '1')
                                                <table class="table table-bordered mt-2">
                                                    <th colspan="3" width="80%"> Tax / VAT</td>
                                                    <td class="text-center" width="10%"> {{ $sourcing->tax }}%</td>
                                                    <td class="text-center" width="10%"> $ {{ $sourcing->tax_sales }}
                                                    </td>
                                                    </tr>

                                                </table>
                                            @endif
                                        </div>

                                    </div>

                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <table class="table table-bordered"
                                                style="background: offset; width:60%; margin:auto;">

                                                <thead>
                                                    <tr class="border-none">
                                                        <th class="border-none" colspan="3"
                                                            style="background: offset; width:60%; margin:auto;">
                                                            <label for="clientPO" style="font-size:16px;">Work Order
                                                                (Pdf)</label>
                                                            <input class="form-control" type="file" name="client_po"
                                                                id="clientPO">
                                                            <span class="text-info">
                                                                * Accepts PDF only</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <button type="submit" class="btn btn-primary">Upload <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    @endif
    <!---Work Order Upload modal--->









@endsection



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
                $(".expand-switch").on('click', function() {
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
                $(".expand-switch2").on('click', function() {
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

                $(".expand-switch1").on('click', function() {
                    //$("#additionalExpand").toggle();
                    if ($(".expand-div1").hasClass('d-none')) {
                        $(".expand-div1").removeClass('d-none');
                        $(".icon1").removeClass('fa-plus');
                        $(".icon1").addClass('fa-minus');
                    } else {
                        $(".expand-div1").addClass('d-none');
                        $(".icon1").removeClass('fa-minus');
                        $(".icon1").addClass('fa-plus');
                    }


                });


            });
        </script>
    @endpush
@endonce
