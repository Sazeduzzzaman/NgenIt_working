@extends('frontend.master')
@section('content')

    <style>
        .common_product_technolgy_deals_wrapper{
            border-top: 1px solid silver;
            border-bottom: 1px solid silver;
        }
        .account_benefits_section_wp{
            padding-bottom: 40px;
            padding-top: 40px;
            background: #f7f6f5;

        }
        .featureinfo_title{
            height: 3.4rem;
        }
        .iconbox-icon img{
            width: 120px;
            height: 70px;
            margin: 10px 0px 10px 0px;
            border-radius: 0% !important;
        }
        :root {
            --main-color: #ae0a46;
        }

        .demo {
            background-color: #eee;
        }

        .serviceBox {
            color: var(--main-color);
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 10px 15px 30px;
            /* position: relative; */
            z-index: 1;
        }

        .serviceBox:hover:after {
            background: #880736;
            color: white;
        }

        .main_color {
            background-color: #ae0a46 !important;
             color: white !important;

        }
        .serviceBox:hover::before {
            background: #880736;

        }

        .serviceBox:hover {
            color: white !important;
        }

        .serviceBox:before,
        .serviceBox:after {
            content: "";
            background: linear-gradient(to left bottom, #eee, #fff, #fff);
            border-radius: 15px;
            position: absolute;
            top: 45px;
            left: 15px;
            right: 0px;
            bottom: 4px;
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
            z-index: -1;
        }

        .serviceBox:after {
            background: var(--main-color);
            width: 50%;
            height: 50%;
            border-radius: 0 0 20px 0;
            box-shadow: none;
            top: auto;
            left: auto;
            bottom:0;
            right: 0;
            z-index: -2;
        }

        .serviceBox .service-icon {
            color: var(--main-color);
            background: #fff;
            line-height: 77px;
            width: 80px;
            height: 80px;
            margin: 0 0 30px;
            border-radius: 50px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.3), 0 0 0 3px var(--main-color);
        }

        .serviceBox .title {
            font-size: 19px;
            font-weight: 600;
            text-transform: capitalize;
            margin: 0 10px 10px;
        }

        .serviceBox .description {
            color: #888;
            font-size: 14px;
            line-height: 22px;
            text-align: justify;
            margin: 0 15px;
        }

        .serviceBox.golden {
            --main-color: #ae0a46;
        }

        .serviceBox.golden:hover {
            --main-color: #880736;
        }

        /* Brand Box */
        .box {
            font-family: 'Signika', sans-serif;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        .box:before {
            content: '';
            background: linear-gradient(#ae0a46, #880736);
            height: 100%;
            width: 100%;
            opacity: 0;
            position: absolute;
            left: 0;
            top: 0;
            transition: all 0.5s ease 0s;
        }

        .box:hover:before {
            border-radius: 100% 0 0 0;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            opacity: 0.9;
        }

        .box img {
            width: 100px;
            height: 65px;
        }

        .box .box-content {
            color: #fff;
            width: 85%;
            opacity: 0;
            transform: translateX(-50%);
            position: absolute;
            bottom: -20px;
            left: 50%;
            z-index: 2;
            transition: all 0.6s ease;
        }

        .box:hover .box-content {
            opacity: 1;
            bottom: 20px;
        }

        .box .title {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin: 0 0 3px;
        }

        .box .post {
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 2px;
            text-transform: uppercase;
            display: block;
        }

        .box .icon {
            padding: 0;
            margin: 0;
            list-style: none;
            right: 0px;
            top: 0px;
        }

        .box .icon li {
            margin: 4px 0;
            transform: scale(0);
            transition: all 0.3s ease 0s;
        }

        .box:hover .icon li {
            transform: scale(1);
        }

        .box .icon li a {
            background-color: rgba(255, 255, 255, 0.2);
            font-size: 15px;
            line-height: 33px;
            width: 33px;
            height: 33px;
            display: block;
            transition: all 0.35s;
        }

        .box .icon li a:hover {
            color: #104627;
            background: #fff;
            box-shadow: 3px 3px 1px rgba(255, 255, 255, .4);
        }
        .iconbox {
            width: 175px;
            background: #ffffff;
            background-color: #ffffff;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 6px 6px;
            text-align: right;
            display: block;
            margin-top: 60px;
            margin-bottom: 15px;
        }

        @media only screen and (max-width:990px) {
            .box {
                margin: 0 0 30px;
            }
        }

        @media only screen and (max-width: 1199px) {
            .serviceBox {
                margin: 0 0 30px;
            }
        }

        ul {
            list-style-type: circle;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: linear-gradient(
        rgba(0,0,0,0.8),
        rgba(0,0,0,0.8)
        ),url('https://img.freepik.com/free-vector/dark-blue-waves-dots-abstract-background_79603-879.jpg'); background-size: cover">
        <div class="container ">
            <h1>Ready For Shop</h1>
            <p class="text-center text-white">Explore our Products By categories, Brands to see<br> options for hardware,
                software and accessories. </p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="{{route('contact')}}">Talk to our specialist</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->


    <!--=======Popular products Begin=======-->
    <section class="container mt-4 my-5">
        <div class="popular_product_section_content">
            <!-- section title -->
            <div class="home_title mt-3 mb-3">
                <div class="software_feature_title">
                    <h1 class="text-center ">Top Products</h1>
                </div>
                {{-- <p class="home_title_text">See how we’ve helped organizations of all sizes
                    <span class="font-weight-bold">across every industry</span>
                    <br> maximize the value of their IT solutions, leverage emerging technologies and create fresh
                    experiences.
                </p> --}}
            </div>
            <!-- wrapper -->
            <div class="populer_product_slider">

                <!-- product_item -->
                @foreach ($products as $item)
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="{{ asset($item->thumbnail) }}" alt="" width="150px" height="113px">
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
                                            style="text-decoration: line-through; color:red">$ {{ $item->price }}</span>
                                        <span class="price_currency_value" style="color: black">$
                                            {{ $item->discount }}</span>
                                    @else
                                        <span class="price_currency_value">$ {{ $item->price }}</span>
                                    @endif
                                </div>

                                <!-- button -->
                                @php
                                    $cart = Cart::content();
                                    $exist = $cart->where('id', $item->id);
                                    //dd($cart->where('image' , $item->thumbnail )->count());
                                @endphp
                                @if ($cart->where('id', $item->id)->count())
                                    <a href="javascript:void(0);" class="common_button2 p-0 py-2 px-1 pb-2"
                                        style="height: 2.5rem"> Already in Cart</a>
                                @else
                                    <form action="{{ route('add.cart') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value="{{ $item->id }}">
                                        <input type="hidden" name="name" id="name" value="{{ $item->name }}">
                                        <input type="hidden" name="qty" id="qty" value="1">
                                        <button type="submit" class="product_button">Add to Basket</button>
                                    </form>
                                @endif
                            @else
                                <div class="product_item_price">
                                    <span class="price_currency_value">---</span>
                                </div>
                                <a class="product_button" href="{{ route('product.details', $item->slug) }}">Details</a>
                            @endif
                        </div>

                    </div>
                    <!-- product item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <!--========Shop by category=======-->
    <section class="clint_tab_section my-5">
        <div class="container">
            <div class="clint_tab_content pb-3">
                <!-- home title -->
                <div class="home_title mt-3 mb-3">
                    <div class="software_feature_title">
                        <h1 class="text-center ">By Categories</h1>
                    </div>
                    <p class="home_title_text">See how we’ve helped organizations of all sizes
                        <span class="font-weight-bold">across every industry</span>
                        <br> maximize the value of their IT solutions, leverage emerging technologies and create fresh
                        experiences.
                    </p>
                </div>
                <!-- Client Tab Start -->
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab" href="#all"
                                    role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#software"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Software</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#hardware"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Hardware</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#training"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">Training & Books</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel"
                                aria-labelledby="nav-healthcare">
                                <div class="row">

                                    @if ($all_categories)
                                        @foreach ($all_categories as $item)
                                            <div class="col-md-3 col-sm-6 my-4">
                                                <a href="{{route('category.html',$item->slug)}}">
                                                    <div class="serviceBox">
                                                        <div class="service-icon">
                                                            <img class="img-fluid"
                                                                src="{{asset('storage/'.$item->image)}}"
                                                                style="border-radius: 50%; height:70px !important; width:70px !important;">
                                                        </div>
                                                        <p class="">{{$item->title}}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="tab-pane fade show" id="software" role="tabpanel"
                                aria-labelledby="nav-healthcare">
                                <div class="row">

                                    @if ($software_categories)
                                        @foreach ($software_categories as $item)
                                            <div class="col-md-3 col-sm-6 my-4">
                                                <a href="{{route('category.html',$item->slug)}}">
                                                    <div class="serviceBox">
                                                        <div class="service-icon">
                                                            <img class="img-fluid"
                                                                src="{{asset('storage/'.$item->image)}}"
                                                                style="border-radius: 50%; height:70px !important; width:70px !important;">
                                                        </div>
                                                        <p class="">{{$item->title}}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="tab-pane fade" id="hardware" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="container">
                                            <div class="row">

                                                @if ($hardware_categories)
                                                    @foreach ($hardware_categories as $item)
                                                        <div class="col-md-3 col-sm-6 my-4">
                                                            <a href="{{route('category.html',$item->slug)}}">
                                                                <div class="serviceBox">
                                                                    <div class="service-icon">
                                                                        <img class="img-fluid"
                                                                            src="{{asset('storage/'.$item->image)}}"
                                                                            style="border-radius: 50%; height:70px !important; width:70px !important;">
                                                                    </div>
                                                                    <p class="">{{$item->title}}</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="training" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 my-4">
                                        <div class="container">
                                            <div class="row">
                                                @if ($training_categories)
                                                    @foreach ($training_categories as $item)
                                                        <div class="col-md-3 col-sm-6">
                                                            <a href="{{route('category.html',$item->slug)}}">
                                                                <div class="serviceBox">
                                                                    <div class="service-icon">
                                                                        <img class="img-fluid"
                                                                            src="{{asset('storage/'.$item->image)}}" alt=""
                                                                            style="border-radius: 50%; height:70px !important; width:70px !important;">
                                                                    </div>
                                                                    <p class="">{{$item->title}}</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
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

    <!--======// Our expert //======-->
    <section class="account_benefits_section_wp py-5">
        <div class="container">
            @if ($techglossy)
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}"
                            alt="{{ $techglossy->badge }}" style="height: 300px; border-radius:15px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 account_benefits_section">

                        <h4 style="font-size:24px;font-weight:400;">{{ $techglossy->badge }}</h4>
                        <h4 class="pb-2">{{ $techglossy->title }}</h4>
                        <p>{{ $techglossy->header }}</p>

                        <ul>
                            @php
                                $tag = $techglossy->tags;
                                $tags = explode(',', $tag);
                            @endphp
                            @foreach ($tags as $item)
                                <li>{{ ucwords($item) }}</li>
                            @endforeach
                        </ul>
                        <button class="common_button2">Read Details</button>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!---------End -------->
    <!-----Transform your devices----->

    <!--=====Need Help Finding Prodcut======-->
    <section class="need_help_finding_prodcut"
        style="background-image:url('{{ asset('frontend/images/help-background-imges.jpg') }}')">
        <div class="container">
            <h2>Need Help To Find <br> The Right Products?</h2>
            {{-- <h3>Our product selectors and configurators will pinpoint the right item for your organization. These
                easy-to-use Insight Intelligent Technology™ tools let you choose your needs and requirements, and then
                generate the results that are the best match.</h3> --}}
            <div class="d-flex justify-content-center">
                <a href="{{ route('shop') }}" class="finding_product_btn">Explore our configurators</a>
            </div>

        </div>
    </section>
    <!------Need Help Finding End---->

    <!--===== Technolgy Deals======-->
    <section class="common_product_technolgy_deals_wrapper py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img class="img-fluid" src="{{ asset('frontend/images/technology-deals.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 technolgy_deals_blog">
                    <h2>Unbeatable technology deals</h2>
                    <p>Explore <a href="{{ route('custom.product', 'deals') }}">deals,</a> <a
                            href="{{ route('custom.product', 'refurbished') }}">refurbished products</a> and limited-time
                        offers. From laptops to cables, accessories and printers, we offer the technology you need at
                        affordable prices — you gain the option of discounted pricing from a variety of brands.</p><br>
                    <a href="{{ route('shop') }}" class="common_button">Shop & Save</a>
                </div>
            </div>
        </div>
    </section>

    <!----Technolgy Deals End---->

    <!--========Shop by Brands=======-->
    <div class="container">
        <div class="home_title mt-3 mb-3">
            <div class="software_feature_title">
                <h1 class="text-center ">By Brands</h1>
            </div>
            <p class="home_title_text">See how we’ve helped organizations of all sizes
                <span class="font-weight-bold">across every industry</span>
                <br> maximize the value of their IT solutions, leverage emerging technologies and create fresh
                experiences.
            </p>
        </div>
        <div class="row mt-5 mb-5">
            @if ($brands)
                @foreach ($brands as $item)
                    @php
                        $brand = App\Models\Admin\Brand::where('id', $item->brand_id)->select('brands.image','brands.title','brands.slug')->first();
                    @endphp
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="iconbox">
                            <div class="iconbox-icon">
                                <img src="{{asset('storage/'.$brand->image)}}" alt="">
                            </div>
                            <div class="featureinfo">
                                <h4 class="text-center featureinfo_title">{{$brand->title}}</h4>
                                <div class="d-flex justify-content-between">

                                    <div>
                                        <a class="btn btn-light p-1 " href="{{route('brandpage.html',$brand->slug)}}" style="font-size: 12px;">Details</a>
                                    </div>
                                    <div>
                                        <a class="btn btn-light p-1 main_color" href="{{route('custom.product',$brand->slug)}}" style="font-size: 12px;">Shop</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>

    </div>
    <!--========Shop by Brands=======-->

    <!--========Page Contact Form=======-->
    @include('frontend.partials.footer_contact')
    <!--========Page Contact Form=======-->

@endsection








