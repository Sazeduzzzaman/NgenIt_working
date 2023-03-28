@extends('frontend.master')
@section('content')
    <style>
        .global_call_section::after
        {
            background: url('{{asset('storage/'.$learnmore->background_image)}}');
            content: "";
            position: absolute;
            height: 250px;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            width: 100%;
            background-color: #cbc4c3;
            top: 16%;
            left: 0px;
            z-index: -1;
        }
        .container .title {
            color: #3c4858;
            text-decoration: none;
            margin-top: 30px;
            margin-bottom: 25px;
            min-height: 32px;
        }

        .container .title h3 {
            font-size: 25px;
            font-weight: 300;
        }

        div.card {
            border: 0;
            margin-bottom: 30px;
            margin-top: 30px;
            border-radius: 6px;
            color: rgba(0, 0, 0, .87);
            background: #fff;
            width: 100%;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
        }

        div.card.card-plain {
            background: transparent;
            box-shadow: none;
        }

        div.card .card-header {
            border-radius: 3px;
            padding: 5px 5px;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: -30px;
            border: 0;
            background: linear-gradient(60deg, #eee, #bdbdbd);
        }

        .card-plain .card-header:not(.card-avatar) {
            margin-left: 0;
            margin-right: 0;
        }

        .div.card .card-body {
            padding: 15px 30px;
        }

        div.card .card-header-primary {
            background: #ae0a46;
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(156, 39, 176, .6);
        }

        div.card .card-header-danger {
            background: linear-gradient(60deg, #ef5350, #d32f2f);
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(244, 67, 54, .6);
        }


        .card-nav-tabs .card-header {
            margin-top: -30px !important;
        }

        .card .card-header .nav-tabs {
            padding: 0;
        }

        .nav-tabs {
            border: 0;
            border-radius: 3px;
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }

        .nav-tabs .nav-item .nav-link.active {
            background-color: hsla(0, 0%, 100%, .2);
            transition: background-color .3s .2s;
        }

        .nav-tabs .nav-item .nav-link {
            border: 0 !important;
            color: #fff !important;
            font-weight: 500;
        }

        .nav-tabs .nav-item .nav-link {
            color: #fff;
            border: 0;
            margin: 0;
            border-radius: 3px;
            line-height: 0px !important;
            text-transform: uppercase;
            font-size: 12px;
            padding: 5px 15px !important;
            background-color: transparent;
        }

        .nav-link {
            display: block;
        }

        .nav-tabs .nav-item .material-icons {
            margin: -1px 5px 0 0;
            vertical-align: middle;
        }

        .nav .nav-item {
            position: relative;
        }

        footer {
            margin-top: 100px;
            color: #555;
            background: #fff;
            padding: 25px;
            font-weight: 300;

        }

        .footer p {
            margin-bottom: 0;
            font-size: 14px;
            margin: 0 0 10px;
            font-weight: 300;
        }

        footer p a {
            color: #555;
            font-weight: 400;
        }

        footer p a:hover {
            color: #9f26aa;
            text-decoration: none;
        }

        .nav-pills-custom .nav-link {
            color: #aaa;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: white !important;
            background: #ae0a46;
        }

        .nav-tabs .nav-item .nav-link {
            color: #fff;
            border: 0;
            margin: 0;
            border-radius: 3px;
            line-height: 24px;
            text-transform: uppercase;
            font-size: 12px;
            padding: 10px 15px !important;
            background-color: transparent;
            transition: background-color .3s 0s;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: white !important;
        }

        .tab-content {
            background: transparent;
            line-height: 25px;
            padding: 0px 0px;
        }

        /* Add indicator arrow for the active tab */
        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: '';
                display: block;
                border-top: 8px solid transparent;
                border-left: 10px solid #ae0a46;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: linear-gradient(
            rgba(0,0,0,0.8),
            rgba(0,0,0,0.8)
            ),url('https://i.pcmag.com/imagery/roundups/02HDufdqeRUDu3tl0NnY2qZ-2..v1649351854.jpg');">
        <div class="container ">
            <h1>Software</h1>
            <p class="text-center text-white">Through our deep partnerships with trusted brands, <br> Insight offers a
                comprehensive catalog of software for business. </p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <button class="common_button2" href="{{route('contact')}}">Talk with our specialist</button>
                    </div>
                    <div class="m-4">
                        <button class="common_button3" href="{{route('shop')}}">Shop all </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--=======// Popular products //======-->
        <section class="popular_product_section section_padding">
            <!-- container -->
            <div class="container">
                <div class="popular_product_section_content">
                    <!-- section title -->
                    <div class="software_feature_title">
                        <h1 class="text-center pb-3">Popular Products</h1>
                    </div>
                    <!-- wrapper -->
                    <div class="populer_product_slider">
                        <!-- product_item -->
                        @foreach ($products as $item)
                            <div class="product_item">
                                <!-- image -->
                                <div class="product_item_thumbnail">
                                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="150px"
                                        height="113px">
                                </div>
                                <!-- product content -->
                                <div class="product_item_content">
                                    <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name"
                                        style="height: 3rem;">{{ Str::limit($item->name, 50) }}</a>
                                    @if ($item->rfq != 1)
                                        <!-- price -->
                                        <div class="product_item_price">
                                            <span class="price_currency">USD</span>
                                            @if (!empty($item->discount))
                                                <span class="price_currency_value"
                                                    style="text-decoration: line-through; color:red">$
                                                    {{ $item->price }}</span>
                                                <span class="price_currency_value" style="color: black">$
                                                    {{ $item->discount }}</span>
                                            @else
                                                <span class="price_currency_value">$ {{ $item->price }}</span>
                                            @endif
                                        </div>
                                        <!-- button --> @php
                                            $cart = Cart::content();
                                            $exist = $cart->where('id', $item->id);
                                            //dd($cart->where('image' , $item->thumbnail )->count());
                                        @endphp
                                        @if ($cart->where('id', $item->id)->count())
                                            {{-- <a href="javascript:void(0);" class="common_button6"> </a> --}}
                                            <span class="common_button6">Already in Cart</span>
                                        @else
                                            <form action="{{ route('add.cart') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" id="product_id"
                                                    value="{{ $item->id }}">
                                                <input type="hidden" name="name" id="name"
                                                    value="{{ $item->name }}">
                                                <input type="hidden" name="qty" id="qty" value="1">
                                                <button type="submit" class="common_button effect01">Add to Basket</button>
                                            </form>
                                        @endif
                                    @else
                                        <div class="product_item_price">
                                            <span class="price_currency_value">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#get_quote_modal_{{ $item->id }}">Ask For Price</a>
                                            </span>
                                        </div>
                                        <a href="{{ route('product.details', $item->slug) }}"
                                            class="common_button effect01">Details</a>
                                    @endif
                                </div>
                            </div>
                            <!-- left modal -->
                            <div class="modal modal_outer fade" id="get_quote_modal_{{ $item->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="myModalLabel2">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">


                                    <div class="modal-content">

                                        <div class="modal-header p-0 m-0 pl-5 pr-3 py-2"
                                            style="background: #ae0a46;color: white;">
                                            <h5 class="modal-title">Get a Quote</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @if (Auth::guard('client')->user())
                                            <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card mx-4">
                                                    <div class="card-body px-4 py-2">
                                                        <div class="row border" style="font-size: 0.8rem;">
                                                            <div class="col-lg-3 pl-2">
                                                                {{ Auth::guard('client')->user()->name }}</div>
                                                            <div class="col-lg-4" style="margin: 5px 0px">
                                                                {{ Auth::guard('client')->user()->email }}</div>
                                                            <div class="col-lg-4" style="margin: 5px 0px">
                                                                {{ Auth::guard('client')->user()->phone }}
                                                                <div class="form-group" id="Rfquser" style="display:none">
                                                                    <input type="text" required="" class="form-control"
                                                                        id="phone" name="phone"
                                                                        value="{{ Auth::guard('client')->user()->phone }}"
                                                                        placeholder="Phone Number" style="font-size: 0.8rem;">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1" style="margin: 5px 0px"><a
                                                                    href="javascript:void(0);" id="editRfquser"><i
                                                                        class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                <input type="hidden" name="client_id"
                                                    value="{{ Auth::guard('client')->user()->id }}">
                                                <input type="hidden" name="client_type" value="client">
                                                <input type="hidden" name="name"
                                                    value="{{ Auth::guard('client')->user()->name }}">
                                                <input type="hidden" name="email"
                                                    value="{{ Auth::guard('client')->user()->email }}">
                                                {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone}}"> --}}
                                                <div class="modal-body get_quote_view_modal_body">


                                                    <div class="form-row">

                                                        <div class="form-group col-sm-4 m-0">

                                                            <input type="text" class="form-control mt-4" id="contact"
                                                                name="company_name"
                                                                value="{{ Auth::guard('client')->user()->company_name }}"
                                                                placeholder="Company Name" style="font-size: 0.7rem;">
                                                        </div>
                                                        <div class="form-group col-sm-4 m-0">

                                                            <input type="number" class="form-control mt-4" id="contact"
                                                                name="qty" placeholder="Quantity"
                                                                style="font-size: 0.7rem;">
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label class="m-0" for="image"
                                                                style="font-size: 0.7rem;">Upload Image</label>
                                                            <input type="file" name="image" class="form-control"
                                                                id="image" accept="image/*" style="font-size: 0.7rem;" />
                                                            <div class="form-text" style="font-size:11px;">Only png, jpg, jpeg
                                                                images</div>

                                                        </div>

                                                        <div class="form-group col-sm-12 border text-white"
                                                            style="background: #7e7d7c">
                                                            <h6 class="text-center pt-1">Product Name : {{ $item->name }}
                                                            </h6>
                                                        </div>

                                                        <div class="form-group col-sm-12">

                                                            <textarea class="form-control" id="message" name="message" rows="1"
                                                                placeholder="Additional Information..."></textarea>
                                                        </div>

                                                        <div class="form-group  col-sm-12 px-3 mx-3">
                                                            <input class="mr-2" type="checkbox" name="call"
                                                                id="call" value="1">
                                                            <label for="call">Also Please Call Me</label>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary col-lg-3"
                                                            id="submit_btn">Submit &nbsp;<i
                                                                class="fa fa-paper-plane"></i></button>
                                                    </div>
                                                </div>

                                            </form>
                                        @elseif (Auth::guard('partner')->user())
                                            <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card mx-4">
                                                    <div class="card-body p-4">
                                                        <div class="row border">
                                                            <div class="col-lg-3 pl-2">Name:
                                                                {{ Auth::guard('partner')->user()->name }}</div>
                                                            <div class="col-lg-4" style="margin: 5px 0px">
                                                                {{ Auth::guard('partner')->user()->primary_email_address }}
                                                            </div>
                                                            <div class="col-lg-4" style="margin: 5px 0px">
                                                                {{ Auth::guard('partner')->user()->company_number }}</div>
                                                            <div class="col-lg-1" style="margin: 5px 0px"><a
                                                                    href="javascript:void(0);" id="editRfqpartner"><i
                                                                        class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                <input type="hidden" name="client_type" value="partner">
                                                <input type="hidden" name="partner_id"
                                                    value="{{ Auth::guard('partner')->user()->id }}">
                                                <input type="hidden" name="name"
                                                    value="{{ Auth::guard('partner')->user()->name }}">
                                                <input type="hidden" name="email"
                                                    value="{{ Auth::guard('partner')->user()->primary_email_address }}">
                                                {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone_number}}"> --}}
                                                <div class="modal-body get_quote_view_modal_body">

                                                    <div class="form-group col-sm-12 border text-white"
                                                        style="background: #7e7d7c">
                                                        <h6 class="text-center pt-1">Product Name : {{ $item->name }}</h6>
                                                    </div>
                                                    <div class="row" id="Rfqpartner" style="display:none">
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" required="" class="form-control"
                                                                id="phone" name="phone"
                                                                value="{{ Auth::guard('partner')->user()->company_number }}"
                                                                placeholder="Company Phone Number">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Company Name </label>
                                                            <input type="text" class="form-control" id="contact"
                                                                name="company_name" required
                                                                value="{{ Auth::guard('partner')->user()->company_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group  col-sm-6">

                                                            <input type="number" class="form-control" id="contact"
                                                                name="qty" placeholder="Quantity">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Upload Image </label>
                                                            <input type="file" name="image" class="form-control"
                                                                id="image" accept="image/*" />
                                                            <div class="form-text" style="font-size:11px;">Accepts only png,
                                                                jpg, jpeg images</div>
                                                        </div>

                                                        <div class="form-group  col-sm-12">
                                                            <textarea class="form-control" id="message" name="message" rows="1" placeholder="Additional Text.."></textarea>
                                                        </div>

                                                        <div class="form-group  col-sm-12 px-3 mx-3">
                                                            <input class="mr-2" type="checkbox" name="call"
                                                                id="call" value="1">
                                                            <label for="call">Also Please Call Me</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-light col-lg-3 mr-auto"
                                                            data-dismiss="modal"><i class="fas fa-window-close mr-2"></i>
                                                            Cancel</button>
                                                        <button type="submit" class="btn btn-primary col-lg-3"
                                                            id="submit_btn">Submit &nbsp;<i
                                                                class="fa fa-paper-plane"></i></button>
                                                    </div>
                                                </div>

                                            </form>
                                        @else
                                            <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                {{-- <input type="hidden" name="client_type" value="random"> --}}
                                                <div class="modal-body get_quote_view_modal_body">
                                                    <div class="form-row">
                                                        <div class="form-group col-sm-12 border text-white"
                                                            style="background: #7e7d7c">
                                                            <h6 class="text-center pt-1">Product Name : {{ $item->name }}
                                                            </h6>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="name">Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" required=""
                                                                id="name" name="name">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="email">Email <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="email" required="" class="form-control"
                                                                id="email" name="email">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Mobile Number <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" required="" class="form-control"
                                                                id="phone" name="phone">
                                                        </div>

                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Company Name </label>
                                                            <input type="text" class="form-control" id="contact"
                                                                name="company_name">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Quantity </label>
                                                            <input type="number" class="form-control" id="contact"
                                                                name="qty">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Custom Image </label>
                                                            <input type="file" name="image" class="form-control"
                                                                id="image" accept="image/*" />
                                                            <div class="form-text" style="font-size:11px;">Accepts only png,
                                                                jpg, jpeg images</div>
                                                        </div>

                                                        <div class="form-group  col-sm-12">
                                                            <label for="message">Type Message</label>
                                                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                                        </div>

                                                        <div class="form-group  col-sm-12 px-3 mx-3">
                                                            <input class="mr-2" type="checkbox" name="call"
                                                                id="call" value="1">
                                                            <label for="call">Also Please Call Me</label>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-light col-lg-3 mr-auto"
                                                            data-dismiss="modal"><i class="fas fa-window-close mr-2"></i>
                                                            Cancel</button>
                                                        <button type="submit" class="btn btn-primary col-lg-3"
                                                            id="submit_btn">Submit &nbsp;<i
                                                                class="fa fa-paper-plane"></i></button>
                                                    </div>
                                                </div>

                                            </form>
                                        @endif

                                    </div><!-- //modal-content -->

                                </div><!-- modal-dialog -->
                            </div>
                            <!-- modal -->
                        @endforeach
                        <!-- product item -->
                    </div>
                </div>
            </div>
        </section>
    <!---------End -------->
    <!--======// Feature tab //======-->
    {{-- <section>
        <div class="container">
            <div class="row">
                <!-- first Card -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="iconbox">
                        <div class="iconbox-icon">
                            <img src="https://www.logodesign.net/images/nature-logo.png" alt="">
                        </div>
                        <div class="featureinfo">
                            <h4 class="text-center">Business <br> applications </h4>

                            <div class="text-center">
                                <div class="buttons_style">
                                    <div class="container_btn">
                                        <a href="index.html" class="btns effect01" target="_blank">
                                            <span>Go</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second Card -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="iconbox">
                        <div class="iconbox-icon">
                            <img src="https://www.logodesign.net/images/nature-logo.png" alt="">
                        </div>
                        <div class="featureinfo">
                            <h4 class="text-center">Cloud <br> field services </h4>

                            <div class="text-center">
                                <div class="buttons_style">
                                    <div class="container_btn">
                                        <a href="index.html" class="btns effect01" target="_blank">
                                            <span>Go</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Third Card -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="iconbox">
                        <div class="iconbox-icon">
                            <img src="https://www.logodesign.net/images/nature-logo.png" alt="">
                        </div>
                        <div class="featureinfo">
                            <h4 class="text-center">Communication <br> software </h4>

                            <div class="text-center">
                                <div class="buttons_style">
                                    <div class="container_btn">
                                        <a href="index.html" class="btns effect01" target="_blank">
                                            <span>Go</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fouth Card -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="iconbox">
                        <div class="iconbox-icon">
                            <img src="https://www.logodesign.net/images/nature-logo.png" alt="">
                        </div>
                        <div class="featureinfo">
                            <h4 class="text-center">Graphics <br> & design </h4>

                            <div class="text-center">
                                <div class="buttons_style">
                                    <div class="container_btn">
                                        <a href="index.html" class="btns effect01" target="_blank">
                                            <span>Go</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!----------End--------->

    <!--======// Nasted tab //======-->
    <div class="container">
        <div class="nasted_tabbar_title py-3">
            <h5>Category and Software Products List</h5>
            <p class="home_title_text">Explore our Software related products, categories and brands</p>
        </div>
        <div class="row w-75 mx-auto">
            <div class="col-md-12">
                <!-- Tabs with icons on Card -->
                <div class="card card-nav-tabs">
                    <div class="card-header card-header-primary">
                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs d-flex justify-content-between" data-tabs="tabs">
                                    <li class="nav-item ml-2">
                                        <a class="nav-link active" href="#categories" data-toggle="tab">

                                            Categories
                                        </a>
                                    </li>
                                    <li class="nav-item ml-2">
                                        <a class="nav-link" href="#brand" data-toggle="tab">

                                            Brand
                                        </a>
                                    </li>
                                    <li class="nav-item ml-2">
                                        <a class="nav-link" href="#industry" data-toggle="tab">

                                            Industry
                                        </a>
                                    </li>
                                    <li class="nav-item ml-2">
                                        <a class="nav-link" href="#solution" data-toggle="tab">

                                            Solution
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="categories">
                                {{-- Categories Sub Tab --}}
                                <section class="">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <!-- Tabs nav -->
                                                @php
                                                    $cat_products =[];
                                                    foreach($categories as $item) {
                                                        foreach($item->subitems as $subitem) {
                                                        $subitems[$subitem->id] = $subitem;
                                                        }
                                                    }
                                                @endphp
                                                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    @foreach ($categories as $item)
                                                        <a class="nav-link mb-1 p-1 shadow " id="v-pills-home-tab"
                                                            data-toggle="pill" href="#category-{{$item->id}}" role="tab"
                                                            aria-controls="v-pills-home" aria-selected="true">

                                                            <span class="font-weight-bold small text-uppercase">{{$item->title}}
                                                                </span>
                                                        </a>
                                                    @endforeach

                                                    </div>
                                            </div>


                                            <div class="col-md-9 p-0">
                                                <!-- Tabs content -->
                                                <div class="tab-content p-0" id="v-pills-tabContent">
                                                    @foreach ($categories as $item)
                                                        @php
                                                        $products = App\Models\Admin\Product::where('sub_cat_id',$item->id)->select('products.name','products.slug','products.price')->get();
                                                        @endphp
                                                    @endforeach
                                                    <div class="tab-pane fade shadow rounded bg-white show active p-2 mr-2"
                                                        id="category-{{$item->id}}" role="tabpanel" aria-labelledby="v-pills-home-tab">

                                                        <div class="panel">
                                                            <div class="panel-heading">
                                                                <div
                                                                    class="row p-0 d-flex justify-content-center align-items-center">
                                                                    <div class="col-lg-9">
                                                                        <h4 class="">Product List For Softwares</h4>
                                                                    </div>
                                                                    <div class="col-lg-3 text-right">
                                                                        <form action=" ">
                                                                            <div class="btn_group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Search">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                                <div class="panel-body table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Sl</th>
                                                                                <th>Product Name</th>
                                                                                <th>Price</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            @foreach ($products as $key=>$item)
                                                                                <tr>
                                                                                    <td>{{++$key}}</td>
                                                                                    <td>{{$item->name}}</td>
                                                                                    <td>{{$item->price}}</td>
                                                                                </tr>
                                                                            @endforeach

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane" id="brand">
                                {{-- Brand Sub Tab --}}
                                <section class="py-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <!-- Tabs nav -->
                                                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    @foreach ($brands as $item)
                                                        <a class="nav-link mb-1 p-1 shadow " id="v-pills-home-tab"
                                                            data-toggle="pill" href="#category-1" role="tab"
                                                            aria-controls="v-pills-home" aria-selected="true">

                                                            <span class="font-weight-bold small text-uppercase">{{$item->title}}
                                                                </span>
                                                        </a>
                                                    @endforeach

                                                </div>
                                            </div>


                                            <div class="col-md-9 p-0">
                                                <!-- Tabs content -->
                                                <div class="tab-content p-0" id="v-pills-tabContent">
                                                    <div class="tab-pane fade shadow rounded bg-white show active p-2 mr-2"
                                                        id="brand-1" role="tabpanel"
                                                        aria-labelledby="v-pills-home-tab">
                                                        <p class="text-muted mb-2"></p>
                                                    </div>

                                                    <div class="tab-pane fade shadow rounded bg-white p-5 mr-2"
                                                        id="brand-2" role="tabpanel"
                                                        aria-labelledby="v-pills-profile-tab">
                                                        <p class="text-muted mb-2">brand-2 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>

                                                    <div class="tab-pane fade shadow rounded bg-white p-5 mr-2"
                                                        id="brand-3" role="tabpanel"
                                                        aria-labelledby="v-pills-messages-tab">
                                                        <p class="text-muted mb-2">brand-3 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>

                                                    <div class="tab-pane fade shadow rounded bg-white p-5 mr-2"
                                                        id="brand-4" role="tabpanel"
                                                        aria-labelledby="v-pills-settings-tab">
                                                        <p class="text-muted mb-2">brand-4 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane" id="industry">
                                {{-- Industry Sub Tab --}}
                                <section class="py-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <!-- Tabs nav -->
                                                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link mb-1 p-1 shadow active" id="v-pills-home-tab"
                                                        data-toggle="pill" href="#industry-1" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">

                                                        <span class="font-weight-bold small text-uppercase">Industry
                                                            1</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-profile-tab"
                                                        data-toggle="pill" href="#industry-2" role="tab"
                                                        aria-controls="v-pills-profile" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Industry
                                                            2</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-messages-tab"
                                                        data-toggle="pill" href="#industry-3" role="tab"
                                                        aria-controls="v-pills-messages" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Industry
                                                            3</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#industry-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Industry
                                                            4</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#industry-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Industry
                                                            5</span></a>
                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#industry-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Industry
                                                            6</span></a>
                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#industry-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Industry
                                                            7</span></a>
                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#industry-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Industry
                                                            8</span></a>


                                                </div>
                                            </div>


                                            <div class="col-md-9 p-0">
                                                <!-- Tabs content -->
                                                <div class="tab-content p-0" id="v-pills-tabContent">
                                                    <div class="tab-pane fade shadow rounded bg-white show active p-2 mr-2"
                                                        id="industry-1" role="tabpanel"
                                                        aria-labelledby="v-pills-home-tab">
                                                        <p class=" text-muted mb-2">industry -1 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>

                                                    <div class="tab-pane fade shadow rounded bg-white p-5 mr-2"
                                                        id="industry-2" role="tabpanel"
                                                        aria-labelledby="v-pills-profile-tab">
                                                        <p class=" text-muted mb-2">industry-2 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>

                                                    <div class="tab-pane fade shadow rounded bg-white p-5 mr-2"
                                                        id="industry-3" role="tabpanel"
                                                        aria-labelledby="v-pills-messages-tab">
                                                        <p class=" text-muted mb-2">industry-3 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>

                                                    <div class="tab-pane fade shadow rounded bg-white p-5 mr-2"
                                                        id="industry-4" role="tabpanel"
                                                        aria-labelledby="v-pills-settings-tab">
                                                        <p class=" text-muted mb-2">industry-4 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane" id="solution">
                                {{-- Solution Sub Tab --}}
                                <section class="py-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <!-- Tabs nav -->
                                                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link mb-1 p-1 shadow active" id="v-pills-home-tab"
                                                        data-toggle="pill" href="#solution-1" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true">

                                                        <span class="font-weight-bold small text-uppercase">Solution
                                                            1</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-profile-tab"
                                                        data-toggle="pill" href="#solution-2" role="tab"
                                                        aria-controls="v-pills-profile" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Solution
                                                            2</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-messages-tab"
                                                        data-toggle="pill" href="#solution-3" role="tab"
                                                        aria-controls="v-pills-messages" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Solution
                                                            3</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#solution-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Solution
                                                            4</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#solution-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Solution
                                                            5</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#solution-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Solution
                                                            6</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#solution-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Solution
                                                            7</span></a>

                                                    <a class="nav-link mb-1 p-1 shadow" id="v-pills-settings-tab"
                                                        data-toggle="pill" href="#solution-4" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false">

                                                        <span class="font-weight-bold small text-uppercase">Solution
                                                            8</span></a>
                                                </div>
                                            </div>


                                            <div class="col-md-9 p-0">
                                                <!-- Tabs content -->
                                                <div class="tab-content p-0" id="v-pills-tabContent">
                                                    <div class="tab-pane fade shadow rounded bg-white show active p-2 mr-2"
                                                        id="solution-1" role="tabpanel"
                                                        aria-labelledby="v-pills-home-tab">
                                                        <p class=" text-muted mb-2">solution -1 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>

                                                    <div class="tab-pane fade shadow rounded bg-white p-5 mr-2"
                                                        id="solution-2" role="tabpanel"
                                                        aria-labelledby="v-pills-profile-tab">
                                                        <p class=" text-muted mb-2">solution-2 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>

                                                    <div class="tab-pane fade shadow rounded bg-white p-5 mr-2"
                                                        id="solution-3" role="tabpanel"
                                                        aria-labelledby="v-pills-messages-tab">
                                                        <p class="text-muted mb-2">solution-3 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>

                                                    <div class="tab-pane fade shadow rounded bg-white p-5 mr-2"
                                                        id="solution-4" role="tabpanel"
                                                        aria-labelledby="v-pills-settings-tab">
                                                        <p class="text-muted mb-2">solution-4 Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat. Duis aute irure dolor in reprehenderit in
                                                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia deserunt mollit anim id est laborum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tabs with icons on Card -->
            </div>
        </div>
    </div>





    <section class="container mt-3 mb-5">
        <div class="software_feature_title pb-5">
            <h1 class="text-center ">Our Expertise</h1>
        </div>
        <div class="row d-flex justify-content-start align-items-center">
            <div class="col-lg-6 col-sm-6">
                <iframe allow="autoplay; fullscreen; picture-in-picture; camera; microphone; display-capture"
                    allowfullscreen="" allowtransparency="true" referrerpolicy="no-referrer-when-downgrade"
                    class="vidyard-iframe-W5NGDbKxgaZQQsSm1eaazn" frameborder="0" height="100%" width="100%"
                    scrolling="no"
                    src="https://play.vidyard.com/W5NGDbKxgaZQQsSm1eaazn?disable_popouts=1&amp;v=4.3.10&amp;type=inline"
                    title="Be Ambitious"
                    style="opacity: 1; background-color: transparent; height: 300px; max-width: 100%;"></iframe>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="home_title">
                    <h5 class="home_title_heading" style="text-align: left;"> Areas of expertise </h5>
                    <p class="home_title_text" style="text-align: left;">We’ll help you navigate today’s ever-changing
                        business environment with teams of technical experts and decades of industry experience.</p>
                    <div class="business_seftion_button d-flex justify-content-start">
                        <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->
    <!--======// our clint tab //======-->
    <section class="clint_tab_section">
        <div class="container">
            <div class="clint_tab_content pb-3">
                <!-- home title -->
                <div class="home_title mt-3">
                    <div class="software_feature_title">
                        <h1 class="text-center ">Contents</h1>
                    </div>
                    <p class="home_title_text">See how we’ve helped organizations of all sizes <span
                            class="font-weight-bold">across every industry</span>
                        <br> maximize the value of their IT solutions, leverage emerging technologies and create fresh
                        experiences.
                    </p>
                </div>
                <!-- Client Tab Start -->
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab"
                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                    aria-selected="true">{{$story1->badge}}</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">{{$story2->badge}}</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">{{$story3->badge}}</a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                    role="tab" aria-controls="nav-about" aria-selected="false">{{$story4->badge}}</a>
                            </div>
                        </nav>
                        @php
                        $tags_1=explode(',',$story1->tags);
                        $tags_2=explode(',',$story2->tags);
                        $tags_3=explode(',',$story3->tags);
                        $tags_4=explode(',',$story4->tags);

                        @endphp
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-healthcare">
                                <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="tab_side_image">
                                    <img src="{{ asset('storage/' . $story1->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <h5 class="home_title_heading" style="text-align: left;">{{$story1->title}} </h5>
                                    <p>{{$story1->header}}</p>
                                    <div class="home_card_button p-2">
                                        <a class="effect01" href="{{route('blog.details',$story1->id)}}">Read more</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="tab_side_image">
                                        <img src="{{ asset('storage/' . $story2->image) }}" alt="">
                                    </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                    <h5 class="home_title_heading" style="text-align: left;">{{$story2->title}} </h5>
                                    <p>{{$story2->header}}</p>
                                    <div class="home_card_button p-2">
                                        <a class="effect01" href="{{route('blog.details',$story2->id)}}">Read more</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="tab_side_image">
                                        <img src="{{ asset('storage/' . $story3->image) }}" alt="">
                                    </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                    <h5 class="home_title_heading" style="text-align: left;">{{$story3->title}} </h5>
                                    <p>{{$story3->header}}</p>
                                    <div class="home_card_button p-2">
                                        <a class="effect01" href="{{route('story.details',$story3->id)}}">Read more</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="tab_side_image">
                                        <img src="{{ asset('storage/' . $story4->image) }}" alt="">
                                    </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                    <h5 class="home_title_heading" style="text-align: left;">{{$story4->title}} </h5>
                                    <p>{{$story4->header}}</p>
                                    <div class="home_card_button p-2">
                                        <a class="effect01" href="{{route('story.details',$story4->id)}}">Read more</a>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Client Tab End -->
            </div>
        </div>
    </section>
    <!---------End -------->
    <!--=====// Global call section //=====-->
    <section class="global_call_section section_padding">
        <div class="container">
          <!-- content -->
          @php
            $sentence = $learnmore->consult_title;
          @endphp
          <div class="global_call_section_content">
            <div class="home_title" style="width: 100%; margin: 0px;">
              <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                <span>{{\Illuminate\Support\Str::substr($sentence, 0, 1)}}</span>{{ \Illuminate\Support\Str::substr($sentence, 1) }}

              </h5>
              <p class="home_title_text text-white" style="text-align: left;">{{$learnmore->consult_short_des}}</p>
              <div class="business_seftion_button" style="text-align: left;">
                <a href="#Contact">Explore business outcomes</a>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!---------End -------->
    <!--=====// Tech solution //=====-->
    <div class="section_wp2">
        <div class="container">
            <div class="solution_number_wrapper">
                <!-- title -->
                <h5 class="home_title_heading" style="text-align: left;">
                    <div class="software_feature_title">
                        <h1 class="text-center pb-3">
                            <span>T</span>echnology Solutions
                        </h1>
                    </div>
                </h5>
            </div>
            <!-- tech wrapper -->
            <div class="row">
                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="tech_solution_item">
                        <p class="tech_solution_title">33k+</p>
                        <p class="tech_solution_text">hardware, software & cloud partners</p>
                        <p class="tech_solution_award">Awarded in 2021</p>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="tech_solution_item">
                        <p class="tech_solution_title">44k+</p>
                        <p class="tech_solution_text">Insight teammates worldwide</p>
                        <p class="tech_solution_award">Awarded in 2021</p>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="tech_solution_item">
                        <p class="tech_solution_title">7.5k+</p>
                        <p class="tech_solution_text">sales & service delivery professionals</p>
                        <p class="tech_solution_award">Awarded in 2021</p>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="tech_solution_item">
                        <p class="tech_solution_title">19</p>
                        <p class="tech_solution_text">countries with Insight operations</p>
                        <p class="tech_solution_award">Awarded in 2021</p>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="tech_solution_item">
                        <p class="tech_solution_title">Top 1%</p>
                        <p class="tech_solution_text">Insight is in the top 1% of all Microsoft partners</p>
                        <p class="tech_solution_award">Awarded in 2021</p>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="tech_solution_item">
                        <p class="tech_solution_title">#1</p>
                        <p class="tech_solution_text">on the Channel Futures MSP 501</p>
                        <p class="tech_solution_award">Awarded in 2021</p>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="tech_solution_item">
                        <p class="tech_solution_title">#7</p>
                        <p class="tech_solution_text">on Fortune World’s Most Admired Companies for IT services</p>
                        <p class="tech_solution_award">Awarded in 2021</p>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-3 col-sm-6">
                    <div class="tech_solution_item">
                        <p class="tech_solution_title">#373</p>
                        <p class="tech_solution_text">on the Fortune 500</p>
                        <p class="tech_solution_award">Awarded in 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------End -------->
    <!--=====// We serve //=====-->
    <div class="container pb-5">
        <!-- section title -->
        <div class="clint_help_section_heading_wrapper">
          <!-- title -->
          <h5 class="home_title_heading" style="text-align: left;">
            <h5 class="home_title_heading" style="text-align: left;">
              <div class="software_feature_title">
                <h1 class="text-center pt-4 pb-4">
                   Industries We Serve
                </h1>
              </div>
            </h5>
            <p class="home_title_text">
              <span class="font-weight-bold">{{$learnmore->industry_header}} </span>
            </p>
        </div>
        <!-- section content wrapper -->
        <div class="row mb-4">
          <!-- content -->
          <div class="col-lg-9 col-sm-12">
            <!-- we_serveItem_wrapper -->
            <div class="row">
              <!-- item -->

              @if ($industrys)
                @foreach ($industrys as $item)
                    <div class="col-lg-3 col-sm-6">
                      <a href="{{route('industry.details',$item->id)}}" class="we_serve_item">
                        <div class="we_serve_item_image">
                          <img src="{{asset('storage/'.$item->logo)}}" alt="">
                        </div>
                        <div class="we_serve_item_text">{{$item->title}}</div>
                      </a>
                    </div>
                @endforeach
              @endif

            </div>
          </div>
          <!-- sidebar -->
          <div class="col-lg-3 col-sm-12">
            <div class="we_serve_title">
              <p>Private sector</p>
            </div>
            <!-- sidebar list -->
            <div>
                @if ($random_industries)
                    @foreach ($random_industries as $item)
                        <div class="pt-2">
                            <a href="{{route('industry.details',$item->id)}}">
                                <div id="fed-bg">
                                    <div class="p-2">
                                        <h5 class="text-white brand_side_text">{{$item->title}} ›</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
          </div>
        </div>
      </div>
      <!---------End -------->
    <!---------End -------->
    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection








