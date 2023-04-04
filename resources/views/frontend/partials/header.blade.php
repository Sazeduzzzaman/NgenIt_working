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
    .navbar-toggler {
        background-color: #ae0a46;
    }

    .search-bar {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        transform: translate(-50%, -50%);
        border: 1px #ae0a46 solid;
        transition-duration: 0.2s;
        border-radius: 20px;
    }

    .textbox {
        width: 0px;
        padding: 0;
        margin: 0;
        border: none;
        line-height: 40px;
        font-size: 16px;
        height: 45px;
        background-color: transparent;
        outline: none;
        height: 100%;
        float: left;

        transition-duration: 0.05s;
    }

    .search-btn {
        background-color: #ae0a46;
        color: white;
        padding: 0px 0px 0px 0px;
        margin: 0;
        height: 35px;
        width: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        float: right;
        text-decoration: none;
        /* border-left: 5px black solid; */
        height: 100%;
        transition-duration: 0.2s;
    }

    .search-btn p {
        margin: 10px;
        color: #ae0a46;
        font-size: 20px;
        font-family: sans-serif;
        font-weight: 800;
    }

    .search-bar:hover>.textbox {
        padding: 0px 0px 5px 10px;
        width: 100%;
        transition-duration: 0.2s;
    }

    .search-bar:hover>.search-btn {
        transition-duration: 0.2s;
    }

    .search-btn:hover {
        background-color: black;
        transition-duration: 0.2s;
    }

    .search-btn:hover>p {
        color: white;
        transition-duration: 0.2s;
    }
    .dropdown-item {
    display: block;
    width: 100%;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    clear: both;
    font-weight: 400;
    color: var(--bs-dropdown-link-color);
    text-align: inherit;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    padding-left: 0px !important;
}
</style>

{{-- New Header Start --}}
<!-- Header Top Start -->
<section>
    <div class="container-fluid navbar_top d-none d-md-block">
        <div class="container ">
            <div class="row p-0">
                <div class="d-flex text-white justify-content-between align-items-center p-0">
                    <div style="font-family: 'Poppins', sans-serif !important;"><strong>{{ date('Y') }} NGen
                            It</strong></div>
                    <div>{{ $setting->email2 }} | <span style="font-family: 'Poppins', sans-serif !important;">(+88)
                            0258155838</span></div>
                    <div class="d-flex justify-content-end">
                        <!-- Login Top Btn -->
                        <div class="dropdown ml-2">
                            <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="z-index: 9999; "> Sign In </button>
                            <div class="dropdown-menu dropdown-items_drop" aria-labelledby="dropdownMenuButton"
                                style="z-index: 9999;background: #ae0a46 !important; margin-top: 5px;">
                                @if (Auth::guard('client')->user())
                                    <a class="dropdown-item text-white px-3 py-1 p-0"
                                        href="{{ route('client.dashboard') }}"
                                        style="border-bottom: 1px #ffffff dotted">Client Dashboard</a>
                                @else
                                    <a class="dropdown-item text-white px-3 py-1 p-0" href="{{ route('client.login') }}"
                                        style="border-bottom: 1px #ffffff dotted">Client</a>
                                @endif

                                @if (Auth::guard('partner')->user())
                                    <a class="dropdown-item text-white px-3 py-1 p-0"
                                        href="{{ route('partner.dashboard') }}"
                                        style="border-bottom: 1px #ffffff dotted">Partner Dashboard</a>
                                @else
                                    <a class="dropdown-item text-white px-3 py-1 p-0"
                                        href="{{ route('partner.login') }}"
                                        style="border-bottom: 1px #ffffff dotted">Partner</a>
                                @endif
                                {{-- <a class="dropdown-item text-white" href="#">Client</a>
                                <a class="dropdown-item text-white" href="#">Partner</a> --}}
                            </div>
                        </div>
                        <!-- Support Top Btn -->
                        <div class="dropdown">
                            <button class=" btn text-white dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="z-index: 9999;"> Support </button>
                            <div class="dropdown-menu dropdown-items_drop" aria-labelledby="dropdownMenuButton"
                                style="z-index: 9999;background: #ae0a46 !important; margin-top: 5px;">
                                <a class="dropdown-item text-white" href="#">On Call Support</a>
                                <a class="dropdown-item text-white" href="#">Web Support Assistance</a>
                            </div>
                        </div>
                        <button class="btn text-white add_cart p-0">
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
</section>
<!-- Header Top End -->
<section>
    <header class="navbar_menus sticky-top shadow-lg">
        <nav class="navbar navbar-expand-lg navbar-dark py-0">
            <div class="container-fluid">
                <div class="container p-0">
                    <div class="row d-flex align-items-center">
                        <a class="navbar-brand d-lg-none" href="{{ route('homepage') }}">
                            <img src="{{ !file_exists($setting->logo) ? url('upload/logoimage/' . $setting->logo) : url('upload/no_image.jpg') }}"
                                alt="Ngen It" width="100px" height="45px">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <a class="navbar-brand d-sm-none d-md-block" href="{{ route('homepage') }}">
                            <img src="{{ !file_exists($setting->logo) ? url('upload/logoimage/' . $setting->logo) : url('upload/no_image.jpg') }}"
                                alt="Ngen It" width="100px" height="50px">
                        </a>
                        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li class="nav-item dropdown position-static">
                                <a class="nav-link dropdown-toggle px-3" href="#" id="navbarScrollingDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px !important;">
                                    Our Solution
                                </a>
                                <div class="dropdown-menu w-100" aria-labelledby="navbarScrollingDropdown" style="margin: 0px !important;">
                                    <div class="container">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                {{-- <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Out</span>Comes</strong></p> --}}
                                                <a class="dropdown-item" href="{{ route('software.info') }}">Software <i
                                                        class="fa-solid fa-chevron-right"></i></a>
                                                <a class="dropdown-item" href="{{ route('hardware.info') }}">Hardware <i
                                                        class="fa-solid fa-chevron-right"></i></a>
                                                <a class="dropdown-item" href="#">Training <i
                                                        class="fa-solid fa-chevron-right"></i></a>
                                                <a class="dropdown-item" href="#">Books <i
                                                        class="fa-solid fa-chevron-right"></i></a>
                                            </div>
                                            <div class="col-lg-4">
                                                <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Indu</span>stries</strong></p>
                                                @if ($industrys)
                                                    @foreach ($industrys as $item)
                                                        <a class="dropdown-item"
                                                            href="{{ route('industry.details', $item->id) }}">
                                                            {{ App\Models\Admin\Industry::where('id', $item->industry_id)->value('title') }}
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="col-lg-4">
                                                <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Sol</span>ution</strong></p>
                                                @if ($solutions)
                                                    @foreach ($solutions as $item)
                                                        <a class="dropdown-item"
                                                            href="{{ route('solution.details', $item->id) }}">
                                                            {{ $item->name }}
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown position-static">
                                <a class="nav-link dropdown-toggle px-3" href="#" id="navbarScrollingDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px !important;">
                                    Tech Content
                                </a>
                                <div class="dropdown-menu w-100" aria-labelledby="navbarScrollingDropdown" style="margin: 0px !important; padding:0px !important">
                                    <div class="container">
                                        <div class="row">
                                            <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Fea</span>tured Content</strong></p>
                                            @if ($features)
                                                @foreach ($features as $item)
                                                    <div class="col-md-5 p-3">
                                                        <a class="text-black"
                                                            href="{{ route('feature.details', $item->id) }}">
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{ asset('storage/' . $item->image) }}"
                                                                    alt=""  style="width:150px; height:80px;">
                                                                <div style="margin-left: 20px;" class="feature_text">
                                                                    <p class="m-0 font-weight-bold">
                                                                        {{ Str::limit($item->title, 100) }}...</p>
                                                                    <p class="m-0 font-weight-lighter content_date">
                                                                        {{ $item->badge }} /
                                                                        {{ $item->created_at->format('d-m-Y') }}</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">

                                                @foreach ($blogs as $item)
                                                    <a class="text-black" href="{{route('blog.details',$item->id)}}">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <img src="{{ asset('storage/requestImg/' . $item->image) }}"
                                                                alt=""  style="width:150px; height:80px;">
                                                            <div style="margin-left: 20px;" class="feature_text">
                                                                <p class="m-0 font-weight-bold">{{ Str::limit($item->title, 55) }}...</p>
                                                                <p class="m-0 font-weight-lighter content_date">
                                                                    {{$item->badge}} / {{$item->created_at->format('d-m-Y')}}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                @endforeach
                                            </div>
                                            <div class="col-lg-4">
                                                @foreach ($clientstorys as $item)
                                                <a class="text-black" href="{{route('story.details',$item->id)}}">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <img src="{{ asset('storage/requestImg/' . $item->image) }}"
                                                            alt=""  style="width:150px; height:80px;">
                                                        <div style="margin-left: 20px;" class="feature_text">
                                                            <p class="m-0 font-weight-bold">{{ Str::limit($item->title, 55) }}...</p>
                                                            <p class="m-0 font-weight-lighter content_date">
                                                                {{$item->badge}} / {{$item->created_at->format('d-m-Y')}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                            </div>
                                            <div class="col-lg-4">
                                                @foreach ($techglossys as $item)
                                                <a class="text-black" href="{{route('techglossy.details',$item->id)}}">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <img src="{{ asset('storage/requestImg/' . $item->image) }}"
                                                            alt=""  style="width:150px; height:80px;">
                                                        <div style="margin-left: 20px;" class="feature_text">
                                                            <p class="m-0 font-weight-bold">{{ Str::limit($item->title, 55) }}...</p>
                                                            <p class="m-0 font-weight-lighter content_date">
                                                                {{$item->badge}} / {{$item->created_at->format('d-m-Y')}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container" style="background-color: #f7f6f5">

                                        <div class="row p-2">
                                            <div class="col-lg-4 col-md-12">
                                                <a class="text-black fw-bold" href="{{route('all.blog')}}">View all Blogs</a>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <a class="text-black fw-bold" href="{{route('all.story')}}">View all Story</a>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <a class="text-black fw-bold" href="{{route('all.techglossy')}}">View all Techglossy</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown position-static">
                                <a class="nav-link dropdown-toggle px-3" href="#" id="navbarScrollingDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px !important;">
                                    Shop
                                </a>
                                <div></div>
                                <div class="dropdown-menu w-100" aria-labelledby="navbarScrollingDropdown" style="margin: 0px !important;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Sho</span>p By</strong></p>
                                                <a class="dropdown-item" href="{{ route('software.common') }}">Software
                                                    <i class="fa-solid fa-chevron-right"></i></a>
                                                <a class="dropdown-item" href="{{ route('hardware.common') }}">Hardware
                                                    <i class="fa-solid fa-chevron-right"></i></a>
                                                <a class="dropdown-item" href="#">Training
                                                    <i class="fa-solid fa-chevron-right"></i></a>
                                                <a class="dropdown-item" href="#">Books <i
                                                        class="fa-solid fa-chevron-right"></i></a>
                                            </div>
                                            <div class="col-lg-4">
                                                    <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Sho</span>p By Category</strong></p>
                                                <div class="row">
                                                    @foreach ($categorys as $item)
                                                        <div class="col-lg-6">
                                                            <a class="text-black py-2" href="{{ route('category.html', $item->slug) }}" style="font-size:14px;">
                                                                {{ $item->title }}
                                                                <i class="fa-solid fa-angle-right"></i></a>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                    <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Sho</span>p By Brand</strong></p>
                                                <div class="row">
                                                    @foreach ($brands as $item)
                                                        <div class="col-lg-6">
                                                            <a class="text-black py-2"
                                                            href="{{ route('brandpage.html', App\Models\Admin\Brand::where('id', $item->brand_id)->value('slug')) }}" style="font-size:14px;">
                                                            {{ ucfirst(App\Models\Admin\Brand::where('id', $item->brand_id)->value('title')) }}
                                                            <i class="fa-solid fa-angle-right"></i></a>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                            <div class="col-lg-2">
                                                <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Exp</span>lore Our Deals</strong></p>
                                                <a class="dropdown-item" href="{{ route('tech.deals') }}">Technology
                                                    deals <i class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <a class="dropdown-item" href="{{ route('refurbished') }}">Certified
                                                    refurbished <i class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown position-static">
                                <a class="nav-link dropdown-toggle px-3" href="#" id="navbarScrollingDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px !important;">
                                    Connect Us
                                </a>
                                <div class="dropdown-menu w-100" aria-labelledby="navbarScrollingDropdown" style="margin: 0px !important;">
                                    <div class="container">

                                        <div class="row">
                                            <div class="col-lg-6 px-2 pr-2">
                                                <span class="text-uppercase menu_title "></span>
                                                <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Fea</span>tured Events</strong></p>
                                                @foreach ($feature_events as $item)
                                                    <a class="text-black" href="{{route('techglossy.details',$item->id)}}">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <img class="img-fluid"
                                                                src="{{asset('storage/'.$item->image)}}"
                                                                alt="" style="width:150px; height:80px;">

                                                            <div class="pl-3">
                                                                <p class="m-0 font-weight-bold">
                                                                    {{ Str::limit($item->title, 100) }}...</p>
                                                                <p class="m-0 font-weight-lighter content_date">
                                                                    {{ $item->badge }} /
                                                                    {{ $item->created_at->format('d-m-Y') }}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                @endforeach

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Con</span>tact us</strong></p>
                                                        <a class="dropdown-item" href="{{ route('contact') }}">Contact US
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                        {{-- <a class="dropdown-item" href="#">NGen It <i
                                                                class="fa-solid fa-chevron-right"></i>
                                                        </a> --}}
                                                        <a class="dropdown-item" href="{{ route('support') }}">Support <i
                                                                class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                        <a class="dropdown-item" href="#">Location <i
                                                                class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                        <a class="dropdown-item" href="{{route('portfolio')}}">Our Portfolio <i
                                                                class="fa-solid fa-chevron-right"></i>
                                                        </a>

                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Car</span>eer With Us</strong></p>
                                                        <a class="dropdown-item" href="{{ route('job.openings') }}">Join Our Team
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('job.registration') }}">Job
                                                            Registration<i class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">Par</span>tner With Us</strong></p>
                                                        <a class="dropdown-item" href="#">Investor <i
                                                                class="fa-solid fa-chevron-right"></i>
                                                        </a>
                                                        <a class="dropdown-item" href="#">News Room <i
                                                                class="fa-solid fa-chevron-right"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <p class="mt-2 mr-2"><strong><span style="border-top: 2px solid #ae0a46 !important;">St</span>ay
                                                            Connected</strong></p>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <ul class="sub_menu_footer_icon">
                                                            <li><a class="text-black" href="{{ $setting->facebook }}"><i
                                                                        class="h4 fa-brands fa-square-facebook"></i></a></li>
                                                            <li><a class="text-black" href="{{ $setting->linked_in }}"></a><i
                                                                    class="h4 fa-brands fa-linkedin"></i></a></li>
                                                            <li><a class="text-black" href="{{ $setting->twitter }}"></a><i
                                                                    class="h4 fa-brands fa-square-twitter"></i></a></li>
                                                            <li><a class="text-black" href="{{ $setting->youtube }}"><i
                                                                        class="h4 fa-brands fa-youtube"></i></a></li>
                                                            <li><a class="text-black" href="{{ $setting->instagram }}"></a><i
                                                                    class="h4 fa-brands fa-square-instagram"></i></a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </li>

                        </ul>
                        <form method="post" action="{{ route('product.search') }}">
                            @csrf
                            <div class="search-bar">
                                <input type="text" id="search_text" name="search" class="textbox"
                                    placeholder="type here..." />
                                <a class="search-btn" href="#" type="submit">
                                    <p><i class="fas fa-search text-white"
                                            style="font-size: 15px; margin: 0px 0px 7px;"></i>
                                    </p>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</section>


{{-- Sticky Menu Start --}}
<script>
    const navEl = document.querySelector('.navbar_menus')
    const navLink = document.querySelector('.navLink')

    window.addEventListener('scroll', () => {
        if (window.scrollY >= 56) {
            navEl.classList.add('navbar_scrolled');
        } else if (window.scrollY < 56) {
            navEl.classList.remove('navbar_scrolled')
        }
    })
</script>
{{-- Sticky Menu End --}}
