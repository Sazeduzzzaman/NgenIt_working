@extends('frontend.master')
@section('content')
    <!--======// Header Title //======-->
    <section class="common_product_header" style="background-image: linear-gradient(
        rgba(0,0,0,0.8),
        rgba(0,0,0,0.8)
        ),url('https://i.pcmag.com/imagery/roundups/02HDufdqeRUDu3tl0NnY2qZ-2..v1649351854.jpg');">
        <div class="container ">
          <h1>Software</h1>
          <p class="text-center text-white">Through our deep partnerships with trusted brands, <br> Insight offers a comprehensive catalog of software for business. </p>
            <div class="row ">
              <!--BUTTON START-->
              <div class="d-flex justify-content-center align-items-center">
                <div class="m-4">
                    <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
                  </div>
                  <div class="m-4">
                    <button class="common_button3" href="#">Shop all Surface devices</button>
                  </div>
              </div>
          </div>
        </div>
      </section>
      <!----------End--------->
    <!--======// Feature tab //======-->
    <section>
        <div class="container mt-5 mb-5">

            <div class="row">
                <!-- first Card -->
                @foreach ($categories as $item)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="iconbox">
                            <div class="iconbox-icon pb-3">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="" width="100px" height="100px" >
                            </div>
                            <div class="featureinfo">
                                <h5 class="text-center">{{ Str::limit($item->title, 15) }} </h5>
                                <div class="text-center">
                                    <div class="buttons_style pt-3">
                                        <div class="container_btn">
                                            <a href="{{route('category.html',$item->slug)}}" class="btns effect01" target="_blank"><span>Go</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!----------End--------->
      <!--======// Nasted tab //======-->
      <div class="section_wp">
        <!--Tab Section-->
        <div class="container mb-5">
          <!-- home title -->
          <div class="nasted_tabbar_title">
            <div class="software_feature_title">
              <h1 class="text-center p-3">Software Category</h1>
            </div>
            <p class="home_title_text">See how we’ve helped organizations of all sizes <span class="font-weight-bold">across every industry</span>
              <br> maximize the value of their IT solutions, leverage emerging technologies and create fresh experiences.
            </p>
          </div>
                      <!-- Tab Area Start -->
                      <div class="row">
                        <div class="row tabbar_wrapper w-75 mx-auto m-0 p-0">
                            <div class="col-lg-3 m-0 p-0" style="margin-left: 10px">
                                <div class="tabbar_header_title">All</div>
                                <div class="data_tabs_button" data-tabs>
                                    <button class="active">Hardware</button>
                                    <button>Hardware</button>
                                    <button>Sidebar3</button>
                                    <button>Sidebar4</button>
                                    <button>Sidebar5</button>
                                    <button>Sidebar5</button>
                                    <!-- <button class="border-0">Sidebar7</button> -->
                                </div>
                            </div>
                            <div class="col-9 data_tabs_content p-0" data-panes>
                                <!--==//Hardware Tab Item //==-->
                                <div class="active">
                                    <!--Sub Button-->
                                    <div class="sub_tabs_button" data-tabs>
                                        <button class="active">Hardware</button>
                                        <button>Freshservice</button>
                                        <button>JIRA</button>
                                    </div>
                                    <div class="sub_tabs_content" data-panes>
                                        <!--Sub Item-->
                                        <div class="active">Best for outsourcing test covereage to speed up Hardware releases
                                        </div>
                                        <!--Sub Item-->
                                        <div>ITSM tool with release management features</div>
                                        <!--Sub Item-->
                                        <div>Plan and manage Hardware releases</div>
                                    </div>
                                </div>
                                <!--==//Hardware Tab Item //==-->
                                <div>
                                    <!--Sub Button-->
                                    <div class="sub_tabs_button" data-tabs>
                                        <button class="active">Hardware</button>
                                        <button>Cable</button>
                                    </div>
                                    <div class="sub_tabs_content" data-panes>
                                        <!--Sub Item-->
                                        <div class="active">APC Replacement Battery Cartridge #2 - UPS battery - lead acid</div>
                                        <!--Sub Item-->
                                        <div class="active">The power cable mainly consists of three main components, namely,
                                            conductor, dielectric, and sheath. The conductor in the cable provides the
                                            conducting path for the current. The insulation or dielectric withstands the service
                                            voltage and isolates the conductor with other objects.</div>
                                    </div>
                                </div>
                                <!--==//Sidebar3 Tab Item //==-->
                                <div>
                                    <!--Sub Button-->
                                    <div class="sub_tabs_button" data-tabs>
                                        <button class="active">Sidebar3</button>
                                        <button>Cable</button>
                                    </div>
                                    <div class="sub_tabs_content" data-panes>
                                        <!--Sub Item-->
                                        <div class="active">APC Replacement Battery Cartridge #2 - UPS battery - lead acid</div>
                                        <!--Sub Item-->
                                        <div class="active">The power cable mainly consists of three main components, namely,
                                            conductor, dielectric, and sheath. The conductor in the cable provides the
                                            conducting path for the current. The insulation or dielectric withstands the service
                                            voltage and isolates the conductor with other objects.</div>
                                    </div>
                                </div>
                                <!--==//Sidebar4 Tab Item //==-->
                                <div>
                                    <!--Sub Button-->
                                    <div class="sub_tabs_button" data-tabs>
                                        <button class="active">Sidebar4</button>
                                        <button>Cable</button>
                                    </div>
                                    <div class="sub_tabs_content" data-panes>
                                        <!--Sub Item-->
                                        <div class="active">APC Replacement Battery Cartridge #2 - UPS battery - lead acid</div>
                                        <!--Sub Item-->
                                        <div class="active">The power cable mainly consists of three main components, namely,
                                            conductor, dielectric, and sheath. The conductor in the cable provides the
                                            conducting path for the current. The insulation or dielectric withstands the service
                                            voltage and isolates the conductor with other objects.</div>
                                    </div>
                                </div>
                                <!--==//Sidebar5 Tab Item //==-->
                                <div>
                                    <!--Sub Button-->
                                    <div class="sub_tabs_button" data-tabs>
                                        <button class="active">Sidebar5</button>
                                        <button>Cable</button>
                                    </div>
                                    <div class="sub_tabs_content" data-panes>
                                        <!--Sub Item-->
                                        <div class="active">APC Replacement Battery Cartridge #2 - UPS battery - lead acid</div>
                                        <!--Sub Item-->
                                        <div class="active">The power cable mainly consists of three main components, namely,
                                            conductor, dielectric, and sheath. The conductor in the cable provides the
                                            conducting path for the current. The insulation or dielectric withstands the service
                                            voltage and isolates the conductor with other objects.</div>
                                    </div>
                                </div>
                                <!--==//Sidebar6 Tab Item //==-->
                                <div>
                                    <!--Sub Button-->
                                    <div class="sub_tabs_button" data-tabs>
                                        <button class="active">Sidebar6</button>
                                        <button>Cable</button>
                                    </div>
                                    <div class="sub_tabs_content" data-panes>
                                        <!--Sub Item-->
                                        <div class="active">APC Replacement Battery Cartridge #2 - UPS battery - lead acid</div>
                                        <!--Sub Item-->
                                        <div class="active">The power cable mainly consists of three main components, namely,
                                            conductor, dielectric, and sheath. The conductor in the cable provides the
                                            conducting path for the current. The insulation or dielectric withstands the service
                                            voltage and isolates the conductor with other objects.</div>
                                    </div>
                                </div>
                                <!--==//Sidebar7 Tab Item //==-->
                                <div>
                                    <!--Sub Button-->
                                    <div class="sub_tabs_button" data-tabs>
                                        <button class="active">Sidebar7</button>
                                        <button>Cable</button>
                                    </div>
                                    <div class="sub_tabs_content" data-panes>
                                        <!--Sub Item-->
                                        <div class="active">APC Replacement Battery Cartridge #2 - UPS battery - lead acid</div>
                                        <!--Sub Item-->
                                        <div class="active">The power cable mainly consists of three main components, namely,
                                            conductor, dielectric, and sheath. The conductor in the cable provides the
                                            conducting path for the current. The insulation or dielectric withstands the service
                                            voltage and isolates the conductor with other objects.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
        </div>
      </div>
      <!--=======// Popular products //======-->
        <section class="popular_product_section section_padding">
            <!-- container -->
            <div class="container">
                <div class="popular_product_section_content">
                    <!-- section title -->
                    <div class="software_feature_title">
                        <h1 class="text-center pb-3">Popular Products</h1>
                    </div>
                    <!-- wrapper -->
                    <div class="populer_product_slider">
                        <!-- product_item -->
                        @foreach ($products as $item)
                            <div class="product_item">
                                <!-- image -->
                                <div class="product_item_thumbnail">
                                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="150px"
                                        height="113px">
                                </div>
                                <!-- product content -->
                                <div class="product_item_content">
                                    <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name"
                                        style="height: 3rem;">{{ Str::limit($item->name, 50) }}</a>
                                    @if ($item->rfq != 1)
                                        <!-- price -->
                                        <div class="product_item_price">
                                            <span class="price_currency">USD</span>
                                            @if (!empty($item->discount))
                                                <span class="price_currency_value"
                                                    style="text-decoration: line-through; color:red">$
                                                    {{ $item->price }}</span>
                                                <span class="price_currency_value" style="color: black">$
                                                    {{ $item->discount }}</span>
                                            @else
                                                <span class="price_currency_value">$ {{ $item->price }}</span>
                                            @endif
                                        </div>
                                        <!-- button --> @php
                                            $cart = Cart::content();
                                            $exist = $cart->where('id', $item->id);
                                            //dd($cart->where('image' , $item->thumbnail )->count());
                                        @endphp
                                        @if ($cart->where('id', $item->id)->count())
                                            {{-- <a href="javascript:void(0);" class="common_button6"> </a> --}}
                                            <span class="common_button6">Already in Cart</span>
                                        @else
                                            <form action="{{ route('add.cart') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" id="product_id"
                                                    value="{{ $item->id }}">
                                                <input type="hidden" name="name" id="name"
                                                    value="{{ $item->name }}">
                                                <input type="hidden" name="qty" id="qty" value="1">
                                                <button type="submit" class="common_button effect01">Add to Basket</button>
                                            </form>
                                        @endif
                                    @else
                                        <div class="product_item_price">
                                            <span class="price_currency_value">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#get_quote_modal_{{ $item->id }}">Ask For Price</a>
                                            </span>
                                        </div>
                                        <a href="{{ route('product.details', $item->slug) }}"
                                            class="common_button effect01">Details</a>
                                    @endif
                                </div>
                            </div>
                            <!-- left modal -->
                            <div class="modal modal_outer fade" id="get_quote_modal_{{ $item->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="myModalLabel2">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">


                                    <div class="modal-content">

                                        <div class="modal-header p-0 m-0 pl-5 pr-3 py-2"
                                            style="background: #ae0a46;color: white;">
                                            <h5 class="modal-title">Get a Quote</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @if (Auth::guard('client')->user())
                                            <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card mx-4">
                                                    <div class="card-body px-4 py-2">
                                                        <div class="row border" style="font-size: 0.8rem;">
                                                            <div class="col-lg-3 pl-2">
                                                                {{ Auth::guard('client')->user()->name }}</div>
                                                            <div class="col-lg-4" style="margin: 5px 0px">
                                                                {{ Auth::guard('client')->user()->email }}</div>
                                                            <div class="col-lg-4" style="margin: 5px 0px">
                                                                {{ Auth::guard('client')->user()->phone }}
                                                                <div class="form-group" id="Rfquser" style="display:none">
                                                                    <input type="text" required="" class="form-control"
                                                                        id="phone" name="phone"
                                                                        value="{{ Auth::guard('client')->user()->phone }}"
                                                                        placeholder="Phone Number" style="font-size: 0.8rem;">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1" style="margin: 5px 0px"><a
                                                                    href="javascript:void(0);" id="editRfquser"><i
                                                                        class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                <input type="hidden" name="client_id"
                                                    value="{{ Auth::guard('client')->user()->id }}">
                                                <input type="hidden" name="client_type" value="client">
                                                <input type="hidden" name="name"
                                                    value="{{ Auth::guard('client')->user()->name }}">
                                                <input type="hidden" name="email"
                                                    value="{{ Auth::guard('client')->user()->email }}">
                                                {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone}}"> --}}
                                                <div class="modal-body get_quote_view_modal_body">


                                                    <div class="form-row">

                                                        <div class="form-group col-sm-4 m-0">

                                                            <input type="text" class="form-control mt-4" id="contact"
                                                                name="company_name"
                                                                value="{{ Auth::guard('client')->user()->company_name }}"
                                                                placeholder="Company Name" style="font-size: 0.7rem;">
                                                        </div>
                                                        <div class="form-group col-sm-4 m-0">

                                                            <input type="number" class="form-control mt-4" id="contact"
                                                                name="qty" placeholder="Quantity"
                                                                style="font-size: 0.7rem;">
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label class="m-0" for="image"
                                                                style="font-size: 0.7rem;">Upload Image</label>
                                                            <input type="file" name="image" class="form-control"
                                                                id="image" accept="image/*" style="font-size: 0.7rem;" />
                                                            <div class="form-text" style="font-size:11px;">Only png, jpg, jpeg
                                                                images</div>

                                                        </div>

                                                        <div class="form-group col-sm-12 border text-white"
                                                            style="background: #7e7d7c">
                                                            <h6 class="text-center pt-1">Product Name : {{ $item->name }}
                                                            </h6>
                                                        </div>

                                                        <div class="form-group col-sm-12">

                                                            <textarea class="form-control" id="message" name="message" rows="1"
                                                                placeholder="Additional Information..."></textarea>
                                                        </div>

                                                        <div class="form-group  col-sm-12 px-3 mx-3">
                                                            <input class="mr-2" type="checkbox" name="call"
                                                                id="call" value="1">
                                                            <label for="call">Also Please Call Me</label>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary col-lg-3"
                                                            id="submit_btn">Submit &nbsp;<i
                                                                class="fa fa-paper-plane"></i></button>
                                                    </div>
                                                </div>

                                            </form>
                                        @elseif (Auth::guard('partner')->user())
                                            <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card mx-4">
                                                    <div class="card-body p-4">
                                                        <div class="row border">
                                                            <div class="col-lg-3 pl-2">Name:
                                                                {{ Auth::guard('partner')->user()->name }}</div>
                                                            <div class="col-lg-4" style="margin: 5px 0px">
                                                                {{ Auth::guard('partner')->user()->primary_email_address }}
                                                            </div>
                                                            <div class="col-lg-4" style="margin: 5px 0px">
                                                                {{ Auth::guard('partner')->user()->company_number }}</div>
                                                            <div class="col-lg-1" style="margin: 5px 0px"><a
                                                                    href="javascript:void(0);" id="editRfqpartner"><i
                                                                        class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                <input type="hidden" name="client_type" value="partner">
                                                <input type="hidden" name="partner_id"
                                                    value="{{ Auth::guard('partner')->user()->id }}">
                                                <input type="hidden" name="name"
                                                    value="{{ Auth::guard('partner')->user()->name }}">
                                                <input type="hidden" name="email"
                                                    value="{{ Auth::guard('partner')->user()->primary_email_address }}">
                                                {{-- <input type="hidden" name="phone" value="{{Auth::guard('client')->user()->phone_number}}"> --}}
                                                <div class="modal-body get_quote_view_modal_body">

                                                    <div class="form-group col-sm-12 border text-white"
                                                        style="background: #7e7d7c">
                                                        <h6 class="text-center pt-1">Product Name : {{ $item->name }}</h6>
                                                    </div>
                                                    <div class="row" id="Rfqpartner" style="display:none">
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" required="" class="form-control"
                                                                id="phone" name="phone"
                                                                value="{{ Auth::guard('partner')->user()->company_number }}"
                                                                placeholder="Company Phone Number">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Company Name </label>
                                                            <input type="text" class="form-control" id="contact"
                                                                name="company_name" required
                                                                value="{{ Auth::guard('partner')->user()->company_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group  col-sm-6">

                                                            <input type="number" class="form-control" id="contact"
                                                                name="qty" placeholder="Quantity">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Upload Image </label>
                                                            <input type="file" name="image" class="form-control"
                                                                id="image" accept="image/*" />
                                                            <div class="form-text" style="font-size:11px;">Accepts only png,
                                                                jpg, jpeg images</div>
                                                        </div>

                                                        <div class="form-group  col-sm-12">
                                                            <textarea class="form-control" id="message" name="message" rows="1" placeholder="Additional Text.."></textarea>
                                                        </div>

                                                        <div class="form-group  col-sm-12 px-3 mx-3">
                                                            <input class="mr-2" type="checkbox" name="call"
                                                                id="call" value="1">
                                                            <label for="call">Also Please Call Me</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-light col-lg-3 mr-auto"
                                                            data-dismiss="modal"><i class="fas fa-window-close mr-2"></i>
                                                            Cancel</button>
                                                        <button type="submit" class="btn btn-primary col-lg-3"
                                                            id="submit_btn">Submit &nbsp;<i
                                                                class="fa fa-paper-plane"></i></button>
                                                    </div>
                                                </div>

                                            </form>
                                        @else
                                            <form action="{{ route('rfq.add') }}" method="post" id="get_quote_frm"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                {{-- <input type="hidden" name="client_type" value="random"> --}}
                                                <div class="modal-body get_quote_view_modal_body">
                                                    <div class="form-row">
                                                        <div class="form-group col-sm-12 border text-white"
                                                            style="background: #7e7d7c">
                                                            <h6 class="text-center pt-1">Product Name : {{ $item->name }}
                                                            </h6>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="name">Name <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" required=""
                                                                id="name" name="name">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <label for="email">Email <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="email" required="" class="form-control"
                                                                id="email" name="email">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Mobile Number <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="text" required="" class="form-control"
                                                                id="phone" name="phone">
                                                        </div>

                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Company Name </label>
                                                            <input type="text" class="form-control" id="contact"
                                                                name="company_name">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Quantity </label>
                                                            <input type="number" class="form-control" id="contact"
                                                                name="qty">
                                                        </div>
                                                        <div class="form-group  col-sm-6">
                                                            <label for="contact">Custom Image </label>
                                                            <input type="file" name="image" class="form-control"
                                                                id="image" accept="image/*" />
                                                            <div class="form-text" style="font-size:11px;">Accepts only png,
                                                                jpg, jpeg images</div>
                                                        </div>

                                                        <div class="form-group  col-sm-12">
                                                            <label for="message">Type Message</label>
                                                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                                        </div>

                                                        <div class="form-group  col-sm-12 px-3 mx-3">
                                                            <input class="mr-2" type="checkbox" name="call"
                                                                id="call" value="1">
                                                            <label for="call">Also Please Call Me</label>

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-light col-lg-3 mr-auto"
                                                            data-dismiss="modal"><i class="fas fa-window-close mr-2"></i>
                                                            Cancel</button>
                                                        <button type="submit" class="btn btn-primary col-lg-3"
                                                            id="submit_btn">Submit &nbsp;<i
                                                                class="fa fa-paper-plane"></i></button>
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
      <!--======// Our expert //======-->
      <section class="container mt-3 mb-5">
        <div class="software_feature_title pb-5">
          <h1 class="text-center ">Our Expertise</h1>
        </div>
        <div class="row d-flex justify-content-start align-items-center">
          <div class="col-lg-6 col-sm-6">
            <iframe allow="autoplay; fullscreen; picture-in-picture; camera; microphone; display-capture" allowfullscreen="" allowtransparency="true" referrerpolicy="no-referrer-when-downgrade" class="vidyard-iframe-W5NGDbKxgaZQQsSm1eaazn" frameborder="0" height="100%" width="100%" scrolling="no" src="https://play.vidyard.com/W5NGDbKxgaZQQsSm1eaazn?disable_popouts=1&amp;v=4.3.10&amp;type=inline" title="Be Ambitious" style="opacity: 1; background-color: transparent; height: 300px; max-width: 100%;"></iframe>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="home_title">
              <h5 class="home_title_heading" style="text-align: left;"> Areas of expertise </h5>
              <p class="home_title_text" style="text-align: left;">We’ll help you navigate today’s ever-changing business environment with teams of technical experts and decades of industry experience.</p>
              <div class="business_seftion_button">
                <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!---------End -------->
      <!--======// our clint tab //======-->
      <section class="clint_tab_section">
        <div class="container">
          <div class="clint_tab_content pb-3">
            <!-- home title -->
            <div class="home_title mt-3">
              <div class="software_feature_title">
                <h1 class="text-center ">Brand Product</h1>
              </div>
              <p class="home_title_text">See how we’ve helped organizations of all sizes <span class="font-weight-bold">across every industry</span>
                <br> maximize the value of their IT solutions, leverage emerging technologies and create fresh experiences.
              </p>
            </div>
            <!-- Client Tab Start -->
            <div class="row">
              <div class="col-xs-12 ">
                <nav>
                  <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-healthcare" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Healthcare</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">HIGHER EDUCATION</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">MINING</a>
                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">ENERGY</a>
                  </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-healthcare">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="tab_side_image p-5">
                          <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-6 col-sm-12">
                        <h5 class="home_title_heading" style="text-align: left;">Healthcare </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil voluptatem error omnis facere beatae exercitationem, itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.</p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="tab_side_image p-5">
                            <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                          <h5 class="home_title_heading" style="text-align: left;">Healthcare </h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil voluptatem error omnis facere beatae exercitationem, itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.</p>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="tab_side_image p-5">
                            <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                          <h5 class="home_title_heading" style="text-align: left;">Healthcare </h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil voluptatem error omnis facere beatae exercitationem, itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.</p>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="tab_side_image p-5">
                            <img src="https://images.unsplash.com/photo-1547082299-de196ea013d6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                          </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                          <h5 class="home_title_heading" style="text-align: left;">Healthcare </h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil voluptatem error omnis facere beatae exercitationem, itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.itaque repudiandae placeat modi velit sit accusantium unde iure at! Ipsam fugit soluta similique quasi.</p>
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
          <div class="global_call_section_content">
            <div class="home_title" style="width: 100%; margin: 0px;">
              <h5 class="home_title_heading" style="text-align: left; color: #fff;">
                <span>O</span>ur areas of expertise
              </h5>
              <p class="home_title_text text-white" style="text-align: left;">Turn ideas into powerful business outcomes quickly and smoothly. Our solution architects and technical experts are ready to help you achieve more with our Insight Intelligent Technology™ portfolio.</p>
              <div class="business_seftion_button" style="text-align: left;">
                <a href="#">Explore business outcomes</a>
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
              <span class="font-weight-bold">We offer breadth and depth </span> combining deep industry expertise and technical skills <br> to connect you to the right IT solutions. With one strategic partner, you’ll get guidance at any stage of your IT transformation journey.
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
