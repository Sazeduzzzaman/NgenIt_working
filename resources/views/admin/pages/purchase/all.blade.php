@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <!-- Table components -->
            <div class="card">
                <div class="col-lg-12">
                    <table class="table table-xs table-bordered table-responsive">
                        <tr class="bg-success">
                            <th class="text-center text-white " colspan="2">
                                Purchase Order
                                <button type="button" class="bg-warning float-end text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal_purchase_order_save"> <i
                                        class="ph-plus-circle ph-1x"></i></button>
                            </th>
                        </tr>
                        <tr>
                            <th class="bg-teal text-center text-white"> Total Amount </th>
                            <th class="bg-teal text-center text-white"> Total Number </th>
                        </tr>
                        <tr>
                            <td class="text-center"> 00.00</td>
                            <td class="text-center"> 00</td>
                        </tr>
                    </table>
                    <!-- modal for Save  -->
                    <form action="{{ route('purchase.store') }}" class="form-validate-jquery" method="post">
                        @csrf
                        <div id="modal_purchase_order_save" class="modal fade" tabindex="-1">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Purchase Information</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-xs table-bordered table-responsive">
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="rfq_id"> RFQ Name <strong
                                                                class="text-danger">*</strong>
                                                        </label>
                                                        <select name="rfq_id" id="rfq_id"
                                                            class="form-control form-control-sm" required>
                                                            <option value="0">--select--</option>
                                                            @foreach ($rfqs as $rfq)
                                                                <option value="{{ $rfq->id }}">{{ $rfq->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="pq_number"> PQ Number <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="PQ Number" name="pq_number" id="pq_number"
                                                            reaquired>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="pq_reference"> PQ Reference <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="pq_reference"
                                                            class="form-control form-control-sm" placeholder="PQ Reference"
                                                            reaquired>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="po_number"> PO Number <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="po_number" id="po_number"
                                                            class="form-control form-control-sm" placeholder="PO Number"
                                                            reaquired>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="po_date"> PO Date <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="date" name="po_date" id="po_date"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="po_reference">PO Reference <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="po_reference" id="po_reference"
                                                            class="form-control form-control-sm" placeholder="PO Reference">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="purchase_by">Purchase By <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="purchase_by" id="purchase_by"
                                                            class="form-control form-control-sm"
                                                            placeholder="Purchase Name">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="principal_name">Principal Name <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="principal_name" id="principal_name"
                                                            class="form-control form-control-sm"
                                                            placeholder="Principal Name">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="principal_phone">Principal Phone <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="principal_phone" id="principal_phone"
                                                            class="form-control form-control-sm"
                                                            placeholder="e.g: 0100 0000 000">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="principal_address">Principal Address <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="principal_address"
                                                            placeholder="Address" id="principal_address"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="principal_email">Principal Email <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="email" name="principal_email" id="principal_email"
                                                            placeholder="Email" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="billing_name">Billing Name <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="billing_name" id="billing_name"
                                                            placeholder="Billing Name"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="billing_phone">Billing Phone <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="billing_phone" id="billing_phone"
                                                            placeholder="Billing Phone"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="billing_address">Billing Address <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="billing_address" id="billing_address"
                                                            placeholder="Billing Address"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="billing_email">Billing Email <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="email" name="billing_email" id="billing_email"
                                                            placeholder="Billing Email"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="shipping_name">Shipping Name <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="shipping_name" id="shipping_name"
                                                            placeholder="Shipping Name"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="shipping_phone">Shipping Phone <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="shipping_phone" id="shipping_phone"
                                                            placeholder="Shipping Phone"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="shipping_address">Shipping Address <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="shipping_address"
                                                            id="shipping_address" placeholder="Shipping Address"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="shipping_email">Shipping Email <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="email" name="shipping_email" id="shipping_email"
                                                            placeholder="Shipping Email"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="shipping_method">Shipping Method <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="shipping_method" id="shipping_method"
                                                            placeholder="Shipping Method"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="shipping_terms">Shipping Terms <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="shipping_terms" id="shipping_terms"
                                                            placeholder="Shipping terms"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="delivery_date">Delivery Date <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="date" name="delivery_date" id="delivery_date"
                                                            placeholder="" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="validity">Validity </label>
                                                        <input type="text" name="validity" id="validity"
                                                            placeholder="Validity" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payment">Payment </label>
                                                        <input type="text" name="payment" id="payment"
                                                            placeholder="Payment" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="delivery">Delivery </label>
                                                        <input type="text" name="delivery" id="delivery"
                                                            placeholder="Delivery" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="license">License </label>
                                                        <input type="text" name="license" id="license"
                                                            placeholder="License" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="penalty">Penalty <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="penalty" id="penalty"
                                                            placeholder="Penalty" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payable_account_number">Payable Account Number </label>
                                                        <input type="text" name="payable_account_number"
                                                            id="payable_account_number"
                                                            placeholder="Payable Account Number"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payable_account_name">Payable Account Name </label>
                                                        <input type="text" name="payable_account_name"
                                                            id="payable_account_name" placeholder="Payable Account Name"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payable_account_bank">Payable Account Bank </label>
                                                        <input type="text" name="payable_account_bank"
                                                            id="payable_account_bank" placeholder="Payable Account Bank"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payable_account_swift">Payable Account Swift </label>
                                                        <input type="text" name="payable_account_swift"
                                                            id="payable_account_swift" placeholder="Payable Account Bank"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payable_account_route">Payable Account Route</label>
                                                        <input type="text" name="payable_account_route"
                                                            id="payable_account_route" placeholder="Payable Account Route"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payment_status">Payment Status </label>
                                                        <input type="text" name="payment_status" id="payment_status"
                                                            placeholder="Payment Status"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payment_amount_reference">Payment Amount Reference
                                                        </label>
                                                        <input type="text" name="payment_amount_reference"
                                                            id="payment_amount_reference"
                                                            placeholder="Payment Amount Reference"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payment_process_fee">Payment Process Fee <strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="payment_process_fee"
                                                            id="payment_process_fee" placeholder="Payment Process Fee"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payment_pop_reference">Payment Pop Reference</label>
                                                        <input type="text" name="payment_pop_reference"
                                                            id="payment_pop_reference" placeholder="Payment Pop Reference"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="payment_date">Payment Date</label>
                                                        <input type="date" name="payment_date" id="payment_date"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="subtotal">Subtotal </label>
                                                        <input type="text" name="subtotal" id="subtotal"
                                                            placeholder="e.g: 00.00" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="shipping">Shipping<strong
                                                                class="text-danger">*</strong> </label>
                                                        <input type="text" name="shipping" id="shipping"
                                                            placeholder="e.g: 00"class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="tax">Tax</label>
                                                        <input type="text" name="tax" id="tax"
                                                            placeholder="00" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="others">Others</label>
                                                        <input type="text" name="others" id="others"
                                                            placeholder="Other's" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <label for="total">Total </label>
                                                        <input type="text" name="total" id="total"
                                                            placeholder="00.00" class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td colspan="2">
                                                    <div class="form-group">
                                                        <label for="client_details">Client details </label>
                                                        <input type="text" name="client_details" id="client_details"
                                                            placeholder="Client details"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- model-end for save-->
                </div>
            </div>
            <!-- tab month menu start-->
            <ul class="nav nav-tabs mb-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="#js-January-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                        role="tab" tabindex="-1">
                        January
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-February-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        February
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-March-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="March"
                        tabindex="-1">
                        March
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-April-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                        tabindex="-1">
                        April
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-May-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                        tabindex="-1">
                        May
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-June-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                        tabindex="-1">
                        June
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-July-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                        tabindex="-1">
                        July
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-August-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                        tabindex="-1">
                        August
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-September-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        September
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-October-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        October
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-November-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        November
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#js-December-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                        role="tab" tabindex="-1">
                        December
                    </a>
                </li>
            </ul>
            <!-- tab month menu end -->
            <div class="card">
                <!-- Tab start -->
                <div class="card-body">
                    <div class="tab-content table-responsive">
                        <div class="tab-pane fade active show" id="js-January-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic january">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'January')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-February-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic february">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'February')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-March-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic march">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'March')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-April-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic april">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'April')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-May-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic may">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'May')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-June-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic june">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'June')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-July-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic july">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'July')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-August-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic august">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'August')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-September-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic september">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'September')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-October-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic october">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'October')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-November-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic november">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'November')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="js-December-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic december">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'December')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
                                                        class="text-danger delete mx-2">
                                                        <i class="delete icon-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <td colspan="12" class="text-center"> Data not available</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end cart body -->
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
        $('.january, .february, .march, .april, .may, .june, .july, .august, .september, .october, .november, .december').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [6],
            }, ],
        });
    </script>
@endpush
