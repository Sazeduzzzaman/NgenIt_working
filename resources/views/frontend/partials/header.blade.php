@php
    $setting = App\Models\Admin\Setting::first();
    $industrys = App\Models\Admin\IndustryPage::orderBy('id', 'Desc')
        ->select('industry_pages.id', 'industry_pages.industry_id')
        ->limit(6)
        ->get();
    $features = App\Models\Admin\Feature::inRandomOrder()
        ->select('features.id', 'features.title', 'features.image', 'features.created_at', 'features.badge')
        ->limit(2)
        ->get();
    $feature_events = App\Models\Admin\Feature::inRandomOrder()
        ->select('features.id', 'features.title', 'features.image', 'features.created_at', 'features.badge')
        ->limit(2)
        ->get();
    $solutions = App\Models\Admin\SolutionDetail::orderBy('id', 'Desc')
        ->select('solution_details.id', 'solution_details.name')
        ->limit(6)
        ->get();
    $brands = App\Models\Admin\BrandPage::orderBy('id', 'Desc')
        ->select('brand_pages.id', 'brand_pages.brand_id')
        ->limit(10)
        ->get();
    $categorys = App\Models\Admin\Category::orderBy('id', 'DESC')
        ->select('categories.id', 'categories.slug', 'categories.title')
        ->limit(10)
        ->get();
    $blogs = App\Models\Admin\Blog::where('featured', '1')
        ->inRandomOrder()
        ->select('blogs.id', 'blogs.badge', 'blogs.title', 'blogs.image', 'blogs.created_at', 'blogs.created_by')
        ->limit(2)
        ->get();
    $clientstorys = App\Models\Admin\ClientStory::where('featured', '1')
        ->inRandomOrder()
        ->select('client_stories.id', 'client_stories.badge', 'client_stories.image', 'client_stories.title', 'client_stories.created_at', 'client_stories.created_by')
        ->limit(2)
        ->get();
    $techglossys = App\Models\Admin\TechGlossy::where('featured', '1')
        ->inRandomOrder()
        ->select('tech_glossies.id', 'tech_glossies.badge', 'tech_glossies.title', 'tech_glossies.image', 'tech_glossies.created_at', 'tech_glossies.created_by')
        ->limit(2)
        ->get();
    $jobs = App\Models\Admin\Job::all();
@endphp {{-- Custom Header Start --}}


<style>
    body {
        font-family: 'Allumi Std Extended';
    }

    a {
        color: #5e5e5e;
    }

    a:hover {
        color: #ae0a46;
    }

    .modal-backdrop {
        z-index: 0;
    }

    .dropdown-container {
        position: relative;
    }

    .dropdown-btn {
        width: 70px;
        background: cyan;
        padding: 12px;
    }

    .dropdown-content {
        position: absolute;
    }

    .dropdown-content a {
        margin-bottom: 1px;
        background: cyan;
        display: block;
    }

    .search-container {
        position: relative;
        display: inline-block;
        margin: 4px 2px;
        height: 50px;
        width: 50px;
        vertical-align: bottom;
    }

    .mglass {
        display: inline-block;
        pointer-events: none;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
    }

    .searchbutton {
        position: absolute;
        font-size: 22px;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .search:focus+.searchbutton {
        transition-duration: 0.4s;
        -moz-transition-duration: 0.4s;
        -webkit-transition-duration: 0.4s;
        -o-transition-duration: 0.4s;
        background-color: #f7f6f5;
        color: black;
    }

    .search {
        position: absolute;
        left: 49px;
        /* Button width-1px (Not 50px/100% because that will sometimes show a 1px line between the search box and button) */
        background-color: #f7f6f5;
        outline: none;
        border: none;
        padding: 0;
        width: 0;
        height: 100%;
        z-index: 10;
        transition-duration: 0.4s;
        -moz-transition-duration: 0.4s;
        -webkit-transition-duration: 0.4s;
        -o-transition-duration: 0.4s;
    }

    .search:focus {
        width: 363px;
        /* Bar width+1px */
        padding: 0 16px 0 0;
    }

    .expandright {
        left: auto;
        right: 10px;
        border-radius: 30px;
    }

    .expandright:focus {
        padding: 0 0 0 16px;
    }

    .search_buttons {
        display: inline-block;
        background-color: #f7f6f5;
        font-size: 30px;
        padding-left: 15px;
        padding-right: 15px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        color: #ae0a46;
        text-decoration: none;
        cursor: pointer;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border-radius: 30px;
    }

    .search_buttons:hover {
        transition-duration: 0.4s;
        -moz-transition-duration: 0.4s;
        -webkit-transition-duration: 0.4s;
        -o-transition-duration: 0.4s;
        background-color: white;
        color: black;
    }

    .cool-link {
        display: inline-block;
        color: #000;
        text-decoration: none;
    }

    .cool-link::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #ae0a46;
        transition: width .3s;
    }

    .cool-link:hover::after {
        width: 100%;
        //transition: width .3s;
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
        color: #ae0a46;
        background-color: transparent;
    }

    .drpdown_menu {
        margin-top: 0px !important;
        border-radius: 0px;
    }

    .menu_icons {
        font-size: 12px;
        margin-top: 10px;
        color: #ae0a46;
    }

    .nav_title {
        color: #716e6e !important;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-item {
        color: #5f5753;
        font-size: 0.8rem;
    }

    .main_active {
        position: relative;
        height: 100px;
        width: 600px;
        background: red;
        border: 1px solid white
    }

    .active_menu_design {
        position: absolute;
        top: -14px;
        width: 14px;
        height: 14px;
        border: 15px solid transparent;
        border-top: 0;
        border-bottom: 15px solid #ae0a46;
        opacity: 1;
        left: calc(40% - 15px);
        opacity: 1;
    }

    .active_menu_design2 {
        position: absolute;
        top: -16px;
        width: 14px;
        height: 14px;
        border: 15px solid transparent;
        border-top: 0;
        border-bottom: 15px solid #ae0a46;
        left: calc(50% - 15px);
        opacity: 1;
    }

    .active_menu_design3 {
        position: absolute;
        top: -16px;
        width: 14px;
        height: 14px;
        border: 15px solid transparent;
        border-top: 0;
        border-bottom: 15px solid #ae0a46;
        opacity: 1;
        left: calc(57% - 15px);
        opacity: 1;
    }

    .active_menu_design4 {
        position: absolute;
        top: -16px;
        width: 14px;
        height: 14px;
        border: 15px solid transparent;
        border-top: 0;
        border-bottom: 15px solid #ae0a46;
        opacity: 1;
        left: calc(65% - 30px);
        opacity: 1;
    }

    .offcanvas.offcanvas-end {
        border-left: 0px !important;
    }

    /* FOr Category */
    .dropdown_area_here {
        background: #ae0a46 !important;
        padding: 22px;
        color: white;
    }

    .dropdown_area_here:hover {
        background: #f7f6f5 !important;
        padding: 22px;
        color: ae0a46;
    }

    .extra_category {
        background-color: transparent !important;
        padding: 0px;
        border-top: none !important;
        border: 0px !important;
    }

    .category_accordion_btn {
        padding: 10px;
        background: #ae0a46;
        color: white;
        margin-top: 0px;
        margin-left: 4px;
    }

    .accordion-button:not(.collapsed) {
        background: #e7e7ea !important;
        padding: 16px !important;
    }

    @media screen and (max-width: 600px) {
        .for_sm_menu {
            padding-left: 13px !important;
            padding-right: 13px !important;
            padding-top: 0px;
            padding-bottom: 0px;
        }
    }

    /* Slider */
</style>
<section>
    <div class="container-fluid" style="background-color: #ae0a46;z-index: 999 !important;">
        <div class="container p-2">
            <div class="row">
                <div class="col-lg-4  d-flex justify-content-start align-items-center d-none d-sm-block">
                    <span class="pt-2 text-white"><i class="ph ph-phone-call"></i></span>
                    <span class="text-white p-0 ms-2">(+88) 0258155838</span>
                </div>
                <div class="col-lg-4 d-flex justify-content-start align-items-center d-none d-sm-block">
                    <div class="contact_number d-flex justify-content-center align-content-center">
                        <span class="pt-1 text-white"><i class="ph ph-paper-plane-tilt"></i></span>
                        <span class="text-center text-white p-0 ms-2"> sales@ngenitltd.com</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="d-flex justify-content-end">
                            <!-- Login Top Btn -->
                            <div class="dropdown ml-2">
                                <span class="text-white dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sign In </span>
                                <div class="dropdown-menu drpdown_menu dropdown-items_drop"
                                    aria-labelledby="dropdownMenuButton" style="z-index: 9999; margin-top: 5px;">
                                    @if (Auth::guard('client')->user())
                                        <a class="dropdown-item px-3 py-1" href="{{ route('client.dashboard') }}"
                                            style="border-bottom: 1px #ffffff dotted">Client Dashboard</a>
                                    @else
                                        <a class="dropdown-item px-3 py-1" href="{{ route('client.login') }}"
                                            style="border-bottom: 1px #ffffff dotted">Client</a>
                                    @endif

                                    @if (Auth::guard('partner')->user())
                                        <a class="dropdown-item px-3 py-1" href="{{ route('partner.dashboard') }}"
                                            style="border-bottom: 1px #ffffff dotted">Partner Dashboard</a>
                                    @else
                                        <a class="dropdown-item px-3 py-1"
                                            href="{{ route('partner.login') }}">Partner</a>
                                    @endif
                                    {{-- <a class="dropdown-item text-white" href="#">Client</a>
                                    <a class="dropdown-item text-white" href="#">Partner</a> --}}
                                </div>
                            </div>
                            <!-- Support Top Btn -->
                            <div class="dropdown">
                                <span class="text-white dropdown-toggle ms-2" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="z-index: 9999;"> Support </span>
                                <span class="dropdown-menu drpdown_menu dropdown-items_drop"
                                    aria-labelledby="dropdownMenuButton" style="z-index: 9999; margin-top: 5px;">
                                    <a class="dropdown-item px-3 py-1" href=""
                                        style="border-bottom: 1px #ffffff dotted">On Call Support</a>
                                    <a class="dropdown-item px-3 py-1" href=""
                                        style="border-bottom: 1px #ffffff dotted">Web Support Assistance</a>
                                </span>
                            </div>

                            <button class="btn  add_cart p-0 ms-2">
                                <a href="{{ route('mycart') }}">
                                    <i class="fa-solid fa-cart-plus fa-1x" style="font-size: 1.1em !important;"></i>
                                    <span class="add_cart_count" id="cartQty">{{ Cart::count() }}</span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sticky-top">
    <nav class="navbar navbar-expand-lg d-flex align-content-center container-fluid bg-white"
        style="    padding-top: 0px;
    padding-bottom: 0px;">
        <div class="container for_sm_menu">
            <a class="navbar-brand" href="#">
                <img src="{{ !file_exists($setting->logo) ? url('upload/no_image.jpg') : url('upload/logoimage/' . $setting->logo) }}"
                    alt="" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuCanvas"
                aria-controls="mobileMenuCanvas" aria-expanded=" false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown position-static cool-link ">
                        {{-- <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Our Solution 2
                        </a> --}}
                        <a class="nav link dropdown_area_here" href="#" role="button" id="dropdownMenuLink2"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            Dropdown link
                        </a>

                        <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuLink2">
                            <div class="container px-4">
                                <div class="row gx-1">
                                    <div class="col-lg-4">
                                        <div>
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed category_accordion_btn"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                    aria-controls="flush-collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed category_accordion_btn"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                    aria-controls="flush-collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed category_accordion_btn"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                    aria-controls="flush-collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item border-0" style="    background: #e7e7ea;">
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">Placeholder 1 content for this
                                                        accordion,
                                                        which is intended to demonstrate the
                                                        <code>.accordion-flush</code>
                                                        class. This is the third item's accordion body. Nothing more
                                                        exciting happening here in terms of content, but just filling up
                                                        the
                                                        space to make it look, at least at first glance, a bit more
                                                        representative of how this would look in a real-world
                                                        application.
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-0" style="    background: #e7e7ea;">
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingTwo"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">Placeholder 2 content for this
                                                            accordion,
                                                            which is intended to demonstrate the
                                                            <code>.accordion-flush</code>
                                                            class. This is the third item's accordion body. Nothing more
                                                            exciting happening here in terms of content, but just
                                                            filling up the
                                                            space to make it look, at least at first glance, a bit more
                                                            representative of how this would look in a real-world
                                                            application.
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item border-0"
                                                        style="    background: #e7e7ea;">
                                                        <div id="flush-collapseThree"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="flush-headingThree"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">Placeholder 3 content for this
                                                                accordion,
                                                                which is intended to demonstrate the
                                                                <code>.accordion-flush</code>
                                                                class. This is the third item's accordion body. Nothing
                                                                more
                                                                exciting happening here in terms of content, but just
                                                                filling up the
                                                                space to make it look, at least at first glance, a bit
                                                                more
                                                                representative of how this would look in a real-world
                                                                application.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link ">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Our Solution
                        </a>

                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm "
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="">
                                <div class="active_menu_design"></div>
                            </div>
                            <div class="container-fluid " style=" border-top: 4px solid #ae0a46 !important;">
                                <div class="container py-3">
                                    <div class="row py-3">
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="fw-bold nav_title mb-3"><span
                                                    style="border-top: 6px solid #ae0a46;">Com</span>mon
                                                Services</div>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="{{ route('software.info') }}">
                                                    <div>Software</div>
                                                    <div>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="{{ route('hardware.info') }}">
                                                    Hardware
                                                    <span>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="#">
                                                    Books
                                                    <span>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="fw-bold nav_title mb-3">
                                                <span style="border-top: 6px solid #ae0a46;">Ind</span>ustries
                                            </div>
                                            <li>
                                                @if ($industrys)
                                                    @foreach ($industrys as $item)
                                                        <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                            href="{{ route('industry.details', $item->id) }}">
                                                            {{ App\Models\Admin\Industry::where('id', $item->industry_id)->value('title') }}
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="fw-bold nav_title mb-3"><span
                                                    style="border-top: 6px solid #ae0a46;">Sol</span>ution</div>
                                            <li>
                                                @if ($solutions)
                                                    @foreach ($solutions as $item)
                                                        <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                            href="{{ route('solution.details', $item->id) }}">
                                                            {{ $item->name }}
                                                            <div>
                                                                <i class="ph ph-caret-right menu_icons"></i>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid p-3" style="background-color: #f7f6f5">
                                <div class="container">
                                    <div class="row ">
                                        <div class="col">
                                            <a href="#" class="text-capitalize"><span
                                                    style="border-top: 1px solid #ae0a46;">View all
                                                    sol</span>utions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Tech Content
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border shadow-sm "
                            style="  border-top: 4px solid #ae0a46 !important; "
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="">
                                <div class="active_menu_design2"></div>
                            </div>
                            <div class="container-fluid" style="background-color:#f7f6f5;">
                                <div class="container py-3">
                                    <span class="fw-bold nav_title"><span
                                            style="border-top: 6px solid #ae0a46;">Fe</span>atured Content</span>
                                    <div class="row py-3">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#">Applying artificial intelligence to robotics is
                                                        all development
                                                        to transform client experiences....</a>
                                                    <span>AI and Robotics / 05-02-2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Dynamic  --}}
                                        {{-- @if ($features)
                                           @foreach ($features as $item)
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ route('feature.details', $item->id) }}">
                                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                                alt="" style=" width: 140px; height: 70px;">
                                                            <div class="ms-3">
                                                                <h6> {{ Str::limit($item->title, 100) }}</h6>
                                                                <span>{{ $item->badge }} / {{ $item->created_at->format('d-m-Y') }}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif --}}
                                        {{-- Dynamic End --}}
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/m1OzW4EgNIr9dtjs1679976275.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#">Applying artificial intelligence to robotics is
                                                        all development
                                                        to
                                                        transform client
                                                        experiences....</a>
                                                    <span>AI and Robotics / 05-02-2023</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-3 p-0">
                                <div class="container py-3">
                                    <span class="fw-bold nav_title"><span
                                            style="border-top: 6px solid #ae0a46;">Late</span>st Featured
                                        Content</span>
                                    <div class="row py-3">

                                        <div class="col-lg-4 col-sm-12">
                                            {{-- @foreach ($blogs as $item)
                                            <a class="text-black" href="{{route('blog.details',$item->id)}}">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="{{ asset('storage/requestImg/' . $item->image) }}"
                                                        alt=""  style="width:140px; height:70px;">
                                                    <div style="margin-left: 20px;" class="feature_text">
                                                        <p class="m-0 font-weight-bold">{{ Str::limit($item->title, 55) }}</p>
                                                        <p class="m-0 font-weight-lighter content_date">
                                                            {{$item->badge}} / {{$item->created_at->format('d-m-Y')}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach --}}
                                            <div class="d-flex align-items-center mb-2">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/5CM6P586GPF1stn41680595530.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">
                                                        How Westerra Prioritized Digital Transformation in the......</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center ">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/DWrX1RPeJuGxRjlY1677495521.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="d-flex align-items-center mb-2">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/5CM6P586GPF1stn41680595530.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">
                                                        How Westerra Prioritized Digital Transformation in the......</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/DWrX1RPeJuGxRjlY1677495521.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="d-flex align-items-center mb-2">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/5CM6P586GPF1stn41680595530.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">
                                                        How Westerra Prioritized Digital Transformation in the......</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/DWrX1RPeJuGxRjlY1677495521.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid" style="background-color:#f7f6f5;">
                                    <div class="container  py-3">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="d-flex  ">
                                                    <div class="" style="border-top:1px solid #5e5e5e">
                                                        <a href="{{ route('all.blog') }}"
                                                            class="feature_menu_item text-center feature_view_btns">View
                                                            All Blog</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="d-flex">
                                                    <div class="" style="border-top:1px solid #5e5e5e">
                                                        <a href="{{ route('all.story') }}"
                                                            class="feature_menu_item text-center feature_view_btns">View
                                                            All Story</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="d-flex ">
                                                    <div class="" style="border-top:1px solid #5e5e5e">
                                                        <a href="{{ route('all.techglossy') }}"
                                                            class="feature_menu_item text-center feature_view_btns">View
                                                            All Techglossy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside"
                            style="
                            border-top: 4px solid #ae0a46 !important; ">
                            <div class="">
                                <div class="active_menu_design3"></div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-12">
                                        <div class="container">
                                            <div class="row d-flex justify-content-start">
                                                <div class="col-lg-3 offset-lg-1 col-sm-12 pt-4 pb-5">
                                                    <div class="mb-3">
                                                        <span class="fw-bold nav_title"><span
                                                                style="border-top: 4px solid #ae0a46;">Sho</span>p
                                                            By</span>
                                                    </div>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Software <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Hardware <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Training <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Books <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <div class="d-flex justify-content-start mt-3">
                                                        <a href="#" class="common_button effect01">All Shop</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12 pt-4 pb-5">
                                                    <div class="mb-3">
                                                        <span class="fw-bold nav_title"><span
                                                                style="border-top: 4px solid #ae0a46;">Sho</span>p
                                                            By Category</span>
                                                    </div>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <div class="d-flex justify-content-start mt-3">
                                                        <a href="#" class="common_button effect01">All Category
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12 pt-4 pb-5">
                                                    <div class="mb-3">
                                                        <span class="fw-bold nav_title text-center"><span
                                                                style="border-top: 4px solid #ae0a46;">Sol</span>ution</span>
                                                    </div>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>ccessories
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <div class="d-flex justify-content-start mt-3">
                                                        <a href="#" class="common_button effect01">All
                                                            Solution</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 pt-4" style="background-color:#f7f6f5;">
                                        <div class="mb-3">
                                            <span class="fw-bold nav_title "><span
                                                    style="border-top: 4px solid #ae0a46;">Exp</span>lore Our
                                                Deals</span>
                                        </div>
                                        <li><a class="dropdown-item py-1 px-0" href="#">
                                                It Solution <i class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item py-1 px-0" href="#">
                                                Technology deals <i class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item py-1 px-0" href="#">Certified refurbished <i
                                                    class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Connect Us
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside"
                            style=" border-top: 4px solid #ae0a46 !important;">
                            <div class="">
                                <div class="active_menu_design4"></div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-12 p-0" style="background-color: #f7f6f5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-2 col-sm-12  py-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Fea</span>tured
                                                        Events</div>
                                                    <div class="d-flex align-items-center">
                                                        <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                            alt="" style=" width: 150px; height: 86px;">
                                                        <div class="ms-3">
                                                            <a href="">Applying artificial intelligence to
                                                                robotics is all
                                                                development
                                                                to
                                                                transform client
                                                                experiences....</a>
                                                            <span>AI and Robotics / 05-02-2023</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center pt-3">
                                                        <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                            alt="" style=" width: 150px; height: 86px;">
                                                        <div class="ms-3">
                                                            <a href="">Applying artificial intelligence to
                                                                robotics is all
                                                                development
                                                                to
                                                                transform client
                                                                experiences....</a>
                                                            <span>AI and Robotics / 05-02-2023</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center pt-3">
                                                        <div class="d-flex justify-content-start">
                                                            <a href="http://127.0.0.1:8000/shop.html"
                                                                class="common_button effect01">View All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-sm-12  py-4">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Con</span>tact
                                                        us</div>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Contact US <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Support <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Location <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Our Portfolio <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Car</span>eer With
                                                        Us</div>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Join Our Team <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Job
                                                            Registration <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Partner With Us
                                                            <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Par</span>tner With
                                                        Us</div>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Investor <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">News Room <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Sta</span>y
                                                        connected:</div>
                                                    <ul class="sub_menu_footer_icon">
                                                        <li><a class="text-black"
                                                                href="https://www.facebook.com/ngenitltd"><i
                                                                    class="h4 fa-brands fa-square-facebook"></i></a>
                                                        </li>
                                                        <li><a class="text-black"
                                                                href="https://www.linkedin.com/company/13596377/admin/"></a><i
                                                                class="h4 fa-brands fa-linkedin"></i></li>
                                                        <li><a class="text-black"
                                                                href="https://twitter.com/ngenit"></a><i
                                                                class="h4 fa-brands fa-square-twitter"></i></li>
                                                        <li><a class="text-black" href=""><i
                                                                    class="h4 fa-brands fa-youtube"></i></a></li>
                                                        <li><a class="text-black" href=""></a><i
                                                                class="h4 fa-brands fa-square-instagram"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
                <div class="search-container">
                    <form method="post" action="{{ route('product.search') }}">
                        @csrf
                        <input class="search expandright" id="search_text" name="search" type="search"
                            placeholder="Search">
                        <label class="search_buttons searchbutton" for="search_text"><span
                                class="mglass">&#9906;</span></label>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- For Dropdown Category -->
    <div class="offcanvas offcanvas-top" tabindex="-1" id="newCategory" aria-labelledby="newCategoryLabel">
        <div class="offcanvas-header d-flex justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown position-static cool-link ">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Our Solution
                        </a>

                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm "
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="">
                                <div class="active_menu_design"></div>
                            </div>
                            <div class="container-fluid " style=" border-top: 4px solid #ae0a46 !important;">
                                <div class="container py-3">
                                    <div class="row py-3">
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="fw-bold nav_title mb-3"><span
                                                    style="border-top: 6px solid #ae0a46;">Com</span>mon
                                                Services</div>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="{{ route('software.info') }}">
                                                    <div>Software</div>
                                                    <div>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="{{ route('hardware.info') }}">
                                                    Hardware
                                                    <span>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                    href="#">
                                                    Books
                                                    <span>
                                                        <i class="ph ph-caret-right menu_icons"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="fw-bold nav_title mb-3">
                                                <span style="border-top: 6px solid #ae0a46;">Ind</span>ustries
                                            </div>
                                            <li>
                                                @if ($industrys)
                                                    @foreach ($industrys as $item)
                                                        <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                            href="{{ route('industry.details', $item->id) }}">
                                                            {{ App\Models\Admin\Industry::where('id', $item->industry_id)->value('title') }}
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="fw-bold nav_title mb-3"><span
                                                    style="border-top: 6px solid #ae0a46;">Sol</span>ution</div>
                                            <li>
                                                @if ($solutions)
                                                    @foreach ($solutions as $item)
                                                        <a class="dropdown-item d-flex align-items-center py-1 px-0"
                                                            href="{{ route('solution.details', $item->id) }}">
                                                            {{ $item->name }}
                                                            <div>
                                                                <i class="ph ph-caret-right menu_icons"></i>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid p-3" style="background-color: #f7f6f5">
                                <div class="container">
                                    <div class="row ">
                                        <div class="col">
                                            <a href="#" class="text-capitalize"><span
                                                    style="border-top: 1px solid #ae0a46;">View all
                                                    sol</span>utions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Tech Content
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border shadow-sm "
                            style="  border-top: 4px solid #ae0a46 !important; "
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="">
                                <div class="active_menu_design2"></div>
                            </div>
                            <div class="container-fluid" style="background-color:#f7f6f5;">
                                <div class="container py-3">
                                    <span class="fw-bold nav_title"><span
                                            style="border-top: 6px solid #ae0a46;">Fe</span>atured Content</span>
                                    <div class="row py-3">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#">Applying artificial intelligence to robotics is
                                                        all development
                                                        to transform client experiences....</a>
                                                    <span>AI and Robotics / 05-02-2023</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Dynamic  --}}
                                        {{-- @if ($features)
                                           @foreach ($features as $item)
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="d-flex align-items-center">
                                                        <a href="{{ route('feature.details', $item->id) }}">
                                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                                alt="" style=" width: 140px; height: 70px;">
                                                            <div class="ms-3">
                                                                <h6> {{ Str::limit($item->title, 100) }}</h6>
                                                                <span>{{ $item->badge }} / {{ $item->created_at->format('d-m-Y') }}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif --}}
                                        {{-- Dynamic End --}}
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/m1OzW4EgNIr9dtjs1679976275.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#">Applying artificial intelligence to robotics is
                                                        all development
                                                        to
                                                        transform client
                                                        experiences....</a>
                                                    <span>AI and Robotics / 05-02-2023</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-3 p-0">
                                <div class="container py-3">
                                    <span class="fw-bold nav_title"><span
                                            style="border-top: 6px solid #ae0a46;">Late</span>st Featured
                                        Content</span>
                                    <div class="row py-3">

                                        <div class="col-lg-4 col-sm-12">
                                            {{-- @foreach ($blogs as $item)
                                            <a class="text-black" href="{{route('blog.details',$item->id)}}">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="{{ asset('storage/requestImg/' . $item->image) }}"
                                                        alt=""  style="width:140px; height:70px;">
                                                    <div style="margin-left: 20px;" class="feature_text">
                                                        <p class="m-0 font-weight-bold">{{ Str::limit($item->title, 55) }}</p>
                                                        <p class="m-0 font-weight-lighter content_date">
                                                            {{$item->badge}} / {{$item->created_at->format('d-m-Y')}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach --}}
                                            <div class="d-flex align-items-center mb-2">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/5CM6P586GPF1stn41680595530.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">
                                                        How Westerra Prioritized Digital Transformation in the......</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center ">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/DWrX1RPeJuGxRjlY1677495521.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="d-flex align-items-center mb-2">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/5CM6P586GPF1stn41680595530.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">
                                                        How Westerra Prioritized Digital Transformation in the......</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/DWrX1RPeJuGxRjlY1677495521.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="d-flex align-items-center mb-2">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/5CM6P586GPF1stn41680595530.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">
                                                        How Westerra Prioritized Digital Transformation in the......</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/DWrX1RPeJuGxRjlY1677495521.jpg"
                                                    alt="" style=" width: 150px; height: 86px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid" style="background-color:#f7f6f5;">
                                    <div class="container  py-3">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="d-flex  ">
                                                    <div class="" style="border-top:1px solid #5e5e5e">
                                                        <a href="{{ route('all.blog') }}"
                                                            class="feature_menu_item text-center feature_view_btns">View
                                                            All Blog</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="d-flex">
                                                    <div class="" style="border-top:1px solid #5e5e5e">
                                                        <a href="{{ route('all.story') }}"
                                                            class="feature_menu_item text-center feature_view_btns">View
                                                            All Story</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="d-flex ">
                                                    <div class="" style="border-top:1px solid #5e5e5e">
                                                        <a href="{{ route('all.techglossy') }}"
                                                            class="feature_menu_item text-center feature_view_btns">View
                                                            All Techglossy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside"
                            style="
                            border-top: 4px solid #ae0a46 !important; ">
                            <div class="">
                                <div class="active_menu_design3"></div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-12">
                                        <div class="container">
                                            <div class="row d-flex justify-content-start">
                                                <div class="col-lg-3 offset-lg-1 col-sm-12 pt-4 pb-5">
                                                    <div class="mb-3">
                                                        <span class="fw-bold nav_title"><span
                                                                style="border-top: 4px solid #ae0a46;">Sho</span>p
                                                            By</span>
                                                    </div>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Software <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Hardware <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Training <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item py-1 px-0" href="#">
                                                            Books <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <div class="d-flex justify-content-start mt-3">
                                                        <a href="#" class="common_button effect01">All Shop</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12 pt-4 pb-5">
                                                    <div class="mb-3">
                                                        <span class="fw-bold nav_title"><span
                                                                style="border-top: 4px solid #ae0a46;">Sho</span>p
                                                            By Category</span>
                                                    </div>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <div class="d-flex justify-content-start mt-3">
                                                        <a href="#" class="common_button effect01">All Category
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12 pt-4 pb-5">
                                                    <div class="mb-3">
                                                        <span class="fw-bold nav_title text-center"><span
                                                                style="border-top: 4px solid #ae0a46;">Sol</span>ution</span>
                                                    </div>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>ccessories
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a class="dropdown-item py-1 px-0" href="#">Computer &
                                                            Electronics
                                                            <i class="ph ph-caret-right menu_icons"></i>
                                                        </a>
                                                        <a class="dropdown-item py-1 px-0 " href="#"><i
                                                                class="ph ph-arrow-bend-left-up"></i> Heavy Equipments
                                                        </a>
                                                    </li>
                                                    <div class="d-flex justify-content-start mt-3">
                                                        <a href="#" class="common_button effect01">All
                                                            Solution</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 pt-4" style="background-color:#f7f6f5;">
                                        <div class="mb-3">
                                            <span class="fw-bold nav_title "><span
                                                    style="border-top: 4px solid #ae0a46;">Exp</span>lore Our
                                                Deals</span>
                                        </div>
                                        <li><a class="dropdown-item py-1 px-0" href="#">
                                                It Solution <i class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item py-1 px-0" href="#">
                                                Technology deals <i class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item py-1 px-0" href="#">Certified refurbished <i
                                                    class="ph ph-caret-right menu_icons"></i>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown position-static cool-link">
                        <a class="nav-link dropdown-toggle" href="#" type="button"
                            id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">
                            Connect Us
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside"
                            style=" border-top: 4px solid #ae0a46 !important;">
                            <div class="">
                                <div class="active_menu_design4"></div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-12 p-0" style="background-color: #f7f6f5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-10 offset-lg-2 col-sm-12  py-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Fea</span>tured
                                                        Events</div>
                                                    <div class="d-flex align-items-center">
                                                        <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                            alt="" style=" width: 150px; height: 86px;">
                                                        <div class="ms-3">
                                                            <a href="">Applying artificial intelligence to
                                                                robotics is all
                                                                development
                                                                to
                                                                transform client
                                                                experiences....</a>
                                                            <span>AI and Robotics / 05-02-2023</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center pt-3">
                                                        <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                            alt="" style=" width: 150px; height: 86px;">
                                                        <div class="ms-3">
                                                            <a href="">Applying artificial intelligence to
                                                                robotics is all
                                                                development
                                                                to
                                                                transform client
                                                                experiences....</a>
                                                            <span>AI and Robotics / 05-02-2023</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center pt-3">
                                                        <div class="d-flex justify-content-start">
                                                            <a href="http://127.0.0.1:8000/shop.html"
                                                                class="common_button effect01">View All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-sm-12  py-4">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Con</span>tact
                                                        us</div>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Contact US <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Support <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Location <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Our Portfolio <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Car</span>eer With
                                                        Us</div>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Join Our Team <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Job
                                                            Registration <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Partner With Us
                                                            <i class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Par</span>tner With
                                                        Us</div>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">Investor <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item p-0" href="#">News Room <i
                                                                class="ph ph-caret-right menu_icons"></i></a>
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="fw-bold nav_title mb-3"><span
                                                            style="border-top: 4px solid #ae0a46;">Sta</span>y
                                                        connected:</div>
                                                    <ul class="sub_menu_footer_icon">
                                                        <li><a class="text-black"
                                                                href="https://www.facebook.com/ngenitltd"><i
                                                                    class="h4 fa-brands fa-square-facebook"></i></a>
                                                        </li>
                                                        <li><a class="text-black"
                                                                href="https://www.linkedin.com/company/13596377/admin/"></a><i
                                                                class="h4 fa-brands fa-linkedin"></i></li>
                                                        <li><a class="text-black"
                                                                href="https://twitter.com/ngenit"></a><i
                                                                class="h4 fa-brands fa-square-twitter"></i></li>
                                                        <li><a class="text-black" href=""><i
                                                                    class="h4 fa-brands fa-youtube"></i></a></li>
                                                        <li><a class="text-black" href=""></a><i
                                                                class="h4 fa-brands fa-square-instagram"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- Mobile Navigation Area Here End -->

    <!-- Mobile Navigation Area Here Start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenuCanvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header ">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a class="navbar-brand" href="#">
                <img src="{{ !file_exists($setting->logo) ? url('upload/no_image.jpg') : url('upload/logoimage/' . $setting->logo) }}"
                    alt="" height="60">
            </a>

            <div>
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Our Solution
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="container-fluid">
                                <div class="container py-3">
                                    <div class="row py-3">
                                        <div class="col-lg-4 col-sm-12">
                                            <span class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">Cat</span>egoryies</span>
                                            <li><a class="dropdown-item" href="#">Software
                                                </a></li>
                                            <li><a class="dropdown-item" href="#">
                                                    Hardware </a></li>
                                            <li><a class="dropdown-item" href="#">
                                                    Books </a></li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <span class="fw-bold "><span
                                                    style="border-top: 4px solid #ae0a46;">In</span>dustries</span>
                                            <li><a class="dropdown-item" href="#">Financial services </a></li>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <span class="fw-bold"><span
                                                    style="border-top: 4px solid #ae0a46;">So</span>lution</span>
                                            <li><a class="dropdown-item" href="#">It Solution

                                                </a></li>
                                            <li><a class="dropdown-item" href="#"> Improve your ability to
                                                    serve
                                                    the public.</a></li>
                                            <li><a class="dropdown-item" href="#"> Fintech solutions </a></li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tech Content
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border shadow-sm "
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="container py-3">
                                <span class="fw-bold"><span style="border-top: 4px solid #ae0a46;">Fe</span>atured
                                    Content</span>
                                <div class="row py-3">
                                    <div class="col-lg-6 col-sm-12 mt-3 ">
                                        <div class="d-flex align-items-center">
                                            <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                alt=""
                                                style=" width: 100px;
                        height: 70px;">
                                            <div class="ms-3">
                                                <h6>Applying artificial intelligence to robotics is all development to
                                                    transform client
                                                    experiences....</h6>
                                                <span>AI and Robotics / 05-02-2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mt-3">
                                        <div class="d-flex align-items-center">
                                            <img src="http://165.22.48.109/ngenit/storage/m1OzW4EgNIr9dtjs1679976275.jpg"
                                                alt=""
                                                style=" width: 140px;
                        height: 70px;">
                                            <div class="ms-3">
                                                <h6>Applying artificial intelligence to robotics is all development to
                                                    transform client
                                                    experiences....</h6>
                                                <span>AI and Robotics / 05-02-2023</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-3 p-0" style="background-color:#f7f6f5;">
                                <div class="w-50 mx-auto" style="border-top: 4px solid #ae0a46;">
                                </div>
                                <div class="container py-3">
                                    <span class="fw-bold"><span style="border-top: 3px solid #ae0a46;">Late</span>st
                                        Featured
                                        Content</span>
                                    <div class="row py-3">
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/DWrX1RPeJuGxRjlY1677495521.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips
                                                        &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/uRbsNgtaAfssaAC91679398424.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">Empowering a
                                                        Connected
                                                        World of Infinite
                                                        Possibilities...
                                                    </a>
                                                    <p class="" style="font-size: 14px;">
                                                        MinTAC / 01-03-2023</p class=""
                                                        style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/5CM6P586GPF1stn41680595530.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">
                                                        How Westerra Prioritized Digital Transformation in the......</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3">
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex justify-content-center flex-col">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/YAfHztgz9t4fk3Eu1677667620.png"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips
                                                        &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/hGpSLxz8TWtzVnSD1679398154.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips
                                                        &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="http://165.22.48.109/ngenit/storage/requestImg/pTqec3AwV6h24Dp01680594673.jpg"
                                                    alt=""
                                                    style=" width: 140px;
                          height: 100px;">
                                                <div class="ms-3">
                                                    <a href="#" class="feature_menu_item">MakerBot METHOD Tips
                                                        &
                                                        Tricks...</a>
                                                    <p class="" style="font-size: 14px;">AI and Robotics /
                                                        05-02-2023</p class="" style="font-size: 14px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3 d-flex flex-column justify-content-between">
                                        <div class="col-lg-6 col-sm-12 mt-3">
                                            <div class="d-flex align-items-center justify-content-center ">
                                                <div class="ms-3 ">
                                                    <a href="#"
                                                        class="feature_menu_item text-center feature_view_btns">View
                                                        All</a>
                                                </div>
                                                <div class="ms-3 ">
                                                    <a href="#"
                                                        class="feature_menu_item text-center feature_view_btns">View
                                                        All</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12" style="margin-top: 1.5rem;">
                                            <div class="d-flex align-items-center justify-content-center ">
                                                <div class="ms-3 ">
                                                    <a href="#"
                                                        class="feature_menu_item text-center feature_view_btns">View
                                                        All</a>
                                                </div>
                                                <div class="ms-3 ">
                                                    <a href="#"
                                                        class="feature_menu_item text-center feature_view_btns">View
                                                        All</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0 border-0 shadow-sm"
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="container-fluid py-3">
                                <div class="row d-flex justify-content-center py-3 px-3">
                                    <div class="col-lg-2 col-sm-12">
                                        <div class="mb-4">
                                            <span class="fw-bold "><span
                                                    style="border-top: 4px solid #ae0a46;">Sho</span>p
                                                By</span>
                                        </div>
                                        <li><a class="dropdown-item" href="#">Software
                                            </a></li>
                                        <li><a class="dropdown-item" href="#">
                                                Hardware <i class="fa-solid fa-angle-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">
                                                Training <i class="fa-solid fa-angle-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">
                                                Books <i class="fa-solid fa-angle-right"></i></a></li>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 mt-3">
                                        <span class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Sho</span>p
                                            By Category</span>
                                        <li>
                                            <a class="dropdown-item" href="#">Computer & Electronics
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">Heavy Equipments </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Software & Licenses
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">Industrial Tools & Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Industrial Automation
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">IoT, Ai, Robotics & Drones </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Crm & Smart Terminal
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">Safety & Security </a>
                                        </li>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 mt-3">
                                        <span class="fw-bold text-center"><span
                                                style="border-top: 4px solid #ae0a46;">Sol</span>ution</span>
                                        <li>
                                            <a class="dropdown-item" href="#">Computer & Electronics
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">Heavy Equipments </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Software & Licenses
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">Industrial Tools & Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Industrial Automation
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">IoT, Ai, Robotics & Drones </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Crm & Smart Terminal
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">Safety & Security </a>
                                        </li>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3">
                                        <div class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Exp</span>lore Our Deals</div>
                                        <li><a class="dropdown-item" href="#">
                                                It Solution <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">
                                                Technology deals <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Certified refurbished <i
                                                    class="fa-solid fa-angle-right"></i></a></li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Connect Us
                        </a>
                        <ul class="dropdown-menu drpdown_menu w-100 p-0"
                            aria-labelledby="dropdownMenuClickableInside">
                            <div class="container-fluid py-3">
                                <div class="row d-flex justify-content-center py-3 px-3">
                                    <div class="col-lg-4 col-sm-12 mt-3">
                                        <span class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Fea</span>tured Events</span>
                                        <div class="d-flex align-items-center">
                                            <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                alt="" style=" width: 150px; height: 86px;">
                                            <div class="ms-3">
                                                <a href="#">Applying artificial intelligence to robotics is all
                                                    development to
                                                    transform client
                                                    experiences....</a>
                                                <span>AI and Robotics / 05-02-2023</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center pt-3">
                                            <img src="http://165.22.48.109/ngenit/storage/wLzyd7UcffyCDpZY1678865267.jpg"
                                                alt="" style=" width: 150px; height: 86px;">
                                            <div class="ms-3">
                                                <a href="#">Applying artificial intelligence to robotics is all
                                                    development to
                                                    transform client
                                                    experiences....</a>
                                                <span>AI and Robotics / 05-02-2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3 text-center">
                                        <span class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Con</span>tact us</span>
                                        <li>
                                            <a class="dropdown-item" href="#">Contact US</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Support</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Location </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Our Portfolio </a>
                                        </li>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3 text-center">
                                        <span class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Car</span>eer With Us</span>
                                        <li>
                                            <a class="dropdown-item" href="#">Join Our Team </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Job Registration</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Partner With Us
                                            </a>
                                        </li>

                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3 text-center">
                                        <span class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Par</span>tner With Us</span>
                                        <li>
                                            <a class="dropdown-item" href="#">Investor </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">News Room</a>
                                        </li>
                                    </div>
                                    <div class="col-lg-2 col-sm-12 mt-3 text-center">
                                        <span class="fw-bold"><span
                                                style="border-top: 4px solid #ae0a46;">Sta</span>y
                                            Connected</span>
                                        <li class="d-flex justify-content-center py-3 text-center">
                                            <a href="#" class="social_icons"><i class="fab fa-facebook"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="ms-2 social_icons"><i
                                                    class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                                            <a href="#" class="ms-2 social_icons"><i class="fab fa-linkedin"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="ms-2 social_icons"><i class="fab fa-youtube"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
                <div class="search-container">
                    <form method="post" action="{{ route('product.search') }}">
                        @csrf
                        <input class="search" id="search_text" name="search" type="search"
                            placeholder="Search" style="width: 296px;">
                        <label class="search_buttons searchbutton" for="search_text"><span
                                class="mglass">&#9906;</span></label>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Navigation Area Here End -->
</section>









{{-- Sticky Menu Start --}}
{{-- <script>
    const navEl = document.querySelector('.navbar_menus')
    const navLink = document.querySelector('.navLink')

    window.addEventListener('scroll', () => {
        if (window.scrollY >= 56) {
            navEl.classList.add('navbar_scrolled');
        } else if (window.scrollY < 56) {
            navEl.classList.remove('navbar_scrolled')
        }
    })
</script> --}}
{{-- Sticky Menu End --}}
