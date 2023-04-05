@extends('frontend.master')
@section('content')
    {{-- For Portfolio Show Case --}}
    <style>
        /* Team Section Design Start  */
        .our-team {
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        .our-team img {
            width: 100%;
            height: auto;
        }

        .our-team .team-content {
            width: 100%;
            background: #ae0a46;
            color: #fff;
            padding: 15px 0 10px 0;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }

        .our-team:hover .team-content {
            padding-bottom: 40px;
        }

        .our-team .team-content:before,
        .our-team .team-content:after {
            content: "";
            width: 60%;
            height: 38px;
            background: #ae0a46;
            position: absolute;
            top: -18px;
            transform: rotate(15deg);
            z-index: -1;
        }

        .our-team .team-content:before {
            left: -3%;
        }

        .our-team .team-content:after {
            right: -3%;
            transform: rotate(-15deg);
        }

        .our-team .title_name {
            font-size: 20px;
            font-weight: 600;
            text-transform: capitalize;
            margin: 0 0 7px 0;
            position: relative;
        }

        .our-team .title_name:before,
        .our-team .title_name:after {
            content: "";
            width: 7px;
            height: 93px;
            background: #880736;
            position: absolute;
            top: -78px;
            z-index: -2;
            transform: rotate(-74deg);
        }

        .our-team .title_name:before {
            left: 32%;
        }

        .our-team .title_name:after {
            right: 32%;
            transform: rotate(74deg);
        }

        .our-team .post {
            display: block;
            font-size: 13px;
            text-transform: capitalize;
            margin-bottom: 8px;
        }

        .our-team .social-links {
            list-style: none;
            padding: 0 0 15px 0;
            margin: 0;
            position: absolute;
            bottom: -40px;
            right: 0;
            left: 0;
            transition: all 0.5s ease 0s;
        }

        .our-team:hover .social-links {
            bottom: 0;
        }

        .our-team .social-links li {
            display: inline-block;
        }

        .our-team .social-links li a {
            display: block;
            font-size: 16px;
            color: #aad6e1;
            margin-right: 6px;
            transition: all 0.5s ease 0s;
        }

        .our-team .social-links li:last-child a {
            margin-right: 0;
        }

        .our-team .social-links li a:hover {
            color: #880736;
        }

        @media only screen and (max-width: 990px) {
            .our-team {
                margin-bottom: 30px;
            }

            .our-team .team-content:before,
            .our-team .team-content:after {
                height: 50px;
                top: -24px;
            }

            .our-team .title_name:before,
            .our-team .title_name:after {
                top: -85px;
                height: 102px;
            }

            .our-team .title_name:before {
                left: 35%;
            }

            .our-team .title_name:after {
                right: 35%;
            }
        }

        @media only screen and (max-width: 767px) {

            .our-team .team-content:before,
            .our-team .team-content:after {
                height: 75px;
            }

            .our-team .team-content:before {
                transform: rotate(8deg);
            }

            .our-team .team-content:after {
                transform: rotate(-8deg);
            }

            .our-team .title_name:before,
            .our-team .title_name:after {
                width: 10px;
                top: -78px;
                height: 102px;
            }

            .our-team .title_name:before {
                left: 42.5%;
                transform: rotate(-82deg);
            }

            .our-team .title_name:after {
                right: 42.5%;
                transform: rotate(82deg);
            }
        }

        @media only screen and (max-width: 480px) {

            .our-team .title_name:before,
            .our-team .title_name:after {
                top: -83px;
            }
        }

        /* Team Section Design End */
        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            background-color: #ae0a46 !important;
        }

        button,
        input {
            font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
        }

        a {
            color: #f96332;
        }

        a:hover,
        a:focus {
            color: #f96332;
        }

        p {
            line-height: 1.61em;
            font-weight: 300;
            font-size: 1.2em;
        }

        .category {
            text-transform: capitalize;
            font-weight: 700;
            color: #9A9A9A;
        }

        body {
            color: #2c2c2c;
            font-size: 14px;
            font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
            overflow-x: hidden;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
        }

        .nav-item .nav-link,
        .nav-tabs .nav-link {
            -webkit-transition: all 300ms ease 0s;
            -moz-transition: all 300ms ease 0s;
            -o-transition: all 300ms ease 0s;
            -ms-transition: all 300ms ease 0s;
            transition: all 300ms ease 0s;
        }

        .card a {
            -webkit-transition: all 150ms ease 0s;
            -moz-transition: all 150ms ease 0s;
            -o-transition: all 150ms ease 0s;
            -ms-transition: all 150ms ease 0s;
            transition: all 150ms ease 0s;
        }

        [data-toggle="collapse"][data-parent="#accordion"] i {
            -webkit-transition: transform 150ms ease 0s;
            -moz-transition: transform 150ms ease 0s;
            -o-transition: transform 150ms ease 0s;
            -ms-transition: all 150ms ease 0s;
            transition: transform 150ms ease 0s;
        }

        [data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
            filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }


        .now-ui-icons {
            display: inline-block;
            font: normal normal normal 14px/1 'Nucleo Outline';
            font-size: inherit;
            speak: none;
            text-transform: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        @-webkit-keyframes nc-icon-spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @-moz-keyframes nc-icon-spin {
            0% {
                -moz-transform: rotate(0deg);
            }

            100% {
                -moz-transform: rotate(360deg);
            }
        }

        @keyframes nc-icon-spin {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .now-ui-icons.objects_umbrella-13:before {
            content: "\ea5f";
        }

        .now-ui-icons.shopping_cart-simple:before {
            content: "\ea1d";
        }

        .now-ui-icons.shopping_shop:before {
            content: "\ea50";
        }

        .now-ui-icons.ui-2_settings-90:before {
            content: "\ea4b";
        }

        .nav-tabs {
            border: 0;
            padding: 15px 0.7rem;
        }

        .nav-tabs:not(.nav-tabs-neutral)>.nav-item>.nav-link.active {
            box-shadow: 0px 5px 35px 0px rgba(0, 0, 0, 0.3);
        }

        .card .nav-tabs {
            border-top-right-radius: 0.1875rem;
            border-top-left-radius: 0.1875rem;
        }

        .nav-tabs>.nav-item>.nav-link {
            color: #888888;
            margin: 0;
            margin-right: 5px;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 30px;
            font-size: 14px;
            padding: 11px 23px;
            line-height: 1.5;
        }

        .nav-tabs>.nav-item>.nav-link:hover {
            background-color: transparent;
        }

        .nav-tabs>.nav-item>.nav-link.active {
            background-color: #444;
            border-radius: 30px;
            color: #FFFFFF;
        }

        .nav-tabs>.nav-item>.nav-link i.now-ui-icons {
            font-size: 14px;
            position: relative;
            top: 1px;
            margin-right: 3px;
        }

        .nav-tabs.nav-tabs-neutral>.nav-item>.nav-link {
            color: #FFFFFF;
        }

        .nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: #FFFFFF !important;
        }

        .card {
            border: 0;
            border-radius: 0.1875rem;
            display: inline-block;
            position: relative;
            width: 100%;
            margin-bottom: 30px;
            box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
        }

        .card .card-header {
            background-color: transparent;
            border-bottom: 0;
            background-color: transparent;
            border-radius: 0;
            padding: 0;
        }


        [data-background-color]:not([data-background-color="gray"]) {
            color: #FFFFFF;
        }

        [data-background-color]:not([data-background-color="gray"]) p {
            color: #FFFFFF;
        }

        [data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item) {
            color: #FFFFFF;
        }

        [data-background-color]:not([data-background-color="gray"]) .nav-tabs>.nav-item>.nav-link i.now-ui-icons {
            color: #FFFFFF;
        }

        ..nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
            font-family: "Allumi Std Extended";
            font-size: 16px !important;
            color: #fff !important;
            /* padding: 0px !important; */
        }

        /* Showcase Card Style */
        .box {
            font-family: 'Signika', sans-serif;
            text-align: center;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
        }

        .box:before {
            content: "";
            background: linear-gradient(to right, #ae0a46, #8b0737);
            width: 100%;
            height: 100%;
            border-radius: 15px;
            transform-origin: 100% 0;
            transform: rotate(-90deg);
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.35s ease-in-out;
        }

        .box:hover:before {
            opacity: 0.7;
            transform: rotate(0deg);
        }

        .box img {
            width: 100%;
            height: auto;
        }

        .box .box-content {
            color: #fff;
            width: 100%;
            padding: 15px 5px;
            transform-origin: 100% 0;
            transform: translateX(-50%) translateY(-50%) rotate(-90deg);
            position: absolute;
            top: 50%;
            left: 50%;
            transition: all 0.35s ease-in-out;
        }

        .box:hover .box-content {
            transform: translateX(-50%) translateY(-50%) rotate(0deg);
        }

        .box .title_name {
            font-size: 22px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 0 0 3px;
        }

        .box .post {
            font-size: 14px;
            font-weight: 200;
            letter-spacing: 1px;
            text-transform: capitalize;
            display: block;
            margin: 0 0 10px;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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
            color: #fff;
            font-size: 15px;
            line-height: 34px;
            width: 34px;
            height: 34px;
            border: 1px solid #fff;
            display: block;
            position: relative;
            transition: all 0.35s;
        }

        .box .icon li a:hover {
            color: #fff;
            background: rgb(174 10 70);
            border-radius: 10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* Call To Action */
        .subscription.bg-white {
            background: none;
        }

        .bg-white {
            background-color: #fff !important;
        }

        .subscription.bg-white .subscription-wrapper {
            background: #fff;
        }

        .subscription-wrapper {
            border-radius: 0% 5% 10% 3%/10% 20% 0% 17%;
            -webkit-transform: perspective(1800px) rotateY(20deg) skewY(1deg) translateX(50px);
            transform: perspective(1800px) rotateY(20deg) skewY(1deg) translateX(50px);
            padding: 70px 50px;
            z-index: 1;
            width: 100%;
            background: linear-gradient(80deg, #ae0a46 0%, #8b0737 100%);
            top: 100px;

        }

        .subscription-wrapper {
            box-shadow: 0px 15px 39px 0px rgba(8, 18, 109, 0.1) !important;
        }

        .subscription-content {
            -webkit-transform: skewY(-1deg);
            transform: skewY(-1deg);
        }

        .flex-fill {
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .subscription.bg-white .form-control {
            border: 1px solid #ebebeb !important;
        }

        .subscription-wrapper .form-control {
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 45px;
        }

        .subscription-wrapper .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            outline: 0;
            box-shadow: none;
        }

        .btn-primary {
            border: 0;
            color: #fff;
        }

        .btn-primary:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 102%;
            height: 100%;
            background: linear-gradient(45deg, #ae0a46 0%, #8a0737 100%);
            z-index: -1;
            transition: ease 0.3s;
        }

        .main_color {
            color: #ae0a46;
        }

        .main_bg {
            background-color: #ae0a46;
        }

        .why_chose img {
            width: 60px;
            height: 60px;
        }

        @media only screen and (max-width:990px) {
            .box {
                margin: 0 0 30px;
            }
        }

        @font-face {
            font-family: 'Nucleo Outline';
            src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot");
            src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot") format("embedded-opentype");
            src: url("https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/fonts/nucleo-outline.woff2");
            font-weight: normal;
            font-style: normal;

        }

        .now-ui-icons {
            display: inline-block;
            font: normal normal normal 14px/1 'Nucleo Outline';
            font-size: inherit;
            speak: none;
            text-transform: none;
            /* Better Font Rendering */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        @media screen and (max-width: 768px) {

            .nav-tabs {
                display: inline-block;
                width: 100%;
                padding-left: 100px;
                padding-right: 100px;
                text-align: center;
            }

            .nav-tabs .nav-item>.nav-link {
                margin-bottom: 5px;
            }
        }
    </style>

    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: linear-gradient(
            #ae0a46,
            #880736
            ); clip-path: polygon(0 0, 100% 0%, 100% 80%, 50% 100%, 0 80%); height: 28rem;">
        <div class="container ">
            <h1>We Design Things With <br> Love And Passion</h1>

            <div class="row ">
                <!--BUTTON START-->
                <p class="text-center text-white pt-5">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.
                    Nesciunt
                    possimus error iste veritatis reiciendis ducimus aut iusto</p>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <a class="common_button2" href="product_filters.html">Talk to a specialist</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    {{-- Show Case --}}
    <section class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cards">
                    <div class="cards-header">
                        <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
                            data-background-color="orange">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#web_developemtn" role="tab">Web
                                    Development</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#app_development" role="tab">App
                                    Development</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#seo_service" role="tab">SEO Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#data_entry" role="tab">Data Entry</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#gp_design" role="tab">Graphic
                                    Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cards-body">
                        <!-- Tab panes -->
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="web_developemtn" role="tabpanel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://www.digitalsilk.com/wp-content/uploads/2022/09/website-development-process-1.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <a href="{{route('portfolio.details')}}">
                                                <div class="box">
                                                    <img
                                                        src="https://www.digitalsilk.com/wp-content/uploads/2022/09/website-development-process-1.jpg">
                                                    <div class="box-content">
                                                        <h3 class="text-white">NGen It</h3>
                                                        <span class="post">Web Development</span>
                                                        <ul class="icon">
                                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://www.digitalsilk.com/wp-content/uploads/2022/09/website-development-process-1.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://www.digitalsilk.com/wp-content/uploads/2022/09/website-development-process-1.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://www.digitalsilk.com/wp-content/uploads/2022/09/website-development-process-1.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://www.digitalsilk.com/wp-content/uploads/2022/09/website-development-process-1.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://www.digitalsilk.com/wp-content/uploads/2022/09/website-development-process-1.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://www.digitalsilk.com/wp-content/uploads/2022/09/website-development-process-1.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="app_development" role="tabpanel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://media.smallbiztrends.com/2022/05/best-mobile-app-development-companies.png">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://media.smallbiztrends.com/2022/05/best-mobile-app-development-companies.png">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://media.smallbiztrends.com/2022/05/best-mobile-app-development-companies.png">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://media.smallbiztrends.com/2022/05/best-mobile-app-development-companies.png">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://media.smallbiztrends.com/2022/05/best-mobile-app-development-companies.png">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://media.smallbiztrends.com/2022/05/best-mobile-app-development-companies.png">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://media.smallbiztrends.com/2022/05/best-mobile-app-development-companies.png">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://media.smallbiztrends.com/2022/05/best-mobile-app-development-companies.png">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="seo_service" role="tabpanel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img src="https://purpleno.in/wp-content/uploads/2018/06/seo-services.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img src="https://purpleno.in/wp-content/uploads/2018/06/seo-services.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img src="https://purpleno.in/wp-content/uploads/2018/06/seo-services.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img src="https://purpleno.in/wp-content/uploads/2018/06/seo-services.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img src="https://purpleno.in/wp-content/uploads/2018/06/seo-services.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img src="https://purpleno.in/wp-content/uploads/2018/06/seo-services.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img src="https://purpleno.in/wp-content/uploads/2018/06/seo-services.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img src="https://purpleno.in/wp-content/uploads/2018/06/seo-services.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="data_entry" role="tabpanel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://images.ctfassets.net/pdf29us7flmy/7MAfLagu0g3iappEl8QH3S/5ebac5a5115d2ecd3eb357b992d949ee/GettyImages-643897728_optimized.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://images.ctfassets.net/pdf29us7flmy/7MAfLagu0g3iappEl8QH3S/5ebac5a5115d2ecd3eb357b992d949ee/GettyImages-643897728_optimized.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://images.ctfassets.net/pdf29us7flmy/7MAfLagu0g3iappEl8QH3S/5ebac5a5115d2ecd3eb357b992d949ee/GettyImages-643897728_optimized.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://images.ctfassets.net/pdf29us7flmy/7MAfLagu0g3iappEl8QH3S/5ebac5a5115d2ecd3eb357b992d949ee/GettyImages-643897728_optimized.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://images.ctfassets.net/pdf29us7flmy/7MAfLagu0g3iappEl8QH3S/5ebac5a5115d2ecd3eb357b992d949ee/GettyImages-643897728_optimized.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://images.ctfassets.net/pdf29us7flmy/7MAfLagu0g3iappEl8QH3S/5ebac5a5115d2ecd3eb357b992d949ee/GettyImages-643897728_optimized.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://images.ctfassets.net/pdf29us7flmy/7MAfLagu0g3iappEl8QH3S/5ebac5a5115d2ecd3eb357b992d949ee/GettyImages-643897728_optimized.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://images.ctfassets.net/pdf29us7flmy/7MAfLagu0g3iappEl8QH3S/5ebac5a5115d2ecd3eb357b992d949ee/GettyImages-643897728_optimized.jpg">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="gp_design" role="tabpanel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://i0.wp.com/graphxhub.com/wp-content/uploads/2023/01/feature-image-2.jpg?fit=800%2C419&ssl=1">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://i0.wp.com/graphxhub.com/wp-content/uploads/2023/01/feature-image-2.jpg?fit=800%2C419&ssl=1">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://i0.wp.com/graphxhub.com/wp-content/uploads/2023/01/feature-image-2.jpg?fit=800%2C419&ssl=1">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://i0.wp.com/graphxhub.com/wp-content/uploads/2023/01/feature-image-2.jpg?fit=800%2C419&ssl=1">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://i0.wp.com/graphxhub.com/wp-content/uploads/2023/01/feature-image-2.jpg?fit=800%2C419&ssl=1">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://i0.wp.com/graphxhub.com/wp-content/uploads/2023/01/feature-image-2.jpg?fit=800%2C419&ssl=1">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://i0.wp.com/graphxhub.com/wp-content/uploads/2023/01/feature-image-2.jpg?fit=800%2C419&ssl=1">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="box">
                                                <img
                                                    src="https://i0.wp.com/graphxhub.com/wp-content/uploads/2023/01/feature-image-2.jpg?fit=800%2C419&ssl=1">
                                                <div class="box-content">
                                                    <h3 class="text-white">NGen It</h3>
                                                    <span class="post">Web Development</span>
                                                    <ul class="icon">
                                                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                    </ul>
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
        </div>
    </section>
    <!--=====// Subscription section //=====-->
    <section class="subscription bg-white my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscription-wrapper">
                        <div
                            class="d-flex subscription-content justify-content-between align-items-center flex-column flex-md-row text-center text-md-left">
                            <h3 class="flex-fill">Subscribe <br> to our newsletter</h3>
                            <form action="#" class="row flex-fill">
                                <div class="col-lg-7 my-md-2 my-2">
                                    <input type="email"
                                        class="form-control px-4 border-0 w-100 text-center text-md-left" id="email"
                                        placeholder="Your Email" name="email">
                                </div>
                                <div class="col-lg-5 my-md-2 my-2">
                                    <button type="submit" class="btn btn-primary btn-lg border-0 w-100">Subscribe
                                        Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->

    <!--=====// Team section //=====-->
    <section>
        <div class="container my-5">
            <div class="team_heading">
                <div class="py-3">
                    <h3><span style="border-top:2px solid #ae0a46;">Ou</span>r Te <span
                            style="border-bottom:2px solid #ae0a46;">am</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <img src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg" alt="">
                        <div class="team-content">
                            <h3 class="title_name">Williamson</h3>
                            <span class="post">web developer</span>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <img src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg" alt="">
                        <div class="team-content">
                            <h3 class="title_name">kristina</h3>
                            <span class="post">Web Designer</span>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <img src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg" alt="">
                        <div class="team-content">
                            <h3 class="title_name">kristina</h3>
                            <span class="post">Web Designer</span>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-team">
                        <img src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg" alt="">
                        <div class="team-content">
                            <h3 class="title_name">kristina</h3>
                            <span class="post">Web Designer</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------End -------->
    <section class=""
        style="background-image:url('https://vetsez.com/wp-content/uploads/2020/03/AdobeStock_291217289-copy.jpg');">
        <div class="container-fluid">
            <div class="container px-3 py-5">
                <div class="title_area">
                    <p><span class="main_bg text-white p-2 rounded-pill">NGen It</span></p>
                    <h1>Why Choose Us?</h1>
                    <p class="w-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis assumenda
                        quisquam in odio aspernatur non eaque similique beatae recusandae impedit expedita fugiat placeat
                        provident quam explicabo, possimus consectetur iste suscipit!</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="why_chose p-3">
                            <img class="img-fluid"
                                src="https://www.iconpacks.net/icons/2/free-reddit-logo-icon-2436-thumb.png"
                                alt="" width="60px" height="60px">
                            <div>
                                <p class="text-muted">01</p>
                                <h5>Reasone One</h5>
                                <p style="font-size: 14px; text-align: justify">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Suscipit dolor possimus ut nisi fuga eos id tempore, cupiditate,
                                    itaque iste quidem vitae ex sint quasi odit nihil perferendis, hic libero!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="why_chose p-3">
                            <img class="img-fluid"
                                src="https://cdn.iconscout.com/icon/free/png-256/apple-photos-493155.png" alt=""
                                width="60px" height="60px">
                            <div>
                                <p class="text-muted">02</p>
                                <h5>Reasone Two</h5>
                                <p style="font-size: 14px; text-align: justify">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Suscipit dolor possimus ut nisi fuga eos id tempore, cupiditate,
                                    itaque iste quidem vitae ex sint quasi odit nihil perferendis, hic libero!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="why_chose p-3">
                            <img class="img-fluid"
                                src="https://icon-library.com/images/android-icon-png/android-icon-png-17.jpg"
                                alt="" width="60px" height="60px">
                            <div>
                                <p class="text-muted">03</p>
                                <h5>Reasone Three</h5>
                                <p style="font-size: 14px; text-align: justify">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Suscipit dolor possimus ut nisi fuga eos id tempore, cupiditate,
                                    itaque iste quidem vitae ex sint quasi odit nihil perferendis, hic libero!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

    {{-- Site Portfolio Show Case Start --}}
@endsection
