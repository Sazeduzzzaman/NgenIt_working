@extends('frontend.master')

@section('content')
    <style>
        .iconbox-icon {
            background: transparent;
            /* box-shadow: 0 0px 0px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%); */
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            margin: 13px auto;
            display: flex;
            width: 100px;
            height: 100px;
            justify-content: center;
            margin-top: -65px;
            align-items: center;
        }

        /* tab */
        h3 {
            font-size: 25px !important;
            margin-top: 20px;
            margin-bottom: 10px;
            line-height: 1.4em !important;
        }

        p {
            font-size: 14px;
            margin: 0 0 10px !important;
            font-weight: 300;
        }

        small {
            font-size: 75%;
            color: #777;
            font-weight: 400;
        }

        .container .title {
            color: #3c4858;
            text-decoration: none;
            margin-top: 30px;
            margin-bottom: 25px;
            min-height: 32px;
        }

        .container .title h3 {
            font-size: 25px;
            font-weight: 300;
        }

        div.card {
            border: 0;
            margin-bottom: 30px;
            margin-top: 30px;
            border-radius: 6px;
            color: rgba(0, 0, 0, .87);
            background: #fff;
            width: 100%;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
        }

        div.card.card-plain {
            background: transparent;
            box-shadow: none;
        }

        div.card .card-header {
            border-radius: 3px;
            padding: 5px 15px;
            margin-left: 15px;
            margin-right: 15px;
            margin-top: -30px;
            border: 0;
            background: linear-gradient(60deg, #eee, #bdbdbd);
        }

        .card-plain .card-header:not(.card-avatar) {
            margin-left: 0;
            margin-right: 0;
        }

        .div.card .card-body {
            padding: 15px 30px;
        }

        div.card .card-header-primary {
            background: linear-gradient(60deg, #ab47bc, #7b1fa2);
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(156, 39, 176, .6);
        }

        div.card .card-header-danger {
            background: linear-gradient(60deg, #ef5350, #d32f2f);
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(244, 67, 54, .6);
        }


        .card-nav-tabs .card-header {
            margin-top: -30px !important;
        }

        .card .card-header .nav-tabs {
            padding: 0;
        }

        .nav-tabs {
            border: 0;
            border-radius: 3px;
            padding: 0 15px;
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }

        .nav-tabs .nav-item .nav-link.active {
            background-color: hsla(0, 0%, 100%, .2);
            transition: background-color .3s .2s;
        }

        .nav-tabs .nav-item .nav-link {
            border: 0 !important;
            color: #fff !important;
            font-weight: 500;
        }

        .nav-tabs .nav-item .nav-link {
            color: #fff;
            border: 0;
            margin: 0;
            border-radius: 3px;
            line-height: 24px;
            text-transform: uppercase;
            font-size: 12px;
            padding: 10px 15px;
            background-color: transparent;
            transition: background-color .3s 0s;
        }

        .nav-link {
            display: block;
        }

        .nav-tabs .nav-item .material-icons {
            margin: -1px 5px 0 0;
            vertical-align: middle;
        }

        .nav .nav-item {
            position: relative;
        }

        .nav-tabs .nav-item .nav-link {
            color: #fff;
            border: 0;
            margin: 0;
            border-radius: 3px;
            line-height: 23px;
            text-transform: uppercase;
            font-size: 12px;
            padding: 3px 7px 3px !important;
            padding: 10px 15px;
            background-color: transparent;
            transition: background-color .3s 0s;
        }

        .multi_tab_content ul li a {
            color: #000000;
            font-weight: 400
        }

        .main_color h2 {
            color: #ae0a46;
        }

        .iconbox-icon img {
            width: 115px;
            height: 80px;
            margin: 10px;
            border-radius: 0% !important;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header pb-5"
        style="background-image:linear-gradient(
            rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)
            ), url('https://static.vecteezy.com/system/resources/previews/001/349/487/original/purple-low-poly-abstract-banner-free-vector.jpg');">
        <div class="container ">
            <h1>Shop By Brands</h1>
            <p class="text-center text-white">Through our deep partnerships with trusted brands, <br> Insight offers a
                comprehensive catalog of software for business. </p>
            <div class="row mb-5">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="">
                        <div class="">
                            <a href="{{ route('shop.html') }}" class="common_button3" href="#">Go To Shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->

    <!--======// Top Brand //=====-->
    <section>
        <div class="container">
            <div>
                <h2 class="text-center py-3">Top Brand</h2>
            </div>
            <div class="row">
                {{-- first brand --}}
                @foreach ($top_brands as $item)
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="iconbox">
                            <div class="iconbox-icon">
                                <img src="{{ asset('storage/requestImg/' . App\Models\Admin\Brand::where('id', $item->brand_id)->value('image')) }}"
                                    alt="">
                            </div>
                            <div class="featureinfo">
                                <h4 class="text-center">{{ Str::limit($item->title, 10) }}</h4>
                                <div class="d-flex justify-content-between">

                                    <div>
                                        <a
                                            href="{{ route('brandpage.html', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}"><button
                                                class="btn btn-light p-1 " style="font-size: 12px;">Details</button></a>

                                    </div>
                                    <div>
                                        <a
                                            href="{{ route('custom.product', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}"><button
                                                class="btn btn-light p-1 " style="font-size: 12px;">Shop</button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--------- End -------->


    <!--======// Feature Brand //=====-->
    <section>
        <div class="container">
            <div class="pt-5">
                <h2 class="text-center py-3">Featured Brands</h2>
            </div>
            <div class="row">
                {{-- first brand --}}
                @foreach ($featured_brands as $item)
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="iconbox">
                            <div class="iconbox-icon">
                                <img src="{{ asset('storage/requestImg/' . $item->image) }}" alt="">
                            </div>
                            <div class="featureinfo">
                                <h4 class="text-center">{{ Str::limit($item->title, 10) }}</h4>
                                <div class="d-flex justify-content-center">

                                    <div>
                                        <a href="{{ route('custom.product', $item->slug) }}"><button
                                                class="btn btn-light p-1 " style="font-size: 12px;">Details</button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--------- End -------->

    <!--======// Explore all the brands Ngen It has to offer. //====-->
    <section>
        <div class="container">
            <div class="row">
                <div class="text-center main_color py-3">
                    <h2>Explore all the brands Ngen It has to offer.</h2>
                </div>
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill p-0" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab" href="#a"
                                role="tab" aria-controls="nav-home" aria-selected="true">A</a>

                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#b"
                                role="tab" aria-controls="nav-profile" aria-selected="false">B</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#c"
                                role="tab" aria-controls="nav-contact" aria-selected="false">C</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#d"
                                role="tab" aria-dontrols="nav-contact" aria-selected="false">D</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#e"
                                role="tab" aria-controls="nav-contact" aria-selected="false">E</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#f"
                                role="tab" aria-controls="nav-contact" aria-selected="false">F</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#g"
                                role="tab" aria-controls="nav-contact" aria-selected="false">G</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#h"
                                role="tab" aria-controls="nav-contact" aria-selected="false">H</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#i"
                                role="tab" aria-controls="nav-contact" aria-selected="false">I</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#j"
                                role="tab" aria-controls="nav-contact" aria-selected="false">J</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#k"
                                role="tab" aria-controls="nav-contact" aria-selected="false">K</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#l"
                                role="tab" aria-controls="nav-contact" aria-selected="false">L</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#m"
                                role="tab" aria-controls="nav-contact" aria-selected="false">M</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#n"
                                role="tab" aria-controls="nav-contact" aria-selected="false">N</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#o"
                                role="tab" aria-controls="nav-contact" aria-selected="false">O</a>

                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#p"
                                role="tab" aria-controls="nav-contact" aria-selected="false">P</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="a" role="tabpanel"
                            aria-labelledby="nav-healthcare">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_A">
                                    <h2 class="letter_content_title">A</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'A')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_B">
                                    <h2 class="letter_content_title">B</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'B')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="c" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_C">
                                    <h2 class="letter_content_title">C</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'C')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="d" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_D">
                                    <h2 class="letter_content_title">D</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'D')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="e" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_E">
                                    <h2 class="letter_content_title">E</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'E')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="f" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_F">
                                    <h2 class="letter_content_title">F</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'F')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="g" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_G">
                                    <h2 class="letter_content_title">G</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'G')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="h" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_H">
                                    <h2 class="letter_content_title">H</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'H')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="i" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_I">
                                    <h2 class="letter_content_title">I</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'I')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="j" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_J">
                                    <h2 class="letter_content_title">J</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'J')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="k" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_K">
                                    <h2 class="letter_content_title">K</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'K')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="l" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_L">
                                    <h2 class="letter_content_title">L</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'L')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="m" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_M">
                                    <h2 class="letter_content_title">M</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'M')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="n" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_N">
                                    <h2 class="letter_content_title">N</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'N')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="o" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_O">
                                    <h2 class="letter_content_title">O</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'O')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="p" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_P">
                                    <h2 class="letter_content_title">P</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'P')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="q" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_Q">
                                    <h2 class="letter_content_title">Q</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'Q')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="r" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_R">
                                    <h2 class="letter_content_title">R</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'R')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="s" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_S">
                                    <h2 class="letter_content_title">S</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'S')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="t" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_T">
                                    <h2 class="letter_content_title">T</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'T')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="u" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_U">
                                    <h2 class="letter_content_title">U</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'U')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_V">
                                    <h2 class="letter_content_title">V</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'V')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="w" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_W">
                                    <h2 class="letter_content_title">W</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'W')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="z" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="d-flex multi_tab_content ">
                                <div class="letter_content_item" id="brand_Z">
                                    <h2 class="letter_content_title">Z</h2>

                                    <div class="letter_content_type">
                                        <ul class="row">
                                            @foreach ($others as $item)
                                                @if ($item->title[0] == 'Z')
                                                    <li class="col-lg-3 col-sm-6"><a
                                                            href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



























@extends('frontend.master')

@section('content')
    <!--======// Header Title //======-->
    <section class="brand_header_wrapper"
        style="background-image: url('{{ asset('frontend/images/buy-brand-hero.jpg') }}');height:15rem">
        <div class="container">
            <h1>Shop By Brand</h1>
            <p class="text-center text-white px-4 mx-4">Through our deep relationships with leading technology partners, we
                provide hardware,
                software and custom solutions to manage today and prepare for the future.</p>

        </div>

    </section>
    <!--------- End --------->

    <!--======// Top Brand //=====-->
    <section class="container">
        <!--Title-->
        <div class="common_product_item_title mt-3">
            <h3>Top brands</h3>
            <hr style="background-color: #ae0a46 !important;width: 15.0%; height:2px">
        </div>
        <!--Product brands-->
        <div class="row mx-4">
            <!--Category item-->
            @foreach ($top_brands as $item)
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="categoryitemshow">
                        <a
                            href="{{ route('brandpage.html', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}">
                            <center> <img class="mb-4"
                                    src="{{ asset('storage/requestImg/' . App\Models\Admin\Brand::where('id', $item->brand_id)->value('image')) }}"
                                    alt="{{ App\Models\Admin\Brand::where('id', $item->brand_id)->value('title') }}"
                                    width="150px" height="65px"></center>
                        </a>
                    </div>

                </div>
            @endforeach

        </div>
    </section>
    <!--------- End -------->

    <!--======// Featured brands //=====-->
    <section class="container mt-3">
        <!--Title-->
        <div class="common_product_item_title">
            <h3>Featured brands</h3>
            <hr style="background-color: #ae0a46 !important;width: 18.0%; height:2px">
        </div>
        <!--Product brands-->
        <div class="row">
            <!--Category item-->
            @foreach ($featured_brands as $item)
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 p-2">
                    <div class="categoryitemshow">
                        <a href="{{ route('custom.product', $item->slug) }}" class="top_brand_image">
                            <center><img class="mb-4" src="{{ asset('storage/requestImg/' . $item->image) }}"
                                    alt="{{ $item->title }}" width="150px" height="60px"></center>
                        </a>
                    </div>
                </div>
            @endforeach
            <!--Category item-->

        </div>
    </section>
    <hr>
    <!--------- End -------->

    <!--======// Alphabetically //====-->
    <section class="container section_padding">
        <div class="tech_glossary_area_left">
            <div class="browse_alphabetically">
                <h2>Explore all the brands Ngen It has to offer.</h2>
                <div class="advanceto_index">
                    <a href="">#</a>
                    <a href="#brand_A">A</a>
                    <a href="#brand_B">B</a>
                    <a href="#brand_C">C</a>
                    <a href="#brand_D">D</a>
                    <a href="#brand_E">E</a>
                    <a href="#brand_F">F</a>
                    <a href="#brand_H">H</a>
                    <a href="#brand_I">I</a>
                    <a href="#brand_K">K</a>
                    <a href="#brand_L">L</a>
                    <a href="#brand_M">M</a>
                    <a href="#brand_N">N</a>
                    <a href="#brand_O">O</a>
                    <a href="#brand_P">P</a>
                    <a href="#brand_R">R</a>
                    <a href="#brand_S">S</a>
                    <a href="#brand_T">T</a>
                    <a href="#brand_U">U</a>
                    <a href="#brand_V">V</a>
                    <a href="#brand_W">W</a>
                    <a href="#brand_Z">Z</a>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="#">
                <h2 class="letter_content_title">#</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        <li class="col-lg-3 col-sm-6"><a href="#">5G</a></li>
                    </ul>
                </div>
            </div>

            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_A">
                <h2 class="letter_content_title">A</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'A')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_B">
                <h2 class="letter_content_title">B</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'B')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_C">
                <h2 class="letter_content_title">C</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'C')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_D">
                <h2 class="letter_content_title">D</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'D')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_E">
                <h2 class="letter_content_title">E</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'E')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_F">
                <h2 class="letter_content_title">F</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'F')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_H">
                <h2 class="letter_content_title">H</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'H')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_I">
                <h2 class="letter_content_title">I</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'I')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_K">
                <h2 class="letter_content_title">K</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'K')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_L">
                <h2 class="letter_content_title">L</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'L')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_M">
                <h2 class="letter_content_title">M</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'M')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_N">
                <h2 class="letter_content_title">N</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'N')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_O">
                <h2 class="letter_content_title">O</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'O')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_P">
                <h2 class="letter_content_title">P</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'P')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_R">
                <h2 class="letter_content_title">R</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'R')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_S">
                <h2 class="letter_content_title">S</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'S')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_T">
                <h2 class="letter_content_title">T</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'T')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_U">
                <h2 class="letter_content_title">U</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'U')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_V">
                <h2 class="letter_content_title">V</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'V')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_W">
                <h2 class="letter_content_title">W</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'W')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Alphabetically Item-->
            <div class="letter_content_item" id="brand_Z">
                <h2 class="letter_content_title">Z</h2>

                <div class="letter_content_type">
                    <ul class="row">
                        @foreach ($others as $item)
                            @if ($item->title[0] == 'Z')
                                <li class="col-lg-3 col-sm-6"><a
                                        href="{{ route('custom.product', $item->slug) }}">{{ $item->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </section>
@endsection
