@extends('frontend.master')
@section('content')

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
          <article class="filter-group">
            <header class="product-header">
              <a
                href="#"
                data-toggle="collapse"
                data-target="#collapse_1"
                aria-expanded="true"
                class=""
              >
                <i class="icon-control fa fa-chevron-down"></i>
                <h6 class="area_title">System / Types</h6>
              </a>
            </header>
            <div class="filter-content collapse show" id="collapse_1">
              <div class="card-body">
                <div class="d-flex flex-column product_menu">
                  <a href="#">
                    People
                    <i class="icon-control fa fa-chevron-right"></i>
                  </a>
                  <a href="#">
                    Watches
                    <i class="icon-control fa fa-chevron-right"></i>
                  </a>
                  <a href="#">
                    Cinema
                    <i class="icon-control fa fa-chevron-right"></i>
                  </a>
                  <a href="#">
                    Clothes
                    <i class="icon-control fa fa-chevron-right"></i>
                  </a>
                  <a href="#">
                    Home items
                    <i class="icon-control fa fa-chevron-right"></i>
                  </a>
                  <a href="#">
                    Animals
                    <i class="icon-control fa fa-chevron-right"></i>
                  </a>
                  <a href="#">
                    People
                    <i class="icon-control fa fa-chevron-right"></i>
                  </a>
                </div>
              </div>
              <!-- card-body.// -->
            </div>
          </article>
          <!-- filter-group  .// -->
          <article class="filter-group">
            <header class="product-header">
              <a
                href="#"
                data-toggle="collapse"
                data-target="#key"
                aria-expanded="true"
                class=""
              >
                <i class="icon-control fa fa-chevron-down"></i>
                <h6 class="area_title">Key Word Search</h6>
              </a>
            </header>
            <div class="filter-content collapse show" id="key">
              <div class="card-body">
                <form class="">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search"
                    />
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
            <header class="card-header product-header">
              <a
                href="#"
                data-toggle="collapse"
                data-target="#collapse_2"
                aria-expanded="true"
                class=""
              >
                <i class="icon-control fa fa-chevron-down"></i>
                <h6 class="area_title">Manufacturers</h6>
              </a>
            </header>
            <div class="filter-content collapse show" id="collapse_2"
            >
              <form action="">
                <div class="px-4 py-2 d-flex flex-column">
                  <label class="custom-control custom-checkbox d-flex">
                    <input
                      type="checkbox"
                      checked=""
                      class="custom-control-input"
                      style="margin-right: 10px;"
                    />
                    <div class="custom-control-label">
                      Mercedes
                      <b class="badge bg-black ml-2 badge-pill badge-light float-right"
                        >120</b
                      >
                    </div>
                  </label>
                  <label class="custom-control custom-checkbox d-flex">
                    <input
                      type="checkbox"
                      checked=""
                      class="custom-control-input"
                      style="margin-right: 10px;"
                    />
                    <div class="custom-control-label">
                      Toyota
                      <b class="badge bg-black ml-2 badge-pill badge-light float-right">15</b>
                    </div>
                  </label>
                  <label class="custom-control custom-checkbox d-flex">
                    <input
                      type="checkbox"
                      checked=""
                      class="custom-control-input"
                      style="margin-right: 10px;"
                    />
                    <div class="custom-control-label">
                      Mitsubishi
                      <b class="badge bg-black ml-2 badge-pill badge-light float-right">35</b>
                    </div>
                  </label>
                  <label class="custom-control custom-checkbox d-flex">
                    <input
                      type="checkbox"
                      checked=""
                      class="custom-control-input"
                      style="margin-right: 10px;"
                    />
                    <div class="custom-control-label">
                      Nissan
                      <b class="badge bg-black ml-2 badge-pill badge-light float-right">89</b>
                    </div>
                  </label>
                  <label class="custom-control custom-checkbox d-flex">
                    <input
                    type="checkbox"
                    class="custom-control-input"
                    style="margin-right: 10px;"
                    />
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
              <a
                href="#"
                data-toggle="collapse"
                data-target="#collapse_3"
                aria-expanded="true"
                class=""
              >
                <i class="icon-control fa fa-chevron-down"></i>
                <h6 class="area_title">Price range</h6>
              </a>
            </header>
            <div
              class="filter-content collapse show"
              id="collapse_3"
            >
            <div class="product_list_price ">
                <div id="slider-range" class="price-filter-range w-75 mt-2 mx-auto text-success ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="0" data-max="20000" style="margin-bottom:0.7rem; ">
                    <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;background-color: #929497 !important;">
                    </div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;border-radius: 30px !important;"></span>
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;border-radius: 30px !important;"></span></div>
                <div class="w-75 mt-2 mx-auto">
                    <input type="hidden" id="price_range" name="price_range" value="">
                                    <input class="form-control mb-2" type="text" id="amount" value="USD $0 - $20000" readonly="">
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
              <a
                href="#"
                data-toggle="collapse"
                data-target="#collapse_5"
                aria-expanded="false"
                class=""
              >
                <i class="icon-control fa fa-chevron-down"></i>
                <h6 class="area_title">More filter</h6>
              </a>
            </header>
            <div class="filter-content collapse in" id="collapse_5">
              <div class="card-body" style="padding: 15px 26px 10px !important;">
                <label class="custom-control custom-radio">
                  <input
                    type="radio"
                    name="myfilter_radio"
                    checked=""
                    class="custom-control-input"
                  />
                  <div class="custom-control-label">Any condition</div>
                </label>

                <label class="custom-control custom-radio">
                  <input
                    type="radio"
                    name="myfilter_radio"
                    class="custom-control-input"
                  />
                  <div class="custom-control-label">Brand new</div>
                </label>

                <label class="custom-control custom-radio">
                  <input
                    type="radio"
                    name="myfilter_radio"
                    class="custom-control-input"
                  />
                  <div class="custom-control-label">Used items</div>
                </label>

                <label class="custom-control custom-radio">
                  <input
                    type="radio"
                    name="myfilter_radio"
                    class="custom-control-input"
                  />
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
          <div
            class="form-inline d-flex justify-content-between align-items-center"
          >
            <span class="mr-md-auto">32 Items found </span>
            <div class="d-flex align-items-center">
              <div class="ml-5">
                <div class="dropdown" style="margin-right: 5px">
                  <button
                    class="btn product_btn_dropdown dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                  Results per page
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <a class="dropdown-item" href="#">5</a>
                    <a class="dropdown-item" href="#">10</a>
                    <a class="dropdown-item" href="#">40</a>
                  </div>
                </div>
              </div>

              <div>
                <div class="">
                    <div class="dropdown" style="margin-right: 5px">
                      <button
                        class="btn product_btn_dropdown dropdown-toggle"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                      Sort By
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">Ascending By Name</a>
                        <a class="dropdown-item" href="#">Ascending By Price</a>
                        <a class="dropdown-item" href="#">Descending By Name</a>
                      </div>
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
                      <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://m.media-amazon.com/images/I/61UGE9cZVlL._AC_SL1500_.jpg"></div>
                      <div class="col-md-6 mt-1">
                          <h5>Quant olap shirts</h5>
                          <div class="d-flex flex-row">
                              <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                          </div>
                          <div class="mt-3 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                          <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                      </div>
                      <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                          <div class="d-flex flex-row align-items-center">
                              <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                          </div>
                          <h6 class="text-success">Free shipping</h6>
                          <div class="d-flex flex-column mt-4"><button class="btn product_btn btn-sm" type="button">Details</button><button class="btn product_btn btn-sm mt-2" type="button">Add to wishlist</button></div>
                      </div>
                  </div>
                    <!-- First Product End -->
                    <!-- Second Product Start -->
                    <div class="row m-0 mt-3 shadow-lg p-2 bg-white border rounded d-flex align-items-center">
                      <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://m.media-amazon.com/images/I/61UGE9cZVlL._AC_SL1500_.jpg"></div>
                      <div class="col-md-6 mt-1">
                          <h5>Quant olap shirts</h5>
                          <div class="d-flex flex-row">
                              <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                          </div>
                          <div class="mt-3 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                          <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                          <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                      </div>
                      <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                          <div class="d-flex flex-row align-items-center">
                              <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                          </div>
                          <h6 class="text-success">Free shipping</h6>
                          <div class="d-flex flex-column mt-4"><button class="btn product_btn btn-sm" type="button">Details</button><button class="btn product_btn btn-sm mt-2" type="button">Add to wishlist</button></div>
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
<section class="container">
    <form action="{{ route('shop.filter') }}" method="POST">
        @csrf
    <!----------Filter Top-nav Bar --------->
    <div class="clinet_stories_filter_top_bar">
        <label>Results per page </label>
        <span class="client_story_filter_page">
            <select class="show" name="show" onchange="this.form.submit();">
                <option value="">Default</option>
                <option value="5"  @if(!empty($_GET['show']) && $_GET['show']=='5') selected @endif>5</option>
                <option value="10" @if(!empty($_GET['show']) && $_GET['show']=='10') selected @endif>10</option>
                <option value="20" @if(!empty($_GET['show']) && $_GET['show']=='20') selected @endif>20</option>
                <option value="40" @if(!empty($_GET['show']) && $_GET['show']=='40') selected @endif>40</option>
            </select>

        </span>

        <label class="ml-4">Sort By: </label>
        <span class="client_story_filter_all_year">
            <select class='sortBy' name='sortBy' onchange="this.form.submit();">
                <option value="">Default</option>
                <option value="titleASC"  @if(!empty($_GET['sortBy']) && $_GET['sortBy'] =='titleASC') selected @endif>Ascending By Name</option>
                <option value="priceASC"  @if(!empty($_GET['sortBy']) && $_GET['sortBy'] =='priceASC') selected @endif> Ascending By Price</option>
                <option value="titleDESC" @if(!empty($_GET['sortBy']) && $_GET['sortBy'] =='titleDESC') selected @endif>Descending By Name</option>
                <option value="priceDESC" @if(!empty($_GET['sortBy']) && $_GET['sortBy'] =='priceDESC') selected @endif>Descending By Price</option>

            </select>
        </span>
        {{-- <span class="product_go_to_next_pge"><a href="#" class="float-right">Go to next page...<i
                    class="fa-solid fa-chevron-right"></i></a></span> --}}
    </div>
    <hr class="m-1">
    <div class="row">
        <!----------Sidebar client stories --------->
        <div class="col-lg-3 col-sm-12">
            <div class="sidebar_client_stories">
                <label><b>@if ($products)
                    {{ $products->count() }}
                @else
                   No
                @endif</b> results matched your search</label>
                <hr class="m-0">
                <!--------Your search--------->
                <div class="client_stories_your_search">
                    <h6 class="mb-1">Your search</h6>

                        @if(!empty($_GET['sortBy']) && $_GET['sortBy'] =='titleASC')
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                            Ascending By Name
                        </div>
                        @endif
                        @if(!empty($_GET['sortBy'])&& $_GET['sortBy'] =='priceASC')
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                            Ascending By Price
                        </div>
                        @endif
                        @if(!empty($_GET['sortBy'])&& $_GET['sortBy'] =='titleDESC')
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                            Descending By Name
                        </div>
                        @endif
                        @if(!empty($_GET['sortBy'])&& $_GET['sortBy'] =='priceDESC')
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                        Descending By Price
                        </div>
                        @endif


                        @if(!empty($_GET['show']) && $_GET['show']=='5')
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                            Showing 5 Products
                        </div>
                        @endif
                        @if(!empty($_GET['show']) && $_GET['show']=='10')
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                            Showing 5 Products
                        </div>
                        @endif
                        @if(!empty($_GET['show']) && $_GET['show']=='20')
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                            Showing 5 Products
                        </div>
                        @endif
                        @if(!empty($_GET['show']) && $_GET['show']=='40')
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">
                            Showing 5 Products
                        </div>
                        @endif


                </div>
                    @if(!empty($_GET['category']))
                        @php
                        $filterCats = explode(',',$_GET['category']);
                        @endphp

                        @if (count($filterCats) > 1)
                        @foreach ($filterCats as $filterCat)
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                            {{ App\Models\Admin\Category::where('slug', $filterCat)->value('title')}}
                        </div>
                        @endforeach
                        @endif
                        @if (count($filterCats) == 1)
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                            {{ App\Models\Admin\Category::where('slug', $filterCats)->value('title')}}
                        </div>

                        @endif
                    @endif


                    @if(!empty($_GET['brand']))
                        @php
                        $filterBrands = explode(',',$_GET['brand']);
                        @endphp
                        @if (count($filterBrands) > 1)
                            @foreach ($filterBrands as $filterBrand)
                            <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                                {{ App\Models\Admin\Brand::where('slug', $filterBrand)->value('title')}}
                            </div>
                            @endforeach
                        @elseif (count($filterBrands) == 1)
                        <div class="alert alert-secondary alert-dismissible p-0 py-1 px-1 m-1">

                            {{ App\Models\Admin\Brand::where('slug', $filterBrands)->value('title')}}
                        </div>
                        @else
                        @endif
                    @endif
                <hr class="m-1">

                <!-------Content Results---------->
                 <div class="client_stories_narrow_content">
                    <h6 class="mb-2">Narrow results</h6>
                    @if(!empty($_GET['keyword']))
                    <input class="p-1" type="text" name="keyword" value="{{ $_GET['keyword'] }}" onchange="this.form.submit()">
                    @else
                    <input class="p-1" type="text" name="keyword" placeholder="BY KEYWORD..." onchange="this.form.submit()">
                    @endif

                </div>
                <hr>

                <!-------Apply Filters Button---------->

                </div>

                <hr class="m-1">

                <!-------List Price---------->
                <div class="product_list_price">
                    <h6 class="mb-4">List Price</h6>
                    <div id="slider-range" class="price-filter-range text-success" data-min="0" data-max="20000" style="margin-bottom:0.7rem; "></div>
                    <input type="hidden" id="price_range" name="price_range" value="">
                    @if(!empty($_GET['price']))
                    <input class="form-control mb-2" type="text" id="amount" value="USD $ {{ $_GET['price'] }}" readonly>
                    @else
                    <input class="form-control mb-2" type="text" id="amount" value="USD $0 - $20000" readonly>
                    @endif
                </div>

                <div id="sticker">
                    <div class="product_apply_filter_btn d-flex">
                    <button class="common_button2 p-2" type="submit">Apply Filters</button>
                </div>
                <hr>

                <!--------Manufacturers--------->
                <div class="client_stories_filter_category">
                    <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i>System / Types
                    </h6>


                    @if(!empty($_GET['category']))
                        @php
                        $filterCat = explode(',',$_GET['category']);
                        @endphp
                    @endif
                    <div id="filter_category">
                        @foreach($categories as $category)
                        @php
                        $products_cat = App\Models\Admin\Product::where('cat_id',$category->id)->get();
                        @endphp
                        <div class="form-check">
                            <input class="form-check-input custom" name="category[]" type="checkbox" id="exampleCheckbox{{ $category->id }}" value="{{ $category->slug }}" @if(!empty($filterCat) && in_array($category->slug,$filterCat)) checked @endif  onchange="this.form.submit()">
                            <span class="ml-2" for="exampleCheckbox{{ $category->id }}"> {{ $category->title }}</span>
                            <span class="float-right">({{ count($products_cat) }})</span>
                        </div>
                        @endforeach
                    </div>


                </div>
                <hr>

                <!--------System / Type--------->
                <div class="client_stories_filter_category">
                    <h6 onclick="showhide()" class="mb-4"><i class="fa-solid fa-caret-down"></i>Manufacturers</h6>

                    <div id="newpost">
                        @if(!empty($_GET['brand']))
                        @php
                        $filterBrand = explode(',',$_GET['brand']);
                        @endphp

                        @endif
                        @foreach($brands as $brand)
                        @php
                            $products_brand = App\Models\Admin\Product::where('brand_id',$brand->id)->get();
                        @endphp
                        <div class="form-check">
                            <input class="form-check-input custom" type="checkbox" name="brand[]" id="exampleBrand{{ $brand->id }}" value="{{ $brand->slug }}" @if(!empty($filterBrand) && in_array($brand->slug,$filterBrand)) checked @endif  onchange="this.form.submit()">
                            <span class="ml-2" for="exampleBrand{{ $brand->id }}">{{ $brand->title }}</span>
                            <span class="float-right">({{ count($products_brand) }})</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <hr>

                <!-------Stock Status---------->
                {{-- <div class="product_stock_status">
                    <h6 class="mb-4">Stock Status</h6>
                    <div class="form-check">
                        <input class="form-check-input custom" type="checkbox" id="flexCheckDefault">
                        <span class="ml-2">Show only in-stock items</span>
                    </div>

                </div>
                <hr> --}}




                <!--------End--------->

            </div>
        </div>
        <!----------conternt client stories --------->

        <div class="col-lg-9 col-sm-12">
            <div class="row">
                @if ($products)
                @foreach ($products as $item)
                <div class="col-lg-4 col-sm-4">
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="{{ asset($item->thumbnail)}}" alt="{{$item->name}}" width="150px" height="113px">
                        </div>

                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name" style="height: 4rem;">{{$item->name}}</a>

                           @if ($item->rfq != 1)
                             <!-- price -->
                             <div class="product_item_price">
                                 <span class="price_currency">USD</span>
                                 @if (!empty($item->discount))
                                 <span class="price_currency_value" style="text-decoration: line-through; color:red">$ {{ $item->price }}</span>
                                 <span class="price_currency_value" style="color: black">$ {{ $item->discount }}</span>
                                 @else
                                 <span class="price_currency_value">$ {{ $item->price }}</span>
                                 @endif
                             </div>

                             <!-- button -->
                             @php
                             $cart = Cart::content();
                             $exist = $cart->where('id' , $item->id );
                             //dd($cart->where('image' , $item->thumbnail )->count());
                             @endphp
                             @if ($cart->where('id' , $item->id )->count())
                             <a href="javascript:void(0);" class="common_button2 p-0 py-2 px-1 pb-2" style="height: 2.5rem"> Already in Cart</a>
                             @else
                             <form action="{{route('add.cart')}}" method="post">
                                 @csrf
                                 <input type="hidden" name="product_id" id="product_id" value="{{ $item->id }}">
                                 <input type="hidden" name="name" id="name" value="{{ $item->name }}">
                                 <input type="hidden" name="qty" id="qty" value="1">
                                 <button type="submit" class="product_button" >Add to Basket</button>
                             </form>
                             @endif
                           @else
                           <a class="product_button mt-3" href="{{ route('product.details', $item->slug) }}">Details</a>
                           @endif
                        </div>

                    </div>

                    <hr>
                </div>
                @endforeach
            @endif
            </div>
        </div>
            <!--------item------->





    </div>
    </div>


    <!------------------Pagination------------------->
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{ $products->links() }}
            </ul>

        </nav>
    </div>
</section>
</form>
<br>
<!-------- End--------->



@endsection
@section('scripts')
<script>
    $(document).ready(function() {
});
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

    $('input[type="range"]').change(function () {
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));

    $(this).css('background-image',
                '-webkit-gradient(linear, left top, right top, '
                + 'color-stop(' + val + ', #860736fd), '
                + 'color-stop(' + val + ', #000)'
                + ')'
                );
    });
</script>

@endsection
