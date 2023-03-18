@extends('frontend.master')
@section('content')

    <style>
        .box {
            position: relative;
            width: 100%;
        }

        .our-services {
            margin-top: 75px;
            padding-bottom: 30px;
            padding: 0 15px;
            min-height: auto;
            text-align: center;
            border-radius: 10px;
            background-color: #fff;
            transition: all .4s ease-in-out;
            box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
        }

        .our-services .icon {
            margin-bottom: -21px;
            transform: translateY(-50%);
            text-align: center
        }

        .our-services:hover h4,
        .our-services:hover p {
            color: #fff
        }

        .settings {
            transition: all 0.5s;
        }

        .settings:hover {
            transition: all 0.5s;
            box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #ae0a46 0%, #ae0a46 100%)
        }

        .icon img {
            background: white;
            border-radius: 50%;
        }

        ul {
            list-style-type: circle;
        }

        .common_button2 {
            padding: 15px 20px;
            cursor: pointer;
            font-family: "Allumi Std Extended";
            font-size: 13px;
            font-weight: 500;
            text-align: center;
            display: inline-block;
            background-color: var(--crimson);
            transition: 0.3s;
            outline: none;
            border: none;
            color: white;
        }
    </style>

    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: linear-gradient(
        rgba(0,0,0,0.5),
        rgba(0,0,0,0.5)
        ),url('https://www.jluxent.com/assets/images/banner.jpg');">
        <div class="container ">
            <h1>Industries We serve</h1>
            <p class="text-center text-white">We combine deep industry experience and technology <br> expertise to solve your
                IT challenges. </p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->

        <!--=====// We serve //=====-->
        <div class="container pb-5">
            <!-- section title -->
            <div class="clint_help_section_heading_wrapper">
                <!-- title -->
                <h5 class="home_title_heading" style="text-align: left;">
                    <h5 class="home_title_heading" style="text-align: left;">
                        <div class="software_feature_title">
                            <h1 class="text-center pt-4 pb-4">
                                <span>Ind</span>ustries we serve
                            </h1>
                        </div>
                    </h5>
                    <p class="home_title_text">
                        <span class="font-weight-bold">We offer breadth and depth </span> combining deep industry expertise and
                        technical skills <br> to connect you to the right IT solutions. With one strategic partner, you’ll get
                        guidance at any stage of your IT transformation journey.
                    </p>
            </div>
            <!-- section content wrapper -->
            <div class="row mb-4">
                <!-- content -->
                <div class="col-lg-9 col-sm-12">
                    <!-- we_serveItem_wrapper -->
                    <div class="row">
                        <!-- item -->
                        <div class="col-lg-3 col-sm-6">
                            <a href="" class="we_serve_item">
                                <div class="we_serve_item_image">
                                    <img src="images/serveicon/construction-industry-icon.png" alt="">
                                </div>
                                <div class="we_serve_item_text">Construction technology</div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col-lg-3 col-sm-6">
                            <a href="" class="we_serve_item">
                                <div class="we_serve_item_image">
                                    <img src="images/serveicon/financial-industry-icon.png" alt="">
                                </div>
                                <div class="we_serve_item_text">Construction technology</div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col-lg-3 col-sm-6">
                            <a href="" class="we_serve_item">
                                <div class="we_serve_item_image">
                                    <img src="images/serveicon/healthcare-industry-icon.png" alt="">
                                </div>
                                <div class="we_serve_item_text">Construction technology</div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col-lg-3 col-sm-6">
                            <a href="" class="we_serve_item">
                                <div class="we_serve_item_image">
                                    <img src="images/serveicon/manufacturing-industry-icon.png" alt="">
                                </div>
                                <div class="we_serve_item_text">Construction technology</div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col-lg-3 col-sm-6 mt-4">
                            <a href="" class="we_serve_item">
                                <div class="we_serve_item_image">
                                    <img src="images/serveicon/retail-industry-icon.png" alt="">
                                </div>
                                <div class="we_serve_item_text">Construction technology</div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col-lg-3 col-sm-6 mt-4">
                            <a href="" class="we_serve_item">
                                <div class="we_serve_item_image">
                                    <img src="images/serveicon/service-provider-industry-icon.png" alt="">
                                </div>
                                <div class="we_serve_item_text">Construction technology</div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col-lg-3 col-sm-6 mt-4">
                            <a href="" class="we_serve_item">
                                <div class="we_serve_item_image">
                                    <img src="images/serveicon/small-medium-industry-icon.png" alt="">
                                </div>
                                <div class="we_serve_item_text">Construction technology</div>
                            </a>
                        </div>
                        <!-- item -->
                        <div class="col-lg-3 col-sm-6 mt-4">
                            <a href="" class="we_serve_item">
                                <div class="we_serve_item_image">
                                    <img src="images/serveicon/travel-industry-icon.png" alt="">
                                </div>
                                <div class="we_serve_item_text">Construction technology</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-3 col-sm-12">
                    <div class="we_serve_title">
                        <p>Private sector</p>
                    </div>
                    <!-- sidebar list -->
                    <div>
                        <div class="">
                            <a href="http://127.0.0.1:8000/category/all">
                                <div id="fed-bg">
                                    <div class="p-2">
                                        <h3 class="text-white brand_side_text">Product Categories ›</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=" pt-2">
                            <a href="http://127.0.0.1:8000/brands/all">
                                <div id="fed-bg">
                                    <div class="p-2">
                                        <h3 class="text-white brand_side_text">Brands ›</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=" pt-2">
                            <a href="http://127.0.0.1:8000/techdeal.html">
                                <div id="fed-bg">
                                    <div class="p-2">
                                        <h3 class="text-white brand_side_text">Tech Deals ›</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=" pt-2">
                            <a href="http://127.0.0.1:8000/refurbished.html">
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
        <!---------End -------->

    <!--======// Industry solution //======-->
    <div class="container mb-5">
        <div class="text-center mt-5">
            <h1>Our Industry Solution</h1>
        </div>
        <div class="row">
                <div class="col-md-3">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon d-flex justify-content-start"> <img
                                    src="http://127.0.0.1:8000/storage/requestImg/uw4RfXgPS7tbv9xZ1674019792.png" alt=""> </div>
                            <h4>Settings</h4>
                            <p class="pb-3">Find the hardware, software and IT services you need to be ready</p>
                            <div class="m-1">
                                <button class="common_button2" href="product_filters.html">Explore Our Solutions →</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon d-flex justify-content-start"> <img
                                    src="http://127.0.0.1:8000/storage/requestImg/uw4RfXgPS7tbv9xZ1674019792.png" alt=""> </div>
                            <h4>Settings</h4>
                            <p class="pb-3">Find the hardware, software and IT services you need to be ready</p>
                            <div class="m-1">
                                <button class="common_button2" href="product_filters.html">Explore Our Solutions →</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon d-flex justify-content-start"> <img
                                    src="http://127.0.0.1:8000/storage/requestImg/uw4RfXgPS7tbv9xZ1674019792.png" alt=""> </div>
                            <h4>Settings</h4>
                            <p class="pb-3">Find the hardware, software and IT services you need to be ready</p>
                            <div class="m-1">
                                <button class="common_button2" href="product_filters.html">Explore Our Solutions →</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="our-services settings">
                            <div class="icon d-flex justify-content-start"> <img
                                    src="http://127.0.0.1:8000/storage/requestImg/uw4RfXgPS7tbv9xZ1674019792.png" alt=""> </div>
                            <h4>Settings</h4>
                            <p class="pb-3">Find the hardware, software and IT services you need to be ready</p>
                            <div class="m-1">
                                <button class="common_button2" href="product_filters.html">Explore Our Solutions →</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <!--======// our clint tab //======-->
    <section class="clint_tab_section">
        <div class="container">
            <div class="clint_tab_content pb-3">
                <!-- home title -->
                <div class="home_title mt-3">
                    <div class="software_feature_title">
                        <h1 class="text-center ">Client Success Stories</h1>
                    </div>
                    <p class="home_title_text">See how Ngen It has helped organizations of all sizes across every industry
                        maximize the <br> value of their IT solutions, leverage emerging technologies and create fresh
                        experiences.
                    </p>
                </div>
                <!-- Client Tab Start -->
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Healthcare</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">HIGHER EDUCATION</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">MINING</a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                    role="tab" aria-controls="nav-about" aria-selected="false">ENERGY</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-healthcare">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image p-5">
                                            <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">Healthcare </h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil voluptatem error
                                            omnis facere beatae exercitationem, itaque repudiandae placeat modi velit sit
                                            accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae
                                            placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique
                                            quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam
                                            fugit soluta similique quasi.itaque repudiandae placeat modi velit sit
                                            accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae
                                            placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique
                                            quasi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image p-5">
                                            <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">Healthcare </h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil voluptatem error
                                            omnis facere beatae exercitationem, itaque repudiandae placeat modi velit sit
                                            accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae
                                            placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique
                                            quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam
                                            fugit soluta similique quasi.itaque repudiandae placeat modi velit sit
                                            accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae
                                            placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique
                                            quasi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image p-5">
                                            <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">Healthcare </h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil voluptatem error
                                            omnis facere beatae exercitationem, itaque repudiandae placeat modi velit sit
                                            accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae
                                            placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique
                                            quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam
                                            fugit soluta similique quasi.itaque repudiandae placeat modi velit sit
                                            accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae
                                            placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique
                                            quasi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image p-5">
                                            <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">Healthcare </h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil voluptatem error
                                            omnis facere beatae exercitationem, itaque repudiandae placeat modi velit sit
                                            accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae
                                            placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique
                                            quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam
                                            fugit soluta similique quasi.itaque repudiandae placeat modi velit sit
                                            accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae
                                            placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique
                                            quasi.</p>
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
    <section class="account_benefits_section_wp">
        <div class="container">
            @if ($techglossy)
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}"
                            alt="{{ $techglossy->badge }}" style="height: 350px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 account_benefits_section">

                        <h5>{{ $techglossy->badge }}</h5>
                        <p>{{ $techglossy->title }}</p>
                        <p>{!! Str::limit($techglossy->short_des, 200) !!}......</p>

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

    <!--=====// Global call section //=====-->
    <section class="global_call_section section_padding">
        <div class="container">
            <!-- content -->
            <div class="global_call_section_content">
                <div class="home_title" style="width: 100%; margin: 0px;">
                    <h5 class="home_title_heading" style="text-align: left; color: #fff;"> <span>O</span>ur areas of
                        expertise</h5>

                    <p class="home_title_text" style="text-align: left;color: #fff;line-height: 24px;font-size: 18px;">
                        Turn ideas into powerful business outcomes quickly and smoothly. Our solution architects and
                        technical experts are ready to help you achieve more with our Insight Intelligent Technology™
                        portfolio.</p>

                    <div class="business_seftion_button" style="text-align: left;">
                        <a href="{{ route('learn.more') }}">Explore business outcomes</a>
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



    <!--=====// Pageform section //=====-->
    <section class=" solution_contact_wrapper">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 col-sm-12">
                    <div class="thing_together_wrapper">
                        <h4>
                            <span class="why_Choose_lineTop">L</span>et’s do big things together.
                        </h4>
                        <p>Get assistance with tracking an order, requesting a quote, contacting your account representative
                            and more by phone or over chat.</p>
                        <h5>NGentIt Global Headquarters</h5>
                        <p>Haque Chamber <br>(11 floor - C&D) 89/2, Panthapath, Dhaka-1215 </p>
                        <p>Billing & invoice: <span class="main_color">+88 01714243446</span>
                            <br> Information and sales: <span class="main_color">sales@ngenitltd.com</span>
                            <br> OneCall support: <span class="main_color">+88 01714243446</span>
                            <br> Returns: <span class="main_color">(+88) 0258155838</span>
                        </p>
                        <!-- <h5><i class="fa-solid fa-phone"></i>NgenIT</h5> -->
                    </div>
                </div>
                <!----------Sidebar Privacy Policy --------->
                <div class="col-lg-7 col-sm-12">
                    <!-- form Sidebar -->
                    <div class="background">
                        <div class="containers">
                            <div class="screen">
                                <div class="screen-header">
                                    <div class="screen-header-left">
                                        <div class="screen-header-button maximize"></div>
                                        <div class="screen-header-button minimize"></div>
                                    </div>
                                    <div class="screen-header-right">
                                        <div class="screen-header-ellipsis"></div>
                                        <div class="screen-header-ellipsis"></div>
                                        <div class="screen-header-ellipsis"></div>
                                    </div>
                                </div>
                                <div class="screen-body">
                                    <div class="screen-body-item left">
                                        <div class="app-title">
                                            <span>CONTACT</span>
                                            <span>US</span>
                                        </div>
                                        <div class="app-contact main_color ">CONTACT INFO : +88 01714243446</div>
                                    </div>
                                    <div class="screen-body-item screen-body-item-right">
                                        <div class="app-form">
                                            <div class="app-form-group">
                                                <input class="app-form-control" placeholder="NAME">
                                            </div>
                                            <div class="app-form-group">
                                                <input class="app-form-control" placeholder="EMAIL">
                                            </div>
                                            <div class="app-form-group">
                                                <input class="app-form-control" placeholder="CONTACT NO">
                                            </div>
                                            <div class="app-form-group message">
                                                <input class="app-form-control" placeholder="MESSAGE">
                                            </div>
                                            <div class="app-form-group buttons">
                                                <button class="app-form-button">CANCEL</button>
                                                <button class="app-form-button">SEND</button>
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
    </section>
    <!---------End -------->

@endsection












@extends('frontend.master')
@section('content')

<!--======// Header Title //======-->
<section class="common_product_header" style="background-image: url('{{asset('frontend/images/softwer-banner.jpg')}}');">
    <div class="container">
        <h1>Industries we serve</h1>
        <h3>We combine deep industry experience and technology expertise to solve your IT challenges.</h3>

        <div class="d-flex justify-content-center">
            <a class="common_button2" href="#Contact">Talk To a Specialist</a>
        </div>
    </div>
</section>
<!----------End--------->

<!--======// Industry solution //======-->
<section class="container mt-5">
    <!-- section title -->
    <div class="section_text_wrapper mb-4">
        <h4 class="section_title">Solutions Related to Industry</h4>
        {{-- <p class="text-center">You want a tablet, but you need a laptop. Microsoft Surface®, available from Insight, offers the best of both.</p> --}}
    </div>

    <!-- Content wrapper -->
    <div class="row">
        <!-- card item-->
        @foreach ($industrys as $item)
        <div class="col-lg-4 col-sm-12 mt-4 mb-3">
            <div class="industry_solution_item">
                <div class="industry_solution_item_content" style="height: 13rem;">
                    <!-- img -->
                    <div class="industy_solution_item_image">
                        <img src="{{asset('storage/requestImg/'.$item->logo)}}" alt="{{$item->title}}">
                    </div>
                    <!-- name -->
                    <div class="industy_solution_item_name">
                        <p>{{$item->title}}</p>
                    </div>

                    <div class="industy_solution_item_text"><p>{!! $item->short_desc !!}</p></div>
                </div>
                <a href="{{route('industry.details',$item->id)}}" class="industry_solution_item_button">Explore our solutions → </a>
            </div>
        </div>
        @endforeach
        <!-- card item-->

    </div>

</section>
<!----------End--------->

<!--======// our clint tab //======-->
<section class="clint_tab_section mt-2 mb-3">
    <div class="container">
        <div class="clint_tab_content">
            <!-- home title -->
            <div class="home_title">
                <h5 class="home_title_heading"> Client Success Stories</h5>
                <p class="home_title_text">See how Ngen It has helped organizations of all sizes — across every industry —
                    maximize the value of their IT solutions, leverage emerging technologies and create fresh
                    experiences.</p>
            </div>

            <!-- clint_tab_content_button  -->

            <!-- tab button content -->


            <div class="clint_tab_btn_content">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="tab-links" href="#clintFirstTab" data-toggle="pill">{{$story1->badge}}</a></li>
                    <li class="nav-item"><a class="tab-links" href="#clintSecondTab" data-toggle="pill">{{$story2->badge}}</a></li>
                    <li class="nav-item"><a class="tab-links" href="#clintThirdTab" data-toggle="pill">{{$story3->badge}}</a></li>

                </ul>
            </div>
            @php
                $tags_1=explode(',',$story1->tags);
                $tags_2=explode(',',$story2->tags);
                $tags_3=explode(',',$story3->tags);
            @endphp
            <!-- clint tab contet area -->
            <div class="tab-content clearfix mt-4">

                <!-- single area -->
                <div class="clint_tab_area tab-pane active" id="clintFirstTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="{{ asset('storage/' . $story1->image) }}" alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <b>{{$story1->header}}</b>
                            </div>
                        </div>


                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pl-4">
                            <p class="clint_tab_content_title">{{$story1->title}}</p>

                            {{-- <p class="clint_tab_content_text_title">Challenge</p> --}}
                            <p class="clint_tab_content_text_paragraph">{!!$story2->short_des!!}</p>

                            <div class="clint_tab_content_text_area_list">
                                <p class="clint_tab_content_text_title">Topics</p>

                                <ul>
                                    @foreach ($tags_1 as $item)
                                    <li>{{$item}}</li>
                                    @endforeach

                                </ul>
                            </div>

                            <!-- button -->
                            <div class="business_seftion_button" style="text-align: left;">
                                <a href="{{ route('story.details',$story1->id) }}">Read Full Case Studey</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- single area end -->


                <!-- single area -->
                <div class="clint_tab_area tab-pane" id="clintSecondTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="{{ asset('storage/' . $story2->image) }}"
                                    alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <b>{{$story2->header}}</b>
                            </div>
                        </div>


                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pl-4">
                            <p class="clint_tab_content_title">{{$story2->title}}</p>

                            <div class="clint_tab_content_text_area">
                                {{-- <p class="clint_tab_content_text_title">Challenge</p> --}}
                                <p class="clint_tab_content_text_paragraph">{!!$story2->short_des!!}</p>
                            </div>

                            <!-- solution list -->

                            <div class="clint_tab_content_text_area_list_marker">
                                <p class="clint_tab_content_text_title">Topics</p>

                                <ul>
                                    @foreach ($tags_2 as $item)
                                    <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- button -->
                            <div class="business_seftion_button" style="text-align: left;">
                                <a href="{{ route('story.details',$story2->id) }}">Read Full Case Studey</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- single area end -->



                <!-- single area -->
                <div class="clint_tab_area tab-pane" id="clintThirdTab">
                    <!-- wrapper -->
                    <div class="row">
                        <!-- thumbanial -->
                        <div class="col-lg-4 col-sm-12">
                            <div class="clint_tab_area_thumbnail_image">
                                <img src="{{ asset('storage/' . $story3->image) }}"
                                    alt="">
                            </div>

                            <div class="clint_tab_area_thumbnail_caption">
                                <b>{{$story3->header}}</b>
                            </div>
                        </div>


                        <!-- content -->
                        <div class="col-lg-8 col-sm-12 pl-4">
                            <p class="clint_tab_content_title">{{$story3->title}}</p>



                            <div class="clint_tab_content_text_area">
                                {{-- <p class="clint_tab_content_text_title">solutions</p> --}}
                                <p class="clint_tab_content_text_paragraph">{!!$story3->short_des!!}</p>
                            </div>

                            <div class="clint_tab_content_text_area_list">
                                <p class="clint_tab_content_text_title">Topics</p>

                                <ul>
                                    @foreach ($tags_3 as $item)
                                    <li>{{$item}}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- button -->
                            <div class="business_seftion_button" style="text-align: left;">
                                <a href="{{ route('story.details',$story3->id) }}">Read Full Case Studey</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- single area end -->


                <!-- single area -->

                <!-- single area end -->

            </div>

        </div>
    </div>
</section>
<!---------End -------->

<!--======// Our expert //======-->
<section class="account_benefits_section_wp">
    <div class="container">
        @if ($techglossy)
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}" alt="{{$techglossy->badge}}" >
            </div>
            <div class="col-lg-6 col-sm-12 account_benefits_section">

                <h5>{{$techglossy->badge}}</h5>
                <p>{{$techglossy->title}}</p>
                <p>{!! Str::limit($techglossy->short_des, 200) !!}......</p>

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
</section><br>
<!---------End -------->

<!--======// Software show //======-->
<section class="container">
    <!-- business item wrapper -->
    <div class="section_title mt-2">
        <h5 class="title_top_heading"> <strong class="lineBottom">Featured Contents</strong></h5>
    </div>
    <div class="row solution_business_item  my-4">
        <!-- item -->

        @foreach ($features as $feature)
        <div class="col-lg-4 col-sm-6">
            <!-- image -->
            <div class="business_item_icon">
                <img src="{{ asset('storage/requestImg/' . $feature->logo) }}" alt="">
            </div>

            <!-- content -->
            <div class="business_item_content">
                <p class="business_item_title">{{$feature->title}}</p>
                <p class="business_item_text">{{ Str::limit($feature->short_desc, 150) }}</p>
                <a href="{{route('feature.details',$feature->id)}}" class="business_item_button"><span>Learn More</span> <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!---------End -------->


<!--=====// Global call section //=====-->
<section class="global_call_section section_padding">
    <div class="container">
        <!-- content -->
        <div class="global_call_section_content">
            <div class="home_title" style="width: 100%; margin: 0px;">
                <h5 class="home_title_heading" style="text-align: left; color: #fff;"> <span>O</span>ur areas of
                    expertise</h5>

                <p class="home_title_text" style="text-align: left;color: #fff;line-height: 24px;font-size: 18px;">
                    Turn ideas into powerful business outcomes quickly and smoothly. Our solution architects and
                    technical experts are ready to help you achieve more with our Insight Intelligent Technology™
                    portfolio.</p>

                <div class="business_seftion_button" style="text-align: left;">
                    <a href="{{ route('learn.more') }}">Explore business outcomes</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------End -------->

<!--=====// Tech solution //=====-->
{{-- <div class="section_wp2">
    <div class="container">
        <div class="solution_number_wrapper">
            <!-- title -->
            <h5 class="home_title_heading" style="text-align: left;"> <span>D</span>elivering intelligent technology
                solutions</h5>
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
</div> --}}
<!---------End -------->

<!--=====// We serve //=====-->

<!---------End -------->

<!--=====// We serve //=====-->
<div class="container">
    <!-- section title -->
    <div class="clint_help_section_heading_wrapper">
        <!-- title -->
        <h5 class="home_title_heading" style="text-align: left;"> <span>Ind</span>ustries we serve</h5>
        <p class="home_title_text" style="text-align: left;">
            We offer breadth and depth —
            combining deep industry expertise and technical skills to connect you to the right IT solutions.
            With one strategic partner, you’ll get guidance at any stage of your IT transformation journey.
        </p>
    </div>

    <!-- section content wrapper -->
    <div class="row mb-4">
        <!-- content -->
        <div class="col-lg-9 col-sm-12">
            <div class="we_serve_title">
                {{-- <p>Private sector</p> --}}
            </div>
            <!-- we_serveItem_wrapper -->
            <div class="row">
                <!-- item -->
                @foreach ($industrys as $item)

                <div class="col-lg-3 col-sm-6">
                    <a href="{{route('industry.details',$item->id)}}" class="we_serve_item" style="height:11rem;">
                        <div class="we_serve_item_image">
                            <img src="{{asset('storage/requestImg/'.$item->logo)}}" alt="{{$item->title}}">
                        </div>
                        <div class="we_serve_item_text">{{$item->title}}</div>
                    </a>
                </div>
                @endforeach
                <!-- item -->


            </div>
        </div>

        {{-- <!-- sidebar -->
        <div class="col-lg-3 col-sm-12">
            <div class="we_serve_title ml-4">
                <p>Private sector</p>
            </div>
            <!-- sidebar list -->
            <div class="we_serve_sidebar_list">
                <ul>
                    <li><a href="">Federal government ›</a></li>
                    <li><a href="">Higher education  ›</a></li>
                    <li><a href="">K-12 education ›</a></li>
                    <li><a href="">Federal government ›</a></li>
                </ul>

                <a href="" class="business_item_button"
                    style="justify-content: left;padding-left:15px;"><span>Explore Insight Public Sector</span>
                    <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
            </div>
        </div> --}}

    </div>
</div>
<!---------End -------->

<!--=====// Pageform section //=====-->
<section class="solution_contact_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="contact_left_content">
                    <h4 class="contact_left_title text-white text-white" style="font-size: 25px">Need immediate assistance?</h4>
                    <p class="contact_left_text text-white text-white" style="font-size: 18px">Get assistance with tracking an order, requesting a quote, contacting your account representative and more by <a href="tel:01723507989">phone</a> or <a href="">over chat</a>.</p>

                    <!-- contact left phone -->
                    <div class="contact_anything_wrapper">
                        <!-- call -->
                        <div class="contact_call">
                            <div class="contact_call_title text-white text-white">Call us</div>
                            <div class="contact_call_number text-white text-white"> {{ $setting->mobile }}</div>
                        </div>

                        <!-- contact chat -->
                        <div class="contact_call contact_chat">
                            <div class="contact_call_title text-white">Chat now</div>
                            <a href="" class="contact_chat_button text-white"> <span> <i class="fa-solid fa-message"></i> </span> <span> Chat with us</span> </a>
                        </div>
                    </div>

                    <!-- contact global -->
                    <div class="contact_global">
                        <div class="contact_global_title text-white">NGentIt Global Headquarters</div>
                        <!-- adress -->
                        <div class="gloabal_content_address">
                            <span class="text-white"> {{ $setting->address }}</span>
                        </div>

                        <!-- contact call or email -->

                        <div class="global_contact_phone">
                            <!-- item -->
                            <div class="global_contact_phone_item text-white">
                                <span class="text-white">Billing & invoice: </span>  <a class="text-white" href="tel:{{ $setting->mobile }}">{{ $setting->mobile }}</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item text-white">
                                <span class="text-white">Information and sales:</span>  <a class="text-white" href="mail:{{ $setting->email2 }}">{{ $setting->email2 }}</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item text-white">
                                <span class="text-white">OneCall support:</span>  <a class="text-white" href="tel:{{ $setting->mobile }}">{{ $setting->mobile }}</a>
                            </div>

                            <!-- item -->
                            <div class="global_contact_phone_item text-white">
                                <span class="text-white">Returns:</span>  <a class="text-white" href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                            </div>
                        </div>

                        <!-- location button -->
                        <a href="" class="product_button">View all NGentIt office locations</a>

                    </div>
                </div>
            </div>
            <!----------Sidebar Privacy Policy --------->
            <div class="col-lg-6 col-sm-12 p-0" id="Contact">
                <!-- form Sidebar -->
                <form id="myform" action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row specialist_contect_form">
                        <h2 class="col-12">Let's connect</h2>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input type="text" name="fname" class="form_input" maxlength="100" placeholder="First Name"/>
                                <label class="form_label" for="">First Name: *</label>
                            </div>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input type="text" name="lname" class="form_input" maxlength="100" placeholder="Last Name"/>
                                <label class="form_label" for="">Last Name: *</label>
                            </div>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input type="email" name="email" class="form_input maxlength" placeholder="Business Email" maxlength="100" />
                                <label class="form_label" for="">Business Email: *</label>
                            </div>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input type="text" name="phone" class="form_input maxlength" placeholder="Phone" maxlength="100" />
                                <label class="form_label" for="">Phone: *</label>
                            </div>

                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input class="form_input maxlength" name="state" type="text" placeholder="State" maxlength="100">
                                <label class="form_label" for="">State: *</label>
                            </div>

                            <!-- form item -->
                            <div class="solution_form_item_wp col-lg-6 col-sm-12">
                                <input class="form_input maxlength" maxlength="100" name="country" type="text" placeholder="Country">

                                <!-- label -->
                                <label class="form_label" for="">Country: *</label>
                            </div>

                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-12 col-sm-12">
                                <input class="form_input" type="text" name="company" placeholder="Company / Organization *">
                                <label class="form_label" for="">Company *</label>
                            </div>
                            <!-- item -->
                            <div class="solution_form_item_wp col-lg-12 col-sm-12">
                                <textarea class="form_input" name="message" id="" rows="2"
                                    placeholder="To better assist you, please describe how we can help."></textarea>
                                <label class="form_label" for="">To better assist you, please describe how we can
                                    help.</label>
                            </div>



                            <div class="d-flex">
                                <!-- checkbox input -->
                                <div class="" style="margin-right: 10px;">
                                    <input type="checkbox" name="terms" required>
                                </div>
                                <!-- content -->
                                <div class="checkBox_content">By checking this box, I consent to receive Insight marketing
                                    emails. We respect your privacy and will not share your personal information with any
                                    other company, person or identity.</div>
                            </div>


                            <!-- submit button -->
                            <div>
                                <button type="submit" class="common_button2 ml-2 mt-4" id="submitbtn">Hear from a specialist</button>
                            </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!---------End -------->

@endsection
