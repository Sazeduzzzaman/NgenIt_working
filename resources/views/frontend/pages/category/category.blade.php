@extends('frontend.master')
@section('content')

    <!-- banner single page start -->
    <section class="banner_single_page"
        style="background-image:url('{{ asset('storage/'.$category->image) }}');

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
                    <a href="{{ route('custom.product',$category->slug) }}" class="common_button2">Browse all {{ $category->title  }}</a>

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
                                <hr>
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
        </section><br><hr>
    @endif
<!---Products Section-->


    <!-- network cable -->


    @if (!empty($sub_cats))
        <section class="container">
            <!--Title-->
            <div class="common_product_item_title">
                <h3>Display Sub Categories for {{ $category->title }}</h3>

            </div>
            <!--Product Category-->
            <div class="row">
                <!--Category item-->
                @foreach ($sub_cats as $key => $item)
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 p-4">
                        <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="" style="height: 60px; width:120px;">
                        <div class="common_product_item_text">
                            <a href="{{ route('category.html',$item->slug) }}" style="font-size: 16px">{{ $item->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="category_all_btn text-center">
                <a href="{{ route('custom.product',$category->slug) }}" class="product_button">Shop all {{ $category->title  }}</a>
            </div>

        </section>
    @endif

    <!--======// Network cables //=====-->
    @if (!empty($sub_sub_cats))
        <section class="section_wp2">
            <div class="container">
                <!--Title-->
                <div class="common_product_item_title">

                </div>
                <!--Product brands-->
                <div class="row">
                    <!--Category item-->

                    @foreach ($sub_sub_cats as $key => $item)
                                @php
                                    $slug = App\Models\Admin\Category::where('id',$item->id)->value('slug');
                                @endphp
                    <div class="col-lg-3 col-md-3 col-sm-6 p-2">
                        <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="{{$item->title}}">
                        <div class="common_product_item_text">
                            <a href="{{ route('category.html',$item->slug) }}">{{$item->title}}</a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{-- <a href="product_filters.html" class="common_button">Shop all cables</a> --}}
                </div>
            </div>
        </section>
    @endif
    <!--------- End --------->

    <!--======// Adapters //=====-->

    <!--------- End --------->

    <!--======// By brand //=====-->
    @if (!empty($brands))
        <section class="section_wp2">
            <div class="container">
                <!--Title-->
                <div class="common_product_item_title">
                    <h3>Related Brands for {{ $category->title }}</h3>

                </div>
                <!--Product brands-->
                <div class="row">
                    <!--Category item-->
                    @foreach ($brands as $key => $item)
                    <div class="col-lg-3 col-md-3 col-sm-6 p-4">
                        <img class="img-fluid mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="{{$item->title}}">
                        <div class="common_product_item_text">
                            <a href="{{ (!empty($item->slug)) ? route('custom.product', $item->slug):route('all.brand') }}">Shop {{$item->title}}</a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="{{route('all.brand')}}" class="common_button">Shop all brands</a>
                </div>
            </div>
        </section>
    @endif
    <!--------- End --------->





@endsection
