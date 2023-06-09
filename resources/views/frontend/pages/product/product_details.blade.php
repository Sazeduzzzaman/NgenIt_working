@extends('frontend.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--========// Image And Content wrapper //======-->

<style>
        .common_button2 {
            padding: 10px 15px;
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
            color: white;
        }
    .product_quantity_wraper {
        background-color: #ebebeb;
        padding: 10px;
        margin-bottom: 10px;
    }

</style>
<section class="container py-5">
    <div class="row">
        <!-- images -->
        <div class="col-lg-4 col-sm-12 single_product_images">
            <!-- gallery pic -->
            <div class="mx-auto d-block">
                <img id="expand" class="geeks img-fluid rounded mx-auto d-block"
                    src="{{ asset($sproduct->thumbnail) }}">
            </div>
            @php
            $imgs = App\Models\Admin\MultiImage::where('product_id', $sproduct->id)->get();

            @endphp

            <div class="img_gallery_wrapper row pt-1">
                @foreach ($imgs as $data)
                <div class="col-3">
                    <img class="img-fluid" src="{{ asset($data->photo) }}" onclick="gfg(this);">
                </div>
                @endforeach
            </div>
        </div>
        <!-- content -->
        <div class="col-lg-8 col-sm-12 pl-4">
            <h3>{{ $sproduct->name }}</h3>
            <h6 class="text-dark product_code">SKU #{{ $sproduct->sku_code }} | MF #{{ $sproduct->mf_code }} | NG #{{ $sproduct->product_code }}
            </h6>
            {{-- <div class="product__details__rating">
                <img src="{{asset('frontend')}}/images/star-outline.svg" />
                <img src="{{asset('frontend')}}/images/star-outline.svg" />
                <img src="{{asset('frontend')}}/images/star-outline.svg" />
                <img src="{{asset('frontend')}}/images/star-outline.svg" />
                <img src="{{asset('frontend')}}/images/star-outline.svg" />

                <span>No reviews yet.</span>
            </div> --}}

            <div class="row pt-3">

                <div class="col-lg-8">
                    @if ($sproduct->rfq != 1)

                    <p class="list_price mb-0">List Price</p>
                        <div class="product__details__price ">
                            @if (!empty($sproduct->discount))
                            <p class="mb-0">
                                US
                                <span style="text-decoration: line-through; color:red">$ {{ $sproduct->price}}</span>
                                <span style="color: black">$ {{ $sproduct->discount }}</span>
                            </p>
                            @php
                            $amount = $sproduct->price - $sproduct->discount;
                            $discount = ($amount / $sproduct->price) * 100;
                            @endphp
                            <span class="badge rounded-pill bg-success" style="font-size: 14px;">
                            {{ round($discount)}}%</span>
                            @else
                            <p class="mb-0">US $ {{ $sproduct->price }}</p>
                            @endif
                        </div>
                    @else
                    <div id="tpl-product-detail-order-target" class="prod-ordering-section" data-outofstock="Out of stock.">
                        <div class="row js-add-to-cart-container">
                            <div class="columns small-12 ds-v1 text-center">
                                <a type="button" style="font-weight: 600" class="text-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                    <h5>This product has sell requirements</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="stock-info">
                        <p tabindex="0" class="prod-stock" id="product-avalialability-by-warehouse"> <span
                                aria-label="Stock Availability" class="js-prod-available"> <i
                                    class="fa fa-info-circle text-success"></i> Stock</span> <br>
                            @if (($sproduct->qty) > 0)
                            <span class="badge rounded-pill badge-success" style="font-size:17px">{{ $sproduct->qty }} in stock</span>

                                @else
                                <span class="badge rounded-pill badge-danger" style="font-size:17px">{{ ucfirst($sproduct->stock) }}</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            {{-- <h6> Estimate the total price of this item</h6> --}}

            <div class="row">
                <div class="col-lg-10">

                    <p>{!! $sproduct->short_desc !!}</p>

                </div>

            </div>





            <div class="row product_quantity_wraper justify-content-between">
                @if ($sproduct->rfq != 1)
                    @php
                        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();
                    @endphp
                    @if ($cart->where('id' , $sproduct->id )->count())
                    <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                        <div class="common_button2">
                            <a class="text-white" href="javascript:void(0);"> Already in Cart</a>
                        </div>
                    </div>
                    @else
                    <form action="{{  route('add.cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" id="product_id" value="{{ $sproduct->id }}">
                        <input type="hidden" name="name" id="name" value="{{ $sproduct->name }}">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="pro-qty">
                                    <input type="hidden" name="product_id" id="product_id" value="{{ $sproduct->id }}">
                                        <input type="hidden" name="name" id="name" value="{{ $sproduct->name }}">
                                    <div class="counter">

                                        <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                        <input type="text" name="qty" value="1" class="count_field">
                                        <span class="up" onClick='increaseCount(event, this)'>+</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">

                                    <button class="common_button2" type="submit" >Add to Basket</button>
                            </div>
                        </div>
                    </form>
                    @endif


                @else
                <button class="common_button" id="modal_view_left" data-toggle="modal"  data-target="#get_quote_modal">Call Ngen It for price</button>

                {{-- <a class="common_button" href="{{route('contact')}}">Call Ngen It for price</a> --}}
                <div class="need_help col-lg-4 col-sm-12">
                    <h6 class="m-2">Need Help Ordering?</h6>
                    <h6>Call <strong>{{ App\Models\Admin\Setting::first()->mobile }}</strong></h6>
                </div>
                @endif
            </div>

            {{-- <a href="#" class="
                    product_your_purchase">Protect your purchase</a> --}}
        </div>
    </div>
</section><br>
<!-------End-------->





<section class="container tab_sidebar_single_product" style="overflow: hidden;">
    <div class="row p-2">
        <div class="tab col-12">
            <a class="p-2 btn tab-links" href="#1a" data-toggle="tab">OVERVIEW</a>
            <a class="p-2 btn tab-links" href="#2a" data-toggle="tab">SPECIFICATION</a>
            <a class="p-2 btn tab-links" href="#3a" data-toggle="tab">ACCESSORIES</a>
            <a class="p-2 btn tab-links" href="#4a" data-toggle="tab">WARRANTIES</a>
        </div>
    </div>

    <div class="tab-content clearfix p-3">
        <div class="tab-pane active" id="1a">
            {!! $sproduct->overview !!}
        </div>
        <div class="tab-pane" id="2a">
            {!! $sproduct->specification !!}
        </div>
        <div class="tab-pane" id="3a">
            {!! $sproduct->accessories !!}
        </div>
        <div class="tab-pane" id="4a">
            {!! $sproduct->warranty !!}
        </div>
    </div>
</section>


<hr>
<!-------End-------->


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



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #ae0a46;color: white;">
          <h5 class="modal-title" id="exampleModalCenterTitle">RFQ Secton</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-header">
                <p>This Product requires the following information to complete your order.
                    You will be prompted to enter the required information during checkout.</p>
            </div>
            <div class="card-body px-4">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="m-0">Contact Email</p>
                            <p class="m-0">Contact Name</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="m-0">License</p>
                            <p class="m-0">Contact Phone</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="m-0">Deal Reg </p>
                            <p class="m-0">PCN No</p>
                            <p class="m-0">Authorization</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


<!-- left modal -->
    <div class="modal modal_outer fade" id="get_quote_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">


            <div class="modal-content">

                <div class="modal-header p-0 m-0 pl-5 pr-3 py-2" style="background: #ae0a46;color: white;">
                <h5 class="modal-title">Get a Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @if (Auth::guard('client')->user())
                    <form action="{{route('rfq.add')}}" method="post" id="get_quote_frm" enctype="multipart/form-data">
                        @csrf
                        <div class="card mx-4">
                            <div class="card-body px-4 py-2">
                                <div class="row border" style="font-size: 0.8rem;">
                                    <div class="col-lg-3 pl-2">{{Auth::guard('client')->user()->name}}</div>
                                    <div class="col-lg-4" style="margin: 5px 0px">{{Auth::guard('client')->user()->email}}</div>
                                    <div class="col-lg-4" style="margin: 5px 0px">
                                        {{Auth::guard('client')->user()->phone}}
                                        <div class="form-group" id="Rfquser" style="display:none">
                                            <input type="text" required="" class="form-control" id="phone" name="phone" value="{{Auth::guard('client')->user()->phone}}" placeholder="Phone Number" style="font-size: 0.8rem;">
                                        </div>
                                    </div>
                                    <div class="col-lg-1" style="margin: 5px 0px"><a href="javascript:void(0);" id="editRfquser"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                </div>
                            </div>

                        </div>
                        <input type="hidden" name="product_id" value="{{$sproduct->id}}">
                        <input type="hidden" name="client_id" value="{{Auth::guard('client')->user()->id}}">
                        <input type="hidden" name="client_type" value="client">
                        <input type="hidden" name="name" value="{{Auth::guard('client')->user()->name}}">
                        <input type="hidden" name="email" value="{{Auth::guard('client')->user()->email}}">
                        {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone}}"> --}}
                        <div class="modal-body get_quote_view_modal_body">


                            <div class="form-row">

                                <div class="form-group col-sm-4 m-0">

                                    <input type="text" class="form-control mt-4" id="contact" name="company_name" value="{{Auth::guard('client')->user()->company_name}}" placeholder="Company Name" style="font-size: 0.7rem;">
                                </div>
                                <div class="form-group col-sm-4 m-0">

                                    <input type="number" class="form-control mt-4" id="contact" name="qty" placeholder="Quantity" style="font-size: 0.7rem;">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label class="m-0" for="image" style="font-size: 0.7rem;">Upload Image</label>
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*" style="font-size: 0.7rem;"/>
                                    <div class="form-text" style="font-size:11px;">Only png, jpg, jpeg images</div>

                                </div>

                                <div class="form-group col-sm-12 border text-white" style="background: #7e7d7c">
                                        <h6 class="text-center pt-1">Product Name : {{$sproduct->name}}</h6>
                                </div>

                                <div class="form-group col-sm-12">

                                    <textarea class="form-control" id="message" name="message" rows="1" placeholder="Additional Information..."></textarea>
                                </div>

                                <div class="form-group  col-sm-12 px-3 mx-3">
                                    <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                    <label for="call">Also Please Call Me</label>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>

                    </form>
                @elseif (Auth::guard('partner')->user())
                    <form action="{{route('rfq.add')}}" method="post" id="get_quote_frm" enctype="multipart/form-data">
                        @csrf
                        <div class="card mx-4">
                            <div class="card-body p-4">
                                <div class="row border">
                                    <div class="col-lg-3 pl-2">Name: {{Auth::guard('partner')->user()->name}}</div>
                                    <div class="col-lg-4" style="margin: 5px 0px">{{Auth::guard('partner')->user()->primary_email_address}}</div>
                                    <div class="col-lg-4" style="margin: 5px 0px">{{Auth::guard('partner')->user()->company_number}}</div>
                                    <div class="col-lg-1" style="margin: 5px 0px"><a href="javascript:void(0);" id="editRfqpartner"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="product_id" value="{{$sproduct->id}}">
                        <input type="hidden" name="client_type" value="partner">
                        <input type="hidden" name="partner_id" value="{{Auth::guard('partner')->user()->id}}">
                        <input type="hidden" name="name" value="{{Auth::guard('partner')->user()->name}}">
                        <input type="hidden" name="email" value="{{Auth::guard('partner')->user()->primary_email_address}}">
                        {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone_number}}"> --}}
                        <div class="modal-body get_quote_view_modal_body">

                            <div class="form-group col-sm-12 border text-white" style="background: #7e7d7c">
                                <h6 class="text-center pt-1">Product Name : {{$sproduct->name}}</h6>
                            </div>
                            <div class="row" id="Rfqpartner" style="display:none">
                                <div class="form-group col-sm-6">
                                    <input type="text" required="" class="form-control" id="phone" name="phone" value="{{Auth::guard('partner')->user()->company_number}}" placeholder="Company Phone Number">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Company Name </label>
                                    <input type="text" class="form-control" id="contact" name="company_name" required value="{{Auth::guard('partner')->user()->company_name}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group  col-sm-6">

                                    <input type="number" class="form-control" id="contact" name="qty" placeholder="Quantity">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Upload Image </label>
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*" />
                                    <div class="form-text" style="font-size:11px;">Accepts only png, jpg, jpeg images</div>
                                </div>

                                <div class="form-group  col-sm-12">
                                    <textarea class="form-control" id="message" name="message" rows="1" placeholder="Additional Text.."></textarea>
                                </div>

                                <div class="form-group  col-sm-12 px-3 mx-3">
                                    <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                    <label for="call">Also Please Call Me</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-light col-lg-3 mr-auto" data-dismiss="modal"><i class="fas fa-window-close mr-2"></i> Cancel</button>
                                <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>

                    </form>
                @else
                    <form action="{{route('rfq.add')}}" method="post" id="get_quote_frm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$sproduct->id}}">
                        {{-- <input type="hidden" name="client_type" value="random"> --}}
                        <div class="modal-body get_quote_view_modal_body">
                            <div class="form-row">
                                <div class="form-group col-sm-12 border text-white" style="background: #7e7d7c">
                                    <h6 class="text-center pt-1">Product Name : {{$sproduct->name}}</h6>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required="" id="name" name="name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" required="" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="text" required="" class="form-control" id="phone" name="phone">
                                </div>

                                <div class="form-group  col-sm-6">
                                    <label for="contact">Company Name </label>
                                    <input type="text" class="form-control" id="contact" name="company_name">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Quantity </label>
                                    <input type="number" class="form-control" id="contact" name="qty">
                                </div>
                                <div class="form-group  col-sm-6">
                                    <label for="contact">Custom Image </label>
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*" />
                                    <div class="form-text" style="font-size:11px;">Accepts only png, jpg, jpeg images</div>
                                </div>

                                <div class="form-group  col-sm-12">
                                    <label for="message">Type Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                </div>

                                <div class="form-group  col-sm-12 px-3 mx-3">
                                    <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                    <label for="call">Also Please Call Me</label>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-light col-lg-3 mr-auto" data-dismiss="modal"><i class="fas fa-window-close mr-2"></i> Cancel</button>
                                <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>

                    </form>
                @endif

            </div><!-- //modal-content -->

        </div><!-- modal-dialog -->
    </div>
<!-- modal -->
<!-- //left modal -->



<script>
    function gfg(imgs) {
            var expandImg = document.getElementById("expand");
            var imgText = document.getElementById("geeks");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
</script>

<script>
    //----- Quantity
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
        }

        function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }
        }
</script>

<script>
    //---- Sidebar Tab Product


        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

</script>


<script>

    $(document).ready(function(){
        $('#editRfquser').click(function() {
            $("#Rfquser").toggle(this.checked);
        });

    });
</script>



@endsection








































