@extends('frontend.master')
@section('content')
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css');
        /* @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'); */

        .title_top_heading {
            font-family: "Klinic Slab";
            font-size: 36px;
            line-height: 0px;
            color: var(--heading);
            margin-bottom: 14px;
            font-weight: 400;
        }

        /* .footer_top{
                padding: 13px 0px 1px !important;
            } */
        .footer_top p {
            font-size: 1.5rem !important;
        }

        .custom_col-2 {
            flex: 0 0 auto;
            width: 20%;
        }

        .feature_descrip {
            height: 5rem;
        }

        .tag_btn {
            background-color: #f7f6f5;
            color: black;
            font-size: 13px;
            padding: 5px;
        }

        body {
            margin: 0;
            padding: 0;
        }

        p {
            font-size: 14px !important;
        }

        .brand_side_text {
            transition: 0.5s all !important;
        }

        .Advance-Slider {
            float: left;
            width: 100%;
            overflow: hidden;
        }

        .story_title {

            padding-bottom: 3rem;
            color: #3e332d;
            margin-top: 2rem;
        }


        .Advance-Slider button.slick-arrow {
            position: absolute;
            z-index: 2;
            top: 0;
            bottom: 0;
            height: 50px;
            width: 50px;
            background: #fff;
            z-index: 99999;
            border: none;
            margin: auto;
            font-size: 0;
            text-align: center;
            outline: none;
            cursor: pointer;
        }

        .Advance-Slider .img-fill {
            position: relative;
            height: 100%;
        }

        .Advance-Slider .img-fill img {
            height: 100%;
            width: 100%;
            /* object-fit: co; */
            animation: myMove 10s linear infinite;
        }

        .Advance-Slider .item {
            height: 65vh;
            /*80vh*/
            overflow: hidden;
            outline: none;
        }

        .Advance-Slider button.slick-next.slick-arrow {
            right: 0;
            left: auto;
        }

        .Advance-Slider button.slick-arrow:before {
            content: "\f104";
            top: 0;
            left: 0;
            margin: auto;
            font-family: fontawesome;
            font-size: 18px;
        }

        .Advance-Slider button.slick-next.slick-arrow:before {
            transform: scaleX(-1);
            display: block;
        }

        .Advance-Slider .img-fill:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .Advance-Slider ul.slick-dots {
            position: absolute;
            bottom: 20px;
            left: 0;
            width: 100%;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .Advance-Slider ul.slick-dots li {
            display: inline-block;
            height: auto;
            padding: 0 5px;
            line-height: 0px;
        }

        .Advance-Slider ul.slick-dots li button {
            height: 15px;
            width: 15px;
            border-radius: 100%;
            background: #fff;
            border: none;
            font-size: 0px;
            padding: 0px;
            opacity: 0.5;
            outline: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .Advance-Slider ul.slick-dots li.slick-active button {
            opacity: 1;
        }

        .Advance-Slider button.slick-arrow {
            display: none !important;
            perspective: 360px;
        }

        .Advance-Slider button.slick-arrow .thumb {
            display: none !important;
            position: absolute;
            height: 100px;
            width: 150px;
            left: 100%;
            top: -28px;
            transform-origin: 0% 0%;
            transform: rotate3d(1, 0, 0, 90deg);
        }

        .Advance-Slider button.slick-arrow .thumb img {
            height: 100%;
            width: 100%;
        }

        .Advance-Slider button.slick-next {}

        .Advance-Slider button.slick-next .thumb {
            left: auto;
            right: 100%;
        }

        .Advance-Slider button.slick-prev.hover-out .thumb,
        .Advance-Slider button.slick-prev .thumb {
            animation: out-left 300ms ease 0ms 1 forwards;
        }

        .Advance-Slider button.slick-prev.hover-in .thumb {
            animation: in-left 300ms ease 0ms 1 forwards;
        }

        .Advance-Slider button.slick-next.hover-out .thumb,
        .Advance-Slider button.slick-next .thumb {
            animation: out-right 300ms ease 0ms 1 forwards;
            transform-origin: 100% 50%;
        }

        .Advance-Slider button.slick-next.hover-in .thumb {
            animation: in-right 300ms ease 0ms 1 forwards;
        }

        .Advance-Slider button.slick-prev:hover {
            transform: translateX(-100%);
        }

        .Advance-Slider button.slick-prev {
            transition: all 0.3s ease;
        }

        .Advance-Slider button.slick-next:hover {
            transform: translateX(100%);
        }

        .Advance-Slider button.slick-next {
            transition: all 0.3s ease;
        }

        .Advance-Slider ul.slick-dots li button img {
            height: 0;
            width: 20px;
            top: 0;
            object-fit: cover;
            transition: height 0.2s ease 0.2s, width 0.2s ease 0s;
            position: relative;
            left: -50%;
        }

        .Advance-Slider ul.slick-dots li button a {
            position: absolute;
            height: 90px;
            bottom: calc(100%);
            width: 0;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            transition: all 0.2s ease 0.2s;
            padding-bottom: 10px;
        }

        .Advance-Slider ul.slick-dots li button {
            position: relative;
            display: flex;
            justify-content: center;
        }

        .Advance-Slider ul.slick-dots li button:hover a img {}

        .Advance-Slider ul.slick-dots li button:hover img {
            height: 80px;
            width: 140px;
            transition: height 0.2s ease, width 0.2s ease 0.2s;
        }

        .Advance-Slider ul.slick-dots li button:hover a {
            width: 140px;
            transition: all 0.3s ease 0s;
        }

        .Advance-Slider ul.slick-dots li button:hover {
            opacity: 1;
        }

        .Advance-Slider ul.slick-dots li button:before {
            content: '';
            bottom: calc(100% + -10px);
            left: 7px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0px;
            position: absolute;
            pointer-events: none;
            border-color: rgba(255, 255, 255, 0);
            border-top-color: #fff;
            border-width: 10px;
            margin-left: -10px;
            opacity: 0;
            transition: 0.3s ease 350ms;
        }

        .Advance-Slider ul.slick-dots li button:hover:before {
            opacity: 1;
            transition: 0.3s ease 0s;
        }

        .Advance-Slider .item.slick-active {
            animation: Slick-FastSwipeIn 1s both;
        }

        .Advance-Slider .item .contain-wrapper {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 1;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .Advance-Slider .item .contain-wrapper .dots-contain {
            display: none;
        }

        .Advance-Slider .item h3 {
            margin: 0px;
            color: #fff;
            font-size: 2rem;
            font-weight: 300;
            font-family: "allumi-2-std", "Helvetica Neue", "Helvetica", Helvetica, Arial,
                sans-serif;
            text-transform: capitalize;
        }

        .Advance-Slider .item {
            color: #fff;
            font-family: 'Roboto', sans-serif;
        }

        .Advance-Slider .item h5 {
            font-family: "Klinic Slab";
            font-size: 1rem;
            font-weight: 300;
            padding: 10px 0 0;
            margin: 0;
            text-transform: capitalize;
        }

        .Advance-Slider .item .contain-wrapper .info {
            max-width: 1200px;
        }

        .Advance-Slider .item h5 span {
            color: #00BCD4;
        }

        .Advance-Slider .item h3 span {
            color: #00BCD4;
        }

        .custom_shadow {
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
        }

        /* .Advance-Slider .item h3 {
                                    animation: fadeOutRight 1s both;
                                }

                                .Advance-Slider .item.slick-active h3 {
                                    animation: fadeInDown 1s both 1s;
                                }

                                .Advance-Slider .item h5 {
                                    animation: fadeOutLeft 1s both;
                                }

                                .Advance-Slider .item.slick-active h5 {
                                    animation: fadeInLeft 1s both 1.5s;
                                } */
        .slick-dotted.slick-slider {
            margin-bottom: -100px !important;
        }

        .Advance-Slider button {
            display: none;
        }

        .our_success_item_body {
            padding: 20px 20px 0px 20px;
        }

        h1,
        h2 {
            font-size: 24px !important;
        }

        /* @keyframes myMove {
                                    from {
                                        transform: scale(1.0, 1.0);
                                        transform-origin: 50% 50%;
                                    }

                                    to {
                                        transform: scale(1.8, 1.9);
                                        transform-origin: 50% 0%;
                                    }
                                } */

        @keyframes Slick-FastSwipeIn {
            0% {
                transform: rotate3d(0, 1, 0, 150deg) scale(0) perspective(400px);
            }

            100% {
                transform: rotate3d(0, 1, 0, 0deg) scale(1) perspective(400px);
            }
        }

        @keyframes in-left {
            from {
                -webkit-transform: rotate3d(0, 1, 0, 90deg);
                transform: rotate3d(0, 1, 0, 90deg);
            }

            to {
                -webkit-transform: rotate3d(0, 0, 0, 0deg);
                transform: rotate3d(0, 0, 0, 0deg);
            }
        }

        @keyframes out-left {
            from {
                -webkit-transform: rotate3d(0, 0, 0, 0deg);
                transform: rotate3d(0, 0, 0, 0deg);
            }

            to {
                -webkit-transform: rotate3d(0, 1, 0, 86deg);
                transform: rotate3d(0, 1, 0, 86deg);
            }
        }

        @keyframes in-right {
            from {
                -webkit-transform: rotate3d(0, -1, 0, 90deg);
                transform: rotate3d(0, -1, 0, 90deg);
            }

            to {
                -webkit-transform: rotate3d(0, 0, 0, 0deg);
                transform: rotate3d(0, 0, 0, 0deg);
            }
        }

        @keyframes out-right {
            from {
                -webkit-transform: rotate3d(0, 0, 0, 0deg);
                transform: rotate3d(0, 0, 0, 0deg);
            }

            to {
                -webkit-transform: rotate3d(0, -1, 0, 86deg);
                transform: rotate3d(0, -1, 0, 86deg);
            }
        }
    </style>

    <!--======// Banner Section //======-->
    @if (!empty($home->branner1) && !empty($home->branner2) && !empty($home->branner3))
        <section>
            <div class="Advance-Slider">
                <!-- Item -->
                @if (!empty($home->branner1))
                    <div class="item">
                        <div class="img-fill">
                            <img src="{{ asset('storage/' . $home->branner1) }}" alt="">
                            <div class="contain-wrapper">
                                <div class="dots-contain">
                                    <img class="dots-img" src="{{ asset('storage/' . $home->branner1) }}" alt="">
                                </div>
                                <div class="info w-50 mb-3">
                                    @if ($home->banner1_title)
                                        <div>
                                            <h3><strong>{{ $home->banner1_title }}</strong></h3>
                                            <h5 class="text-white my-4 w-75 mx-auto">
                                                {{ $home->banner1_short_description }}
                                            </h5>
                                        </div>
                                    @endif
                                    @if ($home->banner1_button_link)
                                        <div class="my-4">
                                            <a class="common_button2"
                                                href="{{ $home->banner1_button_link }}">{{ $home->banner1_button_name }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- // Item -->

                <!-- Item -->
                @if (!empty($home->branner2))
                    <div class="item">
                        <div class="img-fill">
                            <img src="{{ asset('storage/' . $home->branner2) }} " alt="">
                            <div class="contain-wrapper">
                                <div class="dots-contain">
                                    <img class="dots-img" src="{{ asset('storage/' . $home->branner2) }}" alt="">
                                </div>
                                <div class="info w-50 mb-3">
                                    @if ($home->banner2_title)
                                        <div>
                                            <h3><strong>{{ $home->banner2_title }}</strong></h3>
                                            <h5 class="text-white my-4 w-75 mx-auto">
                                                {{ $home->banner2_short_description }}
                                            </h5>
                                        </div>
                                    @endif
                                    @if ($home->banner2_button_link)
                                        <div class="my-4">
                                            <a class="common_button2"
                                                href="{{ $home->banner2_button_link }}">{{ $home->banner2_button_name }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- // Item -->

                <!-- Item -->
                @if (!empty($home->branner3))
                    <div class="item">
                        <div class="img-fill">
                            <img src="{{ asset('storage/' . $home->branner3) }} " alt="">
                            <div class="contain-wrapper">
                                <div class="dots-contain">
                                    <img class="dots-img" src="{{ asset('storage/' . $home->branner3) }}" alt="">
                                </div>
                                <div class="info w-50 mb-3">
                                    @if ($home->banner3_title)
                                        <div>
                                            <h3><strong>{{ $home->banner3_title }}</strong></h3>
                                            <h5 class="text-white my-4 w-75 mx-auto">
                                                {{ $home->banner3_short_description }}
                                            </h5>
                                        </div>
                                    @endif
                                    @if ($home->banner3_button_link)
                                        <div class="my-4">
                                            <a class="common_button2"
                                                href="{{ $home->banner3_button_link }}">{{ $home->banner3_button_name }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- // Item -->

            </div>
        </section>
    @endif
    {{-- Banner Bottom Card --}}
    @if (!empty($home))
        <section>
            <div class="container px-4">
                <div class="row gx-5 mx-auto" style="width: 80% !important">
                    <div class="col px-2">
                        @if (!empty($home->btn1_title))
                            <div class="border bg-light custom_shadow px-3"
                                style="padding-top:1.8rem;padding-bottom:1.8rem;height: 11rem; ">
                                <h2 class="text-center">{{ $home->btn1_title }}</h2>
                                <div class="home_card_button">
                                    <a class="effect01" href="{{ route('learn.more') }}">{{ $home->btn1_name }}</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col px-2">
                        <div class="border bg-light custom_shadow px-3"
                            style="padding-top:1.8rem;padding-bottom:1.8rem;height: 11rem; ">
                            <h2 class="text-center">{{ $home->btn2_title }}</h2>
                            <div class="home_card_button">
                                <a class="effect01" href="{{ $home->btn2_link }}">{{ $home->btn2_name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!---------End -------->

    <!--======// Business section //======-->
    @if (!empty($feature1) && !empty($feature2) && !empty($feature3) && !empty($feature4) && !empty($feature5))
        <section class="container padding_bottom pt-56 pb-3">
            <!-- home title -->
            <div class="row my-3">
                @if ($home)
                    <div class="home_title w-75 mx-auto">
                        <h6 class="home_title_heading"
                            style="font-size: 24px;line-height: 28px; text-transform: capitalize"> {{ $home->header1 }}
                        </h6>
                        <p class="home_title_text" style="font-size: 15px">{{ $home->header2 }}</p>
                    </div>
                @endif
            </div>
            <!-- business content -->


            <div class="row d-flex justify-content-center">
                @if (!empty($feature1))
                    <div class="custom_col-2 col-md-6 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('storage/requestImg/' . $feature1->logo) }}" alt="" height="80px"
                                width="85px">
                            <h5>{{ Str::limit($feature1->badge, 30) }}</h5>
                        </div>
                        <div class="feature_description">
                            <p class="feature_descrip">{{ Str::limit($feature1->header, 80) }}</p>
                        </div>
                        <a href="{{ route('feature.details', $feature1->id) }}" class="business_item_button">
                            <span>Learn More</span>
                            <span class="business_item_button_icon">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </span>
                        </a>
                    </div>
                @endif


                @if (!empty($feature2))
                    <div class="custom_col-2 col-md-6 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('storage/requestImg/' . $feature2->logo) }}" alt="" height="80px"
                                width="85px">
                            <h5>{{ Str::limit($feature2->badge, 30) }}</h5>
                        </div>
                        <div class="feature_description">
                            <p class="feature_descrip">{{ Str::limit($feature2->header, 80) }}</p>
                        </div>
                        <a href="{{ route('feature.details', $feature2->id) }}" class="business_item_button">
                            <span>Learn More</span>
                            <span class="business_item_button_icon">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </span>
                        </a>
                    </div>
                @endif


                @if (!empty($feature3))
                    <div class="custom_col-2 col-md-6 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('storage/requestImg/' . $feature3->logo) }}" alt="" height="80px"
                                width="85px">
                            <h5>{{ Str::limit($feature3->badge, 30) }}</h5>
                        </div>
                        <div class="feature_description">
                            <p class="feature_descrip">{{ Str::limit($feature3->header, 80) }}</p>
                        </div>
                        <a href="{{ route('feature.details', $feature3->id) }}" class="business_item_button">
                            <span>Learn More</span>
                            <span class="business_item_button_icon">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </span>
                        </a>
                    </div>
                @endif


                @if (!empty($feature4))
                    <div class="custom_col-2 col-md-6 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('storage/requestImg/' . $feature4->logo) }}" alt=""
                                height="80px" width="85px">
                            <h5>{{ Str::limit($feature4->badge, 30) }}</h5>
                        </div>
                        <div class="feature_description">
                            <p class="feature_descrip">{{ Str::limit($feature4->header, 80) }}</p>
                        </div>
                        <a href="{{ route('feature.details', $feature4->id) }}" class="business_item_button">
                            <span>Learn More</span>
                            <span class="business_item_button_icon">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </span>
                        </a>
                    </div>
                @endif


                @if (!empty($feature5))
                    <div class="custom_col-2 col-md-6 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('storage/requestImg/' . $feature5->logo) }}" alt=""
                                height="80px" width="85px">
                            <h5>{{ Str::limit($feature5->badge, 30) }}</h5>
                        </div>
                        <div class="feature_description">
                            <p class="feature_descrip">{{ Str::limit($feature5->header, 80) }}</p>
                        </div>
                        <a href="{{ route('feature.details', $feature5->id) }}" class="business_item_button">
                            <span>Learn More</span>
                            <span class="business_item_button_icon">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </span>
                        </a>
                    </div>
                @endif
            </div>




            <!-- button -->
            <div class="business_seftion_button py-3">
                <a class="effect01" href="{{ route('whatwedo') }}">Explore all of what we do</a>
            </div>
        </section>
    @endif
    <!---------End -------->

    <!--=======// Shop product //======-->
    <section class="padding_top learn_more">
        <div class="container">
            <div class="row">
                <!-- content -->
                <div class="col-lg-8 col-sm-12 pb-3">
                    <div class="home_shop_product_wrapper">
                        <h5> Shop Products and Hardware</h5>
                        <p class="text-justify w-75 w-sm-100">
                            Among More than <strong
                                style="font-family: 'Poppins', sans-serif;">{{ App\Models\Admin\Product::count() }}</strong>
                            products and
                            <strong
                                style="font-family: 'Poppins', sans-serif;">{{ App\Models\Admin\Brand::count() }}</strong>
                            brands at your service, we can provide you with the tools
                            you need to succeed. Additionally, you may easily ask your exact requirements or contact us at
                            anytime.
                        </p>
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('shop.html') }}" class="common_button effect01">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!-- product brand -->
                <div class="col-lg-4 col-sm-12 d-flex justify-content-start">
                    <div>
                        <div class="">
                            <a href="{{ route('all.category') }}">
                                <div id="fed-bg">
                                    <div class="p-2">
                                        <h3 class="text-white brand_side_text">Product Categories ›</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=" pt-2">
                            <a href="{{ route('all.brand') }}">
                                <div id="fed-bg">
                                    <div class="p-2">
                                        <h3 class="text-white brand_side_text">Brands ›</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=" pt-2">
                            <a href="{{ route('tech.deals') }}">
                                <div id="fed-bg">
                                    <div class="p-2">
                                        <h3 class="text-white brand_side_text">Tech Deals ›</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=" pt-2">
                            <a href="{{ route('refurbished') }}">
                                <div id="fed-bg">
                                    <div class="p-2">
                                        <h3 class="text-white brand_side_text">Refurbished ›</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!---------End -------->

    <!--=======// Popular products //======-->
    @if (!empty($products))
        <section class="popular_product_section section_padding mb-5" style="height: 26rem;">
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
                                    <a href="{{ route('product.details', $item->slug) }}"
                                        class="product_item_content_name"
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
                                                <button type="submit" class="common_button effect01">Add to
                                                    Basket</button>
                                            </form>
                                        @endif
                                    @else
                                        <div class="product_item_price">

                                            <span class="price_currency_value">
                                                <a href="" data-toggle="modal"
                                                    data-target="#get_quote_modal_{{ $item->id }}">Ask For Price</a>
                                            </span>

                                        </div>
                                        <a href="{{ route('product.details', $item->slug) }}"
                                            class="common_button effect01">Details</a>

                                        <!-- left modal -->
                                        <div class="modal modal_outer fade" id="get_quote_modal_{{ $item->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">


                                                <div class="modal-content">

                                                    <div class="modal-header p-0 m-0 pl-5 pr-3 py-2"
                                                        style="background: #ae0a46;color: white;">
                                                        <h5 class="modal-title">Get a Quote</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    @if (Auth::guard('client')->user())
                                                        <form action="{{ route('rfq.add') }}" method="post"
                                                            id="get_quote_frm" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="card mx-4">
                                                                <div class="card-body px-4 py-2">
                                                                    <div class="row border" style="font-size: 0.8rem;">
                                                                        <div class="col-lg-3 pl-2">
                                                                            {{ Auth::guard('client')->user()->name }}</div>
                                                                        <div class="col-lg-4" style="margin: 5px 0px">
                                                                            {{ Auth::guard('client')->user()->email }}
                                                                        </div>
                                                                        <div class="col-lg-4" style="margin: 5px 0px">
                                                                            {{ Auth::guard('client')->user()->phone }}
                                                                            <div class="form-group" id="Rfquser"
                                                                                style="display:none">
                                                                                <input type="text" required=""
                                                                                    class="form-control" id="phone"
                                                                                    name="phone"
                                                                                    value="{{ Auth::guard('client')->user()->phone }}"
                                                                                    placeholder="Phone Number"
                                                                                    style="font-size: 0.8rem;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-1" style="margin: 5px 0px"><a
                                                                                href="javascript:void(0);"
                                                                                id="editRfquser"><i class="fa fa-pencil"
                                                                                    aria-hidden="true"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $item->id }}">
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
                                                                            placeholder="Company Name"
                                                                            style="font-size: 0.7rem;">
                                                                    </div>
                                                                    <div class="form-group col-sm-4 m-0">

                                                                        <input type="number" class="form-control mt-4"
                                                                            id="contact" name="qty"
                                                                            placeholder="Quantity"
                                                                            style="font-size: 0.7rem;">
                                                                    </div>
                                                                    <div class="form-group col-sm-4">
                                                                        <label class="m-0" for="image"
                                                                            style="font-size: 0.7rem;">Upload Image</label>
                                                                        <input type="file" name="image"
                                                                            class="form-control" id="image"
                                                                            accept="image/*" style="font-size: 0.7rem;" />
                                                                        <div class="form-text" style="font-size:11px;">
                                                                            Only png, jpg,
                                                                            jpeg
                                                                            images</div>

                                                                    </div>

                                                                    <div class="form-group col-sm-12 border text-white"
                                                                        style="background: #7e7d7c">
                                                                        <h6 class="text-center pt-1">Product Name :
                                                                            {{ $item->name }}
                                                                        </h6>
                                                                    </div>

                                                                    <div class="form-group col-sm-12">

                                                                        <textarea class="form-control" id="message" name="message" rows="1"
                                                                            placeholder="Additional Information..."></textarea>
                                                                    </div>

                                                                    <div class="form-group  col-sm-12 px-3 mx-3">
                                                                        <input class="mr-2" type="checkbox"
                                                                            name="call" id="call" value="1">
                                                                        <label for="call">Also Please Call Me</label>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn btn-primary col-lg-3"
                                                                        id="submit_btn">Submit &nbsp;<i
                                                                            class="fa fa-paper-plane"></i></button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    @elseif (Auth::guard('partner')->user())
                                                        <form action="{{ route('rfq.add') }}" method="post"
                                                            id="get_quote_frm" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="card mx-4">
                                                                <div class="card-body p-4">
                                                                    <div class="row border">
                                                                        <div class="col-lg-3 pl-2">Name:
                                                                            {{ Auth::guard('partner')->user()->name }}
                                                                        </div>
                                                                        <div class="col-lg-4" style="margin: 5px 0px">
                                                                            {{ Auth::guard('partner')->user()->primary_email_address }}
                                                                        </div>
                                                                        <div class="col-lg-4" style="margin: 5px 0px">
                                                                            {{ Auth::guard('partner')->user()->company_number }}
                                                                        </div>
                                                                        <div class="col-lg-1" style="margin: 5px 0px"><a
                                                                                href="javascript:void(0);"
                                                                                id="editRfqpartner"><i
                                                                                    class="fa fa-pencil"
                                                                                    aria-hidden="true"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $item->id }}">
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
                                                                    <h6 class="text-center pt-1">Product Name :
                                                                        {{ $item->name }}
                                                                    </h6>
                                                                </div>
                                                                <div class="row" id="Rfqpartner" style="display:none">
                                                                    <div class="form-group col-sm-6">
                                                                        <input type="text" required=""
                                                                            class="form-control" id="phone"
                                                                            name="phone"
                                                                            value="{{ Auth::guard('partner')->user()->company_number }}"
                                                                            placeholder="Company Phone Number">
                                                                    </div>
                                                                    <div class="form-group  col-sm-6">
                                                                        <label for="contact">Company Name </label>
                                                                        <input type="text" class="form-control"
                                                                            id="contact" name="company_name" required
                                                                            value="{{ Auth::guard('partner')->user()->company_name }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group  col-sm-6">

                                                                        <input type="number" class="form-control"
                                                                            id="contact" name="qty"
                                                                            placeholder="Quantity">
                                                                    </div>
                                                                    <div class="form-group  col-sm-6">
                                                                        <label for="contact">Upload Image </label>
                                                                        <input type="file" name="image"
                                                                            class="form-control" id="image"
                                                                            accept="image/*" />
                                                                        <div class="form-text" style="font-size:11px;">
                                                                            Accepts only
                                                                            png,
                                                                            jpg, jpeg images</div>
                                                                    </div>

                                                                    <div class="form-group  col-sm-12">
                                                                        <textarea class="form-control" id="message" name="message" rows="1" placeholder="Additional Text.."></textarea>
                                                                    </div>

                                                                    <div class="form-group  col-sm-12 px-3 mx-3">
                                                                        <input class="mr-2" type="checkbox"
                                                                            name="call" id="call" value="1">
                                                                        <label for="call">Also Please Call Me</label>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="reset"
                                                                        class="btn btn-light col-lg-3 mr-auto"
                                                                        data-dismiss="modal"><i
                                                                            class="fas fa-window-close mr-2"></i>
                                                                        Cancel</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary col-lg-3"
                                                                        id="submit_btn">Submit &nbsp;<i
                                                                            class="fa fa-paper-plane"></i></button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    @else
                                                        <form action="{{ route('rfq.add') }}" method="post"
                                                            id="get_quote_frm" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $item->id }}">
                                                            {{-- <input type="hidden" name="client_type" value="random"> --}}
                                                            <div class="modal-body get_quote_view_modal_body">
                                                                <div class="form-row">
                                                                    <div class="form-group col-sm-12 border text-white"
                                                                        style="background: #7e7d7c">
                                                                        <h6 class="text-center pt-1">Product Name :
                                                                            {{ $item->name }}
                                                                        </h6>
                                                                    </div>

                                                                    <div class="form-group col-sm-6">
                                                                        <label for="name">Name <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            required="" id="name" name="name">
                                                                    </div>
                                                                    <div class="form-group col-sm-6">
                                                                        <label for="email">Email <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="email" required=""
                                                                            class="form-control" id="email"
                                                                            name="email">
                                                                    </div>
                                                                    <div class="form-group  col-sm-6">
                                                                        <label for="contact">Mobile Number <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" required=""
                                                                            class="form-control" id="phone"
                                                                            name="phone">
                                                                    </div>

                                                                    <div class="form-group  col-sm-6">
                                                                        <label for="contact">Company Name </label>
                                                                        <input type="text" class="form-control"
                                                                            id="contact" name="company_name">
                                                                    </div>
                                                                    <div class="form-group  col-sm-6">
                                                                        <label for="contact">Quantity </label>
                                                                        <input type="number" class="form-control"
                                                                            id="contact" name="qty">
                                                                    </div>
                                                                    <div class="form-group  col-sm-6">
                                                                        <label for="contact">Custom Image </label>
                                                                        <input type="file" name="image"
                                                                            class="form-control" id="image"
                                                                            accept="image/*" />
                                                                        <div class="form-text" style="font-size:11px;">
                                                                            Accepts only
                                                                            png,
                                                                            jpg, jpeg images</div>
                                                                    </div>

                                                                    <div class="form-group  col-sm-12">
                                                                        <label for="message">Type Message</label>
                                                                        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                                                    </div>

                                                                    <div class="form-group  col-sm-12 px-3 mx-3">
                                                                        <input class="mr-2" type="checkbox"
                                                                            name="call" id="call" value="1">
                                                                        <label for="call">Also Please Call Me</label>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="reset"
                                                                        class="btn btn-light col-lg-3 mr-auto"
                                                                        data-dismiss="modal"><i
                                                                            class="fas fa-window-close mr-2"></i>
                                                                        Cancel</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary col-lg-3"
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
                                        
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        <!-- product item -->
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!---------End -------->

    <!--======// Learn clint history //======-->
    @if (!empty($story1) && !empty($story2) && !empty($story3) && !empty($story4))
        <section class="account_benefits_section_wp">
            <div class="container">
                <!-- title -->
                <div class="section_title story_title">
                    <h3 class="title_top_heading">Our Few Services at Clients.</h3>
                </div>

                <div class="row">
                    <!--------item------->
                    @if (!empty($story1))
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="{{ route('story.details', $story1->id) }}">
                                    <img class="" src="{{ asset('storage/' . $story1->image) }}"
                                        alt="{{ $story1->badge }}" width="280px" height="160px">
                                    <h6 class="mt-4">{{ $story1->badge }}</h6>
                                    <h3>
                                        <strong>{{ Str::limit($story1->title, 65) }}</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    @endif
                    <!--------item------->
                    @if (!empty($story2))
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="{{ route('story.details', $story2->id) }}">
                                    <img class="" src="{{ asset('storage/' . $story2->image) }}"
                                        alt="{{ $story2->badge }}" width="280px" height="160px">
                                    <h6 class="mt-4">{{ $story2->badge }}</h6>
                                    <h3>
                                        <strong>{{ Str::limit($story2->title, 65) }}</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    @endif
                    <!--------item------->
                    @if (!empty($story3))
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="{{ route('story.details', $story3->id) }}">
                                    <img class="" src="{{ asset('storage/' . $story3->image) }}"
                                        alt="{{ $story3->badge }}" width="280px" height="160px">
                                    <h6 class="mt-4">{{ $story3->badge }}</h6>
                                    <h3>
                                        <strong>{{ Str::limit($story3->title, 65) }}</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    @endif
                    <!--------item------->
                    @if (!empty($story4))
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="{{ route('story.details', $story4->id) }}">
                                    <img class="" src="{{ asset('storage/' . $story4->image) }}"
                                        alt="{{ $story4->badge }}" width="280px" height="160px">
                                    <h6 class="mt-4">{{ $story4->badge }}</h6>
                                    <h3>
                                        <strong>{{ Str::limit($story4->title, 65) }}</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- button -->
                <div class="learn_clint_history_btn">
                    <a href="{{ route('all.story') }}">See all client stories</a>
                </div>
            </div>
        </section>
    @endif
    <!---------End -------->

    <!--======// Magazine Section //======-->
    @if (!empty($techglossy))
        <section class="account_benefits_section_wp">
            <div class="container">
                <div class="row magazine_section">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}"
                            alt="{{ $techglossy->badge }}" style="border-radius:15px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 account_benefits_section">
                        <h3 style="font-size:35px">Tech Journal</h3>
                        <h4 style="font-size:24px;font-weight:400;">{{ $techglossy->badge }}</h4>
                        <h4 class="pb-2">{{ $techglossy->title }}</h4>
                        <p>{{ $techglossy->header }}</p>

                        <div class="my-3 col-lg-6">
                            <div class="d-flex flex-column justify-content-center">
                                @php
                                    $tag = $techglossy->tags;
                                    $tags = explode(',', $tag);
                                @endphp
                                <div class="btn-group pt-1">
                                    @foreach ($tags as $item)
                                        {{-- <button type="button"
                                            class="btn tag_btn ml-1 px-1"></button> --}}
                                        {{-- <ul class="p-0 m-0">
                                                <li class="d-flex">
                                                    {{ ucwords($item) }}
                                                </li>
                                            </ul> --}}
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <button href="{{ route('techglossy.details', $techglossy->id) }}"
                            class="common_button2 effect01">Read the Journal</button>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!----------End--------->

    <!--======// our success section //======-->
    @if (!empty($success1) && !empty($success2) && !empty($success3))
        <section class="container">
            <div class="our_success_wrapper">
                <!-- title -->
                <div class="section_title">
                    <h3 class="title_top_heading py-5">Our Success Starts With Our Culture.</h3>
                </div>
                <!-- wrapper -->

                <div class="row">
                    <!-- item -->
                    @if (!empty($success1))
                        <div class="col-lg-4 col-sm-12">
                            <div class="our_success_item">
                                <p class="our_success_item_title">{{ $success1->title }}</p>
                                <div class="our_success_item_body shadow-lg" style="height: 14rem; border: none;">
                                    {{ $success1->description }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- item -->
                    @if (!empty($success2))
                        <div class="col-lg-4 col-sm-12">
                            <div class="our_success_item">
                                <p class="our_success_item_title our_success_item_title2">{{ $success2->title }}</p>
                                <div class="our_success_item_body shadow-lg" style="height: 14rem; border: none;">
                                    {{ $success2->description }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- item -->
                    @if (!empty($success3))
                        <div class="col-lg-4 col-sm-12">
                            <div class="our_success_item">
                                <p class="our_success_item_title our_success_item_title3">{{ $success3->title }}</p>
                                <div class="our_success_item_body shadow-lg" style="height: 14rem; border: none;">
                                    {{ $success3->description }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
        </section>
    @endif
    <!---------End -------->
@endsection
