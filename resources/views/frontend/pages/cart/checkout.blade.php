@extends('frontend.master')
@section('content')
    <style>
        .btn-design {
            color: #fff;
            background-color: #ae0a46;
            border-color: #ae0a46;
        }

        .check_form_inner a input {
            color: #0d6efd !important;
            text-decoration: underline !important;
            cursor: pointer;
            text-align: right;
        }

        .border-secondary {
            border-color: #bfc7cf !important;
        }

        /*
                *
                * ==========================================
                * CUSTOM UTIL CLASSES
                * ==========================================
                *
                */
        /* Horizontal line */
        .select2-container .select2-selection--single {
            height: 30px !important;
        }

        .collapsible-link::before {
            content: '';
            width: 14px;
            height: 2px;
            background: #333;
            position: absolute;
            top: calc(50% - 1px);
            right: 1rem;
            display: block;
            transition: all 0.3s;
        }

        /* Vertical line */
        .collapsible-link::after {
            content: '';
            width: 2px;
            height: 14px;
            background: #333;
            position: absolute;
            top: calc(50% - 7px);
            right: calc(1rem + 6px);
            display: block;
            transition: all 0.3s;
        }

        .collapsible-link[aria-expanded='true']::after {
            transform: rotate(90deg) translateX(-1px);
        }

        .collapsible-link[aria-expanded='true']::before {
            transform: rotate(180deg);
        }

        .form-group {
            widows: 100% !important;
        }

        input:focus {
            outline: none;
            box-shadow: none;
        }

        .form-select:focus {
            border-color: none !important;
            outline: 0;
            box-shadow: none !important;
        }

        .primary_color {
            color: #ae0a46;
        }

        .primary_shadow {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            border-bottom: none !important;
        }

        label {
            display: inline-block;
            font-size: 13px;
        }

        .form-control {
            height: 30px;
        }

        .form-group {
            margin-bottom: 0rem;
        }

        .form-select {
            font-size: 13px;
        }

        .common_button2 {
            padding: 10px 30px;
            cursor: pointer;
            font-family: "Allumi Std Extended";
            font-size: 15px;
            font-weight: 500;
            text-align: center;
            display: inline-block;
            background-color: var(--crimson);
            transition: 0.3s;
            outline: none;
            border: none;
            color: white;
        }
    </style>
    <!-- header section -->
    {{-- Check Out Page Start --}}
    <section class="mt-3 mb-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center pb-3 primary_color">Checkout Page
                </h1>
            </div>
            <form action="{{ route('checkout.store') }}" class="p-4" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg-7">
                        <div class="">
                            <h4 class="primary_color pt-3">Client Information</h4>
                        </div>
                        <!-- Accordion -->
                        <div id="accordionExample" class="accordion shadow">

                            <!-- Accordion item 1 -->
                            <div class="card">
                                <div id="headingOne" class="card-header shadow-sm">
                                    <h6 class="mb-0 font-weight-bold ">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne"
                                            class="d-block position-relative text-black text-uppercase collapsible-link py-2 "
                                            style="font-size: 12px;">Billing
                                            information</a>
                                    </h6>
                                </div>
                                <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample"
                                    class="collapse show">
                                    <input type="hidden" name="client_type" value="{{ $client_type }}">
                                    @if ($client_type == 'client')
                                        <input type="hidden" name="client_id" value="{{ $id }}">
                                    @else
                                        <input type="hidden" name="partner_id" value="{{ $id }}">
                                    @endif
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2" style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Full Name</label>
                                                <input name="billing_name" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Full Name" required>
                                            </div>
                                            <div class="form-group ml-2 "style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input name="billing_email" type="email" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Email" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Phone Number</label>
                                                <input name="billing_phone" type="number" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Phone" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">

                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input name="billing_address" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Address" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">City</label>
                                                <input name="billing_city" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter City" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Zip Code </label>
                                                <input name="billing_postal" type="number" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Zip Code" required>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-center">

                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Company Name</label>
                                                <input name="billing_company_name" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Company Name" required>
                                            </div>

                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Country</label>
                                                <select name="billing_country" class="form-control select2"
                                                    aria-label="Searchable Select" data-placeholder="Choose Country"
                                                    required style="width: 100% !important;">
                                                    <option></option>
                                                    @foreach ($countries as $item)
                                                        <option value="{{ $item->country_name }}"
                                                            data-value1="{{ $item->region_id }}">{{ $item->country_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Accordion item 2 -->
                            <div class="card">
                                <div id="headingTwo" class="card-header  shadow-sm ">
                                    <h6 class="mb-0 font-weight-bold">
                                        <a href="#" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo"
                                            class="d-block position-relative collapsed text-black text-uppercase collapsible-link py-2"
                                            style="font-size: 12px;">
                                            Ship to Another Address ?
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample"
                                    class="collapse">
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2" style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Full Name</label>
                                                <input name="shipping_name" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Full Name" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Phone Number</label>
                                                <input name="shipping_phone" type="number" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Phone" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2 "style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input name="shipping_email" type="email" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Email" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input name="shipping_address" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Address" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">City</label>
                                                <input name="shipping_city" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter City" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Company Name</label>
                                                <input name="shipping_company_name" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Company Name"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Zip Code </label>
                                                <input name="shipping_postal" type="number" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Zip Code" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <div>
                                                    <label for="country">Country</label>
                                                </div>
                                                <div>
                                                    <select id="country" name="shipping_country"
                                                        class="form-control select2" aria-label="Searchable Select"
                                                        data-placeholder="Choose Country" required
                                                        style="width: 100% !important;">
                                                        <option></option>
                                                        @foreach ($countries as $item)
                                                            <option value="{{ $item->country_name }}"
                                                                data-value2="{{ $item->region_id }}">
                                                                {{ $item->country_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Accordion item 3 -->
                            <div class="card">
                                <div id="headingThree" class="card-header  shadow-sm border-0">
                                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree"
                                            class="d-block position-relative collapsed text-black text-uppercase collapsible-link py-2"
                                            style="font-size: 12px;">Additional
                                            Notes ?</a></h6>
                                </div>
                                <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample"
                                    class="collapse">
                                    <div class="card-body p-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="textAreaExample">Additional Notes</label>
                                            <textarea name="notes" class="form-control" id="textAreaExample1" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion item 4 -->
                            <div class="card">
                                <div id="headingThree" class="card-header  shadow-sm border-0">
                                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour"
                                            class="d-block position-relative collapsed text-black text-uppercase collapsible-link py-2"
                                            style="font-size: 12px;">Order
                                            Method</a></h6>
                                </div>
                                <div id="collapseFour" aria-labelledby="headingThree" data-parent="#accordionExample"
                                    class="collapse">
                                    <div class="card-body p-4">
                                        <p>Payment Methods</p>
                                        <input type="radio" id="html" name="payment_method" value="bank">
                                        <label for="html">
                                            <img src="{{ asset('frontend/images/work_order.png') }}" width="60px"
                                                height="40px" style="cursor: pointer; margin-right:2rem;" alt=""
                                                id="bankPay">
                                        </label>
                                        <input type="radio" id="css" name="payment_method" value="online">
                                        <label for="css">

                                            <img src="{{ asset('frontend/images/online_pay.png') }}" width="60px"
                                                style="cursor: pointer; background:transparent" alt="">
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <div class="">
                            <h4 class="primary_color pt-3">Order Summary</h4>
                        </div>
                        <div class="row rounded primary_shadow">

                            <div class="col p-3 pb-0">
                                <table class="table no-border">
                                    <tbody>
                                        @foreach ($carts as $item)
                                            @php
                                                $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                                            @endphp
                                            <tr class="border-none" style="border: none;">
                                                <td width="70%" style="border: none; vertical-align:middle;">
                                                    <a class="text-primary" href="{{ route('product.details', $slug) }}"
                                                        title="{{ $item->name }}">
                                                        {{ Str::limit($item->name, 50) }}
                                                    </a>
                                                </td>
                                                <td class="text-center" width="10%"
                                                    style="border: none; vertical-align:middle;">
                                                    X {{ $item->qty }}
                                                </td>
                                                <td class="text-center" width="20%"
                                                    style="border: none; vertical-align:middle;">
                                                    ${{ $item->price }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>
                            </div>

                            <div class="summury_count pt-0">
                                <table class="table no-border">
                                    <tbody>
                                        <tr class="border-none " style="border: none;">
                                            <td width="40%" style="border: none;">

                                            </td>
                                            <td class="text-right" width="30%" style="border: none;">
                                                <h5>Subtotal :</h5>
                                            </td>

                                            <td class="text-center" width="30%"
                                                style="border: none; vertical-align: middle;">
                                                <h6 class="font-number" style="font-size: 14px;">
                                                    <small style="font-size:10px;">USD</small>
                                                    <strong>$ {{ number_format($cartsubTotal, 2) }}</strong>
                                                </h6>
                                            </td>
                                        </tr>
                                        <tr class="border-none text-center" style="border: none;">
                                            <td width="40%" style="border: none;">

                                            </td>
                                            <td class="text-right" width="30%" style="border: none;">
                                                <h5>GST :</h5>
                                            </td>

                                            <td class="text-center" width="30%"
                                                style="border: none; vertical-align: middle;">
                                                <h6 class="font-number" style="font-size: 14px;">
                                                    <small style="font-size:10px;">USD</small>
                                                    <strong>$ <span class="gst">0.00</span></strong>
                                                </h6>
                                            </td>
                                        </tr>
                                        <tr class="border-none text-center" style="border: none;">
                                            <td width="40%" style="border: none;">

                                            </td>
                                            <td class="text-right" width="30%" style="border: none;">
                                                <h5>Total :</h5>
                                            </td>

                                            <td class="text-center" width="30%"
                                                style="border: none; vertical-align: middle;">
                                                <h6 class="font-number" style="font-size: 14px;">
                                                    <small style="font-size:10px;">USD</small>
                                                    <strong>$ <input type="hidden" class="cart_total"
                                                            value="{{ number_format($cartTotal, 2) }}">
                                                        <input type="hidden" class="grand_total" name="cartTotal"
                                                            value="{{ number_format($cartTotal, 2) }}">
                                                        <span class="grandTotal">{{ number_format($cartTotal, 2) }}
                                                        </span>
                                                    </strong>
                                                </h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Button trigger modal -->
                                <div class="submit_button text-center">
                                    <button class="common_button2" type="submit">Proceed</button>
                                    {{-- <input class="common_button2" type="submit" value="Proceed"> --}}
                                </div>


                                <!-- Modal -->
                                <div class="modal fade" id="bankModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Payment Details
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <strong>Bank Name:</strong>
                                                <p> Dutch Bangla Bank</p><br>
                                                <strong>Account Title:</strong>
                                                <p> NGen IT</p><br>
                                                <strong>Account Number:</strong>
                                                <p> 234***********</p><br>
                                                <strong>Branch Title:</strong>
                                                <p>West Panthapath</p><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <div id="bankPayment" class="d-none">
        <div class="card mt-2 border border-secondary">
            {{-- <div class="card-title pt-1 pl-2 border border-bottom border-secondary">
                Payment Information (Bank Account ( <span class="text-warning" data-toggle="modal"
                    data-target="#bankModal"><i class="fa fa-info-circle"></i></span> ))
            </div> --}}
            <div class="card-body col-12">
                <div class="row">
                    <!-- form item -->
                    <div class="check_form_inner col-6">
                        <label for="Email">Work Order </label>
                        <input type="file" name="work_order" class="form-control" id="workorder">
                        <span class="text-primary">* Accepts Pdf</span>
                    </div>
                    <br>
                    <!-- form item -->
                    <div class="check_form_inner col-6">
                        <label for="Email">Work Order Number </label>
                        <input type="text" name="work_order_no" class="form-control" id="payment">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Check Out Page Start --}}

    <!-- header section End -->
@endsection

@once
    @section('scripts')
        <script>
            $(document).ready(function() {
                $("input[name='payment_method']").on('change', function() {
                    if ($(".bankPay").is(':checked')) {
                        $("#bankPayment").removeClass('d-none');
                    } else {
                        $("#bankPayment").addClass('d-none');
                    }


                });


            });
            $(document).ready(function() {
                $(".shipAddress").on('change', function() {
                    if ($(".shipAddress").is(':checked')) {
                        $("#shipExpand").removeClass('d-none');
                    } else {
                        $("#shipExpand").addClass('d-none');
                    }


                });


            });
            $(document).ready(function() {
                $(".additionalNotes").on('click', function() {
                    //$("#additionalExpand").toggle();
                    if ($("#additionalExpand").hasClass('d-none')) {
                        $("#additionalExpand").removeClass('d-none');
                        $(".icon").removeClass('fa-plus');
                        $(".icon").addClass('fa-minus');
                    } else {
                        $("#additionalExpand").addClass('d-none');
                        $(".icon").removeClass('fa-minus');
                        $(".icon").addClass('fa-plus');
                    }


                });


            });
            $(document).ready(function() {
                $(".orderMethod").on('click', function() {
                    //$("#additionalExpand").toggle();
                    if ($("#orderExpand").hasClass('d-none')) {
                        $("#orderExpand").removeClass('d-none');
                        $(".iconOrder").removeClass('fa-plus');
                        $(".iconOrder").addClass('fa-minus');
                    } else {
                        $("#orderExpand").addClass('d-none');
                        $(".iconOrder").removeClass('fa-minus');
                        $(".iconOrder").addClass('fa-plus');
                    }


                });


            });
        </script>
        <script>
            $(document).ready(function() {
                $(".shipAddress").on('change', function() {
                    if ($(".shipAddress").is(':checked')) {
                        $("#shipExpand").removeClass('d-none');
                    } else {
                        $("#shipExpand").addClass('d-none');
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#bkash').onchange(function() {
                    $("#bkashExpand").toggle(this.checked);
                });
            });


            $('#nagad').click(function() {
                $("#nagadExpand").toggle(this.checked);
            });
            $('#rocket').click(function() {
                $("#rocketExpand").toggle(this.checked);
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="shipping_country"]').on('change', function() {

                    const billing_country = $('select[name="billing_country"] option:selected').data('value1');
                    const shipping_country = $(this).find('option:selected').data('value2');
                    const cart_total = $('.cart_total').val();

                    if (billing_country == shipping_country) {
                        $.ajax({
                            url: "{{ url('checkout/ajax') }}/" + billing_country,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                // alert(billing_country);
                                // alert(data.gst);

                                $('.gst').html(data.gst);
                                $grand_total = parseFloat(cart_total) + parseFloat(data.gst);
                                $('.grandTotal').html($grand_total);
                                $('.grand_total').val($grand_total);

                            },

                        });
                    } else {

                    }
                });
            });
        </script>
    @endsection
@endonce
