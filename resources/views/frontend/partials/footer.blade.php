@php
    $setting=App\Models\Admin\Setting::first();
@endphp
<footer class="container-fluid p-0">
    <!-- footyer gradient -->
    <div class="footer_top">
        <p class="m-0">We deliver Ngen It Intelligent Technology Solutions™ expertise.</p>
    </div>

    <!-- main footer -->
    <div class="footer_middle">
        <div class="row footer_middle_wrapper">
            <!-- item -->

                <div class="col-lg-3 col-md-3 col-sm-12 footer_item_wrapper">
                    <!-- title -->
                    <h6>Newsletter</h6>
                    <!-- text -->
                    <form id="myform" action="{{route('newsletter.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <p>Sign up to receive the IT content that matters most to you. You can update your preferences or unsubscribe any time.</p>
                    <!-- button -->
                        <!-- <div class="col-lg-10 common_button2" style="padding:0px;">
                            <div class="col-lg-10 float-left" style="padding:0px;">
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Here.." style="background: transparent; border:none; color:white;border-hover:none;">
                            </div>
                            <div class="col-lg-2 float-left" style="padding:0px;">
                                <button id="submitbtn" type="submit" style="background: transparent; border:none; color:white;float:left;"><i class="ph-paper-plane-tilt" style="font-size: 22px;float:left; line-height:35px;"></i></button>
                            </div>

                        </div> -->

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: var(--crimson); border-radius:0.25rem;">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-8 pl-1" style="padding:0px;">
                                    <input type="email" name="email" class="placeholderInput" placeholder="Enter Your Email Here.." style="width:100%;height:40px; background: transparent; border:none; color:white;  outline: none!important;color:#fff;" autocomplete="off">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 pt-2" style="padding:0px;">
                                    <button id="submitbtn" type="submit" style="background: transparent; border:none; color:white; outline: none!important;color:#fff;"><i class="ph-paper-plane-tilt" style="font-size: 22px"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            <!-- item -->
            {{-- <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6>About NgenIt</h6>
                <!-- nav list -->
                <div class="footer_nav_list">
                    <ul>
                        <li><a href="">Company overview</a></li>
                        <li><a href="">Principal</a></li>
                        <li><a href="{{ route('all.brand') }}">Partners</a></li>
                        <li><a href="">Clients</a></li>
                    </ul>
                </div>
            </div> --}}

            <!-- item -->
            <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6 class="main_footer_item_title">Products & Services</h6>
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
            <div class="col-lg-3 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6 class="main_footer_item_title">Features & Knowledge </h6>
                <!-- nav list -->
                <div class="footer_nav_list">
                    <ul>
                        <li><a href="{{route('all.story')}}">Client Story</a></li>
                        <li><a href="{{ route('client.login') }}">NGEN IT Client Account</a></li>
                        <li><a href="{{ route('partner.login') }}">NGEN IT Partner Account</a></li>
                        <li><a href="{{route('all.blog')}}">NGEN IT Blogs</a></li>
                </div>
            </div>

            <!-- item -->
            <div class="col-lg-2 col-md-4 col-sm-6 footer_item_wrapper">
                <!-- title -->
                <h6 class="main_footer_item_title">Help And Support</h6>
                <!-- nav list -->
                <div class="footer_nav_list">
                    <ul>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                        {{-- <li><a href="">FAQs</a></li>
                        <li><a href="">Order Helps</a></li>
                        <li><a href="">Order Tracks</a></li> --}}
                        <li><a href="{{route('support')}}">Supports</a></li>
                </div>
            </div>
        </div>
    </div>

    <!-- footer social -->
    <div class="social_icon_wrapper">
        <div class="footer_social_icon">
            <ul>
                <li><a href="{{$setting->linked_in}}"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="{{$setting->facebook}}"><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href="{{$setting->twitter}}"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="{{$setting->youtube}}"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="{{$setting->instagram}}"><i class="fa-brands fa-instagram"></i> </a></li>
            </ul>
        </div>
    </div>

    <!-- footer bottom -->

    <div class="footer_bottom">
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
