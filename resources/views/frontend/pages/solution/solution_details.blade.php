@extends('frontend.master')
@section('content')
    <!--======// Header Title //======-->
    <section class="common_product_header"
        style="background-image: url('{{ asset('storage/requestImg/' . $solution->banner_image) }}');">
        <div class="container">
            <div class="">
                <h1>{{ $solution->name }}</h1>
                <h3>{{ $solution->header }}</h3>
            </div>

            <div class="d-flex justify-content-center">
                <a class="common_button2" href="#hear_from_team">Hear from our team</a>
            </div>
        </div>

    </section>
    <!----------End--------->

    <!--======// Header Title //======-->
    @if ($row_one)
        <section class="container section_padding">
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
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_one }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_two }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_three }}</a></div>
                            </li>

                            <li class="d-flex">
                                <div class="mr-2"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path fill="#AE1D48"
                                            d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z" />
                                    </svg></div>
                                <div><a href="javascript:void(0);">{{ $row_one->list_four }}</a></div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </section>
    @endif
    <!----------End--------->

    <!--======// Solution feature //======-->
    <section class="section_wp">
        <div class="container">
            <!--title-->
            <div class="section_text_wrapper">
                <h3 class="section_title">{{ $solution->row_two_title }}</h3>
                <p class="text-center">{{ $solution->row_two_header }}</p>
            </div>
            <!--Content Wrapper-->
            <div class="row d-flex justify-content-center pt-3">
                <div class="col-lg-2 col-md-6">
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/requestImg/' . $card1->image) }}" alt="" width="150px"
                            height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">{{ Str::limit($card1->title, 10) }}
                        </p>
                        <p class="text-center" style="font-size: 15px;">{{ Str::limit($card1->short_des, 70) }}</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/requestImg/' . $card2->image) }}" alt="" width="150px"
                            height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">{{ Str::limit($card2->title, 10) }}
                        </p>
                        <p class="text-center" style="font-size: 15px;">{{ Str::limit($card2->short_des, 70) }}</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/requestImg/' . $card3->image) }}" alt="" width="150px"
                            height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">
                            {{ Str::limit($card3->title, 10) }}</p>
                        <p class="text-center" style="font-size: 15px;">{{ Str::limit($card3->short_des, 70) }}</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/requestImg/' . $card4->image) }}" alt="" width="150px"
                            height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">
                            {{ Str::limit($card4->title, 10) }}</p>
                        <p class="text-center" style="font-size: 15px;">{{ Str::limit($card4->short_des, 70) }}</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/requestImg/' . $card5->image) }}" alt="" width="150px"
                            height="150px">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p class="text-center" style="font-size: 20px; margin: 4px 0px;">
                            {{ Str::limit($card5->title, 10) }} </p>
                        <p class="text-center" style="font-size: 15px;">{{ Str::limit($card5->short_des, 70) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->

    <!--======// Gradian Background //======-->
    <section class="my-3">
        <div class="container">
            <div class="call_to_action_text">
                <h4 class="section_title">{{ $solution->row_three_title }}</h4>
                <p>{{ $solution->row_three_header }}</p>
            </div>
        </div>

    </section>
    <!----------End--------->

    <!--=======// Building resilient IT //=====-->
    @if ('row_four')
        <section class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 account_benefits_section">
                        <h3>{{ $row_four->title }}</h3>
                        <p class="text-justify">{!! $row_four->description !!} </p>

                        <button href="{{ $row_four->link }}" class="common_button mt-4">Learn more</button>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <img class="img-fluid rounded"
                            src="https://images.unsplash.com/photo-1509043759401-136742328bb3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80"
                            alt="" width="540px" height="338px">
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-------------End--------->

    <!--======// Solution feature //======-->
    <section class="section_wp">
        <div class="container">
            <!--title-->
            <div class="section_text_wrapper">
                <h3 class="section_title">{{ $solution->row_five_title }}</h3>
                <p class="text-center" >{{ $solution->row_five_header }}</p>
            </div>
            <!--Content Wrapper-->
            <div class="row mt-4">
                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/requestImg/' . $card6->image) }}" alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">{{ $card6->title }}</p>
                        <p>{{ Str::limit($card6->short_des, 30) }}</p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/requestImg/' . $card7->image) }}" alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">{{ $card7->title }}</p>
                        <p>{{ Str::limit($card7->short_des, 30) }}</p>
                    </div>
                </div>

                <!-- item -->
                <div class="col-lg-4 col-sm-12 product_veiw_details_item">
                    <!-- image -->
                    <div class="product_veiw_details_item_image">
                        <img src="{{ asset('storage/requestImg/' . $card8->image) }}" alt="">
                    </div>
                    <!-- content -->
                    <div class="product_veiw_details_item_content">
                        <p style="font-size: 20px; margin: 4px 0px;">{{ $card8->title }}</p>
                        <p>{{ Str::limit($card8->short_des, 30) }}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!----------End--------->

    <!--======// Solution feature //======-->
    <section class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid p-4" src="{{ asset('frontend/images/hardware/solution2.jpg') }}"
                        alt="">
                </div>
                <div class="col-lg-6 col-sm-12 pl-4 section_text_wrapper">
                    <h4>{{ $solution->row_five_title }}</h4>
                    <p>{{ $solution->row_five_header }}</p>

                    <a href="{{ route('shop') }}" class="common_button">Shop now</a>
                </div>
            </div>
        </div>
    </section>
    <!-------------End--------->

    <!--======// Featured content //======-->
    <section class="related_posts_wrapper">
        <div class="container">
            <div class="py-3">
                <h1 class="text-center">Featured content</h1>
            </div>

            <div class="row">
                <!--------item------->
                @if ($solutions)
                    @foreach ($solutions as $item)
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="related-item">
                                <a href="{{ route('solution.details', $item->id) }}">
                                    <img class="img-fluid" src="{{ asset('storage/requestImg/' . $item->banner_image) }}"
                                        width="300px" alt="" style="height: 160px;">
                                    <h4>{{ App\Models\Admin\Industry::where('id', $item->industry_id)->value('title') }}
                                        </h6>
                                        <h3><strong>{{ $item->name }}</strong></h3>
                                </a>

                            </div>
                        </div>
                    @endforeach
                @endif


            </div>

        </div>
    </section>
    <!-------------End--------->

    @php
        $setting = App\Models\Admin\Setting::first();
    @endphp

    <!--=====// Pageform section //=====-->
        @include('frontend.partials.footer_contact')
    <!---------End -------->

@endsection
