@extends('frontend.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
        .global_call_section::after {
            background: url('{{ asset('storage/' . $learnmore->background_image) }}');
            content: "";
            position: absolute;
            height: 230px;
            background-position: top center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            width: 100%;
            background-color: #cbc4c3;
            top: 25%;
            left: 0px;
            z-index: -1;
        }

        .outcome_smail_bussiness_title h2 {
            font-family: "klinic-slab", "Helvetica Neue", "Helvetica", Helvetica, Arial,
                sans-serif;
        }

        .global_call_section_content {
            max-width: 575px;
            background-color: var(--heading);
            padding: 50px;
            margin-left: -15px;
            margin-top: 1.9rem;
        }

        .word {
            position: absolute;
            opacity: 0;
            font-size: 38px;
        }

        .letter {
            display: inline-block;
            position: relative;
            float: left;
            transform: translateZ(25px);
            transform-origin: 50% 50% 25px;
            font-weight: 400 !important;
        }

        .letter.out {
            transform: rotateX(90deg);
            transition: transform 0.32s cubic-bezier(0.55, 0.055, 0.675, 0.19);
            font-weight: 400 !important;
        }

        .letter.behind {
            transform: rotateX(-90deg);
            font-weight: 400 !important;
        }

        .letter.in {
            transform: rotateX(0deg);
            transition: transform 0.38s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            font-weight: 400 !important;
        }

        .wisteria {
            color: #ae0a46;
        }

        .belize {
            color: #ae0a46;
        }

        .pomegranate {
            color: #ae0a46;
        }

        .green {
            color: #ae0a46;
        }

        .midnight {
            color: #ae0a46;
        }

        .normal_text {
            font-size: 60px !important;
            line-height: 72px;
            vertical-align: baseline;
            letter-spacing: normal;
            font-weight: 300 !important;
        }

        .animated_text {
            font-size: 60px !important;
            line-height: 72px;
            vertical-align: baseline;
            letter-spacing: normal;
            font-weight: 400 !important;
        }

        /* Extra Section */
        .ag-format-container {
            width: 1142px;
            margin: 0 auto;
        }


        .ag-offer-block {
            padding: 35px 0 20px
        }

        .ag-offer_list {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -moz-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .ag-offer_item {
            width: 33.33%;

            overflow: hidden;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            position: relative;
        }

        .ag-offer_item:not(:nth-child(1)):not(:nth-child(2)):not(:nth-child(3)) {
            border-top: 1px solid #ae0a46;
        }

        .ag-offer_item:not(:nth-child(3n)) {
            border-right: 1px solid #ae0a46;
        }

        .ag-offer_item:nth-child(1) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(2) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(3) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(4) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(5) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:nth-child(6) .ag-offer_hidden-item {
            background-color: #ae0a46;
        }

        .ag-offer_item:hover .ag-offer_visible-item {
            opacity: 0;

            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);

            -webkit-transition-delay: 0s;
            -moz-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }

        .ag-offer_visible-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;

            height: 100%;
            width: 100%;
            padding: 35px 40px;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            -webkit-transition: .4s .3s;
            -moz-transition: .4s .3s;
            -o-transition: .4s .3s;
            transition: .4s .3s;
        }

        .ag-offer_img {
            height: 64px;
            width: 64px;
            margin: 0 15px 0 0;
        }

        .ag-offer_title {
            font-size: 22px;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .ag-offer_hidden-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;

            padding: 30px;

            opacity: 0;

            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;

            -webkit-transform: rotate(180deg) scale(0);
            -moz-transform: rotate(180deg) scale(0);
            -ms-transform: rotate(180deg) scale(0);
            -o-transform: rotate(180deg) scale(0);
            transform: rotate(180deg) scale(0);

            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }

        .ag-offer_item:hover .ag-offer_hidden-item {
            opacity: 1;

            -webkit-transform: rotate(0deg) scale(1);
            -moz-transform: rotate(0deg) scale(1);
            -ms-transform: rotate(0deg) scale(1);
            -o-transform: rotate(0deg) scale(1);
            transform: rotate(0deg) scale(1);

            -webkit-transition-delay: .3s;
            -moz-transition-delay: .3s;
            -o-transition-delay: .3s;
            transition-delay: .3s;
        }

        .ag-offer_text {
            max-width: 100%;

            opacity: 0;

            font-size: 14px;
            color: #FFF;

            -webkit-transition: .3s .5s;
            -moz-transition: .3s .5s;
            -o-transition: .3s .5s;
            transition: .3s .5s;
        }

        .ag-offer_item:hover .ag-offer_text {
            opacity: 1;
        }

        .ag-offer_btn {
            display: block;
            padding: 10px 20px;
            border: 2px solid #FFF;

            position: absolute;
            top: 50%;
            left: 50%;

            white-space: nowrap;
            font-size: 25px;
            color: #FFF;

            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;

            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .ag-offer_btn:hover {
            border: 2px solid #0000d1;
            background-color: #FFF;

            text-decoration: none;
            color: #0000d1;
        }

        /*  */
        .box {
            font-family: 'Mandali', sans-serif;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        .box:before,
        .box:after {
            content: "";
            background: rgba(11, 11, 12, 0.85);
            width: 200%;
            height: 200%;
            opacity: .75;
            transform: skew(45deg) translateX(100%);
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: 1;
            transition: all .6s ease;
        }

        .box:after {
            transform: skew(45deg) translateX(-100%);
            top: 0;
            left: 0;
            right: auto;
            bottom: auto;
            z-index: 0;
        }

        .box:hover:before,
        .box:hover:after {
            transform: skew(45deg) translateX(0);
        }

        .box img {
            width: 100%;
            height: auto;
            transition: all 0.35s;
        }

        .box:hover img {
            opacity: 0.5;
        }

        .box-content {
            color: #fff;
            width: 85%;
            opacity: 0;
            transform: translateX(-50%) translateY(-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            transition: all 0.6s ease;
        }

        .box:hover .box-content {
            opacity: 1;
        }

        .box .title {
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin: 0 0 3px;
        }

        .box .post {
            font-size: 14px;
            font-weight: 200;
            letter-spacing: 1px;
            text-transform: capitalize;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin: 0 0 10px;
            display: block;
        }

        .box .icon {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .box .icon li {
            margin: 0 3px;
            display: inline-block;
        }

        .box .icon li a {
            color: #EA2027;
            background: #fff;
            font-size: 16px;
            line-height: 34px;
            width: 34px;
            height: 34px;
            display: block;
            transition: all 0.35s;
        }

        .box .icon li a:hover {
            color: #fff;
            background: #EA2027;
        }

        @media only screen and (max-width:990px) {
            .box {
                margin: 0 0 30px;
            }
        }


        /*  */
        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }

            .ag-offer_item {
                width: 100%;
                margin: 0 0 30px;
                border: 0 none !important;
                border-bottom: 1px solid #c1c1c1 !important;
            }

            .ag-offer_visible-item {
                padding: 0 20px 30px;

                -webkit-box-pack: start;
                -webkit-justify-content: flex-start;
                -moz-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .ag-offer_item:hover .ag-offer_visible-item {
                opacity: 1;

                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }

            .ag-offer_hidden-item {
                padding: 0 20px 20px;

                opacity: 1;

                position: static;

                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }

            .ag-offer_item:nth-child(1) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(2) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(3) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(4) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(5) .ag-offer_hidden-item,
            .ag-offer_item:nth-child(6) .ag-offer_hidden-item {
                background-color: transparent;
            }

            .ag-offer_item:hover .ag-offer_text {
                opacity: 1;
            }

            .ag-offer_title {
                font-weight: bold;
            }

            .ag-offer_text {
                opacity: 1;

                font-size: 18px;
                color: #000;
            }

            .ag-offer_btn {
                border: 2px solid #0000d1;
                background-color: #000080;

                position: static;

                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none;
            }

        }

        @media only screen and (max-width: 639px) {}

        @media only screen and (max-width: 479px) {}

        @media (min-width: 768px) and (max-width: 979px) {
            .ag-format-container {
                width: 750px;
            }

        }

        @media (min-width: 980px) and (max-width: 1161px) {
            .ag-format-container {
                width: 960px;
            }

        }
    </style>


    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: url('https://www.insight.com/content/dam/insight-web/sitesections/solutions/images/heroes/solutions-home-hero.jpg');">
        {{-- style="background-image: url('{{ asset('storage/' . $learnmore->image_banner) }}');"> --}}
        <div
            style="background-image: url('https://www.insight.com/content/dam/insight-web/en_US/campaigns/insight/be-ambitious/pattern-background-gradient-full-large.png'); background-repeat: no-repeat;
background-position: top right;
background-size: auto;
min-height: 475px;
overflow: hidden;">
            <div class="">
                <div class="container ">
                    {{-- <h1 class="text-capitalize w-50 mx-auto">{{ $learnmore->title }}.</h1> --}}
                    <div class="outcome_assetType mb-4">
                        <a href="#">{{ $learnmore->badge }}</a>
                    </div>
                    @php
                        $sentence = $learnmore->title;
                        
                        $words = str_word_count($sentence, 1);
                        
                        // Get the last word of the sentence using the end() function
                        $last_word = end($words);
                        
                        // Get the second last word of the sentence using the array_slice() and end() functions
                        $last_two_words = array_slice($words, -2, 1);
                        $second_last_word = end($last_two_words);
                        
                        // Get the third last word of the sentence using the array_slice() and end() functions
                        $last_three_words = array_slice($words, -3, 1);
                        $third_last_word = end($last_three_words);
                        //$fourth_last_word = end(array_slice($words, -4, 1));
                        
                        // Calculate the length of the last two words combined
                        $last_three_words_length = strlen($third_last_word) + strlen($second_last_word) + strlen($last_word) + 3; // +2 to account for the spaces between words
                        
                        // Use the substr() function to remove the last two words from the sentence
                        $manipulated_sentence = substr($sentence, 0, -$last_three_words_length);
                        //dd($manipulated_sentence);
                    @endphp
                    <h1 class="text-capitalize w-50 mx-auto">{{ $manipulated_sentence }}</h1>
                    <h2 class="text-white text-center" style=" font-size: 30px; margin-left: -220px;">
                        <span class="normal_text text-capitalize">{{ $third_last_word }} {{ $second_last_word }}</span>
                        <span class="word wisteria ml-2 normal_text fw-bold"> {{ $last_word }}</span>
                        <span class="word wisteria ml-2 normal_text fw-bold"> {{ $last_word }}</span>
                        <span class="word belize ml-2 normal_text fw-bold"> {{ $last_word }}</span>
                        <span class="word pomegranate ml-2 normal_text fw-bold"> {{ $last_word }}</span>

                    </h2>
                    <div class="row ">
                        <!--BUTTON START-->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="m-4">
                                <a class="common_button2" href="{{ route('contact') }}">Hear from our team</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->


    <!--=======// Techincal Expertise //========-->
    <section class="container py-3">
        <div class="row py-2">
            <h2 class="text-center text-capitalize py-2">{{ $learnmore->header_one }}</h2>
            <p class="text-center py-1">{{ $learnmore->header_two }}</p>
        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="box shadow-lg rounded">
                            <img class="img-fluid" src="{{ asset('frontend/images/Frame 4 (4).jpg') }}"
                                style=" height: 300px;">
                            <div class="box-content">
                                <h3 class="text-white">{{ Str::limit($learnmore->box_one_title, 18) }}</h3>
                                <span class="post">{!! $learnmore->box_one_short_des !!}</span>
                                <a href="{{ $learnmore->box_one_link }}" class="common_button2">Explore
                                    {{ $learnmore->box_one_title }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box shadow-lg rounded">
                            <img class="img-fluid" src="{{ asset('frontend/images/Frame 4 (5).jpg') }}"
                                style=" height: 300px;">
                            <div class="box-content">
                                <h3 class="text-white">{{ Str::limit($learnmore->box_two_title, 18) }}</h3>
                                <span class="post">{!! $learnmore->box_two_short_des !!}</span>
                                <a href="{{ $learnmore->box_two_link }}" class="common_button2">Explore
                                    {{ $learnmore->box_two_title }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="box shadow-lg rounded">
                            <img class="img-fluid" src="{{ asset('frontend/images/Frame 4 (6).jpg') }}"
                                style=" height: 300px;">
                            <div class="box-content">
                                <h3 class="text-white">{{ Str::limit($learnmore->box_three_title, 18) }}</h3>
                                <span class="post">{!! $learnmore->box_three_short_des !!}</span>
                                <a href="{{ $learnmore->box_three_link }}" class="common_button2">Explore
                                    {{ $learnmore->box_three_title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=======// Techincal Expertise //========-->
    <!--=======// Extra Section //========-->

    {{-- Extra Section --}}
    <!--======// our clint tab //======-->
    <section class="clint_tab_section my-5">
        <div class="container">
            <div class="clint_tab_content pb-3">
                <!-- home title -->
                <div class="home_title mt-3">
                    <div class="software_feature_title">
                        <h1 class="text-center ">Client Story</h1>
                    </div>
                    <p class="home_title_text">
                        {{ $learnmore->success_story_title }}
                    </p>
                </div>
                <!-- Client Tab Start -->
                <div class="row">
                    <div class="col-xs-12 ">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">{{ $story1->badge }}</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile"
                                    aria-selected="false">{{ $story2->badge }}</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                    role="tab" aria-controls="nav-contact"
                                    aria-selected="false">{{ $story3->badge }}</a>
                            </div>
                        </nav>
                        @php
                            $tags_1 = explode(',', $story1->tags);
                            $tags_2 = explode(',', $story2->tags);
                            $tags_3 = explode(',', $story3->tags);
                            
                        @endphp
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-healthcare">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image">
                                            <img src="{{ asset('storage/' . $story1->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story1->title }}
                                        </h5>
                                        <p>{{ $story1->header }}</p>
                                        <div class="home_card_button text-start p-2">
                                            <a class="effect01" href="{{ route('story.details', $story1->id) }}">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image">
                                            <img src="{{ asset('storage/' . $story2->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story2->title }}
                                        </h5>
                                        <p>{{ $story2->header }}</p>
                                        <div class="home_card_button   text-start p-2">
                                            <a class="effect01" href="{{ route('story.details', $story2->id) }}">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="tab_side_image">
                                            <img src="{{ asset('storage/' . $story3->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-sm-12">
                                        <h5 class="home_title_heading" style="text-align: left;">{{ $story3->title }}
                                        </h5>
                                        <p>{{ $story3->header }}</p>
                                        <div class="home_card_button  text-start p-2">
                                            <a class="effect01" href="{{ route('story.details', $story3->id) }}">Read
                                                more</a>
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


    <!--=====// Global call section //=====-->
    <section class="global_call_section section_padding">
        <div class="container">
            <!-- content -->
            @php
                $sentence = $learnmore->consult_title;
            @endphp
            <div class="global_call_section_content">
                <div class="home_title" style="width: 100%; margin: 0px;">
                    <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                        <span>{{ \Illuminate\Support\Str::substr($sentence, 0, 1) }}</span>{{ \Illuminate\Support\Str::substr($sentence, 1) }}

                    </h5>
                    <p class="home_title_text text-white" style="text-align: left;">{{ $learnmore->consult_short_des }}
                    </p>
                    <div class="business_seftion_button" style="text-align: left;">
                        <a href="#Contact">Explore business outcomes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->



    <!--=====// We serve //=====-->
    <div class="container pb-5">
        <!-- section title -->
        <div class="clint_help_section_heading_wrapper">
            <!-- title -->
            <h5 class="home_title_heading" style="text-align: left;">
                <h5 class="home_title_heading" style="text-align: left;">
                    <div class="software_feature_title">
                        <h1 class="text-center pt-4 pb-4">
                            Industries We Serve
                        </h1>
                    </div>
                </h5>
                <p class="home_title_text">
                    <span class="font-weight-bold">{{ $learnmore->industry_header }} </span>
                </p>
        </div>
        <!-- section content wrapper -->
        <div class="row mb-4">
            <!-- content -->
            <div class="col-lg-9 col-sm-12">
                <!-- we_serveItem_wrapper -->
                <div class="row">
                    <!-- item -->

                    @if ($industrys)
                        @foreach ($industrys as $item)
                            <div class="col-lg-3 col-sm-6 p-1">
                                <div class="we_serve_item">
                                    <a href="{{ route('industry.details', $item->id) }}">
                                        <div class="we_serve_item_image">
                                            <img src="{{ asset('storage/' . $item->logo) }}" alt="">
                                        </div>
                                        <div class="we_serve_item_text">{{ $item->title }}</div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
            <!-- sidebar -->
            <div class="col-lg-3 col-sm-12">
                <div class="we_serve_title">
                    <p>Private sector</p>
                </div>
                <!-- sidebar list -->
                <div>
                    @if ($random_industries)
                        @foreach ($random_industries as $item)
                            <div class="pt-2">
                                <a href="{{ route('industry.details', $item->id) }}">
                                    <div id="fed-bg">
                                        <div class="p-2">
                                            <h5 class="text-white brand_side_text">{{ $item->title }} ›</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!---------End -------->

    <section class="container mt-3">
        <div class="outcome_smail_bussiness_title">
            <!-- <hr class="lineTop"> -->
            <h2>{!! $learnmore->footer !!}</h2>
            <hr class="lineBottom">
        </div>
    </section>

    <!--=====// Pageform section //=====-->
    @include('frontend.partials.footer_contact')
    <!---------End -------->
@endsection
@once
    @section('styles')
        <style>
            .word {
                position: absolute;
                opacity: 0;
                font-size: 38px;
            }

            .active,
            .collapsible:focus {
                border-top: none !important;
                border-left: none !important;
                border-right: none !important;
            }
        </style>
    @endsection
@endonce
