@extends('frontend.master')
@section('content')
    <style>
        .project_details_area {
            margin-left: -5rem;
            z-index: 999;
        }

        .project_description {
            background: #FFF;
            border-bottom: 3px solid #ae0a46;
        }

        /* Project Gallery */
        .masonry:after {
            content: "";
            display: table;
            clear: both;
        }

        .masonry .grid-sizer,
        .masonry_block {
            width: 100%;
        }

        .masonry_block {
            float: left;
            padding: 20px 20px;
            border-radius: 25px;
        }

        .masonry-folio {
            position: relative;
            overflow: hidden;
            box-shadow: 1px 4px 15px 1px rgba(0, 0, 0, 0.2);
            border-radius: 1rem;
        }

        .masonry_thum img {
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            border-radius: 1rem;
        }

        .masonry_thum a {
            display: block;
        }

        .masonry_thum a::before {
            display: block;
            background-color: rgba(0, 0, 0, 0.8);
            content: "";
            opacity: 0;
            visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            z-index: 1;
            border-radius: 1rem;
        }

        .masonry_thum a::after {
            display: block;
            height: 30px;
            width: 30px;
            line-height: 30px;
            margin-left: -15px;
            margin-top: -15px;
            position: absolute;
            left: 50%;
            top: 50%;
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
            z-index: 1;
            border-radius: 1rem;
            border-top: 1px solid #d7dce1;
            border-left: 3px solid #d7dce1;
        }

        .masonry_text {
            position: absolute;
            left: 0;
            bottom: 8rem;
            padding: 0 1.5rem;
            z-index: 2;
            opacity: 0;
            visibility: hidden;
            -webkit-transform: translate3d(0, 100%, 0);
            -ms-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .masonry_title {
            font-size: 1.4rem;
            font-weight: 400;
            line-height: 1;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.2rem;
            margin: 0 0 0.3rem 0;
        }

        .masonry_cat {
            color: rgba(255, 255, 255, 0.5);
            font-size: 1rem;
            font-weight: 200;
            line-height: 1.714;
            margin-bottom: 0;
        }

        .masonry_caption {
            display: none;
        }

        .masonry_project-link {
            display: block;
            color: #ffffff;
            text-align: center;
            z-index: 500;
            top: 3rem;
            left: 2rem;
            opacity: 0;
            visibility: hidden;
            -webkit-transform: translate3d(0, -100%, 0);
            -ms-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        .masonry_project-link::before {
            display: in-line;
            position: relative;
            top: -2.5rem;
            left: 50%;
        }

        .masonry_project-link:hover,
        .masonry_project-link:focus,
        .masonry_project-link:active {
            font-size: 1.1rem;
            color: #ffffff;
            -webkit-transform: translate3d(0, 100%, 0);
            -ms-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            display: block;
            background-color: transparent;
        }

        /* on hover
     * ----------------------------------------------- */
        .masonry-folio:hover .masonry_thum a::before {
            opacity: 1;
            visibility: visible;
        }

        .masonry-folio:hover .masonry_thum a::after {
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        .masonry-folio:hover .masonry_thum img {
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
        }

        .masonry-folio:hover .masonry_project-link,
        .masonry-folio:hover .masonry_text {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .masonry_project-link:hover a {
            text-decoration: underline;
        }



        .project_feature h5 {
            color: #ae0a46;
            font-size: 16px;
            font-weight: bold;
            text-align: justify;
            word-wrap: break-word;
        }

        .project_feature p {
            font-size: 14px;
            text-align: justify;
            word-wrap: break-word;
        }

        .feature_area {
            border-bottom: 3px solid #ae0a46;
            transition: all 0.2s;
        }

        .feature_area:hover {
            border-bottom: 0px solid #ae0a46;
            border-top: 3px solid #ae0a46;
        }

        .carousel-control-prev {
            /* position: absolute; */
            left: 3%;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            padding: 6px;
            color: #fff;
            text-align: center;
            background: #ae0a46;
            border: 0;
            opacity: .5;
            transition: opacity .15s ease;
            height: 30px;
        }

        .carousel-control-next {
            /* position: absolute; */
            left: 6%;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            padding: 6px;
            color: #fff;
            text-align: center;
            background: #ae0a46;
            border: 0;
            opacity: .5;
            transition: opacity .15s ease;
            height: 30px;
        }

        .testimonial_btn {
            margin-left: 2rem;
        }

        @media only screen and (max-width: 992px) {
            .s-works {
                padding-top: 15rem;
                padding-bottom: 15rem;
            }
        }

        @media only screen and (max-width: 768px) {

            .masonry_title,
            .masonry_cat {
                font-size: 1.3rem;
            }
        }

        @media only screen and (max-width: 576px) {
            .s-works {
                padding-top: 12rem;
            }

            .masonry-wrap {
                padding: 0 35px;
            }

            .masonry_block {
                float: none;
                width: 100%;
            }

            .masonry_title,
            .masonry_cat {
                font-size: 1.4rem;
            }
        }
    </style>
    <!--======// Project Banner //======-->
    <section class="common_product_header"
        style="background-image:linear-gradient(
          rgba(0,0,0,0.8),
          rgba(0,0,0,0.8)
          ), url('https://www.teahub.io/photos/full/88-884601_web-design-wallpaper-hd.jpg');">
        <div class="container ">
            <h1>Project Title</h1>
            <p class="text-center text-white">Through our deep partnerships with trusted brands, <br> Insight offers a
                comprehensive catalog of software for business. </p>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <button class="common_button2" href="product_filters.html">View Others Project</button>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-3 col-lg-3 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('frontend/assets/images/coin.png') }}" alt="" width="60px"
                            height="60px">
                        <h6 class="text-white">Fixed Price Project</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-3 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('frontend/assets/images/back-in-time.png') }}" alt="" width="60px"
                            height="60px">
                        <h6 class="text-white">Receive One Time</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-3 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('frontend/assets/images/job-satisfaction.png') }}" alt="" width="60px"
                            height="60px">
                        <h6 class="text-white">Satisfication Client</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-3 col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('frontend/assets/images/express-delivery.png') }}" alt="" width="60px"
                            height="60px">
                        <h6 class="text-white">Fast Delivery</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--======// About Project //======-->
    <section>
        <div class="container my-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="project_image">
                        <img class="img-fluid rounded" src="https://wallpaperaccess.com/full/3425174.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 project_details_area">
                    <div class="project_description shadow-lg p-3">
                        <h1>Dada Vai</h1>
                        <p style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat minus
                            ab provident itaque recusandae voluptate culpa sed, tenetur rem illo reprehenderit consequuntur?
                            Qui reprehenderit voluptates magnam ipsa aspernatur! Optio eaque nesciunt exercitationem ab
                            tempora consequuntur distinctio commodi sint earum a. Fuga optio magni perspiciatis alias, natus
                            exercitationem eos hic. Veniam cum labore ea hic quae possimus vero, qui atque perferendis.Lorem
                            ipsum dolor sit amet consectetur adipisicing elit. Placeat minus ab provident itaque recusandae
                            voluptate culpa sed, tenetur rem illo reprehenderit consequuntur? Qui reprehenderit voluptates
                            magnam ipsa aspernatur! Optio eaque nesciunt exercitationem ab tempora consequuntur distinctio
                            commodi sint earum a. Fuga optio magni perspiciatis alias, natus exercitationem eos hic. Veniam
                            cum labore ea hic quae possimus vero, qui atque perferendis.</p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <!--BUTTON START-->
                <div class="d-flex justify-content-center align-items-center">
                    <div class="m-4">
                        <button class="common_button2" href="product_filters.html">Check Live Site</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--======// Project Gallery //======-->
    <section>
        <div class="container pb-5">
            <div class="py-3 text-center">
                <h3>
                    <span style="border-top:2px solid #ae0a46;">Pro</span>ject Gall<span
                        style="border-bottom:2px solid #ae0a46;">ery</span>
                </h3>
            </div>
            <div class="container">

                <div class="text-center mb-1">
                    <h2 class="project_card_title">Product Showcase</h2>
                    <h5>This is an example of how to display one image and then nest the other images inside a div for a
                        gallery.</h5>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">

                        <div class="masonry_block">
                            <div class="masonry-folio">
                                <div class="masonry_thum">
                                    <a href="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                        class="glightbox" data-gallery="edu-gallery"></a>
                                    <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                        class="img-fluid" alt="image" />

                                    <a href="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80"
                                        class="glightbox" data-gallery="edu-gallery"></a>

                                    <a href="https://images.unsplash.com/photo-1580582932707-520aed937b7b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2064&q=80"
                                        class="glightbox" data-gallery="edu-gallery"></a>
                                </div>

                                <div class="masonry_text">
                                    <h3 class="masonry_title">Example Title</h3>
                                    <p class="masonry_cat">Example Categories</p>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end masonry_block -->

                    <div class="col-lg-4">

                        <div class="masonry_block">
                            <div class="masonry-folio">
                                <div class="masonry_thum">
                                    <a href="https://images.unsplash.com/photo-1601807576163-587225545555?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1546&q=80"
                                        class="glightbox" data-gallery="edu-gallery2"></a>
                                    <img src="https://images.unsplash.com/photo-1601807576163-587225545555?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1546&q=80"
                                        class="img-fluid" alt="image" />

                                    <a href="https://images.pexels.com/photos/289737/pexels-photo-289737.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                        class="glightbox" data-gallery="edu-gallery2"></a>

                                    <a href="https://images.pexels.com/photos/159213/hall-congress-architecture-building-159213.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                        class="glightbox" data-gallery="edu-gallery2"></a>
                                </div>

                                <div class="masonry_text">
                                    <h3 class="masonry_title">Example Title</h3>
                                    <p class="masonry_cat">Example Categories</p>

                                </div>
                            </div>
                        </div>
                        <!-- end masonry_block -->
                    </div>

                    <div class="col-lg-4">

                        <div class="masonry_block">
                            <div class="masonry-folio">
                                <div class="masonry_thum">
                                    <a href="https://images.unsplash.com/photo-1594312915251-48db9280c8f1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                        class="glightbox" data-gallery="edu-gallery3">
                                        <img src="https://images.unsplash.com/photo-1594312915251-48db9280c8f1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                            class="img-fluid" alt="image" />
                                    </a>

                                    <a href="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80"
                                        class="glightbox" data-gallery="edu-gallery3"></a>

                                    <a href="https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                                        class="glightbox" data-gallery="edu-gallery3"></a>
                                </div>

                                <div class="masonry_text">
                                    <h3 class="masonry_title">Example Title</h3>
                                    <p class="masonry_cat">Example Categories</p>

                                </div>
                            </div>
                        </div>
                        <!-- end masonry_block -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--======// Project Feature //======-->
    <section>
        <div class="container">
            <div class="py-3">
                <h3>
                    <span style="border-top:2px solid #ae0a46;">Pro</span>ject Featu<span
                        style="border-bottom:2px solid #ae0a46;">res</span>
                </h3>
            </div>
            <div class="row py-5">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="shadow-lg p-3 rounded feature_area">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/coin.png') }}" alt="">
                        <div class="project_feature">
                            <h5>Product</h5>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, culpa
                                aliquam ipsam consequuntur </pc>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="shadow-lg p-3 rounded feature_area">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/coin.png') }}" alt="">
                        <div class="project_feature">
                            <h5>Product</h5>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, culpa
                                aliquam ipsam consequuntur </pc>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="shadow-lg p-3 rounded feature_area">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/coin.png') }}" alt="">
                        <div class="project_feature">
                            <h5>Product</h5>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, culpa
                                aliquam ipsam consequuntur </pc>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="shadow-lg p-3 rounded feature_area">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/coin.png') }}" alt="">
                        <div class="project_feature">
                            <h5>Product</h5>
                            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, culpa
                                aliquam ipsam consequuntur </pc>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
    <!--======//Client Sayes About Project//======-->
    <section>
        <div class="container">
            <div class="py-3 text-center">
                <h3>
                    <span style="border-top:2px solid #ae0a46;">Cli</span>ent Say About Proj<span
                        style="border-bottom:2px solid #ae0a46;">ect</span>
                </h3>
            </div>
            <div class="row">
                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                    data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container mt-5 mb-5">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <div class="card p-3 text-center px-4 border-0 shadow-sm">
                                            <div class="user-image">
                                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                                    class="rounded-circle" width="80">
                                            </div>
                                            <div class="user-content">
                                                <h5 class="mb-0">Bruce Hardy</h5>
                                                <span>Software Developer</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                            </div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card p-3 text-center px-4 border-0 shadow-sm">
                                            <div class="user-image">
                                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                                    class="rounded-circle" width="80">
                                            </div>
                                            <div class="user-content">
                                                <h5 class="mb-0">Bruce Hardy</h5>
                                                <span>Software Developer</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                            </div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card p-3 text-center px-4 border-0 shadow-sm">
                                            <div class="user-image">
                                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                                    class="rounded-circle" width="80">
                                            </div>
                                            <div class="user-content">
                                                <h5 class="mb-0">Bruce Hardy</h5>
                                                <span>Software Developer</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                            </div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container mt-5 mb-5">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <div class="card p-3 text-center px-4 border-0 shadow-sm">
                                            <div class="user-image">
                                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                                    class="rounded-circle" width="80">
                                            </div>
                                            <div class="user-content">
                                                <h5 class="mb-0">Bruce Hardy</h5>
                                                <span>Software Developer</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                            </div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card p-3 text-center px-4">
                                            <div class="user-image">
                                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                                    class="rounded-circle" width="80">
                                            </div>
                                            <div class="user-content">
                                                <h5 class="mb-0">Mark Smith</h5>
                                                <span>Web Developer</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                            </div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card p-3 text-center px-4 border-0 shadow-sm">
                                            <div class="user-image">
                                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                                                    class="rounded-circle" width="80">
                                            </div>
                                            <div class="user-content">
                                                <h5 class="mb-0">Bruce Hardy</h5>
                                                <span>Software Developer</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo consequat.</p>
                                            </div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_btn">
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon text-black" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->
@endsection
