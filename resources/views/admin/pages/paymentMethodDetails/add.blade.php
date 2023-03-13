@extends('admin.master')
@section('content')
    <style>
        .hide-form-field {
            display: none;
        }

        .show-form-field {
            display: unset;
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
                        <span class="breadcrumb-item active">Payment Method Details Management</span>
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
                            <h5 class="text-center">Add Payment Method Details Form</h5>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('payment-method-details.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Payment Method Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="container">
                        <form method="post" action="{{ route('payment-method-details.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="table1" class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class=" mb-3">
                                                        <h6 class="mb-0">Region Name</h6>
                                                        <div class="form-group text-secondary ">
                                                            <select name="region_id" class="form-control select"
                                                                data-minimum-results-for-search="Infinity"
                                                                data-placeholder="Chose Region Name ">
                                                                <option></option>
                                                                @foreach ($regions as $region)
                                                                    <option value="{{ $region->id }}">
                                                                        {{ $region->region_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="mb-3">
                                                        <h6 class="mb-0">Type</h6>
                                                        <div class="form-group text-secondary">
                                                            <select name="type"
                                                                class="form-control select product-type-switcher"
                                                                data-minimum-results-for-search="Infinity"
                                                                data-placeholder="Chose a type ">
                                                                <option></option>
                                                                <option value="bank">Bank</option>
                                                                <option value="ach">Ach</option>
                                                                <option value="check">Check</option>
                                                                <option value="online-paypal">Online Paypal</option>
                                                                <option value="online-payoneer">Online Payoneer</option>
                                                                <option value="stripe">Stripe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div id="table2" class="card">
                                        <div class="card-body">
                                            <div id="card_link" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Card Link </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="card_link" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="card_note" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Card Note </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="card_note" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="bank_name" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Bank Name </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="bank_name" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="bank_address" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Bank Address </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="bank_address"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="account_name" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Account Name </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="account_name"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="account_address" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Account Address </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="account_address"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="account_type" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Account Type </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="account_type"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="branch" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Branch </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="branch" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="routing" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Routing </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="routing" class="form-control maxlength"
                                                        maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="check_address" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Check Address </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="check_address"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div id="check_note" class="row hide-form-field form-field mb-3">
                                                <div class="col-sm-4">
                                                    <h6 class="mb-0">Check Note </h6>
                                                </div>
                                                <div class="form-group col-sm-8 text-secondary">
                                                    <input type="text" name="check_note"
                                                        class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-secondary">
                                                <input id="button" type="submit"
                                                    class="btn btn-primary mt-4 hide-form-field form-field"
                                                    value="Submit" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        jQuery("document").ready(function() {
            $('.product-type-switcher').on('change', function() {
                $('.form-field').removeClass('show-form-field');

                function showCardLinkAttribute() {
                    $("#card_link").addClass("show-form-field");
                }

                function showCardNoteAttribute() {
                    $("#card_note").addClass("show-form-field");
                }

                function showBankNameAttribute() {
                    $("#bank_name").addClass("show-form-field");
                }

                function showBankAddressAttribute() {
                    $("#bank_address").addClass("show-form-field");
                }

                function showAccountNameAttribute() {
                    $("#account_name").addClass("show-form-field");
                }

                function showAccountAddressAttribute() {
                    $("#account_address").addClass("show-form-field");
                }

                function showAccountTypeAttribute() {
                    $("#account_type").addClass("show-form-field");
                }

                function showBranchAttribute() {
                    $("#branch").addClass("show-form-field");
                }

                function showRoutingAttribute() {
                    $("#routing").addClass("show-form-field");
                }

                function showCheckAddressAttribute() {
                    $("#check_address").addClass("show-form-field");
                }

                function showCheckNoteAttribute() {
                    $("#check_note").addClass("show-form-field");
                }

                function showButtonAttribute() {
                    $("#button").addClass("show-form-field");
                }

                switch ($(".product-type-switcher option:selected").val()) {
                    case "bank":
                        showBankNameAttribute();
                        showBankAddressAttribute();
                        showAccountNameAttribute();
                        showAccountAddressAttribute();
                        showBranchAttribute();
                        showRoutingAttribute();
                        showButtonAttribute();
                        break;
                    case 'ach':
                        showBankNameAttribute();
                        showAccountNameAttribute();
                        showAccountTypeAttribute();
                        showRoutingAttribute();
                        showButtonAttribute();
                        break;
                    case 'check':
                        showAccountNameAttribute();
                        showCheckAddressAttribute();
                        showCardNoteAttribute();
                        showButtonAttribute();
                        break;
                    case 'online-paypal':
                        showCardLinkAttribute();
                        showCardNoteAttribute();
                        showButtonAttribute();
                        break;
                    case 'online-payoneer':
                        showCardLinkAttribute();
                        showCardNoteAttribute();
                        showButtonAttribute();
                        break;
                    case 'stripe':
                        // showAccountNameAttribute();
                        showCardLinkAttribute();
                        showCardNoteAttribute();
                        showButtonAttribute();
                        break;
                    default:
                }
            });
        });
    </script>
@endpush


