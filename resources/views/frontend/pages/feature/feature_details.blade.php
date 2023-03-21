@extends('frontend.master')
@section('content')
    <style>
        .app-contact {
            margin-top: auto;
            font-size: 8px;
            color: #888;
            position: absolute;
            bottom: 40px;
        }

    </style>

    <!--======// Guidance and support {1} //======-->
    <section class="section_wp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 pr-4 service_common_content">
                    <span class="radius_text_button">{{ $feature->badge }}</span>
                    <h3>{{ $feature->title }}</h3>
                    <a href="#hear_from_team" class="common_button2">Hear from our team</a>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid p-4" src="{{ asset('storage/requestImg/' . $feature->image) }}"
                        alt="{{ $feature->badge }}">
                </div>
            </div>
        </div>
    </section>
    <!-------------End--------->

    <!--======// Modern finance //======-->
    @if ($row_one)
        <section class="container section_padding" style="border-bottom:1px solid #ddd;">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="section_text_wrapper">
                        <h4>{{ $row_one->title }}</h4>
                        <p style="text-align: justify;">{!! $row_one->short_des !!}</p>

                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="industry_single_help_list">
                        <h5></h5>
                        <ul>

                            <li class="d-flex">
                                <div><img class="img-fluid mr-1"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Ski_trail_rating_symbol-black_diamond.svg/1200px-Ski_trail_rating_symbol-black_diamond.svg.png"
                                        alt="" style="width: 20px; height: 20px;"></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_one }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div><img class="img-fluid mr-1"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Ski_trail_rating_symbol-black_diamond.svg/1200px-Ski_trail_rating_symbol-black_diamond.svg.png"
                                        alt="" style="width: 20px; height: 20px;"></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_two }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div><img class="img-fluid mr-1"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Ski_trail_rating_symbol-black_diamond.svg/1200px-Ski_trail_rating_symbol-black_diamond.svg.png"
                                        alt="" style="width: 20px; height: 20px;"></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_three }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div><img class="img-fluid mr-1"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Ski_trail_rating_symbol-black_diamond.svg/1200px-Ski_trail_rating_symbol-black_diamond.svg.png"
                                        alt="" style="width: 20px; height: 20px;"></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_four }}</a></div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </section>
    @endif

    <!----------End--------->

    <!--======// Consulting services {2} //======-->
    @if ($row_two)
        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid p-4" src="{{ asset('storage/requestImg/' . $row_two->image) }}" alt=""
                            style="height:370px; width:492px;">
                    </div>
                    <div class="col-lg-6 col-sm-12 pr-4 service_common_content">
                        <h4>{{ $row_two->badge }}</h4>
                        <h5>{{ $row_two->title }}</h5>
                        <p>{!! $row_two->description !!}</p>

                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-------------End--------->
    <!--======// Call to action //======-->
    <div class="call_to_action"
        style="background-image: linear-gradient(
            rgba(0,0,0,0.8),
            rgba(0,0,0,0.8)
            ), url('https://miro.com/blog/wp-content/uploads/2019/09/feature-affinity-map.svg');">
        <div class="container">
            <div class="call_to_action_text w-75 mx-auto">
                <h4 class="">{{ $feature->row_three_title }}</h4>
                <p>{{ $feature->row_three_header }}</p>
                <div class="d-flex justify-content-center">
                    <a href="#Contact" class="common_button3 text-center">Contact us to buy</a>
                </div>
            </div>

        </div>
    </div>
    <!-------------End--------->

    <!--======// Business section //======-->
    <section class="section_wp2">
        <div class="container">
            <!-- home title -->
            <div class="home_title">
                <h5 class="home_title_heading mb-4 pb-4"> {!! $feature->footer !!}</h5>
                <h4 class="section_title mt-4 pt-4"><span class="topLine">K</span>ey business outcomes</h4>
            </div>

            <!-- business content -->
            <div class="business_content_wrapper">
                <!-- business item wrapper -->
                <div class="row solution_business_item">
                    <!-- item -->
                    @if ($features)
                        @foreach ($features as $item)
                            <div class="col-lg-3 col-sm-6">
                                <!-- image -->
                                <div class="business_item_icon">
                                    <img src="{{ asset('storage/requestImg/' . $item->logo) }}" alt="">
                                </div>

                                <!-- content -->
                                <div class="business_item_content">
                                    <p class="business_item_title">{{ $item->badge }}</p>
                                    <p class="business_item_text">{{ $item->short_desc }}</p>
                                    <a href="{{ route('feature.details', $item->id) }}"
                                        class="business_item_button"><span>Learn More</span> <span
                                            class="business_item_button_icon"><i
                                                class="fa-solid fa-arrow-right-long"></i></span></a>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
    </section>
    <!---------End -------->
    @php
        $setting = App\Models\Admin\Setting::first();
    @endphp

    <!--=====// Pageform section //=====-->
    <section class=" solution_contact_wrapper">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-5 col-sm-12">
            <div class="thing_together_wrapper">
            <h4>
                <span class="why_Choose_lineTop">L</span>et’s do big things together.
            </h4>
            <p>Get assistance with tracking an order, requesting a quote, contacting your account representative and more by phone or over chat.</p>
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
                    <form class="w-50 feature_form" action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
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



























@extends('frontend.master')
@section('content')
    <!--======// Guidance and support {1} //======-->
    <section class="section_wp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 pr-4 service_common_content">
                    <span class="radius_text_button">{{$feature->badge}}</span>
                    <h3>{{$feature->title}}</h3>
                    <a href="#hear_from_team" class="common_button2">Hear from our team</a>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid p-4" src="{{asset('storage/requestImg/'.$feature->image)}}" alt="{{$feature->badge}}">
                </div>
            </div>
        </div>
    </section>
    <!-------------End--------->

    <!--======// Modern finance //======-->
    @if ($row_one)
    <section class="container section_padding" style="border-bottom:1px solid #ddd;">
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <div class="section_text_wrapper">
                    <h4>{{$row_one->title}}</h4>
                    <p style="text-align: justify;">{!!$row_one->short_des!!}</p>

                </div>
            </div>
            <div class="col-lg-5 col-sm-12">
                <div class="industry_single_help_list">
                    <h5></h5>
                    <ul>

                        <li class="d-flex">
                            <div><i class="fa-solid fa-check mr-2"></i></div>
                            <div><a href="javascript:void(0);">{{$row_one->list_one}}</a></div>
                        </li>

                        <li class="d-flex">
                            <div><i class="fa-solid fa-check mr-2"></i></div>
                            <div><a href="javascript:void(0);">{{$row_one->list_two}}</a></div>
                        </li>

                        <li class="d-flex">
                            <div><i class="fa-solid fa-check mr-2"></i></div>
                            <div><a href="javascript:void(0);">{{$row_one->list_three}}</a></div>
                        </li>

                        <li class="d-flex">
                            <div><i class="fa-solid fa-check mr-2"></i></div>
                            <div><a href="javascript:void(0);">{{$row_one->list_four}}</a></div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
    @endif

    <!----------End--------->

    <!--======// Consulting services {2} //======-->
    @if ($row_two)
    <section class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid p-4" src="{{asset('storage/requestImg/'.$row_two->image)}}" alt="" style="height:370px; width:492px;">
                </div>
                <div class="col-lg-6 col-sm-12 pr-4 service_common_content">
                    <h4>{{$row_two->badge}}</h4>
                    <h5>{{$row_two->title}}</h5>
                    <p>{!! $row_two->description !!}</p>

                </div>
            </div>
        </div>
    </section>
    @endif

    <!-------------End--------->

    <!--======// Gradian Background //======-->
    <section class="integrated_security">
        <div class="container">
            <div class="call_to_action_text">
                <h4 class="section_title">{{$feature->row_three_title}}</h4>
                <p>{{$feature->row_three_header}}</p>
            </div>
        </div>

    </section>
    <!----------End--------->

    <!--======// Business section //======-->
    <section class="section_wp2">
        <div class="container">
            <!-- home title -->
            <div class="home_title">
                <h5 class="home_title_heading mb-4 pb-4"> {!! $feature->footer !!}</h5>
                <h4 class="section_title mt-4 pt-4"><span class="topLine">K</span>ey business outcomes</h4>
            </div>

            <!-- business content -->
            <div class="business_content_wrapper">
                <!-- business item wrapper -->
                <div class="row solution_business_item">
                    <!-- item -->
                    @if ($features)
                        @foreach ($features as $item)
                        <div class="col-lg-3 col-sm-6">
                            <!-- image -->
                            <div class="business_item_icon">
                                <img src="{{asset('storage/requestImg/'.$item->logo)}}" alt="">
                            </div>

                            <!-- content -->
                            <div class="business_item_content">
                                <p class="business_item_title">{{$item->badge}}</p>
                                <p class="business_item_text">{{$item->short_desc}}</p>
                                <a href="{{route('feature.details',$item->id)}}" class="business_item_button"><span>Learn More</span> <span class="business_item_button_icon"><i class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
    </section>
    <!---------End -------->
    @php
        $setting = App\Models\Admin\Setting::first();
    @endphp

    <!--=====// Pageform section //=====-->
    <section class="solution_contact_wrapper">
        <div class="container" >
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="thing_together_wrapper">
                        <h4>{{$feature->row_four_title}}</h4>
                        <p>{{$feature->row_four_header}}</p>

                        <h5 style="font-size: 24px;"><i class="fa-solid fa-phone"></i>{{$setting->phone}} &nbsp; {{$setting->name}}</h5 style="font-size: 16px;">
                    </div>
                </div>
                <!-------From------->
                <div class="col-lg-6 col-sm-12 p-0" id="hear_from_team">
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

