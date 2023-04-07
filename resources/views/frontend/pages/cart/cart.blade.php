@extends('frontend.master')

@section('content')
    <style>
        .counter span {
            display: block;
            margin-top: -6px;
            font-size: 25px;
            padding: 0 10px;
            cursor: pointer;
            color: #d51a5f;
            user-select: none;
        }
        .card {
            margin: auto;
            max-width: 1100px;
            width: 100%;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 1rem;
            border: transparent;
        }

        @media(max-width:767px) {
            .card {
                margin: 3vh auto;
            }
        }

        .cart {
            background-color: #fff;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem;
            padding: 0px;
        }

        @media(max-width:767px) {
            .cart {
                padding: 4vh;
                border-bottom-left-radius: unset;
                border-top-right-radius: 1rem;
            }
        }

        .summary {
            background-color: #f5f5f5;
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            padding: 2vh;
            color: rgb(65, 65, 65);
        }

        @media(max-width:767px) {
            .summary {
                border-top-right-radius: unset;
                border-bottom-left-radius: 1rem;
            }
        }

        .summary .col-2 {
            padding: 0;
        }

        .summary .col-10 {
            padding: 0;
        }

        .row {
            margin: 0;
        }

        .title {
            padding: 10px;
            border-top-left-radius: 0.85rem;

        }

        .title b {
            font-size: 1.5rem;
            color: #fff !important;
        }

        .main {
            margin: 0;
            padding: 2vh 0;
            width: 100%;
        }

        .col-2,
        .col {
            padding: 0 1vh;
        }

        a {
            padding: 0 1vh;
        }

        .close {
            margin-left: auto;
            font-size: 0.7rem;
        }

        img {
            width: 3.5rem;
        }

        .back-to-shop {
            margin-right: 1rem;
            margin-top: 1rem;
        }

        hr {
            margin-top: 1.25rem;
        }

        form {
            padding: 2vh 0;
        }

        select {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1.5vh 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .btn:focus {
            box-shadow: none;
            outline: none;
            box-shadow: none;
            color: white;
            background-color: #ae0a46 !important;
            -webkit-box-shadow: none;
            -webkit-user-select: none;
            transition: none;
        }

        .btn:hover {
            color: white;
        }

        a {
            color: black;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        #code {
            background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: center;
        }
    </style>

    <!--======// Header Title //======-->
    <section class="common_product_header p-0"
        style="background-image: linear-gradient(
        rgba(0,0,0,0.8),
        rgba(0,0,0,0.8)
        ),url('https://tapcom-live.ams3.cdn.digitaloceanspaces.com/media/cache/bb/74/bb749b579a0f712fb8ab4065645e8918.jpg');">
        <div class="container ">
            <h1>My Cart</h1>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{route('contact')}}">Talk with our specialist</a>
                    </div>
                    <div class="m-4">
                        <a class="common_button3" href="{{route('shop')}}">Check Our Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    {{-- Cart Section Start --}}
    <div class="card mt-4 mb-4">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-white fw-bold"></div>
                    </div>
                </div>
                {{-- Header Title --}}
                <div class="row border-top px-3">
                    <div class="table-responsive main align-items-center">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th width="18%">Product</th>
                                    <th width="25%">Item Name</th>
                                    <th width="15%">Unit Price</th>
                                    <th width="17%">QTY</th>
                                    <th width="15%">Unit Total</th>
                                    <th width="10%"><a href="" class="text-danger">Empty Cart</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart_details as $item)
                                    @php
                                        $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                                    @endphp
                                <tr class="text-center">
                                    <td style="vertical-align: middle;">
                                        <img class="img-fluid"
                                            src="{{$item->options->has('image') ? $item->options->image : ''}}" alt="{{ $item->name }}">
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <a class="text-primary" href="{{ route('product.details', $slug) }}" title="{{ $item->name }}">
                                            {{ Str::limit($item->name, 22) }}
                                        </a>
                                    </td>
                                    <td style="vertical-align: middle;">$ {{ number_format($item->price, 2) }}</td>
                                    <td style="vertical-align: middle;"><form class="myForm">
                                        <input type="hidden" id="price" name="price" value="{{ $item->price }}">
                                        <div class="pro-qty mb-2" style="width: 5.5rem">
                                            <div class="counter" style="width: 2rem">
                                                <input name="rowID" type="hidden" id="rowID" value="{{ $item->rowId }}">
                                                <span class="down" id="{{ $item->rowId }}" onClick='decreaseCount(event, this, this.id)'>-</span>
                                                <input type="text" name="qty" value="{{ $item->qty }}" style="width: 1.5rem;" readonly>
                                                <span class="up" id="{{ $item->rowId }}" onClick='increaseCount(event, this, this.id)'>+</span>
                                            </div>
                                        </div>
                                            {{-- <a href="javascript:void(0);" class="common_button2 p-1 mt-1" id="update">Update</a> --}}
                                    </form></td>
                                    <td style="vertical-align: middle;">$ {{ number_format($item->price * $item->qty , 2)}}</td>
                                    <td style="vertical-align: middle;">
                                        <a href="" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- Header Title End --}}
                <div class="d-flex justify-content-end  mb-2">
                    <div class="back-to-shop">
                        <a href="#">&leftarrow; <span class="text-danger fw-bold" style="font-size: 16px">Back to
                                shop</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 summary">
                <div><h5 class="text-center"><b>Summary</b></h5></div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">Sub Total</div>
                    <div class="col text-right">$ {{number_format(Cart::subtotal(), 2)}}</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-left:0;">Tax Estimate</div>
                    <div class="col text-right">$ 0.00</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-left:0;">Shipping Cost</div>
                    <div class="col text-right">$ 0.00</div>
                </div>
                <hr>
                <div class="row" style=" padding: 1vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">$ {{ number_format(Cart::total(), 2) }}</div>
                </div>
                <div class="d-flex justify-content-center pt-5">
                    <a href="{{route('checkout')}}" class="btn product_btn">CHECKOUT</a>
                </div>
            </div>
        </div>

    </div>
    <!--=======// Popular products //======-->
        <section class="popular_product_section section_padding mt-5">
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
    {{-- Cart Section end --}}
@endsection


@section('scripts')
    {{-- <script type="text/javascript">
        // $(".update-cart").change(function() {
        //     alert("is it cart");
        //     // var ele = $(this);
        //     // console.log(ele);
        //     // $.ajax({
        //     //     url: '{{ route('update.cart') }}',
        //     //     method: "patch",
        //     //     data: {
        //     //         _token: '{{ csrf_token() }}',
        //     //         id: ele.parents("tr").attr("data-id"),
        //     //         quantity: ele.parents("tr").find(".quantity").val()
        //     //     },
        //     //     success: function(response) {
        //     //         window.location.reload();
        //     //     }
        //     // });
        // });

        $("#InputId").on('change', function() {
            alert('Handler for "change" called.');
        });
    </script> --}}



    <script>
        if ($('#checkout').val() == 0) {
            $('#work').hide();
        }
    </script>

    <script>
        var buttonAdd = document.querySelectorAll('.cart_input')
        var cartUpdateBtn = document.querySelectorAll('.update_button')
        cartUpdateBtn.forEach(element => {
            element.style.cssText = 'all:unset;display:block;cursor:pointer'
        });
    </script>


    <script>
        //----- Quantity
        function increaseCount(a, b, c) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
            let form = $(this).closest('.myForm');
            // let rowId = form.find("input[name=rowID]").val();
            var rowId = c;
            //var routeName = 'cart.increment';
            //alert(b);
            $.ajax({
                type: 'GET',
                url: "cart-increment/" + rowId,
                //url: route(routeName, { rowId }),
                dataType: 'json',
                success: function(response) {
                    window.location.reload();
                }
            });


        }


        // ---------- END CART INCREMENT -----///



        // -------- CART Decrement  --------//


        function decreaseCount(a, b, c) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }

            var form = $(this).closest('.myForm');
            // var rowId = form.find("input[name=rowID]").val();
            var rowId = c;

            $.ajax({
                type: 'GET',
                url: "cart-decrement/" + rowId,
                dataType: 'json',
                success: function(response) {
                    window.location.reload();
                }
            });
        }



        // Cart Remove End
    </script>
@endsection


