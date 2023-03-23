@extends('frontend.master')
@section('content')
<style>
    ul li {
      list-style-type: none;
    }
  </style>
  <!--======// Header Title //======-->
  <section class="common_product_header" style="background-image: url('asset('frontend/images/softwer-banner.jpg')');">
    <div class="container">
      <div class="">
        <h1>{{$industry->title}}</h1>
        <h3>{{$industry->header}}</h3>
      </div>
      <div class="d-flex justify-content-center">
        <a class="common_button2" href="#Contact">Hear from our team</a>
      </div>
    </div>
  </section>
  <!----------End--------->
  <!--======// Modern finance //======-->
  <section class="container section_padding">
    <div class="row">
      <div class="col-lg-7 col-sm-12">
        <div class="section_text_wrapper">
          <h4>Modern finance and accounting solutions</h4>
          <p style="text-align: justify;">Advanced solutions — from big data to modern infrastructure — are changing the way the financial services industry operates. Early adopters are gaining a competitive edge as they transform legacy applications and processes.</p>
          <p>Modernize your business with agile, flexible and secure financial technology solutions that grow the business and fit customer needs. Leveraging our technical expertise and end-to-end services will propel your organization into the future.</p>
        </div>
      </div>
      <div class="col-lg-5 col-sm-12">
        <div class="industry_single_help_list">
          <h5>We can help you with:</h5>
          <ul>
            <li class="d-flex">
              <div class="mr-2">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg>
              </div>
              <div>Sourcing and adopting financial services hardware and software</div>
            </li>
            <li class="d-flex">
                <div class="mr-2">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg>
                  </div>
              <div> Building applications that leverage big data and Artificial Intelligence (AI)</div>
            </li>
            <li class="d-flex">
                <div class="mr-2">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg>
                  </div>
              <div>IT infrastructure modernization</div>
            </li>
            <li class="d-flex">
                <div class="mr-2">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg>
                  </div>
              <div>Device and collaboration management</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!----------End--------->
  <!--======// Solution feature //======-->
  <section class="section_wp">
    <div class="container">
      <!--title-->
      <div class="section_text_wrapper">
        <h3 class="section_title">Making smart decisions</h3>
        <p class="text-center" style="padding:0px 20%;">We use an iterative design approach to create solutions that empower workers, improve products, optimize operations and strengthen customer relationships.</p>
      </div>
      <!--Content Wrapper-->
      <div class="row d-flex justify-content-center pt-3">
        <div class="col-lg-2 col-md-6">
          <div class="product_veiw_details_item_image">
            <img src="{{asset('frontend')}}/images/single-page/product_details/image1.png" alt="" width="150px" height="150px">
          </div>
          <!-- content -->
          <div class="product_veiw_details_item_content">
            <p class="text-center" style="font-size: 20px; margin: 4px 0px;">Data and AI</p>
            <p class="text-center" style="font-size: 15px;">Use smart technology powered by AI and machine learning to monitor trends</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="product_veiw_details_item_image">
            <img src="{{asset('frontend')}}/images/single-page/product_details/image2.png" alt="" width="150px" height="150px">
          </div>
          <!-- content -->
          <div class="product_veiw_details_item_content">
            <p class="text-center" style="font-size: 20px; margin: 4px 0px;">Smart spaces</p>
            <p class="text-center" style="font-size: 15px;">Gather and analyze data from smart devices — including sensors, cameras</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <!-- image -->
          <div class="product_veiw_details_item_image">
            <img src="{{asset('frontend')}}/images/single-page/product_details/image3.png" alt="" width="150px" height="150px">
          </div>
          <!-- content -->
          <div class="product_veiw_details_item_content">
            <p class="text-center" style="font-size: 20px; margin: 4px 0px;">Modern apps</p>
            <p class="text-center" style="font-size: 15px;">Adopt the latest software capabilities by modernizing dated systems </p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="product_veiw_details_item_image">
            <img src="{{asset('frontend')}}/images/single-page/product_details/image3.png" alt="" width="150px" height="150px">
          </div>
          <!-- content -->
          <div class="product_veiw_details_item_content">
            <p class="text-center" style="font-size: 20px; margin: 4px 0px;">IoT</p>
            <p class="text-center" style="font-size: 15px;">The Internet of Things (IoT) can transform your operations by improving how you</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="product_veiw_details_item_image">
            <img src="{{asset('frontend')}}/images/single-page/product_details/image2.png" alt="" width="150px" height="150px">
          </div>
          <!-- content -->
          <div class="product_veiw_details_item_content">
            <p class="text-center" style="font-size: 20px; margin: 4px 0px;">Transformation </p>
            <p class="text-center" style="font-size: 15px;">Invest in staff skills and support technology adoptions with our Agile</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----------End--------->
  <!--======// Gradian Background //======-->
  <section class="integrated_security">
    <div class="container">
      <div class="call_to_action_text text-black">
        <h4 class="section_title text-black">Robust and integrated security</h4>
        <p class="text-black">Security is considered at every step when you choose Insight. The result is a solution aligned to strong cybersecurity and regulatory best practices and an understanding of who owns and can access internal data.</p>
      </div>
    </div>
  </section>
  <!----------End--------->
  <!--=======// Building resilient IT //=====-->
  <section class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12 account_benefits_section">
          <h3>Building resilient IT infrastructure</h3>
          <p>Your customers expect their data to be protected from breaches and natural disasters. Any IT system your organization uses also needs to meet current and future technology demands. We’ll help you achieve business agility while maintaining the highest levels of security.</p>
          <ul class="p-0">
              <li class="d-flex">
                <div class="mr-2">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg>
                </div>
                <div>Preserve data and restore it fast with a disaster recovery strategy.</div>
              </li>
              <li class="d-flex">
                <div class="mr-2">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg>
                </div>
                <div>
                    Align workloads to best-fit platforms.
                </div>
            </li>
            <li class="d-flex">
                <div class="mr-2">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg>
                </div>
                <div>
                Ensure a successful migration.
            </div>
            </li>
            <li class="d-flex">
                <div class="mr-2">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"> <path fill="#AE1D48" d="M10.673,19.721c-0.372,0.372-0.975,0.372-1.347,0l-9.048-9.048c-0.372-0.372-0.372-0.975,0-1.346 l9.048-9.048c0.372-0.372,0.975-0.372,1.347,0l9.048,9.048c0.372,0.372,0.372,0.974,0,1.346L10.673,19.721z"/> </svg>
                </div>
                <div>
                    Relieve IT teams, so they can focus on innovation.
                </div>
            </li>
          </ul>
          <button href="" class="common_button mt-4 mb-4">Learn more</button>
        </div>
        <div class="col-lg-6 col-sm-12">
          <img class="img-fluid" src="{{asset('frontend')}}/images/account_benifit/account_benifits_flow (4).jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-------------End--------->
  <!--======// Solution feature //======-->
  <section class="section_wp">
    <div class="container">
      <!--title-->
      <div class="section_text_wrapper">
        <h3 class="section_title">Get the devices and financial software you need.</h3>
        <p class="text-center" style="padding:0px 20%;">Providing your staff cutting-edge technology is essential to staying relevant and competitive. Acquire and manage the solutions you need without complicating IT or breaking the budget.</p>
      </div>
      <!--Content Wrapper-->
      <div class="row mt-4">
        <!-- item -->
        <div class="col-lg-4 col-sm-12 product_veiw_details_item">
          <!-- image -->
          <div class="product_veiw_details_item_image">
            <img src="{{asset('frontend')}}/images/single-page/product_details/image1.png" alt="" width="150px" height="150px">
          </div>
          <!-- content -->
          <div class="product_veiw_details_item_content">
            <p style="font-size: 20px; margin: 4px 0px;">Technology procurement</p>
            <p style="font-size: 15px;">myInsight streamlines hardware, software and cloud purchasing and reporting by providing easy-to-use tools through a single, customizable procurement portal.</p>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-sm-12 product_veiw_details_item">
          <!-- image -->
          <div class="product_veiw_details_item_image">
            <img src="{{asset('frontend')}}/images/single-page/product_details/image2.png" alt="" width="150px" height="150px">
          </div>
          <!-- content -->
          <div class="product_veiw_details_item_content">
            <p style="font-size: 20px; margin: 4px 0px;">Software solutions and services</p>
            <p style="font-size: 15px;">Whether you need to optimize your portfolio, control license provisioning, handle renewals or pass publisher audits, we’ll help you manage your entire software lifecycle.</p>
          </div>
        </div>
        <!-- item -->
        <div class="col-lg-4 col-sm-12 product_veiw_details_item">
          <!-- image -->
          <div class="product_veiw_details_item_image">
            <img src="{{asset('frontend')}}/images/single-page/product_details/image3.png" alt="" width="150px" height="150px">
          </div>
          <!-- content -->
          <div class="product_veiw_details_item_content">
            <p style="font-size: 20px; margin: 4px 0px;">IT asset management</p>
            <p style="font-size: 15px;">Smart lifecycle management takes a comprehensive approach. We’ll support you with end-to-end deployment, maintenance, warranty and disposition services.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----------End--------->
  <!--======// Solution feature //======-->
  <section class="account_benefits_section_wp">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <img class="img-fluid" src="{{ asset('storage/' . $techglossy->image) }}" alt="{{$techglossy->badge}}" style="height: 350px;">
        </div>
        <div class="col-lg-6 col-sm-12 account_benefits_section">
          <h5>{{$techglossy->badge}}</h5>
          <p>{{$techglossy->title}}</p>
          <a href="{{route('shop')}}" class="common_button">Shop Now</a>
        </div>
      </div>
    </div>
  </section>
  <br>
  <!-------------End--------->
  <!--======// Featured content //======-->
  <section class="related_posts_wrapper">
    <div class="container">
      <div class="related_posts_title">
        <h1 class="text-center">Featured content</h1>
      </div>
      <div class="row">
        <!--------item-------> @foreach ($storys as $item) <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="related-item">
            <a href="">
              <img class="img-fluid" src="{{ asset('storage/requestImg/' . $item->image) }}" alt="" style="height: 190px; ">
              <h4>{{$item->badge}}
                </h6>
                <h3>
                  <strong>{{$item->title}}</strong>
                </h3>
            </a>
          </div>
        </div> @endforeach
      </div>
    </div>
  </section>
  <!-------------End--------->
  @endsection
























