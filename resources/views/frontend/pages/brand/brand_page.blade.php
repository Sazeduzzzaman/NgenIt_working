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
        style="url('{{asset('storage/'.$brandpage->banner_image)}}');">
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
                        <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
                    </div>
                    <div class="m-4">
                        <button class="common_button3"
                            href="{{ !empty($brand->slug) ? route('custom.product', $brand->slug) : route('all.brand') }}">Shop
                            all {{ $brand->title }}</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->



    <!--======// Solution feature 1//======-->

    @if ($row_one)
        <section class="">
            <div class="container">
                <div class="row d-flex justify-content-center py-4">
                    <div class="col-lg-6 col-sm-12" style="text-align: start !important;">
                        <h4>{{ $row_one->title }}</h4>
                        <p class="">The company's business scope includes broadcasting, interactive digital signage,
                            education, collaboration, product presentation and gaming.. The company's customer base is
                            comprised of the largest global companies and organizations including the Microsoft, AT&T,
                            Xerox, Nvidia, Samsung, LG, Ericsson to name just a few.</p>
                        {{-- <p style="text-align: center;">{!! $row_one->description !!}</p> --}}
                        <div class="">
                            <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
                        </div>
                    </div>
                    @if (!empty($row_one->link))
                        <a href="{{ $row_one->link }}" class="common_button">{{ $row_one->btn_name }}</a>
                    @else
                    @endif

                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/requestImg/' . $row_one->image) }}" alt=""
                            width="580px" height="270px">
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->

    <!--======// Solution feature 2//======-->
    @if ($row_three)
        <section class="">
            <div class="container">
                <div class="row d-flex justify-content-center my-3">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/requestImg/' . $row_three->image) }}" alt=""
                            width="580px" height="270px">
                    </div>
                    <div class="col-lg-6 col-sm-12 ">
                        <h4>{{ $row_three->title }}</h4>
                        <p class="text-justify">{!! $row_three->description !!}</p>
                        <div class="">
                            <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
                        </div>
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
    <div class="py-4">
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
    <div class="call_to_action"
        style="background-image: linear-gradient(
            rgba(0,0,0,0.8),
            rgba(0,0,0,0.8)
            ), url('{{ asset('storage/requestImg/' . $brandpage->row_six_image) }}');">
        <div class="container">
            <div class="call_to_action_text w-75 mx-auto">
                <h4 class="">{{ $brandpage->row_six_title }}</h4>
                <p>{{ $brandpage->row_six_header }}</p>
                <div class="d-flex justify-content-center">
                    <a href="#Contact" class="common_button3 text-center">Contact us to buy</a>
                </div>
            </div>

        </div>
    </div>
    <!-------------End--------->

    <!--======// Solution feature 3//======-->
    @if ($row_four)
        <section class="py-4">
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
                        <img class=" px-3" src="{{ asset('storage/requestImg/' . $row_four->image) }}" alt=""
                            width="580px" height="270px">
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->

    <!--======// Solution feature 4//======-->
    @if ($row_five)
        <section class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid" src="{{ asset('storage/requestImg/' . $row_five->image) }}" alt=""
                            width="580px" height="270px">
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
    <section class="popular_product_section mt-4">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="software_feature_title mb-3">
                    <h1 class="text-center p-3 ">Featured Product</h1>
                </div>
                <!-- wrapper colum -->
                <div class="populer_product_slider">
                    <!-- product_item -->
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img class="img-fluid" src="images/single_product/product4.jpg" alt="">
                        </div>
                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>
                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>
                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>
                    </div>
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img class="img-fluid" src="images/single_product/product2.jpg" alt="">
                        </div>
                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>
                            <!-- price -->
                            <div class="product_item_price">
                                <!-- <span class="price_currency">usd</span> -->
                                <span class="price_currency_value">
                                    <p type="button" class="text-primary" data-toggle="modal"
                                        data-target="#exampleModal"> Ask For Price </p>
                                </span>
                            </div>
                            <!-- button -->
                            <button type="button" class="product_button" disabled>Add to Basket</button>
                        </div>
                    </div>
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img class="img-fluid" src="images/single_product/product3.jpg" alt="">
                        </div>
                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>
                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>
                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>
                    </div>
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img class="img-fluid" src="images/single_product/product4.jpg" alt="">
                        </div>
                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>
                            <!-- price -->
                            <div class="product_item_price">
                                <span class="price_currency">usd</span>
                                <span class="price_currency_value">$856</span>
                            </div>
                            <!-- button -->
                            <a href="" class="product_button">Add to Basket</a>
                        </div>
                    </div>
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img class="img-fluid" src="images/single_product/product2.jpg" alt="">
                        </div>
                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard
                                and mouse set - QWERTY - US - black</a>
                            <!-- price -->
                            <div class="product_item_price">
                                <p type="button" class="text-primary" data-toggle="modal" data-target="#exampleModal">
                                    Ask For Price </p>
                            </div>
                            <!-- button -->
                            <button type="button" class="product_button" disabled>Add to Basket</button>
                        </div>
                    </div>
                    <!-- product item -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <!-- Product Modal Start-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-white" style="background-color: #a80b6e; border: none;">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Product Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- style="background-color: #3e3e3e;" -->
                        <div class="">
                            <!-- form Sidebar -->
                            <div class="background">
                                <div class="containers">
                                    <div class="screen">
                                        <div class="screen-body">
                                            <div class="screen-body-item screen-body-item-right modal_form">
                                                <form action="">
                                                    <div class="app-form">
                                                        <div class="app-form-group">
                                                            <input type="text" class="app-form-control2"
                                                                placeholder="NAME">
                                                        </div>
                                                        <div class="app-form-group">
                                                            <input type="email" class="app-form-control2"
                                                                placeholder="EMAIL">
                                                        </div>
                                                        <div class="app-form-group">
                                                            <input type="number" class="app-form-control2"
                                                                placeholder="CONTACT NO">
                                                        </div>
                                                        <div class="app-form-group">
                                                            <input type="text" class="app-form-control2"
                                                                placeholder="Company">
                                                        </div>
                                                        <div class="app-form-group">
                                                            <input type="number" class="app-form-control2"
                                                                placeholder="Quantity">
                                                        </div>
                                                        <div class="app-form-group">
                                                            <input class="app-form-control2 rounded-0 form-control-sm"
                                                                id="formFileSm" type="file">
                                                        </div>
                                                        <div class="app-form-group message">
                                                            <input class="app-form-control2" placeholder="MESSAGE">
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckChecked">
                                                            <label class="form-check-label" for="flexCheckChecked"> Please
                                                                Call Me </label>
                                                        </div>
                                                        <div class="app-form-group buttons">
                                                            <button class="app-form-button">CANCEL</button>
                                                            <button type="submit" class="app-form-button">SEND</button>
                                                        </div>
                                                    </div>
                                                </form>
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
        <!---------Product Modal End -------->
    </section>
    <!---------End -------->
    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection
