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
    <section class="my-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center pb-3 primary_color">Checkout Page
                </h1>
            </div>
            <form action="" class="p-4">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="">
                            <h4 class="primary_color pt-3">Billing Summury</h4>
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
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2" style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Full Name</label>
                                                <input name="name" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Full Name" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Phone Number</label>
                                                <input name="phone" type="number" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Phone" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2 "style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input name="email" type="email" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Email" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input name="address" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Address" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">City</label>
                                                <input name="city" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter City" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Company Name</label>
                                                <input name="comany_name" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Company Name" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Zip Code </label>
                                                <input name="zip_code" type="number" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Zip Code" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Country</label>
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Accordion item 2 -->
                            <div class="card">
                                <div id="headingTwo" class="card-header  shadow-sm ">
                                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                            class="d-block position-relative collapsed text-black text-uppercase collapsible-link py-2"
                                            style="font-size: 12px;">Ship
                                            to Another Address ?</a></h6>
                                </div>
                                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample"
                                    class="collapse">
                                    <div class="card-body p-2">
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2" style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Full Name</label>
                                                <input name="name" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Full Name" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Phone Number</label>
                                                <input name="phone" type="number" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Phone" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2 "style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input name="email" type="email" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Email" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input name="address" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Address" required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">City</label>
                                                <input name="city" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter City" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Company Name</label>
                                                <input name="comany_name" type="text" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Company Name"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Zip Code </label>
                                                <input name="zip_code" type="number" class="form-control"
                                                    aria-describedby="emailHelp" placeholder="Enter Zip Code" required>
                                            </div>
                                            <div class="form-group ml-2 " style="width: 100% !important;">
                                                <label for="exampleInputEmail1">Country</label>
                                                <select class="form-select" aria-label="Default select example" required>
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
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
                                            <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
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
                                        <input type="radio" id="html" name="fav_language" value="HTML">
                                        <label for="html">
                                            <img src="{{ asset('frontend/images/work_order.png') }}" width="60px"
                                                height="40px" style="cursor: pointer; margin-right:2rem;" alt=""
                                                id="bankPay">
                                        </label>
                                        <input type="radio" id="css" name="fav_language" value="CSS">
                                        <label for="css">

                                            <img src="{{ asset('frontend/images/online_pay.png') }}" width="60px"
                                                style="cursor: pointer; background:transparent" alt="">
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="">
                            <h4 class="primary_color pt-3">Order Summury</h4>
                        </div>
                        <div class="row  rounded primary_shadow">

                            @foreach ($carts as $item)
                                <div class="col mb-2">
                                    <div class="d-flex justify-content-between align-items-center ">

                                        @php
                                            $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                                        @endphp
                                        <p class="p-0 m-0" style="font-size: 14px;"><a
                                                href="{{ route('product.details', $slug) }}"
                                                class="">{{ $item->name }}</a></p>
                                        </span>
                                        <p class="text-muted">x {{ $item->qty }}</p>
                                        <p class="text-brand ml-3">${{ $item->price }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center ">

                                        @php
                                            $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                                        @endphp
                                        <p class="p-0 m-0" style="font-size: 14px;"><a
                                                href="{{ route('product.details', $slug) }}"
                                                class="">{{ $item->name }}</a></p>
                                        </span>
                                        <p class="text-muted">x {{ $item->qty }}</p>
                                        <p class="text-brand ml-3">${{ $item->price }}</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="summury_count">
                                        <ul>
                                            <li class=""><span>Subtotal</span>
                                                <span><small>USD</small>$ 2,667.99</span>
                                            </li>

                                            <li class=""><span>*Tax estimate</span>
                                                <span><small>USD</small>$0.00</span>
                                            </li>
                                        </ul>

                                        <p class="summury_count_total">
                                            <span>Total :</span>
                                            <span><small>USD</small>
                                                $ 2,667.00</span>
                                        </p>
                                        <!-- Button trigger modal -->
                                        <div class="submit_button text-center">
                                            <input class="common_button2" type="submit" value="Proceed">
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
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
    @endsection
@endonce
























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
    </style>
    <!-- header section -->

    <!-- header section End -->



    <div class="cart_page px-3">
        <!-- cart page content -->
        <div class="cart_page_content">
            <!-- cart header -->
            <div class="cart_header">
                <div class="cart_header_content text-center">
                    <!-- wrapper -->
                    <div class="cart_header_wrapper" style="display: inline-flex;">
                        <!-- title -->
                        <div class="cart_header_title">
                            <h2 class="text-center" style="color: #ae0a46">Checkout Page</h2>
                        </div>
                        <!-- right -->
                        <div class="cart_header_right">
                            <div class="cart_header_right_inner">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart header end-->
            <!-- card body -->
            <div class="cart_body_wrapper">
                <!-- left -->
                <div class="cart_body_left">
                    <div class="your_cart">
                        <!-- header -->
                        <div class="your_cart_header" style="background: #d3d2d2; color:white;">
                            <div style="color:black;" class="your_cart_title">Billing information <span class="text-danger"> *</span></div>
                        </div>

                        <form action="{{ route('checkout.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- check out form -->
                            <table class="table p-2">
                                <input type="hidden" name="client_type" value="{{ $client_type }}">
                                    @if ($client_type == 'client')
                                    <input type="hidden" name="client_id" value="{{ $id }}">
                                    @else
                                    <input type="hidden" name="partner_id" value="{{ $id }}">
                                    @endif
                                <tr>
                                    <th class="border-none">
                                        <div class="check_form_inner">
                                            <label for="name">Name <sup>*</sup> </label>
                                            <input type="text" name="billing_name" value="{{ $name }}" class="form-control"
                                                id="name" required>
                                        </div>
                                    </th>
                                    <th class="border-none">
                                        <div class="check_form_inner">
                                            <label for="Phone">Phone <sup>*</sup> </label>
                                            <input type="tel" name="billing_phone" value="{{ $phone }}" class="form-control"
                                                id="Phone" required>
                                        </div>
                                    </th>
                                    <th class="border-none">
                                        <div class="check_form_inner">
                                            <label for="Email">Email <sup>*</sup> </label>
                                            <input type="email" name="billing_email" class="form-control" value="{{ $email }}"
                                                id="Email" required>
                                        </div>
                                    </th>
                                    <th class="border-none">
                                        <div class="check_form_inner">
                                            <label for="address">Address <sup>*</sup> </label>
                                            <input type="text" name="billing_address" class="form-control" value="{{ $address }}"
                                                id="address" required>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th width="25%" class="border-none">
                                        <div class="check_form_inner">
                                            <label for="city">City <sup>*</sup> </label>
                                            <input type="text" name="billing_city" class="form-control" value="{{ $city }}"
                                                id="city" required>
                                        </div>
                                    </th>
                                    <th width="25%" class="border-none">
                                        <div class="check_form_inner">
                                            <label for="state">Company Name <sup>*</sup> </label>
                                            <input type="text" name="billing_company_name" class="form-control"
                                                id="state" required>
                                        </div>
                                    </th>
                                    <th width="25%" class="border-none">
                                        <div class="check_form_inner">
                                            <label for="zip">Zip Code <sup>*</sup> </label>
                                            <input type="text" name="billing_postal" class="form-control" value="{{ $postal }}"
                                                id="zip" required>
                                        </div>
                                    </th>
                                    <th width="25%" class="border-none">
                                        <div class="check_form_inner row">
                                            <div class="col-sm-12">
                                                <label for="zip">Country <sup>*</sup> </label>
                                            </div>
                                            <div class="col-sm-12">
                                                <select name="billing_country" class="form-control select2" aria-label="Searchable Select"
                                                    data-placeholder="Choose Country" required>
                                                    <option></option>
                                                    @foreach ($countries as $item)
                                                        <option value="{{ $item->country_name }}">{{ $item->country_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </table>


                    </div>

                    <div class="your_cart">
                        <div class="your_cart_header" style="background: #d3d2d2; color:white;">
                            <div style="color:black;" class="your_cart_title">
                                <label class="m-0" style="font-size:20px;" id="bkash">
                                <input type="checkbox" class="shipAddress fa-2x" name="ship_address" value="1">
                                    Ship to Another Address ?
                                </label>
                            </div>
                        </div>
                        <div id="shipExpand" class="d-none">

                            <div class="card mt-2 border-none">
                                <table class="table p-2">
                                    <input type="hidden" name="client_type" value="{{ $client_type }}">

                                    <tr>
                                        <th class="border-none">
                                            <div class="check_form_inner">
                                                <label for="name">Name <sup>*</sup> </label>
                                                <input type="text" name="shipping_name" value="{{ $name }}" class="form-control"
                                                    id="name">
                                            </div>
                                        </th>
                                        <th class="border-none">
                                            <div class="check_form_inner">
                                                <label for="Phone">Phone <sup>*</sup> </label>
                                                <input type="tel" name="shipping_phone" value="{{ $phone }}" class="form-control"
                                                    id="Phone">
                                            </div>
                                        </th>
                                        <th class="border-none">
                                            <div class="check_form_inner">
                                                <label for="Email">Email <sup>*</sup> </label>
                                                <input type="email" name="shipping_email" class="form-control" value="{{ $email }}"
                                                    id="Email">
                                            </div>
                                        </th>
                                        <th class="border-none">
                                            <div class="check_form_inner">
                                                <label for="address">Address <sup>*</sup> </label>
                                                <input type="text" name="shipping_address" class="form-control" value="{{ $address }}"
                                                    id="address">
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th width="25%" class="border-none">
                                            <div class="check_form_inner">
                                                <label for="city">City <sup>*</sup> </label>
                                                <input type="text" name="shipping_city" class="form-control" value="{{ $city }}"
                                                    id="city">
                                            </div>
                                        </th>
                                        <th width="25%" class="border-none">
                                            <div class="check_form_inner">
                                                <label for="state">Company Name  </label>
                                                <input type="text" name="shipping_company_name" class="form-control" value="{{ $state }}"
                                                    id="state">
                                            </div>
                                        </th>
                                        <th width="25%" class="border-none">
                                            <div class="check_form_inner">
                                                <label for="zip">Zip Code <sup>*</sup> </label>
                                                <input type="text" name="shipping_postal" class="form-control" value="{{ $postal }}"
                                                    id="zip">
                                            </div>
                                        </th>
                                        <th width="25%" class="border-none">
                                            <div class="check_form_inner row">
                                                <div class="col-sm-12">
                                                    <label for="zip">Country <sup>*</sup> </label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <select name="shipping_country" class="form-control select_country" aria-label="Searchable Select"
                                                        data-placeholder="Choose Country" style="width: 14rem;">
                                                        <option></option>
                                                        @foreach ($countries as $item)
                                                            <option value="{{ $item->country_name }}">{{ $item->country_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>



                    <div class="your_cart">
                        <div class="your_cart_header additionalNotes" style="background: #d3d2d2; color:white;">
                            <div style="color:black;" class="your_cart_title">
                                    Additional Notes ?
                            </div>
                            <div style="color:black;" class="your_cart_title float-end">
                                <i class="icon fa fa-plus"></i>
                            </div>
                        </div>
                        <div id="additionalExpand" class="d-none">

                            <div class="card mt-2 border-none p-3">
                                <div class="check_form_inner pt-1">
                                    <label for="notes">Additional Notes </label>
                                    <textarea class="form-control" id="notes" name="notes" cols="60" rows="5"
                                        placeholder="Write Additional Notes Here...." style="height: 6rem"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="your_cart">
                        <div class="your_cart_header orderMethod" style="background: #d3d2d2; color:white;">
                            <div style="color:black;" class="your_cart_title">
                                    Order Method <span class="text-danger"> *</span>
                            </div>
                            <div style="color:black;" class="your_cart_title float-end">
                                <i class="iconOrder fa fa-plus"></i>
                            </div>
                        </div>
                        <div id="orderExpand" class="d-none">

                            <div class="check_form_inner pt-1 mt-3 p-4">
                                <label class="mr-2" style="font-size: 16px;">Select Your Order Method : </label>

                                <input type="radio" class="bankPay" name="payment_method" value="bank" >
                                <img src="{{ asset('frontend/images/work_order.png') }}" width="60px" height="40px"
                                    style="cursor: pointer; margin-right:2rem;" alt="" id="bankPay">

                                <input type="radio" name="payment_method" value="online">
                                <img src="{{ asset('frontend/images/online_pay.png') }}" width="60px"
                                    style="cursor: pointer; background:transparent" alt="">

                            </div>

                        </div>
                    </div>



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

                </div>
                <!-- summury -->
                <div class="cart_sidebar_sumury">
                    <div class="cart_summury_title">Summary</div>
                    <div class="table-responsive order_table checkout">
                        <table class="table no-border">
                            <tbody>
                                @foreach ($carts as $item)
                                    <tr>
                                        <td class="image product-thumbnail"><img
                                                src="{{ $item->options->has('image') ? $item->options->image : '' }} "
                                                alt="#" style="width:50px; height: 50px;"></td>
                                        <td>
                                            @php
                                                $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                                            @endphp
                                            <p class="w-160 mb-5"><a href="{{ route('product.details', $slug) }}"
                                                    class="text-heading">{{ $item->name }}</a></p></span>
                                            <div class="product-rate-cover">

                                                {{-- <strong>Color :{{ $item->options->color }} </strong>
                                            <strong>Size : {{ $item->options->size }}</strong> --}}

                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="text-muted pl-20 pr-20">x {{ $item->qty }}</h6>
                                        </td>
                                        <td>
                                            <h4 class="text-brand">${{ $item->price }}</h4>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="summury_count">
                        <ul>
                            <li class=""><span>Subtotal</span>
                                <span><small>USD</small>$ {{ number_format($cartsubTotal, 2) }}</span>
                            </li>
                            {{-- <li class=""><span>*Estimated Shipping</span>
                                <span><small>USD</small>${{ number_format(0, 2) }}</span>
                            </li> --}}
                            <li class=""><span>*Tax estimate</span>
                                <span><small>USD</small>${{ number_format(0, 2) }}</span>
                            </li>
                        </ul>

                        <p class="summury_count_total">
                            <span>Total :</span>
                            <span><small>USD</small>
                                $ {{ number_format((int) $cartTotal, 2) }}</span>
                        </p>
                        <!-- Button trigger modal -->
                        <div class="submit_button text-center">
                            <input class="common_button2" type="submit" value="Proceed">
                        </div>
                        </form>

                        <!-- Modal -->
                        <div class="modal fade" id="bankModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
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

            <!-- card body end-->
        </div>
        <!-- cart page content -->
    </div>
@endsection

@once
@section('scripts')

    <script>
        $(document).ready(function() {
            $("input[name='payment_method']").on('change', function(){
                if ($(".bankPay").is(':checked')) {
                    $("#bankPayment").removeClass('d-none');
                } else {
                    $("#bankPayment").addClass('d-none');
                }


            });


        });
        $(document).ready(function() {
            $(".shipAddress").on('change', function(){
                if ($(".shipAddress").is(':checked')) {
                    $("#shipExpand").removeClass('d-none');
                } else {
                    $("#shipExpand").addClass('d-none');
                }


            });


        });
        $(document).ready(function() {
            $(".additionalNotes").on('click', function(){
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
            $(".orderMethod").on('click', function(){
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
            $(".shipAddress").on('change', function(){
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

@endsection
@endonce

