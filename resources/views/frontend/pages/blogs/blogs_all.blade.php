@extends('frontend.master') @section('content')
    <style>
        .common_product_header h1 {
            text-align: center;
            color: black;
            font-size: 50px;
            font-weight: 600;
        }
        .badges_list li {
            display: inline-block;
            padding-left: 14px;
            padding-bottom: 18px;
        }

        .badges_list li a {
            width: 31px;
            height: 31px;
            color: #fff;
            display: inline-block;
            text-align: center;
            line-height: 30px;
            position: relative;
            z-index: 1;
        }

        .badges_list li a:before {
            content: "";
            position: absolute;
            height: 30px;
            width: 30px;
            display: block;
            background: #ae0a46;
            border-radius: 7px;
            transform: rotate(45deg);
            z-index: -1;
        }

        .badges_list li a span {
            position: absolute;
            top: -14px;
            left: 15px;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            border: 3px solid #fff;
            color: #fff;
            font: 700 11px "Lato", sans-serif;
            background: #ff6b6b;
        }

        .blog_right {
            border-radius: 8px !important;
        }

        .blog_left {
            border-radius: 8px !important;
        }

        .blog_middle {
            border-radius: 8px !important;
        }

        .blog_bg {
            background: #eff3f5;
        }

        .blog_writer {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        ul {
            padding-left: 0rem;
        }

        ul.interests_list {
            list-style-type: circle;
            color: #ae0a46 !important;
            padding-left: 2rem;
        }

        ul.interests_list a {
            color: #ae0a46 !important;
        }

        .client_stories_img {
            widows: 200px;
            height: 200px;
        }

        .pagination li a:hover {
            background-color: #ae0a46;
            color: #ffffff;
            display: inline-block;
            padding: 6px 11px;
            text-decoration: none;
            transition: all 1ms linear 1ms;
            border-color: #ae0a46;
        }

        .popular_post a p {
            color: #000;
        }

        .popular_post a img {
            width: 70px;
            height: 50px;
        }

        .popular_post a p:hover {
            color: #ae0a46;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header pb-5"
        style="background-image: url('https://openlisthtml.themever.net/images/banner.jpg');">
        <div class="container mb-5">
            <h1>Blogs</h1>
            <p class="text-center text-white">Through our deep partnerships with trusted brands, <br> Insight offers a
                comprehensive catalog of software for business. </p>
            {{-- <div class="row mb-5">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="">
                        <div class="">
                            <button class="common_button3" href="#">All Blog Are Here</button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!----------End--------->
    <div class="container-fluid blog_bg p-0 m-0">
        <div class="container px-4 py-5">
            <div class="row gx-3 ">
                <div class="col-3 blog_left mt-3">
                    <div class="p-3 shadow-lg rounded-lg">
                        {{-- Search --}}
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn job_search_btn" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- YOUR INTERESTS --}}
                        <div>
                            <h6 class="pt-2">Your Interest</h6>
                            <ul class="interests_list">
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Solutions </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Software </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Cloud </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Artificial Intelligence </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Data analytics </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Digital transformation </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Real-time data </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Cybersecurity</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Hardware</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Workplace Services</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Data Center</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Data Management</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Transformation services</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Modern infrastructure</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Cybersecurity</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Networking</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Products</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Brand</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion-android-radio-button-off"></i>Learn more</a>
                                </li>
                            </ul>
                        </div>
                        {{-- Profile Edit --}}
                        <div>
                            <div class="profile p-0">
                                <h6 class="categories_tittle">Profile <span>Edit</span>
                                </h6>
                                <ul class=" d-flex justify-content-start">
                                    <a href="" class="">
                                        <img class="blog_writer" src="https://source.unsplash.com/random/470x380"
                                            alt="" class="circle">
                                    </a>
                                    <a href="" class="">
                                        <img class="blog_writer" src="https://source.unsplash.com/random/420x330"
                                            alt="" class="circle">
                                    </a>
                                    <a href="" class="">
                                        <img class="blog_writer" src="https://source.unsplash.com/random/440x350"
                                            alt="" class="circle">
                                    </a>
                                    <a href="" class="">
                                        <img class="blog_writer" src="https://source.unsplash.com/random/460x330"
                                            alt="" class="circle">
                                    </a>
                                </ul>
                                <ul class=" d-flex justify-content-start">
                                    <a href="" class="">
                                        <img class="blog_writer" src="https://source.unsplash.com/random/280x320"
                                            alt="" class="circle">
                                    </a>
                                    <a href="" class="">
                                        <img class="blog_writer" src="https://source.unsplash.com/random/380x320"
                                            alt="" class="circle">
                                    </a>
                                    <a href="" class="">
                                        <img class="blog_writer" src="https://source.unsplash.com/random/480x320"
                                            alt="" class="circle">
                                    </a>
                                    <a href="" class="">
                                        <img class="blog_writer" src="https://source.unsplash.com/random/580x320"
                                            alt="" class="circle">
                                    </a>
                                </ul>
                            </div>
                        </div>
                        {{-- Badges --}}
                        <div>
                            <div class="badges">
                                <h6 class="categories_tittle">Badges</h6>
                                <ul class="badges_list pt-3">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>6</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="badges_list">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>6</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- SOCIAL SHARING --}}

                    </div>
                </div>
                <div class="col-6 blog_middle rounded-lg">
                    {{-- First Blog --}}
                    <div class="p-3 border shadow-lg"
                        style="margin-top: -7rem; background-color: #fff;border-radius: 5px;">
                        <div class="p-3">
                            {{-- Blog Image --}}
                            <img src="https://source.unsplash.com/random/1300x720" class="img-fluid" alt="">
                            <div class="row d-flex justify-content-between">
                                <div class="col mt-2">
                                    {{-- Writer --}}
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-start">
                                            <img class="blog_writer"
                                                src="https://openlisthtml.themever.net/images/author-1.jpg"
                                                alt="">
                                            <div class="ml-3">
                                                <h6>Harry Ramos</h6>
                                                <p>5 Minute ago</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <div class="">
                                                <button class="btn btn-primary rounded-circle">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Writer End --}}
                                    {{-- Blog Descrition --}}
                                    <div>
                                        <h5 class="fw-semibold">Why Is It I Can Never Think Of Anything Good To Make For
                                            Supper</h5>
                                        <p>In the last 10 years Americans have seen a boom in local food markets and for
                                            good reason. While Americans continue to buy more fast food, they still expect
                                            perfect ingredients and they are finding them.</p>
                                    </div>
                                    {{-- Blog Descrition End --}}
                                </div>
                            </div>
                            {{-- Blog Button --}}
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary rounded-circle">
                                        <i class="fa fa-share-alt"></i>
                                    </button>
                                    <div>
                                        <p class="  ml-2 pt-3">Share</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary rounded-circle">
                                        <i class="fa fa-arrow-down"></i>
                                    </button>
                                    <button class="btn btn-primary rounded-circle ml-1">
                                        <i class="fa fa-arrow-up"></i>
                                    </button>
                                    <p class="  ml-2 pt-3">463</p>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary rounded-circle">
                                        <i class="fa fa-comment"></i>
                                    </button>
                                    <p class="  ml-2 pt-3">15</p>
                                </div>
                            </div>
                            {{-- Blog Button End --}}
                        </div>
                    </div>
                    {{-- First Blog --}}
                    <div class="p-3 border shadow-lg mt-2"
                        style="margin-top: -7rem; background-color: #fff;border-radius: 5px;">
                        <div class="p-3">
                            {{-- Blog Image --}}
                            <img src="https://source.unsplash.com/random/1200x720" class="img-fluid" alt="">
                            <div class="row d-flex justify-content-between">
                                <div class="col mt-3">
                                    {{-- Writer --}}
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-start">
                                            <img class="blog_writer"
                                                src="https://openlisthtml.themever.net/images/author-1.jpg"
                                                alt="">
                                            <div class="ml-3">
                                                <h6>Harry Ramos</h6>
                                                <p>5 Minute ago</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start">
                                            <div class="">
                                                <button class="btn btn-primary rounded-circle">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Writer End --}}
                                    {{-- Blog Descrition --}}
                                    <div>
                                        <h5 class="fw-semibold">Why Is It I Can Never Think Of Anything Good To Make For
                                            Supper</h5>
                                        <p>In the last 10 years Americans have seen a boom in local food markets and for
                                            good reason. While Americans continue to buy more fast food, they still expect
                                            perfect ingredients and they are finding them.</p>
                                    </div>
                                    {{-- Blog Descrition End --}}
                                </div>
                            </div>
                            {{-- Blog Button --}}
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary rounded-circle">
                                        <i class="fa fa-share-alt"></i>
                                    </button>
                                    <div>
                                        <p class="  ml-2 pt-3">Share</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary rounded-circle">
                                        <i class="fa fa-arrow-down"></i>
                                    </button>
                                    <button class="btn btn-primary rounded-circle ml-1">
                                        <i class="fa fa-arrow-up"></i>
                                    </button>
                                    <p class="  ml-2 pt-3">463</p>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-primary rounded-circle">
                                        <i class="fa fa-comment"></i>
                                    </button>
                                    <p class="  ml-2 pt-3">15</p>
                                </div>
                            </div>
                            {{-- Blog Button End --}}
                        </div>
                    </div>
                </div>
                <div class="col-3 blog_right mt-3">
                    <div class="px-3 py-3 shadow-lg rounded-lg">

                        <img class="img-fluid" src="https://source.unsplash.com/random/580x320" alt="">
                        <div class="pt-3">
                            <h6>POPULAR POSTS</h6>
                            {{-- Popular Product 1 --}}
                            <div class="pt-3 d-flex justify-content-between popular_post">
                                <a href="" class="d-flex justify-content-between">
                                    <img class="rounded-circle img-fluid"
                                        src="https://openlisthtml.themever.net/images/recent-post-1.jpg" alt=""
                                        style="">
                                    <p class="ml-2">Poster can be one of the effective</p>
                                </a>
                            </div>
                            {{-- Popular Product 2 --}}
                            <div class="pt-2 d-flex justify-content-between popular_post">
                                <a href="" class="d-flex justify-content-between">
                                    <img class="rounded-circle img-fluid"
                                        src="https://openlisthtml.themever.net/images/recent-post-3.jpg" alt=""
                                        style="">
                                    <div class="ml-2">
                                        <p>Poster can be one of the effective</p>
                                    </div>
                                </a>
                            </div>
                            {{-- Popular Product 3 --}}
                            <div class="pt-2 d-flex justify-content-between popular_post">
                                <a href="" class="d-flex justify-content-between">
                                    <img class="rounded-circle img-fluid"
                                        src="https://openlisthtml.themever.net/images/recent-post-3.jpg" alt=""
                                        style="">
                                    <div class="ml-2">
                                        <p>Poster can be one of the effective</p>
                                    </div>
                                </a>
                            </div>
                            {{-- Popular Product 3 --}}
                            <div class="pt-2 d-flex justify-content-between popular_post">
                                <a href="" class="d-flex justify-content-between">
                                    <img class="rounded-circle img-fluid"
                                        src="https://openlisthtml.themever.net/images/recent-post-3.jpg" alt=""
                                        style="">
                                    <div class="ml-2">
                                        <p>Poster can be one of the effective</p>
                                    </div>
                                </a>
                            </div>
                            {{-- Popular Product 3 --}}
                            <div class="pt-2 d-flex justify-content-between popular_post">
                                <a href="" class="d-flex justify-content-between">
                                    <img class="rounded-circle img-fluid"
                                        src="https://openlisthtml.themever.net/images/recent-post-3.jpg" alt=""
                                        style="">
                                    <div class="ml-2">
                                        <p>Poster can be one of the effective</p>
                                    </div>
                                </a>
                            </div>
                            {{-- Popular Product 3 --}}
                            <div class="pt-2 d-flex justify-content-between popular_post">
                                <a href="" class="d-flex justify-content-between">
                                    <img class="rounded-circle img-fluid"
                                        src="https://openlisthtml.themever.net/images/recent-post-3.jpg" alt=""
                                        style="">
                                    <div class="ml-2">
                                        <p>Poster can be one of the effective</p>
                                    </div>
                                </a>
                            </div>{{-- Popular Product 3 --}}
                            <div class="pt-2 d-flex justify-content-between popular_post">
                                <a href="" class="d-flex justify-content-between">
                                    <img class="rounded-circle img-fluid"
                                        src="https://openlisthtml.themever.net/images/recent-post-3.jpg" alt=""
                                        style="">
                                    <div class="ml-2">
                                        <p>Poster can be one of the effective</p>
                                    </div>
                                </a>
                            </div>
                            {{-- Popular Product 4 --}}
                            <div class="pt-2 d-flex justify-content-between popular_post">
                                <div class=" d-flex justify-content-between ">
                                    <a href="" class="d-flex justify-content-between">
                                        <img class="rounded-circle img-fluid"
                                            src="https://openlisthtml.themever.net/images/recent-post-4.jpg"
                                            alt="" style="">
                                        <div class="ml-2">
                                            <p>Poster can be one of the effective</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <img class=" img-fluid" src="https://source.unsplash.com/random/580x420"
                                        alt="" style="">
                                </div>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <nav>
                                    <ul class="pagination">

                                        <li class="page-item disabled" aria-disabled="true"
                                            aria-label="pagination.previous">
                                            <span class="page-link" aria-hidden="true">‹</span>
                                        </li>
                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span>
                                        </li>
                                        <li class="page-item"><a class="page-link"
                                                href="http://127.0.0.1:8000/blogs/all?page=2">2</a></li>


                                        <li class="page-item">
                                            <a class="page-link" href="http://127.0.0.1:8000/blogs/all?page=2"
                                                rel="next" aria-label="pagination.next">›</a>
                                        </li>
                                    </ul>
                                </nav>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="container padding_bottom">
                <div class="featured_client_stories_wrapper">
                    <div class="featured_client_stories">
                        <div class="container">
                            <div class="featured_client_stories_title">
                                <h2 class="">Featured Blogs</h2>
                            </div>
                            <div class="row">
                                <!--------item------->
                                @foreach ($featured_storys as $item)
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="client_stories_item">
                                            <a href="{{ route('blog.details', $item->id) }}">
                                                <img class="img-fluid client_stories_img"
                                                    src="{{ asset('storage/' . $item->image) }}"
                                                    alt="{{ $item->badge }}">
                                                <h6 class="mt-2">
                                                    <strong>{{ Str::limit($item->badge, 18) }}</strong>
                                                </h6>
                                                <h3>
                                                    <strong>{{ Str::limit($item->title, 60) }}</strong>
                                                </h3>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                <!--------item------->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-------End------->
        </div>
        <!--=======// Featured client stories //=======-->

        <!--=======// Content & Filter //=======-->
        <section class="container section_padding">
            <!----------Filter Top-nav Bar --------->
            <div class="clinet_stories_filter_top_bar" style="padding:0px;">
                <label> Results per page </label>
                <span class="client_story_filter_page">
                    <select>
                        <option value="#" selected>10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                    </select>
                </span>
                <label class="ml-4">Filter By: </label>
                <span class="client_story_filter_all_year">
                    <select>
                        <option value="#" selected>All years</option>
                        <option value="#">2022</option>
                        <option value="#">2021</option>
                        <option value="#">2020</option>
                        <option value="#">2019</option>
                        <option value="#">2018</option>
                        <option value="#">2017</option>
                        <option value="#">2016</option>
                        <option value="#">2015</option>
                        <option value="#">2014</option>
                        <option value="#">2013</option>
                        <option value="#">2012</option>
                    </select>
                </span>
            </div>
            <div class="row">
                <!----------Sidebar client stories --------->
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="sidebar_client_stories">
                        <label>
                            <b>2</b> results matched your search </label>
                        <!--------Your search--------->
                        {{-- <div class="client_stories_your_search">
                                                      <h6 class="mb-4">Your search</h6>
                                                      <div class="alert alert-secondary alert-dismissible">
                                                          <button type="button" class="close" data-dismiss="alert">&times;</button>Education (higher)

                                                      </div>
                                                      <div class="alert alert-secondary alert-dismissible">
                                                          <button type="button" class="close" data-dismiss="alert">&times;</button>Application (low)

                                                      </div>
                                                  </div> --}}
                        <hr>
                        <!-------Content Results---------->
                        <div class="client_stories_narrow_content">
                            <h6 class="mb-4">Narrow content results</h6>
                            <input type="text" placeholder="BY KEYWORD...">
                        </div>
                        <hr>
                        <!--------Topic--------->
                        <div class="client_stories_filter_category">
                            <h6 onclick="myFunction()" class="mb-4">
                                <i class="fa-solid fa-caret-down"></i> Topic
                            </h6>
                            <div id="filter_category"> @php
                                //$tags = explode(',', $tag_items);
                            @endphp @foreach ($tag_items as $tag_item)
                                    @php $tags = explode(',', $tag_item); @endphp @if (!empty($_GET['tags']))
                                        @php $filterCat = explode(',', $_GET['tags']); @endphp
                                        @endif @foreach ($tags as $item)
                                            <div class="form-check">
                                                <input name="tag" value="{{ $item }}"
                                                    class="form-check-input custom" name="tags[]" type="checkbox"
                                                    id="flexCheckDefault" onchange="this.form.submit()">
                                                <span class="ml-2">{{ $item }}</span>
                                            </div>
                                        @endforeach
                                    @endforeach
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <!----------conternt client stories --------->
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="row">
                        <!--------item------->
                        @foreach ($client_storys as $item)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="client_stories_content_item">
                                    <a href="{{ route('blog.details', $item->id) }}">
                                        <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}"
                                            alt="{{ $item->badge }}" height='150px' width='100%'>
                                        <h3 class="mt-4">{{ $item->title }}</h3>
                                        <p>{!! $item->header !!}</p>
                                        <h6>{{ $item->badge }} / {{ $item->created_at->format('Y-m-d') }}</h6>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <!--------item------->
                    </div>
                </div>
            </div>
            <!------------------Pagination------------------->
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{ $client_storys->links() }}
                    </ul>
                </nav>
            </div>
        </section>
        <!-------End------->
        <!--=======// Featured client stories //=======-->
    @endsection

















@extends('frontend.master')
@section('content')
    <!--=======// Featured client stories //=======-->
    <div class="header_title_clinet_stories" style="margin-top: 100px;">
        <h2 class="text-center text-white">Ngen It Blogs</h2>
    </div>

    <section class="container padding_bottom">
        <div class="featured_client_stories_wrapper">
            <div class="featured_client_stories">
                <div class="container">
                    <div class="featured_client_stories_title">
                        <h2 class="">Featured Blogs</h2>
                    </div>

                    <div class="row">

                        <!--------item------->
                        @foreach ($featured_storys as $item )
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="client_stories_item">
                                <a href="{{route('blog.details',$item->id)}}">
                                    <img class="img-fluid" src="{{asset('storage/'.$item->image)}}" alt="{{$item->badge}}" width="100%" height="150" >
                                    <h6 class="mt-2"><strong>{{Str::limit($item->badge,18)}}</strong></h6>
                                    <h3><strong>{{Str::limit($item->title,60)}}</strong></h3>
                                </a>

                            </div>
                        </div>
                        @endforeach
                        <!--------item------->

                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-------End------->

    <!--=======// Content & Filter //=======-->
    <section class="container section_padding">
        <!----------Filter Top-nav Bar --------->

       <div class="clinet_stories_filter_top_bar" style="padding:0px;">
            <label> Results per page </label>
            <span class="client_story_filter_page">
                <select>
                    <option value="#" selected>10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                </select>
            </span>

            <label class="ml-4">Filter By: </label>
            <span class="client_story_filter_all_year">
                <select>
                    <option value="#" selected>All years</option>
                    <option value="#">2022</option>
                    <option value="#">2021</option>
                    <option value="#">2020</option>
                    <option value="#">2019</option>
                    <option value="#">2018</option>
                    <option value="#">2017</option>
                    <option value="#">2016</option>
                    <option value="#">2015</option>
                    <option value="#">2014</option>
                    <option value="#">2013</option>
                    <option value="#">2012</option>
                </select>
            </span>

       </div>

        <div class="row">
            <!----------Sidebar client stories --------->
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="sidebar_client_stories">
                    <label> <b>2</b> results matched your search</label>


                    <!--------Your search--------->
                    {{-- <div class="client_stories_your_search">
                        <h6 class="mb-4">Your search</h6>
                        <div class="alert alert-secondary alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>Education (higher)
                        </div>
                        <div class="alert alert-secondary alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>Application (low)
                        </div>
                    </div> --}}

                    <hr>
                    <!-------Content Results---------->
                    <div class="client_stories_narrow_content">
                        <h6 class="mb-4">Narrow content results</h6>
                        <input type="text" placeholder="BY KEYWORD...">
                    </div>

                    <hr>
                    <!--------Topic--------->
                    <div class="client_stories_filter_category">
                        <h6 onclick="myFunction()" class="mb-4"><i class="fa-solid fa-caret-down"></i> Topic</h6>

                        <div id="filter_category">
                            @php

		                    //$tags = explode(',', $tag_items);
                        @endphp
                        @foreach ($tag_items as $tag_item)
                        @php

                            $tags = explode(',', $tag_item);
                        @endphp
                        @if(!empty($_GET['tags']))
                        @php
                        $filterCat = explode(',',$_GET['tags']);
                        @endphp
                        @endif

                         @foreach($tags as $item)

                         <div class="form-check">
                             <input name="tag" value="{{$item}}" class="form-check-input custom" name="tags[]" type="checkbox" id="flexCheckDefault" onchange="this.form.submit()">
                             <span class="ml-2">{{$item}}</span>
                         </div>
                         @endforeach
                         @endforeach



                        </div>

                    </div>
                    <hr>


                </div>
            </div>
            <!----------conternt client stories --------->
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="row">
                    <!--------item------->
                    @foreach($client_storys as $item)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="client_stories_content_item">
                            <a href="{{route('blog.details',$item->id)}}">
                                <img class="img-fluid" src="{{asset('storage/'.$item->image)}}" alt="{{$item->badge}}" height='150px' width='100%' >
                                <h3 class="mt-4">{{$item->title}}</h3>

                                <p>{!! $item->header !!}</p>
                                <h6>{{$item->badge}} / {{$item->created_at->format('Y-m-d')}}</h6>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!--------item------->


                </div>
            </div>
        </div>


        <!------------------Pagination------------------->
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    {{$client_storys->links()}}


                </ul>
              </nav>
        </div>
    </section>
    <!-------End------->
@endsection
