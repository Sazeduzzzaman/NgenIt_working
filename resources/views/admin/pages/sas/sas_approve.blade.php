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
                        <span class="breadcrumb-item active">SAS</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">

                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>

                </div>
            </div>
        </div>
        <div class="card">
            <div class="row py-2">
                <div class="col-lg-7"></div>
                <div class="col-lg-3">
                    <a href="{{route('product.approve')}}" type="button" class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-plus2"></i>
                        </span>
                        Back To Product Approval
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="{{route('sas.index')}}" type="button" class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                            <i class="icon-plus2"></i>
                        </span>
                        Back To SAS List
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">


            {{-- <form method="post" action="{{ route('sas.update',[$sourcing->ref_code]) }}">
                @csrf
                @method('PUT') --}}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="text-center sasDT datatable table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="60%" colspan="2">SAS Ref: </th>
                                                <th width="40%">SAS Create Date</th>
                                            </tr>
                                            <tr>
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <td colspan="2">{{ $product->ref_code }} <input type="hidden"
                                                        name="ref_code" value="{{ $product->ref_code }}"></td>

                                                <input type="hidden" name="create" value="{{ \Carbon\Carbon::now() }}">
                                                <td>{{ \Carbon\Carbon::now() }}</td>
                                            </tr>
                                            <tr>
                                                <th width="60%">Item Name</th>
                                                <input type="hidden" name="item_name" value="{{ $product->name }}">

                                                <th width="20%">Cost (Cog Price)</th>
                                                <th width="20%">Sales</th>
                                            </tr>
                                            <tr>
                                                <td width="60%">{{ $product->name }}</td>
                                                @if ($product->source_one_approval == 1)
                                                    <input type="hidden" id="source_price"
                                                        value="{{ $product->source_one_approval }}">
                                                    <td width="20%"><input type="text" name="cog_price" readonly
                                                            value="{{ $product->source_one_price }}" id="price1">
                                                    </td>
                                                @else
                                                    <td width="20%"><input type="text" name="cog_price" readonly
                                                            value="{{ $product->source_two_price }}" id="price2">
                                                    </td>
                                                @endif

                                                <td width="20%"><input class="sales_price" type="text"
                                                        name="sales_price" readonly value="{{ $sourcing->sales_price }}">
                                                </td>
                                            </tr>
                                        </thead>

                                        <tbody class="tb">


                                            <tr class="bg-dark text-white">
                                                <td class="text-white" colspan="3">Expenses</td>
                                            </tr>
                                            <tr>
                                                <td >Bank & Remittance Charge - (1.5%)</td>
                                                <td >
                                                    <input class="multiplyValue" type="text" name="bank_charge" value="{{ $sourcing->bank_charge }}">
                                                </td>
                                                <td width="20%">
                                                    <input type="text" class="result" readonly value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Customs & Duty - (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="customs" value="{{ $sourcing->customs }}">
                                                </td>
                                                <td width="20%"><input type="text" class="result" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Tax / AIT / VAT - (10.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="tax" value="{{ $sourcing->tax }}">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">HR , Office & Utility Cost- (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="utility_cost" value="{{ $sourcing->utility_cost }}">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Shipping & Handling Cost- (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="shiping_cost" value="{{ $sourcing->shiping_cost }}">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="60%">Sales / Consultancy Comission - (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue"
                                                        value="{{ $sourcing->sales_comission }}" type="text"
                                                        name="sales_comission">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Bank Loan / Liability / Debt - (5.0%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="liability" value="{{ $sourcing->liability }}">
                                                </td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value="">
                                                </td>
                                            </tr>
                                            <tr class="bg-dark">
                                                <td class="text-white" colspan="3">Offering Value Adding</td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Promo / Deal / Regular Discounts</td>
                                                <td width="20%"><input class="multiplyValue"
                                                        value="{{ $sourcing->regular_discounts }}" type="text"
                                                        name="regular_discounts"></td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td width="60%">Deal Closing / Rebates</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="rebates" value="{{ $sourcing->rebates }}"></td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="bg-dark text-white">Other Income</td>

                                            </tr>
                                            <tr>
                                                <td width="60%">Loan / Capital / Partner Share - (5%)</td>
                                                <td width="20%"><input class="multiplyValue" type="text"
                                                        name="capital_share" value="{{ $sourcing->capital_share }}"></td>
                                                <td width="20%"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Management Cost - (5%)</td>
                                                <td style="width:20%;"><input class="multiplyValue" type="text"
                                                        name="management_cost" value="{{ $sourcing->management_cost }}">
                                                </td>
                                                <td style="width:20%;"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Net Profit - (5%)</td>
                                                <td style="width:20%;"><input class="multiplyValue" type="text"
                                                        name="net_profit" value="{{ $sourcing->net_profit }}"></td>
                                                <td style="width:20%;"><input class="result" type="text" readonly
                                                        value=""></td>
                                            </tr>
                                            <tr>
                                                <td style="width:60%;">Gross Profit (%) between Sales and Cost</td>
                                                <td style="width:20%;">TK. <input class="gross_profit_subtot"
                                                        type="text" name="gross_profit" readonly
                                                        value="{{ $sourcing->gross_profit }}"></td>
                                                <td style="width: 20%;">TK. <input type="text"
                                                        class="additional_subtot" readonly
                                                        value="{{ $sourcing->net_profit }}">
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-center">Sourcing Status</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center datatable table table-bordered table-hover">
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
                                                        id="competetor_price1"
                                                        value="{{ $product->competetor_one_price }}"></td>
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
                                                        id="competetor_price2"
                                                        value="{{ $product->competetor_two_price }}"></td>
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center datatable table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>
                                                    @if (App\Models\Admin\Product::where('id',$sourcing->product_id)->value('action_status') == 'approved')
                                                        <span class="badge badge-success p-2 rounded-pill">Approved</span>
                                                    @else
                                                        <span class="badge badge-danger p-2 rounded-pill">Not Approved</span>
                                                    @endif
                                                </th>

                                            </tr>

                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-primary mx-3">Send For Approval
                            <i class="ph-paper-plane-tilt mx-2"></i></button>
                    </div>

                </div>
            </form> --}}
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

@once
    @push('scripts')
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
                var difference1 =  parseFloat($sales_price) - parseFloat($('#competetor_price1').val()) ;
                var difference2 =  parseFloat($sales_price) - parseFloat($('#competetor_price2').val()) ;

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
