@extends('frontend.master')
@section('content')

    <style>
        .accordion-button:focus {
            z-index: 3;
            border-color: none;
            outline: 0;
            box-shadow: none;
        }

        .accordion-button {
            padding: 10px !important;
        }

        .accordion-button:not(.collapsed) {
            color: black !important;
            background-color: none !important;
        }

        .accordion-button:not(.collapsed) {
            color: black !important;
            background-color: transparent !important;
            box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
        }
        .small_dropdown{
            padding-left: 10px !important;
        }
    </style>
    <!--======// Header Title //======-->

    <section class="header_title_product_filter">
        <h1>Explore Products in Our Shop</h1>
    </section>
    <!-------- End--------->
    {{-- New Filter Section Start --}}
    <div class="container">
        <div class="row mt-3 mb-5">
            <aside class="col-md-3">
                <div class="card">
                    <!-- filter-group  .// -->
                    <article class="filter-group">
                        <header class="product-header">
                            <a href="#" data-toggle="collapse" data-target="#key" aria-expanded="true" class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="area_title">Key Word Search</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="key">
                            <div class="card-body">
                                <form class="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" />
                                        <div class="input-group-append">
                                            <button class="btn product_btn" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- card-body.// -->
                        </div>
                    </article>
                    <!-- filter-group  .// -->
                    <article class="filter-group">
                        <header class="product-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true"
                                class="">
                                {{-- <i class="icon-control fa fa-chevron-down"></i> --}}
                                <h6 class="area_title">System / Types</h6>
                            </a>
                        </header>

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                @foreach ($categories as $key=>$item)
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse{{$item->id}}" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            {{$item->title}}
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{$item->id}}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body p-1 ps-3 pl-3">
                                            {{-- Body --}}

                                            <div class="accordion accordion-flush" id="accordionFlushExample_test">
                                                <div class="accordion-item">
                                                    @php
                                                        $sub_categorys = App\Models\Admin\Category::getSubcatByCat($item->id);
                                                    @endphp
                                                    @foreach ($sub_categorys as $item)
                                                        {{-- @php
                                                            dd($item);
                                                        @endphp --}}
                                                        <h2 class="accordion-header" id="flush-headingOne_test">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne_test"
                                                                aria-expanded="false" aria-controls="flush-collapseOne_test">
                                                                {{$item->title}}
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseOne_test" class="accordion-collapse collapse"
                                                            aria-labelledby="flush-headingOne_test"
                                                            data-bs-parent="#accordionFlushExample_test">
                                                            <div class="accordion-body p-1 ps-3 pl-3">
                                                                {{-- Body --}}

                                                                <div class="accordion accordion-flush" id="inner_sub-2">
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header" id="flush-headingOne_test-2">
                                                                            <button class="accordion-button collapsed" type="button"
                                                                                data-bs-toggle="collapse" data-bs-target="#flush-sub-2"
                                                                                aria-expanded="false" aria-controls="flush-sub-2">
                                                                                Sub Sub Categories
                                                                            </button>
                                                                        </h2>
                                                                        <div id="flush-sub-2" class="accordion-collapse collapse"
                                                                            aria-labelledby="flush-headingOne_test-2"
                                                                            data-bs-parent="#inner_sub-2">
                                                                            <div class="accordion-body p-1 ps-4 pl-4">
                                                                                {{-- Body --}}
                                                                                <div class="accordion accordion-flush" id="inner_sub-3">
                                                                                    <div class="accordion-item">
                                                                                        <h2 class="accordion-header" id="flush-headingOne_test-3">
                                                                                            <button class="accordion-button collapsed" type="button"
                                                                                                data-bs-toggle="collapse" data-bs-target="#flush-sub-3"
                                                                                                aria-expanded="false" aria-controls="flush-sub-3">
                                                                                                Sub Sub Sub Categories
                                                                                            </button>
                                                                                        </h2>
                                                                                        <div id="flush-sub-3" class="accordion-collapse collapse"
                                                                                            aria-labelledby="flush-headingOne_test-3"
                                                                                            data-bs-parent="#inner_sub-3">
                                                                                            <div class="accordion-body p-1 ps-5 pl-5">
                                                                                                {{-- Body --}}



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
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </article>

                    <!-- filter-group  .// -->
                    <article class="filter-group">
                        <header class="card-header product-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true"
                                class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="area_title">Manufacturers</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_2">
                            <form action="">
                                <div class="px-4 py-2 d-flex flex-column">
                                    <label class="custom-control custom-checkbox d-flex">
                                        <input type="checkbox" checked="" class="custom-control-input"
                                            style="margin-right: 10px;" />
                                        <div class="custom-control-label">
                                            Mercedes
                                            <b class="badge bg-black ml-2 badge-pill badge-light float-right">120</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox d-flex">
                                        <input type="checkbox" checked="" class="custom-control-input"
                                            style="margin-right: 10px;" />
                                        <div class="custom-control-label">
                                            Toyota
                                            <b class="badge bg-black ml-2 badge-pill badge-light float-right">15</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox d-flex">
                                        <input type="checkbox" checked="" class="custom-control-input"
                                            style="margin-right: 10px;" />
                                        <div class="custom-control-label">
                                            Mitsubishi
                                            <b class="badge bg-black ml-2 badge-pill badge-light float-right">35</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox d-flex">
                                        <input type="checkbox" checked="" class="custom-control-input"
                                            style="margin-right: 10px;" />
                                        <div class="custom-control-label">
                                            Nissan
                                            <b class="badge bg-black ml-2 badge-pill badge-light float-right">89</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox d-flex">
                                        <input type="checkbox" class="custom-control-input"
                                            style="margin-right: 10px;" />
                                        <div class="custom-control-label">
                                            Honda
                                            <b class="badge bg-black ml-2 badge-pill badge-light float-right">30</b>
                                        </div>
                                    </label>
                                </div>
                            </form>
                            <!-- card-body.// -->
                        </div>
                    </article>

                    <!-- filter-group .// -->
                    <article class="filter-group">
                        <header class="card-header product-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true"
                                class="">
                                <i class="icon-control fa fa-chevron-down"></i>
                                <h6 class="area_title">Price range</h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse_3">
                            <div class="product_list_price ">
                                <div id="slider-range"
                                    class="price-filter-range w-75 mt-2 mx-auto text-success ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="0" data-max="20000" style="margin-bottom:0.7rem; ">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"
                                        style="left: 0%; width: 100%;background-color: #929497 !important;">
                                    </div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                        style="left: 0%;border-radius: 30px !important;"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                        style="left: 100%;border-radius: 30px !important;"></span>
                                </div>
                                <div class="w-75 mt-2 mx-auto">
                                    <input type="hidden" id="price_range" name="price_range" value="">
                                    <input class="form-control mb-2" type="text" id="amount"
                                        value="USD $0 - $20000" readonly="">
                                </div>
                            </div>
                            {{-- <div class="card-body">
                <input
                  type="range"
                  class="custom-range"
                  min="0"
                  max="100"
                  name=""
                />
                <div class="d-flex">
                    <div class="form-group col-md-6">
                      <label>Min</label>
                      <input
                        class="form-control"
                        placeholder="$0"
                        type="number"
                      />
                    </div>
                    <div class="form-group text-right col-md-6 pr-2" style="margin-left: 5px;">
                      <label>Max</label>
                      <input
                        class="form-control"
                        placeholder="$1,0000"
                        type="number"
                      />
                    </div>
                </div>
                <!-- form-row.// -->
                <div class=" pt-2">
                  <button type="button" class="btn btn-block product_price_btn">Block level button</button>
                </div>
              </div> --}}
                            <!-- card-body.// -->
                        </div>
                    </article>

                    <!-- filter-group .// -->
                    <article class="filter-group">
                        {{-- <header class="card-header product-header">
              <a
                href="#"
                data-toggle="collapse"
                data-target="#collapse_4"
                aria-expanded="true"
                class=""
              >
                <i class="icon-control fa fa-chevron-down"></i>
                <h6 class="area_title">Sizes</h6>
              </a>
            </header> --}}
                        {{-- <div
              class="filter-content collapse show"
              id="collapse_4"
            > --}}
                        {{-- <div class="card-body d-flex flex-column">
                <label class="checkbox-btn">
                  <input type="checkbox" />
                  <span class="btn btn-light"> XS </span>
                </label>

                <label class="checkbox-btn pt-2">
                  <input type="checkbox" />
                  <span class="btn btn-light"> SM </span>
                </label>

                <label class="checkbox-btn pt-2">
                  <input type="checkbox" />
                  <span class="btn btn-light"> LG </span>
                </label>

                <label class="checkbox-btn pt-2">
                  <input type="checkbox" />
                  <span class="btn btn-light"> XXL </span>
                </label>
              </div> --}}
                        <!-- card-body.// -->
                        {{-- </div>
          </article> --}}
                        <!-- filter-group .// -->
                        <article class="filter-group">
                            <header class="card-header product-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false"
                                    class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="area_title">More filter</h6>
                                </a>
                            </header>
                            <div class="filter-content collapse in" id="collapse_5">
                                <div class="card-body" style="padding: 15px 26px 10px !important;">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="myfilter_radio" checked=""
                                            class="custom-control-input" />
                                        <div class="custom-control-label">Any condition</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="myfilter_radio" class="custom-control-input" />
                                        <div class="custom-control-label">Brand new</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="myfilter_radio" class="custom-control-input" />
                                        <div class="custom-control-label">Used items</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="myfilter_radio" class="custom-control-input" />
                                        <div class="custom-control-label">Very old</div>
                                    </label>
                                </div>
                                <!-- card-body.// -->
                            </div>
                        </article>
                        <!-- filter-group .// -->
                </div>
                <!-- card.// -->
            </aside>
            <main class="col-md-9">
                <header class="product_showing shadow-lg px-2 py-2 mb-4">
                    <div class="form-inline d-flex justify-content-between align-items-center">
                        <span class="mr-md-auto">32 Items found </span>
                        <div class="d-flex align-items-center">
                            <div class="me-2 ml-2">
                                <div class="dropdown">
                                    <button class="btn product_btn_dropdown dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Result Per Page
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item small_dropdown" href="#">10</a></li>
                                        <li><a class="dropdown-item small_dropdown" href="#">20</a></li>
                                        <li><a class="dropdown-item small_dropdown" href="#">30</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="">
                                    <div class="dropdown" style="margin-right: 5px">
                                        <button class="btn product_btn_dropdown dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Short By Name
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item small_dropdown" href="#">Ascending By Name</a></li>
                                            <li><a class="dropdown-item small_dropdown" href="#">Ascending By Price</a></li>
                                            <li><a class="dropdown-item small_dropdown" href="#">Descending By Name</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- sect-heading -->

                <div class="row">

                    <div class="container mt-1 mb-5">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-12">
                                <!-- First Product Start -->
                                <div class="row m-0 p-2 shadow-lg bg-white border rounded d-flex align-items-center">
                                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                            src="https://m.media-amazon.com/images/I/61UGE9cZVlL._AC_SL1500_.jpg"></div>
                                    <div class="col-md-6 mt-1">
                                        <h5>Quant olap shirts</h5>
                                        <div class="d-flex flex-row">
                                            <div class="ratings mr-2"><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div><span>310</span>
                                        </div>
                                        <div class="mt-3 mb-1 spec-1"><span>100% cotton</span><span
                                                class="dot"></span><span>Light weight</span><span
                                                class="dot"></span><span>Best finish<br></span></div>
                                        <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span
                                                class="dot"></span><span>For men</span><span
                                                class="dot"></span><span>Casual<br></span></div>
                                        <p class="text-justify text-truncate para mb-0">There are many variations of
                                            passages of Lorem Ipsum available, but the majority have suffered alteration in
                                            some form, by injected humour, or randomised words which don't look even
                                            slightly believable.<br><br></p>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                                        </div>
                                        <h6 class="text-success">Free shipping</h6>
                                        <div class="d-flex flex-column mt-4"><button class="btn product_btn btn-sm"
                                                type="button">Details</button><button class="btn product_btn btn-sm mt-2"
                                                type="button">Add to wishlist</button></div>
                                    </div>
                                </div>
                                <!-- First Product End -->
                                <!-- Second Product Start -->
                                <div class="row m-0 mt-3 shadow-lg p-2 bg-white border rounded d-flex align-items-center">
                                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                            src="https://m.media-amazon.com/images/I/61UGE9cZVlL._AC_SL1500_.jpg"></div>
                                    <div class="col-md-6 mt-1">
                                        <h5>Quant olap shirts</h5>
                                        <div class="d-flex flex-row">
                                            <div class="ratings mr-2"><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></div><span>310</span>
                                        </div>
                                        <div class="mt-3 mb-1 spec-1"><span>100% cotton</span><span
                                                class="dot"></span><span>Light weight</span><span
                                                class="dot"></span><span>Best finish<br></span></div>
                                        <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span
                                                class="dot"></span><span>For men</span><span
                                                class="dot"></span><span>Casual<br></span></div>
                                        <p class="text-justify text-truncate para mb-0">There are many variations of
                                            passages of Lorem Ipsum available, but the majority have suffered alteration in
                                            some form, by injected humour, or randomised words which don't look even
                                            slightly believable.<br><br></p>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                                        </div>
                                        <h6 class="text-success">Free shipping</h6>
                                        <div class="d-flex flex-column mt-4"><button class="btn product_btn btn-sm"
                                                type="button">Details</button><button class="btn product_btn btn-sm mt-2"
                                                type="button">Add to wishlist</button></div>
                                    </div>
                                </div>
                                <!-- Second Product End -->

                            </div>
                        </div>
                    </div>


                    <nav class="mt-4" aria-label="Page navigation sample ">
                        <ul class="pagination d-flex justify-content-center align-items-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
            </main>
        </div>
    </div>
    {{-- New Filter Section End --}}
    <!--=======// Content & Filter //=======-->


    <!-------- End--------->



@endsection
@section('scripts')
    <script>
        $(document).ready(function() {});
    </script>
    <script>
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }

        $('input[type="range"]').change(function() {
            var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

            $(this).css('background-image',
                '-webkit-gradient(linear, left top, right top, ' +
                'color-stop(' + val + ', #860736fd), ' +
                'color-stop(' + val + ', #000)' +
                ')'
            );
        });
    </script>
@endsection
