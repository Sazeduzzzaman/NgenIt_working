@extends('frontend.master')
@section('content')
<style>
    .slider:before{
        content: none!important;
    }
    .accordion-button:focus {
        z-index: 3;
        border-color: none;
        outline: 0;
        box-shadow: none;
    }

    .accordion-button {
        padding: 10px !important;
    }

    .accordion-button:not(.collapsed) {
        color: black !important;
        background-color: none !important;
    }

    .accordion-button:not(.collapsed) {
        color: black !important;
        background-color: transparent !important;
        box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    }

    .small_dropdown {
        padding-left: 10px !important;
    }
        .price-input{
        width: 100%;
        display: flex;
        margin: 12px 0 25px;
        }
        .price-input .field{
        display: flex;
        width: 100%;
        height: 45px;
        align-items: center;
        }
        .field input{
        width: 100%;
        height: 70%;
        outline: none;
        font-size: 16px;
        margin-left: 10px;
        border-radius: 5px;
        text-align: center;
        border: 1px solid #999;
        -moz-appearance: textfield;
        }
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        }
        .price-input .separator{
        width: 70px;
        display: flex;
        font-size: 19px;
        align-items: center;
        justify-content: center;
        }
        .slider{
        height: 5px;
        position: relative;
        background: #ddd;
        border-radius: 5px;
        }
        .slider .progress{
        height: 100%;
        left: 25%;
        right: 25%;
        position: absolute;
        border-radius: 5px;
        background-color: #ae0a46 !important;
        /* background-color: none !important; */
        }
        .range-input{
        position: relative;
        }
        .range-input input{
        position: absolute;
        width: 100%;
        height: 5px;
        top: -5px;
        background: none;
        pointer-events: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        }
        input[type="range"]::-webkit-slider-thumb{
        height: 17px;
        width: 17px;
        border-radius: 50%;
        background: #6d6d6d;
        /* color: yellow; */
        pointer-events: auto;
        -webkit-appearance: none;
        box-shadow: 0 0 6px rgba(0,0,0,0.05);
        }
        input[type="range"]::-moz-range-thumb{
        height: 17px;
        width: 17px;
        border: none;
        border-radius: 50%;
        background: #6d6d6d;
        pointer-events: auto;
        -moz-appearance: none;
        box-shadow: 0 0 6px rgba(0,0,0,0.05);
        }
</style>

    <section class="banner_single_page mb-4" style="background-image:url('{{ asset('frontend/images/custom_shop.jpg') }}');
        background-color: black;
        background-repeat: no-repeat;
        background-size: cover;
        height:300px;">

        <div class="container">
            <div class="single_banner_content">
                <!-- image -->
                <div class="single_banner_image text-center">
                    <img class="mb-3" src="{{ asset('storage/' . $cat->image) }}" alt="" height="100px" width="100px" style="margin-top:4rem;">
                </div>
                <!-- heading -->
                <h1 class="single_banner_heading text-center text-white pb-3">{{ $cat->title }}</h1>

            </div>
        </div>
    </section>

    <!-------- End--------->

    <!--=======// Content & Filter //=======-->
    <section class="container mb-5">
        <form action="{{ route('custom.product', $cat->slug) }}" method="POST">
            @csrf

            <div class="row">
                    <!----------Sidebar filter Section--------->
                    <aside class="col-md-3">
                        <div class="card">
                            <div class="client_stories_your_search">
                                <h5 class="mb-1 p-2 text-center">Your search</h5>

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


                                @if (!empty($_GET['show']) && $_GET['show'] == '7')
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                        Showing 7 Products
                                    </div>
                                @endif
                                @if (!empty($_GET['show']) && $_GET['show'] == '10')
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                        Showing 10 Products
                                    </div>
                                @endif
                                @if (!empty($_GET['show']) && $_GET['show'] == '20')
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                        Showing 20 Products
                                    </div>
                                @endif
                                @if (!empty($_GET['show']) && $_GET['show'] == '40')
                                    <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                        Showing 40 Products
                                    </div>
                                @endif

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
                                @if (!empty($_GET['keyword']))

                                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                                            Searched By : {{$_GET['keyword']}}

                                        </div>


                                @endif
                            </div>
                            <!-- filter-group  .// -->
                            <article class="filter-group">
                                <header class="card-header product-header">
                                    <a href="#" data-toggle="collapse" data-target="#key" aria-expanded="true" class="">
                                        <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="area_title">Key Word Search</h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse show" id="key">
                                    <div class="card-body">

                                            <div class="input-group">
                                                {{-- <input type="text" class="form-control" placeholder="Search" /> --}}
                                                @if (!empty($_GET['keyword']))
                                                    <input class="form-control" type="text" name="keyword" value="{{ $_GET['keyword'] }}"
                                                    onkeyup="this.form.submit()">
                                                @else
                                                    <input class="form-control" type="text" name="keyword" placeholder="BY KEYWORD..."
                                                    onkeyup="this.form.submit()">
                                                @endif
                                                <div class="input-group-append">
                                                    <button class="btn product_btn" type="submit">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>

                                    </div>
                                    <!-- card-body.// -->
                                </div>
                            </article>
                            <!-- filter-group  .// -->
                            <article class="filter-group">
                                <header class="card-header product-header">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                                        class="">
                                        {{-- <i class="icon-control fa fa-chevron-down"></i> --}}
                                        <h6 class="area_title">System / Types</h6>
                                    </a>
                                </header>

                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        @foreach ($categories as $key => $item)
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapse{{ $item->id }}" aria-expanded="false"
                                                    aria-controls="flush-collapseOne">
                                                    {{ $item->title }}
                                                </button>
                                            </h2>
                                            <div id="flush-collapse{{ $item->id }}" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body p-1 ps-3 pl-3">
                                                    {{-- Body --}}

                                                    <div class="accordion accordion-flush" id="accordionFlushExample_test">
                                                        <div class="accordion-item">
                                                            @php
                                                                $sub_categorys = App\Models\Admin\Category::getSubcatByCat($item->id);
                                                            @endphp
                                                            @foreach ($sub_categorys as $item)
                                                                {{-- @php
                                                                    dd($item);
                                                                @endphp --}}
                                                                <h2 class="accordion-header" id="flush-headingOne_test">
                                                                    <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#flush-collapseOne_test"
                                                                        aria-expanded="false"
                                                                        aria-controls="flush-collapseOne_test">
                                                                        {{ $item->title }}
                                                                    </button>
                                                                </h2>
                                                                <div id="flush-collapseOne_test" class="accordion-collapse collapse"
                                                                    aria-labelledby="flush-headingOne_test"
                                                                    data-bs-parent="#accordionFlushExample_test">
                                                                    <div class="accordion-body p-1 ps-3 pl-3">
                                                                        {{-- Body --}}

                                                                        <div class="accordion accordion-flush" id="inner_sub-2">
                                                                            <div class="accordion-item">
                                                                                <h2 class="accordion-header"
                                                                                    id="flush-headingOne_test-2">
                                                                                    <button class="accordion-button collapsed"
                                                                                        type="button" data-bs-toggle="collapse"
                                                                                        data-bs-target="#flush-sub-2"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="flush-sub-2">
                                                                                        Sub Sub Categories
                                                                                    </button>
                                                                                </h2>
                                                                                <div id="flush-sub-2"
                                                                                    class="accordion-collapse collapse"
                                                                                    aria-labelledby="flush-headingOne_test-2"
                                                                                    data-bs-parent="#inner_sub-2">
                                                                                    <div class="accordion-body p-1 ps-4 pl-4">
                                                                                        {{-- Body --}}
                                                                                        <div class="accordion accordion-flush"
                                                                                            id="inner_sub-3">
                                                                                            <div class="accordion-item">
                                                                                                <h2 class="accordion-header"
                                                                                                    id="flush-headingOne_test-3">
                                                                                                    <button
                                                                                                        class="accordion-button collapsed"
                                                                                                        type="button"
                                                                                                        data-bs-toggle="collapse"
                                                                                                        data-bs-target="#flush-sub-3"
                                                                                                        aria-expanded="false"
                                                                                                        aria-controls="flush-sub-3">
                                                                                                        Sub Sub Sub Categories
                                                                                                    </button>
                                                                                                </h2>
                                                                                                <div id="flush-sub-3"
                                                                                                    class="accordion-collapse collapse"
                                                                                                    aria-labelledby="flush-headingOne_test-3"
                                                                                                    data-bs-parent="#inner_sub-3">
                                                                                                    <div
                                                                                                        class="accordion-body p-1 ps-5 pl-5">
                                                                                                        {{-- Body --}}



                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>


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
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </article>

                            <!-- filter-group  .// -->
                            <article class="filter-group">
                                <header class="card-header product-header">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true"
                                        class="">
                                        <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="area_title">Manufacturers</h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse show" id="collapse_2">

                                        <div class="px-4 py-2 d-flex flex-column">
                                            @if (!empty($_GET['brand']))
                                                @php
                                                    $filterBrand = explode(',', $_GET['brand']);
                                                @endphp
                                            @endif
                                            @foreach ($brands as $brand)
                                            @php
                                                $products_brand = $count_brands->whereIn('brand_id', $brand->id)->count();
                                                //dd($products_brand);
                                            @endphp

                                            <label class="custom-control custom-checkbox d-flex">
                                                {{-- <input type="checkbox" checked="" class="custom-control-input"
                                                    style="margin-right: 10px;" /> --}}
                                                    <input class="custom-control-input" type="checkbox" name="brand[]"
                                                    id="exampleBrand{{ $brand->id }}" value="{{ $brand->slug }}"
                                                    @if (!empty($filterBrand) && in_array($brand->slug, $filterBrand)) checked @endif
                                                    onchange="this.form.submit()" style="margin-right: 10px;">
                                                <div class="custom-control-label">
                                                    <h6>{{ $brand->title }} <small class="badge bg-black ml-2 badge-pill">{{$products_brand}}</small></h6>
                                                    {{-- <b class="badge bg-black ml-2 badge-pill badge-light float-right"></b> --}}
                                                </div>
                                            </label>
                                            @endforeach


                                        </div>

                                    <!-- card-body.// -->
                                </div>
                            </article>

                            <!-- filter-group .// -->
                            <article class="filter-group">
                                <header class="card-header product-header">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true"
                                        class="">
                                        <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="area_title">Price range</h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse show " id="collapse_3">
                                    <div class="card p-2">
                                        <div class="price-input">
                                          <div class="field">
                                            <span>Min</span>
                                            @if(!empty($_GET['price']))
                                            @else
                                            @endif
                                            <input type="number" class="input-min" value="2500" name="price_range" onkeyup="this.form.submit()">
                                          </div>
                                          <div class="separator">-</div>
                                          <div class="field">
                                            <span>Max</span>
                                            @if(!empty($_GET['price']))
                                            @else
                                            @endif
                                            <input type="number" class="input-max" value="75000" name="price_range" onkeyup="this.form.submit()">
                                          </div>
                                        </div>
                                        <div class="slider">
                                          <div class="progress"></div>
                                        </div>
                                        <div class="range-input mb-2">
                                            @if(!empty($_GET['price']))
                                            @else
                                            @endif
                                          <input type="range" class="range-min" min="0" max="10000" value="2500" step="100" onkeyup="this.form.submit()">
                                          <input type="range" class="range-max" min="0" max="100000" value="75000" step="100" onkeyup="this.form.submit()">
                                        </div>
                                    </div>


                                    {{-- <div id="slider-range" class="price-filter-range text-success" data-min="0" data-max="20000" style="margin-bottom:0.7rem; "></div>
                                        <input type="hidden" id="price_range" name="price_range" value="">
                                        @if(!empty($_GET['price']))
                                        <input class="form-control mb-2" type="text" id="amount" value="USD $ {{ $_GET['price'] }}" readonly>
                                        @else
                                        <input class="form-control mb-2" type="text" id="amount" value="USD $0 - $20000" readonly>
                                        @endif --}}
                                </div>
                            </article>


                            <article class="filter-group">
                                <header class="card-header product-header">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false"
                                        class="">
                                        <i class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="area_title">More filter</h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse in" id="collapse_5">
                                    <div class="card-body" style="padding: 15px 26px 10px !important;">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="myfilter_radio" checked=""
                                                class="custom-control-input" />
                                            <div class="custom-control-label">Any condition</div>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="myfilter_radio" class="custom-control-input" />
                                            <div class="custom-control-label">Brand new</div>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="myfilter_radio" class="custom-control-input" />
                                            <div class="custom-control-label">Used items</div>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="myfilter_radio" class="custom-control-input" />
                                            <div class="custom-control-label">Very old</div>
                                        </label>
                                    </div>
                                    <!-- card-body.// -->
                                </div>
                            </article>
                                <!-- filter-group .// -->
                        </div>
                        <!-- card.// -->
                    </aside>

                    <!----------Products section --------->
                    <main class="col-lg-9">
                        <header class="product_showing shadow-lg px-2 py-2 mb-4">
                            <div class="form-inline d-flex justify-content-between align-items-center">
                                <span class="mr-md-auto">@if ($products)
                                    {{ $products->count() }} Items
                                @else
                                    No Item
                                @endif
                                found </span>
                                <div class="d-flex align-items-center">
                                    <div class="me-2 ml-2">
                                        <select class="show btn product_btn_dropdown" name="show" onchange="this.form.submit();" data-placeholder="Results Per Page">
                                            <option value="">Default</option>
                                            <option value="7" @if (!empty($_GET['show']) && $_GET['show'] == '7') selected @endif>Per Page: 7</option>
                                            <option value="10" @if (!empty($_GET['show']) && $_GET['show'] == '10') selected @endif>Per Page: 10</option>
                                            <option value="20" @if (!empty($_GET['show']) && $_GET['show'] == '20') selected @endif>Per Page: 20</option>
                                            <option value="40" @if (!empty($_GET['show']) && $_GET['show'] == '40') selected @endif>Per Page: 40</option>
                                        </select>
                                    </div>
                                    <div>
                                        <div class="">
                                            <select class='sortBy btn product_btn_dropdown px-1' name='sortBy' onchange="this.form.submit();" style="margin-right:5px;">
                                                <option value="">Sort By</option>
                                                <option value="titleASC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleASC') selected @endif>Ascending By Name
                                                </option>
                                                <option value="priceASC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceASC') selected @endif> Ascending By Price
                                                </option>
                                                <option value="titleDESC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'titleDESC') selected @endif>Descending By Name
                                                </option>
                                                <option value="priceDESC" @if (!empty($_GET['sortBy']) && $_GET['sortBy'] == 'priceDESC') selected @endif>Descending By Price
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- sect-heading -->
                        {{-- @php
                            dd($products->appends(request()->query()));
                        @endphp --}}
                        <div class="row">

                            <div class="container mt-1 mb-5">
                                <div class="d-flex justify-content-center row">
                                    <div class="col-md-12">
                                        @if (count($products)>0)
                                            <!-- First Product Start -->
                                            @foreach ($products as $product)
                                                <div class="row m-0 p-2 shadow-lg bg-white border rounded d-flex align-items-center">
                                                    <div class="col-md-3 mt-1 mb-2">
                                                        <img class="img-fluid img-responsive rounded product-image"
                                                            src="{{ asset($product->thumbnail) }}" alt="{{ $product->name }}">
                                                    </div>
                                                    <div class="col-md-9 mb-2">
                                                        <div class="row">
                                                            <a href="{{ route('product.details',['id'=> $product->slug]) }}">
                                                                <h4 class="my-3" style="color: #ae0a46;">{{$product->name}}</h4>
                                                            </a>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-8 mt-1">

                                                                <div class="row">

                                                                    <span style="font-size: 14px;">
                                                                        SKU #: {{$product->sku_code}} |
                                                                        MF #:  {{$product->mf_code}} |
                                                                    <br> NG #:  {{$product->product_code}}
                                                                    </span>
                                                                    <br>
                                                                    <p>
                                                                        {!! Str::limit($product->short_desc, 180) !!}
                                                                    </p>
                                                                </div>


                                                            </div>
                                                            <div class="col-lg-4 text-center border-left mt-1">
                                                                <div class="text-center">
                                                                    @if ($product->rfq != 1)
                                                                        <small style="font-size: 0.6em;">USD</small>
                                                                        @if (!empty($product->discount))
                                                                        <h3 class="mr-1 font-number text-center">$ {{$product->discount}}</h3><span class="strike-text">$ {{ $product->price }}</span>
                                                                        @else
                                                                        <h3 class="mr-1 font-number text-center">$ {{ $product->price }}</h3>
                                                                        @endif
                                                                    @endif

                                                                </div>
                                                                @if (($product->qty) > 0)
                                                                <h6 class="text-success font-number text-center" style="font-size:20px; text-transform:capitalize;">{{ $product->qty }} in stock</h6>

                                                                    @else
                                                                    <h6 class="text-center" style="font-size:20px; text-transform:capitalize;">{{ ucfirst($product->stock) }}</h6>
                                                                @endif


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

                                                                {{-- <div class="d-flex flex-column mt-4">
                                                                    <button class="btn product_btn btn-sm"
                                                                        type="button">Details
                                                                    </button>
                                                                    <button class="btn product_btn btn-sm mt-2"
                                                                        type="button">Add to Basket
                                                                    </button>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
                                            <!-- First Product End -->
                                        @else
                                        <div class="row m-0 p-2 shadow-lg bg-white border rounded d-flex align-items-center">
                                            <h4 class="text-danger text-center">No Product Found. Search again.</h4>
                                        </div>
                                        @endif


                                    </div>
                                </div>
                            </div>


                            <div class="d-flex justify-content-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">

                                        {{ $products->appends(request()->query())->links() }}
                                    </ul>

                                </nav>
                            </div>
                        </div>
                    </main>

            </div>
        </form>
    </section>




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





@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            const rangeInput = document.querySelectorAll(".range-input input"),
                priceInput = document.querySelectorAll(".price-input input"),
                range = document.querySelector(".slider .progress");
                let priceGap = 50000;

                priceInput.forEach(input =>{
                    input.addEventListener("input", e =>{
                        let minPrice = parseInt(priceInput[0].value),
                        maxPrice = parseInt(priceInput[1].value);

                        if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
                            if(e.target.className === "input-min"){
                                rangeInput[0].value = minPrice;
                                range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                            }else{
                                rangeInput[1].value = maxPrice;
                                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                            }
                        }
                    });
                });

                rangeInput.forEach(input =>{
                    input.addEventListener("input", e =>{
                        let minVal = parseInt(rangeInput[0].value),
                        maxVal = parseInt(rangeInput[1].value);

                        if((maxVal - minVal) < priceGap){
                            if(e.target.className === "range-min"){
                                rangeInput[0].value = maxVal - priceGap
                            }else{
                                rangeInput[1].value = minVal + priceGap;
                            }
                        }else{
                            priceInput[0].value = minVal;
                            priceInput[1].value = maxVal;
                            range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                        }
                    });
                });
        })
    </script>

@endsection


