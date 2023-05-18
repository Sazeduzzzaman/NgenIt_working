@extends('admin.master')
@section('content')
<style>
    .datatable-footer {
    border-top: none !important;
    padding-top: 0px;
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    background: #ffffff !important;
}
</style>
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="{{ route('sas.index') }}" class="breadcrumb-item">SAS</a>
                        <a href="" class="breadcrumb-item">Edit</a>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container mt-3 mb-3">
            <!-- /Form  header -->
            <div class="text-center">
                <div class="text-start">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">

                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('sas.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <p class="text-white p-0 m-0 fw-bold"> Edit SAS </p>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                            <a href="{{ route('product.approve') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                    <span>Approval</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container bg-white">
                <form method="post" action="{{ route('sas.update', [$sourcing->ref_code]) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="table-responsive">
                                <div class="d-flex align-items-center py-2">
                                    {{-- Add Details Start --}}
                                    <div class="text-success nav-link cat-tab3"
                                        style="position: relative;
                                        z-index: 999;
                                        margin-bottom: -40px;">
                                        {{-- <a href="{{ route('knowledge.create') }}">
                                            <div class="d-flex align-items-center">
                                                <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Add Solution Details">
                                                    <i class="ph-plus icons_design"></i> </span>
                                                <span class="ms-1" style="color: #247297;">Add</span>
                                            </div>
                                        </a> --}}
                                        <div class="text-center" style="margin-left: 160px">
                                            <h5 class="ms-1" style="color: #247297;">All SAS</h5>
                                        </div>
                                    </div>
                                    {{-- Add Details End --}}
                                </div>
                                <table class="table sourcing_sasDT table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="8%">Id</th>
                                            <th width="10%">SAS Ref</th>
                                            <th width="12%">SAS Date</th>
                                            <th width="40%">Item Name</th>
                                            <th width="10%">Cost</th>
                                            <th width="10%">Sales</th>
                                            <th width="10%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $product->ref_code }}</td>
                                            <td>{{ \Carbon\Carbon::now() }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>
                                                @if ($product->source_one_approval == 1)
                                                    {{ $product->source_one_approval }}
    
                                                    {{ $product->source_one_price }}
                                                @else
                                                    {{ $product->source_two_price }}
                                                @endif
                                            </td>
                                            <td>{{ $sourcing->sales_price }}</td>
                                            <td>
                                                <a href="" class="text-primary">
                                                    <i
                                                        class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                                </a>
                                                <a href="" class="text-danger delete">
                                                    <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="table-responsive">
                                <div class="d-flex align-items-center py-2">
                                    {{-- Add Details Start --}}
                                    <div class="text-success nav-link cat-tab3"
                                        style="position: relative;
                                        z-index: 999;
                                        margin-bottom: -40px;">
                                        {{-- <a href="{{ route('knowledge.create') }}">
                                            <div class="d-flex align-items-center">
                                                <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Add Solution Details">
                                                    <i class="ph-plus icons_design"></i> </span>
                                                <span class="ms-1" style="color: #247297;">Add</span>
                                            </div>
                                        </a> --}}
                                        <div class="text-center" style="margin-left: 45px; margin-bottom: 25px;">
                                            <h5 class="ms-1" style="color: #247297;">Compare with Competetors</h5>
                                        </div>
                                    </div>
                                    {{-- Add Details End --}}
                                </div>
                                <table class="table sourcing_sasDT table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>Competetor Name</th>
                                            <th>Price</th>
                                            <th>Our Price</th>
                                            <th>Difference</th>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>{{ $product->competetor_one_name }}</td>
                                            <td>{{ $product->competetor_one_price }} <input type="hidden"
                                                    id="competetor_price1" value="{{ $product->competetor_one_price }}"></td>
                                            <td>
                                                <h6 id="ourprice1"></h6>
                                            </td>
                                            <td>
                                                <h6 id="difference1"></h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ $product->competetor_two_name }}</td>
                                            <td>{{ $product->competetor_two_price }}<input type="hidden"
                                                    id="competetor_price2" value="{{ $product->competetor_two_price }}"></td>
                                            <td>
                                                <h6 id="ourprice2"></h6>
                                            </td>
                                            <td>
                                                <h6 id="difference2"></h6>
                                            </td>
                                        </tr>
    
                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <div class="d-flex align-items-center py-2">
                                    {{-- Add Details Start --}}
                                    <div class="text-success nav-link cat-tab3"
                                        style="position: relative;
                                        z-index: 999;
                                        margin-bottom: -40px;">
                                        {{-- <a href="{{ route('knowledge.create') }}">
                                            <div class="d-flex align-items-center">
                                                <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Add Solution Details">
                                                    <i class="ph-plus icons_design"></i> </span>
                                                <span class="ms-1" style="color: #247297;">Add</span>
                                            </div>
                                        </a> --}}
                                        <div class="text-center"
                                            style=" margin-left: 505px;
                                        margin-bottom: 20px;">
                                            <h5 class="ms-1" style="color: #247297;">All Expenses</h5>
                                        </div>
                                    </div>
                                    {{-- Add Details End --}}
                                </div>
                                <table class="table sourcing_sasDT table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Expenses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bank & Remittance Charge - (1.5%)</td>
                                            <td>
                                                <input class="multiplyValue" type="text" name="bank_charge"
                                                    value="{{ $sourcing->bank_charge }}">
                                            </td>
                                            <td>
                                                <input type="text" class="result" readonly value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Customs & Duty - (5.0%)</td>
                                            <td ><input class="multiplyValue" type="text" name="customs"
                                                    value="{{ $sourcing->customs }}">
                                            </td>
                                            <td><input type="text" class="result" readonly value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tax / AIT / VAT - (10.0%)</td>
                                            <td><input class="multiplyValue" type="text"
                                                    name="tax" value="{{ $sourcing->tax }}">
                                            </td>
                                            <td><input class="result" type="text" readonly
                                                    value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HR , Office & Utility Cost- (5.0%)</td>
                                            <td><input class="multiplyValue" type="text"
                                                    name="utility_cost" value="{{ $sourcing->utility_cost }}">
                                            </td>
                                            <td><input class="result" type="text" readonly
                                                    value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shipping & Handling Cost- (5.0%)</td>
                                            <td><input class="multiplyValue" type="text"
                                                    name="shiping_cost" value="{{ $sourcing->shiping_cost }}">
                                            </td>
                                            <td><input class="result" type="text" readonly
                                                    value="">
                                            </td>
                                        </tr>
    
                                        <tr>
                                            <td>Sales / Consultancy Comission - (5.0%)</td>
                                            <td><input class="multiplyValue"
                                                    value="{{ $sourcing->sales_comission }}" type="text"
                                                    name="sales_comission">
                                            </td>
                                            <td><input class="result" type="text" readonly
                                                    value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bank Loan / Liability / Debt - (5.0%)</td>
                                            <td><input class="multiplyValue" type="text"
                                                    name="liability" value="{{ $sourcing->liability }}">
                                            </td>
                                            <td><input class="result" type="text" readonly
                                                    value="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
    
                                <table class="table sourcing_sasDT table-bordered table-hover text-center mt-2">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Offering Value Adding</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Promo / Deal / Regular Discounts</td>
                                            <td><input class="multiplyValue"
                                                    value="{{ $sourcing->regular_discounts }}" type="text"
                                                    name="regular_discounts"></td>
                                            <td><input class="result" type="text" readonly
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Deal Closing / Rebates</td>
                                            <td><input class="multiplyValue" type="text"
                                                    name="rebates" value="{{ $sourcing->rebates }}"></td>
                                            <td><input class="result" type="text" readonly
                                                    value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
    
                                <table class="table sourcing_sasDT table-bordered table-hover text-center mt-2">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Other Income</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Loan / Capital / Partner Share - (5%)</td>
                                            <td><input class="multiplyValue" type="text"
                                                    name="capital_share" value="{{ $sourcing->capital_share }}"></td>
                                            <td><input class="result" type="text" readonly
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Management Cost - (5%)</td>
                                            <td><input class="multiplyValue" type="text"
                                                    name="management_cost" value="{{ $sourcing->management_cost }}">
                                            </td>
                                            <td><input class="result" type="text" readonly
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Net Profit - (5%)</td>
                                            <td><input class="multiplyValue" type="text"
                                                    name="net_profit" value="{{ $sourcing->net_profit }}"></td>
                                            <td><input class="result" type="text" readonly
                                                    value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Gross Profit (%) between Sales and Cost</td>
                                            <td><input class="gross_profit_subtot"
                                                    type="text" name="gross_profit" readonly
                                                    value="{{ $sourcing->gross_profit }}"></td>
                                            <td><input type="text"
                                                    class="additional_subtot" readonly
                                                    value="{{ $sourcing->net_profit }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    
                    <div class="modal-footer border-0 pt-2 pb-2 pe-0">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 5px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.sourcing_sasDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
            $('.sourcing_sasDT2').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [3],
                }, ],
            });
        </script>
        <script type="text/javascript">
            $('.multiplyValue').on('mouseover keyup change', function() {

                if ($('#source_price').val() == 1) {
                    var $price = $('#price1').val();
                } else {
                    var $price = $('#price2').val();
                }
                var profit = 0;
                var additional = 0;
                var $sales_price = 0;
                // for each row:
                $("tbody.tb tr").each(function() {
                    // get the values from this row:
                    var $value = $('.multiplyValue', this).val();

                    var $result = parseFloat((($price * $value) / 100).toFixed(3));
                    // set total for the row
                    $('.result', this).val($result);


                    var $mlval = parseFloat($('.multiplyValue', this).val());
                    profit += isNaN($mlval) ? 0 : $mlval;
                    var $stval = parseFloat($result);
                    additional += isNaN($stval) ? 0 : $stval;

                    //mult += $total;


                });
                var $additional = additional;
                var $sales_price = parseFloat($price) + parseFloat($additional);
                var difference1 = parseFloat($sales_price) - parseFloat($('#competetor_price1').val());
                var difference2 = parseFloat($sales_price) - parseFloat($('#competetor_price2').val());

                var profit = parseFloat((profit).toFixed(2));
                var additional = parseFloat((additional).toFixed(2));
                var $sales_price = parseFloat(($sales_price).toFixed(2));
                var difference1 = parseFloat((difference1).toFixed(2));
                var difference2 = parseFloat((difference2).toFixed(2));

                //alert($sales_price);
                $('.gross_profit_subtot').val(profit);
                $('.additional_subtot').val(additional);
                $('.sales_price').val($sales_price);
                $('#ourprice1').html($sales_price);
                $('#ourprice2').html($sales_price);
                $('#difference1').html(difference1);
                $('#difference2').html(difference2);

            });

            //*
        </script>
    @endpush
@endonce
