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
                    <table class="table table-xs table-bordered table-responsive mb-2">
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
                                    <label for="client_details">Client details </label>
                                    <input type="text" name="client_details" id="client_details"
                                        placeholder="Client details"
                                        class="form-control form-control-sm">
                                </div>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>

                    </table>
                    <div class="accordion-item m-auto" style="width: 60%;">
                        <h2 class="accordion-header bg-black p-1 text-center">
                            <button class="accordion-button fw-semibold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#add_product">
                                <i class="fas fa-plus-square me-3 fa-1x"></i> Add Product
                            </button>
                        </h2>
                        <div id="add_product" class="accordion-collapse collapse" data-bs-parent="#accordion_expanded">
                            <div class="accordion-body">

                                <div class="table-responsive col-md-12">
                                    <table class="table table-bordered col-md-12 product">

                                        <thead>
                                            <tr>
                                                <th style="padding:7px !important;"> Product Name </th>
                                                <th style="padding:7px !important;"> Qty </th>
                                                <th style="padding:7px !important;"> Unit Price</th>
                                                <th style="padding:7px !important;"> <a href="javascript:void(0)" class="btn btn-primary addRow p-1"><i class="ph-plus"></i></a></th>
                                            </tr>
                                        </thead>

                                            <tbody class="repeater">
                                                <tr>

                                                    <td> <input type="text" class="form-control" name="item_name[]" required></td>
                                                    <td> <input type="text" class="form-control" name="qty[]" ></td>
                                                    <td> <input type="text" class="form-control" name="unit_price[]" ></td>
                                                    <td class="text-center"> <a href="javascript:void(0)" class="btn btn-danger removeRow p-1"><i class="ph-minus"></i></a></td>
                                                </tr>


                                            </tbody>
                                    </table>

                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="62%" colspan="2" class="text-center"><strong>Subtotal <span class="text-danger"></span></strong>  </td>
                                            <td width="30%">
                                                    <div class="form-group">
                                                        <input type="text" name="subtotal" id="subtotal"
                                                            placeholder="e.g: 00.00" class="form-control form-control-sm">
                                                    </div>
                                            </td>
                                            <td width="8%"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center"><strong>Shipping <span class="text-danger"></span></strong>  </td>
                                            <td>
                                                <div class="form-group">


                                                        <input type="text" name="shipping" id="shipping"
                                                            placeholder="e.g: 00"class="form-control form-control-sm">
                                                    </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center"><strong>Tax <span class="text-danger"></span></strong>  </td>
                                            <td>
                                                    <div class="form-group">

                                                        <input type="text" name="tax" id="tax"
                                                            placeholder="00" class="form-control form-control-sm">
                                                    </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center"><strong>Others <span class="text-danger"></span></strong>  </td>
                                            <td>
                                                    <div class="form-group">

                                                        <input type="text" name="others" id="others"
                                                            placeholder="Other's" class="form-control form-control-sm">
                                                    </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center"><strong>Total <span class="text-danger"></span></strong>  </td>
                                            <td>
                                                    <div class="form-group">

                                                        <input type="text" name="total" id="total"
                                                            placeholder="00.00" class="form-control form-control-sm">
                                                    </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </table>

                                </div>




                            </div>
                        </div>
                    </div>
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


