@php
    $setting = App\Models\Admin\Setting::first();
    $industrys = App\Models\Admin\IndustryPage::orderBy('id', 'Desc')->limit(10)->get();
    $features = App\Models\Admin\Feature::orderBy('id', 'Desc')->limit(10)->get();
    $solutions = App\Models\Admin\SolutionDetail::orderBy('id', 'Desc')->limit(10)->get();
    $brands = App\Models\Admin\BrandPage::orderBy('id', 'Desc')->limit(10)->get();
    $categorys = App\Models\Admin\Category::orderBy('id', 'DESC')->limit(10)->get();
    $blogs = App\Models\Admin\Blog::inRandomOrder()->limit(2)->get();
    $clientstorys = App\Models\Admin\ClientStory::inRandomOrder()->limit(2)->get();
    $techglossys = App\Models\Admin\TechGlossy::inRandomOrder()->limit(2)->get();
    $jobs = App\Models\Admin\Job::all();
@endphp {{-- Custom Header Start --}}
<section class="header_top_menu_wrapper " style="background-color: #ae0a46;">
    <div class="header_top_menu d-flex justify-content-between align-items-center container">
        <div class="header_top_menu_item pt-1">
            <p class="text-white" style="line-height: 0px;">2023 Ngen It</p>
        </div>
        <div class="header_top_menu_item" style="font-size: 0.875rem;">

            <div class="top_menu_item_wrapper">
                {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sign In / Sign Up
                </a> --}}
                <button class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown">Sign In</button>
                <div class="dropdown-menu top_menu_item" aria-labelledby="navbarDropdown" style="z-index: 9999; background:#ae0a46;left: -30px;">
                    @if (Auth::guard('client')->user())
                        <a class="dropdown-item px-3 py-1 p-0" href="{{ route('client.dashboard') }}"
                            style="border-bottom: 1px #ffffff dotted">Client Dashboard</a>
                    @else
                        <a class="dropdown-item px-3 py-1 p-0" href="{{ route('client.login') }}"
                            style="border-bottom: 1px #ffffff dotted">Client</a>
                    @endif

                    @if (Auth::guard('partner')->user())
                        <a class="dropdown-item px-3 py-1 p-0" href="{{ route('partner.dashboard') }}"
                            style="border-bottom: 1px #ffffff dotted">Partner Dashboard</a>
                    @else
                        <a class="dropdown-item px-3 py-1 p-0" href="{{ route('partner.login') }}"
                            style="border-bottom: 1px #ffffff dotted">Partner</a>
                    @endif
                </div>
            </div>




            <div class="top_menu_item_wrapper">
                <button class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown">Support</button>

                <div class="dropdown-menu top_menu_item sp" style="z-index: 9999; background:#ae0a46;left: -30px;">
                    <a class="dropdown-item px-3 py-1 p-0" href="{{ route('contact') }}"
                        style="border-bottom: 1px #ffffff dotted">On Call Support</a>
                    {{-- <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item px-3 py-1 p-0" href="{{ route('support') }}">web Support Assistance</a>
                </div>
            </div>
            {{-- @php
                       $total_cart = Cart::count();
                    @endphp --}}
            <button class="add_cart"><a href="{{ route('mycart') }}"><i class="fa-solid fa-cart-plus fa-1x"></i><span
                        class="add_cart_count" id="cartQty">{{ Cart::count() }}</span></a>
            </button>
        </div>
    </div>
</section>
<header class="navbar_menus sticky-top">
    <section class="header_bottom_wrapper container">
        <div class="nav_menu_wrapper d-flex align-items-center">
            <div class="mobile_view_wrapper d-flex justify-content-between">
                <!--Logo-->
                <div class="header_logo">
                    <a href="{{ route('homepage') }}">
                        <img src="{{ !file_exists($setting->logo) ? url('upload/logoimage/'.$setting->logo) : url('upload/no_image.jpg') }}"
                            alt="Ngen It" height="47px">
                    </a>
                </div>
                <!--Menu icon-->
                <div class="mobile_nav_menu">
                    <div class="menu_icon">
                        {{-- <a href="">
								<i class="fa-solid fa-user"></i>
								<span class="ipads_menu">Account</span>
							</a> --}}
                        <a href="{{ route('mycart') }}">
                            <i class="fa-solid fa-cart-plus"></i>
                            <span class="ipads_menu">Cart</span>
                        </a>
                        <a onclick="switchSearchVisible();" value="Click">
                            <i class="fa-solid fa-magnifying-glass" id="iconSearch" onclick="iconSearch();"></i>
                            <span class="ipads_menu">Search</span>
                        </a>
                        <a onclick="switchMenuVisible();" value="Click">
                            <i class="fa-solid fa-bars" id="iconMenu" onclick="iconMenu()"></i>
                            <span class="ipads_menu">Menu</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--Menu-->
            <nav class="display_none" id="Main_menu">
                <div class="menu_item_wrapper">
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Our Services <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style">
                                    <i class="fa-solid fa-chevron-left"></i> Back
                                </div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Products <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="{{ route('software.common') }}">Software <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="{{ route('hardware.common') }}">Hardware <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="{{ route('shop') }}">Digital Services <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Solutions <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our deep expertise and end-to-end capabilities help you navigate complex IT
                                        challenges.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Smart City <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">IoT, AI, Aerobotics <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Industry <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our service offerings service offerings </p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="industry_single.html">Financial <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="industry_single.html">Healthcare <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="industry_single.html">Manufacturing <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="industry_single.html">Public sector <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Services <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our service offerings drive new business outcomes.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="service_single.html">Consulting services <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="service_single.html">Managed services <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="service_single.html">Digital HR Services <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="service_single.html">Support Services <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="product_common.html">View All Products</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="solution_common.html">View All Solutions</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="industry_common.html">View All Industry</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="service_common.html">View All Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Tech Contents <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 2-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style">
                                    <i class="fa-solid fa-chevron-left"></i> Back
                                </div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Industry <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Education <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Healthcare <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Manufacturing <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Public sector <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Solution <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our deep expertise and end-to-end capabilities help you navigate complex IT
                                        challenges.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Modern infrastructure <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Networking <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Procurement <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Real-time data <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Technology <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our service offerings service offerings </p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">AI & IoT <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">IT optimization <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Cloud <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Cybersecurity <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Contents <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our service offerings drive new business outcomes.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Analyst Report <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Article <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Client story <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Tech Journal <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Industries</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Solutions</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Technology</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Contents</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Partner & Clients <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 3-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style">
                                    <i class="fa-solid fa-chevron-left"></i> Back
                                </div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Partners <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Bangladesh <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Nepal <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Bhutan <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Myanmar <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Clients <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our deep expertise and end-to-end capabilities help you navigate complex IT
                                        challenges.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Public Sector <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Academic <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">FMG <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">MNC <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Principals <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our service offerings service offerings </p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Hardware <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Hardware <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Solution <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Service <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Investors <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>No Data</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Empty <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Partners</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Clients</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Principals</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Investors</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Connect Us <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 4-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style">
                                    <i class="fa-solid fa-chevron-left"></i> Back
                                </div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Contacts <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="contact_us.html">Direct Reach <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Social Connects <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Datasheets <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">About Us <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Service <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our deep expertise and end-to-end capabilities help you navigate complex IT
                                        challenges.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Webinars <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Presentations <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">PoCs <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Knowledgebase <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Events <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our service offerings service offerings </p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Online <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Venues <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="">Newsroom <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Career <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our service offerings drive new business outcomes.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="job_apply.html">Join our team <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                        <a href="job_post.html">Available Jobs <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <ul class="sub_menu_footer_icon">
                                        <li>
                                            <i class="fa-brands fa-square-facebook"></i>
                                        </li>
                                        <li>
                                            <i class="fa-brands fa-linkedin"></i>
                                        </li>
                                        <li>
                                            <i class="fa-brands fa-square-twitter"></i>
                                        </li>
                                        <li>
                                            <i class="fa-brands fa-square-instagram"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="contact_us.html">Request Service Call</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">Request Events</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="job_post.html">Request Free Trainings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Menu Item-->
                    <div class="menu_item">
                        <button class="country-btn-portugal">Shop <i class="fa-solid fa-caret-down"></i>
                        </button>
                        <div class="manege_nav sub_menu_wrapper mr-animate-left">
                            <!--Sub menu 5-->
                            <div class="back_menu">
                                <div class="country-btn-portugal back_button_style">
                                    <i class="fa-solid fa-chevron-left"></i> Back
                                </div>
                            </div>
                            <div class="sub_menu">
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Product <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="product_filters.html">Product <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Brand <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our service offerings drive new business outcomes.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="hardware_single.html">Null <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">By Category <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Harness the power of technology to achieve your most ambitious goals. </p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="category_single.html">Single Category <i
                                                class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="colum-3 colum-12">
                                    <h3 class="toggleDetails">Shop <i
                                            class="fa-solid fa-angle-right mb_sh float-right"></i>
                                    </h3>
                                    <p>Our service offerings drive new business outcomes.</p>
                                    <div class="details hidden sub_sub_item">
                                        <a href="">Null <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub_menu_footer">
                                <div class="sub_menu_footer_item">
                                    <a href="product_filters.html">View All Product</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="brand_common.html">View All Brand</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="">View All Category</a>
                                </div>
                                <div class="sub_menu_footer_item">
                                    <a href="product_common.html">View All Shop</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!--Search-->
            <div class="" id="Search_menu">
                <button class="btn-search" type="submit"><i class="fas fa-search"></i></button>
                <input type="search" class="input-search" placeholder="Type to Search.">
            </div>

            {{-- <div class="search_menu display_none" id="Search_menu">
                <div class="header_search">
                    <input type="search" placeholder="What can we help you find?">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div> --}}
        </div>
    </section>
</header>
{{-- Custom Header End --}}
<script>
    function search_result_hide() {
        $("#searchProducts").slideUp();
    }

    function search_result_show() {
        $("#searchProducts").slideDown();
    }
</script>

{{-- Sticky Menu Start --}}
<script>
    const navEl = document.querySelector('.navbar_menus')
    const navLink = document.querySelector('.navLink')

    window.addEventListener('scroll',()=>{
        if(window.scrollY >= 56){
            navEl.classList.add('navbar_scrolled');
        }
        else if(window.scrollY < 56){
            navEl.classList.remove('navbar_scrolled')
        }
    })
</script>
{{-- Sticky Menu End --}}

