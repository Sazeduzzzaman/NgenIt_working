@extends('frontend.master')
@section('content')


    <!--======// Header Title //======-->
    <section class="header_title_product_filter"
        style="background-image: url('{{ asset('storage/' . $cat->image) }}'); background-size:contain;background-color:#b1b1b1">
        <h1 class="text-left ml-4 pl-4">
            {{ $cat->title }}
        </h1>
    </section><br><br>
    <!-------- End--------->

    <!--=======// Content & Filter //=======-->
    <section class="container">
        <form action="{{ route('custom.product', $cat->slug) }}" method="POST">
            @csrf
            <!----------Filter Top-nav Bar --------->
            <div class="clinet_stories_filter_top_bar">
                <label>Results per page </label>
                <span class="client_story_filter_page">
                    <select class="show" name="show" onchange="this.form.submit();">
                        <option value="">Default</option>
                        <option value="5" @if (!empty($_GET['show']) && $_GET['show'] == '5') selected @endif>5</option>
                        <option value="10" @if (!empty($_GET['show']) && $_GET['show'] == '10') selected @endif>10</option>
                        <option value="20" @if (!empty($_GET['show']) && $_GET['show'] == '20') selected @endif>20</option>
                        <option value="40" @if (!empty($_GET['show']) && $_GET['show'] == '40') selected @endif>40</option>
                    </select>

                </span>

                <label class="ml-4">Sort By: </label>
                <span class="client_story_filter_all_year">
                    <select class='sortBy' name='sortBy' onchange="this.form.submit();">
                        <option value="">Default</option>
                        <option value="titleASC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleASC') selected @endif>Ascending By Name
                        </option>
                        <option value="priceASC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceASC') selected @endif> Ascending By Price
                        </option>
                        <option value="titleDESC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleDESC') selected @endif>Descending By Name
                        </option>
                        <option value="priceDESC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceDESC') selected @endif>Descending By Price
                        </option>

                    </select>
                </span>
                {{-- <span class="product_go_to_next_pge"><a href="#" class="float-right">Go to next page...<i
                    class="fa-solid fa-chevron-right"></i></a></span> --}}
            </div>
            <hr class="m-1">
            <div class="row">
                <!----------Sidebar client stories --------->
                <div class="col-lg-3 col-sm-12">
                    <div class="sidebar_client_stories">
                        <label><b>
                                @if ($products)
                                    {{ $products->count() }}
                                @else
                                    No
                                @endif
                            </b> results matched your search</label>
                        <hr class="m-0">
                        <!--------Your search--------->
                        <div class="client_stories_your_search">
                            <h6 class="mb-1">Your search</h6>

                            {{-- <input type="hidden" name="customCategory" value="{{ $cat->slug }}"> --}}
                            @if (!empty($_GET['customCategory']))
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    {{ $cat->title }}
                                </div>
                            @endif
                            @if (!empty($_GET['customBrand']))
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    {{ $cat->title }}
                                </div>
                            @endif

                            @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleASC')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Ascending By Name
                                </div>
                            @endif
                            @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceASC')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Ascending By Price
                                </div>
                            @endif
                            @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleDESC')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Descending By Name
                                </div>
                            @endif
                            @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceDESC')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Descending By Price
                                </div>
                            @endif


                            @if (!empty($_GET['show']) && $_GET['show'] == '5')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Showing 5 Products
                                </div>
                            @endif
                            @if (!empty($_GET['show']) && $_GET['show'] == '10')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Showing 5 Products
                                </div>
                            @endif
                            @if (!empty($_GET['show']) && $_GET['show'] == '20')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Showing 5 Products
                                </div>
                            @endif
                            @if (!empty($_GET['show']) && $_GET['show'] == '40')
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                    Showing 5 Products
                                </div>
                            @endif


                        </div>
                        @if (!empty($_GET['category']))
                            @php
                                $filterCats = explode(',', $_GET['category']);
                            @endphp

                            @if (count($filterCats) > 1)
                                @foreach ($filterCats as $filterCat)
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                        {{ App\Models\Admin\SubCategory::where('slug', $filterCat)->value('title') }}
                                    </div>
                                @endforeach
                            @endif
                            @if (count($filterCats) == 1)
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                    {{ App\Models\Admin\SubCategory::where('slug', $filterCats)->value('title') }}
                                </div>
                            @endif
                        @endif

                        @if (!empty($_GET['subcategory']))
                            @php
                                $filtersubCats = explode(',', $_GET['subcategory']);
                            @endphp

                            @if (count($filtersubCats) > 1)
                                @foreach ($filtersubCats as $filtersubCat)
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                        {{ App\Models\Admin\SubSubCategory::where('slug', $filtersubCat)->value('title') }}
                                    </div>
                                @endforeach
                            @endif
                            @if (count($filtersubCats) == 1)
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                    {{ App\Models\Admin\SubSubCategory::where('slug', $filtersubCats)->value('title') }}
                                </div>
                            @endif
                        @endif


                        @if (!empty($_GET['brand']))
                            @php
                                $filterBrands = explode(',', $_GET['brand']);
                            @endphp
                            @if (count($filterBrands) > 1)
                                @foreach ($filterBrands as $filterBrand)
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                        {{ App\Models\Admin\Brand::where('slug', $filterBrand)->value('title') }}
                                    </div>
                                @endforeach
                            @elseif (count($filterBrands) == 1)
                                <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                    {{ App\Models\Admin\Brand::where('slug', $filterBrands)->value('title') }}
                                </div>
                            @else
                            @endif
                        @endif
                        <hr class="m-1">

                        <!-------Content Results---------->
                        <div class="client_stories_narrow_content">
                            <h6 class="mb-2">Narrow results</h6>
                            @if (!empty($_GET['keyword']))
                                <input class="p-1" type="text" name="keyword" value="{{ $_GET['keyword'] }}"
                                    onchange="this.form.submit()">
                            @else
                                <input class="p-1" type="text" name="keyword" placeholder="BY KEYWORD..."
                                    onchange="this.form.submit()">
                            @endif

                        </div>
                        <hr>

                        <!-------Apply Filters Button---------->

                    </div>

                    <hr class="m-1">

                    <!-------List Price---------->
                    <div class="product_list_price">
                        <h6 class="mb-4">List Price</h6>
                        <div id="slider-range" class="price-filter-range text-success" data-min="0" data-max="20000"
                            style="margin-bottom:0.7rem; "></div>
                        <input type="hidden" id="price_range" name="price_range" value="">
                        @if (!empty($_GET['price']))
                            <input class="form-control mb-2" type="text" id="amount"
                                value="USD $ {{ $_GET['price'] }}" readonly>
                        @else
                            <input class="form-control mb-2" type="text" id="amount" value="USD $0 - $20000" readonly>
                        @endif
                    </div>

                    <div id="sticker">
                        <div class="product_apply_filter_btn d-flex">
                            <button class="common_button2 p-2" type="submit">Apply Filters</button>
                        </div>
                        <hr>

                        <!--------Manufacturers--------->
                        <div class="client_stories_filter_category">
                            <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i>Sub Categories
                                for {{ $cat->title }}
                            </h6>


                            @if (!empty($_GET['category']))
                                @php
                                    $filterCat = explode(',', $_GET['category']);
                                @endphp
                            @endif
                            <div id="filter_category">
                                @foreach ($categories as $category)
                                    @php
                                        $products_cat = App\Models\Admin\Product::where('cat_id', $category->id)->get();
                                    @endphp
                                    <div class="form-check">
                                        <input class="form-check-input custom" name="category[]" type="checkbox"
                                            id="exampleCheckbox{{ $category->id }}" value="{{ $category->slug }}"
                                            @if (!empty($filterCat) && in_array($category->slug, $filterCat)) checked @endif onchange="this.form.submit()">
                                        <span class="ml-2" for="exampleCheckbox{{ $category->id }}">
                                            {{ $category->title }}</span>
                                        <span class="float-right">({{ count($products_cat) }})</span>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                        <hr>

                        <div class="client_stories_filter_category">
                            <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i>Sub Sub
                                Categories for {{ $cat->title }}
                            </h6>


                            @if (!empty($_GET['subcategory']))
                                @php
                                    $filtersubCat = explode(',', $_GET['subcategory']);
                                @endphp
                            @endif
                            <div id="filter_category">
                                @foreach ($subcategories as $subcategory)
                                    @php
                                        $products_subcat = App\Models\Admin\Product::where('cat_id', $subcategory->id)->get();
                                    @endphp
                                    <div class="form-check">
                                        <input class="form-check-input custom" name="subcategory[]" type="checkbox"
                                            id="exampleCheckbox{{ $subcategory->id }}" value="{{ $subcategory->slug }}"
                                            @if (!empty($filtersubCat) && in_array($subcategory->slug, $filtersubCat)) checked @endif
                                            onchange="this.form.submit()">
                                        <span class="ml-2" for="exampleCheckbox{{ $subcategory->id }}">
                                            {{ $subcategory->title }}</span>
                                        <span class="float-right">({{ count($products_subcat) }})</span>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                        <hr>

                        <!--------System / Type--------->
                        <div class="client_stories_filter_category">
                            <h6 onclick="showhide()" class="mb-4"><i class="fa-solid fa-caret-down"></i>
                                Manufacturers
                            </h6>

                            <div id="newpost">
                                @if (!empty($_GET['brand']))
                                    @php
                                        $filterBrand = explode(',', $_GET['brand']);
                                    @endphp
                                @endif
                                @foreach ($brands as $brand)
                                    @php
                                        // $products_brand = App\Models\Admin\Product::where('brand_id', $brand->id)->where('')->get();
                                    @endphp
                                    <div class="form-check">
                                        <input class="form-check-input custom" type="checkbox" name="brand[]"
                                            id="exampleBrand{{ $brand->id }}" value="{{ $brand->slug }}"
                                            @if (!empty($filterBrand) && in_array($brand->slug, $filterBrand)) checked @endif
                                            onchange="this.form.submit()">
                                        <span class="ml-2"
                                            for="exampleBrand{{ $brand->id }}">{{ $brand->title }}</span>
                                        {{-- <span class="float-right">({{ count($products_brand) }})</span> --}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <hr>






                        <!--------End--------->

                    </div>
                </div>

                <!----------conternt client stories --------->

                <div class="col-lg-9 col-sm-12">

                        @if ($products)

                            @foreach ($products as $product)

                            <div class="product_content_item row m-0 mb-2 border p-2">
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <img src="{{ asset($product->thumbnail) }}" alt="{{ $product->name }}" width="150px" height="113px">
                                </div>

                                <div class="col-lg-9 col-md-8 col-sm-12 product_content_item">
                                    <a href="{{ route('product.details',['id'=> $product->slug]) }}">
                                        <h3>{{$product->name}}
                                        </h3>
                                    </a>
                                    <!--Add To Basket-->
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-sm-6">
                                            <p>SKU #: {{$product->sku_code}}</p>
                                            <p>MF #: {{$product->mf_code}}</p>
                                            <p>NG #: {{$product->product_code}}</p>

                                            <div class="row text-center px-3">
                                                {{-- <div class="col-lg-7 col-md-12">
                                                    <a href="#" class="">Add to My Compare List</a>
                                                </div>
                                                <div class="col-lg-5 col-md-12">
                                                    <a href="#" class="">Compare Similar</a>
                                                </div> --}}

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">

                                            @if ($product->rfq != 1)
                                                <h4>List Price</h4>
                                                <h3>
                                                   USD $ @if (!empty($product->discount))
                                                    <span class="price_currency_value"
                                                        style="text-decoration: line-through; color:red">
                                                        {{ $product->price }}
                                                    <span class="price_currency_value" style="color: black">
                                                        {{ $product->discount }}</span>
                                                    @else
                                                        <span class="price_currency_value"> {{ $product->price }}</span>
                                                    @endif
                                                </h3>
                                            @endif
                                        </div>

                                        <div class="col-lg-4 col-sm-12">

                                            <div class="product_add_bascket_btn d-flex justify-content-end mt-3">
                                                    <!-- button -->
                                                @if ($product->rfq != 1)

                                                    @php
                                                        $cart = Cart::content();
                                                        $exist = $cart->where('id', $product->id);

                                                    @endphp
                                                    @if ($cart->where('id', $product->id)->count())
                                                        {{-- <a href="javascript:void(0);" class="common_button6"> </a> --}}
                                                        <span class="common_button6">Already in Cart</span>
                                                    @else
                                                        <form action="{{ route('add.cart') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="product_id" id="product_id"
                                                                value="{{ $product->id }}">
                                                            <input type="hidden" name="name" id="name"
                                                                value="{{ $product->name }}">
                                                            <input type="hidden" name="qty" id="qty" value="1">
                                                            <button type="submit" class="common_button effect01" style="padding:10px 20px;">Add to Basket</button>
                                                        </form>
                                                    @endif
                                                @else
                                                    {{-- <div class="product_item_price">
                                                        <span class="price_currency_value">
                                                            <a data-toggle="modal" data-target="#get_quote_modal-{{ $product->id }}">Ask
                                                                For Price</a>
                                                        </span>
                                                    </div> --}}
                                                    <a href="{{ route('product.details', $product->slug) }}"
                                                        class="common_button effect01">Details</a>
                                                @endif
                                            </div>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                                <p>{!! Str::limit($product->short_desc, 180, $end='...') !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif

                </div>
                <!--------item------->





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
    </section>



    <br>
    <!-------- End--------->

    <!--=======// Related products //======-->
    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="software_feature_title">
                    <h1 class="text-center pb-3">Related Items</h1>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">
                    <!-- product_item -->
                    @foreach ($related_products as $item)
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
                                    <div class="product_item_price text-black">
                                        <span class="price_currency">USD $</span>
                                        @if (!empty($item->discount))
                                            <span class="price_currency_value"
                                                style="text-decoration: line-through; color:red">
                                                {{ $item->price }}</span>
                                            <span class="price_currency_value" style="color: black">
                                                {{ $item->discount }}</span>
                                        @else
                                            <span class="price_currency_value" style="color: black"> {{ $item->price }}</span>
                                        @endif
                                    </div>
                                    <!-- button -->
                                    @php
                                        $cart = Cart::content();
                                        $exist = $cart->where('id', $item->id);
                                        //dd($cart->where('image' , $item->thumbnail )->count());
                                    @endphp
                                    @if ($cart->where('id', $item->id)->count())
                                        {{-- <a href="javascript:void(0);" class="common_button6"> </a> --}}
                                        <span class="common_button6">Already in Cart</span>
                                    @else
                                        {{-- <form  id="add-to-cart-form" method="POST">
                                            @csrf --}}
                                            <input type="hidden" name="product_id" id="product_id"
                                                value="{{ $item->id }}">
                                            <input type="hidden" name="name" id="name"
                                                value="{{ $item->name }}">
                                            <input type="hidden" name="qty" id="qty" value="1">
                                            <button type="button" class="common_button effect01" onclick="addToCart()">Add to Basket</button>
                                        {{-- </form> --}}
                                    @endif
                                @else
                                    <div class="product_item_price">
                                        <span class="price_currency_value">
                                            <a data-toggle="modal" data-target="#get_quote_modal-{{ $item->id }}">Ask
                                                For Price</a>
                                        </span>
                                    </div>
                                    <a href="{{ route('product.details', $item->slug) }}"
                                        class="common_button effect01">Details</a>
                                @endif
                            </div>
                        </div>
                        <!-- left modal -->
                        <div class="modal modal_outer fade" id="get_quote_modal-{{ $item->id }}" tabindex="-1"
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
</form>


@endsection
@section('scripts')
    <script>
        $(document).ready(function() {


        });
    </script>
    <script>
        $(document).ready(function() {
        function addToCart() {
            let form = document.querySelector('#add-to-cart-form');
            let formData = new FormData(form);
            fetch('/cart_store', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Product added to cart successfully.');
                    // Update the cart count in the UI
                    document.querySelector('#cart-count').textContent = data.cartCount;
                    // Reset the form
                    form.reset();
                } else {
                    alert('Failed to add product to cart.');
                }
            })
            .catch(error => console.error(error));
        }
    });
    </script>
@endsection
