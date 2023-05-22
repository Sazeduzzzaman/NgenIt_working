@extends('frontend.master')
@section('content')
    <style>
        .responsive-map {
            overflow: hidden;
            padding-bottom: 30%;
            position: relative;
            height: 0;
        }

        .responsive-map iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        /* Office Location */
        .section1 {
            text-align: center;
            display: table;
            width: 100%;
        }

        .section1 .shtext {
            display: block;
            margin-top: 20px;
        }

        .section1 .seperator {
            border-bottom: 1px solid #a2a2a2;
            width: 35px;
            display: inline-block;
            margin: 20px;
        }

        .section1 h1 {
            font-size: 40px;
            color: #ae0a46;
            font-weight: normal;
        }

        .section2 {
            width: 1200px;
            margin: 25px auto;
        }

        .section2 .col2 {
            width: 48.71%;
        }

        .section2 .col2.first {
            float: left;
        }

        .section2 .col2.last {
            float: right;
        }

        .section2 .col2.column2 {
            padding: 0 30px;
        }

        .section2 span.collig {
            color: #a2a2a2;
            margin-right: 10px;
            display: inline-block;
        }

        .section2 .sec2addr {
            display: block;
            line-height: 26px;
        }

        .section2 .sec2addr p:first-child {
            margin-bottom: 10px;
        }

        .section2 .sec2contactform input[type="text"],
        .section2 .sec2contactform input[type="email"],
        .section2 .sec2contactform textarea {
            padding: 18px;
            border: 0;
            background: #EDEDED;
            margin: 7px 0;
        }

        .section2 .sec2contactform textarea {
            width: 100%;
            display: block;
            color: #666;
            resize: none;
        }

        .section2 .sec2contactform input[type="submit"] {
            padding: 15px 40px;
            color: #fff;
            border: 0;
            background: #ae0a46;
            font-size: 16px;
            text-transform: uppercase;
            margin: 7px 0;
            cursor: pointer;
        }

        .section2 .sec2contactform h3 {
            font-weight: normal;
            margin: 20px 0;
            margin-top: 30px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 19px;
            color: #ae0a46;
        }

        input:focus-visible {
            outline: 2px solid crimson;
            border-radius: 3px;
        }

        textarea:focus-visible {
            outline: 2px solid crimson;
            border-radius: 3px;
        }

        /* @media querries */

        @media only screen and (max-width: 1266px) {
            .section2 {
                width: 100%;
            }
        }

        @media only screen and (max-width: 960px) {
            .container {
                padding: 0 30px 70px;
            }

            .section2 .col2 {
                width: 100%;
                display: block;
            }

            .section2 .col2.first {
                margin-bottom: 10px;
            }

            .section2 .col2.column2 {
                padding: 0;
            }

            body .sec2map {
                height: 250px !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .section2 .sec2addr {
                font-size: 14px;
            }

            .section2 .sec2contactform h3 {
                font-size: 16px;
            }

            .section2 .sec2contactform input[type="text"],
            .section2 .sec2contactform input[type="email"],
            .section2 .sec2contactform textarea {
                padding: 10px;
                margin: 3px 0;
            }

            .section2 .sec2contactform input[type="submit"] {
                padding: 10px 30px;
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 420px) {
            .section1 h1 {
                font-size: 28px;
            }
        }
    </style>

    <!--======// Header Title //======-->
    <section>
        <div class="d-sm-flex align-items-center justify-content-between w-100">
            <div class="col-md-4 mx-auto mb-4 mb-sm-0 headlines">
                <h1 class="display-4 my-4 font-weight-bold">NG<span style="color: #ae0a46;">en IT</span>
                </h1>
                <p> It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. </p>
                <div class="btn_left">
                    <a class="theme-btn one" href="/about-us#">Read More</a>
                </div>
            </div>
            <!-- in mobile remove the clippath -->
            <div class="col-md-8 h-100 clipped"
                style="min-height: 350px; background-image: url(https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80); background-position: center; background-size: cover;">
            </div>
        </div>
    </section>
    <!----------End--------->
    <section>
        <div class="container">
            <div class="row d-flex align-items-center">
                <span class="text-start pt-3 mb-3 d-flex align-items-center" style="border-bottom: 1px solid #ae0a46; font-size: 20px;">
                   <img class="img-fluid" src="https://i.ibb.co/D7kW001/Screenshot-4.png" width="30px" height="30px" alt=""> <span>Brif History</span>
                </span>

                <div class="col-lg-6 mt-3">
                    <img class="img-fluid"
                        src="https://macnelsvietnam.com/wp-content/uploads/2021/07/about-bg-1.png"
                        alt="">
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <h2>Our Brif History</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam facilis similique, at perspiciatis
                            et nesciunt sint harum ipsa quo ut non odit voluptates minus quos aliquid possimus distinctio
                            quaerat! Labore.Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam facilis
                            similique, at perspiciatis et nesciunt sint harum ipsa quo ut non odit voluptates minus quos
                            aliquid possimus distinctio quaerat! Labore.Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Totam facilis similique, at perspiciatis et nesciunt sint harum ipsa quo ut non odit
                            voluptates minus quos aliquid possimus distinctio quaerat! Labore.</p>
                        <div class="btn_left">
                            <a class="theme-btn one" href="/about-us#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row d-flex align-items-center">
                <span class="text-end pt-3  mb-3 d-flex align-items-center justify-content-end" style="border-bottom: 1px solid #ae0a46; font-size: 20px;">
                    <img class="img-fluid" src="https://i.ibb.co/D7kW001/Screenshot-4.png" width="30px" height="30px" alt=""> 
                    <span>Mission & Vission</span>
                 </span>
                <div class="col-lg-6">
                    <div class="text-end">
                        <h2>This is Title Here!</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam facilis similique, at perspiciatis
                            et nesciunt sint harum ipsa quo ut non odit voluptates minus quos aliquid possimus distinctio
                            quaerat! Labore.Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam facilis
                            similique, at perspiciatis et nesciunt sint harum ipsa quo ut non odit voluptates minus quos
                            aliquid possimus distinctio quaerat! Labore.Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Totam facilis similique, at perspiciatis et nesciunt sint harum ipsa quo ut non odit
                            voluptates minus quos aliquid possimus distinctio quaerat! Labore.</p>
                        <div class="btn_left">
                            <a class="theme-btn one" href="/about-us#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <img class="img-fluid"
                        src="https://www.proinfoedu.com/wp-content/uploads/2020/06/vision-mission.png"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!--======// CEO Details Section //======-->
    <section>
        <div class="call_to_action" style="background-image: url(images/hardware/calltoaction.jpg);">
            <div class="container">
                <!-- about seo -->
                <div class="about_seo_wrapper">
                    <!-- image -->
                    <div class="about_seo_imgage">
                        <img src="https://www.millicom.com/media/5004/odilon-almeida-fg.png" alt="">
                    </div>
                    <!-- content -->
                    <div class="about_seo_content">
                        <div class="about_seo_text">
                            <h4 class="text-black">Our goal at NGen IT is to make meaningful connections that positively
                                impact the lives of
                                the people we serve, including our clients, partners and teammates.</h4>
                            <span class="text-black">Md Rasel sir</span> <br>
                            <span class="text-black fw-bold">CEO NGenit</span>
                            <div class="pt-5">
                                <a href="" class="product_button">Meet our leadership</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-3">
            <div class="row d-flex align-items-center">
                <div class="row d-flex align-items-center">
                    <span class="text-start pt-3  mb-3 d-flex align-items-center justify-content-start" style="border-bottom: 1px solid #ae0a46; font-size: 20px;">
                        <img class="img-fluid" src="https://i.ibb.co/D7kW001/Screenshot-4.png" width="30px" height="30px" alt=""> 
                        <span>Our Local Clients</span>
                     </span>
                <div class="col-lg-8">
                    <div class="text-start">
                        <h2>This is Title Here!</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Totam facilis similique, at perspiciatis et nesciunt sint harum ipsa quo ut non odit voluptates
                            minus quos aliquid possimus distinctio quaerat! Labore.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Totam facilis similique, at perspiciatis et nesciunt sint harum ipsa quo ut non odit voluptates
                            minus quos aliquid.</p>
                    </div>
                </div>
                <div class="col-lg-2 mt-3">
                    <img class="img-fluid shadow-lg rounded"
                        src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                        alt="">
                </div>
                <div class="col-lg-2 mt-3">
                    <div class="btn_left">
                        <a class="theme-btn one" href="/about-us#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------End--------->

    <!--======// Location Area End //======-->
    <div class="accordion">
        <div class="item bg-barcelona">
            <a href="">
                <div class="overlay">
                    <div class="overlay-inner">
                        <div class="row d-flex justify-content-center align-items-center " style="height: 100vh;">
                            <h2 class="text-white text-center">Software Development</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="item bg-sydney">
            <a href="">
                <div class="overlay">
                    <div class="overlay-inner">
                        <div class="row d-flex justify-content-center align-items-center " style="height: 100vh;">
                            <h2 class="text-white text-center">Software Development</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="item bg-venice">
            <a href="">
                <div class="overlay">
                    <div class="overlay-inner">
                        <div class="row d-flex justify-content-center align-items-center " style="height: 100vh;">
                            <h2 class="text-white text-center">Software Development</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="item bg-singapore">
            <a href="">
                <div class="overlay">
                    <div class="overlay-inner">
                        <div class="row d-flex justify-content-center align-items-center " style="height: 100vh;">
                            <h2 class="text-white text-center">Software Development</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="item bg-san-francisco">
            <a href="">
                <div class="overlay">
                    <div class="overlay-inner">
                        <div class="row d-flex justify-content-center align-items-center " style="height: 100vh;">
                            <h2 class="text-white text-center">Software Development</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--======// Office Location Area Area Start //======-->
    {{-- <section class="section_padding">
        <div class="container">
            <div class="innerwrap">
                <section class="section1 clearfix">
                    <div class="text-center">
                        <span class="shtext">Contact Us</span>
                        <span class="seperator"></span>
                        <h1>Drop Us a Mail</h1>
                    </div>
                </section>

                <section class="section2 clearfix">
                    <div class="col2 column1 first">
                        <div class="sec2map" style='overflow:hidden;width:100%;'>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8480133610137!2d90.38217687425885!3d23.752798688686337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a568a70445%3A0x89dff0189e12966d!2sNGen%20IT!5e0!3m2!1sen!2sbd!4v1684563323024!5m2!1sen!2sbd"
                                width="600" frameborder="0" style="border:0; height: 675px;" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col2 column2 last">
                        <div class="sec2innercont">
                            <div class="sec2addr">
                                <p><span class="collig">Address :</span>Haque Chamber
                                    (11 floor - C&D) 89/2,<br> Panthapath, Dhaka-1215</p>
                                <p><span class="collig">Phone :</span> +88 01714243446</p>
                                <p><span class="collig">Email :</span> sales@ngenitltd.com</p>
                                <p><span class="collig">Call-Support :</span> +88 01714243446</p>
                            </div>
                        </div>
                        <div class="sec2contactform">
                            <h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
                            <form action="">
                                <div class="clearfix">
                                    <input class="col2 first" type="text" placeholder="FirstName">
                                    <input class="col2 last" type="text" placeholder="LastName">
                                </div>
                                <div class="clearfix">
                                    <input class="col2 first" type="Email" placeholder="Email">
                                    <input class="col2 last" type="text" placeholder="Contact Number">
                                </div>
                                <div class="clearfix">
                                    <textarea name="textarea" id="" cols="30" rows="6">Your message here...</textarea>
                                </div>
                                <div class="clearfix"><button class="common_button2" type="submit">Send
                                        Massages</button>
                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </section> --}}
    <!--======//Office Location Area End //======-->


    <!--=======// Blog Feature Section Start//=========-->
    <section class="related_posts_wrapper">
        <div class="container">
            <div class="related_posts_title">
                <h1 class="text-center">Featured content</h1>
            </div>

            <div class="row">
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="">
                            <img class="img-fluid"
                                src="https://thumbs.dreamstime.com/b/laptop-computer-blog-web-page-screen-technology-business-mass-media-internet-modern-life-concept-close-up-open-75012601.jpg"
                                alt="">
                            <h4>Solution brief</h4>
                            <h3><strong>Why Insight for Microsoft Cloud</strong></h3>
                        </a>

                    </div>
                </div>
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="">
                            <img class="img-fluid"
                                src="https://thumbs.dreamstime.com/b/laptop-computer-blog-web-page-screen-technology-business-mass-media-internet-modern-life-concept-close-up-open-75012601.jpg"
                                alt="">
                            <h4>Solution brief</h4>
                            <h3><strong>Why Insight for Microsoft Cloud</strong></h3>
                        </a>

                    </div>
                </div>
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="">
                            <img class="img-fluid"
                                src="https://thumbs.dreamstime.com/b/laptop-computer-blog-web-page-screen-technology-business-mass-media-internet-modern-life-concept-close-up-open-75012601.jpg"
                                alt="">
                            <h4>Solution brief</h4>
                            <h3><strong> Why Insight for Microsoft Cloud</strong></h3>
                        </a>

                    </div>
                </div>
                <!--------item------->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="">
                            <img class="img-fluid"
                                src="https://thumbs.dreamstime.com/b/laptop-computer-blog-web-page-screen-technology-business-mass-media-internet-modern-life-concept-close-up-open-75012601.jpg"
                                alt="">
                            <h4>FSolution brief</h4>
                            <h3> <strong> Why Insight for Microsoft Cloud</strong></h3>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--=======// Blog Feature Section End//=========-->

    <!--=====// Pageform section //=====-->
    <section class=" solution_contact_wrapper">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 col-sm-12">
                    <div class="thing_together_wrapper">
                        <h4>
                            <span class="why_Choose_lineTop">L</span>et’s do big things together.
                        </h4>
                        <p>Get assistance with tracking an order, requesting a quote, contacting your account representative
                            and more by phone or over chat.</p>
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

<script>
    $(document).ready(function() {
        $('.counter-value').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 3500,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });
</script>
