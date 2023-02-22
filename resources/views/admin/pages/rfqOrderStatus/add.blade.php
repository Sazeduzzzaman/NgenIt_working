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
                        <span class="breadcrumb-item active">Current Sales Order Status</span>
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">Status of Current Sale</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('rfqOrderStatus.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Sales Status
                            </a>
                        </div>
                    </div>

                </div>
            </div>



            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div id="table1" class="card cardTd">

                        <div class="card-body">
                            <form action="{{ route('rfqOrderStatus.store') }}" method="POST">
                                @csrf

                                <div class="row mb-3 p-2 border">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Choose Sale<span class="text-danger">*</span></h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-8">
                                            <select name="rfq_id" class="form-control select"
                                                data-minimum-results-for-search="Infinity" data-placeholder="Choose... ">
                                                <option></option>
                                                @foreach ($rfqs as $rfq)
                                                    <option value="{{ $rfq->id }}">Client Name: {{ $rfq->name }},
                                                        <br> RFQ Code: {{ $rfq->rfq_code }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 p-2 border">
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Order Status<span class="text-danger">*</span></h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="order_status" class="form-control select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose year started ">
                                                <option></option>
                                                <option value="high_priority">High Priority</option>
                                                <option value="standard_time">Standard Time</option>
                                                <option value="client_submitted_bill">Client - Submitted Bill</option>
                                                <option value="technical_error">Technical Issues/ Error</option>
                                                <option value="principal_order_processing">Prncpl. - Order Processing
                                                </option>
                                                <option value="principal_pmt_processing">Prncpl. - Pmt Processing</option>
                                                <option value="client_cert_waiting">Client - Cert Waiting</option>
                                                <option value="client_pmt_waiting">Client - Pmt Waiting</option>
                                                <option value="order_done">Order - Done</option>
                                                <option value="order_not_done">Order - Not Done</option>
                                                <option value="commercial_issue">Commercial Issue</option>
                                                <option value="product_issue">Product Issue</option>
                                                <option value="sourcing_issue">Sourcing Issue</option>
                                                <option value="financial_issue">Financial Issue</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Processing Status</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="processing_status" class="form-control select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose year started ">
                                                <option></option>
                                                <option value="processed">Processed</option>
                                                <option value="not_processed">Not Processed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Delivery Status</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="delivery_status" class="form-control select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose year started ">
                                                <option></option>
                                                <option value="delivered">Delivered</option>
                                                <option value="not_delivered">Not Delivered</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 p-2 border">
                                    <div class="col-lg-6 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Client Price Status </h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="client_price_status" class="form-select client_select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose year started ">
                                                <option></option>
                                                <option value="adv_received">Advance Received</option>
                                                <option value="not_received"> Not Received</option>
                                                <option value="half_received">Half Received</option>
                                                <option value="received">Received</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3 client_display d-none">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Client Price Collected</h6>
                                        </div>
                                        <div class="form-group col-sm-12 text-secondary">
                                            <input type="text" name="client_price" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 p-2 border">
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Principal Name</h6>
                                        </div>
                                        <div class="form-group col-sm-12 text-secondary">
                                            <input type="text" name="principles_name" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Principal Price</h6>
                                        </div>
                                        <div class="form-group col-sm-12 text-secondary">
                                            <input type="text" name="principles_price" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Principal Payment Status </h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="principles_payment_status" class="form-select principle_select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose year started ">
                                                <option></option>
                                                <option value="adv_paid">Advance paid</option>
                                                <option value="not_paid"> Not paid</option>
                                                <option value="half_paid">Half paid</option>
                                                <option value="paid">Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3 principle_display d-none">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Principal Payment</h6>
                                        </div>
                                        <div class="form-group col-sm-12 text-secondary">
                                            <input type="text" name="principles_payment"
                                                class="form-control maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-8 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection

@once
    @push('scripts')
        <script>
            $('.client_select').on('change', function() {

                var client_value = $(this).find(":selected").val();

                if (client_value == 'adv_received') {
                    $(".client_display").removeClass("d-none");
                } else if (client_value == 'half_received') {
                    $(".client_display").removeClass("d-none");
                } else {
                    $(".client_display").addClass("d-none");
                }

            });
        </script>
        <script>
            $('.principle_select').on('change', function() {

                var principle_value = $(this).find(":selected").val();

                if (principle_value == 'adv_paid') {
                    $(".principle_display").removeClass("d-none");
                } else if (principle_value == 'half_paid') {
                    $(".principle_display").removeClass("d-none");
                } else {
                    $(".principle_display").addClass("d-none");
                }

            });
        </script>
    @endpush

@endonce
