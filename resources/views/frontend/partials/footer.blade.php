@php
    $setting=App\Models\Admin\Setting::first();
@endphp
<footer class="container-fluid p-0" style="background: #222222;">
    <!-- footyer gradient -->
    <div class="footer_top">
      <p class="">We deliver Insight Intelligent Technology Solutions™ expertise.</p>
    </div>
    <!-- main footer -->
    <div class="footer_middle">

    <div class="container">
      <div class="row">
        <div class="row footer_middle_wrapper">
          <!-- item -->
          <div class="col-lg-4 col-md-8 col-sm-12 footer_item_wrapper">
            <!-- title -->
            <h6>Newsletter</h6>
            <!-- text -->
            <p class="home_title_text pt-2">Sign up to receive the IT content that matters most to you. You can update your preferences or unsubscribe any time.</p>
            <!-- button -->
            <form id="myform" action="{{route('newsletter.store')}}" method="post" enctype="multipart/form-data">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Enter your email">
              <span class="input-group-btns">
                <button class="btns effect01" type="submit" style="line-height: 32px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">Subscribe Now</button>
              </span>
            </form>
            </div>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
            <!-- title -->
            <h6 class="home_title_text" style="text-align: start;">About NgenIt</h6>
            <!-- nav list -->
            <div class="footer_nav_list">
                <ul>
                    <li><a href="">Company overview</a></li>
                    <li><a href="">Principal</a></li>
                    <li><a href="{{ route('all.brand') }}">Partners</a></li>
                    <li><a href="">Clients</a></li>
                </ul>
            </div>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
            <!-- title -->
            <h6 class="home_title_text" style="text-align: start;">Products & Services</h6>
            <!-- nav list -->
            <div class="footer_nav_list">
              <ul>
                <li><a href="{{ route('shop.html') }}">Products</a></li>
                        <li><a href="{{ route('all.brand') }}">Partners</a></li>
                        {{-- <li><a href="">Services</a></li> --}}
                        {{-- <li><a href="">Solutions</a></li> --}}
                        <li><a href="{{ route('all.industry') }}">Industry</a></li>
              </ul>
            </div>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
            <!-- title -->
            <h6 class="home_title_text" style="text-align: start;">Features & Knowledge </h6>
            <!-- nav list -->
            <div class="footer_nav_list">
              <ul>
                <li>
                    <a href="{{route('all.story')}}">Client Story</a>
                </li>
                        <li>
                            <a href="{{ route('client.login') }}">NGEN IT Client Account</a>
                        </li>
                        <li>
                            <a href="{{ route('partner.login') }}">NGEN IT Partner Account</a>
                        </li>
                        <li>
                            <a href="{{route('all.blog')}}">NGEN IT Blogs</a>
                        </li>
              </ul>
            </div>
          </div>
          <!-- item -->
          <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
            <!-- title -->
            <h6 class="home_title_text" style="text-align: start;">Help And Support</h6>
            <!-- nav list -->
            <div class="footer_nav_list">
              <ul>
                <li><a href="{{route('contact')}}">Contact us</a></li>
                        {{-- <li><a href="">FAQs</a></li>
                        <li><a href="">Order Helps</a></li>
                        <li><a href="">Order Tracks</a></li> --}}
                        <li><a href="{{route('support')}}">Supports</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- footer social -->
    <div class="container-fluid bg-black">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center align-items-center" style="background-color: #ae0a46;">
          <div class="trial-block" id="ContactUs">
            <div class="section-title text-center">
              <span class="section-title-line section-title-line"></span>
            </div>
            <div class="social-overlap process-scetion">
              <div class="container">
                <div class="social-icons">

                  <a href="{{$setting->facebook}}" class="slider-nav-item">
                    <i class="fab fa-facebook"></i>
                  </a>
                  <a href="{{$setting->twitter}}" class="slider-nav-item">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="{{$setting->linked_in}}" target="_blank" class="slider-nav-item">
                    <i class="fab fa-linkedin"></i>
                  </a>
                  <a href="{{$setting->youtube}}" target="_blank" class="slider-nav-item">
                    <i class="fab fa-youtube"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer bottom -->
    <div class="footer_bottom container">
      <div class="footer_bottom_wrapper">
        <!-- copy -->
        <div class="footer_copy">&copy NgenIt</div>
        <!-- footer bottom list -->
        <div class="footer_bottom_list">
            <ul>
                <li><a href="{{route('terms.policy')}}">Privacy policy</a></li>
                <li><a href="{{route('terms.policy')}}">All Terms & Policies</a></li>
                {{-- <li><a href="ngenit/web_accessibility.html">Web Accessibility</a></li> --}}
                <li><a href="{{route('all.techglossy')}}">Tech glossary</a></li>
                {{-- <li><a href="ngenit/sitemap.html">Sitemap</a></li>
                <li><label for="show_cookies">Cookies settings</label></li> --}}
            </ul>
        </div>
      </div>
    </div>
</footer>
  <!----------End--------->

<style>
    .common_button2 input::placeholder{
        color: white;
        padding: 5px;
    }
    .common_button2 input:focus{
        border: 1px solid #00000057 !important;
	    border-color: inherit;
        -webkit-box-shadow: none !important;
	    box-shadow: none !important;
}
.common_button2 input:active{
        border: 1px solid #00000057 !important;
	    border-color: inherit;
        -webkit-box-shadow: none !important;
	    box-shadow: none !important;
}
</st
</style>
