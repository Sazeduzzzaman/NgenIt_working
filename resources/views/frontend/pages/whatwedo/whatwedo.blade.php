@extends('frontend.master')
@section('content')
    <div class="masthead">
        <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-7 py-5">
            <h1 class="mb-4">Achieve your ambitious IT goals with NGen It.</h1>
            <p class="text-white w-75" style="text-align: justify;">Guidance and support from true industry experts for the road ahead on your IT transformation journey experts for the road ahead on your IT. Support from true industry experts so hurry</p>
            <button class="common_button3 " href="#">Talk To Us</button>
            </div>
            <div class="col-lg-5">
            <div class="py-5 px-4 masthead-cards">
                <div class="d-flex">
                <a href="{{route('hardware.info')}}" class="w-50 pr-3 pb-4">
                    <div class="card border-0 border-bottom-red shadow-lg shadow-hover">
                    <div class="card-body text-center">
                        <div class="text-center">
                        <!-- <i class="fa-lightbulb-o "></i> -->
                        <!-- <i class="fa-duotone fa-lightbulb-on "></i> -->
                        <i class="fa-thin fa-lightbulb-on fa-4x my-2"></i>
                        </div> Hardware
                    </div>
                    </div>
                </a>
                <a href="{{route('software.info')}}" class="w-50 pl-3 pb-4">
                    <div class="card border-0 border-bottom-blue shadow-lg shadow-hover">
                    <div class="card-body text-center">
                        <div class="text-center">
                        <i class="fa-thin fa-layer-group fa-4x my-2"></i>
                        </div> Software
                    </div>
                    </div>
                </a>
                </div>
                <div class="d-flex">
                <a href="#" class="w-50 pr-3">
                    <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover">
                    <div class="card-body text-center">
                        <div class="text-center">
                        <i class="fa-thin fa-pen-nib fa-code fa-4x my-2"></i>
                        </div> Industry
                    </div>
                    </div>
                </a>
                <a href="#" class="w-50 pl-3">
                    <div class="card border-0 border-bottom-green shadow-lg shadow-hover">
                    <div class="card-body text-center">
                        <div class="text-center">
                        <i class="fa-thin fa-cart-plus fa-4x my-2"></i>
                        </div> Solutions
                    </div>
                    </div>
                </a>
                </div>
                <div class="shape"></div>
            </div>
            </div>
        </div>
        </div>
        <svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
        <defs>
            <style>
            .a{
                fill: none;
            }

            .b {
                clip-path: url(#a);
            }

            .c,
            .d {
                fill: #f9f9fc;
            }

            .d{
                opacity: 0.5;
                isolation: isolate;
            }
            </style>
            <clipPath id="a">
            <rect class="a" width="1920" height="75"></rect>
            </clipPath>
        </defs>
        <title>wave</title>
        <g class="b">
            <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
        </g>
        <g class="b">
            <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
        </g>
        <g class="b">
            <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
        </g>
        <g class="b">
            <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
        </g>
        </svg>
    </div>
  <!--======// Services tab //======-->
  <section>
    <div class="container">
      <div class="pt-5">
        <h5 class="home_title_heading" style="text-align: left;">
          <div class="software_feature_title">
            <h1 class="text-center text-capitalize pb-3">
              <span>W</span>e help clients
            </h1>
          </div>
        </h5>
        <p class="text-center">With us, you get access to deep expertise, broad capabilities <br> and unmatched scale as a leading solutions integrator </p>
      </div>
      <div class="row pt-5 pb-5">
        <div class="col-lg-6 col-md-6" col-sm-12>
          <div>
            <img class="img-fluid" src="images/what_we_do/consulting_services.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6" col-sm-12>
          <div class="what-we-do_side_text">
            <h1 class="pb-4" style="line-height: 10px !important;">Consulting services</h1>
            <p>Navigate the complexities of your IT ecosystem with confidence. Our technical experts and technology specialists are equipped with partner certifications, industry knowledge and deep expertise to guide you along the way.</p>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="">
                  <p class="text-center shadow p-4 service_card">
                    <i class="fa-thin fa-database"></i> Data center
                  </p>
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="">
                  <p class="text-center shadow p-4 service_card">
                    <i class="fa-thin fa-cloud-arrow-up"></i> Cloud
                  </p>
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="">
                  <p class="text-center shadow p-4 service_card">
                    <i class="fa-thin fa-database"></i> Security
                  </p>
                </a>
              </div>
            </div>
            <div class="row pb-3 pt-1">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="">
                  <p class="text-center shadow p-4 service_card">
                    <i class="fa-thin fa-computer"></i> IT
                  </p>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="">
                  <p class="text-center shadow p-4 service_card">
                    <i class="fa-thin fa-wand-sparkles"></i> Automation
                  </p>
                </a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="">
                  <p class="text-center shadow p-4 service_card">
                    <i class="fa-thin fa-cloud-arrow-up"></i> Others
                  </p>
                </a>
              </div>
            </div>
            <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
          </div>
        </div>
      </div>
      <!-- Managed Service Start -->
      <div class="row pt-5 pb-5">
        <div class="col-lg-6 col-md-6" col-sm-12>
          <div class="what-we-do_side_text">
            <h1 class="pb-4" style="line-height: 10px !important;">Managed services</h1>
            <p>Navigate the complexities of your IT ecosystem with confidence. Our technical experts and technology specialists are equipped with partner certifications, industry knowledge and deep expertise to guide you along the way.</p>
            <div class="ml-4">
              <ul class="" style="list-style-type: circle !important;">
                <li class="">As a service</li>
                <li class="">Managed storage, backup and recovery</li>
                <li class="">Managed cloud, network and compute</li>
                <li class="">Managed support</li>
                <li class="">Insight Cloud Care</li>
              </ul>
            </div>
            <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6" col-sm-12>
          <div>
            <img class="img-fluid" src="images/what_we_do/managed.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- Managed Service end -->
      <!-- Hardware Service Start -->
      <div class="row pt-5 pb-5">
        <div class="col-lg-6 col-md-6" col-sm-12>
          <div>
            <img class="img-fluid" src="images/what_we_do/Hardware.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6" col-sm-12>
          <div class="what-we-do_side_text">
            <h1 class="pb-4 pt-0" style="line-height: 40px !important;">Hardware, software and lifecycle services</h1>
            <p>Navigate the complexities of your IT ecosystem with confidence. Our technical experts and technology specialists are equipped with partner certifications, industry knowledge and deep expertise to guide you along the way.</p>
            <div class="ml-4">
              <ul class="" style="list-style-type: circle !important;">
                <li class="">As a service</li>
                <li class="">Managed storage, backup and recovery</li>
                <li class="">Managed cloud, network and compute</li>
                <li class="">Managed support</li>
                <li class="">Insight Cloud Care</li>
              </ul>
            </div>
            <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
          </div>
        </div>
      </div>
      <!-- Managed Service end -->
    </div>
  </section>
  <!----------End--------->
  <!--=====// Blog //=====-->

  <!---------End -------->
  <!--=====// Blog Main section //=====-->
  <!-- <div class="container pt-4">
    <h5 class="home_title_heading" style="text-align: left;">
      <div class="software_feature_title">
        <h1 class="text-center text-capitalize pb-3">
          <span>Our</span> Blogs
        </h1>
      </div>
    </h5>
    <div class="row pb-5">
      <div class="col-md-3">
        <div class="profile-card-4 text-center">
          <img src="https://images.unsplash.com/photo-1678106741653-455a43825002?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img img-responsive">
          <div class="profile-content">
            <div class="profile-name">John Doe <p>@johndoedesigner</p>
            </div>
            <div class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</div>
            <div class="row">
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>TWEETS</p>
                  <h4>1300</h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>FOLLOWERS</p>
                  <h4>250</h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>FOLLOWING</p>
                  <h4>168</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="profile-card-4 text-center">
          <img src="https://images.unsplash.com/photo-1678106741653-455a43825002?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img img-responsive">
          <div class="profile-content">
            <div class="profile-name">John Doe <p>@johndoedesigner</p>
            </div>
            <div class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</div>
            <div class="row">
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>TWEETS</p>
                  <h4>1300</h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>FOLLOWERS</p>
                  <h4>250</h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>FOLLOWING</p>
                  <h4>168</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="profile-card-4 text-center">
          <img src="images/what_we_do/blog-main_1.webp" class="img img-responsive">
          <div class="profile-content">
            <div class="profile-name">John Doe <p>@johndoedesigner</p>
            </div>
            <div class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</div>
            <div class="row">
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>TWEETS</p>
                  <h4>1300</h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>FOLLOWERS</p>
                  <h4>250</h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>FOLLOWING</p>
                  <h4>168</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="profile-card-4 text-center">
          <img src="https://images.unsplash.com/photo-1601639380477-fee6528edd4f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=975&q=80" class="img img-responsive img-fluid">
          <div class="profile-content">
            <div class="profile-name">John Doe <p>@johndoedesigner</p>
            </div>
            <div class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</div>
            <div class="row">
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>TWEETS</p>
                  <h4>1300</h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>FOLLOWERS</p>
                  <h4>250</h4>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="profile-overview">
                  <p>FOLLOWING</p>
                  <h4>168</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
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
                    <div class="app-contact main_color display-5">CONTACT INFO : +88 01714243446</div>
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
@endsection
