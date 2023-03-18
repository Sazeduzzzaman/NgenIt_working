@extends('frontend.master')
@section('content')
<!--======// Header Title //======-->
<section class="common_product_header" style="background-image: url('{{asset('storage/'.$brandpage->banner_image)}}');">
    <div class="container">
        @if (!empty($brandpage->brand_logo))
            <div class="d-flex justify-content-center m-0">
                <a href=""><img src="{{asset('storage/'.$brandpage->brand_logo)}}" alt="" width="200px" height="80px"></a>
            </div>
        @endif
        <h1>Shop for {{$brand->title}}</h1>
        <h3>{{$brandpage->header}}</h3>

        <div class="d-flex justify-content-center">
            <div class="row">
                <!--BUTTON START-->
                <div class=" m-4">
                    <button class="common_button2" href="#Contact">Talk to a specialist</button>
                </div>
                <div class=" m-4">
                    <a class="common_button3 " href="{{ (!empty($brand->slug)) ? route('custom.product', $brand->slug):route('all.brand') }}">Shop all {{$brand->title}}</a>
                </div>
            </div>

        </div>
    </div>

</section>
<!----------End--------->

<!--======// Solution feature 1//======-->

@if ($row_one)
    <section class="section_wp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 pr-4 section_text_wrapper">
                    <h4>{{$row_one->title}}</h4>

                    <p>{!! $row_one->description !!}</p>

                    @if (!empty($row_one->link))
                        <a href="{{$row_one->link}}" class="common_button">{{$row_one->btn_name}}</a>
                        @else

                        @endif
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class=" p-4" src="{{asset('storage/'.$row_one->image)}}" alt="" width="580px" height="363px">
                </div>
            </div>
        </div>
    </section>
@endif
<!-------------End--------->

<!--======// Benefits of Software//======-->
<div class="section_padding">
    <div class="container">
        <!-- section title -->
        <div class="section_text_wrapper">
            <h3 class="section_title">{{$brandpage->row_one_title}} </h3>
            <p style="text-align: center;">{{$brandpage->row_one_header}} </p>
        </div>
        <!-- wrapper -->
        <div class="row">
            <!-- item -->
            @if ($card1)
                <div class="col-lg-4 col-sm-12">
                    <div class="software_chose_item">
                        <p class="software_chose_item_title">{{$card1->title}}</p>
                        <p class="software_chose_item_text">{!! $card1->short_des !!}</p>
                    </div>
                </div>
            @endif
            <!-- item -->
            @if ($card2)
                <div class="col-lg-4 col-sm-12">
                    <div class="software_chose_item">
                        <p class="software_chose_item_title">{{$card2->title}}</p>
                        <p class="software_chose_item_text">{!! $card2->short_des !!}</p>
                    </div>
                </div>
            @endif
            <!-- item -->
            @if ($card3)
                <div class="col-lg-4 col-sm-12">
                    <div class="software_chose_item">
                        <p class="software_chose_item_title">{{$card3->title}}</p>
                        <p class="software_chose_item_text">{!! $card3->short_des !!}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-------------End--------->

<!--======// Solution feature 2//======-->
@if ($row_three)
    <section class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class=" p-4" src="{{asset('storage/'.$row_three->image)}}" alt="" width="580px" height="363px">
                </div>
                <div class="col-lg-6 col-sm-12 pl-4 section_text_wrapper">
                    <h4>{{$row_three->title}}</h4>
                    <p>{!! $row_three->description !!}</p>
                        @if (!empty($row_three->link))
                        <a href="{{$row_three->link}}" class="common_button">{{$row_three->btn_name}}</a>
                        @else

                        @endif

                </div>
            </div>
        </div>
    </section>
@endif
<!-------------End--------->

<!--======// Call to action //======-->
<div class="call_to_action" style="background-image: url('{{asset('storage/'.$brandpage->row_six_image)}}');">
    <div class="container">
        <div class="call_to_action_text">
            <h4 class="">{{$brandpage->row_six_title}}</h4>
            <p>{{$brandpage->row_six_header}}</p>
            <div class="d-flex justify-content-center">
                <a href="#Contact" class="common_button3 text-center">Contact us to buy</a>
            </div>
        </div>

    </div>
</div>
<!-------------End--------->

<!--======// Solution feature 3//======-->
@if ($row_four)
    <section class="section_wp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 pr-4 section_text_wrapper">
                    <h4>{{$row_four->title}}</h4>
                    <p>{!!$row_four->description!!}</p>
                    @if (!empty($row_four->link))
                    <a href="{{$row_four->link}}" class="common_button">{{$row_four->btn_name}}</a>
                    @else
                    @endif

                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class=" p-4" src="{{asset('storage/'.$row_four->image)}}" alt="" width="580px" height="363px">
                </div>
            </div>
        </div>
    </section>
@endif
<!-------------End--------->

<!--======// Solution feature 4//======-->
@if ($row_five)
    <section class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class=" p-4" src="{{asset('storage/'.$row_five->image)}}" alt="" width="580px" height="363px">
                </div>
                <div class="col-lg-6 col-sm-12 pl-4 section_text_wrapper">
                    <h4>{{$row_five->title}}</h4>
                        <p>{!!$row_five->description!!}</p>
                        @if (!empty($row_five->link))
                        <a href="{{$row_five->link}}" class="common_button">{{$row_five->btn_name}}</a>
                        @else

                        @endif
                </div>
            </div>
        </div>
    </section>
@endif
<!-------------End--------->

<!--======// Featured content //======-->
<section class="related_posts_wrapper">
    <div class="container">
        <div class="related_posts_title">
            <h1 class="text-center">Featured content</h1>
        </div>

        <div class="row">
            <!--------item------->

            <!--------item------->
            @foreach ($storys as $item)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="{{route('story.details',$item->id)}}">
                            <img class="" src="{{ asset('storage/' . $item->image) }}" alt="" width="280px" height="160px">
                            <h4>{{$item->badge}}</h6>
                            <h3><strong>{{$item->title}}</strong></h3>
                        </a>

                    </div>
                </div>
            @endforeach
            <!--------item------->

        </div>

    </div>
</section>


<section class="solution_contact_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="contact_left_content">
                    <h4 class="contact_left_title text-white text-white" style="font-size: 25px">Need immediate assistance?</h4>
                    <p class="contact_left_text text-white text-white" style="font-size: 18px">Get assistance with tracking an order, requesting a quote, contacting your account representative and more by <a href="tel:{{ $setting->mobile }}">phone</a> or <a href="javascript:void(0);">over chat</a>.</p>

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
                            <a href="javascript:void(0);" class="contact_chat_button text-white"> <span> <i class="fa-solid fa-message"></i> </span> <span> Chat with us</span> </a>
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
@endsection
