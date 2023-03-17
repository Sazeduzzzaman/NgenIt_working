@php
    $setting = App\Models\Admin\Setting::first();
    $industrys = App\Models\Admin\IndustryPage::orderBy('id', 'Desc')
        ->limit(10)
        ->get();
    $features = App\Models\Admin\Feature::inRandomOrder()
        ->select('features.id' , 'features.title' , 'features.image', 'features.created_at', 'features.badge')
        ->limit(2)
        ->get();
    $solutions = App\Models\Admin\SolutionDetail::orderBy('id', 'Desc')
        ->limit(10)
        ->get();
    $brands = App\Models\Admin\BrandPage::orderBy('id', 'Desc')
        ->limit(10)
        ->get();
    $categorys = App\Models\Admin\Category::orderBy('id', 'DESC')
        ->limit(10)
        ->get();
    $blogs = App\Models\Admin\Blog::where('featured' , 1)->inRandomOrder()
        ->select('blogs.id', 'blogs.badge', 'blogs.title', 'blogs.created_at','blogs.created_by')
        ->limit(2)
        ->get();
    $clientstorys = App\Models\Admin\ClientStory::where('featured' , 1)->inRandomOrder()
        ->select('client_stories.id', 'client_stories.badge', 'client_stories.title', 'client_stories.created_at','client_stories.created_by')
        ->limit(2)
        ->get();
    $techglossys = App\Models\Admin\TechGlossy::where('featured' , 1)->inRandomOrder()
        ->select('tech_glossies.id', 'tech_glossies.badge', 'tech_glossies.title', 'tech_glossies.created_at','tech_glossies.created_by')
        ->limit(2)
        ->get();
    $jobs = App\Models\Admin\Job::all();
@endphp {{-- Custom Header Start --}}



{{-- New Header Start --}}
<!-- Header Top Start -->
<section>
    <div class="container-fluid navbar_top d-none d-md-block">
        <div class="container">
            <div class="row p-0">
                <div class="d-flex text-white justify-content-between align-items-center p-0">
                    <div style="font-family: 'Poppins', sans-serif !important;"><strong>{{date('Y')}} NGen It</strong></div>
                    <div>{{$setting->email2}}</div>
                    <div class="d-flex justify-content-end">
                        <!-- Login Top Btn -->
                        <div class="dropdown ml-2">
                            <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="z-index: 9999; "> Sign In </button>
                            <div class="dropdown-menu dropdown-items_drop" aria-labelledby="dropdownMenuButton"
                                style="z-index: 9999;background: #ae0a46 !important; margin-top: 5px;">
                                @if (Auth::guard('client')->user())
                            <a class="dropdown-item text-white px-3 py-1 p-0" href="{{ route('client.dashboard') }}"
                                style="border-bottom: 1px #ffffff dotted">Client Dashboard</a>
                        @else
                            <a class="dropdown-item text-white px-3 py-1 p-0" href="{{ route('client.login') }}"
                                style="border-bottom: 1px #ffffff dotted">Client</a>
                        @endif

                        @if (Auth::guard('partner')->user())
                            <a class="dropdown-item text-white px-3 py-1 p-0" href="{{ route('partner.dashboard') }}"
                                style="border-bottom: 1px #ffffff dotted">Partner Dashboard</a>
                        @else
                            <a class="dropdown-item text-white px-3 py-1 p-0" href="{{ route('partner.login') }}"
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
<!-- Header Sticky Start -->
<header class="navbar_menus sticky-top shadow-lg">
    <nav class=" navbar navbar-expand-lg navbar-dark">
        <div class="container">
            {{-- <a  href="https://bootstrapcreative.com/">
                  <img src="images/logo.png" alt="" />
              </a> --}}
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="{{ !file_exists($setting->logo) ? url('upload/logoimage/' . $setting->logo) : url('upload/no_image.jpg') }}"
                    alt="Ngen It" height="47px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link-text" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Our Solution </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        {{-- <span class="text-uppercase menu_title ">Outcomes</span> --}}
                                        <ul class="nav flex-column pt-2">
                                            <li class="nav-item p-0">
                                                <a class="nav-link active" href="{{route('software.info')}}">Software <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="{{route('hardware.info')}}">Hardware <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="#">Training <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item p-0">
                                                <a class="nav-link" href="#">Books <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase menu_title ">Our expertise</span>
                                        <ul class="nav flex-column pt-2 pt-2">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Product <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Training <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Books <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Solution <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase menu_title">Our services</span>
                                        <ul class="nav flex-column pt-2">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Product <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Training <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Books <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Solution <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase menu_title">Industries</span>
                                        <ul class="nav flex-column pt-2">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Product <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Training <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Books <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link-text" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tech Content </a>
                        <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                            <div class="container-fluid" style="background-color: #f7f6f5 !important;">
                                <div class="container">
                                    <div class="row d-flex align-items-center justify-content-center p-0">
                                        <div>
                                            <h4>Feature Content</h4>
                                        </div>
                                        @if ($features)
                                            @foreach ($features as $item)
                                                <div class="col-md-5 p-3">
                                                    <a class="text-black" href="{{ route('feature.details', $item->id) }}">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('storage/'.$item->image)}}" alt="" style="width: 130px;">
                                                            <div style="margin-left: 20px;" class="feature_text">
                                                                <p class="m-0 font-weight-bold">{{ Str::limit($item->title, 100) }}...</p>
                                                                <p class="m-0 font-weight-lighter content_date">{{$item->badge}} / {{($item->created_at)->format('d-m-Y')}}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif

                                        <div class="col-md-2">
                                            <a class="c-button c-button--primary c-button--small u-margin-bot-small  c-header-nav__link"
                                                href="">
                                                <span class="c-header-nav__text">View all content</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid mt-2 bg-white">
                                <div class="container">

                                    <div class="row">
                                        <div class="col-lg-4">
                                           @if ($blogs)
                                             @foreach ($blogs as $item)
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://www.insight.com/content/dam/insight-web/en_US/article-images/menu/the-path-to-digital-transformation--where-leaders-stand-in-2023.jpg"
                                                            alt="" style="width: 130px;">
                                                        <div style="margin-left: 20px;" class="feature_text">
                                                            <p class="m-0 font-weight-bold">Lorem ipsum dolor, sit amet
                                                                consectetur sit amet</p>
                                                            <p class="m-0 font-weight-lighter">Artistic 23/05/01</p>
                                                        </div>
                                                    </div>
                                                </div>
                                             @endforeach
                                           @endif

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="https://www.insight.com/content/dam/insight-web/en_US/article-images/menu/the-path-to-digital-transformation--where-leaders-stand-in-2023.jpg"
                                                        alt="" style="width: 130px;">
                                                    <div style="margin-left: 20px;" class="feature_text">
                                                        <p class="m-0 font-weight-bold">Lorem ipsum dolor, sit amet
                                                            consectetur sit amet</p>
                                                        <p class="m-0 font-weight-lighter">Artistic 23/05/01</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="https://www.insight.com/content/dam/insight-web/en_US/article-images/menu/the-path-to-digital-transformation--where-leaders-stand-in-2023.jpg"
                                                        alt="" style="width: 130px;">
                                                    <div style="margin-left: 20px;" class="feature_text">
                                                        <p class="m-0 font-weight-bold">Lorem ipsum dolor, sit amet
                                                            consectetur sit amet</p>
                                                        <p class="m-0 font-weight-lighter">Artistic 23/05/01</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid" style="background-color: #f7f6f5 !important;">
                                <div class="container">
                                    <div class="row m-0 d-flex align-items-center">
                                        <div class="col-lg-4 m-0 p-2">
                                            <div>
                                                <a href="">
                                                    <p class="font-weight-bold text-black m-0 view_all">View All</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 m-0 p-2">
                                            <div>
                                                <a href="">
                                                    <p class="font-weight-bold text-black m-0 view_all">View All</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 m-0 p-2">
                                            <div>
                                                <a href="">
                                                    <p class="font-weight-bold text-black m-0 view_all">View All</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link-text" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Shop </a>
                        <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3  ">
                                        <div class="mx-auto" style="width: 8rem">
                                            <span class="text-uppercase menu_title ">Shop</span>
                                            <ul class="nav flex-column pt-2">
                                                <li class="nav-item p-0">
                                                    <a class="nav-link active" href="{{route('software.common')}}">Software <i
                                                            class="fa-solid fa-chevron-right"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="{{route('hardware.common')}}">Hardware <i
                                                            class="fa-solid fa-chevron-right"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="#">Training <i
                                                            class="fa-solid fa-chevron-right"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="#">Books <i
                                                            class="fa-solid fa-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase menu_title ">Shop By Category</span>
                                        <ul class="nav flex-column pt-2">
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Category 1 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <a class="nav-link active ml-2" href="#">Category 2 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Category 3 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <a class="nav-link active ml-2" href="#">Category 2 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Category 5 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <a class="nav-link active ml-2" href="#">Category 6 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Category 7 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <a class="nav-link active ml-2" href="#">Category 8 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3">
                                        <span class="text-uppercase menu_title">Shop By Brand</span>
                                        <ul class="nav flex-column pt-2">
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Brand 1 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <a class="nav-link active ml-2" href="#">Brand 2 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Brand 3 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <a class="nav-link active ml-2" href="#">Brand 2 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Brand 5 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <a class="nav-link active ml-2" href="#">Brand 6 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Brand 7 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <a class="nav-link active ml-2" href="#">Brand 8 <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-3 mb-0" style="background-color: #f7f6f5 !important;">
                                        <span class="text-uppercase menu_title">Explore Our Deals</span>
                                        <ul class="nav flex-column pt-2">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">Product <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Training <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Books <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link-text" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Connect Us </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <span class="text-uppercase menu_title text-black ">Feature Event</span>
                                        <div class="d-flex align-items-center pt-2">
                                            <img src="https://www.insight.com/content/dam/insight-web/en_US/article-images/menu/the-path-to-digital-transformation--where-leaders-stand-in-2023.jpg"
                                                alt="" style="width: 130px;">
                                            <div style="margin-left: 20px;" class="feature_text">
                                                <p class="m-0 font-weight-bold">Lorem ipsum dolor, sit amet consectetur
                                                    sit amet ipsum dolor ipsum dolor</p>
                                                <p class="m-0 font-weight-lighter">Artistic 23/05/01</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center pt-3">
                                            <img src="https://www.insight.com/content/dam/insight-web/en_US/article-images/menu/the-path-to-digital-transformation--where-leaders-stand-in-2023.jpg"
                                                alt="" style="width: 130px;">
                                            <div style="margin-left: 20px;" class="feature_text">
                                                <p class="m-0 font-weight-bold">Lorem ipsum dolor, sit amet consectetur
                                                    sit amet ipsum dolor ipsum dolor</p>
                                                <p class="m-0 font-weight-lighter">Artistic 23/05/01</p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a class="c-button  c-button--primary c-button--small u-margin-bot-small  c-header-nav__link"
                                                href="/en_US/content-and-resources/hub.html">
                                                <span class="c-header-nav__text">View all content</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-2">
                                        <a href="">
                                            <span class="text-uppercase menu_title text-black">Contact us</span>
                                        </a>
                                        <ul class="nav flex-column pt-2">
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Talk To a Specialist <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">NGen It <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Chat With Us <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Location <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-2">
                                        <span class="text-uppercase menu_title">Career With Us</span>
                                        <ul class="nav flex-column pt-2">
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Join Our Team <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                    <div class="col-md-2">
                                        <span class="text-uppercase menu_title">Partner With Us</span>
                                        <ul class="nav flex-column pt-2">
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">Investor <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item d-flex">
                                                <a class="nav-link active" href="#">News Room <i
                                                        class="fa-solid fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.col-md-4  -->
                                </div>
                            </div>
                            <!--  /.container  -->
                        </div>
                    </li>
                </ul>
                 <!--Search-->
            {{-- <div class="search_menu display_none" id="Search_menu">
                <div class="header_search">
                    <div class="row">
                        <form method="post" action="{{ route('product.search') }}">
                            @csrf
                            <input type="search" placeholder="What can we help you find?" id="search_text"
                                name="search" onchange="this.form.submit()">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <div id="searchProducts"></div>
                        </form>
                    </div>
                </div>
            </div> --}}
            <form method="post" action="{{ route('product.search') }}">
                @csrf
                <div class="search-bar">
                  <input type="search" class="search_textbox" placeholder="Type to Search..." name="search"  id="search_text"/>
                  <button class="search-btn" type="submit">
                    <p><i class="fas fa-search"></i></p>
                  </button>
                </div>
            </form>




            </div>
        </div>
        <div id="searchProducts"></div>
            </form>
    </nav>
</header>
<!-- Header Sticky End -->
{{-- New Header End --}}

<style>
    .search-area {
        position: relative;
    }

    #searchProducts {
        position: absolute;
        top: 100%;
        left: 0;
        right: 10px;
        width: 100%;
        background: #ffffff;
        z-index: 999;
        border-radius: 8px;
        margin-top: 5px;
    }
</style>

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

    window.addEventListener('scroll', () => {
        if (window.scrollY >= 56) {
            navEl.classList.add('navbar_scrolled');
        } else if (window.scrollY < 56) {
            navEl.classList.remove('navbar_scrolled')
        }
    })
</script>
{{-- Sticky Menu End --}}
