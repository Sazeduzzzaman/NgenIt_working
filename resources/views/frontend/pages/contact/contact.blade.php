@extends('frontend.master')
@section('content')
    <style>
        .solution_contact_wrapper {
            background-color: #ffffff !important;
            padding: 40px 0px;

        }

        .thing_together_wrapper p {
            color: #000;
            font-size: 16px;
            font-family: "Allumi Std Extended";
            font-weight: 400;
        }

        .thing_together_wrapper h4 {
            color: #000;
            font-size: 2.5rem;
            font-family: "Klinic Slab";
            font-weight: 400;
            margin-top: 30px;
        }
    </style>
        <!--======// Header Title //======-->
        <section class="common_product_header"
        style="background:url('{{ asset('frontend/images/Contact.jpg') }}');">
        <div class="container ">
            <h1>Contact Us</h1>
            <p class="text-center text-white">Browse and Explore exclusive Refurbished products from Ngen It. <br> We offer
                quality assurance for products, software and services.</p>
        </div>
    </section>
    <!----------End--------->

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
                        <h5 class="text-black">NGen It Global Headquarters</h5>
                        <p>Haque Chamber <br>(11 floor - C&D) 89/2, Panthapath, Dhaka-1215 </p>
                        <p>Billing & invoice: <span class="main_color">+88 01714243446</span>
                            <br> Information and sales: <span class="main_color">sales@ngenitltd.com</span>
                            <br> OneCall support: <span class="main_color"><a class="main_color"
                                    href="{{ $setting->mobile }}"> +88 01714243446 </a></span>
                            <br> Returns: <span class="main_color">(+88) 0258155838</span>
                        </p>
                        <!-- <h5><i class="fa-solid fa-phone"></i>NgenIT</h5> -->
                        <a href="" class="product_button">View all NGentIt office locations</a>
                    </div>
                </div>
                <!----------Sidebar Privacy Policy --------->
                <div class="col-lg-7 col-sm-12">
                    <!-- form Sidebar -->
                    <div class="background ">
                        <div class="containers">
                            <div class="screen shadow-lg">
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
                                    <form class="w-50 feature_form" action="{{ route('contact.store') }}" method="post"
                                        enctype="multipart/form-data">
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
                                    </form>
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
