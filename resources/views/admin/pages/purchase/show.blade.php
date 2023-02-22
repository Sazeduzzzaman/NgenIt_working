@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">

            <div class="card">

                <div class="card-body">

                    <div class="purchase-order-area">
                        <div class="col-lg-12 header-top">
                            <div class="col-lg-6 header-top-left float-start">
                                <img src="assets/images/ngenit.png" alt="" class="img-responsive">
                            </div>
                            <div class="col-lg-6 header-top-right float-end">
                                <h4 class="text-center">Purchase Order</h4>
                            </div>
                        </div>


                        <div class="col-lg-12 header-top-two float-start">
                            <div class="col-lg-8 float-start">
                                <table class="tableCustomiceForPurchaseOrderHeader float-start">
                                    <tr>
                                        <th>PQ No.</th>
                                        <td>: {{ $purchase->pq_number }} </td>
                                    </tr>
                                    <tr>
                                        <th>PQ Ref.</th>
                                        <td>:{{ $purchase->pq_reference }} </td>
                                    </tr>
                                    <tr>
                                        <th>PI Date</th>
                                        <td>: 22-Jan-23</td>
                                    </tr>
                                    <tr>
                                        <th>PI Ref </th>
                                        <td>: Md. Sumon khan</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4 float-start">

                                <table class="tableCustomiceForPurchaseOrderHeader float-end">
                                    <tr>
                                        <th>PO No. </th>
                                        <td>: {{ $purchase->po_number }}</td>
                                    </tr>
                                    <tr>
                                        <th>PO Date </th>
                                        <td>: {{ $purchase->po_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>PO Ref: </th>
                                        <td>: {{ $purchase->po_reference }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ref. By: </th>
                                        <td>: {{ $purchase->purchase_by }}</td>
                                    </tr>
                                </table>

                            </div>

                        </div>

                        <div class="col-lg-12 vendor-billto-shipcustomer-header float-start">
                            <div class="col-lg-4 float-start">
                                <label class="vendor-bill-customer-title"> Vendor: </label> <br>
                                <p>
                                    <strong> Ingram Micro India Pvt Ltd </strong> <br>
                                    {{ $purchase->principal_address }}
                                </p>
                            </div>
                            <div class="col-lg-4 float-start">
                                <label class="vendor-bill-customer-title"> Bill To: </label> <br>
                                <p>
                                    <strong> NGen IT Pte. Ltd. </strong> <br>
                                    {{ $purchase->billing_address }}
                                </p>

                            </div>
                            <div class="col-lg-4 float-start">
                                <label class="vendor-bill-customer-title"> Ship To: End Customer </label>
                                <p>
                                    <strong> NGEN IT </strong> <br>
                                    {{ $purchase->shipping_address }}
                                </p>
                            </div>
                        </div>
                        <!-- SHIPPING METHOD	 SHIPPING TERMS		DELIVERY DATE						 -->
                        <div class="col-lg-12 vendor-billto-shipcustomer-header float-start">
                            <div class="col-lg-4 float-start">

                                <label class="vendor-bill-customer-title"> Shipping Method </label> <br>
                                <p class="text-center">
                                    {{ $purchase->shipping_method }}
                                </p>

                            </div>
                            <div class="col-lg-4 float-start">
                                <label class="vendor-bill-customer-title"> Shipping Terms </label> <br>
                                <p class="text-center">
                                    {{ $purchase->shipping_terms }}
                                </p>

                            </div>
                            <div class="col-lg-4 float-start">
                                <label class="vendor-bill-customer-title"> Delivery Date </label>
                                <p class="text-center">
                                    {{ $purchase->delivery_date }}
                                </p>
                            </div>
                        </div>

                        <!-- Order Description / details 	 -->
                        <div class="col-lg-12 purchase-product-order-area float-start mt-2">
                            <h3 class="text-center"> Order Details </h3>
                            <table class="purchase-product-order-table">
                                <tr class="text-center">
                                    <th width="5%">Sl #</th>
                                    <th width="25%">SKU#</th>
                                    <th width="30%">DESCRIPTION </th>
                                    <th width="10%">QTY</th>
                                    <th width="12%">UNIT PRICE</th>
                                    <th width="18%">AMOUNT</th>
                                </tr>

                                <tr class="text-center">
                                    <td>01</td>
                                    <td>65297929BA01A12 </td>
                                    <td>Acrobat Pro for teams - 12 months</td>
                                    <td>3</td>
                                    <td>180.00</td>
                                    <td>$ 540.00</td>
                                </tr>

                                <tr>
                                    <th colspan="3">
                                        <label style="padding: 10px; font-size: 14px;">Client : UNDP PTIB Project </label>
                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="3">
                                        <label style="padding: 10px; font-size: 13px;">
                                            VIP : CB4B0CDB4AFD7262D56A
                                        </label>
                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>



                                <tr>
                                    <th colspan="5" class="text-end"> Subtotal </th>
                                    <td class="text-center">$ 540.00</td>
                                </tr>
                                <tr>
                                    <th colspan="5" class="text-end"> Shipping </th>
                                    <td class="text-center">$ 0.00</td>
                                </tr>

                                <tr>
                                    <th colspan="5" class="text-end"> TAX/Vat </th>
                                    <td class="text-center">$ 0.00</td>
                                </tr>
                                <tr>
                                    <th colspan="5" class="text-end"> Other </th>
                                    <td class="text-center">$ 0.00</td>
                                </tr>
                                <tr>
                                    <th colspan="5" class="text-end"> Total </th>
                                    <td class="text-center">$ 540.00</td>
                                </tr>

                            </table>

                            <!-- Terms & Conditions ,Payable Account Details,Payment Details -->

                            <div class="col-lg-12 float-start mt-3">
                                <div class="col-lg-4 float-start">
                                    <label class="vendor-bill-customer-title">Terms & Conditions</label>
                                    <table class="purchase-product-order-table">
                                        <tr>
                                            <td> Payment </td>
                                            <td>:{{ $purchase->payment }} </td>
                                        </tr>
                                        <tr>
                                            <td> Delivery </td>
                                            <td>:{{ $purchase->delivery }} </td>
                                        </tr>
                                        <tr>
                                            <td> License </td>
                                            <td>:{{ $purchase->license }} </td>
                                        </tr>
                                        <tr>
                                            <td> Penalty </td>
                                            <td>:{{ $purchase->penalty }} </td>
                                        </tr>
                                        <tr>
                                            <td> </td>
                                            <td>:{{ $purchase->validity }} </td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-lg-4 float-start">
                                    <label class="vendor-bill-customer-title">Payable Account Details</label>
                                    <table class="purchase-product-order-table">
                                        <tr>
                                            <td> Acc No </td>
                                            <td>: {{ $purchase->payable_account_number }}</td>
                                        </tr>
                                        <tr>
                                            <td> Name </td>
                                            <td>: {{ $purchase->payable_account_name }}</td>
                                        </tr>
                                        <tr>
                                            <td> Bank </td>
                                            <td>: {{ $purchase->payable_account_bank }}</td>
                                        </tr>
                                        <tr>
                                            <td> SWIFT </td>
                                            <td>: {{ $purchase->payable_account_swift }}</td>
                                        </tr>

                                        <tr>
                                            <td> Route </td>
                                            <td>: {{ $purchase->payable_account_route }}</td>
                                        </tr>

                                    </table>

                                </div>
                                <div class="col-lg-4 float-start">
                                    <label class="vendor-bill-customer-title">Payment Details</label>
                                    <table class="purchase-product-order-table">
                                        <tr>
                                            <td> Status </td>
                                            <td>: {{ $purchase->payment_status }} Will be Paid in Advance</td>
                                        </tr>
                                        <tr>
                                            <td> Amount Ref. </td>
                                            <td>: {{ $purchase->payment_amount_reference }} - </td>
                                        </tr>
                                        <tr>
                                            <td> Process Fee </td>
                                            <td>: {{ $purchase->payment_process_fee }} Applicant</td>
                                        </tr>
                                        <tr>
                                            <td> PoP Ref No </td>
                                            <td>: {{ $purchase->payment_pop_reference }} </td>
                                        </tr>
                                        <tr>
                                            <td> Payment Date </td>
                                            <td>: {{ $purchase->payment_date }} 17-Jan-2023 </td>
                                        </tr>
                                    </table>
                                </div>

                            </div>

                            <!-- footer-header -->
                            <div class="col-lg-12 float-start mb-3" style="margin-top: 80px;">
                                <div class="col-lg-3 float-start">
                                    <b style="text-decoration: overline;">
                                        <center> Director, Purchase </center>
                                    </b>

                                </div>

                                <div class="col-lg-3 float-start">
                                    <b style="text-decoration: overline;">
                                        <center> Director, Finance </center>
                                    </b>


                                </div>
                                <div class="col-lg-3 float-start">
                                    <b style="text-decoration: overline;">
                                        <center> Director, Sales </center>
                                    </b>

                                </div>
                                <div class="col-lg-3 float-start">
                                    <b style="text-decoration: overline;">
                                        <center> <sub> Date </sub> </center>
                                    </b>

                                </div>

                            </div>



                        </div>



                    </div>



                </div>

            </div>

        </div>


    </div>
@endsection
