@extends('frontend.master')
@section('content')

        <!--======// Banner Section //======-->
 <section class="banner_section">
    <!-- slider -->
    <div class="banner_slider">
      <!-- slider -->
      <div class="slider_inage">
        <img src="{{ asset('storage/requestImg/' . $home->branner1) }}" alt="">
      </div>
      <!-- slider -->
      <div class="slider_inage">
        <img src="{{ asset('storage/requestImg/' . $home->branner1) }}" alt="">
      </div>
      <!-- slider -->
      <div class="slider_inage">
        <img src="{{ asset('storage/requestImg/' . $home->branner1) }}" alt="">
      </div>
      <!-- slider -->
      <div class="slider_inage">
        <img src="{{ asset('storage/requestImg/' . $home->branner1) }}" alt="">
      </div>
    </div>
  </section>
  <!-- banner start end-->
  <!--======// Home Cart Section //======-->
  <section class="home_card_wrapper">
    <div class="container">
      <!-- wrapper --> @if ($home) <div class="row m-0">
        <!-- home card item -->
        <div class="col-lg-6 col-sm-12">
          <div class="home_card_item">
            <h5 class="home_card_item_title">{{$home->btn1_title}}</h5>
            <div class="home_card_button">
              <a class="effect01" href="{{route('learn.more')}}">{{$home->btn1_name}}</a>
            </div>
            <!-- button -->
          </div>
        </div>
        <!-- home card item -->
        <div class="col-lg-6 col-sm-12">
          <div class="home_card_item">
            <h5 class="home_card_item_title">{{$home->btn2_title}}</h5>
            <div class="home_card_button">
              <a class="effect01" href="{{$home->btn2_link}}">{{$home->btn2_name}}</a>
            </div>
            <!-- button -->
          </div>
        </div>
      </div> @endif
    </div>
  </section>
  <!-- home card end -->
  <!--======// Business section //======-->
  <section class="container padding_bottom pt-56 pb-3">
    <!-- home title -->
    <div class="home_title p-3">
      <h5 class="home_title_heading">
        <Span>T</Span>op businesses across industries have trusted <br> Ngen It to achieve their ambitious business goals.
      </h5>
      <p class="home_title_text">Our technical expertise, broad solutions portfolio and supply chain capabilities <br> give us the right resources and scale to achieve more for you. </p>
    </div>
    <!-- business content -->
    <div class="business_content_wrapper">
      <!-- business item wrapper --> @if ($home) <div class="row solution_business_item p-3">
        <!-- item -->
        <div class="col-lg-2 col-sm-5 m-2 mx-auto">
          <!-- image -->
          <div class="business_item_icon">
            <img src="{{ asset('storage/requestImg/' . $feature1->logo) }}" alt="">
          </div>
          <!-- content -->
          <div class="business_item_content">
            <p class="business_item_title">{{$feature1->badge}}</p>
            <p class="business_item_text">{{ Str::limit($feature1->header, 70) }}</p>
            <a href="{{route('feature.details',$feature1->id)}}" class="business_item_button">
              <span>Learn More</span>
              <span class="business_item_button_icon">
                <i class="fa-solid fa-arrow-right-long"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-2 col-sm-5 m-2 mx-auto">
          <!-- image -->
          <div class="business_item_icon">
            <img src="{{ asset('storage/requestImg/' . $feature2->logo) }}" alt="">
          </div>
          <!-- content -->
          <div class="business_item_content">
            <p class="business_item_title">{{Str::limit($feature2->badge,10)}}</p>
            <p class="business_item_text">{{ Str::limit($feature2->header, 70) }}</p>
            <a href="{{route('feature.details',$feature2->id)}}" class="business_item_button">
              <span>Learn More</span>
              <span class="business_item_button_icon">
                <i class="fa-solid fa-arrow-right-long"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-2 col-sm-5 m-2 mx-auto">
          <!-- image -->
          <div class="business_item_icon">
            <img src="{{ asset('storage/requestImg/' . $feature5->logo) }}" alt="">
          </div>
          <!-- content -->
          <div class="business_item_content">
            <p class="business_item_title">{{$feature5->badge}}</p>
            <p class="business_item_text">{{ Str::limit($feature5->header, 70) }}</p>
            <a href="{{route('feature.details',$feature5->id)}}" class="business_item_button">
              <span>Learn More</span>
              <span class="business_item_button_icon">
                <i class="fa-solid fa-arrow-right-long"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-2 col-sm-5 m-2 mx-auto">
          <!-- image -->
          <div class="business_item_icon">
            <img src="{{ asset('storage/requestImg/' . $feature3->logo) }}" alt="">
          </div>
          <!-- content -->
          <div class="business_item_content">
            <p class="business_item_title">{{$feature3->badge}}</p>
            <p class="business_item_text">{{ Str::limit($feature3->header, 70) }}</p>
            <a href="{{route('feature.details',$feature3->id)}}" class="business_item_button">
              <span>Learn More</span>
              <span class="business_item_button_icon">
                <i class="fa-solid fa-arrow-right-long"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-2 col-sm-5 m-2 mx-auto">
          <!-- image -->
          <div class="business_item_icon">
            <img src="{{ asset('storage/requestImg/' . $feature4->logo) }}" alt="">
          </div>
          <!-- content -->
          <div class="business_item_content">
            <p class="business_item_title">{{$feature4->badge}}</p>
            <p class="business_item_text">{{ Str::limit($feature4->header, 70) }}</p>
            <a href="{{route('feature.details',$feature4->id)}}" class="business_item_button">
              <span>Learn More</span>
              <span class="business_item_button_icon">
                <i class="fa-solid fa-arrow-right-long"></i>
              </span>
            </a>
          </div>
        </div>
      </div> @endif
    </div>
    <!-- button -->
    <div class="business_seftion_button pb-3">
      <a class="effect01" href="solution_common.html">Explore all of what we do</a>
    </div>
  </section>
  <!---------End -------->
  <!--=======// Shop product //======-->
  <section class="padding_top learn_more">
    <div class="container">
      <div class="row">
        <!-- content -->
        <div class="col-lg-6 col-sm-12 pb-3">
          <div class="home_shop_product_wrapper">
            <h5> Shop products and hardware</h5>
            <p class="text-justify">Among More than {{ App\Models\Admin\Product::count() }} products and {{ App\Models\Admin\Brand::count() }} brand at your service, we can provide you with the tools you need to succeed. Additionally, you may easily control anything from your NgenIt account.</p>
            <div class="d-flex justify-content-start">
              <a href="{{  route('shop.html') }}" class="common_button effect01">Shop Now</a>
            </div>
          </div>
        </div>
        <!-- product brand -->
        <div class="col-lg-6 col-sm-12">
          <ul class="shop_product_brand_list">
            <li>
              <a href="{{ route('all.category') }}">Product categories</a>
            </li>
            <li>
              <a href="{{ route('all.brand') }}">Brands</a>
            </li>
            <li>
              <a href="{{ route('tech.deals') }}">Tech deals</a>
            </li>
            <li>
              <a href="{{ route('refurbished') }}">Refurbished</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--=======// Popular products //======-->
  <section class="popular_product_section section_padding">
    <!-- container -->
    <div class="container">
      <div class="popular_product_section_content">
        <!-- section title -->
        <div class="software_feature_title">
          <h1 class="text-center pb-3">Popular products</h1>
        </div>
        <!-- wrapper -->
        <div class="populer_product_slider">
          <!-- product_item -->
          @foreach ($products as $item) <div class="product_item">
                <!-- image -->
                <div class="product_item_thumbnail">
                <img src="{{ asset($item->thumbnail)}}" alt="{{$item->name}}" width="150px" height="113px">
                </div>
                <!-- product content -->
                <div class="product_item_content">
                <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name" style="height: 3rem;">{{Str::limit($item->name,50)}}</a> @if (($item->rfq) != 1)
                <!-- price -->
                <div class="product_item_price">
                    <span class="price_currency">USD</span> @if (!empty($item->discount)) <span class="price_currency_value" style="text-decoration: line-through; color:red">$ {{ $item->price }}</span>
                    <span class="price_currency_value" style="color: black">$ {{ $item->discount }}</span> @else <span class="price_currency_value">$ {{ $item->price }}</span> @endif
                </div>
                <!-- button --> @php
                                    $cart = Cart::content(); $exist = $cart->where('id' , $item->id );
                                    //dd($cart->where('image' , $item->thumbnail )->count());
                                @endphp
                @if ($cart->where('id' , $item->id )->count())
                {{-- <a href="javascript:void(0);" class="common_button6"> </a> --}}
                <span class="common_button6">Already in Cart</span>
                @else
                <form action="{{route('add.cart')}}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" id="product_id" value="{{ $item->id }}">
                    <input type="hidden" name="name" id="name" value="{{ $item->name }}">
                    <input type="hidden" name="qty" id="qty" value="1">
                    <button type="submit" class="common_button effect01">Add to Basket</button>
                </form> @endif @else <div class="product_item_price">
                    <span class="price_currency_value">
                        <a data-toggle="modal"  data-target="#get_quote_modal-{{$item->id}}">Ask For Price</a>
                    </span>
                </div>
                <a href="{{ route('product.details', $item->slug) }}" class="common_button effect01">Details</a> @endif
                </div>
            </div>
            <!-- left modal -->
                <div class="modal modal_outer fade" id="get_quote_modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">


                        <div class="modal-content">

                            <div class="modal-header p-0 m-0 pl-5 pr-3 py-2" style="background: #ae0a46;color: white;">
                            <h5 class="modal-title">Get a Quote</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            @if (Auth::guard('client')->user())
                                <form action="{{route('rfq.add')}}" method="post" id="get_quote_frm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card mx-4">
                                        <div class="card-body px-4 py-2">
                                            <div class="row border" style="font-size: 0.8rem;">
                                                <div class="col-lg-3 pl-2">{{Auth::guard('client')->user()->name}}</div>
                                                <div class="col-lg-4" style="margin: 5px 0px">{{Auth::guard('client')->user()->email}}</div>
                                                <div class="col-lg-4" style="margin: 5px 0px">
                                                    {{Auth::guard('client')->user()->phone}}
                                                    <div class="form-group" id="Rfquser" style="display:none">
                                                        <input type="text" required="" class="form-control" id="phone" name="phone" value="{{Auth::guard('client')->user()->phone}}" placeholder="Phone Number" style="font-size: 0.8rem;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-1" style="margin: 5px 0px"><a href="javascript:void(0);" id="editRfquser"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" name="product_id" value="{{$item->id}}">
                                    <input type="hidden" name="client_id" value="{{Auth::guard('client')->user()->id}}">
                                    <input type="hidden" name="client_type" value="client">
                                    <input type="hidden" name="name" value="{{Auth::guard('client')->user()->name}}">
                                    <input type="hidden" name="email" value="{{Auth::guard('client')->user()->email}}">
                                    {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone}}"> --}}
                                    <div class="modal-body get_quote_view_modal_body">


                                        <div class="form-row">

                                            <div class="form-group col-sm-4 m-0">

                                                <input type="text" class="form-control mt-4" id="contact" name="company_name" value="{{Auth::guard('client')->user()->company_name}}" placeholder="Company Name" style="font-size: 0.7rem;">
                                            </div>
                                            <div class="form-group col-sm-4 m-0">

                                                <input type="number" class="form-control mt-4" id="contact" name="qty" placeholder="Quantity" style="font-size: 0.7rem;">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label class="m-0" for="image" style="font-size: 0.7rem;">Upload Image</label>
                                                <input type="file" name="image" class="form-control" id="image" accept="image/*" style="font-size: 0.7rem;"/>
                                                <div class="form-text" style="font-size:11px;">Only png, jpg, jpeg images</div>

                                            </div>

                                            <div class="form-group col-sm-12 border text-white" style="background: #7e7d7c">
                                                    <h6 class="text-center pt-1">Product Name : {{$item->name}}</h6>
                                            </div>

                                            <div class="form-group col-sm-12">

                                                <textarea class="form-control" id="message" name="message" rows="1" placeholder="Additional Information..."></textarea>
                                            </div>

                                            <div class="form-group  col-sm-12 px-3 mx-3">
                                                <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                                <label for="call">Also Please Call Me</label>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </div>

                                </form>
                            @elseif (Auth::guard('partner')->user())
                                <form action="{{route('rfq.add')}}" method="post" id="get_quote_frm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card mx-4">
                                        <div class="card-body p-4">
                                            <div class="row border">
                                                <div class="col-lg-3 pl-2">Name: {{Auth::guard('partner')->user()->name}}</div>
                                                <div class="col-lg-4" style="margin: 5px 0px">{{Auth::guard('partner')->user()->primary_email_address}}</div>
                                                <div class="col-lg-4" style="margin: 5px 0px">{{Auth::guard('partner')->user()->company_number}}</div>
                                                <div class="col-lg-1" style="margin: 5px 0px"><a href="javascript:void(0);" id="editRfqpartner"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="product_id" value="{{$item->id}}">
                                    <input type="hidden" name="client_type" value="partner">
                                    <input type="hidden" name="partner_id" value="{{Auth::guard('partner')->user()->id}}">
                                    <input type="hidden" name="name" value="{{Auth::guard('partner')->user()->name}}">
                                    <input type="hidden" name="email" value="{{Auth::guard('partner')->user()->primary_email_address}}">
                                    {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone_number}}"> --}}
                                    <div class="modal-body get_quote_view_modal_body">

                                        <div class="form-group col-sm-12 border text-white" style="background: #7e7d7c">
                                            <h6 class="text-center pt-1">Product Name : {{$item->name}}</h6>
                                        </div>
                                        <div class="row" id="Rfqpartner" style="display:none">
                                            <div class="form-group col-sm-6">
                                                <input type="text" required="" class="form-control" id="phone" name="phone" value="{{Auth::guard('partner')->user()->company_number}}" placeholder="Company Phone Number">
                                            </div>
                                            <div class="form-group  col-sm-6">
                                                <label for="contact">Company Name </label>
                                                <input type="text" class="form-control" id="contact" name="company_name" required value="{{Auth::guard('partner')->user()->company_name}}">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group  col-sm-6">

                                                <input type="number" class="form-control" id="contact" name="qty" placeholder="Quantity">
                                            </div>
                                            <div class="form-group  col-sm-6">
                                                <label for="contact">Upload Image </label>
                                                <input type="file" name="image" class="form-control" id="image" accept="image/*" />
                                                <div class="form-text" style="font-size:11px;">Accepts only png, jpg, jpeg images</div>
                                            </div>

                                            <div class="form-group  col-sm-12">
                                                <textarea class="form-control" id="message" name="message" rows="1" placeholder="Additional Text.."></textarea>
                                            </div>

                                            <div class="form-group  col-sm-12 px-3 mx-3">
                                                <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                                <label for="call">Also Please Call Me</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-light col-lg-3 mr-auto" data-dismiss="modal"><i class="fas fa-window-close mr-2"></i> Cancel</button>
                                            <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </div>

                                </form>
                            @else
                                <form action="{{route('rfq.add')}}" method="post" id="get_quote_frm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$item->id}}">
                                    {{-- <input type="hidden" name="client_type" value="random"> --}}
                                    <div class="modal-body get_quote_view_modal_body">
                                        <div class="form-row">
                                            <div class="form-group col-sm-12 border text-white" style="background: #7e7d7c">
                                                <h6 class="text-center pt-1">Product Name : {{$item->name}}</h6>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <label for="name">Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" required="" id="name" name="name">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="email">Email <span class="text-danger">*</span></label>
                                                <input type="email" required="" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group  col-sm-6">
                                                <label for="contact">Mobile Number <span class="text-danger">*</span></label>
                                                <input type="text" required="" class="form-control" id="phone" name="phone">
                                            </div>

                                            <div class="form-group  col-sm-6">
                                                <label for="contact">Company Name </label>
                                                <input type="text" class="form-control" id="contact" name="company_name">
                                            </div>
                                            <div class="form-group  col-sm-6">
                                                <label for="contact">Quantity </label>
                                                <input type="number" class="form-control" id="contact" name="qty">
                                            </div>
                                            <div class="form-group  col-sm-6">
                                                <label for="contact">Custom Image </label>
                                                <input type="file" name="image" class="form-control" id="image" accept="image/*" />
                                                <div class="form-text" style="font-size:11px;">Accepts only png, jpg, jpeg images</div>
                                            </div>

                                            <div class="form-group  col-sm-12">
                                                <label for="message">Type Message</label>
                                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                            </div>

                                            <div class="form-group  col-sm-12 px-3 mx-3">
                                                <input class="mr-2" type="checkbox" name="call" id="call" value="1">
                                                <label for="call">Also Please Call Me</label>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-light col-lg-3 mr-auto" data-dismiss="modal"><i class="fas fa-window-close mr-2"></i> Cancel</button>
                                            <button type="submit" class="btn btn-primary col-lg-3" id="submit_btn">Submit &nbsp;<i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </div>

                                </form>
                            @endif

                        </div><!-- //modal-content -->

                    </div><!-- modal-dialog -->
                </div>
            <!-- modal -->
          @endforeach
          <!-- product item -->
        </div>
      </div>
    </div>
  </section>
  <!---------End -------->
  <!--======// Learn clint history //======-->
  <section class="account_benefits_section_wp">
    <div class="container">
      <!-- title -->
      <div class="section_title">
        <h3 class="title_top_heading">Learn more in our client stories.</h3>
      </div> @if ($home) <div class="row">
        <!--------item------->
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="client_stories_item">
            <a href="{{route('story.details',$story1->id)}}">
              <img class="" src="{{ asset('storage/' . $story1->image) }}" alt="{{$story1->badge}}" width="280px" height="160px">
              <h6 class="mt-4">{{$story1->badge}}</h6>
              <h3>
                <strong>{{Str::limit($story1->title,65)}}</strong>
              </h3>
            </a>
          </div>
        </div>
        <!--------item------->
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="client_stories_item">
            <a href="{{route('story.details',$story2->id)}}">
              <img class="" src="{{ asset('storage/' . $story2->image) }}" alt="{{$story2->badge}}" width="280px" height="160px">
              <h6 class="mt-4">{{$story2->badge}}</h6>
              <h3>
                <strong>{{Str::limit($story2->title,65)}}</strong>
              </h3>
            </a>
          </div>
        </div>
        <!--------item------->
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="client_stories_item">
            <a href="{{route('story.details',$story3->id)}}">
              <img class="" src="{{ asset('storage/' . $story3->image) }}" alt="{{$story3->badge}}" width="280px" height="160px">
              <h6 class="mt-4">{{$story3->badge}}</h6>
              <h3>
                <strong>{{Str::limit($story3->title,65)}}</strong>
              </h3>
            </a>
          </div>
        </div>
        <!--------item------->
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="client_stories_item">
            <a href="{{route('story.details',$story4->id)}}">
              <img class="" src="{{ asset('storage/' . $story4->image) }}" alt="{{$story4->badge}}" width="280px" height="160px">
              <h6 class="mt-4">{{$story4->badge}}</h6>
              <h3>
                <strong>{{Str::limit($story4->title,65)}}</strong>
              </h3>
            </a>
          </div>
        </div>
      </div> @endif
      <!-- button -->
      <div class="learn_clint_history_btn">
        <a href="{{route('all.story')}}">See all client stories</a>
      </div>
    </div>
  </section>
  <!---------End -------->
  <!--======// Magazine Section //======-->
  <section class="account_benefits_section_wp">
    <div class="container"> @if ($home) <div class="row">
        <div class="col-lg-6 col-sm-12">
          <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}" alt="{{$techglossy->badge}}">
        </div>
        <div class="col-lg-6 col-sm-12 account_benefits_section">
          <h3 style="font-size:25px">Tech Journal</h3>
          <h5 style="font-size:18px;">{{$techglossy->badge}}</h5>
          <p>{{$techglossy->title}}</p>
          <ul> @php $tag = $techglossy->tags; $tags = explode(',', $tag); @endphp @foreach ($tags as $item) <li>{{ ucwords($item) }}</li> @endforeach </ul>
          <button href="{{route('techglossy.details',$techglossy->id)}}" class="common_button2 effect01">Read the Journal</button>
        </div>
      </div> @endif </div>
  </section>
  <br>
  <!----------End--------->
  <!--======// our success section //======-->
  <section class="container">
    <div class="our_success_wrapper">
      <!-- title -->
      <div class="section_title">
        <h3 class="title_top_heading">Our success starts with our culture.</h3>
      </div>
      <!-- wrapper --> @if ($home) <div class="row">
        <!-- item --> @if ($success1) <div class="col-lg-4 col-sm-12">
          <div class="our_success_item">
            <p class="our_success_item_title">{{$success1->title}}</p>
            <div class="our_success_item_body">
              {{$success1->description}}
            </div>
          </div>
        </div> @endif
        <!-- item --> @if ($success2) <div class="col-lg-4 col-sm-12">
          <div class="our_success_item">
            <p class="our_success_item_title our_success_item_title2">{{$success2->title}}</p>
            <div class="our_success_item_body">
              {{$success2->description}}
            </div>
          </div>
        </div> @endif
        <!-- item --> @if ($success3) <div class="col-lg-4 col-sm-12">
          <div class="our_success_item">
            <p class="our_success_item_title our_success_item_title3">{{$success3->title}}</p>
            <div class="our_success_item_body">
              {{$success3->description}}
            </div>
          </div>
        </div> @endif
      </div> @endif
    </div>
  </section>
@endsection


