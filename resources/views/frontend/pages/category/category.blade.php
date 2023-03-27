@extends('frontend.master')
@section('content')

    <style>
        .common_button3 {
            padding: 5px 22px;
            cursor: pointer;
            font-family: "Allumi Std Extended";
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            display: inline-block;
            background-color: #fff;
            color: #ae0a46;
            transition: 0.3s;
            outline: none;
            border: none;
        }

        .word {
            position: absolute;
            opacity: 0;
            font-size: 38px;
        }

        .letter {
            display: inline-block;
            position: relative;
            float: left;
            transform: translateZ(25px);
            transform-origin: 50% 50% 25px;
            font-weight: 400 !important;
        }

        .letter.out {
            transform: rotateX(90deg);
            transition: transform 0.32s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            font-weight: 400 !important;
        }

        .letter.behind {
            transform: rotateX(-90deg);
            font-weight: 400 !important;
        }

        .letter.in {
            transform: rotateX(0deg);
            transition: transform 0.38s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            font-weight: 400 !important;
        }

        .wisteria {
            color: #ae0a46;
        }

        .belize {
            color: #ae0a46;
        }

        .pomegranate {
            color: #ae0a46;
        }

        .green {
            color: #ae0a46;
        }

        .midnight {
            color: #ae0a46;
        }

        .normal_text {
            font-size: 60px !important;
            line-height: 72px;
            vertical-align: baseline;
            letter-spacing: normal;
            font-weight: 300 !important;
        }

        .animated_text {
            font-size: 60px !important;
            line-height: 72px;
            vertical-align: baseline;
            letter-spacing: normal;
            font-weight: 400 !important;
        }

        /* Extra Section */
        .ag-format-container {
            width: 1142px;
            margin: 0 auto;
        }


        .ag-offer-block {
            padding: 35px 0 20px
        }

        .ag-offer_list {
            padding: 0px;
            margin: 0px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -moz-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .ag-offer_item {
            width: 100%;
            overflow: hidden;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            position: relative;
        }

        /* .ag-offer_item:not(:nth-child(1)):not(:nth-child(2)):not(:nth-child(3)) {
                border-top: 1px solid #ae0a46;
            }

            .ag-offer_item:not(:nth-child(3n)) {
                border-right: 1px solid #ae0a46;
            } */

        .ag-offer_item:nth-child(1) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(2) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(3) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(4) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(5) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(6) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:hover .ag-offer_visible-item {
            opacity: 0;

            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);

            -webkit-transition-delay: 0s;
            -moz-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }

        .ag-offer_visible-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;

            height: 100%;
            width: 100%;
            /* padding: 10px 20px; */

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            -webkit-transition: .4s .3s;
            -moz-transition: .4s .3s;
            -o-transition: .4s .3s;
            transition: .4s .3s;
        }

        .ag-offer_img {
            height: 150px;
            width: 150px;
            margin: 0 0px 0 0;
        }

        .ag-offer_title {
            font-size: 15px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .ag-offer_hidden-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;

            padding: 30px;

            opacity: 0;

            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;

            -webkit-transform: rotate(180deg) scale(0);
            -moz-transform: rotate(180deg) scale(0);
            -ms-transform: rotate(180deg) scale(0);
            -o-transform: rotate(180deg) scale(0);
            transform: rotate(180deg) scale(0);

            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }

        .ag-offer_item:hover .ag-offer_hidden-item {
            opacity: 1;

            -webkit-transform: rotate(0deg) scale(1);
            -moz-transform: rotate(0deg) scale(1);
            -ms-transform: rotate(0deg) scale(1);
            -o-transform: rotate(0deg) scale(1);
            transform: rotate(0deg) scale(1);

            -webkit-transition-delay: .3s;
            -moz-transition-delay: .3s;
            -o-transition-delay: .3s;
            transition-delay: .3s;
        }

        .ag-offer_text {
            max-width: 100%;

            opacity: 0;

            font-size: 14px;
            color: #FFF;

            -webkit-transition: .3s .5s;
            -moz-transition: .3s .5s;
            -o-transition: .3s .5s;
            transition: .3s .5s;
        }

        .ag-offer_item:hover .ag-offer_text {
            opacity: 1;
        }

        .ag-offer_btn {
            display: block;
            padding: 10px 20px;
            border: 2px solid #FFF;

            position: absolute;
            top: 50%;
            left: 50%;

            white-space: nowrap;
            font-size: 25px;
            color: #FFF;

            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;

            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .ag-offer_btn:hover {
            border: 2px solid #0000d1;
            background-color: #FFF;

            text-decoration: none;
            color: #0000d1;
        }

        /*  */
        .box {
            font-family: 'Mandali', sans-serif;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        .box:before,
        .box:after {
            content: "";
            background: rgba(11, 11, 12, 0.85);
            width: 200%;
            height: 200%;
            opacity: .75;
            transform: skew(45deg) translateX(100%);
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: 1;
            transition: all .6s ease;
        }

        .box:after {
            transform: skew(45deg) translateX(-100%);
            top: 0;
            left: 0;
            right: auto;
            bottom: auto;
            z-index: 0;
        }

        .box:hover:before,
        .box:hover:after {
            transform: skew(45deg) translateX(0);
        }

        .box img {
            width: 100%;
            height: auto;
            transition: all 0.35s;
        }

        .box:hover img {
            opacity: 0.5;
        }

        .box-content {
            color: #fff;
            width: 85%;
            opacity: 0;
            transform: translateX(-50%) translateY(-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            transition: all 0.6s ease;
        }

        .box:hover .box-content {
            opacity: 1;
        }

        .box .title {
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin: 0 0 3px;
        }

        .box .post {
            font-size: 14px;
            font-weight: 200;
            letter-spacing: 1px;
            text-transform: capitalize;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin: 0 0 10px;
            display: block;
        }

        .box .icon {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .box .icon li {
            margin: 0 3px;
            display: inline-block;
        }

        .box .icon li a {
            color: #EA2027;
            background: #fff;
            font-size: 16px;
            line-height: 34px;
            width: 34px;
            height: 34px;
            display: block;
            transition: all 0.35s;
        }

        .box .icon li a:hover {
            color: #fff;
            background: #EA2027;
        }

        .borders_right {
            border-right: 1px solid !important;
        }

        @media only screen and (max-width:990px) {
            .box {
                margin: 0 0 30px;
            }
        }


        /*  */
        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }

            .ag-offer_item {
                width: 100%;
                margin: 0 0 30px;
                border: 0 none !important;
                border-bottom: 1px solid #c1c1c1 !important;
            }

            .ag-offer_visible-item {
                padding: 0 20px 30px;

                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -moz-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .ag-offer_item:hover .ag-offer_visible-item {
                opacity: 1;

                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }

            .ag-offer_hidden-item {
                padding: 0 20px 20px;

                opacity: 1;

                position: static;

                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }

            .ag-offer_item:nth-child(1) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(2) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(3) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(4) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(5) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(6) .ag-offer_hidden-item {
                background-color: transparent;
            }

            .ag-offer_item:hover .ag-offer_text {
                opacity: 1;
            }

            .ag-offer_title {
                font-weight: bold;
            }

            .ag-offer_text {
                opacity: 1;

                font-size: 18px;
                color: #000;
            }

            .ag-offer_btn {
                border: 2px solid #0000d1;
                background-color: #000080;

                position: static;

                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }

        }

        @media only screen and (max-width: 639px) {}

        @media only screen and (max-width: 479px) {}

        @media (min-width: 768px) and (max-width: 979px) {
            .ag-format-container {
                width: 750px;
            }

        }

        @media (min-width: 980px) and (max-width: 1161px) {
            .ag-format-container {
                width: 960px;
            }

        }
    </style>
    <!-- banner single page start -->
    <section class="banner_single_page"
        style="background-image:url('{{ asset('storage/' . $category->image) }}');

        background-position: left;
        background-repeat: no-repeat;
        background-size: contain;
        background-color: black;
        height: 200px;">

        <div class="container">
            <div class="single_banner_content">
                <!-- image -->
                <div class="single_banner_image">
                    <img src="" alt="">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading text-center text-white">{{ $category->title }}</h1>
                {{-- <p class="single_banner_text">{{ $data->h2 }}</p> --}}
                <div class="single_buttton_wrapper text-center mb-2">
                    <a href="{{ route('custom.product', $category->slug) }}" class="common_button2">Browse all
                        {{ $category->title }}</a>

                </div>
            </div>
        </div>
    </section>

    <!---Products Section-->

    @if (!empty($products))
        <section class="container">
            <div class="tech_deals_section_content" id="tech_deal">
                <!-- section title -->
                <div class="tech_deals_featured_item_title">
                    <h3>Featured Products for {{ $category->title }}</h3>
                    {{-- <p>Discover our latest discounts and limited-time offers on the technology brands and devices your business trusts.</p> --}}
                </div>
                <!-- wrapper -->
                <div class="row">
                    <!-- product_item -->


                    @foreach ($products as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product_item">
                                <!-- image -->
                                <div class="product_item_thumbnail">
                                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="150px"
                                        height="113px">
                                </div>
                                <!-- product content -->
                                <div class="product_item_content">
                                    <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name"
                                        style="height: 3.2rem !important;">{{ Str::limit($item->name, 50) }}</a>
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
                                                <a href="javascript:void(0);" data-toggle="modal"
                                                    data-target="#get_quote_modal_{{ $item->id }}">Ask For Price</a>
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

                                        <div class="modal-header p-0 m-0 py-2 px-3"
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
                                                                    <input type="text" required=""
                                                                        class="form-control" id="phone" name="phone"
                                                                        value="{{ Auth::guard('client')->user()->phone }}"
                                                                        placeholder="Phone Number"
                                                                        style="font-size: 0.8rem;">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1" style="margin: 5px 0px"><a
                                                                    href="javascript:void(0);" id="editRfquser"><i
                                                                        class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            </div>
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

                                                            <input type="text" class="form-control mt-4"
                                                                id="contact" name="company_name"
                                                                value="{{ Auth::guard('client')->user()->company_name }}"
                                                                placeholder="Company Name" style="font-size: 0.7rem;">
                                                        </div>
                                                        <div class="form-group col-sm-4 m-0">

                                                            <input type="number" class="form-control mt-4"
                                                                id="contact" name="qty" placeholder="Quantity"
                                                                style="font-size: 0.7rem;">
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label class="m-0" for="image"
                                                                style="font-size: 0.7rem;">Upload Image</label>
                                                            <input type="file" name="image" class="form-control"
                                                                id="image" accept="image/*"
                                                                style="font-size: 0.7rem;" />
                                                            <div class="form-text" style="font-size:11px;">Only png, jpg,
                                                                jpeg
                                                                images</div>

                                                        </div>

                                                        <div class="form-group col-sm-12 border text-white"
                                                            style="background: #7e7d7c">
                                                            <h6 class="text-center pt-1 text-white">Product Name :
                                                                {{ $item->name }}
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
                                                                        class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            </div>
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
                                                        <h6 class="text-center pt-1 text-white">Product Name : {{ $item->name }}
                                                        </h6>
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
                                                            <div class="form-text" style="font-size:11px;">Accepts only
                                                                png,
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
                                                            <h6 class="text-center pt-1 text-white">Product Name :
                                                                {{ $item->name }}
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
                                                            <div class="form-text" style="font-size:11px;">Accepts only
                                                                png,
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

                        </div>
                    @endforeach


                </div>
            </div>
            <!------------------Pagination------------------->
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{ $products->links() }}
                    </ul>

                </nav>
            </div>
        </section><br>

    @endif
    <!---Products Section-->


    <!-- network cable -->


    @if (!empty($sub_cats))
    <section>
        <div class="ag-offer-block container">
            <div class="common_product_item_title">
                <h3>Display Sub Categories for {{ $category->title }}</h3>
            </div>
            <div class="ag-format-container row">
                @foreach ($sub_cats as $key => $item)
                <div class="ag-offer_list col-lg-2 col-md-2 col-sm-12">
                    <div class="ag-offer_item" style="border: 1px dashed rgb(179, 179, 179); margin: 0.15rem!important;">
                        <div class="ag-offer_visible-item">
                            <div class="ag-offer_img-box">
                                <img src="{{ asset('storage/' . $item->image) }}" class="ag-offer_img"
                                    alt="" width="100px" height="100px" />
                            </div>
                            <div class="ag-offer_title">
                                <p>{{ Str::limit($item->title, 15) }}</p>
                            </div>
                        </div>
                        <div class="ag-offer_hidden-item">
                            <div class="mx-auto">
                                <a href="{{ route('category.html', $item->slug) }}" class="common_button3">
                                    Shop
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @if (!empty($sub_sub_cats))
                    @foreach ($sub_sub_cats as $key => $item)
                        <div class="ag-offer_list col-lg-2 col-md-2 col-sm-12">
                            <div class="ag-offer_item" style="border: 1px dashed rgb(179, 179, 179); margin: 0.15rem!important;">
                                <div class="ag-offer_visible-item">
                                    <div class="ag-offer_img-box">
                                        <img src="{{ asset('storage/' . $item->image) }}" class="ag-offer_img"
                                            alt="" style="height:80px !important;width:80px !important;" />
                                    </div>
                                    <div class="ag-offer_title">
                                        <p>{{ Str::limit($item->title, 15) }}</p>
                                    </div>
                                </div>
                                <div class="ag-offer_hidden-item">
                                    <div class="mx-auto">
                                        <a href="{{ route('category.html', $item->slug) }}" class="common_button3">
                                            Shop
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    @endif

    <!--======// Top Brand //=====-->
    @if (!empty($brands))
    <section>
        <div class="ag-offer-block container">
            <div class="common_product_item_title">
                <h3>Related Brands for {{ $category->title }}</h3>
            </div>
            <div class="ag-format-container row">
                @foreach ($brands as $key => $item)
                <div class="ag-offer_list col-lg-2 col-md-2 col-sm-4">
                    <div class="ag-offer_item" style="border: 1px dashed rgb(179, 179, 179); margin: 0.15rem!important;">
                        <div class="ag-offer_visible-item">
                            <div class="ag-offer_img-box d-felx justify-content-center mx-auto">
                                <img src="{{ asset('storage/' . $item->image) }}" class="ag-offer_img"  alt="{{ $item->title }}" width="150px"
                                    height="150px" />
                            </div>
                        </div>
                        <div class="ag-offer_hidden-item">
                            <div class="mx-auto">
                                <a href="{{ !empty($item->slug) ? route('custom.product', $item->slug) : route('all.brand') }}" class="common_button3">
                                    Shop
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <!----------End--------->



@endsection
