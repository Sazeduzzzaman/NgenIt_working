@php
    $setting = App\Models\Admin\Setting::first();
@endphp
<!--=======// Footer Section//=========-->
<footer class="container-fluid p-0" style="background: #222222;">
    <!-- footyer gradient -->
    <div class="footer_top">
        <p class="">We determined to pace with Next Generation Information Technology.</p>
    </div>
    <!-- main footer -->
    <div class="footer_middle">
        <div class="container">
            <div class="row">
                <div class="row footer_middle_wrapper">
                    <!-- item -->
                    <div class="col-lg-6 col-md-6 col-sm-12 footer_item_wrapper">
                        <!-- title -->
                        <h6>Newsletter</h6>
                        <!-- text -->
                        <p class="footer_text pt-2 w-75">
                            Sign up to receive the IT content that matters most to you.
                            You can update your preferences or unsubscribe any time.
                        </p>
                        <!-- button -->
                        <form class="p-0 m-0" id="myform" action="{{ route('newsletter.store') }}" method="post"
                            enctype="multipart/form-data">
                            <div class="input-group w-75">
                                <input type="email" class="form-control" placeholder="Enter your email"
                                    style="height: 37px;">
                                <span class="input-group-btns ml-1">
                                    <button class="btns effect01 px-1" type="submit"
                                        style="line-height: 36px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">Subscribe</button>
                                </span>
                        </form>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-2 col-md-2 col-sm-12 footer_item_wrapper">
                    <!-- title -->
                    <h6 class="home_title_text" style="text-align: start;">About & Contact</h6>
                    <!-- nav list -->
                    <div class="footer_nav_list">
                        <ul class="footer_link_text">
                            <li>
                                <a href="javascript:void(0);">Company</a>  &  <a href="">Portfolios</a>
                            </li>
                            <li>
                                <a href="{{route('portfolio')}}">Design</a>  &  <a href="{{route('portfolio')}}">Development</a>
                            </li>
                            <li>
                                <a href="">Partner</a>  &  <a href="">Clients</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>  &  <a href="{{ route('support') }}">Supports</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-2 col-md-2 col-sm-12 footer_item_wrapper">
                    <!-- title -->
                    <h6 class="home_title_text" style="text-align: start;">Product & Services</h6>
                    <!-- nav list -->
                    <div class="footer_nav_list">
                        <ul class="footer_link_text">
                            <li>
                                <a href="{{route('software.common')}}">Software</a>  &  <a href="{{route('hardware.common')}}">Hardware</a>
                            </li>
                            <li>
                                <a href="{{route('all.industry')}}">Industry</a>  &  <a href="{{route('all.industry')}}">Solutions</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Training</a>  &  <a href="javascript:void(0);">Books</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Support</a>  &  <a href="{{ route('support') }}">Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- item -->
                <div class="col-lg-2 col-md-2 col-sm-12 footer_item_wrapper">
                    <!-- title -->
                    <h6 class="home_title_text" style="text-align: start;">Knowledge Base</h6>
                    <!-- nav list -->
                    <div class="footer_nav_list">
                        <ul class="footer_link_text">
                            <li>
                                <a href="{{ route('all.story') }}">Tech Contents</a>
                            </li>
                            <li>
                                <a href="{{ route('all.techglossy') }}">Tech Glossary</a>
                            </li>
                            <li>
                                <a href="{{ route('all.story') }}">Client Stories</a>
                            </li>
                            <li>
                                <a href="{{ route('all.blog') }}">FAQs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    <!-- footer social -->
    <div class="container-fluid bg-black">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center align-items-center"
                style="background-color: #ae0a46;">
                <div class="trial-block" id="ContactUs">
                    <div class="section-title text-center">
                        <span class="section-title-line section-title-line"></span>
                    </div>
                    <div class="social-overlap process-scetion">
                        <div class="container">
                            <div class="social-icons">
                                <a href="{{ $setting->facebook }}" class="slider-nav-item">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="{{ $setting->twitter }}" class="slider-nav-item">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{ $setting->linked_in }}" target="_blank" class="slider-nav-item">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="{{ $setting->youtube }}" target="_blank" class="slider-nav-item">
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
            <div class="footer_copy">&copy {{date('Y')}} NgenIt</div>
            <!-- footer bottom list -->
            <div class="footer_bottom_list">
                <ul class="footer_bottom_text">
                    <li>
                        <a href="{{ route('terms.policy') }}">Privacy policy &nbsp;|&nbsp; </a>
                    </li>
                    <li>
                        <a href="{{ route('terms.policy') }}">Terms & Conditions &nbsp;|&nbsp; </a>
                    </li>
                    {{-- <li>
                              <a href="ngenit/web_accessibility.html">Web Accessibility</a>
                          </li> --}}
                    <li>
                        <a href="{{ route('all.blog') }}">Cookies</a>
                    </li>
                    {{-- <li>
                              <label for="show_cookies">Cookies settings</label>
                          </li> --}}
                </ul>
            </div>
        </div>
    </div>
</footer>
<!----------End--------->
<!--=======// Cookises Modals //=======-->
<section class="cookises_settings_wrapper">
    <input type="checkbox" id="show_cookies">
    <!-- <label for="show_cookies">View Form</label> -->
    <!--Content Wrapper-->
    <div class="cookises_settings_pop">
        <label for="show_cookies" class="close-btn fas fa-times" title="close"></label>
        <div class="modal_title_cookises">
            <img src="images/ngenit.png" alt="">
            <h2 class="align-middle">Privacy Preference Center</h2>
        </div>
        <!--------Cookies Tab content-------->
        <div id="Cookies" class="tab_cookises_wrapper">
            <div class="tab_cookises_settings">
                <button class="tablinks" onclick="openCity(event, 'Privacy')" id="defaultOpen">Your privacy</button>
                <button class="tablinks" onclick="openCity(event, 'Strictly')">Strictly necessary cookies</button>
                <button class="tablinks" onclick="openCity(event, 'Performance')">Performance cookies</button>
                <button class="tablinks" onclick="openCity(event, 'Functional')">Functional cookies</button>
                <button class="tablinks" onclick="openCity(event, 'Targeting')">Targeting cookies</button>
            </div>
            <div id="Privacy" class="tab_cookises_tabcontent">
                <h5>Your privacy</h5>
                <p>When you visit any website, it may store or retrieve information on your browser, mostly in the form
                    of cookies. This information might be about you, your preferences or your device and is mostly used
                    to make the site work as you expect it to. The information does not usually directly identify you,
                    but it can give you a more personalized web experience. Because we respect your right to privacy,
                    you can choose not to allow some types of cookies. Click on the different category headings to find
                    out more and change our default settings. However, blocking some types of cookies may impact your
                    experience of the site and the services we are able to offer. You can get more information by going
                    to our Privacy Policy or Statement in the footer of the website.</p>
            </div>
            <div id="Strictly" class="tab_cookises_tabcontent">
                <div class="d-flex justify-content-between">
                    <h5>Strictly necessary cookies</h5>
                    <h5 style="color: #ae0a46; display: inline;">Always active</h5>
                </div>
                <p>These cookies are necessary for the website to function and cannot be switched off in our systems.
                    They are usually only set in response to actions made by you which amount to a request for services,
                    such as setting your privacy preferences, logging in or filling in forms. You can set your browser
                    to block or alert you about these cookies, but some parts of the site will not then work. These
                    cookies do not store any personally identifiable information.</p>
                <a>Cookies details</a>
            </div>
            <div id="Performance" class="tab_cookises_tabcontent">
                <div class="d-flex justify-content-between">
                    <h5>Performance cookies</h5>
                    <label class="switch">
                        <input type="checkbox" id="myCheckboxbtn" onclick="myCheckboxbtn()" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <p>These cookies allow us to count visits and traffic sources so we can measure and improve the
                    performance of our site. They help us to know which pages are the most and least popular and see how
                    visitors move around the site. Most of these cookies collect and process aggregated (anonymized)
                    information without identifying individuals. If you do not allow these cookies we will not know when
                    you have visited our site, and will not be able to monitor its performance.</p>
                <a style="color: #ae0a46; cursor: pointer;" onclick="switchVisible();" value="Click"> Cookies
                    details</a>
            </div>
            <div id="Functional" class="tab_cookises_tabcontent">
                <div class="d-flex justify-content-between">
                    <h5>Functional cookies</h5>
                    <label class="switch">
                        <input type="checkbox" id="myCheckboxbtn1" onclick="myCheckboxbtn1()" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <p>These cookies enable the website to provide enhanced functionality and personalisation. They may be
                    set by us or by third party providers whose services we have added to our pages. If you do not allow
                    these cookies then some or all of these services may not function properly.</p>
                <a style="color: #ae0a46; cursor: pointer;" onclick="switchVisible();" value="Click"> Cookies
                    details</a>
            </div>
            <div id="Targeting" class="tab_cookises_tabcontent">
                <div class="d-flex justify-content-between">
                    <h5>Targeting cookies</h5>
                    <label class="switch">
                        <input type="checkbox" id="myCheckboxbtn2" onclick="myCheckboxbtn2()" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <p>These cookies may be set through our site by our advertising partners. They may be used by those
                    companies to build a profile of your interests and show you relevant adverts on other sites. They do
                    not store directly personal information, but are based on uniquely identifying your browser and
                    internet device. If you do not allow these cookies, you will experience less targeted advertising.
                </p>
                <a style="color: #ae0a46; cursor: pointer;" onclick="switchVisible();" value="Click"> Cookies
                    details</a>
            </div>
        </div>
        <!--------Cookies Details----------->
        <div id="Cookies_details" class="Cookies_details_wrapper">
            <div class="cookie_list_filter row d-flex">
                <div class="col-4 d-flex">
                    <label onclick="switchVisible();" value="Click">
                        <i class="fa-solid fa-angle-left fa-xl"></i>
                    </label>
                    <h5>Cookie List</h5>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <form class="cookies_search_btn d-flex" action="">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <button class="cookie_filter_icon">
                        <i class="fa-solid fa-filter fa-xl"></i>
                    </button>
                </div>
            </div>
            <div class="cookie_list_content">
                <div class="cookie_list_content_item">
                    <!--====///First///====-->
                    <button class="collapsible">First party cookies</button>
                    <div class="content">
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                        </ul>
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Description</div>
                                <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                    each visitor has to the Site, track email recipient behavior to measure campaign
                                    effectiveness and personalize Site content based on information known about the
                                    visitor.</div>
                            </li>
                        </ul>
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                        </ul>
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Description</div>
                                <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                    each visitor has to the Site, track email recipient behavior to measure campaign
                                    effectiveness and personalize Site content based on information known about the
                                    visitor.</div>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <!--====///First///====-->
                    <button class="collapsible">exchange.mediavine.com</button>
                    <div class="content">
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                        </ul>
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Description</div>
                                <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                    each visitor has to the Site, track email recipient behavior to measure campaign
                                    effectiveness and personalize Site content based on information known about the
                                    visitor.</div>
                            </li>
                        </ul>
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                        </ul>
                        <!--Item-->
                        <ul>
                            <li>
                                <div class="cookie_veiw_name">Name</div>
                                <div class="cookie_veiw_title">trwv.vc</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Host</div>
                                <div class="cookie_veiw_title">ngenit.com</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Duration</div>
                                <div class="cookie_veiw_title">A few seconds</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Type</div>
                                <div class="cookie_veiw_title">First Party</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Category</div>
                                <div class="cookie_veiw_title">Targeting cookies</div>
                            </li>
                            <li>
                                <div class="cookie_veiw_name">Description</div>
                                <div class="cookie_veiw_title">Marketo - These cookies store the total number of visits
                                    each visitor has to the Site, track email recipient behavior to measure campaign
                                    effectiveness and personalize Site content based on information known about the
                                    visitor.</div>
                            </li>
                        </ul>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="modal_footer_cookises">
            <div class="d-flex justify-content-between">
                <button class="btn_footer_cookises">
                    <strong> Confirm choices</strong>
                </button>
                <!--Show & Hide butoon-->
                <button class="btn_footer_cookises" id="btn_show">
                    <strong> Allow cookises</strong>
                </button>
            </div>
            <div class="text_footer_cookises">
                <p>Powered by <span class="text-success h6">OneTrust</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!----------End--------->


<style>
    .common_button2 input::placeholder {
        color: white;
        padding: 5px;
    }

    .common_button2 input:focus {
        border: 1px solid #00000057 !important;
        border-color: inherit;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    .common_button2 input:active {
        border: 1px solid #00000057 !important;
        border-color: inherit;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }
</style>
