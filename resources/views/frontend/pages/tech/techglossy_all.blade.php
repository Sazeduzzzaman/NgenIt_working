@extends('frontend.master')
@section('content')
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
            width: 60px;
            height: 60px;
        }

        .popular_post a p:hover {
            color: #ae0a46;
        }
    </style>
    <!--======// Header Title //======-->
    <section class="common_product_header pb-5"
        style="background-image: url('https://openlisthtml.themever.net/images/banner.jpg');">
        <div class="container mb-5">
            <h1>All TechGlossys</h1>
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
                <div class="col-6 blog_middle rounded-lg" style="margin-top: -7rem !important;">

                    {{-- First Blog --}}
                    @if ($client_storys)
                        @foreach ($client_storys as $item)
                            <div class="p-3 border shadow-lg mt-2"
                                style="background-color: #fff;border-radius: 5px;">
                                <div class="p-3">
                                    {{-- Blog Image --}}
                                    <img src="{{asset('storage/'.$item->image)}}" class="img-fluid" alt="">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col mt-3">
                                            {{-- Writer --}}
                                            {{-- <div class="d-flex justify-content-between align-items-center">
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
                                            </div> --}}
                                            {{-- Writer End --}}
                                            {{-- Blog Descrition --}}
                                            <div>
                                                <h5 class="fw-semibold">{{$item->title}}</h5>
                                                <p>{{$item->header}}</p>
                                            </div>
                                            {{-- Blog Descrition End --}}
                                        </div>
                                    </div>
                                    {{-- Blog Button --}}
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="bySocial col-12">
                                                <ul class="social-icon-links pull-right" style="font-size: 1.5rem;">
                                                    {!! Share::page(url('/blog/'. $item->id . '/details'))->facebook()->twitter()->whatsapp() !!}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            {{-- <button class="btn btn-primary rounded-circle">
                                                <i class="fa fa-arrow-down"></i>
                                            </button>
                                            <button class="btn btn-primary rounded-circle ml-1">
                                                <i class="fa fa-arrow-up"></i>
                                            </button> --}}
                                            <p class="ml-2 pt-3"><strong>Created at :  </strong>{{$item->created_at->format('Y-m-d')}}</p>
                                        </div>
                                        {{-- <div class="d-flex justify-content-center align-items-center">
                                            <button class="btn btn-primary rounded-circle">
                                                <i class="fa fa-comment"></i>
                                            </button>
                                            <p class="  ml-2 pt-3">15</p>
                                        </div> --}}
                                    </div>
                                    {{-- Blog Button End --}}
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-3 blog_right mt-3">
                    <div class="px-3 py-3 shadow-lg rounded-lg">

                        <img class="img-fluid" src="https://source.unsplash.com/random/580x320">
                        <div class="pt-3">
                            <h6>POPULAR POSTS</h6>
                            {{-- Popular Product 1--}}
                            @if ($featured_storys)
                                @foreach ($featured_storys as $item)
                                    <div class="pt-3 pb-3 d-flex justify-content-between popular_post">
                                        <a href="{{route('blog.details',$item->id)}}" class="d-flex justify-content-between">
                                            <img class="rounded-circle img-fluid"
                                                src="{{asset('storage/'.$item->image)}}" alt="" style="">
                                            <p class="ml-2">{{ Str::limit($item->title, 30) }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            @endif

                            <div>
                                <div>
                                    <img class=" img-fluid" src="https://source.unsplash.com/random/580x420">
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

                                {{$client_storys->links()}}


                            </ul>
                          </nav>
                    </div>
                </div>
            </div>

            <!-------End------->
        </div>
        <!--=======// Featured client stories //=======-->


        <!--=======// Featured client stories //=======-->
@endsection


