@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Purchase Management</span>
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

        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">Purchase Product Edit Form</h5>
                </div>
                <div class="card-body">
                    <!-- modal for update  -->
                    <form action="{{ route('purchase.update', $purchase->id) }}" class="form-validate-jquery"
                        method="post">
                        @csrf
                        @method('PUT')
                        <div class="table-responsive">
                            <table class="table table-xs table-bordered table-responsive">
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="rfq_id"> RFQ Name <strong class="text-danger">*</strong>
                                            </label>
                                            <select name="rfq_id" id="rfq_id"
                                                class="form-control form-control-sm "required>
                                                <option value="0">--select--</option>
                                                @foreach ($rfqs as $rfq)
                                                    <option @selected($rfq->id == $purchase->rfq_id) value="{{ $rfq->id }}">
                                                        {{ $rfq->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="pq_number"> PQ Number <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="PQ Number" value="{{ $purchase->pq_number }}" name="pq_number"
                                                id="pq_number" reaquired>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="pq_reference"> PQ Reference <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $purchase->pq_reference }}" name="pq_reference"
                                                class="form-control form-control-sm" placeholder="PQ Reference" reaquired>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="po_number"> PO Number <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $purchase->po_number }}" name="po_number"
                                                id="po_number" class="form-control form-control-sm" placeholder="PO Number"
                                                reaquired>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="po_date"> PO Date <strong class="text-danger">*</strong> </label>
                                            <input type="date" value="{{ $purchase->po_date }}" name="po_date"
                                                id="po_date" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="po_reference">PO Reference <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $purchase->po_reference }}" name="po_reference"
                                                id="po_reference" class="form-control form-control-sm"
                                                placeholder="PO Reference">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="purchase_by">Purchase By <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $purchase->purchase_by }}" name="purchase_by"
                                                id="purchase_by" class="form-control form-control-sm"
                                                placeholder="Purchase Name">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="principal_name">Principal Name <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->principal_name }}"
                                                name="principal_name" id="principal_name"
                                                class="form-control form-control-sm" placeholder="Principal Name">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="principal_phone">Principal Phone <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->principal_phone }}"
                                                name="principal_phone" id="principal_phone"
                                                class="form-control form-control-sm" placeholder="e.g: 0100 0000 000">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="principal_address">Principal Address <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->principal_address }}"
                                                name="principal_address" placeholder="Address" id="principal_address"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="principal_email">Principal Email <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="email" value="{{ $purchase->principal_email }}"
                                                name="principal_email" id="principal_email" placeholder="Email"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="billing_name">Billing Name <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="text" value="{{ $purchase->billing_name }}"
                                                name="billing_name" id="billing_name" placeholder="Billing Name"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="billing_phone">Billing Phone <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->billing_phone }}"
                                                name="billing_phone" id="billing_phone" placeholder="Billing Phone"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="billing_address">Billing Address <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->billing_address }}"
                                                name="billing_address" id="billing_address" placeholder="Billing Address"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="billing_email">Billing Email <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="email" value="{{ $purchase->billing_email }}"
                                                name="billing_email" id="billing_email" placeholder="Billing Email"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="shipping_name">Shipping Name <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->shipping_name }}"
                                                name="shipping_name" id="shipping_name" placeholder="Shipping Name"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="shipping_phone">Shipping Phone <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->shipping_phone }}"
                                                name="shipping_phone" id="shipping_phone" placeholder="Shipping Phone"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="shipping_address">Shipping Address <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->shipping_address }}"
                                                name="shipping_address" id="shipping_address"
                                                placeholder="Shipping Address" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="shipping_email">Shipping Email <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="email" value="{{ $purchase->shipping_email }}"
                                                name="shipping_email" id="shipping_email" placeholder="Shipping Email"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="shipping_method">Shipping Method <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->shipping_method }}"
                                                name="shipping_method" id="shipping_method" placeholder="Shipping Method"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="shipping_terms">Shipping Terms <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->shipping_terms }}"
                                                name="shipping_terms" id="shipping_terms" placeholder="Shipping terms"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="delivery_date">Delivery Date <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="date" value="{{ $purchase->delivery_date }}"
                                                name="delivery_date" id="delivery_date" placeholder=""
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="validity">Validity </label>
                                            <input type="text" value="{{ $purchase->validity }}" name="validity"
                                                id="validity" placeholder="Validity"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="payment">Payment </label>
                                            <input type="text" value="{{ $purchase->payment }}" name="payment"
                                                id="payment" placeholder="Payment"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="delivery">Delivery </label>
                                            <input type="text" value="{{ $purchase->delivery }}" name="delivery"
                                                id="delivery" placeholder="Delivery"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="license">License </label>
                                            <input type="text" value="{{ $purchase->license }}" name="license"
                                                id="license" placeholder="License"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="penalty">Penalty <strong class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->penalty }}" name="penalty"
                                                id="penalty" placeholder="Penalty"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="payable_account_number">Payable Account Number </label>
                                            <input type="text" value="{{ $purchase->payable_account_number }}"
                                                name="payable_account_number" id="payable_account_number"
                                                placeholder="Payable Account Number" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="payable_account_name">Payable Account Name </label>
                                            <input type="text" value="{{ $purchase->payable_account_name }}"
                                                name="payable_account_name" id="payable_account_name"
                                                placeholder="Payable Account Name" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="payable_account_bank">Payable Account Bank </label>
                                            <input type="text" value="{{ $purchase->payable_account_bank }}"
                                                name="payable_account_bank" id="payable_account_bank"
                                                placeholder="Payable Account Bank" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="payable_account_swift">Payable Account Swift </label>
                                            <input type="text" value="{{ $purchase->payable_account_swift }}"
                                                name="payable_account_swift" id="payable_account_swift"
                                                placeholder="Payable Account Bank" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="payable_account_route">Payable Account Route</label>
                                            <input type="text" value="{{ $purchase->payable_account_route }}"
                                                name="payable_account_route" id="payable_account_route"
                                                placeholder="Payable Account Route" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="payment_status">Payment Status </label>
                                            <input type="text" value="{{ $purchase->payment_status }}"
                                                name="payment_status" id="payment_status" placeholder="Payment Status"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="payment_amount_reference">Payment Amount Reference
                                            </label>
                                            <input type="text" value="{{ $purchase->payment_amount_reference }}"
                                                name="payment_amount_reference" id="payment_amount_reference"
                                                placeholder="Payment Amount Reference"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="payment_process_fee">Payment Process Fee <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->payment_process_fee }}"
                                                name="payment_process_fee" id="payment_process_fee"
                                                placeholder="Payment Process Fee" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="payment_pop_reference">Payment Pop Reference</label>
                                            <input type="text" value="{{ $purchase->payment_pop_reference }}"
                                                name="payment_pop_reference" id="payment_pop_reference"
                                                placeholder="Payment Pop Reference" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="payment_date">Payment Date</label>
                                            <input type="date" value="{{ $purchase->payment_date }}"
                                                name="payment_date" id="payment_date"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="subtotal">Subtotal </label>
                                            <input type="text" value="{{ $purchase->subtotal }}" name="subtotal"
                                                id="subtotal" placeholder="e.g: 00.00"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="shipping">Shipping<strong class="text-danger">*</strong> </label>
                                            <input type="text" value="{{ $purchase->shipping }}" name="shipping"
                                                id="shipping" placeholder="e.g: 00"class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="tax">Tax</label>
                                            <input type="text" value="{{ $purchase->tax }}" name="tax"
                                                id="tax" placeholder="00" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="others">Others</label>
                                            <input type="text" value="{{ $purchase->others }}" name="others"
                                                id="others" placeholder="Other's"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="total">Total </label>
                                            <input type="text" value="{{ $purchase->total }}" name="total"
                                                id="total" placeholder="00.00" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td colspan="2">
                                        <div class="form-group">
                                            <label for="client_details">Client details </label>
                                            <input type="text" value="{{ $purchase->client_details }}"
                                                name="client_details" id="client_details" placeholder="Client details"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-end mt-3">
                            <button type="reset" class="btn btn-sm btn-danger me-3">Reset<i
                                    class="icon-reset"></i></button>
                            <a href="{{ route('purchase.index') }}" type="submit"
                                class="btn btn-sm btn-info me-3">Back</a>
                            <button type="submit"
                                class="btn btn-sm btn-primary from-prevent-multiple-submits me-3">Submit
                                <i class="ph-paper-plane-tilt ms-2"></i>
                            </button>
                        </div>
                    </form>
                    <!-- model-end for update-->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        // Initialize
        const validator = $('.form-validate-jquery').validate({
            ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
            errorClass: 'validation-invalid-label',
            successClass: 'validation-valid-label',
            validClass: 'validation-valid-label',
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            success: function(label) {
                label.addClass('validation-valid-label').text('success.'); // remove to hide Success message
            },
            // Different components require proper error label placement
            errorPlacement: function(error, element) {
                // Input with icons and Select2
                if (element.hasClass('select2-hidden-accessible')) {
                    error.appendTo(element.parent());
                }
                // Input group, form checks and custom controls
                else if (element.parents().hasClass('form-control-feedback') || element.parents().hasClass(
                        'form-check') || element.parents().hasClass('input-group')) {
                    error.appendTo(element.parent().parent());
                }
                // Other elements
                else {
                    error.insertAfter(element);
                }
            },
            rules: {
                subtotal: {
                    number: true
                },
                shipping: {
                    number: true
                },
                tax: {
                    number: true
                },
                others: {
                    number: true
                },
                total: {
                    number: true
                },
            },
        });
    </script>
@endpush
