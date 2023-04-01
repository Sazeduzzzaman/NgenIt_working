@extends('frontend.master')
@section('content')

    <style>
        .common_button2 {
            padding: 15px 20px;
            cursor: pointer;
            font-family: "Allumi Std Extended";
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            display: inline-block;
            background-color: var(--crimson);
            transition: 0.3s;
            outline: none;
            border: none;
            color: white !important;
        }

        p {
            font-family: "Allumi Std Extended" !important;
            font-size: 16px;
            line-height: 30px;
            color: var(--navColor);
        }

        .software_chose_item_title {
            color: #ae0a46;
            font-size: 18px;
            font-weight: 300;
            line-height: 32px;
            padding-bottom: 10px;
            margin: 4px 0px;
            text-align: center;
        }

        .software_chose_item {
            background-color: var(--primaryColor);
            padding: 15px;
            border: 0px solid #d4d0ca;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-top: 10px solid #ae0a46;
            cursor: context-menu;
        }

        .software_chose_item_text {
            font-size: 16px;
            line-height: 24px;
            color: var(--navColor);
            margin-bottom: 30px;
            text-align: center;
            font-weight: 300;
        }

        .section_title {
            /* font-family: cambian; */
            font-family: "Allumi Std Extended";
            opacity: none;
            font-size: 29px;
            font-weight: 500;
            text-align: center;
        }

    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background:url('{{asset('storage/'.$brandpage->banner_image)}}');">
        <div class="container ">
            <div class="d-flex justify-content-center">
                <a href=""><img src="{{asset('storage/'.$brandpage->brand_logo)}}" alt=""
                        width="200px" height="80px"></a>
            </div>
            <h1>Shop for {{ $brand->title }}</h1>
            <p class="text-center text-white">{{ $brandpage->header }}</p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{route('contact')}}">Talk to a specialist</a>
                    </div>
                    <div class="m-4">
                        <a class="common_button3"
                            href="{{ !empty($brand->slug) ? route('custom.product',$brand->slug) : route('all.brand') }}">Shop
                            all {{ $brand->title }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->



    <!--======// Solution feature 1//======-->
    @if (!empty($row_one))
        <section class="my-5 pb-4">
            <div class="container">
                <div class="row d-flex justify-content-center my-3">
                    <div class="col-lg-6 col-sm-12 ">
                        <h4>{{ $row_one->title }}</h4>
                        <p class="text-justify">{!! $row_one->description !!}</p>

                        @if (!empty($row_one->link))
                            <a href="{{ $row_one->link }}" class="common_button">{{ $row_one->btn_name }}</a>
                        @else
                        @endif

                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid mt-5" src="{{ asset('storage/' . $row_one->image) }}" alt=""
                            style="height: 300px;width: 580px;border-radius: 15px;">
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-------------End--------->

    <!--======// Solution feature 2//======-->
    @if (!empty($row_three))
        <section class="my-5">
            <div class="container">
                <div class="row d-flex justify-content-center my-3">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid mt-5" src="{{ asset('storage/' . $row_three->image) }}" alt=""
                            style="height: 300px;width: 580px;border-radius: 15px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <h4>{{ $row_three->title }}</h4>
                        <p class="text-justify">{!! $row_three->description !!}</p>

                        @if (!empty($row_three->link))
                            <a href="{{ $row_three->link }}" class="common_button">{{ $row_three->btn_name }}</a>
                        @else
                        @endif

                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->

    <!--======// Benefits of Software//======-->
    <div class="my-5">
        <div class="container">
            <!-- section title -->
            <div class="">
                <h3 class="section_title w-50 mx-auto">{{ $brandpage->row_one_title }} </h3>
                <p class="w-75 mx-auto" style="text-align: center;">{{ $brandpage->row_one_header }} </p>
            </div>
            <!-- wrapper -->
            <div class="row pt-2">
                <!-- item -->
                @if ($card1)
                    <div class="col-lg-4 col-sm-12">
                        <div class="software_chose_item">
                            <p class="software_chose_item_title">{{ $card1->title }}</p>
                            <p class="software_chose_item_text">{!! Str::limit($card1->short_des, 140) !!}</p>
                        </div>
                    </div>
                @endif
                <!-- item -->
                @if ($card2)
                    <div class="col-lg-4 col-sm-12">
                        <div class="software_chose_item">
                            <p class="software_chose_item_title">{{ $card2->title }}</p>
                            <p class="software_chose_item_text">{!! Str::limit($card2->short_des, 140) !!}</p>
                        </div>
                    </div>
                @endif
                <!-- item -->
                @if ($card3)
                    <div class="col-lg-4 col-sm-12">
                        <div class="software_chose_item">
                            <p class="software_chose_item_title">{{ $card3->title }}</p>
                            <p class="software_chose_item_text">{!! Str::limit($card3->short_des, 140) !!}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-------------End--------->

    <!--======// Call to action //======-->
    <div class="call_to_action my-5"
        style="background-image: url('{{ asset('storage/' . $brandpage->row_six_image) }}');">
        <div class="container">
            <div class="call_to_action_text w-75 mx-auto">
                <h4 class="">{{ $brandpage->row_six_title }}</h4>
                <p>{{ $brandpage->row_six_header }}</p>
                {{-- <div class="d-flex justify-content-center">
                    <a href="route" class="common_button3 text-center">Contact us to buy</a>
                </div> --}}
            </div>

        </div>
    </div>
    <!-------------End--------->

    <!--======// Solution feature 3//======-->
    @if (!empty($row_four))
        <section class="py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <h4 style="font-size:32px">{{ $row_four->title }}</h4>
                        <p>{!! $row_four->description !!}</p>
                        @if (!empty($row_four->link))
                            <a href="{{ $row_four->link }}" class="common_button2">{{ $row_four->btn_name }}</a>
                        @else
                        @endif

                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid mt-5" src="{{ asset('storage/' . $row_four->image) }}" alt=""
                            style="height: 300px;width: 580px;border-radius: 15px;">
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->

    <!--======// Solution feature 4//======-->
    @if (!empty($row_five))
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid mt-5" src="{{ asset('storage/' . $row_five->image) }}"
                            style="height: 300px;width: 580px;border-radius: 15px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 pl-4 section_text_wrapper">
                        <h4>{{ $row_five->title }}</h4>
                        <p>{!! $row_five->description !!}</p>
                        @if (!empty($row_five->link))
                            <a href="{{ $row_five->link }}" class="common_button">{{ $row_five->btn_name }}</a>
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->

    <!--=======// Popular products //======-->
    @if (count($products) > 0)
        <section class="popular_product_section section_padding my-5">
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
    @endif
    <!---------End -------->
    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection
