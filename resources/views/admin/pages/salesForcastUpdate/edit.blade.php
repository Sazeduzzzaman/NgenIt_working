@extends('admin.master')
@section('content')
    <style>
        .label_style {
            width: 151px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="{{ route('knowledge.index') }}" class="breadcrumb-item">Sales Forcast Management</a>
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
        <!-- /page header -->

        <!-- Content area -->
        <div class="content container">
            <div class="text-center">
                <div class="text-start">
                    <div class="row main_bg py-1 rounded-1 d-flex align-items-center gx-0 px-2">

                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ route('sales-forcast.index') }}">
                                    <i class="fa-solid fa-arrow-left main_color"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <p class="text-white p-0 m-0 fw-bold">All Sales Forcast </p>
                        </div>

                        <div class="col-lg-4 col-sm-12 d-flex justify-content-end">
                            <a href="{{ route('row.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-nfc-magnifying-glass me-1" style="font-size: 10px;"></i>
                                    <span>Row</span>
                                </div>
                            </a>
                            <a href="{{ route('solution.index') }}" class="btn navigation_btn ms-2">
                                <div class="d-flex align-items-center ">
                                    <i class="fa-solid fa-money-check-dollar-pen me-1" style="font-size: 10px;"></i>
                                    <span>Solution</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <form method="post" action="{{ route('sales-forcast.update', $salesforcast->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!--Banner Section-->
                    <div class="container">
                        <div class="row g-2 p-1">
                            <div class="col-lg-4 col-sm-12">
                                <div class="px-2 py-2 rounded bg-light mt-2">
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Rfq Id</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="rfq_id" class="form-control form-control-sm select"
                                                data-placeholder="Chose Rfq name ">
                                                @foreach ($rfqs as $rfq)
                                                    <option @selected($salesforcast->rfq_id == $rfq->id) value="{{ $rfq->id }}">
                                                        RFQ Code: {{ $rfq->rfq_code }}; Client Name: {{ $rfq->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Sales Man Id L1</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="sales_man_id_L1" class="form-control form-control-sm select"
                                                data-placeholder="Chose Sales Man L1">
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option @selected($salesforcast->sales_man_id_L1 == $user->id) value="{{ $user->id }}">
                                                        {{ $user->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Sales Man Id T1</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="sales_man_id_T1" class="form-control form-control-sm select"
                                                data-placeholder="Chose Sales Man Id T1">
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option @selected($salesforcast->sales_man_id_T1 == $user->id) value="{{ $user->id }}">
                                                        {{ $user->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Sales Man Id T2</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="sales_man_id_T2" class="form-control form-control-sm select"
                                                data-placeholder="Chose Sales Man Id T2 ">
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option @selected($salesforcast->sales_man_id_T2 == $user->id) value="{{ $user->id }}">
                                                        {{ $user->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Date</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="date" name="date" placeholder="Date"
                                                value="{{ $salesforcast->date }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Month</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="month" class="form-control form-control-sm select"
                                                data-placeholder="Choose Month">
                                                <option></option>
                                                @for ($m = 1; $m <= 12; $m++)
                                                    @php
                                                        $monthObj = Carbon\Carbon::createFromFormat('m', $m);
                                                        $monthName = $monthObj->format('F');
                                                        $monthValue = $monthObj->format('m');
                                                    @endphp
                                                    <option @selected($salesforcast->month == $monthValue) value="{{ $monthValue }}">
                                                        {{ $monthName }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Quarter</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="quarter" class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose Quarter ">
                                                <option></option>
                                                <option @selected($salesforcast->quarter == 'q1') value="q1">Q1</option>
                                                <option @selected($salesforcast->quarter == 'q2') value="q2">Q2</option>
                                                <option @selected($salesforcast->quarter == 'q3') value="q3">Q3</option>
                                                <option @selected($salesforcast->quarter == 'q4') value="q4">Q4</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Partner Type</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="partner_type" class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose Partner Type ">
                                                <option></option>
                                                <option @selected($salesforcast->partner_type == 'client') value="client">Client</option>
                                                <option @selected($salesforcast->partner_type == 'partner') value="partner">Partner</option>
                                                <option @selected($salesforcast->partner_type == 'direct') value="direct">Direct</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>PQ Reference</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="pq_reference" placeholder="PQ Reference"
                                                value="{{ $salesforcast->pq_reference }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Client Name</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="client_name" placeholder="Client Name"
                                                value="{{ $salesforcast->client_name }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="px-2 py-2 rounded bg-light mt-2">
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Product Name </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="product_name" placeholder="Product Name"
                                                value="{{ $salesforcast->product_name }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Forcast Type</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="forcast_type" class="form-control form-control-sm select"
                                                data-placeholder="Chose Forcast Type">
                                                <option @selected($salesforcast->forcast_type == 'promising') value="promising">Promising
                                                </option>
                                                <option @selected($salesforcast->forcast_type == 'quoted') value="quoted">Quoted</option>
                                                <option @selected($salesforcast->forcast_type == 'lost') value="lost">Lost</option>
                                                <option @selected($salesforcast->forcast_type == 'closed') value="closed">Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Value</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="value" placeholder="Value"
                                                value="{{ $salesforcast->value }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Order Status </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="order_status" placeholder="Order Status"
                                                value="{{ $salesforcast->order_status }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Client Price </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="client_price_status" class="form-control form-control-sm select"
                                                data-placeholder="Chose Client Price Status ">
                                                <option></option>
                                                <option @selected($salesforcast->client_price_status == 'adv_received') value="adv_received">Adv Received
                                                </option>
                                                <option @selected($salesforcast->client_price_status == 'not_received') value="not_received">Not Received
                                                </option>
                                                <option @selected($salesforcast->client_price_status == 'half_received') value="half_received">Half
                                                    Received</option>
                                                <option @selected($salesforcast->client_price_status == 'received') value="received">Received
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Principles</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="principles_payment_status"
                                                class="form-control form-control-sm select"
                                                data-placeholder="Chose Principles Payment Status ">
                                                <option></option>
                                                <option @selected($salesforcast->principles_payment_status == 'adv_paid') value="adv_paid">Adv Paid
                                                </option>
                                                <option @selected($salesforcast->principles_payment_status == 'not_paid') value="not_paid">Not Paid
                                                </option>
                                                <option @selected($salesforcast->principles_payment_status == 'half_paid') value="half_paid">Half Paid
                                                </option>
                                                <option @selected($salesforcast->principles_payment_status == 'paid') value="paid">Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Delivery Dead</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="date" name="delivery_dead_line"
                                                placeholder="Delivery Dead Line"
                                                value="{{ $salesforcast->delivery_dead_line }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Final Status</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="final_status" class="form-control form-control-sm select"
                                                data-placeholder="Chose Final Status">
                                                <option></option>
                                                <option @selected($salesforcast->final_status == 'promising') value="promising">Promising
                                                </option>
                                                <option @selected($salesforcast->final_status == 'quoted') value="quoted">Quoted</option>
                                                <option @selected($salesforcast->final_status == 'lost') value="lost">Lost</option>
                                                <option @selected($salesforcast->final_status == 'closed') value="closed">Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Work Order </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="work_order_number"
                                                placeholder="Work Order Number"
                                                value="{{ $salesforcast->work_order_number }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Work Order PDF </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="file" name="work_order_pdf" placeholder="Work Order PDF"
                                                class="form-control form-control-sm" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>



                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="px-2 py-2 rounded bg-light mt-2">
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Client Po </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="client_po_number" placeholder="Client Po Number"
                                                value="{{ $salesforcast->client_po_number }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Client Po PDF </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="file" name="client_po_pdf" placeholder="Client Po PDF"
                                                class="form-control form-control-sm" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Contact Person </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="contact_person" placeholder="Contact Person"
                                                value="{{ $salesforcast->contact_person }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Contact Number </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <input type="text" name="contact_number" placeholder="Contact Number"
                                                value="{{ $salesforcast->contact_number }}"
                                                class="form-control form-control-sm maxlength" maxlength="100" />
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Probability </span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="probability_status" class="form-control form-control-sm select"
                                                data-placeholder="Chose Probability Status">
                                                <option></option>
                                                <option @selected($salesforcast->probability_status == 'medium_controle') value="medium_controle">Medium
                                                    Controle</option>
                                                <option @selected($salesforcast->probability_status == 'no_controle') value="no_controle">No Controle
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Quotation Status</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="quotation_status" class="form-control form-control-sm select"
                                                data-placeholder="Chose Quotation Status ">
                                                <option></option>
                                                <option @selected($salesforcast->quotation_status == 'medium_controle') value="medium_controle">Medium
                                                    Controle</option>
                                                <option @selected($salesforcast->quotation_status == 'no_controle') value="no_controle">No Controle
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Probability</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="probability_reason" class="form-control form-control-sm select"
                                                data-placeholder="Chose Probability Reason">
                                                <option></option>
                                                <option value="tender_quote">By Teaner Quote</option>
                                                <option value="pending_mgt_approval"> Pending Mngt. Approval</option>
                                                <option value="backdoor_client">Difficult/Backdoor Client</option>
                                                <option value="client_complexity">Price/Client Complexity</option>
                                                <option value="no_control">No Control</option>
                                                <option value="medium_control">Medium Control</option>
                                                <option value="full_control">Full Control</option>
                                                <option value="high_competition">High Competition</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Quotation Action</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="quotation_action" class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose Quotation Action">
                                                <option></option>
                                                <option @selected($salesforcast->quotation_action == 'followed_up') value="followed_up">Followed Up
                                                </option>
                                                <option @selected($salesforcast->quotation_action == 'need_followed_up') value="need_followed_up">Need
                                                    Followed Up</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Lost Level One</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="lost_level_one" class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose Lost Level One">
                                                <option></option>
                                                <option @selected($salesforcast->lost_level_one == 'price_complexity') value="price_complexity">Price
                                                    Complexity</option>
                                                <option @selected($salesforcast->lost_level_one == 'no_controlle') value="no_controlle">No Controlle
                                                </option>
                                                <option @selected($salesforcast->lost_level_one == 'logical') value="logical">Logical</option>
                                                <option @selected($salesforcast->lost_level_one == 'tander_quote') value="tander_quote">Tander Quote
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class="row mb-1">
                                        <div class="col-lg-4 col-sm-12">
                                            <span>Lost Level Tow</span>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <select name="lost_level_tow" class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose Lost Level Tow">
                                                <option></option>
                                                <option @selected($salesforcast->lost_level_tow == 'need_followed_up') value="need_followed_up">Need
                                                    Followed Up</option>
                                                <option @selected($salesforcast->lost_level_tow == 'competitive_pricing') value="competitive_pricing">
                                                    Competitive Pricing</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{--  --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 pb-2 pe-3 pt-1">
                        <button type="submit" class="submit_btn from-prevent-multiple-submits"
                            style="padding: 4px 9px;">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>
@endsection
